<?php

	$nome=$_POST["nome"];
	$cilindrata=$_POST["cilindrata"];
	$potenza=$_POST["potenza"];
	$AnnoProd=$_POST["AnnoProd"];
	$Marca=$_POST["Marca"];
	
	// 1 FASE: CONNESSIONE AL SERVER
	$server="localhost";
	$utente="root";
	$passw="";
	$nomedb="my_db";
	$connessione=new mysqli($server,$utente,$passw,$nomedb); 


// SELEZIONE CAMPI TABELLA MARCA
$query=mysqli_query ($connessione,"INSERT INTO `MODELLO`(`nome`, `cilindrata`, `potenza`, `anno_produzione`, `fk_marca`) VALUES ($nome,$cilindrata,$potenza,$AnnoProd,$Marca)");                     
// CONTA IL NUMERO DI TUPLE TROVATE                 
if ($query==TRUE)
{$out="Inserimento avvenuto con successo";
}
else
{$out="Errore nell'inserimento dei dati";
}
header ("Location: /AddModello.php?out=$out");
	  
	// CHIUSURA DELLA CONNESSIONE
    mysqli_close($connessione);
?>