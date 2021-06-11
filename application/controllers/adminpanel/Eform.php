<?php
defined('BASEPATH') or exit('No direct script access allowed');

class eform extends CI_Controller
{
	public function index()
	{
		$data['logo'] = $this->Database_Model->getContent('logo');
		$data['eform'] = $this->Database_Model->getContent('translation');
		$data['numberMsg'] = $this->db->query('SELECT id FROM message')->num_rows();
		$data['numberUnMsg'] = $this->db->query('SELECT id FROM message WHERE status=0')->num_rows();
		$data['unreadMessage'] = $this->Database_Model->getContentId(0,'message','status');
		$this->load->view('admin/eform', $data);
	}

	public function update_eform($lang_id)
	{
		$data = array(
			
			'air' => $this->input->post('air'),
			'detailedCustomerAddress' => $this->input->post('detailedCustomerAddress'),
			'eForm' => $this->input->post('eform'),
			'email' => $this->input->post('email'),
			'header' => $this->input->post('header'),
			'land' => $this->input->post('land'),
			'name' => $this->input->post('name'),
			'orderNo' => $this->input->post('orderNo'),
			'phone' => $this->input->post('phone'),
			'productLink' => $this->input->post('productLink'),
			'sea' => $this->input->post('sea'),
			'shipForMe' => $this->input->post('shipForMe'),
			'shipping' => $this->input->post('shipping'),
			'submit' => $this->input->post('submit')
		);
		$this->Database_Model->updateWithId('translation', $data, 'lang', $lang_id);
		redirect(base_url() . 'adminpanel/eform/');
	}
}
