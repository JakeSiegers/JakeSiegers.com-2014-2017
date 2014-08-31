<?php
	$m = new Mail();
	class Mail{
		function __construct(){
			$requiredFields = array('name','email','message');
			$f = array();
			$missingFields = array();
			foreach($requiredFields as $rField){
				if(!isset($_POST[$rField]) || strlen(trim($_POST[$rField])) === 0){
					$missingFields[] = $rField;
				}else{
					$f[$rField] = $_POST[$rField];
				}
			}
			if(count($missingFields)>0){
				$this->json(array(
					'success' => false
					,'fields' => $missingFields
					,'error' => 'Please fill out required fields.'
				));
				return false;
			}
			if(!filter_var($f['email'], FILTER_VALIDATE_EMAIL)){
				$this->json(array(
					'success' => false
					,'fields' => array('email')
					,'error' => 'Not a valid email'
				));
				return false;
			}
			$mailSuccess = mail('sirtopeia@yahoo.com','JakeSiegers.com Message',"From:{$f['name']} ({$f['email']})\r\nMessage:\r\n{$f['message']}");
			if(!$mailSuccess){
				$this->json(array(
					'success' => false
					,'error' => 'Mail failed to send. Please Try again Later. (Sorry!)'
				));
				return false;
			}
			$this->json(array(
				'success' => true
			));
			return true;
		}
		function json($obj){
			echo json_encode($obj);
		}
	}
?>