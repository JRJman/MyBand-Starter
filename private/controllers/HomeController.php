<?php

/**
 * Class HomeController
 *
 * Deze handelt de logica van de homepage af
 * Haalt gegevens uit de "model" laag van de website (de gegevens)
 * Geeft de gegevens aan de "view" laag (HTML template) om weer te geven
 *
 */
class HomeController {

	function homePage(){
		$page = "Home";
		require '../private/models/model.php';
		require '../private/views/header.php';
		require '../private/views/home_page.php';
		require '../private/views/footer.php';
	}

}
