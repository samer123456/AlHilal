<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{
	public function index()
	{
		$data['logo'] = $this->Database_Model->getContent('logo');
		$data['contact'] = $this->Database_Model->getContent('contact');
		$data['numberMsg'] = $this->db->query('SELECT id FROM message')->num_rows();
		$data['numberUnMsg'] = $this->db->query('SELECT id FROM message WHERE status=0')->num_rows();
		$data['unreadMessage'] = $this->Database_Model->getContentId(0,'message','status');
		$this->load->view('admin/contact', $data);
	}

	public function updateContact($lang_id)
	{
		$data = array(
			'map_url' => $this->input->post('map'),
			'title' => $this->input->post('title'),
			'address' => $this->input->post('address'),
			'phone' => $this->input->post('phone'),
			'email' => $this->input->post('email')
		);
		$this->Database_Model->updateWithId('contact', $data, 'lang', $lang_id);
		redirect(base_url() . 'adminpanel/contact/');
	}
}
