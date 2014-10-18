<html>
<head>
	<title>LPR</title>
</head>
<body>
<p>
<?php 
try
{
$bdd = new PDO('mysql:host=localhost;dbname=Licence_Plate', 'root', 'root');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
$test = "Images/";
$test .= $_FILES['mon_fichier']['name'];
$test2 = $_FILES['mon_fichier']['tmp_name'];
$resultat = move_uploaded_file($test2, $test);
$query = "INSERT INTO plate(id, urlPlate) VALUES (0, '$test')";
$res = $bdd->exec($query);
?>
</p>
</body>
</html>
