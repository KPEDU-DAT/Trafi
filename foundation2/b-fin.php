<!DOCTYPE html>
<html lang="en" data-useragent="Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Documentation and reference library for ZURB Foundation. JavaScript, CSS, components, grid and more.">
    <meta name="author" content="">
    <link rel="stylesheet" href="http://cosmo.kpedu.fi/~jannenyman/projekti/Trafi/foundation2/bower_components/foundation/css/foundation.css"/>
    <link rel="stylesheet" href="http://cosmo.kpedu.fi/~jannenyman/projekti/Trafi/foundation2/bower_components/icons/foundation-icons/foundation-icons.css">
    <script src="http://cosmo.kpedu.fi/~jannenyman/projekti/Trafi/foundation2/bower_components/modernizr/modernizr.js"></script>

    <title>Haku B</title>
    <link rel="shortcut icon" href="autouusi.png">
    <? include("tyyli.php"); ?>
  </head>
  <body>
    <? include("navuusi.php"); ?>
    <? include("navuusi2.php"); ?>
    <? include("auto.php"); ?>
    <div class="row">
  	<div class="large-12 columns">
  	<div class="small-12 columns">

<?php
$merkki = $_POST['merkki'];
$malli = $_POST['malli'];
$vuosi = $_POST['vuosi'];

echo "Haun kriteerit:<br>";
echo "Merkki: ".$merkki.", Malli: ".$malli.", Vuosimalli: ".$vuosi.".<br>";
?>

<p> Etkö löytänyt hakemaasi? </p>
<a href="b-haku.php">Palaa alkuun</a>
<?php

      include "connect.php";

      $yhteys->set_charset('UTF-8');
$tulos=mysqli_query($yhteys,"SELECT * FROM trafi_ajoneuvot
                            WHERE trafi_ajoneuvot.ensirekisterointipvm LIKE '".$vuosi."%'
                            AND trafi_ajoneuvot.merkkiSelvakielinen LIKE '".$merkki."'
							AND trafi_ajoneuvot.mallimerkinta LIKE '%".$malli."%'
                            LIMIT 25;" );
    echo "<table>";
    echo  "<tr><th>Merkki</th><th>Malli</th><th>Luokka</th><th>1. rek. pvm</th><th>Ryhmä</th>
            <th>Versio</th><th>Ovien lkm.</th><th>Korityyppi</th><th>Co2</th></tr>";
while($rivi=mysqli_fetch_array($tulos)) {
    echo "<tr>
    <td>".$rivi['merkkiSelvakielinen']."</td>
    <td>".$rivi['kaupallinenNimi']."</td>
    <td>".$rivi['ajoneuvoluokka']."</td>
    <td>".$rivi['ensirekisterointipvm']."</td>
    <td>".$rivi['ajoneuvoryhma']."</td>
    <td>".$rivi['versio']."</td>
    <td>".$rivi['ovienlukumaara']."</td> 
    <td>".$rivi['korityyppi']."</td>
    <td>".$rivi['Co2']."</td>
    </tr>";
    }
      echo "</table>";
mysqli_close($yhteys);

?>
</div>
</div>
</div>
<script>
  document.write('<script src=js/vendor/' +
  ('__proto__' in {} ? 'zepto' : 'jquery') +
  '.js><\/script>')
  </script>
<script src="http://foundation.zurb.com/assets/js/jquery.js"></script>
<script src="http://cosmo.kpedu.fi/~jannenyman/projekti/Trafi/foundation2/bower_components/foundation/js/foundation.min.js"></script>
<script>
    $(document).foundation();
  </script>
<script src="http://foundation.zurb.com/assets/js/templates/jquery.js"></script>
<script src="http://cosmo.kpedu.fi/~jannenyman/projekti/Trafi/foundation2/bower_components/foundation/js/foundation/foundation.js"></script>
<script>
      $(document).foundation();
      var doc = document.documentElement;
      doc.setAttribute('data-useragent', navigator.userAgent);
    </script>
  </body>
<? include("footer.php"); ?>
</html>