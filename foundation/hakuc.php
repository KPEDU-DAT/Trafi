<h1>Ajoneuvotiedot</h1>
        <p>
            <form action="hcbody.php" method="POST">
                <input type="text" placeholder="Anna VIN-koodi:" name="valmistenumero2">
                <p><button class="secondary button" type="submit" name="laheta" value="true">Hae</button>
            </form>
        </p>
		

		<table class="table">
        <p>
        
        <?php
            $yhteys=mysqli_connect("localhost","data14","mv2Mqbm888DvqbjT","data14");
            if(mysqli_connect_errno()) {
                die("MySQL, virhe yhteyden luonnissa:" . mysqli_connect_error());
            }
            $yhteys->set_charset('utf8');
            if ($_POST['valmistenumero2']) {
                $VIN = mysqli_real_escape_string($yhteys, $_POST['valmistenumero2']);
                $tulos = mysqli_query($yhteys, "SELECT *
                                                FROM trafi_ajoneuvot
                                                WHERE trafi_ajoneuvot.valmistenumero2 = '" . $VIN . "'
                                                ORDER BY kayttoonottopvm DESC");
                       
           echo  "<thead><tr><th>Luokka</th><th>Ryhmä</th><th>Kunta</th><th>Vaihteisto</th><th>Väri</th></tr></thead>";     
           include("taulukko.php");
        while($rivi = mysqli_fetch_array($tulos)) {
          echo "<tr>
                  <td>".$rivi['ajoneuvoluokka']."</td> 
                  <td>".$rivi['ajoneuvoryhmä']."</td>
                  <td>".$rivi['kunta']."</td>
                  <td>".$rivi['vaihteisto']."</td>
                  <td>".$rivi['vari']."</td>
                </tr>";
                }	
            }
            mysqli_close($yhteys);
        ?>
		</table>
        </p>
        <script>
  document.write('<script src=js/vendor/' +
  ('__proto__' in {} ? 'zepto' : 'jquery') +
  '.js><\/script>')
  </script>