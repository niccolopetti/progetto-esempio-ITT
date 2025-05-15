<!DOCTYPE html>
<html>
<link href="InputUI.css" rel="stylesheet"/>

<head>
<meta charset="ISO-8859-1">
<title>Inserimento Modello</title>
</head>
<body>
   
<H2>Inserisci i dati del modello da aggiungere</H2>
<div class="container">
<form action="AddModello.inc.php" method="post" >
	<table>
	<tr>
	<td><label for="nome">Nome</label></td>
	<td><input type="text" name="nome" required="required" ></td>
	</tr>
	<tr>
	<td><label for="cilindrata">cilindrata</label></td>
	<td><input type="number" name="cilindrata" required="required" step="1" min="0" max="1000"></td>
	</tr>
	<tr>
	<td><label for="potenza">potenza</label></td>
	<td><input type="number" name="potenza" required="required" step="1" min="0" max="1000"></td>
	</tr>
	<tr>
	<td><label for="AnnoProd">Anno Produzione</label></td>
	<td><input type=number name="AnnoProd" min="1900" required="required" /></td>
	</tr>
	<tr>
	<td><label for="Marca">Marca</label></td>
	<td><select name="Marca" >
	<?php 
		// 1 FASE: CONNESSIONE AL SERVER
		$server="localhost";
		$utente="root";
		$passw="";
		$nomedb="my_db";
		$connessione=new mysqli($server,$utente,$passw,$nomedb); 


   // SELEZIONE CAMPI TABELLA MARCA
   $query=mysqli_query ($connessione,"SELECT id,nome
						FROM MARCA");                     
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