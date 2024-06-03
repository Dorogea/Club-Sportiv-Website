<?php

//Includem fisierul de conexiune la baza de date
session_start();
$_SESSION = array();

//Stergem variabilele de sesiune
session_destroy();
header("Location: index.php");
exit;

//Dupa ce utilizatorul se delogheaza, acesta este redirectionat catre pagina principala
?>