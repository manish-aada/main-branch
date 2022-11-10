<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {


   // get  data with id method
   public function get_data_where($tbl,$where){
   	  $qry = $this->db->where($where)->get($tbl);
   	  return $qry->result_array();
   }

   //delete data
  public function delete_data($table,$where)  
    {
       $this->db->delete($table, $where);
       return;
    }

   //update data method
   public function update_data($where,$tbl,$data){
   	  $qry = $this->db->where($where)->update($tbl,$data);
   	  return $qry;
   }
   
  //insert data 
  public function insert_data($tbl,$data){
    $qry=$this->db->insert($tbl,$data);
    return $this->db->insert_id();
  }

}
