<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

	public function index()
	{
		$data['sidebar'] = $this->load->view('components/_sidebar', '', true);
		$data['content'] = $this->load->view('pages/home', $data, true);

		$this->load->view('app', $data);
	}
}
