<?php
session_start();
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <title>Sült étel</title>
    <meta charset="UTF-8">
    <meta name="author" content="Györe Csongor"/>
    <meta name="description" content="Online ételrendelés"/>
    <meta name="keywords" content="étel, kaja, pizza, ital, pia, rendelés, online"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/NetKajaLogo.png"/>
    <link rel="stylesheet" href="AllDesign.css">
</head>
<body>
<h1>Sült ételek</h1>

<nav>
    <?php if (isset($_SESSION["user"])) { ?>
        <a class="kijeloles" href="Main.php">Fő oldal</a>
        <a class="kijeloles" href="Pizza.php">Pizza</a>
        <a class="kijeloles" id="aktiv" href="Sult.php">Sült étel</a>
        <a class="kijeloles" href="Fott.php">Főtt étel</a>
        <a class="kijeloles" href="Desszert.php">Desszert</a>
        <a class="kijeloles" href="Profil.php">Profil</a>
    <?php } else { ?>
        <a class="kijeloles" href="Main.php">Fő oldal</a>
        <a class="kijeloles" href="Pizza.php">Pizza</a>
        <a class="kijeloles" id="aktiv" href="Sult.php">Sült étel</a>
        <a class="kijeloles" href="Fott.php">Főtt étel</a>
        <a class="kijeloles" href="Desszert.php">Desszert</a>
        <a class="kijeloles" href="Main.php">Bejelentkezés</a>
        <a class="kijeloles" href="Regisztracio.php">Regisztráció</a>
    <?php } ?>
</nav>

<div class="div1">
    <h2>Bécsi szelet</h2>
    <img class="floatimg" src="images/becsiszelet.jpg" alt="Becsi szelet">
    <table>
        <caption>Árlista</caption>
        <tr><th id="m1">Méret</th><th id="k1">Kiegészítő</th><th id="a1">Ár</th></tr>
        <tr><td headers="m1">100 Gramm</td><td headers="k1">Sült burgonya, 0,5l üdítő</td><td headers="a1">1000 Ft</td></tr>
        <tr><td headers="m1">200 Gramm</td><td headers="k1">Sült burgonya, 0,5l üdítő</td><td headers="a1">1600 Ft</td></tr>
        <tr><td headers="m1">300 Gramm</td><td headers="k1">Sült burgonya, 0,5l üdítő</td><td headers="a1">2000 Ft</td></tr>
    </table>
</div>

<div class="div2">
    <h2>Sült csirkeszárnyak</h2>
    <img class="floatimg" src="images/csirkeszarny.jpg" alt="Csirkeszarny">
    <table>
        <caption>Árlista</caption>
        <tr><th id="m2">Méret</th><th id="k2">Kiegészítő</th><th id="a2">Ár</th></tr>
        <tr><td headers="m2">100 Gramm</td><td headers="k2">Sült burgonya, 0,5l üdítő</td><td headers="a2">1000 Ft</td></tr>
        <tr><td headers="m2">200 Gramm</td><td headers="k2">Sült burgonya, 0,5l üdítő</td><td headers="a2">1600 Ft</td></tr>
        <tr><td headers="m2">300 Gramm</td><td headers="k2">Sült burgonya, 0,5l üdítő</td><td headers="a2">2000 Ft</td></tr>
    </table>
</div>

<div class="div3">
    <h2>Töltött sertésszelet</h2>
    <img class="floatimg" src="images/sertesszelet.jpg" alt="sertesszelet">
    <table>
        <caption>Árlista</caption>
        <tr><th id="m3">Méret</th><th id="k3">Kiegészítő</th><th id="a3">Ár</th></tr>
        <tr><td headers="m3">100 Gramm</td><td headers="k3">Sült burgonya, 0,5l üdítő</td><td headers="a3">1000 Ft</td></tr>
        <tr><td headers="m3">200 Gramm</td><td headers="k3">Sült burgonya, 0,5l üdítő</td><td headers="a3">1600 Ft</td></tr>
        <tr><td headers="m3">300 Gramm</td><td headers="k3">Sült burgonya, 0,5l üdítő</td><td headers="a3">2000 Ft</td></tr>
    </table>
