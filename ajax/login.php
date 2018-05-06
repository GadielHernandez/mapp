<?php
	$base = "../";
	include("../config/config.php");
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		// Always return JSON format
		header('Content-Type: application/json');
		$json_params = file_get_contents('php://input',false);
		$data = json_decode($json_params, true);
		$return = [];

		$password = $data['password'];

		$user_found = User::Find($data['email'], true);
		if($user_found) {
			$user_id = (int) $user_found['user_id'];
			$hash = (string) $user_found['password'];
			if(password_verify($password, $hash)) {
				$return['redirect'] = 'index.php';
				session_start();
				$_SESSION['user_id'] = $user_id;
				$_SESSION['email'] = $data['email'];
				$_SESSION['privileges'] = $user_found['privileges'];
			} else {
				$return['error'] = "Invalid user email or password ";
			}

		} else {
			$return['error'] = "Invalid user email or password ";
		}

		echo json_encode($return, JSON_PRETTY_PRINT); exit;
	} else {
		exit('Invalid URL');
	}
?>
