<?php if ( ! defined('BASEPATH'))  exit('tidak boleh diakses secara langsung');
	class Template_model extends CI_Model {
	function view_komentar(){
	$this->db->select('*');
	$this->db->from('tbl_data_komentar');
	$this->db->order_by('id_komentar','ASC');
	$getData = $this->db->get('');
	if($getData->num_rows() > 0)
	return $getData->result_array();
	else
	return null;
	}
	function insert_komentar(){
	$cek_data=array('nama'=>$this->input->post('nama'),'url'=>$this->input->post('url'),
	'email'=>$this->input->post('email'),'pesan'=>$this->input->post('pesan')
	);
	$this->db->insert('tbl_data_komentar',$cek_data);
	}
	

	
	
	
	}