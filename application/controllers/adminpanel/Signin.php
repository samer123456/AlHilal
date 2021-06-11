<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Signin extends CI_Controller
{


	function index()
	{
		$data['logo'] = $this->Database_Model->getContent('logo');
		$this->load->view('admin/sign_in', $data);
	}

	function login()
	{

		$username = $this->input->post("username");
		$password = $this->input->post("pwd");

		$username = $this->security->xss_clean($username);
		$password = $this->security->xss_clean($password);

		$result = $this->Database_Model->login("users", $username, $password);

		if ($result) {
			$sess_array = array(
				'email' => $result[0]->email,
				'password' => $result[0]->password,
				'username' => $result[0]->username,
				'authority' => $result[0]->authority

			);
			$this->session->set_userdata("admin_session", $sess_array);
			redirect(base_url() . 'adminpanel/');
			/*$this->session->set_userdata("admin_session",$sess_array);
			if($result[0]->authority=='Admin'){
			redirect(base_url().'admin/');
			}else{
				redirect(base_url().'admin/home2');
			} */
		} else {
			$this->session->set_flashdata("message", "username or password incorrect");
			redirect(base_url() . 'adminpanel/signin');
		}

	}

	function logout()
	{
		$this->session->unset_userdata("admin_session");
		redirect(base_url() . 'adminpanel/signin/');
	}
}
