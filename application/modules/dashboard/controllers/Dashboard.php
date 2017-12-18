<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('cart');
		//cek login 
		isLogin();
	}

	public function index()
	{

		// $this->cart->destroy();

		$sesi = $this->session->userdata('userdata');
		// exit();



		#### get tax
		$userdata  = $this->session->userdata('userdata');
		$jwt = $userdata['token']; 
		@$parameter;
		$url = linkservice('sales') ."api/tax";
		$method = 'GET';
		$responseApi = ngeCurl($url, '', $method, $jwt);
		$res = json_decode($responseApi,true);
		// $data['storecount'] = count($res['data']);
		$array = array(
			'pajak' => $res['data'][0]
		);
		
		$this->session->set_userdata( $array );

		######### end tax

		


		#### get count store
		// $userdata  = $this->session->userdata('userdata');
		// $jwt = $userdata['token']; 
		@$parameter;
		$isowner = ($sesi['is_owner'] == '' or $sesi['is_owner'] == 0 ) ? 0 : $sesi['is_owner']; 
		$url = linkservice('store') ."api/storebyuser?userId=".@$sesi['id']."&IsOwner=".$isowner;
		$method = 'GET';
		$responseApi = ngeCurl($url, '', $method, $jwt);
		$res = json_decode($responseApi,true);
		$data['storecount'] = count($res['data']);
		######### get end count store


		## count tim  
		$url = linkservice('stoksis') ."api/accounts/account_hierarchy/";
		$method = 'GET';
		$responseApi = ngeCurl($url,'', $method , $jwt);
		$res = json_decode($responseApi,true);
		$data['timcount'] = count($res['data']);
		## end


		// ## count produk 

		$url = linkservice('stoksis') ."api/products/";
		$method = 'GET';
		$responseApi = ngeCurl($url,'', $method , $jwt);
		$res = json_decode($responseApi,true);
		$data['produkcount'] = count($res['data']); 

		## end 

		## get count sales 

		$url = linkservice('sales') ."api/dashboardbyuserid?UserId=".$sesi['id']."&IsOwner=".$sesi['is_owner'];
		$method = 'GET';
		$responseApi = ngeCurl($url,'', $method , $jwt);
		$res = json_decode($responseApi,true);
		$data['salescount'] = $res['data'][0]; 

		// http://stoksis-sales-services.azurewebsites.net/api/dashboardbyuserid?UserId=196&IsOwner=1

		#### end 


		$template = 'dashboard/dashboard';
		$data['title'] = 'Dashboard';
		template($template, $data);		
	}

}

/* End of file Dashboard.php */
/* Location: ./application/modules/dashboard/controllers/Dashboard.php */
