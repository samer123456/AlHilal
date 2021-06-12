<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
	public function index()
	{
		$data['logo'] = $this->Database_Model->getContent('logo');
		$data['about_tr'] = $this->Database_Model->getContentWithId(2, 'about');
		$data['about_en'] = $this->Database_Model->getContentWithId(3, 'about');
		$data['about_ar'] = $this->Database_Model->getContentWithId(1, 'about');
		$data['numberMsg'] = $this->db->query('SELECT id FROM message')->num_rows();
		$data['numberUnMsg'] = $this->db->query('SELECT id FROM message WHERE status=0')->num_rows();
		$data['unreadMessage'] = $this->Database_Model->getContentId(0,'message','status');
		$this->load->view('admin/about', $data);
	}

	public function updateAbout($lang)
	{
		$data = array(
			'section_title' => $this->input->post('s_title'),
			'title' => $this->input->post('title'),
			'info' => $this->input->post('info'),
			'title_vision' => $this->input->post('vision_title'),
			'vision' => $this->input->post('vision'),
			'title_mission' => $this->input->post('mission_title'),
			'mission' => $this->input->post('mission'),
			'title_aim' => $this->input->post('aim_title'),
			'aim' => $this->input->post('aim'),
		);
		$this->Database_Model->updateWithId('about', $data, 'lang', $lang);
		redirect(base_url() . 'adminpanel/about');
	}
	

	function loadImage($id)
	{
		$query = $this->db->query("SELECT * FROM about WHERE id=$id");
		$data["about"] = $query->result();
		$data["id"] = $id;
		$data['logo'] = $this->Database_Model->getContent('logo');
		$data['numberMsg'] = $this->db->query('SELECT id FROM message')->num_rows();
		$data['numberUnMsg'] = $this->db->query('SELECT id FROM message WHERE status=0')->num_rows();
		$data['unreadMessage'] = $this->Database_Model->getContentId(0,'message','status');
		$this->load->view('admin/loadImageAbout', $data);
	}

	function loadIconVision($id)
	{
		$query = $this->db->query("SELECT * FROM about WHERE id=$id");
		$data["about"] = $query->result();
		$data["id"] = $id;
		$data['logo'] = $this->Database_Model->getContent('logo');
		$data['numberMsg'] = $this->db->query('SELECT id FROM message')->num_rows();
		$data['numberUnMsg'] = $this->db->query('SELECT id FROM message WHERE status=0')->num_rows();
		$data['unreadMessage'] = $this->Database_Model->getContentId(0,'message','status');
		$this->load->view('admin/loadIconVision', $data);
	}

	function loadIconMission($id)
	{
		$query = $this->db->query("SELECT * FROM about WHERE id=$id");
		$data["about"] = $query->result();
		$data["id"] = $id;
		$data['logo'] = $this->Database_Model->getContent('logo');
		$data['numberMsg'] = $this->db->query('SELECT id FROM message')->num_rows();
		$data['numberUnMsg'] = $this->db->query('SELECT id FROM message WHERE status=0')->num_rows();
		$data['unreadMessage'] = $this->Database_Model->getContentId(0,'message','status');
		$this->load->view('admin/loadIconMission', $data);
	}

	function loadIconAim($id)
	{
		$query = $this->db->query("SELECT * FROM about WHERE id=$id");
		$data["about"] = $query->result();
		$data["id"] = $id;
		$data['logo'] = $this->Database_Model->getContent('logo');
		$data['numberMsg'] = $this->db->query('SELECT id FROM message')->num_rows();
		$data['numberUnMsg'] = $this->db->query('SELECT id FROM message WHERE status=0')->num_rows();
		$data['unreadMessage'] = $this->Database_Model->getContentId(0,'message','status');
		$this->load->view('admin/loadIconAim', $data);
	}

	public function updateImage($id)
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
			redirect(base_url() . 'adminpanel/about/');
		} else {
			$upload_data = $this->upload->data();
			$data = array(
				'img_name' => $upload_data["file_name"]
			);
			$this->Database_Model->updateWithId('about', $data, 'id', $id);
			//$this->session->set_flashdata("sonuc", "Kaydetme İşlemi Başarı İle Gerçekleştirildi");
			redirect(base_url() . 'adminpanel/about/');
		}
	}

	public function updateIconVision($id)
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
			redirect(base_url() . 'adminpanel/about/');
		} else {
			$upload_data = $this->upload->data();
			$data = array(
				'icon_vision' => $upload_data["file_name"]
			);
			$this->Database_Model->updateWithId('about', $data, 'id', $id);
			//$this->session->set_flashdata("sonuc", "Kaydetme İşlemi Başarı İle Gerçekleştirildi");
			redirect(base_url() . 'adminpanel/about/');
		}
	}

	public function updateIconMission($id)
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
			redirect(base_url() . 'adminpanel/about/');
		} else {
			$upload_data = $this->upload->data();
			$data = array(
				'icon_mission' => $upload_data["file_name"]
			);
			$this->Database_Model->updateWithId('about', $data, 'id', $id);
			//$this->session->set_flashdata("sonuc", "Kaydetme İşlemi Başarı İle Gerçekleştirildi");
			redirect(base_url() . 'adminpanel/about/');
		}
	}

	public function updateIconAim($id)
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
			redirect(base_url() . 'adminpanel/about/');
		} else {
			$upload_data = $this->upload->data();
			$data = array(
				'icon_aim' => $upload_data["file_name"]
			);
			$this->Database_Model->updateWithId('about', $data, 'id', $id);
			//$this->session->set_flashdata("sonuc", "Kaydetme İşlemi Başarı İle Gerçekleştirildi");
			redirect(base_url() . 'adminpanel/about/');
		}
	}
}
