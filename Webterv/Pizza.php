<?php
session_start();
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <title>Pizza</title>
    <meta charset="UTF-8">
    <meta name="author" content="Györe Csongor"/>
    <meta name="description" content="Online ételrendelés"/>
    <meta name="keywords" content="étel, kaja, pizza, ital, pia, rendelés, online"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/NetKajaLogo.png"/>
    <link rel="stylesheet" href="AllDesign.css">
</head>
<body>

<h1>Pizzák</h1>

<nav>
    <?php if (isset($_SESSION["user"])) { ?>
        <a class="kijeloles" href="Main.php">Fő oldal</a>
        <a class="kijeloles" id="aktiv" href="Pizza.php">Pizza</a>
        <a class="kijeloles" href="Sult.php">Sült étel</a>
        <a class="kijeloles" href="Fott.php">Főtt étel</a>
        <a class="kijeloles" href="Desszert.php">Desszert</a>
        <a class="kijeloles" href="Profil.php">Profil</a>
    <?php } else { ?>
        <a class="kijeloles" href="Main.php">Fő oldal</a>
        <a class="kijeloles" id="aktiv" href="Pizza.php">Pizza</a>
        <a class="kijeloles" href="Sult.php">Sült étel</a>
        <a class="kijeloles" href="Fott.php">Főtt étel</a>
        <a class="kijeloles" href="Desszert.php">Desszert</a>
        <a class="kijeloles" href="Main.php">Bejelentkezés</a>
        <a class="kijeloles" href="Regisztracio.php">Regisztráció</a>
    <?php } ?>
</nav>

<div class="div1">
    <h2>Kukoricás pizza</h2>
    <img class="floatimg" src="images/KukoricasPizza.jpg" alt="Kukoricás pizza">
    <table>
        <caption>Árlista</caption>
        <tr><th id="m1">Méret</th><th id="k1">Kiegészítő</th><th id="a1">Ár</th></tr>
        <tr><td headers="m1">20 cm</td><td headers="k1">Ketchup, 0,5l üdítő</td><td headers="a1">700 Ft</td></tr>
        <tr><td headers="m1">40 cm</td><td headers="k1">Ketchup, 0,5l üdítő</td><td headers="a1">1400 Ft</td></tr>
        <tr><td headers="m1">60 cm</td><td headers="k1">Ketchup, 0,5l üdítő</td><td headers="a1">2000 Ft</td></tr>
    </table>
</div>

<div class="div2">
    <h2>Gombás pizza</h2>
    <img class="floatimg" src="images/GombasPizza.jpg" alt="Gombás pizza">
    <table>
        <caption>Árlista</caption>
        <tr><th id="m2">Méret</th><th id="k2">Kiegészítő</th><th id="a2">Ár</th></tr>
        <tr><td headers="m2">20 cm</td><td headers="k2">Ketchup, 0,5l üdítő</td><td headers="a2">700 Ft</td></tr>
        <tr><td headers="m2">40 cm</td><td headers="k2">Ketchup, 0,5l üdítő</td><td headers="a2">1400 Ft</td></tr>
        <tr><td headers="m2">60 cm</td><td headers="k2">Ketchup, 0,5l üdítő</td><td headers="a2">2000 Ft</td></tr>
    </table>
</div>

<div class="div3">
    <h2>Kolbászos pizza</h2>
    <img class="floatimg" src="images/KolbaszosPizza.jpg" alt="Kolbászos pizza">
    <table>
        <caption>Árlista</caption>
        <tr><th id="m3">Méret</th><th id="k3">Kiegészítő</th><th id="a3">Ár</th></tr>
        <tr><td headers="m3">20 cm</td><td headers="k3">Ketchup, 0,5l üdítő</td><td headers="a3">700 Ft</td></tr>
        <tr><td headers="m3">40 cm</td><td headers="k3">Ketchup, 0,5l üdítő</td><td headers="a3">1400 Ft</td></tr>
        <tr><td headers="m3">60 cm</td><td headers="k3">Ketchup, 0,5l üdítő</td><td headers="a3">2000 Ft</td></tr>
    </table>
</div>

<div class="div4">
    <h2>Ananászos pizza</h2>
    <img class="floatimg" src="images/AnanaszosPizza.jpg" alt="Ananászos pizza">
    <table>
        <caption>Árlista</caption>
        <tr><th id="m4">Méret</th><th id="k4">Kiegészítő</th><th id="a4">Ár</th></tr>
        <tr><td headers="m4">20 cm</td><td headers="k4">Ketchup, 0,5l üdítő</td><td headers="a4">700 Ft</td></tr>
        <tr><td headers="m4">40 cm</td><td headers="k4">Ketchup, 0,5l üdítő</td><td headers="a4">1400 Ft</td></tr>
        <tr><td headers="m4">60 cm</td><td headers="k4">Ketchup, 0,5l üdítő</td><td headers="a4">2000 Ft</td></tr>
    </table>
</div>

<div class="div5">
    <h2>Vegetáriánus pizza</h2>
    <img class="floatimg" src="images/VegaPizza.jpg" alt="Vegetáriánus pizza">
    <table>
        <caption>Árlista</caption>
        <tr><th id="m5">Méret</th><th id="k5">Kiegészítő</th><th id="a5">Ár</th></tr>
        <tr><td headers="m5">20 cm</td><td headers="k5">Ketchup, 0,5l üdítő</td><td headers="a5">700 Ft</td></tr>
        <tr><td headers="m5">40 cm</td><td headers="k5">Ketchup, 0,5l üdítő</td><td headers="a5">1400 Ft</td></tr>
        <tr><td headers="m5">60 cm</td><td headers="k5">Ketchup, 0,5l üdítő</td><td headers="a5">2000 Ft</td></tr>
    </table>
