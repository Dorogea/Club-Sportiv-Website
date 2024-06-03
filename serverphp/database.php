<?php

//Am folosit PostGreSQL pentru baza de date si am creat un utilizator cu numele "postgres" si parola "4123"
//Am creat o baza de date cu numele "club_sportiv" si am creat o tabela cu numele "echipa" cu 3 coloane: id, nume, prenume
//Am adaugat 3 inregistrari in tabela "echipa" pentru a putea face operatii CRUD
//Pentru interfata grafica a bazei de date am folosit pgAdmin 4

// Parametrii de conectare la baza de date
$host = "localhost";
$port = 5432;
$username = "postgres";
$password = "4123";
$dbname = "club_sportiv";


// Conectare la baza de date folosind PDO
$dsn = "pgsql:host=$host;port=$port;dbname=$dbname;";
try {
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully"; 
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>
