<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
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
		$data['product_ar'] = $this->Database_Model->getContentWithId(1, 'product');
		$data['product_tr'] = $this->Database_Model->getContentWithId(2, 'product');
		$data['product_en'] = $this->Database_Model->getContentWithId(3, 'product');
		$data['numberMsg'] = $this->db->query('SELECT id FROM message')->num_rows();
		$data['numberUnMsg'] = $this->db->query('SELECT id FROM message WHERE status=0')->num_rows();
		$data['unreadMessage'] = $this->Database_Model->getContentId(0, 'message', 'status');
		$this->load->view('admin/product', $data);
	}

	function addProduct()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|j"pg|png|webp|jpeg';
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
				$this->db->insert("product", $data);
			}
			//$this->session->set_flashdata("sonuc", "Kaydetme İşlemi Başarı İle Gerçekleştirildi");
			redirect(base_url() . 'adminpanel/product/');
		}
	}

	public function updateProduct($id)
	{
		$data = array(
			'image_title' => $this->input->post('title')
		);
		$this->Database_Model->updateWithId('product', $data, 'product_id', $id);
		redirect(base_url() . 'adminpanel/product');
	}

	function loadImage($id)
	{
		$query = $this->db->query("SELECT * FROM product WHERE product_id= $id");
		$data["product_img"] = $query->result();
		$data["id"] = $id;
		$data['logo'] = $this->Database_Model->getContent('logo');
		$data['numberMsg'] = $this->db->query('SELECT id FROM message')->num_rows();
		$data['numberUnMsg'] = $this->db->query('SELECT id FROM message WHERE status=0')->num_rows();
		$data['unreadMessage'] = $this->Database_Model->getContentId(0, 'message', 'status');
		$this->load->view('admin/loadImageProduct', $data);
	}

	public function updateProductImage($id)
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
			$this->Database_Model->updateWithId('product', $data, 'product_id', $id);
			//$this->session->set_flashdata("sonuc", "Kaydetme İşlemi Başarı İle Gerçekleştirildi");
			redirect(base_url() . 'adminpanel/product/');
		}
	}

	function deleteProduct($id)
	{
		$this->Database_Model->deleteWithId('product', 'product_id', $id);
		redirect(base_url() . 'adminpanel/product');
	}
}
