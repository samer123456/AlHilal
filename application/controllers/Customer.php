<?php
defined('BASEPATH') or exit('No direct script access allowed');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class Customer extends CI_Controller
{
	public function index()
	{
		$data['title'] = "Create Code | sanabelamira";
		$data['logo'] = $this->Database_Model->getContent('logo');
		$data['home'] = $this->Database_Model->getContentWithId(3, 'nav_menu');
		$data['customer_code'] = $this->Database_Model->getContentWithId(3, 'customer_code_page');
		$data['footer'] = $this->Database_Model->getContentWithId(3, 'footer');
		$this->load->view('customer_code', $data);
	}

	public function tr()
	{
		$data['title'] = "Kod oluştur | sanabelamira";
		$data['logo'] = $this->Database_Model->getContent('logo');
		$data['home'] = $this->Database_Model->getContentWithId(2, 'nav_menu');
		$data['customer_code'] = $this->Database_Model->getContentWithId(2, 'customer_code_page');
		$data['footer'] = $this->Database_Model->getContentWithId(2, 'footer');
		$this->load->view('customer_code', $data);
	}

	public function ar()
	{
		$data['title'] = "كود العميل | sanabelamira";
		$data['logo'] = $this->Database_Model->getContent('logo');
		$data['home'] = $this->Database_Model->getContentWithId(1, 'nav_menu');
		$data['customer_code'] = $this->Database_Model->getContentWithId(1, 'customer_code_page');
		$data['footer'] = $this->Database_Model->getContentWithId(1, 'footer');
		$this->load->view('customer_code', $data);
	}

public function createCode($id)
	{
		$recaptchaResponse = trim($this->input->post('g-recaptcha-response'));

		$userIp=$this->input->ip_address();

		$secret='6Lert5YaAAAAANrpQF52rVFCcZOS9_iChdJr2RAt';

		$credential = array(
			'secret' => $secret,
			'response' => $this->input->post('g-recaptcha-response')
		);

		$verify = curl_init();
		curl_setopt($verify, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
		curl_setopt($verify, CURLOPT_POST, true);
		curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($credential));
		curl_setopt($verify, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($verify);

		$status= json_decode($response, true);

		if($status['success']){
			if($id==1){
				$data['home'] = $this->Database_Model->getContentWithId(1, 'nav_menu');
				$data['footer'] = $this->Database_Model->getContentWithId(1, 'footer');
				$data['title'] = "كود العميل | sanabelamira";
			}elseif($id==2){
				$data['home'] = $this->Database_Model->getContentWithId(2, 'nav_menu');
				$data['footer'] = $this->Database_Model->getContentWithId(2, 'footer');
				$data['title'] = "Müşteri Kodu | sanabelamira";
			}else{
				$data['home'] = $this->Database_Model->getContentWithId(3, 'nav_menu');
				$data['footer'] = $this->Database_Model->getContentWithId(3, 'footer');
				$data['title'] = "Customer Code | sanabelamira";
			}

			$data['logo'] = $this->Database_Model->getContent('logo');
			$email = $this->input->post('email');
			$query = $this->db->query("SELECT email FROM customer WHERE email='$email'");
			if ($query->num_rows()) {
				$this->session->set_flashdata("message", "email used");
				redirect(base_url() . 'customer/');
			} else {
				$query = $this->db->query('SELECT * FROM code');
				foreach ($query->result() as $row) {
					$last_code = $row->last_code;
				}

				$veri = array(
					'email' => $this->input->post('email'),
					'phone' => $this->input->post('phone'),
					'whatsapp' => $this->input->post('whatsapp'),
					'customer_code' => $last_code
				);
				if ($this->db->insert('customer', $veri)) {
					$this->db->query('UPDATE code SET last_code=last_code+1');
					$data['customer_code'] = $veri['customer_code'];
                    
                    $c_email = $veri['email'];
                    $c_phone = $veri['phone'];
                    $c_whatsapp = $veri['whatsapp'];
                    $c_customer_code = $veri['customer_code'];
                     
					require 'PHPMailer/src/Exception.php';
					require 'PHPMailer/src/PHPMailer.php';
					require 'PHPMailer/src/SMTP.php';

					$mail = new PHPMailer(true);
					$mail->isSMTP();
					$mail->SMTPAuth = true;
					$mail->SMTPSecure = 'tls';
					$mail->Port = 587;
            		$mail->Host = 'mail.sanabelamira.com';
            		$mail->Username = 'info@sanabelamira.com';
            		$mail->Password = 'e4jmRew4xEh78*';
					$mail->setFrom("info@sanabelamira.com", "sanabelamira Company");
					$mail->addAddress('info@sanabelamira.com', 'sanabelamira Company');
					$mail->isHTML(true);
					$mail->CharSet = 'utf-8';
					$mail->Subject = "Customer Code";
					$mail->Body = "Customer Email: $c_email<br>
									Customer Phone: $c_phone<br>
									Customer Whatsapp: $c_whatsapp<br>
									Customer Code: $c_customer_code";
					$mail->send();

					$this->load->view('customer_code_result', $data);
				} else {
					echo "Error";
				}

			}
		}else{
			$this->session->set_flashdata('success', 'Sorry Google Recaptcha Unsuccessful!!');
			redirect(base_url().'customer/');
		}




	}
}
