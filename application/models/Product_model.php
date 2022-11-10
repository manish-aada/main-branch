<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_model extends CI_Model {

   function getProduct($postData=null){

     $response = array();

     ## Read value
     $draw = $postData['draw'];
     $start = $postData['start'];
     $rowperpage = $postData['length']; // Rows display per page
     $columnIndex = $postData['order'][0]['column']; // Column index
     $columnName = $postData['columns'][$columnIndex]['data']; // Column name
     $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
     $searchValue = $postData['search']['value']; // Search value

     ## Search 
     $searchQuery = "";
     if($searchValue != ''){
        $searchQuery = " (pro_name like '%".$searchValue."%' or pro_price like '%".$searchValue."%' or pro_description like'%".$searchValue."%' ) ";
     }

     ## Total number of records without filtering
     $this->db->select('count(*) as allcount');
     $records = $this->db->get('product')->result();
     $totalRecords = $records[0]->allcount;

     ## Total number of record with filtering
     $this->db->select('count(*) as allcount');
     if($searchQuery != '')
        $this->db->where($searchQuery);
     $records = $this->db->get('product')->result();
     $totalRecordwithFilter = $records[0]->allcount;

     ## Fetch records
     $this->db->select('*');
     if($searchQuery != '')
        $this->db->where($searchQuery);
     $this->db->order_by($columnName, $columnSortOrder);
     $this->db->limit($rowperpage, $start);
     $records = $this->db->get('product')->result();

     $data = array();
     if ($start==0) {
         $rowNum = 1;
     }else{
        $rowNum = $start+1;
     }
     
     foreach($records as $record ){
        $thumb = "<img class='productImage' src='assets/productImages/$record->thumbinal_image'>";
        $edit = "<button onclick=productEdit($record->pro_id) type='button' class='btn btn-info' data-toggle='modal' data-target='#updateModal'><i class='fa fa-pencil-square-o' aria-hidden='true'></i>&nbspUpdate</button>";
        $delete = "<button onclick=getIdForDlt($record->pro_id) type='button' class='btn btn-danger' data-toggle='modal' data-target='#dltModal'><i class='fa fa-trash-o' aria-hidden='true'></i>&nbsp&nbspDelete</button>";
        $view = "<button onclick=productView($record->pro_id) type='button' class='btn btn-success' data-toggle='modal' data-target='#viewModal'><i class='fa fa-eye' aria-hidden='true'></i>&nbspView</button>";
        $data[] = array(
           "pro_id"=>$rowNum,
           "thumbinal_image"=>$thumb, 
           "pro_name"=>$record->pro_name,
           "pro_price"=>$record->pro_price,
           "view"=>$view,
           "updateData"=>$edit,
           "delete"=>$delete
        ); 
        $rowNum++;
     }

     ## Response
     $response = array(
        "draw" => intval($draw),
        "iTotalRecords" => $totalRecords,
        "iTotalDisplayRecords" => $totalRecordwithFilter,
        "aaData" => $data
     );

     return $response; 
   }

}