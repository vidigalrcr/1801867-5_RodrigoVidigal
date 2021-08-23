<?php
	function verificaLink(){
		$arquivo = "index.php";
		if (file_exists($arquivo)){
			$link = "";
		}else
			$arquivo = "../";
	}
?>