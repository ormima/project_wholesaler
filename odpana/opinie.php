<?php
$con = mysqli_connect("localhost", "root", "", "hurtownia");

    if($con){
      $sql = "SELECT zdjecie, imie, opinia FROM klienci JOIN opinie ON klienci.id= opinie.Klienci_id WHERE klienci.Typy_id=2 OR klienci.Typy_id=3";
      $query = mysqli_query($con, $sql);

      $res = "";
      while($row = mysqli_fetch_row($query)){
        $res .="
        <div class='opinia'>
            <img src='$row[0]' alt='Fotka' class='fotka'>
            <div class='content'>
                <blockquote>$row[2]</blockquote>
                <h4>$row[1]</h4>
            </div>
        </div>";
      }
    } else {
        echo "Brak połączenia";
    }

mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl3.css">
    <title>Opinie klientów</title>
</head>
<body>
    <header class="baner">
        <h1>Hurtownia spożywcza</h1>
    </header>
    <section class="glowny">
        <h2>Opinie naszych klientów</h2>
        <!-- SKRYPT NUMER 1 -->
        <?=$res;?>
    </section>

    <footer>
        <h3>Współpracują z nami</h3>
        <a href="http://sklep.pl">Sklep 1</a>
    </footer>
    <footer>
        <h3>Nasi top klienci</h3>
        <ol>
            <!-- SKRYPT 2 -->
        </ol>
    </footer>
    <footer>
        <h3>Skontaktuj się</h3>
        <p>telefon: 111222333</p>
    </footer>
    <footer>
        <h3>Autor: 123456798</h3>
    </footer>

</body>
</html>