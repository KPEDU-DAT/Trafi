<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		 </head>
      <body>
<h1>Ajoneuvotiedot</h1>
        <p>
            <form action="habody.php" method="POST">
                <p>Anna Rekisterinumero:
                <input type="text" name="rek">
                <p><button class="btn btn-info btn-lg" type="submit"
                name="laheta" value="true">Hae</button>
            </form>
        
		<a href="#" class="button split">Split Button <span data-dropdown="drop"></span></a><br>
<ul id="drop" class="f-dropdown" data-dropdown-content>
  <li><a href="#">This is a link</a></li>
  <li><a href="#">This is another</a></li>
  <li><a href="#">Yet another</a></li>
</ul>



</p>
        <p>
        <?php
$yhteys=mysqli_connect("localhost","data14","mv2Mqbm888DvqbjT","data14");
            if(mysqli_connect_errno()) {
                die("MySQL, virhe yhteyden luonnissa:" .mysqli_connect_error());
            }
            $yhteys->set_charset('utf8');
            if ($_POST['rek']) {
                $rek = mysqli_real_escape_string($yhteys ,$_POST['rek']);
                $tulos = mysqli_query($yhteys, "SELECT *
                                                FROM trafi_ajoneuvot, trafi_rekisterinumerot
                                                WHERE trafi_rekisterinumerot.koodi = trafi_ajoneuvot.jarnro
                                                AND trafi_rekisterinumerot.rekisterinumero = '" . $rek . "'");
                echo "<table>";
                while ($rivi = mysqli_fetch_array($tulos)) {
            echo  
                  "<tr>".
                  "<td>".$rivi["rekisterinumero"]."</td>".
                  "<td>".$rivi["ajoneuvoluokka"]."</td>".
                  "<td>".$rivi["ensirekisterointipvm"]."</td>".
                  "<td>".$rivi["ajoneuvoryhma"]."</td>".
                  "<td>".$rivi["ajoneuvonkaytto"]."</td>".
                  "<td>".$rivi["variantti"]."</td>".
                  "<td>".$rivi["versio"]."</td>".
                  "<td>".$rivi["kayttoonottopvm"]."</td>".
                  "<td>".$rivi["vari"]."</td>".
                  "<td>".$rivi["ovienlukumaara"]."</td>".
                  "<td>".$rivi["korityyppi"]."</td>".
                  "<td>".$rivi["ohjaamotyyppi"]."</td>".
                  "<td>".$rivi["istumapaikkojenlkm"]."</td>".
                  "<td>".$rivi["omamassa"]."</td>". 
                  "<td>".$rivi["teknSuurSallKokmassa"]."</td>".
                  "<td>".$rivi["tieliikSuurSallKokmassa"]."</td>". 
                  "<td>".$rivi["ajonKokPituus"]."</td>".
                  "<td>".$rivi["ajonLeveys"]."</td>".
                  "<td>".$rivi["ajonKorkeus"]."</td>".
                  "<td>".$rivi["Kayttovoima"]."</td>".
                  "<td>".$rivi["iskutilavuus"]."</td>".
                  "<td>".$rivi["suurinNettoteho"]."</td>".
                  "<td>".$rivi["sylintereidenLkm"]."</td>".
                  "<td>".$rivi["ahdin"]."</td>".
                  "<td>".$rivi["sahkohybridi"]."</td>".
                  "<td>".$rivi["merkkiSelvakielinen"]."</td>".
                  "<td>".$rivi["mallimerkinta"]."</td>".
                  "<td>".$rivi["vaihteisto"]."</td>".
                  "<td>".$rivi["vaihteidenlkm"]."</td>".
                  "<td>".$rivi["kaupallinenNimi"]."</td>".
                  "<td>".$rivi["voimanValJaTehostamistapa"]."</td>".
                  "<td>".$rivi["tyyppihyvaksynta"]."</td>".
                  "<td>".$rivi["yksittaisKayttovoima"]."</td>".
                  "<td>".$rivi["kunta"]."</td>".
                  "<td>".$rivi["Co2"]."</td>".
                  "<td>".$rivi["mittarilukema"]."</td>".
                  "<td>".$rivi["alue"]."</td></tr>";
                }
                echo "</table>";
            }
            mysqli_close($yhteys);
        ?>
        </p>
        <script>
  document.write('<script src=js/vendor/' +
  ('__proto__' in {} ? 'zepto' : 'jquery') +
  '.js><\/script>')
  </script>
	
<script src="http://foundation.zurb.com/assets/js/jquery.js"></script>
	<script src="http://foundation.zurb.com/assets/js/jquery.js"></script>
	<script
src="http://foundation.zurb.com/templates/js/foundation.min.js"></script>
	<script>
    	$(document).foundation();
  	</script>
	<script
  	src="http://foundation.zurb.com/assets/js/templates/jquery.js"></script>
	<script
  	src="http://foundation.zurb.com/assets/js/templates/foundation.js"></script>
	<script>
    	  $(document).foundation();
    	  var doc = document.documentElement;
    	  doc.setAttribute('data-useragent', navigator.userAgent);
    </script>
</body>
</html>