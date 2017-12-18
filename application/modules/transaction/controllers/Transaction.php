<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->library('cart');
    checkLogin();
    date_default_timezone_set("Asia/Jakarta");
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
    $startdate = @$_GET['startdate'] ? date('Y-m-d' , strtotime($_GET['startdate'])) : date('Y')."-01-01";
    $enddate = @$_GET['enddate'] ? date('Y-m-d' , strtotime($_GET['enddate'])) : date('Y')."-12-01";

    $userdata  = $this->session->userdata('userdata');
    $jwt = $userdata['token'];   
    $isowner = ($userdata['is_owner'] == '' or $userdata['is_owner'] == 0 ) ? 0 : $userdata['is_owner']; 
    $url = linkservice('sales') ."api/salesbyuserid?DateStart=".$startdate."&DateEnd=".$enddate."&UserId=".$userdata['id']."&IsOwner=".$userdata['is_owner'];
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

    $template = 'transaction/daftartransaksi';
    $data['title'] = 'Daftar Transaksi'; 
    template($template, $data);   


    // $userdata  = $this->session->userdata('userdata');
    // $jwt = $userdata['token'];   

    // $url = linkservice('sales') ."api/salesbyuserid?DateStart=2017-01-01&DateEnd=2017-01-01&UserId=".$userdata['id']."&IsOwner=".$userdata['is_owner'];
    // $method = 'GET';
    // $responseApi = ngeCurl($url,'', $method , $jwt);
    // $res = json_decode($responseApi,true);

    // $data['invoices'] = $res['data'];

    // // $this->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file'));

    // // $det = array();
    
    // // foreach ($data['invoices'] as $inv) {
    // //   $invv['SalesId'] = $inv['SalesId'];
    // //   $invv['InvoiceNumber'] = $inv['InvoiceNumber'];
    // //   $invv['ProductId'] = $this->getproductid($inv['ProductId']);
    // //   $invv['ChannelId'] = $this->getchannel($inv['ChannelId']);

    // //   $det[] = $invv;
    // // }

    // // $data['invoice'] = $det; 


    // $template = 'transaction/daftartransaksi';
    // $data['title'] = 'Daftar Transaksi';
    // template($template, $data);   
  }

  public function detail()
  {
    $template = 'transaction/detailtransaksi';
    $data['title'] = 'Detail Transaksi';
    template($template, $data);   
  }

}

/* End of file Transaction.php */
/* Location: ./application/modules/transaction/controllers/Transaction.php */
