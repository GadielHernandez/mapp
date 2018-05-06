<?php
class Page {

	// Forzar el login
	static function ForceLogin() {
		if(isset($_SESSION['user_id'])) {
			//el usuario esta logueado
		} else {
			//se dirige al login
			header("Location: login.php"); exit;
		}
	}

}
?>
