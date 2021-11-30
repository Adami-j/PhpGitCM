<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<?php
require("connect.php");
require("secuConnexion.php");

date_default_timezone_set('Europe/Paris');
$date = date('Y-m-d', time());
echo $date;
?>

</head>
<body>
	<form method="POST">
		<input type="date"  name="rdv"
       
       min="<?php echo $date;?>" max="2022-05-05">
		<select name="heure"/>
			<?php $heure= date('H-i', "0-0")
				while($heure<date('H-i', "19-0")){?>
                    <option value="home"><?php echo $heure;?></option>
                    <option value="other">Autre page</option>
				<?php $heure=$heure;} ?>
            </select>
	</form>
</body>
</html>