</div>

<div class="div4">
    <h2>Töltött csirkemell</h2>
    <img class="floatimg" src="images/toltottcsirke.jpg" alt="Toltott csirke">
    <table>
        <caption>Árlista</caption>
        <tr><th id="m4">Méret</th><th id="k4">Kiegészítő</th><th id="a4">Ár</th></tr>
        <tr><td headers="m4">100 Gramm</td><td headers="k4">Sült burgonya, 0,5l üdítő</td><td headers="a4">1000 Ft</td></tr>
        <tr><td headers="m4">200 Gramm</td><td headers="k4">Sült burgonya, 0,5l üdítő</td><td headers="a4">1600 Ft</td></tr>
        <tr><td headers="m4">300 Gramm</td><td headers="k4">Sült burgonya, 0,5l üdítő</td><td headers="a4">2000 Ft</td></tr>
    </table>
</div>

<div class="div5">
    <h2>Édes savanyú csirkemell</h2>
    <img class="floatimg" src="images/edessavanyucs.jpg" alt="Edes savanyu csirke">
    <table>
        <caption>Árlista</caption>
        <tr><th id="m5">Méret</th><th id="k5">Kiegészítő</th><th id="a5">Ár</th></tr>
        <tr><td headers="m5">100 Gramm</td><td headers="k5">Sült burgonya, 0,5l üdítő</td><td headers="a5">1000 Ft</td></tr>
        <tr><td headers="m5">200 Gramm</td><td headers="k5">Sült burgonya, 0,5l üdítő</td><td headers="a5">1600 Ft</td></tr>
        <tr><td headers="m5">300 Gramm</td><td headers="k5">Sült burgonya, 0,5l üdítő</td><td headers="a5">2000 Ft</td></tr>
    </table>
</div>

<div class="div6">
    <h2>Baconbe tekert csirkemáj</h2>
    <img class="floatimg" src="images/beconmaj.jpg" alt="Baconbe tekert csirkemaj">
    <table>
        <caption>Árlista</caption>
        <tr><th id="m6">Méret</th><th id="k6">Kiegészítő</th><th id="a6">Ár</th></tr>
        <tr><td headers="m6">100 Gramm</td><td headers="k6">Sült burgonya, 0,5l üdítő</td><td headers="a6">1000 Ft</td></tr>
        <tr><td headers="m6">200 Gramm</td><td headers="k6">Sült burgonya, 0,5l üdítő</td><td headers="a6">1600 Ft</td></tr>
        <tr><td headers="m6">300 Gramm</td><td headers="k6">Sült burgonya, 0,5l üdítő</td><td headers="a6">2000 Ft</td></tr>
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

            <label for="Sultetel">Sült étel:</label>
            <select id="Sultetel">
                <option value="Bécsi szelet">Bécsi szelet</option>
                <option value="Sült csirkeszárnyak">Sült csirkeszárnyak</option>
                <option value="Töltött sertésszelet">Töltött sertésszelet</option>
                <option value="Töltött csirkemell">Töltött csirkemell</option>
                <option value="Édes savanyú csirkemell">Édes savanyú csirkemell</option>
                <option value="Baconbe tekert csirkemáj">Baconbe tekert csirkemáj</option>
            </select><br/>

            Méret:
            <label for="op1">100 Gramm</label>
            <input type="radio" id="op1" name="meret" value="ki"/>
            <label for="op2">200 Gramm</label>
            <input type="radio" id="op2" name="meret" value="ko"/>
            <label for="op3">300 Gramm</label>
            <input type="radio" id="op3" name="meret" value="na"/><br/>

            Kiegészitő:
            <label for="op5">Sült burgonya</label>
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