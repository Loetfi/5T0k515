<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		checkLogin();
		date_default_timezone_set("Asia/Jakarta");
	}


	public function edit()
	{

		$userdata  = $this->session->userdata('userdata');
		$jwt = $userdata['token'];   
		$data['profil'] = $userdata;
		// end

		$template = 'auth/editprofile';
		$data['title'] = 'Edit Profile';
		template($template, $data);		
	}

	public function editakun()
	{
		$userdata  = $this->session->userdata('userdata');
		// print_r($userdata);
		$jwt = $userdata['token'];   

		$data['profil'] = $userdata;

		if ($_POST) {
			// echo json_encode($_POST);
			// print_r($_POST);

			$Tambahan = array();

			if ($_POST['password'] == "" and $_POST['confirm_password'] == "") { 

				$Tambahan = array(
					"password" => null,
					"confirm_password" => null
				);

			} else {

				$Tambahan = array(
					"password" => @$_POST['password'],
					"confirm_password" => @$_POST['confirm_password']
				);
			}

			$Update = array(
				"email" => @$_POST['email'],
				"username" => "$_POST[email]",
				"firstname" => @$_POST['firstname'],
				"lastname" => @$_POST['lastname'],
				"no_handphone" => @$_POST['no_handphone'],
				"image_path" => "diisi base64"
			);


			$userdata  = $this->session->userdata('userdata');
			$jwt = $userdata['token'];   
			$iduser = $userdata['id'];
			$url = linkservice('stoksis')."api/accounts/my_account/".$iduser."/";
			$method = 'PUT';
			$responseApi = ngeCurl($url, json_encode(array_merge($Update , $Tambahan)), $method , $jwt);
			$res = json_decode($responseApi,true);

			if ($res['status']==201) {

				$this->session->set_flashdata('message', "<script type='text/javascript'> swal('Yeay !', '" . $res['message'] . ", Silahkan login kembali.', 'success'); </script>");

				redirect('auth/logout','refresh');

			} else {
				$this->session->set_flashdata('message', "<script type='text/javascript'> swal('Uuuh !', '" . $res['message'] . "', 'error'); </script>");

				redirect('auth/profil/edit','refresh');
			} 


			// {
			// 	"email": "samoedra_3@yahoo.com",
			// 	"username": "samoedra_3@yahoo.com",
			// 	"firstname": "samoedra_3@yahoo.com",
			// 	"lastname": "-",
			// 	"no_handphone": "9999999999",
			// 	"image_path": "diisi base64",
			// 	"password":null,
			// 	"confirm_password":null
			// }
		}

		// print_r($jwt);

		// $url = linkservice('stoksis') ."api/products/total_products/?store_id=".$storeid;
		// $method = 'GET';
		// $responseApi = ngeCurl($url,'', $method , $jwt);
		// $res = json_decode($responseApi,true);


		$template = 'auth/editprofileakun';
		$data['title'] = 'Edit Profile';
		template($template, $data);		
	}
	
}

/* End of file Profil.php */
/* Location: ./application/modules/auth/controllers/Profil.php */
