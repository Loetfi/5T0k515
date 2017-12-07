<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pos extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		checkLogin();
		date_default_timezone_set("Asia/Jakarta");
	}

	public function textcache()
	{
		$this->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file'));

		if ( ! $foo = $this->cache->get('foo'))
		{
			echo 'Saving to the cache!<br />';
			$foo = 'foobarbaz!';

        // Save into the cache for 5 minutes
			$this->cache->save('foo', $foo, 60);
		}

		echo $foo;
	}

	public function getproductid($productid)
	{
		$userdata  = $this->session->userdata('userdata');
		$jwt = $userdata['token'];   
		$url = linkservice('stoksis') ."/api/products/".$productid."/";
		$method = 'GET';
		$responseApi = ngeCurl($url,'', $method , $jwt);
		$res = json_decode($responseApi,true);
		return $res['data']['product_name']; 
	}

	public function getchannel($channelid)
	{
		$userdata  = $this->session->userdata('userdata');
		$jwt = $userdata['token'];   
		#### get channel 
		$url = linkservice('stoksis') ."api/accounts/channels/7/";
		$method = 'GET';
		$responseApi = ngeCurl($url,'', $method , $jwt);
		$res = json_decode($responseApi,true); 
		return $res['data']['channel_name']; 
	}
	

	public function index()
	{
		$userdata  = $this->session->userdata('userdata');
		$jwt = $userdata['token'];   
		$isowner = ($userdata['is_owner'] == '' or $userdata['is_owner'] == 0 ) ? 0 : $userdata['is_owner']; 
		$url = linkservice('sales') ."api/salesbyuserid?DateStart=2017-01-01&DateEnd=2017-01-01&UserId=".$userdata['id']."&IsOwner=".$userdata['is_owner'];
		// exit();
		$method = 'GET';
		$responseApi = ngeCurl($url,'', $method , $jwt);
		$res = json_decode($responseApi,true);

		// print_r($res);

		// exit();
		$data['invoices'] = $res['data'];

		$this->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file'));

		$det = array();

		foreach ($data['invoices'] as $inv) {
			$invv['SalesId'] = $inv['SalesId'];
			$invv['InvoiceNumber'] = $inv['InvoiceNumber'];
			$invv['ProductId'] = $this->getproductid($inv['ProductId']);
			$invv['ChannelId'] = $this->getchannel($inv['ChannelId']);
			
			$det[] = $invv;
		}

		// print_r($det);
		// exit();


		$data['invoice'] = $det; 

		#### invoice end 

		$template = 'pos/mypos';
		$data['title'] = 'My POS';
		template($template, $data);		
	}

	public function detail($salesid)
	{
		// http://stoksis-sales-services.azurewebsites.net/api/salesdetailbyid?salesId=3bdede6c-470b-41b5-97f9-556c6f177f46

		$userdata  = $this->session->userdata('userdata');
		$jwt = $userdata['token'];   

		$url = linkservice('sales') ."api/salesdetailbyid?salesId=".$salesid;
		$method = 'GET';
		$responseApi = ngeCurl($url,'', $method , $jwt);
		$res = json_decode($responseApi,true);
 

		// print_r($res['data'][0]);
		$data['detail'] = $res['data'][0];
  		
  		##########
		$url = linkservice('stoksis') ."/api/products/".$res['data'][0]['ProductId']."/";
		$method = 'GET';
		$responseApi = ngeCurl($url,'', $method , $jwt);
		$resi = json_decode($responseApi,true);
		$data['detailproduk'] = $resi['data']; //$this->getproductid($resi['data'][0]['ProductId']);
		// return $res['data']['product_name']; 
		##########

		$template = 'pos/detailtransaksipos';
		$data['title'] = 'My POS';
		template($template, $data);		
	}

}

/* End of file Pos.php */
/* Location: ./application/modules/pos/controllers/Pos.php */
