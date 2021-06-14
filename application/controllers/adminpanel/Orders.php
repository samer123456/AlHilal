<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Orders extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata("admin_session"))
			redirect(base_url().'adminpanel/signin');

	}

	function index()
	{
		$data['logo'] = $this->Database_Model->getContent('logo');
		$data['message'] = $this->Database_Model->getContent('message');
		$data['numberMsg'] = $this->db->query('SELECT id FROM message')->num_rows();
		$data['numberUnMsg'] = $this->db->query('SELECT id FROM message WHERE status=0')->num_rows();
		$data['unreadMessage'] = $this->Database_Model->getContentId(0,'message','status');
		$data['orders'] = $this->Database_Model->getContent('eformdata');
		$this->load->view('admin/orders', $data);
	}

	// function getUnreadMessage()
	// {
	// 	$data['logo'] = $this->Database_Model->getContent('logo');
	// 	$data['unreadMessage'] = $this->Database_Model->getContentId(0,'message','status');
	// 	$data['numberMsg'] = $this->db->query('SELECT id FROM message')->num_rows();
	// 	$data['numberUnMsg'] = $this->db->query('SELECT id FROM message WHERE status=0')->num_rows();
	// 	$data['unreadMessage'] = $this->Database_Model->getContentId(0,'message','status');
	// 	$this->load->view('admin/unreadMessages', $data);
	// }

	function orderDetail($id)
	{
		$data['logo'] = $this->Database_Model->getContent('logo');
		$this->db->query("UPDATE message SET status='1' WHERE id=$id");
		$data['message'] = $this->Database_Model->getContentId($id, 'message', 'id');
		$data['numberMsg'] = $this->db->query('SELECT id FROM message')->num_rows();
		$data['numberUnMsg'] = $this->db->query('SELECT id FROM message WHERE status=0')->num_rows();
		$data['unreadMessage'] = $this->Database_Model->getContentId(0,'message','status');
		$data['orders'] = $this->Database_Model->getContentId($id,'eformdata','id');
		$this->load->view('admin/orderDetail', $data);
	}

	function deleteOrder($id)
	{
		$this->Database_Model->deleteWithId('eformdata', 'id', $id);
		redirect(base_url() . 'adminpanel/orders');
	}

	// public function answerMail($id)
	// {
	// 	require 'PHPMailer/src/Exception.php';
	// 	require 'PHPMailer/src/PHPMailer.php';
	// 	require 'PHPMailer/src/SMTP.php';

	// 	$query = $this->db->query("SELECT name,email,subject FROM message WHERE id = $id ");
	// 	$data['result'] = $query->result();
	// 	$emailAddress = $data['result'][0]->email;
	// 	$name = $data['result'][0]->name;
	// 	$subject = $data['result'][0]->subject;

	// 	$msg = $this->input->post('messageAnswer');

	// 	$mail = new PHPMailer(true);
	// 	//$mail->isSMTP();
	// 	$mail->SMTPAuth = true;
	// 	$mail->SMTPSecure = 'tls';
	//     $mail->Port = 587;
    //     $mail->Host = 'mail.sanabelamira.com';
    //     $mail->Username = 'info@sanabelamira.com';
    //     $mail->Password = 'H2HE$^Lc=tSS';
	// 	$mail->setFrom('info@sanabelamira.com', 'sanabelamira Company');
	// 	$mail->addAddress($emailAddress, $name);
	// 	$mail->isHTML(true);
	// 	$mail->CharSet = 'utf-8';
	// 	$mail->Subject = $subject;
	// 	$mail->Body = $msg;
	// 	if ($mail->send()) {
	// 		echo $this->session->set_flashdata('basarili', 'İşlem Başarılı');
	// 		redirect(base_url() . "adminpanel/message");
	// 	} else {
	// 		echo $this->session->set_flashdata('hata', 'Tekrar Deneyiniz');
	// 		redirect(base_url() . "adminpanel/message");
	// 	}
	// }
}
