<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Berita extends CI_Controller{
   function __construct(){
      parent::__construct();
      date_default_timezone_set('Asia/Jakarta');
	  $this->load->model('admin/list_berita_model');//call list berita model 
	  $this->load->library('pagination'); //call pagination library
   }
   function index(){	
   if($this->session->userdata('logged_in')){
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$data['notice']='<div ><font color="white"><center>Halaman Berita Admin</font></center></div>';
		$data['detail'] = $this->list_berita_model->index($this->input->post('cari'));
		$this->load->view('adminweb/moduls_header/header');
		$this->load->view('adminweb/menu',$data);
		$this->load->view('adminweb/moduls_berita/content_berita',$data);
		$this->load->view('adminweb/moduls_header/footer');
   }else{
		$this->redirect_login();
   }
   
   }
   
   function update_berita(){
   $this->list_berita_model->update();
   redirect('dashbord/berita/index/','refresh');
  
   }

   function insert(){
   $this->validasi();
   	if($this->form_validation->run() == FALSE){
		$this->index();
			}else{
			$this->list_berita_model->insert_berita();
			redirect('dashbord/berita/index/');
			}
   
   
   }
   function validasi(){
   $this->form_validation->set_rules('judul_berita','<div class="notice marker-on-bottom  bg-amber fg-red">judul_berita</div>' ,'trim|required|xss_clean','</div>');
	$this->form_validation->set_rules('Penulis','<div class="notice marker-on-bottom  bg-amber fg-red">Penulis</div>',  'trim|required|xss_clean','</div'); 	
   $this->form_validation->set_rules('tgl_berita','<div class="notice marker-on-bottom  bg-amber fg-red">tgl_berita</div>',  'trim|required|xss_clean','</div'); 	
   $this->form_validation->set_rules('tag','<div class="notice marker-on-bottom  bg-amber fg-red">tag</div>',  'trim|required|xss_clean','</div'); 
	$this->form_validation->set_rules('kategori','<div class="notice marker-on-bottom  bg-amber fg-red">kategori</div>',  'trim|required|xss_clean','</div'); 	
   }
   
   function edit_berita(){
    if($this->session->userdata('logged_in')){
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$data['notice']='<div ><font color="white"><center>Halaman Edit Berita Admin</font></center></div>';
		$getid=$this->input->get('id_berita');
		$sql= "select *  from tbl_data_berita where id_berita='$getid'";
		$query=$this->db->query($sql);
		 foreach($query->result() as $rows) {
		 $data['id_berita']=$rows->id_berita;
		 $data['tgl_berita']=$rows->tgl_berita;
		 $data['judul']=$rows->judul_berita;
		 $data['text']=$rows->isi_berita;
		 $data['penulis']=$rows->Penulis;
		 $data['kategori']=$rows->kategori;
		 $data['tag']=$rows->tag;
		 }
				$this->load->view('adminweb/moduls_header/header');
				$this->load->view('adminweb/menu',$data);
				$this->load->view('adminweb/moduls_berita/edit_form_berita',$data);
				$this->load->view('adminweb/moduls_header/footer');
		}else{
		$this->redirect_login();
   }
   }
   
   
   function redirect_login(){
   redirect('dashbord/login');
   }
   
   function delete_berita($id_berita){
   
   $this->list_berita_model->hapus_berita($id_berita);
	redirect('dashbord/berita/index/');
   
   }
   
   
 
   
   
}


		