<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Whyus extends CI_Controller
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
		$data['why_ar'] = $this->Database_Model->getContentWithId(1, 'why_us');
		$data['why_tr'] = $this->Database_Model->getContentWithId(2, 'why_us');
		$data['why_en'] = $this->Database_Model->getContentWithId(3, 'why_us');
		$data['numberMsg'] = $this->db->query('SELECT id FROM message')->num_rows();
		$data['numberUnMsg'] = $this->db->query('SELECT id FROM message WHERE status=0')->num_rows();
		$data['unreadMessage'] = $this->Database_Model->getContentId(0,'message','status');
		$this->load->view('admin/why_us', $data);
	}

	function addIcon()
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
			redirect(base_url() . 'adminpanel/whyus/');
		} else {
			for ($i = 1; $i < 4; $i++) {
				$upload_data = $this->upload->data();
				$data = array(
					'icon_name' => $upload_data["file_name"],
					'lang' => $i
				);
				$this->db->insert("why_us", $data);
			}
			//$this->session->set_flashdata("sonuc", "Kaydetme İşlemi Başarı İle Gerçekleştirildi");
			redirect(base_url() . 'adminpanel/whyus/');
		}
	}

	public function updateWhyus($why_id)
	{
		$data = array(
			'icon_title' => $this->input->post('title')
		);
		$this->Database_Model->updateWithId('why_us', $data, 'why_id', $why_id);
		redirect(base_url() . 'adminpanel/whyus');
	}

	function deleteRow($id)
	{
		$this->Database_Model->deleteWithId('why_us', 'why_id', $id);
		redirect(base_url() . 'adminpanel/whyus');
	}

	function loadImageWhyus($id)
	{
		$query = $this->db->query("SELECT * FROM why_us WHERE why_id= $id");
		$data["imgWhyus"] = $query->result();
		$data["id"] = $id;
		$data['logo'] = $this->Database_Model->getContent('logo');
		$data['numberMsg'] = $this->db->query('SELECT id FROM message')->num_rows();
		$data['numberUnMsg'] = $this->db->query('SELECT id FROM message WHERE status=0')->num_rows();
		$data['unreadMessage'] = $this->Database_Model->getContentId(0,'message','status');
		$this->load->view('admin/loadImageWhyus', $data);
	}

	public function updateWhyusImage($slider_id)
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
				'icon_name' => $upload_data["file_name"]
			);
			$this->Database_Model->updateWithId('why_us', $data, 'why_id', $slider_id);
			//$this->session->set_flashdata("sonuc", "Kaydetme İşlemi Başarı İle Gerçekleştirildi");
			redirect(base_url() . 'adminpanel/whyus/');
		}
	}
}
