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
    $nume = $_POST['nume'];
    $prenume = $_POST['prenume'];

    //Interogare pentru a modifica echipa
    $sql = "UPDATE echipa SET nume = :nume, prenume = :prenume WHERE id = :id";
    $stmt = $conn->prepare($sql);
    //Legam parametrii
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->bindParam(':nume', $nume);
    $stmt->bindParam(':prenume', $prenume);
    $stmt->execute();

    //Verificam daca echipa a fost modificata
    if ($stmt->rowCount() > 0) {
        echo "Echipa modificata cu succes!";
    } else {
        echo "Eroare la modificarea echipei: " . $stmt->errorInfo()[2];
    }

    $stmt->closeCursor();
    $conn = null;
}
?>

<!DOCTYPE html>
<html lang="ro">
    <head>
        <meta charset="UTF-8">
        <title>Modifică Echipa</title>
        <link rel="stylesheet" href="admin_panel.css">
    </head>
    <body>
        <header>
            <!--Titlul paginii si meniul de navigare-->
            <h1>Panou de Control - Modifica Echipa</h1>
        </header>
        <main>
            <!--Formular pentru modificarea echipei-->
            <h2>Modifică Echipa</h2>
            <form action="update_echipa.php" method="post" class="adauga_anunt">
                <label for="id">ID Echipa:</label>
                <input type="text" id="id" name="id" required><br>
                <label for="nume">Nume:</label>
                <input type="text" id="nume" name="nume" required><br>
                <label for="prenume">Prenume:</label>
                <input type="text" id="prenume" name="prenume" required><br>
                <button type="submit">Modifică Echipa</button>
            </form>
            <div> 
                <a href="admin_panel.php">Inapoi la Panou de Control</a>
            </div>
        </main>
    </body>