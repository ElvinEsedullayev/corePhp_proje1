<?php 

	try {
		$baglan = new PDO('mysql:host=localhost; dbname=muhasib; charset=utf8', 'root','root');
		
	} catch (PDOException $e) {
		echo $e->getMessage();
	}

 ?>
