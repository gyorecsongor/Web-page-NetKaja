<?php
  session_start();
  include "Adatok.php";
  $fiokok = loadUsers("users.txt");

  $hibak = [];

  if (isset($_POST["regiszt"])) {
    if (!isset($_POST["felhasznalonev"]) || trim($_POST["felhasznalonev"]) === "")
      $hibak[] = "A felhasználónév megadása kötelező!";

    if (!isset($_POST["jelszo"]) || trim($_POST["jelszo"]) === "" || !isset($_POST["jelszo2"]) || trim($_POST["jelszo2"]) === "")
      $hibak[] = "A jelszó és az ellenőrző jelszó megadása kötelező!";

    if (!isset($_POST["eletkor"]) || trim($_POST["eletkor"]) === "")
      $hibak[] = "Az életkor megadása kötelező!";

    if (!isset($_POST["nem"]) || trim($_POST["nem"]) === "")
      $hibak[] = "A nem megadása kötelező!";


    $felhasznalonev = $_POST["felhasznalonev"];
    $jelszo = $_POST["jelszo"];
    $jelszo2 = $_POST["jelszo2"];
    $eletkor = $_POST["eletkor"];
    $nem = NULL;
    $tulajdonsag = NULL;

    if (isset($_POST["nem"]))
      $nem = $_POST["nem"];
    if (isset($_POST["hobbik"]))
      $hobbik = $_POST["hobbik"];

    foreach ($fiokok as $fiok) {
      if ($fiok["felhasznalonev"] === $felhasznalonev)
        $hibak[] = "A felhasználónév már foglalt!";
    }

    if (strlen($jelszo) < 8)
      $hibak[] = "A jelszónak legalább 8 karakter hosszúnak kell lennie!";

    if ($jelszo !== $jelszo2)
      $hibak[] = "A jelszó és az ellenőrző jelszó nem egyezik!";

    if ($eletkor < 18)
      $hibak[] = "Csak 18 éves kortól lehet regisztrálni!";

    if (count($hibak) === 0) {
      $fiokok[] = ["felhasznalonev" => $felhasznalonev, "jelszo" => $jelszo, "eletkor" => $eletkor, "nem" => $nem, "tulajdonsag" => $tulajdonsag];
      saveUsers("users.txt", $fiokok);
      $siker = TRUE;
      header("Location: Main.php");
    } else {
      $siker = FALSE;
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

<nav>
    <?php if (isset($_SESSION["user"])) { ?>
        <a class="kijeloles" href="Main.php">Fő oldal</a>
        <a class="kijeloles" href="Pizza.php">Pizza</a>
        <a class="kijeloles" href="Sult.php">Sült étel</a>
        <a class="kijeloles" href="Fott.php">Főtt étel</a>
        <a class="kijeloles" href="Desszert.php">Desszert</a>
        <a class="kijeloles" href="Profil.php">Profil</a>
    <?php } else { ?>
        <a class="kijeloles" href="Main.php">Fő oldal</a>
        <a class="kijeloles" href="Pizza.php">Pizza</a>
        <a class="kijeloles" href="Sult.php">Sült étel</a>
        <a class="kijeloles" href="Fott.php">Főtt étel</a>
        <a class="kijeloles" href="Desszert.php">Desszert</a>
        <a class="kijeloles" href="Main.php">Bejelentkezés</a>
        <a class="kijeloles" id="aktiv" href="Regisztracio.php">Regisztráció</a>
    <?php } ?>
</nav>

<h1>NetKaja</h1>

<div>
    <fieldset>
        <form class="signup" action="Regisztracio.php" method="post">
            <label>Felhasználónév: <input type="text" name="felhasznalonev" value="<?php if (isset($_POST['felhasznalonev'])) echo $_POST['felhasznalonev']; ?>"/></label> <br/>
            <label>Jelszó: <input type="password" name="jelszo"/></label> <br/>
            <label>Jelszó ismét: <input type="password" name="jelszo2"/></label> <br/>
            <label>Életkor: <input type="number" name="eletkor" value="<?php if (isset($_POST['eletkor'])) echo $_POST['eletkor']; ?>"/></label> <br/>
            <br/>Nem:<br/>
            <label><input type="radio" name="nem" value="F" <?php if (isset($_POST['nem']) && $_POST['nem'] === 'F') echo 'checked'; ?>/> Férfi</label>
            <label><input type="radio" name="nem" value="N" <?php if (isset($_POST['nem']) && $_POST['nem'] === 'N') echo 'checked'; ?>/> Nő</label>
            <label><input type="radio" name="nem" value="E" <?php if (isset($_POST['nem']) && $_POST['nem'] === 'E') echo 'checked'; ?>/> Egyéb</label> <br/>
            <br/>Tulajdonság:<br/>
            <label><input type="checkbox" name="tulajdonsag[]" value="mind" <?php if (isset($_POST['tulajdonsag']) && in_array('mind', $_POST['tulajdonsag'])) echo 'checked'; ?>/> Mindenevő</label>
            <label><input type="checkbox" name="tulajdonsag[]" value="vega" <?php if (isset($_POST['tulajdonsag']) && in_array('vega', $_POST['tulajdonsag'])) echo 'checked'; ?>/> Vegetáriánus</label>
            <label><input type="checkbox" name="tulajdonsag[]" value="vegan" <?php if (isset($_POST['tulajdonsag']) && in_array('vegan', $_POST['tulajdonsag'])) echo 'checked'; ?>/> Vegán</label><br/><br/>

            <br/><input type="submit" name="regiszt" value="Regisztrálok!"/> <br/><br/>

            <?php
            if (isset($siker) && $siker === TRUE) {
                echo "<p>Sikeres regisztráció!</p>";
            } else {
                foreach ($hibak as $hiba) {
                    echo "<p>" . $hiba . "</p>";
                }
            }
            ?>
        </form>
    </fieldset>
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
</footer>

</body>
</html>
