<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function index()
	{
		$data = array('container' => "v_users" );
		$this->load->view('template', $data);
	}
}
