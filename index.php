<?php

session_start();

//Verificam daca utilizatorul este logat sau nu
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
//Daca nu este logat, il redirectionam catre pagina de login
    header("Location: serverphp/login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <title>Club Sportiv - Acasa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <!-- Titlul paginii si meniul de navigare -->
    <header>
        <h1>Bine ati venit la Clubul Sportiv Universitatea Craiova!</h1>
        <!-- Linkurile catre alte pagini -->
        <div>  
            <li><a href="serverphp/login.php" class="loginIndex">Login</a></li>
        </div>
        <div> 
            <li><a href="serverphp/logout.php" class="logoutButton">Logout</a></li>
        <nav>
            <ul>
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
        <h2>Bine ati venit la Clubul Sportiv Universitatea Craiova!</h2>
        <p>Clubul nostru promoveaza activitatea fizica si sportiva in comunitatea noastra.</p>
        <p>Ne mandrim cu echipamentele noastre de inalta calitate si cu antrenorii experimentati.</p>
        <section>

            <!-- <h3>Imagini din Club</h3> -->
            <!-- <div class="image-gallery"> -->

                <img src="/imagini/football2.jpg" alt="Echipa de Fotbal" class="football2galerie">

                <!-- <img src="/imagini/basket2.jpg" alt="Echipa de Basketball" class="basket2index">
                <img src="/imagini/badminton2.jpg" alt="Echipa de Badminton" class="badminton2index"> -->
                
            </div>
        </section>
    </main>
    
    <footer>
        <p>&copy; 2024 Clubul Sportiv Universitatea Craiova. Toate drepturile rezervate.</p>
    </footer>
</body>
</html>
