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
                
                                
                
              while ($rivi = mysqli_fetch_array($tulos)) {      
                 
                                  
                  include ("taulukko5.php");
                
             
                
                  }
                
            
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
	<link type="text/css" media="screen" rel="stylesheet" href="responsive-tables.css" />
	<link rel="stylesheet" href="responsive-tables.css">
	
  <script>
    	  $(document).foundation();
    	  var doc = document.documentElement;
    	  doc.setAttribute('data-useragent', navigator.userAgent);
    </script>