<!DOCTYPE html>
<html>
<link href="ScrollableTable.css" rel="stylesheet"/>
<head>
<meta charset="ISO-8859-1">
<title>Stampa acquisti:</title>
</head>
<body>


  <!-- CASELLE DI TESTO -->
  <ol>
  <li><h2>Elenco acquisti:</h2><br><br></li>
  <li>
<div class="table"> 
		<table>
			<thead>
				<tr>
					<th>nome cliente</th>
					<th>id cliente</th>
					<th>numeroTelaio</th>
                    <th>nome Modello</th>
                    <th>Marca</th>
					<th>targa</th>
					<th>Prezzo</th>
                    <th>Data Acquisto</th>
				</tr>
			</thead>
            <?php 
		// 1 FASE: CONNESSIONE AL SERVER
		$server="localhost";
		$utente="root";
		$passw="";
		$nomedb="my_db";
		$connessione=new mysqli($server,$utente,$passw,$nomedb); 


   // SELEZIONE CAMPI TABELLA MARCA
   $query=mysqli_query ($connessione,"SELECT CLIENTE.nome AS cnome, CLIENTE.id AS cid, AUTO.NumeroTelaio, MODELLO.nome AS mnome, MARCA.nome AS marnome, AUTO.targa, AUTO.prezzo, ACQUISTO.data_acquisto 
   FROM ACQUISTO,AUTO,CLIENTE,MODELLO,MARCA 
   WHERE ACQUISTO.fk_cliente=CLIENTE.id AND ACQUISTO.fk_auto=AUTO.NumeroTelaio AND AUTO.fk_modello=MODELLO.id AND MODELLO.fk_marca= MARCA.id");                     
   // CONTA IL NUMERO DI TUPLE TROVATE                 
   $numero=mysqli_num_rows($query); 
   
	   for ($i=0; $i< $numero; $i++) 
		  {
		   $record=mysqli_fetch_array($query);  
  	        echo "<tr>";
            echo "<td>$record[cnome]</td>";
            echo "<td>$record[cid]</td>";
            echo "<td>$record[NumeroTelaio]</td>";
            echo "<td>$record[mnome]</td>";
            echo "<td>$record[marnome]</td>";
            echo "<td>$record[targa]</td>";
            echo "<td>$record[prezzo]</td>";
            echo "<td>$record[data_acquisto]</td>";
            echo "</tr>";
		  }
	?>
		</table>
		</div>
		<br>

	</li>	

<li><input type="submit" name="home" onclick="location.href='/index.html'"  value="Torna alla home" >
</li>
</ol>  	
</body>
</html>