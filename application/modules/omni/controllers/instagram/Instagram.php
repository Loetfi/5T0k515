<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instagram extends CI_Controller {

    public function index()
    {
        // $this->load->library('Guzzle');
        require APPPATH.'../guzzle/autoload.php';
        $code  = @$_GET["code"] ? @$_GET["code"] : null;
        $client = new \GuzzleHttp\Client(['verify' => false]);

        try {
            $res = $client->request("POST", "https://api.instagram.com/oauth/access_token", [
                'form_params' => [
                    'client_id' => '850e5e114a0b4f6a8e409a57af9e1f6c',
                    'client_secret' => 'fc16fa9194544a038cd2f74ec1c62e91',
                    'grant_type' => 'authorization_code',
            'redirect_uri' => 'http://stok.awanesia.com/index.php/omni/instagram/instagram', //isi dengan url project anda
            'code' => $code
        ]
      ]);
        } catch (ClientException $e) {
            customException([
                "status" => $this::ERROR_LOGIN_INSTAGRAM,
                "messages" => $e->getMessage(),
            ]);
        }

        /** @var ResponseInterface $res */
        $resultArray = json_decode($res->getBody()->getContents());

        $userInstagram = $resultArray;
        var_dump($userInstagram);
    }

    public function indexs()
    { 
        // echo "oke";
        // exit();
          #guzzle library add to use guzzle
      $this->load->library('guzzle');

  # guzzle client define
      $client     = new GuzzleHttp\Client();

  #This url define speific Target for guzzle
      $url        = 'http://www.google.com';

  #guzzle
      try {
    # guzzle post request example with form parameter
        $response = $client->request( 'POST', 
         $url, 
         [ 'form_params' 
         => [ 'processId' => '2' ] 
     ]
 );
    #guzzle repose for future use
    echo $response->getStatusCode(); // 200
    echo $response->getReasonPhrase(); // OK
    echo $response->getProtocolVersion(); // 1.1
    echo $response->getBody();
} catch (GuzzleHttp\Exception\BadResponseException $e) {
    #guzzle repose for future use
    $response = $e->getResponse();
    $responseBodyAsString = $response->getBody()->getContents();
    print_r($responseBodyAsString);
} 

}

}

/* End of file Instagram.php */
/* Location: ./application/modules/omni/controllers/instagram/Instagram.php */
