<?php

defined('BASEPATH') or exit('No direct script access allowed');



class Home extends CI_Controller

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

		$data['numberMsg'] = $this->db->query('SELECT id FROM message')->num_rows();

		$data['numberUnMsg'] = $this->db->query('SELECT id FROM message WHERE status=1')->num_rows();

		$data['unreadMessage'] = $this->Database_Model->getContentId(0,'message','status');
		redirect(base_url().'adminpanel/slider');

		//$this->load->view('admin/slider', $data);





	}

}

