<?php

session_start();

include 'database.php';  
// Include fișierul de conexiune la baza de date

// Verificăm dacă utilizatorul este logat sau nu
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verifica credențialele
    $sql = "SELECT id FROM admini WHERE username = :username AND password = :password";
    $stmt = $conn->prepare($sql);
    // Legăm parametrii
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    // Verificăm dacă utilizatorul există în baza de date
    if ($stmt->rowCount() > 0) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("Location: admin_panel.php");
        exit;
    } else {
        $error = "Nume utilizator sau parolă incorecte!";
    }
}
?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="admin_panel.css">
</head>
<body>
    <header>
        <!--Titlul paginii-->
        <h1>Login Admin</h1>
    </header>
    <main>
        <!--Formular pentru login-->
        <form action="login.php" method="post" class="loginpanel">
            <div class="username"> 
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="password">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <?php if (!empty($error)) { echo "<p class='error'>$error</p>"; } ?>
            <button type="submit">Login</button>
        </form>
    </main>
</body>
</html>
