<?php
include 'configure.php';
		$pdo=new PDO("mysql:host=$host;dbname=$db_name",$db_user,$db_password);
		//$pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
		$stmt = $pdo->prepare('select * from business_hour');
		$stmt -> execute();

		print_r($pdo->errorInfo());

		$count=0;
		while($row = $stmt->fetch(PDO::FETCH_ASSOC))
		{

			print_r($row);
		}

		//echo $row;





		?>