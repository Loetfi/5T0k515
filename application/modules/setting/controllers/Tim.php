<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tim extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		checkLogin();
		date_default_timezone_set("Asia/Jakarta");
	}


	public function index()
	{ 
		// print_r($this->session->all_userdata());

		################################################
		$userdata  = $this->session->userdata('userdata');
		$jwt = $userdata['token'];   

		$url = linkservice('stoksis') ."api/accounts/account_hierarchy/";
		$method = 'GET';
		$responseApi = ngeCurl($url,'', $method , $jwt);
		$res = json_decode($responseApi,true);

		// print_r($res);
		// exit();

		$data['tim'] = $res['data'];
		################################################

		$data['title'] = 'Atur Tim';
		$template = 'setting/tim';
		template($template , $data);		
	}

	public function add()
	{  
		if ($_POST) {
			// $param = json_decode($parameter, TRUE);
				// echo "<pre>";
				// $_POST['lastname'] = 'ga ada';
				// print_r($_POST);
			// print_r($_FILES);

			$userdata  = $this->session->userdata('userdata');
			$jwt = $userdata['token'];   
			$param = array (
				"image_path" => @$_POST['userfile'],	
				"username" => @$_POST['username'],
				"is_owner" => intval(@$_POST['akses']),
				"firstname" => @$_POST['firstname'],
				"email" => @$_POST['email'],
				"password" => @$_POST['password'],
				"confirm_password" => @$_POST['confirm_password'],
				"lastname" => @$_POST['lastname']
			); 

			$un_cover = array(
				"no_handphone" => NULL,
				"is_active" => true,
					// "image_path"=> "diisi base64",
				"accountSosmed" => [],
				"accountSubscription" => [],
				"accountHierarchy" => []

			);

			// digabung karena gak tercover
			$un_cover = (array_merge($param , @$un_cover));


			// echo json_encode($un_cover);
			// exit();

			$url = linkservice('stoksis') ."api/accounts/register_staff/";
			$method = 'POST';
			$responseApi = ngeCurl($url, json_encode($un_cover), $method , $jwt);
			$res = json_decode($responseApi,true);
			// print_r($res);
			// exit();

			$array = array(
				'staffbaru' => $responseApi
			);

			$this->session->set_userdata( $array );

			// print_r($res);
			// exit();

			if ($res['status']==201) {

				$this->session->set_flashdata('message', "<script type='text/javascript'> swal('Yeay !', 'Berhasil menambahkan User.', 'success'); </script>");

				redirect('setting/tim/addassign','refresh');

			} else {
				$this->session->set_flashdata('message', "<script type='text/javascript'> swal('Uuuh !', 'Gagal', 'error'); </script>");

				redirect('setting/tim','refresh');
			} 

			// print_r($this->session->all_userdata());

			exit();


		}

		$data['title'] = 'Tambah Tim';
		$template = 'setting/tambahtim';

		template($template , $data);		


	}

	public function edit()
	{
		$data['title'] = 'Tambah Tim';
		$template = 'setting/edittim';

		template($template , $data);		
	}

	public function editsummary()
	{
		$data['title'] = 'Edit Tim Summary';
		$template = 'setting/edittimsummary';

		template($template , $data);		
	} 

	public function addassign()
	{

		$userdata = $this->session->userdata('userdata');
		$staffbaru = $this->session->userdata('staffbaru');
		$staff = json_decode($staffbaru , true);
		$staffnya = ($staff['data']);

		if( count($staffnya) > 0){
			// echo "ada";
		} else {

			$this->session->set_flashdata('message', "<script type='text/javascript'> swal('Uuuh !', 'Kamu harus create staff / admin dahulu.', 'error'); </script>");
			
			redirect('setting/tim/','refresh');
		}

		// print_r($staffnya);
		// exit();


		// exit();

		if ($_POST) { 

			$no = 0;
			foreach ($_POST['toko'] as $toko) {

				$param = array(
					"StoreId" => @$_POST['toko'][$no], 
					"StoreUserId" => $staffnya['id'],
					"AddBy" => $userdata['id'],
					"AddDate" => date('Y-m-d H:i:s')
				);

				$dd[] = $param;

				$url = linkservice('store') ."api/storeaccess";
				$method = 'POST';
				$responseApi = ngeCurl($url, json_encode($param), $method);

				$no++;
			}

				// echo "sukses";	

			if (@$_POST['toko'] > 0) {

				$this->session->set_flashdata('message', "<script type='text/javascript'> swal('Yeay !', 'Berhasil menambahkan akses ke ".count($dd)." store.', 'success'); </script>");

				// remove session dari staffbaru karena berhasil assign 
				$this->session->unset_userdata('staffbaru');

				redirect('setting/tim/','refresh');

			} else {
				$this->session->set_flashdata('message', "<script type='text/javascript'> swal('Uuuh !', 'Gagal', 'error'); </script>");

				redirect('setting/tim','refresh');
			} 

			exit();
		}

			// echo "<pre>";
			// print_r($this->session->all_userdata());
		$userdata  = $this->session->userdata('userdata');
		$staffbaru = $this->session->userdata('staffbaru');
		$staff = json_decode($staffbaru , true);


		// print_r($staff);

			$url = linkservice('store').'api/storebyuser?userId='.@$userdata['id'];//linkservice('stoksis') ."api/accounts/login/";
			$method = 'GET';
			$responseApi = ngeCurl($url, '', $method);
			$res = json_decode($responseApi,true);

			$data['store'] = $res['data'];

			$data['nama'] = $staff['data']['firstname'];
			$data['status'] = ($staff['data']['is_owner']==true) ? 'owner' : 'staff';

			// print_r($staff['data']);

			$data['title'] 	= 'Tambah Tim Assign';
			$template 		= 'setting/tambahtimassign';

			template($template , $data);		
		}

		public function addsummary()
		{
			$data['title'] 	= 'Tambah Tim Summary';
			$template 		= 'setting/tambahtimsummary';

			template($template , $data);		
		}

	}

	/* End of file Tim.php */
	/* Location: ./application/modules/setting/controllers/Tim.php */
