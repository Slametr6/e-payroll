<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

	public function index()
	{
		$this->load->view('include/header');
		$this->load->view('include/topbar');
		$this->load->view('admin/index');
		$this->load->view('include/footer');
	}
}
