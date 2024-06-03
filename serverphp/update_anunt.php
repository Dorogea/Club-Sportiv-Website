<?php

session_start();
//Verificam daca utilizatorul este logat sau nu

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    //Daca nu este logat, il redirectionam catre pagina de login
    header("Location: login.html");
    exit;
}

//Includem baza de date
include 'database.php';

//Verificam daca s-a trimis un formular prin metoda POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $titlu = $_POST['titlu'];
    $descriere = $_POST['descriere'];

    //Interogare pentru a modifica anuntul
    $sql = "UPDATE anunturi SET titlu = :titlu, descriere = :descriere WHERE id = :id";
    $stmt = $conn->prepare($sql);
    //Legam parametrii
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->bindParam(':titlu', $titlu);
    $stmt->bindParam(':descriere', $descriere);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        echo "Anunț modificat cu succes!";
    } else {
        echo "Eroare la modificarea anunțului: " . $stmt->errorInfo()[2];
    }

    $stmt->closeCursor();
    $conn = null;
}
?>


<!DOCTYPE html>
<html lang="ro">
    <head>
        <meta charset="UTF-8">
        <title>Modifică Anunt</title>
        <link rel="stylesheet" href="admin_panel.css">
    </head>
    <body>
        <header>
            <!--Titlul paginii si meniul de navigare-->
            <h1>Panou de Control - Modifica Anunt</h1>
        </header>
        <main>
            <!--Formular pentru modificarea anuntului-->
            <h2>Modifică Anunt</h2>
            <form action="update_anunt.php" method="post" class="adauga_anunt">
                <label for="id">ID Anunt:</label>
                <input type="text" id="id" name="id" required><br>
                <label for="titlu">Titlu:</label>
                <input type="text" id="titlu" name="titlu" required><br>
                <label for="descriere">Descriere:</label><br>
                <textarea id="descriere" name="descriere" required></textarea><br>
                <button type="submit">Modifică Anunt</button>
            </form>
            <div> 
                <a href="admin_panel.php">Inapoi la Panou de Control</a>
            </div>
        </main>
    </body>