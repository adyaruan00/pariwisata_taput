<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

		public function admin()
	{
		$data ['title'] = 'Taput Admin';
		$data ['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('user/admin', $data);


	}


}