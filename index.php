<html>
<head>
	<title>LPR</title>
</head>
<body>
<?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=Licence_Plate', 'root', 'root');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
$reponse = $bdd->query('SELECT urlPlate FROM plate');
while ($donnees = $reponse->fetch())
{
$img = $donnees['urlPlate'];
?>
<img src='<?php echo $img ?>'/>
<?php
}
$reponse->closeCursor();
?>
<form action="action.php" method="get" target="_self"> 
  <img src="Images/"/>
   <input type="submit" style="padding:5px;" /> 
   <input type="reset" style="padding:5px;" /> 
</form>
<form action="upload.php" method="get" target="_self"> 
   <input type="submit" value="Upload a file" style="padding:5px;" /> 
</form>
</body>
</html>
