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

	public function channel($channelid)
	{
		if ($channelid == 2) {
			$template = 'setting/facebook';
		}
		$data['title'] = 'Atur Toko';
		template($template , $data);	
	}


	public function getCountStore($storeid='')
	{
		// http://stoksis-api.azurewebsites.net/api/products/total_products/?store_id=c94d252c-77fc-43a8-a667-bbb3166ddce0
		$userdata  = $this->session->userdata('userdata');
		$jwt = $userdata['token'];   

		$url = linkservice('stoksis') ."api/products/total_products/?store_id=".$storeid;
		$method = 'GET';
		$responseApi = ngeCurl($url,'', $method , $jwt);
		$res = json_decode($responseApi,true);

		return $res['data'];

	}

	public function index()
	{

		$sesi = $this->session->userdata('userdata');
		$jwt = $sesi['token'];
		// print_r( $this->session->all_userdata() );
		// exit();
		@$parameter;
		$isowner = ($sesi['is_owner'] == '' or $sesi['is_owner'] == 0 ) ? 0 : $sesi['is_owner'];
		$url = linkservice('store').'api/storebyuser?userId='.@$sesi['id'].'&IsOwner='.$isowner;//linkservice('stoksis') ."api/accounts/login/";
		$method = 'GET';
		$responseApi = ngeCurl($url, '', $method,$jwt);
		$res = json_decode($responseApi,true); 
		// 	"######################################################################";
		$prod = array();
		
		foreach ($res['data'] as $produk) {

			$ss = array(
				"StoreId" => $produk['StoreId'],
				"StoreName" => $produk['StoreName'],
				"StoreAddress" => $produk['StoreAddress'],
				"Latitude" => $produk['Latitude'],
				"Longitude" => $produk['Longitude'],
				"Photo" => $produk['Photo'],
				"AddBy" => $produk['AddBy'],
				"AddDate" => $produk['AddDate'],
				"ModBy" => $produk['ModBy'],
				"ModDate" => $produk['ModDate'],
				"Deleted" => $produk['Deleted'],
				"StoreAccess" => $produk['StoreAccess'],
				"StoreInfo" => $produk['StoreInfo'],
				"CountProduct" => $this->getCountStore($produk['StoreId'])
			);
			$prod[] = $ss;
		}
		// print_r($prod);
		$data['res'] = $prod;
		// exit();

		

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

		$sesi = $this->session->userdata('userdata');
		$jwt = $sesi['token'];

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

		### get channel 

		$url = linkservice('stoksis').'api/accounts/channels/';
		//linkservice('stoksis') ."api/accounts/login/";
		$method = 'GET';
		$responseApi = ngeCurl($url, '', $method , $jwt);
		$res = json_decode($responseApi,true); 
		$data['channel'] = $res['data']; 
		### end get channel


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

		$StoreInfoId = @$_POST['StoreInfoId'];

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
					// 'Photo' => "",
					'ModBy' => "$userdata[id]",
					'ModDate' => date('Y-m-d H:i:s'),
					'StoreInfoUpdate' => [array(
						"StoreInfoId" => "$StoreInfoId", 
						"StoreId" => "$storeId",
						"StoreInfoType" => "string", //channel id 
						"StoreInfoSocialId" => "string", // id social 
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


				if ($res['status']==200 or $res == '') {

					$this->session->set_flashdata('message', "<script type='text/javascript'> swal('Yeay !', '" . $res['message'] . "', 'success'); </script>");

					// redirect('setting/toko','refresh');

				} else {
					$this->session->set_flashdata('message', "<script type='text/javascript'> swal('Uuuh !', 'Harus ubah dengan foto.', 'error'); </script>");

					redirect('setting/toko','refresh');
				}
				// print_r($res);

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
			$jwt = $userdata['token']; 
			$parameter = array(
				'StoreId' => "$storeId",
				'StoreName' => "$namatoko",
				'StoreAddress' => "$alamat",
				'Latitude' => "$lat",
				'Longitude' => "$long",
				'Photo' => "$base64",
				'ModBy' => "$userdata[id]",
				'ModDate' => date('Y-m-d H:i:s'),
				'StoreInfoUpdate' => [array(
					"StoreInfoId" => "$StoreInfoId", 
					"StoreId" => "$storeId",
					"StoreInfoType" => "string",
					"StoreInfoSocialId" => "string",
					"Email" => "$userdata[email]",
					"ModBy" => "$userdata[id]",
					'ModDate' => date('Y-m-d H:i:s'),
				)]
			);

			// echo json_encode($parameter);
			// exit();

			// exit();
			$url = linkservice('store') ."api/store/";
			$method = 'PUT';
			$responseApi = ngeCurl($url, json_encode($parameter), $method , $jwt);
			$res = json_decode($responseApi,true);

			// echo json_encode($parameter); 
			// exit();
			if ($res['status']==200 or $res == '') {
				
				$this->session->set_flashdata('message', "<script type='text/javascript'> swal('Yeay !', '" . $res['message'] . "', 'success'); </script>");

				redirect('setting/toko','refresh'); 
				// echo "berhasil";

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

		// print_r($data['detailtoko']);

		$data['storeid'] = @$storeId;
		// exit(); 

		$data['title'] = 'Atur Toko';
		$template = 'setting/edittoko';

		template($template , $data);		
	}



}

/* End of file Toko.php */
/* Location: ./application/modules/setting/controllers/Toko.php */
