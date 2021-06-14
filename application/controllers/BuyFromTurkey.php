
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BuyFromTurkey extends CI_Controller
{
	public function index()
	{
		$data['title'] = "Buy from Turkey | sanabelamira";
		$data['logo'] = $this->Database_Model->getContent('logo');
		$data['home'] = $this->Database_Model->getContentWithId(3, 'nav_menu');
		$data['description_slider'] = 'We are here to serve you';
		$data['buyFromTurkey'] = $this->Database_Model->getContentWithId(3, 'buyfromturkey');
		$data['buyFromTurkey1'] = $this->Database_Model->getContentWithId(3, 'buyfromturkey1');
		$data['buyFromTurkey2'] = $this->Database_Model->getContentWithId(3, 'buyfromturkey2');
		$data['translation'] = $this->Database_Model->getContentWithId(3, 'translation');
		$data['footer'] = $this->Database_Model->getContentWithId(3, 'footer');
		$this->load->view('buyFromTurkey', $data);
	}

	public function tr()
	{
		$data['title'] = "Türkiye'den Satın Al | sanabelamira";
		$data['logo'] = $this->Database_Model->getContent('logo');
		$data['home'] = $this->Database_Model->getContentWithId(2, 'nav_menu');
		$data['description_slider'] = 'Sizin için burdayiz';
		$data['buyFromTurkey'] = $this->Database_Model->getContentWithId(2, 'buyfromturkey');
		$data['buyFromTurkey1'] = $this->Database_Model->getContentWithId(2, 'buyfromturkey1');
		$data['buyFromTurkey2'] = $this->Database_Model->getContentWithId(2, 'buyfromturkey2');
		$data['translation'] = $this->Database_Model->getContentWithId(2, 'translation');
		$data['footer'] = $this->Database_Model->getContentWithId(2, 'footer');
		$this->load->view('buyFromTurkey', $data);
	}

	public function ar()
	{
		$data['title'] = "اشتر من تركيا | sanabelamira";
		$data['logo'] = $this->Database_Model->getContent('logo');
		$data['home'] = $this->Database_Model->getContentWithId(1, 'nav_menu');
		$data['description_slider'] = 'نحن هنا لخدمتكم';
		$data['buyFromTurkey'] = $this->Database_Model->getContentWithId(1, 'buyfromturkey');
		$data['buyFromTurkey1'] = $this->Database_Model->getContentWithId(1, 'buyfromturkey1');
		$data['buyFromTurkey2'] = $this->Database_Model->getContentWithId(1, 'buyfromturkey2');
		$data['translation'] = $this->Database_Model->getContentWithId(1, 'translation');
		$data['footer'] = $this->Database_Model->getContentWithId(1, 'footer');
		$this->load->view('buyFromTurkey', $data);
	}
	public function sendOrderDetails()
	{
		// require 'PHPMailer/src/Exception.php';
		// require 'PHPMailer/src/PHPMailer.php';
		// require 'PHPMailer/src/SMTP.php';

		$data['name'] = $this->input->post('name');
		$data['email'] = $this->input->post('email');
		$data['phone'] = $this->input->post('phone');
		$data['orderNo'] = $this->input->post('orderNo');
		$data['productLink'] = $this->input->post('productLink');
		$data['detailedCustomerAddress'] = $this->input->post('detailedCustomerAddress');
		$data['shippingType'] = $this->input->post('shippingType');


		// $mail = new PHPMailer(true);
		// //$mail->isSMTP();
		// $mail->SMTPAuth = true;
		// $mail->SMTPSecure = 'tls';
		// $mail->Port = 587;
		// $mail->Host = 'mail.sanabelamira.com';
		// $mail->Username = 'info@sanabelamira.com';
		// $mail->Password = 'e4jmRew4xEh78*';
		// $mail->setFrom($data['email'], $data['name']);
		// $mail->addAddress('info@sanabelamira.com', 'sanabelamira Company');
		// $mail->isHTML(true);
		// $mail->CharSet = 'utf-8';
		// $mail->Subject = $data['subject'];
		// $mail->Body = $data['message'];

		// if ($mail->send()) {
		// 	$data = array(
		// 		'name' => $this->input->post('name'),
		// 		'email' => $this->input->post('email'),
		// 		'subject' => $this->input->post('subject'),
		// 		'message' => $this->input->post('message'),
		// 		'ip' => $_SERVER['REMOTE_ADDR']
		// 	);
		$this->db->insert("eformdata", $data);
		$this->session->set_flashdata('success', 'your order has been sent');
		redirect(base_url() . 'BuyFromTurkey');
		// } else {
		// 	$this->session->set_flashdata('success', 'Message could not be sent');
		// 	redirect(base_url() . 'contact');
		// }
		//redirect(base_url() . 'BuyFromTurkey');
	}
}
