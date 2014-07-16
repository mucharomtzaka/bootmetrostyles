<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class list_berita_model extends CI_Model {
function index($filter='') { 
$this->db->select('*');
$this->db->from('tbl_data_berita');
if ($filter != '')
    $this->db->like ('judul_berita',$filter);
$this->db->order_by('id_berita','DESC');
$getData = $this->db->get('');
if($getData->num_rows() > 0)
return $getData->result_array();
else
return null;
}

function sort($perPage,$uri,$filter='') { 
$this->db->select('*');
$this->db->from('tbl_data_berita');
if ($filter != '')
    $this->db->like ('judul_berita',$filter);
$this->db->order_by('judul_berita','ASC');
$getData = $this->db->get('', $perPage, $uri);
if($getData->num_rows() > 0)
return $getData->result_array();
else
return null;
}

function update(){
$q=array('tgl_berita'=>$this->input->post('tgl_berita'),'judul_berita'=>$this->input->post('judul_berita'),
'isi_berita'=>$this->input->post('isi_berita'),'kategori'=>$this->input->post('kategori'),'tag'=>$this->input->post('tag'),
'Penulis'=>$this->input->post('Penulis')
);
$this->db->where('id_berita',$id_berita=$this->input->post('id_berita'));
$this->db->update('tbl_data_berita',$q);
}

function insert_berita(){
$q=array('tgl_berita'=>$this->input->post('tgl_berita'),'judul_berita'=>$this->input->post('judul_berita'),
'isi_berita'=>$this->input->post('isi_berita'),'kategori'=>$this->input->post('kategori'),'tag'=>$this->input->post('tag'),
'Penulis'=>$this->input->post('Penulis')
);
$this->db->insert('tbl_data_berita',$q);
}
function hapus_berita($id_berita){
$this->db->where('id_berita', $id_berita);
$this->db->delete('tbl_data_berita'); 
}

}

?>