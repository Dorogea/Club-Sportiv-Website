<?php


session_start();

//Verificam daca utilizatorul este logat sau nu
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    //Daca nu este logat, il redirectionam catre pagina de login
    header("Location: login.html");
    exit;
}

?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <title>Panou Administrativ</title>
    <link rel="stylesheet" href="admin_panel.css">
</head>
<body>
    <header>
        <!--Titlul paginii si meniul de navigare-->
        <h1>Panou de Control - Administratie</h1>
    </header>
    <main>
        <!--Meniul de administrare-->
        <h2>Administrare Anunturi</h2>
        <div class="panel"> 
            <div>
                <!--Meniul de administrare-->
                <p class="anunt">Anunturi</p>
                <ul> 
                    <li><a href="add_anunt.php" class="butoane">Adauga Anunt</a></li>
                    <li><a href="update_anunt.php" class="butoane">Modifica Anunt</a></li>
                    <li><a href="delete_anunt.php" class="butoane">Sterge Anunt</a></li>
                </ul>
            </div>
            <div>   
                <p class="setari">Setari</p>
                <ul>
                    <li><a href="../index.php" class="butoane">Pagina Principala</a></li>
                    <li><a href="logout.php" class="butoane">Deconectare</a></li>
            </div>
            <div>  
            <p class="echipe">Echipe</p>
                <ul> 
                    <li><a href="add_echipa.php" class="butoane">Adauga Echipa</a></li>
                    <li><a href="update_echipa.php" class="butoane">Modifica Echipa</a></li>
                    <li><a href="delete_echipa.php" class="butoane">Sterge Echipa</a></li>
                </ul>    
            </div>
        </div>
        <div>  
        </div>
    </main>
</body>
</html>
