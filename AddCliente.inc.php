<?php 
	// 1 FASE: CONNESSIONE AL SERVER

	$nome = $_POST["nome"];
	$cognome = $_POST["cognome"];
	$data_nascita = $_POST["data_nascita"];
	$sesso = $_POST["sesso"];
	$username = $_POST["username"];
	$password = $_POST["password"];

	$server="localhost";
	$utente="root";
	$passw="";
	$nomedb="my_db";
	$connessione=new mysqli($server,$utente,$passw,$nomedb);



// SELEZIONE CAMPI TABELLA MARCA
$query=mysqli_query ($connessione,"INSERT INTO `CLIENTE`(`nome`, `cognome`, `data_nascita`, `sesso`, `username`, `password`) VALUES ('$nome','$cognome','$data_nascita','$sesso','$username','$password')");                     
// CONTA IL NUMERO DI TUPLE TROVATE                 
if ($query==TRUE)
{$out="Inserimento avvenuto con successo";
}
else
{$out="Errore nell'inserimento dei dati";
}
header ("Location: /AddCliente.php?out=$out");

	// CHIUSURA DELLA CONNESSIONE
    mysqli_close($connessione);
?>