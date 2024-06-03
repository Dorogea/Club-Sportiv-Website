<?php
// Parametrii de conectare la baza de date
$host = "localhost";
$port = 5432;
$username = "postgres";
$password = "4123";
$dbname = "evstudbd";

// Conectare la baza de date folosind PDO
$dsn = "pgsql:host=$host;port=$port;dbname=$dbname;";
try {
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully"; 
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

if (!function_exists('insertUser')) {
    function insertUser($username, $password) {
        global $conn;
        try {
            $stmt = $conn->prepare("INSERT INTO utilizatori (username, parola) VALUES (:username, :password)");
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $password);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
}
?>
