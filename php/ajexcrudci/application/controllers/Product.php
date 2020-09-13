<?php
// class Product extends CI_Controller{
// 	function __construct(){
// 		parent::__construct();
// 		$this->load->model('product_model');
// 	}
// 	function index(){
// 		$this->load->view('product_view');
// 	}
// 	public function do_upload()
// 	{
// 			$config['upload_path'] = './uploads/';
// 			$config['allowed_types'] = 'gif|jpg|png';
// 			$config['encrypt name']  = true;


// 			// $config['max_size']             = 100;
// 			// $config['max_width']            = 1024;
// 			// $config['max_height']           = 768;

// 			$this->load->library('upload', $config);

// 			if ( ! $this->upload->do_upload('image'))
// 			{
// 					 $error = array('error' => $this->upload->display_errors());

// 					 $this->load->view('upload_form', $error);
// 					//print_r($this->do_upload->$data());
// 			}
// 			else
// 			{
// 					$data = array('upload_data' => $this->upload->data());

// 					$this->load->view('upload_success', $data);
// 			}
// 	}


// 	function product_data(){
	
// 		$data=$this->product_model->product_list();
// 		echo json_encode($data);
// 	}

// 	function save(){
// 		$data=$this->product_model->save_product();
// 		echo json_encode($data);
// 	}

// 	function update(){
// 		print_r($_POST);
// 		//$data=$this->product_model->update_product();
// 		//echo json_encode($data);
// 	}

// 	function delete(){
// 		$data=$this->product_model->delete_product();
// 		echo json_encode($data);
// 	}

// }



class Product extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('product_model');
	}
	function index(){
		$this->load->view('product_view');
	}

	function product_data(){
		$data=$this->product_model->product_list();
		echo json_encode($data);
	}

	function save(){
		$data=$this->product_model->save_product();
		echo json_encode($data);
	}

	function update(){
		$data=$this->product_model->update_product();
		echo json_encode($data);
	}

	function delete(){
		$data=$this->product_model->delete_product();
		echo json_encode($data);
	}

}