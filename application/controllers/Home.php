<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

		public function home()
	{
		$data ['title'] = 'Sistem Informasi Tapanuli Utara';
		$data ['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('user/home', $data);
	}
}

