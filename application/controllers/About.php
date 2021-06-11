<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
	public function index()
	{
		$data['title'] = "About Us | sanabelamira";
		$data['logo'] = $this->Database_Model->getContent('logo');
		$data['home'] = $this->Database_Model->getContentWithId(3, 'nav_menu');
		$data['about'] = $this->Database_Model->getContentWithId(3, 'about');
		$data['footer'] = $this->Database_Model->getContentWithId(3, 'footer');
		$this->load->view('about_us', $data);
	}

	public function tr()
	{
		$data['title'] = "Hakkımızda | sanabelamira";
		$data['logo'] = $this->Database_Model->getContent('logo');
		$data['home'] = $this->Database_Model->getContentWithId(2, 'nav_menu');
		$data['about'] = $this->Database_Model->getContentWithId(2, 'about');
		$data['footer'] = $this->Database_Model->getContentWithId(2, 'footer');
		$this->load->view('about_us', $data);
	}

	public function ar()
	{
		$data['title'] = "عن الشركة | sanabelamira";
		$data['logo'] = $this->Database_Model->getContent('logo');
		$data['home'] = $this->Database_Model->getContentWithId(1, 'nav_menu');
		$data['about'] = $this->Database_Model->getContentWithId(1, 'about');
		$data['footer'] = $this->Database_Model->getContentWithId(1, 'footer');
		$this->load->view('about_us', $data);
	}
}
