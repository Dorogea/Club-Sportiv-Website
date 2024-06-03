<!DOCTYPE html>
<html lang="ro">
    <head>
        <meta charset="UTF-8">
        <title>Membrii Echipei</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
             <!-- Titlul paginii si meniul de navigare -->
            <h1>Membrii Echipei</h1>
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
            <h2>Echipa de Fotbal</h2>

            <?php
            //Includem baza de date
            include 'serverphp/database.php';

            //Interogare pentru a selecta membrii echipei de fotbal
            $sql = "SELECT id, nume, prenume FROM echipa ORDER BY nume DESC";
            $result = $conn->query($sql);

            //Verificarea daca exista membri in echipa de fotbal
            if ($result->rowCount() > 0) {
                //Parcurgerea rezultatelor si afisarea lor
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    //Afisarea informatiilor
                    echo "<div class='echipaphp'>";
                    echo "<div class='echipa-header'>";
                    echo "<p>" . $row["id"] . "</p>";
                    echo "<h3>" . $row["nume"] . " " . $row["prenume"] . "</h3>";
                    echo "</div>";
                    echo "</div>";
                }        
            } else {
                echo "Nu există membrii în echipa de fotbal.";
            }

            ?>

        </main>
        <footer>
            <p>&copy; 2024 Clubul Sportiv Universitatea Craiova. Toate drepturile rezervate.</p>
        </footer>
</html>