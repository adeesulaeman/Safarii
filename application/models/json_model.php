<?php

class Json_Model extends CI_Model {

	function __construct(){
        parent::__construct();
    }

        
		function get_data($url){
			
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_URL,$url);
		$result = curl_exec($ch);
		curl_close($ch);

		return json_decode($result);
			
		}
}

?>