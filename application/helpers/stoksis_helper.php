<?php 

function isLogin()
{
	$ci =& get_instance();
	$session = @$ci->session->userdata('userdata');
	if (isset($session['email'])) {

		if ($ci->uri->segment(1) === strtolower('dashboard')) {

		} else {

			$ci->session->set_flashdata('message', "<script type='text/javascript'> swal('Hai " .$session['firstname']. "', 'Kamu masih login', 'info'); </script>"); 

			redirect('dashboard','refresh');

		}

	} else {

		if ($ci->uri->segment(2) || $ci->uri->segment(1) === strtolower('login')) {

		} else { 
			
			$ci->session->set_flashdata('message', "<script type='text/javascript'> swal('Hai Pengguna', 'Silahkan lakukan login', 'error'); </script>"); 
			
			redirect('auth/login','refresh');
			
		}  
	}
}


function checkLogin()
{
	$ci =& get_instance();
	$session = @$ci->session->userdata('userdata');
	if (!isset($session['email'])) {

	


		$ci->session->set_flashdata('message', "<script type='text/javascript'> swal('Hai Pengguna', 'Silahkan lakukan login', 'error'); </script>"); 
			redirect('auth/login','refresh');
			exit(); 
	}  
}


function ngeCurl($url, $dataArray = "", $method='GET' , $jwt = '' ){
	$ci =& get_instance();
	
	// $dataPost = http_build_query($dataArray);
	//    "authorization: JWT eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6InBldml0YUBnbWFpbC5jb20iLCJ1c2VyX2lkIjo3MCwiZW1haWwiOiJwZXZpdGFAZ21haWwuY29tIiwiZXhwIjoxNTEwMzQyMTYwfQ.9j_1VkOOof0PRgC81t0TH7-XeNZxXgMVgJEo2YlMgmI"

	if ($jwt != '') {
		$resJWT = array(
			"content-type: application/json",
			"authorization: JWT $jwt"
		);//array()
	} else {
		$resJWT = array(
			"content-type: application/json");
	}

	$curl = curl_init();
	curl_setopt_array($curl, array(
		CURLOPT_PORT => "",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_HTTPHEADER => $resJWT,
		// array(
		// 	"content-type: application/json",
		// 	"authorization: JWT application/json",
		// ), 
		
		CURLOPT_URL => $url,
		CURLOPT_POSTFIELDS => $dataArray ,
		CURLOPT_CUSTOMREQUEST => $method,
	));

	$response = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);
	
	// return array(
	// 	'response' => $response,
	// 	'err' => $err,
	// );

	return $response;
}


function linkservice($services)
{ 
	$STOKSIS = ('STOKSIS' == strtoupper($services)) ? $return = 'http://stoksis-api.azurewebsites.net/' : ''; 
	$STOKSIS = ('SALES' == strtoupper($services)) ? $return = 'http://stoksis-sales-services.azurewebsites.net/' : ''; 
	$CATEGORY = ('CATEGORY' == strtoupper($services)) ? $return = 'http://stoksis-category-services.azurewebsites.net/' : ''; 
	$STORE = ('STORE' == strtoupper($services)) ? $return = 'http://stoksis-store-services.azurewebsites.net/' : '';
	
	return $return;
}


function responAPI($data)
{ 
	header('Content-Type: application/json');
	return $data;
}

?>
