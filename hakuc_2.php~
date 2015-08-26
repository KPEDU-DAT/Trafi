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
<<<<<<< HEAD
    background-color:#D0D0D0;
    color:white;
=======
    
>>>>>>> 9f1973ad075fb94554fcd834e881744ccd58a301
    text-align:center;
    padding:5px;
}


#table {
    
        
                padding:200px;
    
                
                
    
}
#section {

 
    padding:100px;
}
 


</style>



  <body>
		<div id="header">
<<<<<<< HEAD
        <h1 style="color:white">Ajoneuvotiedot</h1> 
=======
        <h1>Ajoneuvotiedot</h1> 
>>>>>>> 9f1973ad075fb94554fcd834e881744ccd58a301
        </div>
        
<div id="table">  
	<p>
            <form action="hakuc_2.php" method="POST">
                <input type="text" placeholder="Anna VIN-koodi:" name="valmistenumero2">
                <p><button class="secondary button" type="submit" name="laheta" value="true">Hae</button>
            </form>
        </p>
		<table class="responsive">
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
                                                ON trafi_ajoneuvot.korityyppi = trafi_korityyppi.KOODINTUNNUS
                                                LEFT OUTER JOIN trafi_ajoneuvoluokka
                                                ON trafi_ajoneuvot.ajoneuvoluokka = trafi_ajoneuvoluokka.ajoneuvoluokka
                                                WHERE trafi_ajoneuvot.valmistenumero2 = '" . $VIN . "'
                                                ORDER BY kayttoonottopvm DESC;");
        
        echo  "<thead><tr><th>Merkki</th><th>Malli</th><th>Ensirekisteröintipvm</th><th>Väri</th><th>Ajoneuvoluokka</th><th>Ovienlkm</th><th>Istumapaikkojenmäärä</th><th>Omamassa</th><th>Iskutilavuus</th><th>Suurin nettoteho (kW)</th><th>Korityyppi</th><th>Kuvaus</th></tr></thead>";                                    

<<<<<<< HEAD
        echo  "<tr><th>Merkki</th><th>Malli</th><th>Ensirekisteröintipvm</th><th>Väri</th><th>Ajoneuvoluokka</th><th>Ovienlkm</th><th>Istumapaikkojenmäärä</th><th>Omamassa (kg)</th><th>Iskutilavuus</th><th>Suurin nettoteho (kW)</th><th>Korityyppi</th>";                                    
=======
>>>>>>> 9f1973ad075fb94554fcd834e881744ccd58a301
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
                  <td><a href=\"taulukko8.php?id=".$rivi['jarnro']."\" class='small secondary button'>Näytä kuvaus</a><td>
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
        		 '<br /><a href="taulukko8.php"> </a>'; 
        		 '<br /><a href="taulukko8.php?' . SID . '"> </a>'; 
                }
            }
     
            mysqli_close($yhteys);
        ?>
		</table>
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