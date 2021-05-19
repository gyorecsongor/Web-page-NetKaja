<?php
session_start();
include "Adatok.php";

if (!isset($_SESSION["user"])) {
    header("Location: Main.php");
}

function nemet_konvertal($betujel) {
    switch ($betujel) {
        case "F" : return "férfi";break;
        case "N" : return "nő"; break;
        case "E" : return "egyéb"; break;
    }
}
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <title>NetKaja</title>
    <meta charset="UTF-8"/>
    <meta name="author" content="Györe Csongor"/>
    <meta name="description" content="Online ételrendelés"/>
    <meta name="keywords" content="étel, kaja, pizza, ital, pia, rendelés, online"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/NetKajaLogo.png"/>
    <link rel="stylesheet" href="Regisztracio.css">
</head>
<body>

<h1>Profil</h1>

<nav>
        <a class="kijeloles" href="Main.php">Fő oldal</a>
        <a class="kijeloles" href="Pizza.php">Pizza</a>
        <a class="kijeloles" href="Sult.php">Sült étel</a>
        <a class="kijeloles" href="Fott.php">Főtt étel</a>
        <a class="kijeloles" href="Desszert.php">Desszert</a>
        <a class="kijeloles" id="aktiv" href="Profil.php">Profil</a>
</nav>

<?php

$profilkep = "images/default.png";
$utvonal = "images/" . $_SESSION["user"]["felhasznalonev"];

$kiterjesztesek = ["png", "jpg", "jpeg"];

foreach ($kiterjesztesek as $kiterjesztes) {
    if (file_exists($utvonal . "." . $kiterjesztes)) {
        $profilkep = $utvonal . "." . $kiterjesztes;
    }
}
?>

<table>
    <tr>
        <th colspan="2">
            <img src="<?php echo $profilkep; ?>" alt="Profilkép" height="200"/>
            <?php if ($_SESSION["user"]["felhasznalonev"] !== "default") { ?>
                <form action="Profil.php" method="POST" enctype="multipart/form-data">
                    <input type="file" name="profile-pic" accept="image/*"/>
                    <input type="submit" name="upload-btn" value="Profilkép módosítása"/>
                </form>
            <?php } ?>
        </th>
    </tr>
    <tr>
        <th>Felhasználónév:</th>
        <td><?php echo $_SESSION["user"]["felhasznalonev"]; ?></td>
    </tr>
    <tr>
        <th>Életkor:</th>
        <td><?php echo $_SESSION["user"]["eletkor"]; ?></td>
    </tr>
    <tr>
        <th>Nem:</th>
        <td><?php echo nemet_konvertal($_SESSION["user"]["nem"]); ?></td>
    </tr>
    <tr>
        <th>Elköltött pénz</th>
        <td><?php echo "Inkább ne akard tudni"; ?></td>
    </tr>
</table>

<?php

if (isset($_POST["upload-btn"]) && is_uploaded_file($_FILES["profile-pic"]["tmp_name"])) {
    $fajlfeltoltes_hiba = "";
    uploadProfilePicture($_SESSION["user"]["felhasznalonev"]);

    $kit = strtolower(pathinfo($_FILES["profile-pic"]["name"], PATHINFO_EXTENSION));
    $utvonal = "images/" . $_SESSION["user"]["felhasznalonev"] . "." . $kit;

    if ($fajlfeltoltes_hiba === "") {
        if ($utvonal !== $profilkep && $profilkep !== "images/default.png") {
            unlink($profilkep);
        }

        header("Location: Profil.php");
    } else {
        echo "<p>" . $fajlfeltoltes_hiba . "</p>";
    }
}
?>

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
</footer>

</body>
</html>
