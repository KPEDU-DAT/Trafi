<h1>Ajoneuvotiedot</h1>
        <p>
            <form action="habody.php" method="POST">
                <p>Anna Rekisterinumero:
                <input type="text" name="rek">
                <p><button class="btn btn-info btn-lg" type="submit"
                name="laheta" value="true">Hae</button>
            </form>
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
                
                "<table>".
					"<thead>".
					"<tr>".
                while ($rivi = mysqli_fetch_array($tulos)) {
            echo  
                "<th width="150">Rekisterinumero</th>".
				"<th width="150">Ajoneuvoluokka</th>".
				"<th width="150">Ensirekisteröinti pvm</th>".
				"<th width="150">Ajoneuvoryhmä</th>".
                  "<td>".$rivi["rekisterinumero"]."</td>".
                  "<td>".$rivi["ajoneuvoluokka"]."</td>".
                  "<td>".$rivi["ensirekisterointipvm"]."</td>".
                  "<td>".$rivi["ajoneuvoryhma"]."</td>".
                  "</tr>".
                  "<tr>".
                  "<td>".$rivi["ajoneuvonkaytto"]."</td>".
                  "<td>".$rivi["variantti"]."</td>".
                  "<td>".$rivi["versio"]."</td>".
                  "<td>".$rivi["kayttoonottopvm"]."</td>".
                  "</tr>".
                  "<tr>".
                  "<td>".$rivi["vari"]."</td>".
                  "<td>".$rivi["ovienlukumaara"]."</td>".
                  "<td>".$rivi["korityyppi"]."</td>".
                  "<td>".$rivi["ohjaamotyyppi"]."</td>".
                  "</tr>".
                  "<tr>".
                  "<td>".$rivi["istumapaikkojenlkm"]."</td>".
                  "<td>".$rivi["omamassa"]."</td>". 
                  "<td>".$rivi["teknSuurSallKokmassa"]."</td>".
                  "<td>".$rivi["tieliikSuurSallKokmassa"]."</td>".
                  "</tr>".
                  "<tr>". 
                  "<td>".$rivi["ajonKokPituus"]."</td>".
                  "<td>".$rivi["ajonLeveys"]."</td>".
                  "<td>".$rivi["ajonKorkeus"]."</td>".
                  "<td>".$rivi["Kayttovoima"]."</td>".
                  "</tr>".
                  "<tr>".
                  "<td>".$rivi["iskutilavuus"]."</td>".
                  "<td>".$rivi["suurinNettoteho"]."</td>".
                  "<td>".$rivi["sylintereidenLkm"]."</td>".
                  "<td>".$rivi["ahdin"]."</td>".
                  "</tr>".
                  "<tr>".
                  "<td>".$rivi["sahkohybridi"]."</td>".
                  "<td>".$rivi["merkkiSelvakielinen"]."</td>".
                  "<td>".$rivi["mallimerkinta"]."</td>".
                  "<td>".$rivi["vaihteisto"]."</td>".
                  "</tr>".
                  "<tr>".
                  "<td>".$rivi["vaihteidenlkm"]."</td>".
                  "<td>".$rivi["kaupallinenNimi"]."</td>".
                  "<td>".$rivi["voimanValJaTehostamistapa"]."</td>".
                  "<td>".$rivi["tyyppihyvaksynta"]."</td>".
                  "</tr>".
                  "<tr>".
                  "<td>".$rivi["yksittaisKayttovoima"]."</td>".
                  "<td>".$rivi["kunta"]."</td>".
                  "<td>".$rivi["Co2"]."</td>".
                  "<td>".$rivi["mittarilukema"]."</td>".
                "</tr>".
				"<tr>".  
				"<td>".$rivi["alue"]."</td></tr>";
                }
                echo "</thead></table>";
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