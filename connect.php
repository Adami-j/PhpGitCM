
<?php

		$host = 'eu-cdbr-west-02.cleardb.net';
		$dbname = 'heroku_f00e7ec5135be03';
		$username = 'bee416f173a2f7';
		$password = '930dbded';

	  try {
		
		$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
		
			return $conn;
		
		echo "Connecté à $dbname sur $host avec succès.";
		
		
	  } catch (PDOException $e) {
	  
		die("Impossible de se connecter à la base de données $dbname :" . $e->getMessage());
		
	  }
	
?>


