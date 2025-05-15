<!DOCTYPE html>
<html>

<head>
<meta charset="ISO-8859-1">
<title>Inserimento dati acquisto</title>
<link href="InputUI.css" rel="stylesheet"/>
</head>
<body>
<h2>Inserisci i dati per aggiungere l'acquisto nel database aziendale</h2><br>
<div class="container">
<form action="AddAcquisto.inc.php" method="post" >
	<table>
	<tr>
	<td>id cliente che ha effettuato l'acquisto</td>
	<td><input type="number" name="idCliente" required="required"></td>
	</tr>	
	<tr>
	<td>Numero Telaio dell'auto acquistata</td>
	<td><input type="text" name="numeroTelaio" required="required"  ></td>
	</tr>
	<tr>
	<td>Data acquisto</td>
	<td><input type="date" name="DataAcquisto" required="required"  /></td>
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