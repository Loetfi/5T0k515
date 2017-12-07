<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Callback extends CI_Controller {

	public function index()
	{
		$this->load->library('googleplus');
		/*
		* ini adalah callback dari oauth facebook. 
		* jika digunakan di front end harus ada treathment khusus.
		*/ 
		if (isset($_GET['code'])) { 
			$this->googleplus->getAuthenticate();  
			// print_r($this->googleplus->getUserInfo());
			$data = $this->googleplus->getUserInfo(); 


			$array = array(
				'emailgoogle' 	=> @$data['email'],
				'namegoogle' 	=> @$data['name'],
			);
			
			$this->session->set_userdata( $array );

			$emailgooglenya = @$data['email'];

			############################################################
			$res = $this->proses(json_encode( 
				[
					'email' => @$emailgooglenya ,
					'username' => @$emailgooglenya
				] 	
			));

			

			$data = json_decode($res, TRUE); 

			if ($data['status'] === 400) { 

				$daftarin = array(
					"email" => @$emailgooglenya,
					"username" => @$emailgooglenya,
					"firstname"=> "$emailgooglenya",
					"lastname" => "-",
					"is_active" => true,
					"is_owner" => true,
					"no_handphone" => "082114610188",
					"image_path" => "diisi base64",
					"accountSosmed" => [],
					"accountSubscription" => [],
					"accountHierarchy" => []
				);

				$daftarinres = $this->proses(json_encode($daftarin));
				$datares = json_decode($daftarinres, TRUE); 
 				
 				// didaftarin dan berhasil
				if ($datares['status'] == 201) {
					
					$this->session->set_flashdata('message', "<script type='text/javascript'> swal('Good job!', '" . $datares['message'] . "', 'success'); </script>");
					// menambahkan untuk session
					$array = array(
						'userdata' => array_merge(@$datares['data']['0'] , @$datares['data']['1'])
					);
					$this->session->set_userdata( $array );

					redirect('dashboard','refresh');
					exit();

				} else {
					
					$this->session->set_flashdata('message', "<script type='text/javascript'> swal('Uuuh !', 'Kesalahan terjadi, silahkan coba lagi.', 'error'); </script>");
					redirect('auth/login','refresh');
				}
				
			} elseif ($data['status']==200) {

				$this->session->set_flashdata('message', "<script type='text/javascript'> swal('Good job!', '" . $data['message'] . "', 'success'); </script>");
				// menambahkan untuk session
				$array = array(
					'userdata' => array_merge(@$data['data']['0'] , @$data['data']['1'])
				);
				$this->session->set_userdata( $array );

				redirect('dashboard','refresh');
				exit();

			} else {

				$this->session->set_flashdata('message', "<script type='text/javascript'> swal('Uuuh !', '" . $data['message'] . "', 'error'); </script>");

				redirect('auth/login','refresh');
			} 
			##############################################################


		} else {
			//mengembalikan ke auth register
			redirect('auth/register','refresh');
			// redirect('afterlogin','refresh');
		}
		
	}


	public function proses($parameter = '')
	{
		// $this->output->set_content_type('application/json');
		$parameter;
		// exit();

		// echo "berhasil";
		// print_r($parameter);
		// $json = file_get_contents('php://input');
  		// $dataInsert = json_decode($json, TRUE); 

		$url = linkservice('stoksis') ."api/accounts/loginSosmed/";
		$method = 'POST';
		$responseApi = ngeCurl($url, $parameter, $method); 

		return $responseApi;

	}

}

/* End of file Callback.php */
/* Location: ./application/controllers/omni/google/Callback.php */
