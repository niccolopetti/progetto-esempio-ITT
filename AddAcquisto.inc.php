<?php
    $idCliente=$_POST["idCliente"];
    $numeroTelaio=$_POST["numeroTelaio"];
    $DataAcquisto=$_POST["DataAcquisto"];
        
	// 1 FASE: CONNESSIONE AL SERVER
	$server="localhost";
	$utente="root";
	$passw="";
	$nomedb="my_db";
	$connessione=new mysqli($server,$utente,$passw,$nomedb); 


// SELEZIONE CAMPI TABELLA MARCA
$query=mysqli_query ($connessione,"INSERT INTO `ACQUISTO`(`fk_cliente`, `fk_auto`, `data_acquisto`) VALUES ( '$idCliente','$numeroTelaio','$DataAcquisto')");                     
// CONTA IL NUMERO DI TUPLE TROVATE                 
if ($query==TRUE)
{$out="Inserimento avvenuto con successo";
}
else
{$out="Errore nell'inserimento dei dati";
}
header ("Location: /AddAcquisto.php?out=$out");
	  
	// CHIUSURA DELLA CONNESSIONE
    mysqli_close($connessione);
?>