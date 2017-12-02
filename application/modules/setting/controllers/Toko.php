<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Toko extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		checkLogin();
		date_default_timezone_set("Asia/Jakarta");
	}

	public function view()
	{
		$data['title'] = 'Atur Toko';
		$template = 'setting/toko';
		template($template , $data);	
	}


	public function index()
	{

		// $path = 'http://localhost:8888/Projekan/stok/assets/img/user.jpg';
		// $type = pathinfo($path, PATHINFO_EXTENSION);
		// $data = file_get_contents($path);
		// $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

		// echo $base64 =  base64_encode($base64);
		// echo '<img src="https://stoksisdev.blob.core.windows.net/store/ce174692-fb12-4ff2-a16a-42f0caa93f71">'; 
		// exit(); 
		$sesi = $this->session->userdata('userdata');
		// print_r( $this->session->all_userdata() );
		// exit();
		@$parameter;
		$url = linkservice('store').'api/storebyuser?userId='.@$sesi['id'];//linkservice('stoksis') ."api/accounts/login/";
		$method = 'GET';
		$responseApi = ngeCurl($url, '', $method);
		$res = json_decode($responseApi,true); 
		// 	"######################################################################";

		$data['res'] 		= $res;

		$data['title'] 		= 'Atur Toko';
		$template = 'setting/toko';

		template($template , $data);		 


	}

	public function delete()
	{
		if (isset($_GET['id'])) {

			$userdata  = $this->session->userdata('userdata');
			$jwt = $userdata['token']; 
			$parameter = array(
				'StoreId' => @$this->input->get('id'),
				'ModBy' => @$userdata['id'],
				'ModDate' => date('Y-m-d H:i:s')
			);

			$url = linkservice('store') ."api/store";
			$method = 'DELETE';
			$responseApi = ngeCurl($url, json_encode($parameter), $method , $jwt);
			$res = json_decode($responseApi,true);

			if ($res['status']==200) {
				
				$this->session->set_flashdata('message', "<script type='text/javascript'> swal('Yeay !', '" . $res['message'] . "', 'success'); </script>");

				redirect('setting/toko','refresh');

			} else {
				$this->session->set_flashdata('message', "<script type='text/javascript'> swal('Uuuh !', '" . $res['message'] . "', 'error'); </script>");

				redirect('setting/toko','refresh');
			} 
		} else {
			// echo "gagal delete";
			$this->session->set_flashdata('message', "<script type='text/javascript'> swal('Uuuh !', 'Terjadi kesalahan, silahkan coba lagi.', 'error'); </script>");
				// echo $res['message'];
			redirect('setting/toko','refresh');
		}
	}

	public function add()
	{ 	 

		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']  = '100000';
		$config['max_width']  = '4000';
		$config['max_height']  = '5000';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload()){

			

			if (@$_POST['namatoko'] and @$_POST['alamat']) {


			// insert tanpa foto 
				$namatoko = @$_POST['namatoko'];
				$alamat = @$_POST['alamat'];
				$lat = @$_POST['lat'];
				$long = @$_POST['long'];
			###########
				$userdata  = $this->session->userdata('userdata');
				$jwt = $userdata['token']; 
				$parameter = array(
					'StoreName' => "$namatoko",
					'StoreAddress' => "$alamat",
					'Latitude' => "$lat",
					'Longitude' => "$long",
					'Photo' => "",
					'AddBy' => "$userdata[id]",
					'AddDate' => date('Y-m-d H:i:s'),
					'StoreInfoAdd' => [array(
						"StoreInfoType" => "string",
						"StoreInfoSocialId" => "string",
						"Email" => "$userdata[email]",
						"AddBy" => "$userdata[id]",
						'AddDate' => date('Y-m-d H:i:s'),
					)]
				);

			// exit();
				$url = linkservice('store') ."api/store/";
				$method = 'POST';
				$responseApi = ngeCurl($url, json_encode($parameter), $method , $jwt);
				$res = json_decode($responseApi,true);


				if ($res['status']==200 or $res == '') {

					$this->session->set_flashdata('message', "<script type='text/javascript'> swal('Yeay !', '" . $res['message'] . "', 'success'); </script>");

					redirect('setting/toko','refresh');

				} else {
					$this->session->set_flashdata('message', "<script type='text/javascript'> swal('Uuuh !', '" . $res['message'] . "', 'error'); </script>");

					redirect('setting/toko','refresh');
				}
			} else {
				echo "<font style='font-size:0.001em'>&nbsp;</font>";

				$error = array('error' => $this->upload->display_errors()); 
			// console
				echo "<script> console.log('$error[error]'); </script>";
			}

		}
		else {

			$data = array('upload_data' => $this->upload->data());

			$path = base_url('uploads/'.$data['upload_data']['file_name']);
			$type = pathinfo($path, PATHINFO_EXTENSION);
			$data = file_get_contents($path); 

			$base64 =  base64_encode($data); 

			$namatoko = @$_POST['namatoko'];
			$alamat = @$_POST['alamat'];
			$lat = @$_POST['lat'];
			$long = @$_POST['long'];
			###########
			$userdata  = $this->session->userdata('userdata');
			$jwt = $userdata['token']; 
			$parameter = array(
				'StoreName' => "$namatoko",
				'StoreAddress' => "$alamat",
				'Latitude' => "$lat",
				'Longitude' => "$long",
				'Photo' => "$base64",
				'AddBy' => "$userdata[id]",
				'AddDate' => date('Y-m-d H:i:s'),
				'StoreInfoAdd' => [array(
					"StoreInfoType" => "string",
					"StoreInfoSocialId" => "string",
					"Email" => "$userdata[email]",
					"AddBy" => "$userdata[id]",
					'AddDate' => date('Y-m-d H:i:s'),
				)]
			);

			// exit();
			$url = linkservice('store') ."api/store/";
			$method = 'POST';
			$responseApi = ngeCurl($url, json_encode($parameter), $method , $jwt);
			$res = json_decode($responseApi,true);


			if ($res['status']==200 or $res == '') {
				
				$this->session->set_flashdata('message', "<script type='text/javascript'> swal('Yeay !', '" . $res['message'] . "', 'success'); </script>");

				redirect('setting/toko','refresh');

			} else {
				$this->session->set_flashdata('message', "<script type='text/javascript'> swal('Uuuh !', '" . $res['message'] . "', 'error'); </script>");

				redirect('setting/toko','refresh');
			}
		} 

		$data['title'] = 'Tambah Toko';
		$template = 'setting/tambahtoko'; 

		template($template , $data);
	}


	###########
	public function edit($storeId = '')
	{
		 // = $_GET['StoreId'];
		/*
		{
		  "StoreId": "00000000-0000-0000-0000-000000000000",
		  "StoreName": "string",
		  "StoreAddress": "string",
		  "Latitude": "string",
		  "Longitude": "string",
		  "Photo": "string",
		  "ModBy": "string",
		  "ModDate": "2017-12-02T09:44:20.788Z",
		  "StoreInfoUpdate": [
		    {
		      "StoreInfoId": "00000000-0000-0000-0000-000000000000",
		      "StoreId": "00000000-0000-0000-0000-000000000000",
		      "StoreInfoType": "string",
		      "StoreInfoSocialId": "string",
		      "Email": "string",
		      "ModBy": "string",
		      "ModDate": "2017-12-02T09:44:20.789Z",
		      "Deleted": true
		    }
		  ]
		}
		*/
		// echo "<pre>";	
		

		// print_r($res);


		######### PROSES EDIT

		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']  = '100000';
		$config['max_width']  = '4000';
		$config['max_height']  = '5000';

		$this->load->library('upload', $config);


		if ( ! $this->upload->do_upload()){


			if (@$_POST['namatoko'] and @$_POST['alamat']) {

				// insert tanpa foto 
				$namatoko = @$_POST['namatoko'];
				$alamat = @$_POST['alamat'];
				$lat = @$_POST['lat'];
				$long = @$_POST['long'];
				###########
				$userdata  = $this->session->userdata('userdata');
				$jwt = $userdata['token']; 
				$parameter = array(
					'StoreId' => "$storeId",
					'StoreName' => "$namatoko",
					'StoreAddress' => "$alamat",
					'Latitude' => "$lat",
					'Longitude' => "$long",
					'Photo' => "",
					'ModBy' => "$userdata[id]",
					'ModDate' => date('Y-m-d H:i:s'),
					'StoreInfoAdd' => [array(
						"StoreInfoType" => "string",
						"StoreInfoSocialId" => "string",
						"Email" => "$userdata[email]",
						"AddBy" => "$userdata[id]",
						'AddDate' => date('Y-m-d H:i:s'),
					)]
				);

			// exit();
				$url = linkservice('store') ."api/store/";
				$method = 'PUT';
				$responseApi = ngeCurl($url, json_encode($parameter), $method , $jwt);
				$res = json_decode($responseApi,true);


				if ($res['status']==200 or $res == '') {

					$this->session->set_flashdata('message', "<script type='text/javascript'> swal('Yeay !', '" . $res['message'] . "', 'success'); </script>");

					redirect('setting/toko','refresh');

				} else {
					$this->session->set_flashdata('message', "<script type='text/javascript'> swal('Uuuh !', '" . $res['message'] . "', 'error'); </script>");

					redirect('setting/toko','refresh');
				}
			} else {
				echo "<font style='font-size:0.001em'>&nbsp;</font>";

				$error = array('error' => $this->upload->display_errors()); 
				// console
				echo "<script> console.log('$error[error]'); </script>";
			}

		} else {

			$data = array('upload_data' => $this->upload->data());

			$path = base_url('uploads/'.$data['upload_data']['file_name']);
			$type = pathinfo($path, PATHINFO_EXTENSION);
			$data = file_get_contents($path);
			// $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

			$base64 =  base64_encode($data); 

			$namatoko = @$_POST['namatoko'];
			$alamat = @$_POST['alamat'];
			$lat = @$_POST['lat'];
			$long = @$_POST['long'];
			###########
			$userdata  = $this->session->userdata('userdata');
		echo 	$jwt = $userdata['token']; 
			$parameter = array(
				'StoreId' => "$storeId",
				'StoreName' => "$namatoko",
				'StoreAddress' => "$alamat",
				'Latitude' => "$lat",
				'Longitude' => "$long",
				'Photo' => "",
				'ModBy' => "$userdata[id]",
				'ModDate' => date('Y-m-d H:i:s'),
				'StoreInfoAdd' => [array(
					"StoreInfoType" => "string",
					"StoreInfoSocialId" => "string",
					"Email" => "$userdata[email]",
					"ModBy" => "$userdata[id]",
					'ModDate' => date('Y-m-d H:i:s'),
				)]
			);

			// exit();
			$url = linkservice('store') ."api/store/";
			$method = 'PUT';
			$responseApi = ngeCurl($url, json_encode($parameter), $method , $jwt);
			$res = json_decode($responseApi,true);

			echo json_encode($parameter); 
			exit();
			if ($res['status']==200 or $res == '') {
				
				$this->session->set_flashdata('message', "<script type='text/javascript'> swal('Yeay !', '" . $res['message'] . "', 'success'); </script>");

				redirect('setting/toko','refresh');

			} else {
				$this->session->set_flashdata('message', "<script type='text/javascript'> swal('Uuuh !', '" . $res['message'] . "', 'error'); </script>");

				redirect('setting/toko','refresh');
			}
		} 

		###### END PROSES EDIT
		$userdata  = $this->session->userdata('userdata');
		$jwt = $userdata['token']; 
		$url = linkservice('store') ."api/storebyid?storeId=".$storeId;
		$method = 'GET';
		$responseApi = ngeCurl($url, '', $method , $jwt);
		$res = json_decode($responseApi,true);
		$data['detailtoko'] = $res['data'][0];

		echo $data['storeid'] = @$storeId;
		// exit();

		$data['title'] = 'Atur Toko';
		$template = 'setting/edittoko';

		template($template , $data);		
	}



}

/* End of file Toko.php */
/* Location: ./application/modules/setting/controllers/Toko.php */
