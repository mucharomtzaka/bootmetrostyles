<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_login extends CI_Model{
   
 function login($username, $password ) {
   $this -> db -> select('*');
   $this -> db -> from('tbl_data_adminweb');
   $this -> db -> where('username', $username);
   $this -> db -> where('password', md5($password));
   $query = $this -> db -> get();

   if($query -> num_rows() == 1)

   {

     return $query->result();

   }

   else

   {

     return false;

   }

 }
 
 function view(){
 $limit=5;
$this->db->select('*');
$this->db->from('tbl_data_adminweb');
$this->db->limit($limit);
$this->db->order_by('id','ASC');
$getData = $this->db->get('');
if($getData->num_rows() > 0)
return $getData->result_array();
else
return null; 
 }
   
   }
