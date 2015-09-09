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
$vuosi = $_POST['vuosi'];
	
	echo "Valittu merkki: ".$merkki.".<br>";
	echo "Valittu vuosimalli: ".$vuosi.".<br>";
	?>
	
	<form method="POST" action="b-fin.php">
	
	<?
	
	echo "<input type='hidden' name='merkki' value='".$merkki."'>";
	echo "<input type='hidden' name='vuosi' value='".$vuosi."'>";
	
	?>
	<p> Valitse haluttu malli: </p>
	<?php
	
 switch($merkki)
      {
       case "Audi";

      ?>
       <select name="malli">

      <option disabled value="desc4">Audi</option>
      <option value="A4">A4</option>
      <option value="A6">A6</option>
        </select>
        <?php
      break;

        case "BMW";
        ?>
        <select name="malli">
      <option disabled value="desc9">BMW</option>
      <option value="530d">530d</option>
      <option value="523i">523i</option>
        </select>
        <?php
     break;

       case "Citroen";
       ?>
        <select name="malli">
      <option disabled value="desc11">Citroen</option>
      <option value="XANTIA">Xantia</option>
        </select>
        <?php
    break;

      case "Ford";
      ?>
        <select name="malli">
     <option disabled value="desc6">Ford</option>
     <option value="FOCUS">Focus</option>
     <option value="MONDEO">Mondeo</option>
     <option value="TRANSIT_100">Transit 100</option>
        </select>
        <?php
    break;

      case "Mazda";
      ?>
        <select name="malli">
      <option disabled value="desc8">Mazda</option>
      <option value="6">6</option>
        </select>
        <?php
    break;

        case "Mercedes-Benz";
        ?>
         <select name="malli">
      <option disabled value="desc3"><u>Mercedes-Benz</u></option>
      <option value="C_200_CDI">C 200 CDI</option>
      <option value="E_200_CDI">E 200 CDI</option>
      <option value="E_200_CDI">E 220 CDI</option>
         </select>
         <?php
    break;

        case "Mitsubishi";
        ?>
         <select name="malli">
      <option disabled value="desc12">Mitsubishi</option>
      <option value="PAJERO">Pajero</option>
         </select>
         <?php
    break;

        case "Renault";
        ?>
         <select name="malli">
      <option disabled value="desc6">Renault</option>
      <option value="MEGANE">Megane</option>
         </select>
         <?php
    break;

        case "Saab";
        ?>
        <select name="malli">
      <option disabled value="desc5">Saab</option>
      <option value="9-3">9-3</option>
      <option value="900">900</option>
        </select>
        <?php
    break;

        case "Skoda";
        ?>
        <select name="malli">
      <option disabled value="desc7">Skoda</option>
      <option value="OCTAVIA">Octavia</option>
        </select>
        <?php
    break;

        case "Toyota";
        ?>
        <select name="malli">
      <option disabled value="desc1">Toyota</option>
      <option value="AVENSIS">Avensis</option>
      <option value="STARLET">Starlet</option>
      <option value="HIACE">Hiace</option>
        </select>
        <?php
    break;

        case "Volkswagen";
        ?>
        <select name="malli">
      <option disabled value="desc2">Volkswagen</option>
      <option value="GOLF">Golf</option>
      <option value="PASSAT">Passat</option>
      <option value="TRANSPORTER_1.9TD-70X0A-K">Transporter 1.9TD-70X0A-K</option>
        </select>
        <?php
    break;

        case "Volvo";
        ?>
        <select name="malli">
      <option disabled value="desc10">Volvo</option>
      <option value="240">240</option>
      <option value="V70">v70</option>
        </select>
        <?php
    break;
    
    default: echo "Something went wrong!";
     }

     ?>
      
      <button name="btn" class="round button" value="TRUE">Seuraava</button>
      </form>
      <p> Tämänhetkiset tulokset <p>
      
      <?php
      
      include "connect.php";
      
      $yhteys->set_charset('UTF-8');
$tulos=mysqli_query($yhteys,"SELECT * FROM trafi_ajoneuvot
                            WHERE trafi_ajoneuvot.ensirekisterointipvm LIKE '".$vuosi."%'
                            AND trafi_ajoneuvot.merkkiSelvakielinen LIKE '".$merkki."'
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