<!DOCTYPE HTML>
<html lang="fi">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Haku C</title>

    <link rel="stylesheet" href="/~patriksipi/Foundation/bower_components/foundation/css/foundation.css"/>
	<script src="/~patriksipi/Foundation/bower_components/modernizr/modernizr.js"></script>
<style>
#header {
    background-color:#606060;
    color:white;
    text-align:center;
    padding:5px;
}

#table {

    background-color:#D0D0D0;
    padding:100px;
}
#section {

    background-color:#D0D0D0;
    padding:100px;
}



</style>
  </head>
  
  <style>
#header {
    background-color:#D0D0D0;
    color:white;
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
		<h1 style="color:white">Ajoneuvotiedot</h1>
		</div>

<div id="table">    


        <p>
            <form action="hakuc.php" method="POST">
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
                                                WHERE trafi_ajoneuvot.valmistenumero2 = '" . $VIN . "'
                                                ORDER BY kayttoonottopvm DESC;");

        echo  "<tr><th>Merkki</th><th>Malli</th><th>Ensirekisteröintipvm</th><th>Väri</th><th>Ajoneuvoluokka</th><th>Ovienlkm</th><th>Istumapaikkojenmäärä</th><th>Omamassa</th><th>Iskutilavuus</th><th>Suurin nettoteho (kW)</th>";                                        
        while($rivi = mysqli_fetch_array($tulos)) {
        echo "<tr>
                  <td>".$rivi['merkkiSelvakielinen']."</td> 
                  <td>".$rivi['mallimerkinta']."</td>
                  <td>".$rivi['ensirekisterointipvm']."</td>
                  <td>".$rivi['pitkaselite_fi']."</td>
                  <td>".$rivi['ajoneuvoluokka']."</td>
                  <td>".$rivi['ovienlukumaara']."</td> 
                  <td>".$rivi['istumapaikkojenlkm']."</td> 
                  <td>".$rivi['omamassa']."</td> 
                  <td>".$rivi['iskutilavuus']."</td>
                  <td>".$rivi['suurinNettoteho']."</td>
              </tr>";

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
</body>
</html>