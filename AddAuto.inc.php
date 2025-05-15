<?php


    $Targa=$_POST["Targa"];
    $numeroTelaio=$_POST["numeroTelaio"];
    $AnnoImm=$_POST["AnnoImm"];
    $Prezzo=$_POST["Prezzo"];
	$Modello=$_POST["Modello"];    
	// 1 FASE: CONNESSIONE AL SERVER
	$server="localhost";
	$utente="root";
	$passw="";
	$nomedb="my_db";
	$connessione=new mysqli($server,$utente,$passw,$nomedb); 


// SELEZIONE CAMPI TABELLA MARCA
$query=mysqli_query ($connessione,"INSERT INTO `AUTO`(`NumeroTelaio`, `targa`, `prezzo`, `anno_immatricolazione`, `fk_modello`) VALUES ($numeroTelaio,$Targa,$Prezzo,$AnnoImm,$Modello)");                     
// CONTA IL NUMERO DI TUPLE TROVATE                 
if ($query==TRUE)
{$out="Inserimento avvenuto con successo";
}
else
{$out="Errore nell'inserimento dei dati";
}
header ("Location: /AddAuto.php?out=$out");

	// CHIUSURA DELLA CONNESSIONE
    mysqli_close($connessione);
?>