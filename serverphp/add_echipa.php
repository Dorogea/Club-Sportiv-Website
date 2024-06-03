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
    //Preluam datele din formular
    $id = $_POST['id'];
    $nume = $_POST['nume'];
    $prenume = $_POST['prenume'];

    //Interogare pentru a adauga jucatorul
    $sql = "INSERT INTO echipa (id, nume, prenume) VALUES (:id, :nume, :prenume)";
    $stmt = $conn->prepare($sql);
    //Legam parametrii
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':nume', $nume);
    $stmt->bindParam(':prenume', $prenume);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        echo "Jucator adaugat cu Success!";
    } else {
        echo "Eroare la adaugare: " . $stmt->errorInfo()[2];
    }

    $stmt->closeCursor();
    $conn = null;
}
?>

<!DOCTYPE html>
<html lang="ro">
    <head>
        <meta charset="UTF-8">
        <title>Adauga Jucator</title>
        <link rel="stylesheet" href="admin_panel.css">
</head>
<body>
    <header>
        <!--Titlul paginii si meniul de navigare-->
        <h1>Panou de Control - Adauga Jucator</h1>
    </header>
    <main>
        <!--Formular pentru adaugarea jucatorului-->
        <h2>Adauga Jucator</h2>
        <form action="add_echipa.php" method="post" class="adauga_anunt">
            <label for="id">ID Jucator:</label>
            <input type="text" id="id" name="id" required><br>
            <label for="nume">Nume:</label>
            <input type="text" id="nume" name="nume" required><br>
            <label for="prenume">Prenume:</label>
            <input type="text" id="prenume" name="prenume" required><br>
            <button type="submit">Adauga Jucator</button>
        </form>
        <div> 
            <a href="admin_panel.php">Inapoi la Panou de Control</a>
    </main>
</body>
</html>    
        