<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data = array('container' => "v_home" );
		$this->load->view('template', $data);
	}
}
