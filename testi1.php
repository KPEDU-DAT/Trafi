<!doctype html>
<html lang="fi">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Testi</title>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!--[if it IE 9]>
      <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body><center>
    <h1>testi</h1>
    <form action="testi1.php" method="POST">

      <input type="text" name="haku" placeholder="rekkari">
      <button name="submit" value="TRUE">Suorita</button>
    <div class="container-fluid">
    <div class="row">
    <div class="col-md-12">
    <div class="table-responsive">
    <table class="table table-hover table-bordered"><br>
    <?php
      $yhteys = mysqli_connect("localhost","data14","mv2Mqbm888DvqbjT","data14");
      if(mysqli_connect_errno()){
        die ("mysql, virhe yhteyden luonnisse: " . mysqli_connect_error());
      }
      $yhteys->set_charset('utf8');
      $submit =$yhteys->real_escape_string(trim(htmlentities(strip_tags($_POST['submit']))));

      if($submit){
        $tulos = mysqli_query($yhteys, "SELECT * 
        		FROM `trafi_kunta`;");
        while($rivi = mysqli_fetch_array($tulos)){
          echo "<tr>
                <td>" .$rivi['koodintunnus']."</td>
                <td>" .$rivi['pitkaselite_fi']. "</td>
                <td>" .$rivi['pitkaselite_sv'] ."</td>
                <td>" .$rivi['pitkaselite_en'] ."</td>
                </tr>";
        }}
      mysqli_close($yhteys);
    ?>
    </table>
      </div>
    </div>
    </div>
    </div>
    </div><!-- /.container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <script src="http://getbootstrap.com/assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
 </center></body>
</html>

