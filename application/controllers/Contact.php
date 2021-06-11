<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Contact extends CI_Controller
{
	public function index()
	{
		$data['title'] = "Contact Us | sanabelamira";
		$data['logo'] = $this->Database_Model->getContent('logo');
		$data['home'] = $this->Database_Model->getContentWithId(3, 'nav_menu');
		$data['contact'] = $this->Database_Model->getContentWithId(3, 'contact');
		$data['footer'] = $this->Database_Model->getContentWithId(3, 'footer');
		$this->load->view('contact', $data);
	}

	public function tr()
	{
		$data['title'] = "Bize Yazın | sanabelamira";
		$data['logo'] = $this->Database_Model->getContent('logo');
		$data['home'] = $this->Database_Model->getContentWithId(2, 'nav_menu');
		$data['contact'] = $this->Database_Model->getContentWithId(2, 'contact');
		$data['footer'] = $this->Database_Model->getContentWithId(2, 'footer');
		$this->load->view('contact', $data);
	}

	public function ar()
	{
		$data['title'] = "اتصل بنا | sanabelamira";
		$data['logo'] = $this->Database_Model->getContent('logo');
		$data['home'] = $this->Database_Model->getContentWithId(1, 'nav_menu');
		$data['contact'] = $this->Database_Model->getContentWithId(1, 'contact');
		$data['footer'] = $this->Database_Model->getContentWithId(1, 'footer');
		$this->load->view('contact', $data);
	}

	public function sendMessage()
	{
		require 'PHPMailer/src/Exception.php';
		require 'PHPMailer/src/PHPMailer.php';
		require 'PHPMailer/src/SMTP.php';

		$data['name'] = $this->input->post('name');
		$data['email'] = $this->input->post('email');
		$data['subject'] = $this->input->post('subject');
		$data['message'] = $this->input->post('message');

		$mail = new PHPMailer(true);
		$mail->isSMTP();
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = 'tls';
		$mail->Port = 587;
		$mail->Host = 'mail.isanabelamiracompany.com';
		$mail->Username = 'info@sanabelamiracompany.com';
		$mail->Password = 'rn_*9JQ1C{N3';
		$mail->setFrom($data['email'], $data['name']);
		$mail->addAddress('info@sanabelamiracompany.com', 'sanabelamira Company');
		$mail->isHTML(true);
		$mail->CharSet = 'utf-8';
		$mail->Subject = $data['subject'];
		$mail->Body = $data['message'];

		if ($mail->send()) {
			$data = array(
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'subject' => $this->input->post('subject'),
				'message' => $this->input->post('message'),
				'ip' => $_SERVER['REMOTE_ADDR']
			);
			$this->db->insert("message", $data);
			$this->session->set_flashdata('success', 'Message has been sent');
			redirect(base_url() . 'contact');
		} else {
			$this->session->set_flashdata('success', 'Message could not be sent');
			redirect(base_url() . 'contact');
		}
		redirect(base_url() . 'contact');
	}
}
