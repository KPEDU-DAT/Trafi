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
        <table class="table table-hover table.bordered">
        <?php  
            $yhteys=mysqli_connect("localhost","data14","mv2Mqbm888DvqbjT","data14");
            if(mysqli_connect_errno()) {
                die("MySQL, virhe yhteyden luonnissa:" . mysqli_connect_error());    
            }                           
            $yhteys->set_charset('utf8');                                        
      if ($_POST['rek']) {
                $rek = mysqli_real_escape_string($yhteys ,$_POST['rek']);
                $tulos = mysqli_query($yhteys, "SELECT *
                                                FROM trafi_ajoneuvot, trafi_rekisterinumerot NATURAL LEFT OUTER JOIN trafi_vari
                                                
                                                WHERE trafi_rekisterinumerot.rekisterinumero = '" . $rek . "'
                                              
                                                AND trafi_ajoneuvot.vari = trafi_vari.koodintunnus
                                                 
                                                AND trafi_rekisterinumerot.koodi = trafi_ajoneuvot.jarnro");
                                                
               }								
                
      
              while ($rivi = mysqli_fetch_array($tulos)) {
        echo  "<tr><th>Ajoneuvoluokka</th><th>Merkki</th><th>Malli</th><th>Ensirekisteröinti</th><th>Kunta</th><th>Vaihteisto</th><th>Iskutilavuus</th><th>Väri</th>";
                                                   
         echo "<tr>
                  <td>".$rivi['ajoneuvoluokka']."</td>                       
                  <td>".$rivi['merkkiSelvakielinen']."</td> 
                  <td>".$rivi['mallimerkinta']."</td>       
                  <td>".$rivi['ensirekisterointipvm']."</td>
                  <td>".$rivi['kunta']."</td>        
                  <td>".$rivi['vaihteisto']."</td>
                  <td>".$rivi['iskutilavuus']."</td>
                  <td>".$rivi['pitkaselite_fi']."</td>      
            </tr>";
                         
                }  
                
            mysqli_close($yhteys);
        ?>   
        </p>
        </table>
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