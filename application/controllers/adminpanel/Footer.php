<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Footer extends CI_Controller
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
		$data['footer'] = $this->Database_Model->getContent('footer');
		$data['numberMsg'] = $this->db->query('SELECT id FROM message')->num_rows();
		$data['numberUnMsg'] = $this->db->query('SELECT id FROM message WHERE status=0')->num_rows();
		$data['unreadMessage'] = $this->Database_Model->getContentId(0,'message','status');
		$this->load->view('admin/footer', $data);
	}

	public function updateFooter($lang_id)
	{
		$data = array(
			'title' => $this->input->post('title'),
			'address' => $this->input->post('address'),
			'email' => $this->input->post('email'),
			'phone_1' => $this->input->post('phone_1'),
			'phone_2' => $this->input->post('phone_2'),
			'phone_3' => $this->input->post('phone_3'),
			'copyright' => $this->input->post('copy'),
			'info' => $this->input->post('info')
		);
		$this->Database_Model->updateWithId('footer', $data, 'lang', $lang_id);
		redirect(base_url() . 'adminpanel/footer');
	}

	public function updateSocialMedia()
	{
		$data = array(
			'facebook' => $this->input->post('facebook'),
			'twitter' => $this->input->post('twitter'),
			'instagram' => $this->input->post('instagram'),
			'linkedin' => $this->input->post('linkedin')
		);
		$this->Database_Model->updateWithId('footer', $data, 'lang', 3);
		redirect(base_url() . 'adminpanel/footer/');
	}
}
