<?php
			
	function paginas(){
		if(isset($_GET["pages"]) && !empty($_GET["pages"])){
			$pages = $_GET["pages"];
			include ($pages);		
		}else{
			include ("pages/home.php");
		}
	}
	//Criei a fução mas não a usei...
?>
