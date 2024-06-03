<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <title>Anunturi Club</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <!-- Titlul paginii si meniul de navigare -->
        <h1>Anunturi Clubul Sportiv Universitatea Craiova</h1>
        <nav>
            <ul>
                <!-- Linkurile catre alte pagini -->
                <li><a href="index.php">Home</a></li>
                <li><a href="sectii.html">Sectii</a></li>
                <li><a href="echipe.html">Echipe</a></li>
                <li><a href="anunturi.php">Anunțuri</a></li>
                <li><a href="galerie.html">Galerie</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <!-- Textul de pe pagina principala -->
        <h2>Anunturi</h2>

        <?php
        //Includem baza de date
        include 'serverphp/database.php';

        //Interogare pentru a selecta anunturile
        $sql = "SELECT id, titlu, descriere, data_publicare FROM anunturi ORDER BY data_publicare DESC";
        $result = $conn->query($sql);

        //Verificarea daca exista anunturi
        if ($result->rowCount() > 0) {
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                //Afisarea informatiilor
                echo "<div class='anunt'>";
                echo "<div class='anunt-header'>";
                echo "<h3>ID: " . $row["id"] . " - " . $row["titlu"] . "</h3>";
                echo "<p>" . $row["descriere"] . "</p>";
                echo "<h4>Data publicare: " . $row["data_publicare"] . "</h4>";
                echo "</div>";
                echo "</div>";
            }        
        } else {
            echo "Nu există anunțuri.";
        }
        
        $conn = null;
        ?>

    </main>
    <footer>
        <p>&copy; 2024 Clubul Sportiv Universitatea Craiova. Toate drepturile rezervate.</p>
    </footer>
</body>
</html>
