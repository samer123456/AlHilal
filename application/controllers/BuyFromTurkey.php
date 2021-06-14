
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BuyFromTurkey extends CI_Controller
{
	public function index()
	{
		$data['title'] = "Buy from Turkey | sanabelamira";
		$data['logo'] = $this->Database_Model->getContent('logo');
		$data['home'] = $this->Database_Model->getContentWithId(3, 'nav_menu');
		$data['description_slider'] = 'We are here to serve you';
		$data['buyFromTurkey'] = $this->Database_Model->getContentWithId(3, 'buyfromturkey');
		$data['buyFromTurkey1'] = $this->Database_Model->getContentWithId(3, 'buyfromturkey1');
		$data['buyFromTurkey2'] = $this->Database_Model->getContentWithId(3, 'buyfromturkey2');
		$data['translation'] = $this->Database_Model->getContentWithId(3, 'translation');
		$data['footer'] = $this->Database_Model->getContentWithId(3, 'footer');
		$this->load->view('buyFromTurkey', $data);
	}

	public function tr()
	{
		$data['title'] = "Türkiye'den Satın Al | sanabelamira";
		$data['logo'] = $this->Database_Model->getContent('logo');
		$data['home'] = $this->Database_Model->getContentWithId(2, 'nav_menu');
		$data['description_slider'] = 'Sizin için burdayiz';
		$data['buyFromTurkey'] = $this->Database_Model->getContentWithId(2, 'buyfromturkey');
		$data['buyFromTurkey1'] = $this->Database_Model->getContentWithId(2, 'buyfromturkey1');
		$data['buyFromTurkey2'] = $this->Database_Model->getContentWithId(2, 'buyfromturkey2');
		$data['translation'] = $this->Database_Model->getContentWithId(2, 'translation');
		$data['footer'] = $this->Database_Model->getContentWithId(2, 'footer');
		$this->load->view('buyFromTurkey', $data);
	}

	public function ar()
	{
		$data['title'] = "اشتر من تركيا | sanabelamira";
		$data['logo'] = $this->Database_Model->getContent('logo');
		$data['home'] = $this->Database_Model->getContentWithId(1, 'nav_menu');
		$data['description_slider'] = 'نحن هنا لخدمتكم';
		$data['buyFromTurkey'] = $this->Database_Model->getContentWithId(1, 'buyfromturkey');
		$data['buyFromTurkey1'] = $this->Database_Model->getContentWithId(1, 'buyfromturkey1');
		$data['buyFromTurkey2'] = $this->Database_Model->getContentWithId(1, 'buyfromturkey2');
		$data['translation'] = $this->Database_Model->getContentWithId(1, 'translation');
		$data['footer'] = $this->Database_Model->getContentWithId(1, 'footer');
		$this->load->view('buyFromTurkey', $data);
	}
}
