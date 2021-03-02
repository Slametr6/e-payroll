<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('username') == "") {
			redirect('auth');
		}
		$data = array (
			'konten' => 'home',
			'judul' => 'Dashboard',
		);
		$this->load->view('index', $data);
	}
}
