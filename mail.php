<?php
	$m = new Mail();
	class Mail{
		function __construct(){
			$name = $_POST['name'];
			$email = $_POST['email'];
			$message = $_POST['message'];
			if(!filter_var($email_a, FILTER_VALIDATE_EMAIL)){
				$this->json(array(
					'success' => false
					'field' => 'email'
					'error' => 'Not a valid email'
				));
				return false;
			}
		}
		function json($obj){
			echo json_encode($obj);
		}
	}
?>