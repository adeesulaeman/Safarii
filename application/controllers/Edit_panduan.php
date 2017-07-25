<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_panduan extends CI_Controller {

		function __construct(){
       parent::__construct();
        
       $this->load->model('model_panduan'); 
       //$this->load->library('pagination');
       $this->load->helper(array('url','text','form')); //load helper url 
   }


	public function index($id)
	{
		// $id['id_panduan'] = $this->uri->segment(3);
		$data = array(
			'container' => "v_edit_panduan",
			'get_edit_panduan' => $this->model_panduan->getEditData($id)
		 );
		$this->load->view('template', $data);
		
	}
}
