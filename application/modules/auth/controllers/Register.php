<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('template');
		$this->load->library('googleplus');

		// check login 
		isLogin();
	} 

	public function index()
	{
		// echo "login";

		if ($this->input->post('email')) {

			$res = $this->proses(json_encode($this->input->post()));
			$data = json_decode($res, TRUE);

			// print_r($data);
			// exit();

			if ($data['status'] === 201) { 

				$this->session->set_flashdata('message', "<script type='text/javascript'> swal('Good job!', '" . $data['message'] . "', 'success'); </script>"); 
				
				redirect('auth/login','refresh');
				exit();
			}  else {
				$this->session->set_flashdata('message', "<script type='text/javascript'> swal('Uuuh !', '" . $data['message'] . "', 'error'); </script>");
			} 
		}

		$data['title'] 	= 'Signup';
		$template 		= 'auth/signup';
		template_auth($template , $data);
		
	}


	public function proses($parameter = '')
	{
		// {"firstname":"kkk","lastname":"kkk","no_handphone":"919119","email":"pevita@gmail.com","username":"pevita","password":"telkomd2","confirm_password":"telkomd2"}
  		$param = json_decode($parameter, TRUE);
 
		$un_cover = array(
			"is_active" => true,
			"is_owner" => true,
			"image_path"=> "diisi base64",
			"accountSosmed" => [],
			"accountSubscription" => [],
			"accountHierarchy" => []
		);

		// digabung karena gak tercover
		$parameter = (array_merge($param , $un_cover));

		$url = linkservice('stoksis') ."api/accounts/register/";
		$method = 'POST';
		$responseApi = ngeCurl($url, json_encode($parameter), $method);

		return $responseApi;
	}


}

/* End of file Register.php */
/* Location: ./application/modules/auth/controllers/Register.php */
