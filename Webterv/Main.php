<?php
session_start();
include "Adatok.php";
$fiokok = loadUsers("users.txt");

$uzenet = "";

if (isset($_POST["login"])) {
    if (!isset($_POST["felhasznalonev"]) || trim($_POST["felhasznalonev"]) === "" || !isset($_POST["jelszo"]) || trim($_POST["jelszo"]) === "") {
        $uzenet = "<strong>Hiba:</strong> Adj meg minden adatot!";
    } else {
        $felhasznalonev = $_POST["felhasznalonev"];
        $jelszo = $_POST["jelszo"];

        $uzenet = "Sikertelen belépés! A belépési adatok nem megfelelők!";

        foreach ($fiokok as $fiok) {
            if ($fiok["felhasznalonev"] === $felhasznalonev && $fiok["jelszo"] === $jelszo) {
                $uzenet = "Sikeres belépés!";
                $_SESSION["user"] = $fiok;
                header("Location: Main.php");
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <title>NetKaja</title>
    <meta charset="UTF-8"/>
    <meta name="author" content="Györe Csongor/>
    <meta name="description" content="Online ételrendelés"/>
    <meta name="keywords" content="étel, kaja, pizza, ital, pia, rendelés, online"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/NetKajaLogo.png"/>
    <link rel="stylesheet" href="MainDesign.css">
</head>
<body>

<nav>
    <?php if (isset($_SESSION["user"])) { ?>
    <a class="kijeloles" id="aktiv" href="Main.php">Fő oldal</a>
    <a class="kijeloles" href="Pizza.php">Pizza</a>
    <a class="kijeloles" href="Sult.php">Sült étel</a>
    <a class="kijeloles" href="Fott.php">Főtt étel</a>
    <a class="kijeloles" href="Desszert.php">Desszert</a>
    <a class="kijeloles" href="Profil.php">Profil</a>
    <?php } else { ?>
        <a class="kijeloles" id="aktiv" href="Main.php">Fő oldal</a>
        <a class="kijeloles" href="Pizza.php">Pizza</a>
        <a class="kijeloles" href="Sult.php">Sült étel</a>
        <a class="kijeloles" href="Fott.php">Főtt étel</a>
        <a class="kijeloles" href="Desszert.php">Desszert</a>
        <a class="kijeloles" href="Main.php">Bejelentkezés</a>
        <a class="kijeloles" href="Regisztracio.php">Regisztráció</a>
    <?php } ?>
</nav>

<h1>NetKaja</h1>

<form action="Main.php" method="post">
    <fieldset>
        <?php if (isset($_SESSION["user"])){ ?>
            <p><?php echo "Felhasználónév: " . $_SESSION["user"]["felhasznalonev"]; ?></p>
            <a href="Logout.php">Kijelentkezés</a>
        <?php } else { ?>
            <legend><b>Bejelentkezés/Regisztráció</b></legend>
            <label><b>Felhasználónév: </b><input type="text" name="felhasznalonev"/></label><br/>
            <label><b>Jelszó: </b><input type="password" name="jelszo"/></label><br/>
            <input type="submit" name="login" value="Bejelentkezés"/>
            <a href="Regisztracio.php">Regisztráció</a><br/>
            <?php echo $uzenet . "<br/>"; ?>
        <?php } ?>
    </fieldset>
</form>

<div class="pizza">
    <a href="Pizza.php"><h2>Pizza</h2></a>
    <img src="images/FoPizza.jpg" alt="Pizza" title="Pizza">
    <ul class="pizza_szoveg">
        <li>Kukoricás pizza</li>
        <li>Gombás pizza</li>
        <li>Kolbászos pizza</li>
        <li>Ananászos pizza</li>
        <li>Vegetáriánus pizza</li>
        <li>Vegyes pizza</li>
    </ul>
</div>

<div class="sultetel">
    <a href="Sult.php"><h2>Sült étel</h2></a>
    <img src="images/FoSult.jpeg" alt="Sült étel" title="Sült étel">
    <ul class="sult_szoveg">
        <li>Bécsi szelet</li>
        <li>Sült csirkeszárnyak</li>
        <li>Töltött sertésszelet</li>
        <li>Töltött csirkemell</li>
        <li>Édes savanyú csirkemell</li>
        <li>Baconbe tekert csirkemáj</li>
    </ul>
</div>

<div class="fottetel">
    <a href="Fott.php"><h2>Főtt étel</h2></a>
    <img src="images/FoFott.jpg" alt="Főtt étel" title="Főtt étel">
    <ul class="fott_szoveg">
        <li>Bárány pörkölt</li>
        <li>Babgulyás</li>
        <li>Spagetti Bolognese</li>
        <li>Marha pörkölt</li>
        <li>Lecsó</li>
        <li>Töltött káposzta</li>
    </ul>
</div>

<div class="desszert">
    <a href="Desszert.php"><h2>Desszert</h2></a>
    <img src="images/FoDesszert.jpg" alt="Desszert" title="Desszert">
    <ul class="desszert_szoveg">
        <li>Mogyorókrémes palacsinta</li>
        <li>Sárgabarackos palacsinta</li>
        <li>Diós palacsinta</li>
        <li>Erdei gyümölcsös mascarpones palacsinta</li>
        <li>Sült banán</li>
        <li>Gesztenyepüré</li>
    </ul>
</div>

<footer class="kijeloles">
    <q>Azért eszünk, hogy éljünk, nem pedig azért élünk, hogy együnk. (Molière)</q><br/>
    <p><strong>Elérhetőségek:</strong></p><br/>
    <p><em>E-mail: netkaja@gmail.com</em></p><br/>
    <p><em>Tel: +36-89-579-5617</em></p><br/>
    <?php
    $datum = new DateTime();
    $datum->setTimezone(new DateTimeZone("Europe/Budapest"));
    echo "A mai dátum és időpont: " . $datum->format('Y-m-d H:i:s');
    ?><br/>
    <p><em>A weboldal elkészülését támogatta:</em></p>
    <iframe src="https://okt.sed.hu/webtervezes/" width="350"></iframe>
</footer>

</body>
</html>