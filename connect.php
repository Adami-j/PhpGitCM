
<?php
	
		$host = 'eu-cdbr-west-02.cleardb.net';
		$dbname = 'heroku_c8785add61c284f';
		$username = 'bf80eca2238c6a';
		$password = '1139321a ';

	  try {
		
		$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
		
			return $conn;
		
		echo "Connecté à $dbname sur $host avec succès.";
		
		
	  } catch (PDOException $e) {
	  
		die("Impossible de se connecter à la base de données $dbname :" . $e->getMessage());
		
	  }
	
?>


