<?php
session_start();
?>
<!doctype html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html>

  <head>

  <title>Tyylit</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Documentation and reference library for ZURB Foundation. JavaScript, CSS, components, grid and more."/>
    <meta name="author" content="ZURB, inc. ZURB network also includes zurb.com"/>
    <meta name="copyright" content="ZURB, inc. Copyright (c) 2015"/>

    <link rel="stylesheet" href="http://cosmo.kpedu.fi/~jannenyman/projekti/Trafi/foundation2/bower_components/foundation/css/foundation.css"/>
    <script src="http://cosmo.kpedu.fi/~jannenyman/projekti/Trafi/foundation2/bower_components/foundation2/modernizr/modernizr.js"></script>
  </head>

  
  <body>


      <h2>Ajoneuvon kuvaus</h2>
      
      <div class="box">
      <p>
        <?php
          $_GET['jarnro'] = $id;
          echo '<br /><a href="hakuc_2.php"> </a>';
          $yhteys=mysqli_connect("localhost","data14","mv2Mqbm888DvqbjT","data14");
            if(mysqli_connect_errno()) {
                die("MySQL, virhe yhteyden luonnissa:" . mysqli_connect_error());
            }
            $yhteys->set_charset('utf8');

            
            $sql = "SELECT * FROM trafi_ajoneuvot 
                    WHERE trafi_ajonevot.jarnro = $id ";       
            echo $_SESSION['ensirekisterointipvm']; 
            // aja SQL lause
            // tulosta se
            
            
            mysqli_close($yhteys);

          ?> 
    </div>




  </body>


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

</html>