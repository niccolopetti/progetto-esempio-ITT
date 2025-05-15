<?php


    $Nazionalita=$_POST["Nazionalita"];
    $nome=$_POST["nome"];
	// 1 FASE: CONNESSIONE AL SERVER
	$server="localhost";
	$utente="root";
	$passw="";
	$nomedb="my_db";
	$connessione=new mysqli($server,$utente,$passw,$nomedb); 


// SELEZIONE CAMPI TABELLA MARCA
$query=mysqli_query ($connessione,"INSERT INTO `MARCA`(`nome`, `nazionalita`) VALUES ($nome,$Nazionalita)");                     
// CONTA IL NUMERO DI TUPLE TROVATE                 
if ($query==TRUE)
{$out="Inserimento avvenuto con successo";
}
else
{$out="Errore nell'inserimento dei dati";
}
header ("Location: /AddMarca.php?out=$out");
	  
	// CHIUSURA DELLA CONNESSIONE
    mysqli_close($connessione);
?>