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


     <div class="header"> 
      <h2>Ajoneuvon kuvaus</h2>
      <div class="box">
      <p>
        <?php
          $yhteys=mysqli_connect("localhost","data14","mv2Mqbm888DvqbjT","data14");
            if(mysqli_connect_errno()) {
                die("MySQL, virhe yhteyden luonnissa:" . mysqli_connect_error());
            }
            $yhteys->set_charset('utf8');

          session_start();
          echo '<br /><a href="hakuc_2.php"> </a>';  
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
          if ($_SESSION['istumapaikkojenlkm'] != NULL && $_SESSION['omamassa'] != NULL){
          echo $_SESSION['istumapaikkojenlkm'];
          echo" istumapaikkaa, ja massaltaan se on ";}
          else if ($_SESSION['istumapaikkojenlkm'] != NULL){
          echo $_SESSION['istumapaikkojenlkm'];
          echo " istumapaikkaa";}
          if ($_SESSION['omamassa'] != NULL){
          echo $_SESSION['omamassa'];
          echo " kg.";}
          if ($_SESSION['suurinNettoteho'] != NULL){
          echo " Suurin nettoteho on ";
          echo $_SESSION['suurinNettoteho'];
          echo " kW. ";}
          if ($_SESSION['PITKASELITE_fii'] != NULL){
          echo " Korityyppi on ";
          echo $_SESSION['PITKASELITE_fii'];
          echo ".";}
          if ($_SESSION['iskutilavuus'] != NULL && $_SESSION['ovienlukumäärä'] != "0"){
          echo " Ajoneuvon iskutilavuus on ";
          echo $_SESSION['iskutilavuus'];
          echo " cm^3 ja siinä on ";
          echo $_SESSION['ovienlukumaara'];
          echo " ovea.";}
          else if ($_SESSION['iskutilavuus'] != NULL) {
          echo " Ajoneuvon iskutilavuus on ";
          echo $_SESSION['iskutilavuus'];
          echo " cm^3. ";}
          else if ($_SESSION['ovienlukumäärä'] != NULL){
          echo "Siinä on ";
          echo $_SESSION['ovienlukumaara'];
          echo " ovea. ";}
          else echo " ";
          if ($_SESSION['ensirekisterointipvm'] != NULL){
          echo " Se rekisteröitiin "; 
          echo $_SESSION['ensirekisterointipvm'];
          echo ". ";}
          else ". ";
          if ($_SESSION['pitkaseliteu_fi'] != NULL){
          echo "Ajoneuvo sijaitsee paikassa ";
          echo $_SESSION['pitkaseliteu_fi'];
          echo ".";}
          else echo " ";

mysqli_close($yhteys);


          ?> 
    </div>
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