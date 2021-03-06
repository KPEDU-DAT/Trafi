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

    <link rel="stylesheet" href="/~patriksipi/Foundation/bower_components/foundation/css/foundation.css"/>
    <script src="/~patriksipi/Foundation/bower_components/modernizr/modernizr.js"></script>
  <head/>

  

  <body>



    
      <h2>Ajoneuvon kuvaus</h2>
      <div class="box">
      <p>
        <?php
          session_start();
          echo '<br /><a href="kopiokoskalogo.php"> </a>';
		  echo "Ajoneuvo on "; 
          echo $_SESSION['pitkaselite_fi'];
          echo " ";
          if ($_SESSION['merkkiSelvakielinen'] != NULL){
          echo $_SESSION['merkkiSelvakielinen'];
          echo " merkkinen ";} 
          else echo " ";
          if ($_SESSION['lyhytselite_fi'] != NULL){
          echo $_SESSION['lyhytselite_fi'];}
          else echo " kulkuneuvo";
          if ($_SESSION['mallimerkinta'] != NULL){ 
          echo ", mallia ";
          echo $_SESSION['mallimerkinta'];}
          else if ($_SESSION['mallimerkinta'] != NULL && $_SESSION['istumapaikkojenlkm'] != NULL) {
          echo ". ";}
          else  echo $_SESSION['mallimerkinta'];
          echo ". Siinä on ";
          if ($_SESSION['istumapaikkojenlkm'] != NULL){
          echo $_SESSION['istumapaikkojenlkm'];}
          echo" istumapaikkaa, ja massaltaan se on ";
          echo $_SESSION['omamassa']; 
          echo " kg. Suurin nettoteho on "; 
          echo $_SESSION['suurinNettoteho']; 
          echo " kW ja korityyppi on ";
          echo $_SESSION['PITKASELITE_fii'];
          echo ". Ajoneuvon iskutilavuus on ";
          echo $_SESSION['iskutilavuus'];
          echo " ja siinä on ";
          echo $_SESSION['ovienlukumaara'];
          echo " ovea. Se rekisteröitiin "; 
          echo $_SESSION['ensirekisterointipvm']; 
          echo".";
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