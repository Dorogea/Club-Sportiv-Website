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

    //Interogare pentru a sterge anuntul
    $sql = "DELETE FROM anunturi WHERE id = :id";
    $stmt = $conn->prepare($sql);
    //Legam parametrii
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    //Verificam daca anuntul a fost sters
    if ($stmt->rowCount() > 0) {
        echo "Anunț șters cu succes!";
    } else {
        echo "Eroare la ștergerea anunțului: " . $stmt->errorInfo()[2];
    }

    $stmt->closeCursor();
    $conn = null;
}
?>

<!DOCTYPE html>
<html lang="ro">
    <head>
        <meta charset="UTF-8">
        <title>Sterge Anunt</title>
        <link rel="stylesheet" href="admin_panel.css">
    </head>
    <body>
        <header>
            <!--Titlul paginii si meniul de navigare-->
            <h1>Panou de Control - Sterge Anunt</h1>
        </header>
        <main>
            <!--Formular pentru stergerea anuntului-->
            <h2>Sterge Anunt</h2>
            <form action="delete_anunt.php" method="post" class="adauga_anunt">
                <label for="id">ID Anunt:</label>
                <input type="text" id="id" name="id" required><br>
                <button type="submit">Sterge Anunt</button>
            </form>
            <div> 
                <a href="admin_panel.php">Inapoi la Panou de Control</a>
            </div>
        </main>
</body>
</html>