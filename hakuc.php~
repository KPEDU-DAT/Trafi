<!DOCTYPE HTML>
<html lang="fi">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tavoite 3</title>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!--[if lt IE 9]>
      <script src="http://oss.maxcdn.com/html15shiv/3.7.2/html15shiv.min.js"></script>
      <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
    <div class="jumbotron">
    <h1>Palkkatiedot</h1>
        <p>
            <form action="tavoite2_tun.php" method="POST">
                <p>Anna sosiaaliturvatunnus:
                <input type="text" name="sotu">
                <p><button class="btn btn-info btn-lg" type="submit" name="laheta" value="true">Lähetä</button>
            </form>
        </p>
        <p>
        <?php
            $yhteys=mysqli_connect("localhost","data14","mv2Mqbm888DvqbjT","data14");
            if(mysqli_connect_errno()) {
                die("MySQL, virhe yhteyden luonnissa:" . mysqli_connect_error());
            }
            $yhteys->set_charset('utf8');

            if ($_POST['sotu']) {
                $sotu = mysqli_real_escape_string($yhteys, $_POST['sotu']);
                $tulos = mysqli_query($yhteys, "SELECT nimet.etunimi, nimet.sukunimi, tyontekijat.palkka 
                                                FROM nimet, tyontekijat 
                                                WHERE nimet.sotu = tyontekijat.id 
                                                AND nimet.sotu = '" . $sotu . "'");

                while ($rivi = mysqli_fetch_array($tulos)) {
            echo $rivi["sukunimi"] . " " . $rivi["etunimi"] . ", " . $rivi["palkka"] . " €/kk";

                }
            }

            mysqli_close($yhteys);

        ?>
        </p>
    </div>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </body>
</html>
