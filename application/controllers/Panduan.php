<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panduan extends CI_Controller {

	function __construct(){
       parent::__construct();
        
       $this->load->model('model_panduan'); 
       //$this->load->library('pagination');
       $this->load->helper(array('url','text','form')); //load helper url 
   }

	public function index()
	{
		$data = array(
			'container' => "v_panduan",
			'ambil_panduan' => $this->model_panduan->tampilData('panduan_tbl')
		 );
		$this->load->view('template', $data);
		
	}

	public function prosestambah(){
        
        $data = array (
           
            'id_panduan' => $this->input->post('id_panduan'),
            'tgl_panduan' => $this->input->post('tgl_panduan'),
            'judul_panduan' => $this->input->post('judul_panduan'),
            'isi_panduan' => $this->input->post('isi_panduan'),
        );
        
        $this->model_panduan->insertData('panduan_tbl',$data); //akses model untuk menyimpan ke database   
       
        if($data >= 1) {
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\">Data Berhasil Ditambahkan </div></div>");
                redirect('index.php/panduan'); //jika berhasil maka akan ditampilkan view vupload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\">Gagal Tambah coba lagi !</div></div>");
                redirect('index.php/panduan'); //jika gagal maka akan ditampilkan form upload
            }       
    }


    public function prosesedit(){
        $id['id_panduan'] = $this->input->post('id_panduan');
        $data = array(                
          'judul_panduan'=>$this->input->post('judul_panduan'),
          'isi_panduan'=>$this->input->post('isi_panduan'),
          'tgl_panduan'=>$this->input->post('tgl_panduan'),
        );
        $this->model_panduan->updateData('panduan_tbl',$data,$id); //akses model untuk menyimpan ke database
        if($data >= 1) {
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\">Data Berhasil Diupdate </div></div>");
                redirect('index.php/panduan'); //jika berhasil maka akan ditampilkan view vupload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\">Gagal Update coba lagi !</div></div>");
                redirect('index.php/panduan'); //jika gagal maka akan ditampilkan form upload
            }
    }

    public function edit_panduan(){
        
            $data = array(
                'container' => "v_edit_panduan",
                'get_edit_panduan'=>$this->model_panduan->getEditData(),
                
                );
		$this->load->view('template', $data);
    }

         public function hapusinfo(){
        
        $id['id_panduan'] = $this->uri->segment(3);
        $this->model_panduan->deleteData('panduan_tbl',$id);
        redirect('index.php/panduan'); //jika berhasil maka akan ditampilkan view vupload
            
       
    }
}
