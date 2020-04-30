<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QuickResponse extends CI_Controller {

	public function index()
	{
		$data['sidebar'] = $this->load->view('components/_sidebar', '', true);
		$data['content'] = $this->load->view('pages/qr', $data, true);

		$this->load->view('app', $data);
	}

	public function complaint()
	{
		$data['content'] = $this->load->view('pages/qr-complaint', '', true);

		$this->load->view('app', $data);
	}
}
