<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$data['sidebar'] = $this->load->view('components/_sidebar_admin', '', true);
		$data['content'] = $this->load->view('pages/admin/home', $data, true);

		$this->load->view('app', $data);
	}

	public function quickResponse()
	{
		$data['sidebar'] = $this->load->view('components/_sidebar_admin', '', true);
		$data['content'] = $this->load->view('pages/admin/qr', $data, true);

		$this->load->view('app', $data);
	}
}