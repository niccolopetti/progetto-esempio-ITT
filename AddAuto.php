<!DOCTYPE html>
<html>
<link href="InputUI.css" rel="stylesheet"/>

<head>
<meta charset="ISO-8859-1">
<title>Inserimento Auto</title>
</head>
<body>
   
<H2>Inserisci i dati dell'auto da aggiungere</H2>
<div class="container">
<form action="AddAuto.inc.php" method="post" >
	<table>
	<tr>
	<td><label for="numeroTelaio">Numero Telaio</label></td>
	<td><input type="text" name="numeroTelaio" required="required" ></td>
	</tr>
	<tr>
	<td><label for="Targa">Targa</label></td>
	<td><input type="text" name="Targa" required="required" ></td>
	</tr>
	<tr>
	<td><label for="AnnoImm">Anno Immatricolazione</label></td>
	<td><input type=number name="AnnoImm" min="1900" required="required" /></td>
	</tr>
	<tr>
	<td><label for="Prezzo">Prezzo</label></td>
	<td><input type="number" name="Prezzo" required="required" step="0.01" min="0" max="99.99"></td>
	</tr>
	<tr>
	<td><label for="Modello">Modello</label></td>
	<td><select name="Modello" >
	<?php 
		// 1 FASE: CONNESSIONE AL SERVER
		$server="localhost";
		$utente="root";
		$passw="";
		$nomedb="my_db";
		$connessione=new mysqli($server,$utente,$passw,$nomedb); 


   // SELEZIONE CAMPI TABELLA Modello
   $query=mysqli_query ($connessione,"SELECT id,nome
						FROM MODELLO");                     
   // CONTA IL NUMERO DI TUPLE TROVATE                 
   $numero=mysqli_num_rows($query); 
   
	   for ($i=0; $i< $numero; $i++) 
		  {
		   $record=mysqli_fetch_array($query);  
  	echo "<option value=\"$record[id]\">$record[nome]</option>";
		  }
	?>
  	</select>
  	</td>
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