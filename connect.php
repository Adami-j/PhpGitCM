
<?php
	
		$host = 'localhost';
		$dbname = 'cabinet_medical';
		$username = 'root';
		$password = 'root';
	 
	  try {
		
		$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
		
			return $conn;
		
		echo "Connecté à $dbname sur $host avec succès.";
		
		
	  } catch (PDOException $e) {
	  
		die("Impossible de se connecter à la base de données $dbname :" . $e->getMessage());
		
	  }
	
?>
