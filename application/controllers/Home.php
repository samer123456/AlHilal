<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
	{
		$data['title'] = "Sanabelamira";
		$data['logo'] = $this->Database_Model->getContent('logo');
		$data['home'] = $this->Database_Model->getContentWithId(3, 'nav_menu');
		$data['slider'] = $this->Database_Model->getContentWithId(3, 'big_slider');
		$data['whyus'] = $this->Database_Model->getContentWithId(3, 'why_us');
		$data['s_slider'] = $this->Database_Model->getContentWithId(3, 'small_slider');
		$data['footer'] = $this->Database_Model->getContentWithId(3, 'footer');
		$this->load->view('home', $data);
	}

	public function tr()
	{
		$data['title'] = "Sanabelamira";
		$data['logo'] = $this->Database_Model->getContent('logo');
		$data['home'] = $this->Database_Model->getContentWithId(2, 'nav_menu');
		$data['slider'] = $this->Database_Model->getContentWithId(2, 'big_slider');
		$data['whyus'] = $this->Database_Model->getContentWithId(2, 'why_us');
		$data['s_slider'] = $this->Database_Model->getContentWithId(2, 'small_slider');
		$data['footer'] = $this->Database_Model->getContentWithId(2, 'footer');
		$this->load->view('home', $data);
	}

	public function ar()
	{
		$data['title'] = "سنابل العامرة";
		$data['logo'] = $this->Database_Model->getContent('logo');
		$data['home'] = $this->Database_Model->getContentWithId(1, 'nav_menu');
		$data['slider'] = $this->Database_Model->getContentWithId(1, 'big_slider');
		$data['whyus'] = $this->Database_Model->getContentWithId(1, 'why_us');
		$data['s_slider'] = $this->Database_Model->getContentWithId(1, 'small_slider');
		$data['footer'] = $this->Database_Model->getContentWithId(1, 'footer');
		$this->load->view('home', $data);
	}
}
