<?php
trait utility{
	
	public function generate_password($email,$mobile){
		$rand_num = rand(100,999);
		$email = substr($email,0,3);
		$mobile = substr($mobile,0,3);
		$password = $email.'$'.$rand_num.'#'.$mobile;
		$password = str_shuffle($password);
		return $password; 

	}

	public function has_password($password){
		return md5($password);
	}

	function remoteFileExists($url) {
		// echo $url;exit;
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_NOBODY, true);
		curl_exec($ch);
		$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		curl_close($ch);
		// echo $httpCode;exit;
		return $httpCode == 200;
	}
	
	



}

?>
