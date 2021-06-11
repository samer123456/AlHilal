<?php
defined('BASEPATH') or exit('No direct script access allowed');

class News extends CI_Controller
{
	public function index()
	{
		$data['title'] = "Our News | sanabelamira";
		$data['logo'] = $this->Database_Model->getContent('logo');
		$data['home'] = $this->Database_Model->getContentWithId(3, 'nav_menu');
		$data['news'] = $this->Database_Model->getContentWithId(3, 'news');
		$data['footer'] = $this->Database_Model->getContentWithId(3, 'footer');
		$this->load->view('news', $data);
	}

	public function tr()
	{
		$data['title'] = "Haberlerimiz | sanabelamira";
		$data['logo'] = $this->Database_Model->getContent('logo');
		$data['home'] = $this->Database_Model->getContentWithId(2, 'nav_menu');
		$data['news'] = $this->Database_Model->getContentWithId(2, 'news');
		$data['footer'] = $this->Database_Model->getContentWithId(2, 'footer');
		$this->load->view('news', $data);
	}

	public function ar()
	{
		$data['title'] = "أخبارنا | sanabelamira";
		$data['logo'] = $this->Database_Model->getContent('logo');
		$data['home'] = $this->Database_Model->getContentWithId(1, 'nav_menu');
		$data['news'] = $this->Database_Model->getContentWithId(1, 'news');
		$data['footer'] = $this->Database_Model->getContentWithId(1, 'footer');
		$this->load->view('news', $data);
	}

	public function getNews($id){
		$sql = $this->Database_Model->getContentNews($id);
		$data['logo'] = $this->Database_Model->getContent('logo');
		if($sql[0]->lang=="1"){
			$data['title'] = "أخبارنا | sanabelamira";
			$data['home'] = $this->Database_Model->getContentWithId(1, 'nav_menu');
			$data['footer'] = $this->Database_Model->getContentWithId(1, 'footer');
		}elseif($sql[0]->lang=="2"){
			$data['title'] = "أخبارنا | sanabelamira";
			$data['home'] = $this->Database_Model->getContentWithId(2, 'nav_menu');
			$data['footer'] = $this->Database_Model->getContentWithId(2, 'footer');
		}else{
			$data['title'] = "أخبارنا | sanabelamira";
			$data['home'] = $this->Database_Model->getContentWithId(3, 'nav_menu');
			$data['footer'] = $this->Database_Model->getContentWithId(3, 'footer');
		}
		$data['news'] = $this->Database_Model->getContentId($id, 'news','id');
		$this->load->view('newsDetail', $data);
	}
}
