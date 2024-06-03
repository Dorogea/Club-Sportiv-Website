<?php

session_start();

//Verificam daca utilizatorul este logat sau nu
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    //Daca utilizatorul nu este logat, il redirectionam catre pagina de login
    header("Location: login.html");
    exit;
}

//Includem fisierul de conexiune la baza de date
include 'database.php';

//Verificam daca s-a trimis un formular prin metoda POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    //Interogare pentru a sterge echipa
    $sql = "DELETE FROM echipa WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        echo "Echipa stearsa cu succes!";
    } else {
        echo "Eroare la stergerea echipei: " . $stmt->errorInfo()[2];
    }

    $stmt->closeCursor();
    $conn = null;
}
?>

<!DOCTYPE html>
<html lang="ro">
    <head>
        <meta charset="UTF-8">
        <title>Sterge Echipa</title>
        <link rel="stylesheet" href="admin_panel.css">
    </head>
    <body>
        <header>
            <!--Titlul paginii si meniul de navigare-->
            <h1>Panou de Control - Sterge Echipa</h1>
        </header>
        <main>
            <!--Formular pentru stergerea echipei-->
            <h2>Sterge Echipa</h2>
            <form action="delete_echipa.php" method="post" class="adauga_anunt">
                <label for="id">ID Echipa:</label>
                <input type="text" id="id" name="id" required><br>
                <button type="submit">Sterge Echipa</button>
            </form>
            <div> 
                <a href="admin_panel.php">Inapoi la Panou de Control</a>
            </div>
        </main>
</body>
</html>