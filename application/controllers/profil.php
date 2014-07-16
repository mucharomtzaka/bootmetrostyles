<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profil extends CI_Controller {
	 function __construct(){
	 
	 parent ::__construct();
	 $this->load->model('template_model');
	 
	 }

	public function index()
	{
		$this->load->view('header');
		$this->load->view('portal_metro');
		$this->load->view('navigasi');
		
		$this->load->view('footer');
	}
	
	function visiMisi(){
		$data['komentar']= $this->template_model->view_komentar();
		//load halaman statis
		$this->load->view('header');
		$this->load->view('portal_metro');
		$this->load->view('navigasi');
		$this->load->view('postdata/post_visi_misi',$data);
		
	}

}