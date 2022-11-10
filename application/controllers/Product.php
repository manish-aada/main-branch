<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	
	public function index()
	{
		$this->load->view('product/allProduct');
		$this->load->view('product/model');
	}

	// get all product list
	public function productList(){
	 $postData = $this->input->post();
     $data = $this->Product_model->getProduct($postData);
     echo json_encode($data);
	}

	// insert product
	public function productInsert(){
		$config['upload_path'] = './assets/productImages/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']      = '1024 MB';
        $config['overwrite']     = FALSE;
        $this->load->library('upload',$config);
        if($this->upload->do_upload("thumbinal_image")){
        $data = array('upload_data' => $this->upload->data());
        $_POST['thumbinal_image']=$data['upload_data']['file_name'];
        }
        if (!empty($_POST['thumbinal_image'])) {
           $result=$this->Admin_model->insert_data("product",$_POST);
           $dataInfo = array();
           $files = $_FILES;
           $cpt = count($_FILES['pro_images']['name']);
           for($i=0; $i<$cpt; $i++)
           {           
            $_FILES['pro_images']['name']= $files['pro_images']['name'][$i];
            $_FILES['pro_images']['type']= $files['pro_images']['type'][$i];
            $_FILES['pro_images']['tmp_name']= $files['pro_images']['tmp_name'][$i];
            $_FILES['pro_images']['error']= $files['pro_images']['error'][$i];
            $_FILES['pro_images']['size']= $files['pro_images']['size'][$i];    
            $this->upload->do_upload('pro_images');
            $dataInfo[$i]['product_id']=$result;
            $dataInfo[$i]['pro_images'] = $files['pro_images']['name'][$i];
            $this->Admin_model->insert_data("product_images",$dataInfo[$i]);
        }
        
        print_r(json_encode(array('status'=>1)));
        }else{
        	print_r(json_encode('error'));
        }
		
	}
    
    // delete product data
	public function productDelete(){
		$this->data['delete'] = $this->Admin_model->delete_data('product',array('pro_id'=>$this->input->post('product_id')));
		$this->Admin_model->delete_data('product_images',array('product_id'=>$this->input->post('product_id')));
		print_r(json_encode(array('status'=>1)));
	}
    
    // get product detail
	public function productView(){
		$pro_id = (int)$this->input->post('product_id');
		$data['productDetail']=$this->Admin_model->get_data_where('product',array('pro_id'=>$pro_id));
		$data['productImages']=$this->Admin_model->get_data_where('product_images',array('product_id'=>$pro_id));
		print_r(json_encode(array('productDetail'=>$data['productDetail'][0],'productImages'=>$data['productImages'])));
	}
    
    //product update
	public function productUpdate(){
		$config['upload_path'] = './assets/productImages/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2048000';
		$config['max_width'] = '1024';
		$config['max_height'] = '1024';
        $config['overwrite'] = TRUE;
        $this->load->library('upload',$config);
        if($this->upload->do_upload("thumbinal_image")){
        $data = array('upload_data' => $this->upload->data());
        $_POST['thumbinal_image']=$data['upload_data']['file_name'];
        }
        $removeImg = explode(",", $_POST['pro_image_id']);
        $imgCount = count($removeImg);
        for ($i=0; $i <$imgCount ; $i++) { 
        	$this->Admin_model->delete_data('product',array('pro_id'=>$removeImg[$i]));
		    $this->Admin_model->delete_data('product_images',array('pro_image_id'=>$removeImg[$i]));
        }
        
           unset($_POST['pro_image_id']);
           $result=$this->Admin_model->update_data(array('pro_id'=>$_POST['pro_id']),'product',$_POST);
           $dataInfo = array();
           $files = $_FILES;
           $cpt = count($_FILES['pro_images']['name']);
           if (!empty($_FILES['pro_images']['name'][0])) {
           	
           for($i=0; $i<$cpt; $i++)
           { 

            $_FILES['pro_images']['name']= $files['pro_images']['name'][$i];
            $_FILES['pro_images']['type']= $files['pro_images']['type'][$i];
            $_FILES['pro_images']['tmp_name']= $files['pro_images']['tmp_name'][$i];
            $_FILES['pro_images']['error']= $files['pro_images']['error'][$i];
            $_FILES['pro_images']['size']= $files['pro_images']['size'][$i];    
            $this->upload->do_upload('pro_images');
            $dataInfo[$i]['product_id']=$_POST['pro_id'];
            $dataInfo[$i]['pro_images'] = $files['pro_images']['name'][$i];
            $this->Admin_model->insert_data("product_images",$dataInfo[$i]);
        }
    }
        print_r(json_encode(array('status'=>1)));
	
}

	

	
}
