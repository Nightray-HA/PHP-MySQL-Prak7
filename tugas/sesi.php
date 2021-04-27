<?php
	//mengecek inisialisasi session
    	if (!isset($_SESSION['username'])){
    		header("Location: index.php");
    	}
?>