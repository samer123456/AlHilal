<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Slider extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata("admin_session"))
			redirect(base_url().'adminpanel/signin');

	}

	public function index()
	{
		$data['logo'] = $this->Database_Model->getContent('logo');
		$data['slider_ar'] = $this->Database_Model->getContentWithId(1, 'big_slider');
		$data['slider_tr'] = $this->Database_Model->getContentWithId(2, 'big_slider');
		$data['slider_en'] = $this->Database_Model->getContentWithId(3, 'big_slider');
		$data['s_slider_ar'] = $this->Database_Model->getContentWithId(1, 'small_slider');
		$data['s_slider_tr'] = $this->Database_Model->getContentWithId(2, 'small_slider');
		$data['s_slider_en'] = $this->Database_Model->getContentWithId(3, 'small_slider');
		$data['numberMsg'] = $this->db->query('SELECT id FROM message')->num_rows();
		$data['numberUnMsg'] = $this->db->query('SELECT id FROM message WHERE status=0')->num_rows();
		$data['unreadMessage'] = $this->Database_Model->getContentId(0,'message','status');
		$this->load->view('admin/slider', $data);
	}

	function addSlider()
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
					'img_name' => $upload_data["file_name"],
					'lang' => $i
				);
				$this->db->insert("big_slider", $data);
			}
			//$this->session->set_flashdata("sonuc", "Kaydetme İşlemi Başarı İle Gerçekleştirildi");
			redirect(base_url() . 'adminpanel/slider/');
		}
	}

	function addSmallSlider()
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
					'image_name' => $upload_data["file_name"],
					'lang' => $i
				);
				$this->db->insert("small_slider", $data);
			}
			//$this->session->set_flashdata("sonuc", "Kaydetme İşlemi Başarı İle Gerçekleştirildi");
			redirect(base_url() . 'adminpanel/slider/');
		}
	}


	public function updateSlider($slider_id)
	{
		$data = array(
			'title' => $this->input->post('title'),
			'info' => $this->input->post('info')
		);
		$this->Database_Model->updateWithId('big_slider', $data, 'slider_id', $slider_id);
		redirect(base_url() . 'adminpanel/slider');
	}

	function loadImage($id)
	{
		$query = $this->db->query("SELECT * FROM big_slider WHERE slider_id= $id");
		$data["about_img"] = $query->result();
		$data["id"] = $id;
		$data['logo'] = $this->Database_Model->getContent('logo');
		$data['numberMsg'] = $this->db->query('SELECT id FROM message')->num_rows();
		$data['numberUnMsg'] = $this->db->query('SELECT id FROM message WHERE status=0')->num_rows();
		$data['unreadMessage'] = $this->Database_Model->getContentId(0,'message','status');
		$this->load->view('admin/loadImage', $data);
	}

	public function updateSliderImage($slider_id)
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
				'img_name' => $upload_data["file_name"]
			);
			$this->Database_Model->updateWithId('big_slider', $data, 'slider_id', $slider_id);
			//$this->session->set_flashdata("sonuc", "Kaydetme İşlemi Başarı İle Gerçekleştirildi");
			redirect(base_url() . 'adminpanel/slider/');
		}
	}

	function loadImageSmall($id)
	{
		$query = $this->db->query("SELECT * FROM big_slider WHERE slider_id= $id");
		$data["about_img"] = $query->result();
		$data["id"] = $id;
		$data['logo'] = $this->Database_Model->getContent('logo');
		$data['numberMsg'] = $this->db->query('SELECT id FROM message')->num_rows();
		$data['numberUnMsg'] = $this->db->query('SELECT id FROM message WHERE status=0')->num_rows();
		$data['unreadMessage'] = $this->Database_Model->getContentId(0,'message','status');
		$this->load->view('admin/loadImageSmall', $data);
	}

	public function updateSmallSlider($slider_id)
	{
		$data = array(
			'image_title' => $this->input->post('title')
		);
		$this->Database_Model->updateWithId('small_slider', $data, 'slider_id', $slider_id);
		redirect(base_url() . 'adminpanel/slider');
	}

	public function updateSmallSliderImage($slider_id)
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
				'image_name' => $upload_data["file_name"]
			);
			$this->Database_Model->updateWithId('small_slider', $data, 'slider_id', $slider_id);
			//$this->session->set_flashdata("sonuc", "Kaydetme İşlemi Başarı İle Gerçekleştirildi");
			redirect(base_url() . 'adminpanel/slider/');
		}
	}

	function deleteBigSlider($id)
	{
		$this->Database_Model->deleteWithId('big_slider', 'slider_id', $id);
		redirect(base_url() . 'adminpanel/slider');
	}

	function deleteSmallSlider($id)
	{
		$this->Database_Model->deleteWithId('small_slider', 'slider_id', $id);
		redirect(base_url() . 'adminpanel/slider');
	}
}
