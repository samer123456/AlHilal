<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
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
		$data['user'] = $this->Database_Model->getContent('users');
		$data['numberMsg'] = $this->db->query('SELECT id FROM message')->num_rows();
		$data['numberUnMsg'] = $this->db->query('SELECT id FROM message WHERE status=0')->num_rows();
		$data['unreadMessage'] = $this->Database_Model->getContentId(0,'message','status');
		$this->load->view('admin/users', $data);
	}

	function addUser()
	{
		$username = $this->input->post('username');
		$email = $this->input->post('email');

		$query = $this->db->query("SELECT * FROM users WHERE username='$username' OR email='$email' ");
		if ($query->num_rows()) {
			$this->session->set_flashdata("message", "username or email used");
			redirect(base_url() . 'admin/users/addUser');
		} else {
			$data = array(
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password'),
				'authority' => $this->input->post('authority')
			);
			$this->db->insert("users", $data);
			redirect(base_url() . 'adminpanel/users');
		}
	}

	function editUser($id)
	{
		$query = $this->db->query("SELECT * FROM users WHERE id= $id");
		$data["user"] = $query->result();
		$data["id"] = $id;
		$data['logo'] = $this->Database_Model->getContent('logo');
		$data['numberMsg'] = $this->db->query('SELECT id FROM message')->num_rows();
		$data['numberUnMsg'] = $this->db->query('SELECT id FROM message WHERE status=0')->num_rows();
		$data['unreadMessage'] = $this->Database_Model->getContentId(0,'message','status');
		$this->load->view('admin/editUserForm', $data);
	}

	function updateUser($id)
	{
		$data = array(
			'username' => $this->input->post('username'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password'),
			'authority' => $this->input->post('authority')
		);
		$this->Database_Model->updateWithId("users", $data, 'id', $id);
		redirect(base_url() . 'adminpanel/users');
	}

	function deleteUser($id)
	{
		if ($id == 1) {
			//$this->session->set_flashdata("message","!!!");
			redirect(base_url() . 'adminpanel/users');
		} else {
			$this->Database_Model->deleteWithId('users', 'id', $id);
			redirect(base_url() . 'adminpanel/users');
		}
	}
}
