<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		checkLogin();
		date_default_timezone_set("Asia/Jakarta");
	}

	public function view($productid)
	{  
		$userdata  = $this->session->userdata('userdata');
		$jwt = $userdata['token'];   

		$url = linkservice('stoksis') ."api/products/".$productid."/";
		// URL : http://stoksis-api.azurewebsites.net/api/products/{id}/
		$method = 'GET';
		$responseApi = ngeCurl($url,'', $method , $jwt);
		$res = json_decode($responseApi,true);

		$data['produk'] = $res['data']; 

		$data['title'] = 'Atur Produk';
		$template = 'setting/produkview';

		template($template , $data);		
	}


	public function index()
	{ 

		// $path = base_url('uploads/23161844_904296209728566_3200895811240067072_n.jpg');//http://localhost:8888/Projekan/stok/assets/img/user.jpg';
		// $type = pathinfo($path, PATHINFO_EXTENSION);
		// $data = file_get_contents($path);
		// echo base64_encode($data);
		// exit();

		$userdata  = $this->session->userdata('userdata');
		$jwt = $userdata['token'];   

		$url = linkservice('stoksis') ."api/products/";
		$method = 'GET';
		$responseApi = ngeCurl($url,'', $method , $jwt);
		$res = json_decode($responseApi,true);

		$data['produk'] = $res['data']; 

		$data['title'] = 'Atur Produk';
		$template = 'setting/produk';

		template($template , $data);		
	}



	public function getsubcategorybyid()
	{
	 	// http://stoksis-category-services.azurewebsites.net/api/subcategorybycategoryid?CategoryId=e3cc0f6b-984b-4fb9-9c10-093e7d988fd0
		$userdata  		= $this->session->userdata('userdata');
		$jwt 			= $userdata['token'];   
		$url 			= linkservice('category') ."/api/subcategorybycategoryid?CategoryId=".$_POST['CategoryId'];
		$method 		= 'GET';
		$responseApi 	= ngeCurl($url,'', $method , $jwt);
		$res 			= json_decode($responseApi,true);

		if (count($res['data']) > 0) {
			echo "<option selected>- Pilih Sub Kategori -</option>";
			foreach ($res['data'] as $r) {
				echo "<option value=$r[SubCategoryId]>$r[SubCategoryName]</option>";
			}
		} else {
			echo "<option selected>- Data Tidak Ada, Pilih Yang Lain -</option>";
		} 
	}



	public function add()
	{
		$this->load->library('cart');
		
		// print_r( $this->session->all_userdata() );
		// exit();

		/*
		{
		    "product_name": "Monitor Asus 24 Inc",
		    "product_merk": "AUSU Inc",
		    "category_id": "Cat-01",
		    "sub_category_id": "Sub_cat-01",
		    "price_buy": "1500000",
		    "price_sale": "2000000",
		    "price_capital": "1250000",
		    "ProductsImage": [
		    		{
		        	"path":"diisi dengan base64 photo"
		        }
		    ],
		    "ProductDetails": [
		        {
		            "store_id": "F9CA58C3-91B6-48B2-9C76-77F12CA00900",
		            "status_id": true
		        },
		        {
		            "store_id": "F9CA58C3-91B6-48B2-9C76-77F12CA00900",
		            "status_id": true
		        }
		    ]
		}
		*/

		$userdata = $this->session->userdata('userdata');

		if ($_POST) {

			// print_r($_POST);

			$Insert['product_name'] = @$_POST['namaproduk'];
			$Insert['product_merk'] = @$_POST['merk'];
			$Insert['category_id'] = @$_POST['CategoryId'];
			$Insert['sub_category_id'] = @$_POST['SubKategori'];
			$Insert['price_buy'] = @$_POST['hargabeli'];
			$Insert['price_sale'] = @$_POST['hargajual'];
			$Insert['price_capital'] = "0"; //@$_POST['SubKategori'];
			$Insert['id_user_owner'] = @$userdata['id'];
			$Insert['product_color'] = @$_POST['warna'];
			$Insert['product_size'] = @$_POST['ukuran'];
			$Insert['product_capacity'] = @$_POST['kapasitas'];
			// warna	
			// ukuran
			// kapasitas
			 // [product_size] => 
    //         [product_color] => 
    //         [product_capacity] => 
    //         [product_desc] => 
            // exit();
			// deskripsi

			
			// echo "<pre>";
			// print_r($_POST);

			// print_r($_FILES);
			$config['upload_path'] = './uploads/produk/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']  = '100000';
			$config['max_width']  = '102411';
			$config['max_height']  = '76811';

			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload()){

				echo "&nbsp;";
				$error = array('error' => $this->upload->display_errors());
			}
			else {
				$data = array('upload_data' => $this->upload->data());
				// print_r($data);
				$path = base_url('uploads/produk/'.$data['upload_data']['file_name']);
				$type = pathinfo($path, PATHINFO_EXTENSION);
				$datax = file_get_contents($path);
			// $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

				$Insert['ProductsImage'] = [ array( "path" => base64_encode($datax)) ]; 
			}

			// print_r($Insert);
			// echo json_encode($Insert);
			// exit();
			// print_r($_POST['qty']);

			$quantity = $_POST['qty'];

			$no = 0;
			$ProductDetails = array();
			foreach ($_POST['Store'] as $store) {
				// jika lebih dari 0 data / kuantiti
				if ($quantity[$no] > 0 and $_POST['Store'][$no]) {
					// echo "testing";
					for ($i=0; $i < $quantity[$no]; $i++) { 
						$ProductDetails = array(
							"store_id"	=> $store , 
							"status_id"	=> true
							 );

						$DetailsProduct[] = $ProductDetails; 
						// echo "<br>";
					}

				} else {
					// jika quantity kosong
					// echo $store ;
					// echo "<br>";
				}

				$no++;
			}

			$Insert['ProductDetails'] = $DetailsProduct;

			// print_r($Insert);
			// echo json_encode($Insert);
			
			$jwt = $userdata['token']; 
			@$parameter = $Insert;

			// echo json_encode($parameter);
			// exit();
			// http://stoksis-api.azurewebsites.net/api/products/

			$url = linkservice('stoksis') ."api/products/";
			$method = 'POST';
			$responseApi = ngeCurl($url, json_encode($parameter), $method , $jwt);
			$res = json_decode($responseApi,true);

			// print_r($res);
			// exit();

			// print_r($res);
			// exit();

			// print_r($res);
			// exit();

			// print_r($res);
			// echo json_encode($parameter);
			// exit();
			if ($res['status']==201 or $res == '') {
				
				$this->session->set_flashdata('message', "<script type='text/javascript'> swal('Yeay !', '" . $res['message'] . "', 'success'); </script>");

				redirect('setting/produk','refresh');

			} else {
				$this->session->set_flashdata('message', "<script type='text/javascript'> swal('Uuuh !', '" . $res['message'] . "', 'error'); </script>");

				redirect('setting/produk','refresh');
			}   
			/*
			$data = array(
				'id'      => $sesi['id'],
				'qty'     => 1,
				'datanya'     =>  array(
					'data' => $_POST , 
					'file' => $_FILES  ), 
				'price'   => 39.95,
				'name'    => 'T-Shirt'
				// 'options' => array('Size' => 'L', 'Color' => 'Red')
			);

			// $this->cart->insert($data);
			// $data = array(
			// 	'rowid' => 'dcb22330d336cb6d717125b137c884b5',
			// 	'qty'   => 0
			// );

			// $this->cart->update($data);

			print_r($this->cart->contents());
			exit();




			$number_of_files_uploaded = count($_FILES['userfile']);

			print_r($_FILES['userfile']);
			exit();

			
			exit();
			*/
		}

		// print_r($userdata); 
		$isowner = ($userdata['is_owner'] == '' or $userdata['is_owner'] == 0 ) ? 0 : $userdata['is_owner'];
		$url = linkservice('store').'api/storebyuser?userId='.@$userdata['id'].'&IsOwner='.$isowner;//linkservice('stoksis') ."api/accounts/login/";
		$method = 'GET';
		$responseApi = ngeCurl($url, '', $method);
		$res = json_decode($responseApi,true);
 
		$data['store'] = $res['data'];

		// print_r($res); 
		// exit();
		// print_r($res['data']);
		// exit();

		// http://stoksis-category-services.azurewebsites.net/api/category
		##### get kategori
		$userdata  		= $this->session->userdata('userdata');
		$jwt 			= $userdata['token'];   
		$url 			= linkservice('category') ."api/category/";
		$method 		= 'GET';
		$responseApi 	= ngeCurl($url,'', $method , $jwt);
		$res 			= json_decode($responseApi,true);

		$data['category'] = $res['data'];

		// print_r( $res['data'] ); exit();
		##### end get kategori #####

		$data['title'] = 'Add Produk';
		$template = 'setting/addproduk';

		template($template , $data);		
	}

	public function edit()
	{
		$data['title'] = 'Edit Produk';
		$template = 'setting/editproduk';

		template($template , $data);		
	}

	public function assign()
	{
		$data['title'] = 'Assign Produk';
		$template = 'setting/assign';

		template($template , $data);		
	}

	public function sumary()
	{
		$data['title'] = 'Summary Produk';
		$template = 'setting/summary';

		template($template , $data);		
	}

} 
