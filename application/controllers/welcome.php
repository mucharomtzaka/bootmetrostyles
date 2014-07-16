<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	 function __construct(){
	 
	 parent ::__construct();
	 $this->load->model('template_model');
	 
	 }
  
	
	public function index(){
	$data['komentar']= $this->template_model->view_komentar();
	//load halaman 
		$this->load->view('header');
		$this->load->view('portal_metro');
		$this->load->view('navigasi');
		$this->load->view('slider');
		$this->load->view('content');
		$this->load->view('footer',$data);
	}
	
	
	
	function panel_system(){
	
		$this->load->view('header');
		$this->load->view('portal_metro');
		$this->load->view('navigasi');
		$this->load->view('content');
	
	
	}
	
	function kirim_komentar(){
	$this->validasi();
	if($this->form_validation->run() == FALSE){
		$this->index();
			}else{
	$this->template_model->insert_komentar();
	redirect( 'welcome?komentar=telah-dikirim');
	}
	} 
	
	function kembali_home(){
		redirect( 'welcome');
	}
	
	function validasi(){
		$this->form_validation->set_rules('nama','<div class="notice marker-on-bottom  bg-amber fg-red">nama</div>' ,'trim|required|xss_clean','</div>');
		$this->form_validation->set_rules('url','<div class="notice marker-on-bottom  bg-amber fg-red">url</div>' ,'trim|required|xss_clean','</div>');
		$this->form_validation->set_rules('email','<div class="notice marker-on-bottom  bg-amber fg-red">email</div>' ,'trim|required|xss_clean','</div>');
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */