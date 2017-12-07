<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

// meload omni facebook untuk keperluan access token
require_once  APPPATH.'../omni/facebook/php-sdk-v4/src/Facebook/autoload.php';


Class Login extends CI_Controller
{
	var $appid      = '1797631263599363';
	var $app_secret = '4c4f11292235c85549f5d3eb5acadb3f'; 

	public function index()
	{ 
        // session_start();
        $_SESSION['FBRLH_state'] = @$_REQUEST['state']; 

        $fb = new Facebook\Facebook([ 
          'app_id' => $this->appid, // Replace {app-id} with your app id
          'app_secret' => $this->app_secret,
          'default_graph_version' => 'v2.2', 
      ]);

        $helper = $fb->getRedirectLoginHelper(); 

      //   $helper = $fb->getCanvasHelper($this->appid, // Replace {app-id} with your app id
      //     'app_secret' => $this->app_secret,
      //     'default_graph_version' => 'v2.2', 
      // ]);  
      //   $permissions = ['email', 'publish_actions']; 
        // Trick below will avoid "Cross-site request forgery validation failed. Required param "state" missing." from Facebook

        // print_r($this->session->all_userdata());

        try {
            // echo "1";
           $accessToken = $helper->getAccessToken();
       } catch(Facebook\Exceptions\FacebookResponseException $e) {
              // When Graph returns an error
           $pesan = 'Graph returned an error: ' . $e->getMessage();
            // echo "2";
           exit;
       } catch(Facebook\Exceptions\FacebookSDKException $e) {
              // When validation fails or other local issues
           $pesan = 'Facebook SDK returned an error: ' . $e->getMessage();
            // echo "3";
           exit;
       }

       if (! isset($accessToken)) {
           if ($helper->getError()) {
            header('HTTP/1.0 401 Unauthorized');
            echo "Error: " . $helper->getError() . "\n";
            echo "Error Code: " . $helper->getErrorCode() . "\n";
            echo "Error Reason: " . $helper->getErrorReason() . "\n";
            echo "Error Description: " . $helper->getErrorDescription() . "\n";
        } else {
            header('HTTP/1.0 400 Bad Request');
            echo 'Bad request';
        } 
        exit; 
    } 
                    // The OAuth 2.0 client handler helps us manage access tokens
    $oAuth2Client = $fb->getOAuth2Client();

                    // Get the access token metadata from /debug_token
    $tokenMetadata = $oAuth2Client->debugToken($accessToken); 

            // Validation (these will throw FacebookSDKException's when they fail)
            $tokenMetadata->validateAppId($this->appid); // Replace {app-id} with your app id
            // If you know the user ID this access token belongs to, you can validate it here
            //$tokenMetadata->validateUserId('123');
            $tokenMetadata->validateExpiration();

            if (! $accessToken->isLongLived()) {
              // Exchanges a short-lived access token for a long-lived one
            	try {
            		$accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
            	} catch (Facebook\Exceptions\FacebookSDKException $e) {
            		echo "<p>Error getting long-lived access token: " . $helper->getMessage() . "</p>\n\n";
            		exit;
            	}

              // echo '<h3>Long-lived</h3>';
              // var_dump($accessToken->getValue());
            }

            // bagian ini mendapatkan profil setelah mendapatkan token dari pelogin
            $token = (string) $accessToken;  

            // $pesan = 'Sukses Get Token';

            try {
              // Returns a `Facebook\FacebookResponse` object
            	$response = $fb->get('/me?fields=id,name,email', $token);
            } catch(Facebook\Exceptions\FacebookResponseException $e) {
            	$pesan =  'Graph returned an error: ' . $e->getMessage();
            	exit;
            } catch(Facebook\Exceptions\FacebookSDKException $e) {
            	$pesan = 'Facebook SDK returned an error: ' . $e->getMessage();
            	exit;
            }
            $user = $response->getGraphUser();
            // end

 			// jika email si pengguna facebook sudah pernah diregisterkan sebelumnya


            // mendaftarkan hasil callback ke session
            $setfacebook = array(
            	'tokenfb' => @$token,
            	'namefb' => @$user['name'],
            	'emailfb' => @$user['email'], 
            	'usernamefb' => @$user['username'],
            );
            $this->session->set_userdata( $setfacebook );
            // end 
 

            $parameter = array(
                "email" => $user['email']
            );

            $url = linkservice('stoksis') ."api/accounts/loginSosmed/";
            $method = 'POST';
            $responseApi = ngeCurl($url, json_encode($parameter), $method);
            // $res = json_decode($responseApi , true);

            // exit();
            // die();

            $data = json_decode($responseApi, TRUE); 
            // print_r($data); 

            if ($data['status'] === 400) { 

                $daftarin = array(
                    "email" => $user['email'],
                    "username" => $user['email'],
                    "firstname"=> $user['email'],
                    "lastname" => "-",
                    "is_active" => true,
                    "is_owner" => true,
                    "no_handphone" => "082114610188",
                    "image_path" => "diisi base64",
                    "accountSosmed" => [],
                    "accountSubscription" => [],
                    "accountHierarchy" => []
                );

                $url = linkservice('stoksis') ."api/accounts/loginSosmed/";
                $method = 'POST';
                $daftarinres = ngeCurl($url, json_encode($daftarin), $method);
                $datares = json_decode($daftarinres, TRUE); 

                // print_r($daftarin);
                // print_r($datares);
                // echo json_encode($daftarin);
                // exit();
                
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

            }
            else {

                $this->session->set_flashdata('message', "<script type='text/javascript'> swal('Uuuh !', '" . $data['message'] . "', 'error'); </script>");

                redirect('auth/login','refresh');
            } 

            // //redirect ke halaman register facebook
            // //redirect('omni/facebook/register','refresh');


            // //redirect('dashboard','refresh'); 


        }
    }
