<?php
defined('BASEPATH') or exit('No direct script access allowed');

class News extends CI_Controller
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
		$data['news_ar'] = $this->Database_Model->getContentWithId(1, 'news');
		$data['news_tr'] = $this->Database_Model->getContentWithId(2, 'news');
		$data['news_en'] = $this->Database_Model->getContentWithId(3, 'news');
		$data['numberMsg'] = $this->db->query('SELECT id FROM message')->num_rows();
		$data['numberUnMsg'] = $this->db->query('SELECT id FROM message WHERE status=0')->num_rows();
		$data['unreadMessage'] = $this->Database_Model->getContentId(0,'message','status');
		$this->load->view('admin/news', $data);
	}

	public function getForm()
	{
		$data['logo'] = $this->Database_Model->getContent('logo');
		$data['numberMsg'] = $this->db->query('SELECT id FROM message')->num_rows();
		$data['numberUnMsg'] = $this->db->query('SELECT id FROM message WHERE status=0')->num_rows();
		$data['unreadMessage'] = $this->Database_Model->getContentId(0,'message','status');
		$this->load->view('admin/addNews', $data);
	}

	function addNews($status)
	{
		if($this->input->post('lang')=="Arabic"){
			$lang=1;
		}elseif($this->input->post('lang')=="Turkish"){
			$lang=2;
		}else{
			$lang=3;
		}
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|j"pg|png|webp|jpeg';
		$config['max_size'] = 2000;
		$config['max_width'] = 2048;
		$config['max_height'] = 2048;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('image')) {
			//	$error = $this->upload->display_errors();
			//	$this->session->set_flashdata("mesaj", "Yüklemede Hata Oluştu :" . $error);
			redirect(base_url() . 'adminpanel/news/');
		} else {
			$upload_data = $this->upload->data();
			$data = array(
				'img_name' => $upload_data["file_name"],
				'content' => $this->input->post('content'),
				'title' => $this->input->post('title'),
				'lang' => $lang,
				'status' => 1
			);
			$this->db->insert("news", $data);
			redirect(base_url() . 'adminpanel/news');
		}
	}

	function loadNews($id){
		$query=$this->db->query("SELECT * FROM news WHERE id= $id");
		$data["news"] = $query->result();
		$data["id"] = $id;
		$data['logo'] = $this->Database_Model->getContent('logo');
		$data['numberMsg'] = $this->db->query('SELECT id FROM message')->num_rows();
		$data['numberUnMsg'] = $this->db->query('SELECT id FROM message WHERE status=0')->num_rows();
		$data['unreadMessage'] = $this->Database_Model->getContentId(0,'message','status');
		$this->load->view('admin/updateNewsForm',$data);
	}

	public function updateNews($id)
	{
		$data = array(
			'title' => $this->input->post('title'),
			'content' => $this->input->post('content')
		);
		$this->Database_Model->updateWithId('news', $data, 'id', $id);
		redirect(base_url() . 'adminpanel/news');
	}

	function deleteNews($id)
	{
		$this->Database_Model->deleteWithId('news', 'id', $id);
		redirect(base_url() . 'adminpanel/news');
	}
}
