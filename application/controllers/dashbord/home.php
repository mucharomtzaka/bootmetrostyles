<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller{
   function __construct(){
      parent::__construct();
      date_default_timezone_set('Asia/Jakarta');
   }
   function index(){	
   
   if($this->session->userdata('logged_in')){
		$session_data = $this->session->userdata('logged_in');
		$data['welcome']='<div ><font color="white"><center>selamat anda berhasil login di halaman Administrator</font></center></div>';
		$data['username'] = $session_data['username'];
		//load halaman
		$this->load->view('adminweb/moduls_header/header');
		$this->load->view('adminweb/menu',$data);
		$this->load->view('adminweb/admin');
		$this->load->view('adminweb/panel_system');
		$this->load->view('adminweb/moduls_header/footer');
   }else{
		$this->redirect_login();
   }
   
   }
   
   function profil_admin(){
	 if($this->session->userdata('logged_in')){
		$session_data = $this->session->userdata('logged_in');
		$data['list']='<div ><font color="blue"><center>Profil Admin web </font></center></div>';
		$data['username'] = $session_data['username'];
		//load halaman
		$this->load->view('adminweb/moduls_header/header');
		$this->load->view('adminweb/menu',$data);
		$this->load->view('adminweb/profil_admin',$data);
		$this->load->view('adminweb/moduls_header/footer');
   }else{
		$this->redirect_login();
   }
   
   
   }
   
   
   function redirect_login(){
   redirect('dashbord/login');
   }
   
   
   
 
   
   
}


		