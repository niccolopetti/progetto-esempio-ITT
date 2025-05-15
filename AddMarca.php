<!DOCTYPE html>
<html>
<link href="InputUI.css" rel="stylesheet"/>

<head>
<meta charset="ISO-8859-1">
<title>Inserimento Marca</title>
</head>
<body>
   
<H2>Inserisci i dati della marca da aggiungere</H2>
<div class="container">
<form action="AddMarca.inc.php" method="post" >
	<table>
	<tr>
	<td><label for="nome">Nome marca</label></td>
	<td><input type="text" name="nome" required="required" ></td>
	</tr>
	<tr>
	<td><label for="Nazionalita">Nazionalita'</label></td>
	<td><input type="text" name="Nazionalita" required="required" ></td>
	</tr>

	<tr>
	<td colspan="2" style="width: 100%"><input type="submit"  name="invia" value="Invia i dati"></td>
	</tr>
	</table>
  
  
</form>
</div>
<input type="submit" name="home" onclick="location.href='/index.html'"  value="Torna alla home" >
<?php

if(isset($_GET["out"]))
echo "<p>$_GET[out]</p>";
?>

</body>
</html>