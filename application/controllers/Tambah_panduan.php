<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah_panduan extends CI_Controller {


	public function index()
	{
		$data = array(
			'container' => "v_tambah_panduan"
		 );
		$this->load->view('template', $data);
		
	}
}
