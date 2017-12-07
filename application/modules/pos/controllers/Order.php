<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('cart');
		checkLogin();
		date_default_timezone_set("Asia/Jakarta");
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

	public function getdetailproduk()
	{
		if ($_POST) {
			# code...
			$produkid = $this->input->post('produkid');

			$userdata  = $this->session->userdata('userdata');
			$jwt = $userdata['token'];   

			$url = linkservice('stoksis') ."api/products/".trim($produkid)."/";
			$method = 'GET';
			$responseApi = ngeCurl($url,'', $method , $jwt);
			$res = json_decode($responseApi,true);

		// return $res['data'];

		// print_r($res); 

			$data['produkdetail'] = $res['data'];

		// print_r($data['produkdetail']);

			$this->load->view('pos/detailmodalchooseproduk', $data); 

		} else {
			echo "bad param";
		}
	}

	public function index()
	{

		$sesi = $this->session->userdata('userdata');
		$jwt = $sesi['token'];

		// print_r($sesi);
		// echo $sesi['is_owner'];

		// print_r( $this->session->all_userdata() );
		// exit();
		@$parameter;
		
		// cek isowner
		$isowner = ($sesi['is_owner'] == '' or $sesi['is_owner'] == 0 ) ? 0 : $sesi['is_owner'];

		$url = linkservice('store').'api/storebyuser?userId='.@$sesi['id']."&IsOwner=".$isowner;//linkservice('stoksis') ."api/accounts/login/";
		$method = 'GET';
		$responseApi = ngeCurl($url, '', $method , $jwt);
		$res = json_decode($responseApi,true); 

		// print_r($res);
		// exit();


	

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
		
		$data['res'] = $prod;
		
		// start
		$template = 'pos/tambahorder';
		$data['title'] = 'Tambah Order';
		template($template, $data);	
		// end 
	}

	// public function index()
	// {
	// 	$template = 'pos/tambahorder';
	// 	$data['title'] = 'Tambah Order';
	// 	template($template, $data);		
	// }

	public function pilih() 
	{	
		// $storeid = 
		$array = array(
			'storeidpos' => "$_GET[store]"
		);
		$this->session->set_userdata( $array ); 

		if (empty($_GET['store'])) {
			$this->session->set_flashdata('message', "<script type='text/javascript'> swal('Uuuh !', 'Kamu belum memilih toko', 'error'); </script>");
			redirect('pos/','refresh');
			exit();
		}

		$template = 'pos/tambahorderchoose';
		$data['title'] = 'Pilih Order';
		template($template, $data);		
	}

	public function chooseproduk()
	{

		// http://stoksis-api.azurewebsites.net/api/products/total_products/

		$userdata  = $this->session->userdata('userdata');
		$jwt = $userdata['token'];   

		$url = linkservice('stoksis') ."api/products/total_products/?store_id=".$_GET['store'];
		$method = 'GET';
		$responseApi = ngeCurl($url,'', $method , $jwt);
		$res = json_decode($responseApi,true);
 

		$array = array(
			'sale' => array(
				'saluran' => @$_POST['saluran'],
				'storeid' => $_GET['store']
			)
		);
		
		$this->session->set_userdata( $array );

		// print_r($res);
		// exit();

		$data['produklist'] = $res['data'];


		
		// print_r($_POST);
		// exit();

		$template = 'pos/tambahorderchooseproduk';
		$data['title'] = 'Tambah Order Choose Produk';
		template($template, $data);		
	}

	public function tambahordercartpage()
	{
		$this->load->library('cart');

		$pajak  = $this->session->userdata('pajak');
		// print_r($pajak);
		// print_r($pajak);

		$data = array(
			'id'      => 'sku_123ABC',
			'qty'     => 1,
			'price'   => '19.56',
			'name'    => 'T-Shirt',
			'options' => $_GET
			//array('Size' => 'L', 'Color' => 'Red')
		);
		$this->cart->insert($data);

		// print_r($this->cart->contents());
		$template = 'pos/tambahordercartpage';
		$datas['pajak'] = $pajak['TaxValue'];
		$datas['title'] = 'Cart';
		template($template, $datas);		
	}

	public function payoptiontunai()
	{
		$userdata  = $this->session->userdata('userdata');
		$pajak  = $this->session->userdata('pajak');
		$data['pajak'] = $pajak['TaxValue'];

		if ($_POST) {

// 			{
//   "InvoiceDate": "2017-12-05T11:44:46.662Z",
//   "TaxPercentage": 0,
//   "TaxAmmount": 0,
//   "TotalAfterTax": 0,
//   "TotalPaid": 0,
//   "CustomerEmail": "string",
//   "AddBy": "string",
//   "AddDate": "2017-12-05T11:44:46.663Z",
//   "Sales": [
//     {
//       "ProductId": "string",
//       "BasedPrice": 0,
//       "ActualPrice": 0,
//       "ChannelId": "string",
//       "TotalActualPrice": 0,
//       "Quantity": 0,
//       "StoreId": "string",
//       "SalesDate": "2017-12-05T11:44:46.665Z"
//     }
//   ]
// }
			
// )

			// print_r($this->cart->contents());
			// exit();

			foreach ($this->cart->contents() as $items){
				$barangbeli['ActualPrice'] = (int) $items['options']['price_sale'];
				$barangbeli['ProductId'] = $items['options']['product_id'];
				$barangbeli['BasedPrice'] = 0;//$items['options'][]; 
				//$barangbeli['ActualPrice'] = $items['options'][]; 
				$barangbeli['ChannelId'] = "7";//$items['options'][]; 
				$barangbeli['TotalActualPrice'] = (int)  $items['options']['quant'] * $items['options']['price_sale']; //$items['options'][]; 
				$barangbeli['Quantity'] = (int) $items['options']['quant']; 
				$barangbeli['StoreId'] = $this->session->userdata('storeidpos');//$items['options']['']; 
				$barangbeli['SalesDate'] = date('Y-m-d H:i:s'); 
				$beli[] = $barangbeli;
			}    

			// print_r($beli);

			$OrderDeal = array(
				"InvoiceDate" => date('Y-m-d H:i:s'),
				"TaxPercentage" => $data['pajak'],//$_POST['pajak'],
				"TaxAmmount" => (int) $_POST['hargapajak'],
				"TaxAfterTax" => (int) str_replace(',', '', $_POST['total']),
				"TotalPaid" => (int) $_POST['uangtunai'],
				"CustomerEmail" => $_POST['alamatemail'],
				"AddBy"	=> "$userdata[id]",
				"AddDate"	=> date('Y-m-d H:i:s'),
				"Sales" => $beli
			);

			// echo json_encode($OrderDeal);
			$jwt = $userdata['token'];   
			// exit();

			// http://stoksis-sales-services.azurewebsites.net/api/addinvoicecash
			$userdata  = $this->session->userdata('userdata');

			$url = linkservice('sales') ."api/addinvoicecash";
			$method = 'POST'; 
			$responseApi = ngeCurl($url,json_encode($OrderDeal), $method , $jwt); 
			$res = json_decode($responseApi,true);


			// print_r($responseApi);
			// exit();
			// print_r($res);
			if ($res['status']==200) {

				$this->session->set_flashdata('message', "<script type='text/javascript'> swal('Yeay !', 'Transaksi Berhasil', 'success'); </script>");

				$this->session->unset_userdata('storeidpos');
				$this->cart->destroy();

				redirect('pos','refresh');
				exit();

			} else {
				$this->session->set_flashdata('message', "<script type='text/javascript'> swal('Uuuh !', 'Gagal', 'error'); </script>");
				redirect('pos/order/payoptiontunai','refresh');
				exit();
			} 

			// print_r($OrderDeal);

		}

		$template = 'pos/payoptiontunai';
		$data['title'] = 'Pay';
		template($template, $data);		
	} 

	public function payoptioncc()
	{
		$template = 'pos/payoptioncc';
		$data['title'] = 'Pay';
		template($template, $data);		
	} 
}

/* End of file Order.php */
/* Location: ./application/modules/pos/controllers/Order.php */
