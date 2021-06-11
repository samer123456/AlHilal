<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Service1 extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata("admin_session"))
			redirect(base_url() . 'adminpanel/signin');
	}

	public function index()
	{
		$data['logo'] = $this->Database_Model->getContent('logo');
		$data['service_ar'] = $this->Database_Model->getContentWithId(1, 'buyfromturkey');
		$data['service_tr'] = $this->Database_Model->getContentWithId(2, 'buyfromturkey');
		$data['service_en'] = $this->Database_Model->getContentWithId(3, 'buyfromturkey');
		$data['numberMsg'] = $this->db->query('SELECT id FROM message')->num_rows();
		$data['numberUnMsg'] = $this->db->query('SELECT id FROM message WHERE status=0')->num_rows();
		$data['unreadMessage'] = $this->Database_Model->getContentId(0, 'message', 'status');
		$this->load->view('admin/service1', $data);
	}

	function addService()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png|webp|jpeg';
		$config['max_size'] = 2000;
		$config['max_width'] = 2048;
		$config['max_height'] = 2048;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('image')) {
			//	$error = $this->upload->display_errors();
			//	$this->session->set_flashdata("mesaj", "Yüklemede Hata Oluştu :" . $error);
			redirect(base_url() . 'adminpanel/slider/');
		} else {
			for ($i = 1; $i < 4; $i++) {
				$upload_data = $this->upload->data();
				$data = array(
					'image' => $upload_data["file_name"],
					'lang' => $i
				);
				$this->db->insert("buyfromturkey", $data);
			}
			//$this->session->set_flashdata("sonuc", "Kaydetme İşlemi Başarı İle Gerçekleştirildi");
			redirect(base_url() . 'adminpanel/service1/');
		}
	}

	public function updateService($id)
	{
		$data = array(
			'title' => $this->input->post('title'),
			'info' => $this->input->post('info')
		);
		$this->Database_Model->updateWithId('buyfromturkey', $data, 'id', $id);
		redirect(base_url() . 'adminpanel/service1');
	}

	function loadImage($id)
	{
		$query = $this->db->query("SELECT * FROM service WHERE id= $id");
		$data["service_img"] = $query->result();
		$data["id"] = $id;
		$data['logo'] = $this->Database_Model->getContent('logo');
		$data['numberMsg'] = $this->db->query('SELECT id FROM message')->num_rows();
		$data['numberUnMsg'] = $this->db->query('SELECT id FROM message WHERE status=0')->num_rows();
		$data['unreadMessage'] = $this->Database_Model->getContentId(0, 'message', 'status');
		$this->load->view('admin/loadImageService1', $data);
	}

	public function updateServiceImage($id)
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png|webp|jpeg';
		$config['max_size'] = 2000;
		$config['max_width'] = 2048;
		$config['max_height'] = 2048;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('image')) {
			//	$error = $this->upload->display_errors();
			//	$this->session->set_flashdata("mesaj", "Yüklemede Hata Oluştu :" . $error);
			redirect(base_url() . 'adminpanel/slider/');
		} else {
			$upload_data = $this->upload->data();
			$data = array(
				'image' => $upload_data["file_name"]
			);
			$this->Database_Model->updateWithId('buyfromturkey', $data, 'id', $id);
			//$this->session->set_flashdata("sonuc", "Kaydetme İşlemi Başarı İle Gerçekleştirildi");
			redirect(base_url() . 'adminpanel/service1/');
		}
	}

	function deleteService($id)
	{
		$this->Database_Model->deleteWithId('buyfromturkey', 'id', $id);
		redirect(base_url() . 'adminpanel/service1');
	}
}
