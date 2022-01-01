
<?php
	
		$host = 'eu-cdbr-west-02.cleardb.net';
		$dbname = 'heroku_e662d645e150446';
		$username = 'b0b01ffcbc59c7';
		$password = '68aa346c';
	 
	  try {
		
		$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
		
			return $conn;
		
		echo "Connecté à $dbname sur $host avec succès.";
		
		
	  } catch (PDOException $e) {
	  
		die("Impossible de se connecter à la base de données $dbname :" . $e->getMessage());
		
	  }
	
?>