</div>

<div class="div6">
    <h2>Vegyes pizza</h2>
    <img class="floatimg" src="images/VegyesPizza.jpg" alt="Vegyes pizza">
    <table>
        <caption>Árlista</caption>
        <tr><th id="m6">Méret</th><th id="k6">Kiegészítő</th><th id="a6">Ár</th></tr>
        <tr><td headers="m6">20 cm</td><td headers="k6">Ketchup, 0,5l üdítő</td><td headers="a6">700 Ft</td></tr>
        <tr><td headers="m6">40 cm</td><td headers="k6">Ketchup, 0,5l üdítő</td><td headers="a6">1400 Ft</td></tr>
        <tr><td headers="m6">60 cm</td><td headers="k6">Ketchup, 0,5l üdítő</td><td headers="a6">2000 Ft</td></tr>
    </table>
</div>

<div class="div7">
    <h2>Üdítők</h2>
    <img class="floatimg" src="images/Uditok.png" alt="Üdítők"><table>
        <caption>Kínálat</caption>
        <tr><th id="mar">Márka</th><th id="meny">Mennyiség</th><th id="ar7">Ár</th></tr>
        <tr><td headers="mar">Coca Cola</td><td headers="meny">0,5l/1,5l</td><td headers="ar7">Ingyenes/300 Ft</td></tr>
        <tr><td headers="mar">Fanta</td><td headers="meny">0,5l/1,5l</td><td headers="ar7">Ingyenes/300 Ft</td></tr>
        <tr><td headers="mar">Sprite</td><td headers="meny">0,5l/1,5l</td><td headers="ar7">Ingyenes/300 Ft</td></tr>
        <tr><td headers="mar">Pepsi</td><td headers="meny">0,5l/1,5l</td><td headers="ar7">Ingyenes/300 Ft</td></tr>
        <tr><td headers="mar">Schweppes</td><td headers="meny">0,5l/1,5l</td><td headers="ar7">Ingyenes/300 Ft</td></tr>
    </table>
</div>

<?php if (isset($_SESSION["user"])) { ?>
<aside class="asiderendeles">
    <form method="post">
        <fieldset>
            <legend>Rendelés</legend>
            <label>Teljes név:<input type="text" name="username" required/></label><br/>
            <label>Biztonsági kód:<input type="password" name="passwd" id="my-passwd" required/></label><br/>
            <label>E-mail: <input type="email" name="email" required/></label><br/>
            <label>Lakcím: <input type="text" name="lakcim" required/></label><br/>
            <label>Telefonszám: <input type="tel" name="tel" required/></label><br/>
            <label>Bankkártya szám: <input type="text" name="bankkartya" required/></label><br/>

            <label for="pizza">Pizza fajtája</label>
            <select id="pizza">
                <option value="kukorivcas">Kukoricás</option>
                <option value="gombas">Gombás</option>
                <option value="kolbaszos">Kolbászos</option>
                <option value="ananaszos">Ananászos</option>
                <option value="vega">Vegetáriánus</option>
                <option value="vegyes">Vegyes</option>
            </select><br/>

            Méret:
            <label for="op1">20 cm</label>
            <input type="radio" id="op1" name="meret" value="ki"/>
            <label for="op2">40 cm</label>
            <input type="radio" id="op2" name="meret" value="ko"/>
            <label for="op3">60 cm</label>
            <input type="radio" id="op3" name="meret" value="na"/><br/>

            Kiegészitő:
            <label for="op5">Ketchup</label>
            <input type="checkbox" id="op5" name="kieg" value="k"/>
            <label for="op6">Üdítő</label>
            <input type="checkbox" id="op6" name="kieg" value="i"/><br/>

            Üdítő:
            <label for="op7">Coca Cola</label>
            <input type="radio" id="op7" name="udito" value="co"/>
            <label for="op8">Fanta</label>
            <input type="radio" id="op8" name="udito" value="fa"/>
            <label for="op9">Sprite</label>
            <input type="radio" id="op9" name="udito" value="sp"/><br/>
            <label for="op10">Pepsi</label>
            <input type="radio" id="op10" name="udito" value="pe"/>
            <label for="op11">Schweppes</label>
            <input type="radio" id="op11" name="udito" value="sc"/><br/>

            <label for="megjegyzes">Megjegyzés (max. 200 karakter):</label> <br/>
            <textarea id="megjegyzes" name="intro" maxlength="200"></textarea> <br/>

            <input type="reset" value="Törlés">
            <input type="submit" value="Jöhet a kaja!"/><br/>
        </fieldset>
    </form>
</aside>
<?php } else { ?>
<aside class="asiderendeles">
    <p>A rendeléshez kérlek <a href="Main.php">jelentkezz be</a>, vagy <a href="Regisztracio.php">regisztrálj!</a></p>
</aside>
<?php } ?>

<aside class="asideszorakozas">
    <p>Ameddig kiválasztja rendelését, hallgasson egy jó zenét, vagy akár nézzen meg egy videót!</p>
    <audio controls autoplay>
        <source src="audio/Brahms%20-%20Hungarian%20Dance.mp3" type="audio/mpeg"/>
    </audio>
    <video controls autoplay width="340">
        <source src="video/Brahms%20-%20Hungarian%20Dance%20No.5.mp4" type="video/mp4"/>
    </video>
</aside>

<img  class="logo1" src="images/NetKajaLogo.png" alt="Logó">
<img  class="logo2" src="images/NetKajaLogo.png" alt="Logó">

</body>
</html>

