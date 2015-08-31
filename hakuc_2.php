<!DOCTYPE HTML>
<html lang="fi">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Haku C</title>

    <link rel="stylesheet" href="/~patriksipi/Foundation/bower_components/foundation/css/foundation.css"/>
	<script src="/~patriksipi/Foundation/bower_components/modernizr/modernizr.js"></script>

  </head>

  <style>
      #header {
         
         
    

          text-align:center;
          padding:50px;
      }
      #table {
	
			padding: 100px;
        
      }
      
       


  </style>



  <body>
		<div id="header">
        <h1>Ajoneuvotiedot</h1> 
        </div>
        
     <div id="table">  
	<p>
            <form action="hakuc_2.php" method="POST">
                 <div class="row">
      				<div class="large-8 columns">
        			<div class="row collapse prefix-radius">
          			<div class="large-16 columns">
                <input type="text" placeholder="Anna VIN-koodi:" name="valmistenumero2">
                <p><button class="secondary button" type="submit" name="laheta" value="true">Hae</button>
            </form>
        </p>
		<table>
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
                                                FROM trafi_ajoneuvot LEFT OUTER JOIN trafi_vari
                                                ON trafi_ajoneuvot.vari = trafi_vari.koodintunnus
                                                LEFT OUTER JOIN trafi_korityyppi
                                                ON trafi_ajoneuvot.korityyppi = trafi_korityyppi.KO          
                                                LEFT OUTER JOIN trafi_ajoneuvoluokka
                                                ON trafi_ajoneuvot.ajoneuvoluokka = trafi_ajoneuvoluokka.ajoneuvoluokka
                                                LEFT OUTER JOIN trafi_kunta
                                                ON trafi_ajoneuvot.kunta = trafi_kunta.koodintunnuss
                                                WHERE trafi_ajoneuvot.valmistenumero2 = '" . $VIN . "'
												;");
        
        echo  "<thead><tr><th>Merkki</th><th>Malli</th><th>Ensirekisteröintipvm</th><th>Väri</th><th>Ajoneuvoluokka</th><th>Ovienlkm</th><th>Istumapaikkojenmäärä</th><th>Omamassa</th><th>Iskutilavuus</th><th>Suurin nettoteho (kW)</th><th>Korityyppi</th><th>Kunta</th><th>Kuvaus</th></tr></thead>";                                    

        while($rivi = mysqli_fetch_array($tulos)) {
        echo "<tr>
                  <td>".$rivi['merkkiSelvakielinen']."</td> 
                  <td>".$rivi['mallimerkinta']."</td>
                  <td>".$rivi['ensirekisterointipvm']."</td>
                  <td>".$rivi['pitkaselite_fi']."</td>
                  <td>".$rivi['lyhytselite_fi']."</td>
                  <td>".$rivi['ovienlukumaara']."</td> 
                  <td>".$rivi['istumapaikkojenlkm']."</td> 
                  <td>".$rivi['omamassa']."</td> 
                  <td>".$rivi['iskutilavuus']."</td>
                  <td>".$rivi['suurinNettoteho']."</td>
                  <td>".$rivi['PITKASELITE_fii']."</td>
                  <td>".$rivi['pitkaseliteu_fi']."</td> 
                  <td><a href=\"hakuc_tuo.php?id=".$rivi['jarnro']."\" class='small secondary button'>Näytä kuvaus</a><td>
              </tr>";
				
				session_start();
        			$_SESSION['merkkiSelvakielinen'] = $rivi['merkkiSelvakielinen'];
        			$_SESSION['mallimerkinta'] = $rivi['mallimerkinta'];
        			$_SESSION['ensirekisterointipvm'] = $rivi['ensirekisterointipvm'];
        			$_SESSION['pitkaselite_fi'] = $rivi['pitkaselite_fi'];
        			$_SESSION['lyhytselite_fi'] = $rivi['lyhytselite_fi'];
        			$_SESSION['ovienlukumaara'] = $rivi['ovienlukumaara'];
        			$_SESSION['istumapaikkojenlkm'] = $rivi['istumapaikkojenlkm'];
        			$_SESSION['omamassa'] = $rivi['omamassa'];
        			$_SESSION['suurinNettoteho'] = $rivi['suurinNettoteho'];
        			$_SESSION['PITKASELITE_fii'] = $rivi['PITKASELITE_fii'];  
        			$_SESSION['iskutilavuus'] = $rivi['iskutilavuus'];
        			$_SESSION['pitkaseliteu_fi'] = $rivi['pitkaseliteu_fi'];
        		 '<br /><a href="taulukko8.php"> </a>'; 
        		 '<br /><a href="taulukko8.php?' . SID . '"> </a>'; 
                }
            }
     
            mysqli_close($yhteys);
        ?>
		</table>
		</div>
        </div>
		</div>
		</div>
		</p>
        
    <script>
        document.write('<script src=js/vendor/' +
        ('__proto__' in {} ? 'zepto' : 'jquery') +
        '.js><\/script>')
    </script>
	<script src="http://foundation.zurb.com/assets/js/jquery.js"></script>
	<script src="http://foundation.zurb.com/templates/js/foundation.min.js"></script>
	<script>
    	$(document).foundation();
  	</script>
	<script src="http://foundation.zurb.com/assets/js/templates/jquery.js"></script>
	<script src="http://foundation.zurb.com/assets/js/templates/foundation.js"></script>
	<script>
        $(document).foundation();
        var doc = document.documentElement;
        doc.setAttribute('data-useragent', navigator.userAgent);
    </script>
    
    
    <link type="css" media="screen" rel="stylesheet" href="~jonatanlogland/Foundation/zurb-responsive-tables-0d34bc6/responsive-tables.css" />
    <script type="javascript" src="~jonatanlogland/Foundation/zurb-responsive-tables-0d34bc6/responsive-tables.js"></script>
    
    
    

  </body>
</html>