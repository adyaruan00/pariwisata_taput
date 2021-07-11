<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

	public function landing()
	{
		$data['title'] = 'Sistem Informasi Tapanuli Utara';
		$this->load->view('landing', $data);
	}
}
