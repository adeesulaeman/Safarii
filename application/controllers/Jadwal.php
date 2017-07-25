<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

	function __construct(){
       parent::__construct();
        
       $this->load->model('json_model'); 
       //$this->load->library('pagination');
       $this->load->helper(array('url','text','form')); //load helper url 
   }

	public function index()
	{
		$data = array(
			'container' => "v_jadwal",
			'waktu_sholat' => $this->json_model->get_data('http://muslimsalat.com/jakarta/weekly.json')->items,
		 );
		$this->load->view('template', $data);
	}
}
