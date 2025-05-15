<!DOCTYPE html>
<html>
<link href="InputUI.css" rel="stylesheet"/>

<head>
<meta charset="ISO-8859-1">
<title>Inserimento Cliente</title>
</head>
<body>
   
<H2>Inserisci i dati del cliente da aggiungere</H2>
<div class="container">
<form action="AddCliente.inc.php" method="post" >
	<table>
	<tr>
	<td><label for="nome">Nome</label></td>
	<td><input type="text" name="nome" required="required" ></td>
	</tr>
	<tr>
	<td><label for="cognome">cognome</label></td>
	<td><input type="text" name="cognome" required="required" ></td>
	</tr>
	<tr>
	<td><label for="username">username</label></td>
	<td><input type="text" name="username" required="required" ></td>
	</tr>
 	<tr>
	<td><label for="sesso">sesso</label></td>
	<td><label class="radio-inline"><input type="radio" name="sesso" value="M">Maschio</label> <label class="radio-inline"><input type="radio" name="sesso" value="F">Femmina</label></td>
	</tr>
	<tr>
	<td><label for="password">password</label></td>
	<td><input type="password" name="password" required="required" ></td>
	</tr>
	<tr>
	<td><label for="data_nascita">Data nascita</label></td>
	<td><input type="date" name="data_nascita" required="required"  /></td>
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