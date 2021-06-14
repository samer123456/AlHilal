<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Service extends CI_Controller
{
	public function index()
	{
		$data['title'] = "Our Services | sanabelamira";
		$data['logo'] = $this->Database_Model->getContent('logo');
		$data['home'] = $this->Database_Model->getContentWithId(3, 'nav_menu');
		$data['description_slider'] = 'We are here to serve you';
		$data['s_slider'] = $this->Database_Model->getContentWithId(3, 'small_slider');
		$data['service'] = $this->Database_Model->getContentWithId(3, 'service');
		$data['footer'] = $this->Database_Model->getContentWithId(3, 'footer');
		$this->load->view('our_services', $data);
	}

	public function tr()
	{
		$data['title'] = "Hizmetlerimiz | sanabelamira";
		$data['logo'] = $this->Database_Model->getContent('logo');
		$data['home'] = $this->Database_Model->getContentWithId(2, 'nav_menu');
		$data['description_slider'] = 'Sizin için burdayiz';
		$data['s_slider'] = $this->Database_Model->getContentWithId(2, 'small_slider');
		$data['service'] = $this->Database_Model->getContentWithId(2, 'service');
		$data['footer'] = $this->Database_Model->getContentWithId(2, 'footer');
		$this->load->view('our_services', $data);
	}

	public function ar()
	{
		$data['title'] = "خدماتنا | sanabelamira";
		$data['logo'] = $this->Database_Model->getContent('logo');
		$data['home'] = $this->Database_Model->getContentWithId(1, 'nav_menu');
		$data['description_slider'] = 'نحن هنا لخدمتكم';
		$data['s_slider'] = $this->Database_Model->getContentWithId(1, 'small_slider');
		$data['service'] = $this->Database_Model->getContentWithId(1, 'service');
		$data['footer'] = $this->Database_Model->getContentWithId(1, 'footer');
		$this->load->view('our_services', $data);
	}
}
