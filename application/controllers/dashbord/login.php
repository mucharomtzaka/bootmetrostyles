<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		session_start();
		$this->load->model('model_login','',TRUE);
		$this->load->library('form_validation');
	}
	public function index()
	{
		$list['judul']='<div class="notice marker-on-top bg-amber fg-green">Administrator</div>';
		$this->load->view('header');
		$this->load->view('portal_metro');
		$this->load->view('adminweb/modul_logins/form_login',$list);
		$this->load->view('adminweb/moduls_header/footer');
	
	}
	
	function proses_login(){
		$this->validasi();
		$cek=$this-> veryfikasi();
		if($cek){ 
		$this->setsession_plugin();
		$this->home_beranda();
			
		}
		else { 
			if($this->form_validation->run() == FALSE){
		$this->index();
			}else{

	 echo "<script>alert('password dan username salah ,coba logi !!');</script>";
			$this->index();
}
		}
	}
	function validasi(){
	$this->form_validation->set_rules('username','<div class="notice marker-on-bottom  bg-amber fg-red">Username</div>' ,'trim|required|xss_clean','</div>');
	$this->form_validation->set_rules('password','<div class="notice marker-on-bottom  bg-amber fg-red">Password</div>',  'trim|required|xss_clean|callback_check_database','</div'); 		
	}
	
	function setsession_plugin(){
			$_SESSION['ses_kcfinder']=array();
			$_SESSION['ses_kcfinder']['disabled'] = false;
			$_SESSION['ses_kcfinder']['uploadURL'] = "./content_upload";
	}
	
	function home_beranda(){
	   if($this->session->userdata('logged_in')){
		$session_data = $this->session->userdata('logged_in');
		$userdata=$session_data['username'];
		$level=$session_data['level'];
		redirect('dashbord/home?user='.$userdata.'&notice=logintrue?level='.$level.'');}
		else{
			$this->index();
		}
	}
	
	function veryfikasi(){
	 //validasi field terhadap database

   $username = $this->input->post('username');
   $password=	$this->input->post('password');

   $result = $this->model_login->login($username, $password);//test data base
   if($result){
     foreach($result as $rows){
		$sess_array = array(

         'id' => $rows->id,
         'username' => $rows->username, 
		 'level'=>$rows->level
       );
       $this->session->set_userdata('logged_in', $sess_array);
			}
     return  true;
		}else{
     return false;
					}

 }
    function reset_pass(){
	
	
	
	}
 
	function forget_password(){
	$this->load->view('header');
	$this->load->view('portal_metro');
	$this->load->view('adminweb/modul_logins/reset_pass');
	$this->load->view('adminweb/moduls_header/footer');
	
	}
	function logout()
	{
		session_destroy();
		$this->session->unset_userdata('logged_in');
		$this->proses_login();
	}
	

}