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
          $id = $_GET['id'];
          
          $yhteys=mysqli_connect("localhost","data14","mv2Mqbm888DvqbjT","data14");
          
          if(mysqli_connect_errno()) {
            die("MySQL, virhe yhteyden luonnissa:" . mysqli_connect_error());
          }
          $yhteys->set_charset('utf8');

          								$sql = "SELECT * FROM trafi_ajoneuvot
												LEFT OUTER JOIN trafi_vari
                                              	ON trafi_ajoneuvot.vari = trafi_vari.koodintunnus
                                                LEFT OUTER JOIN trafi_korityyppi
                                                ON trafi_ajoneuvot.korityyppi = trafi_korityyppi.KO          
                                                LEFT OUTER JOIN trafi_ajoneuvoluokka
                                                ON trafi_ajoneuvot.ajoneuvoluokka = trafi_ajoneuvoluokka.ajoneuvoluokka
                                                LEFT OUTER JOIN trafi_kunta
                                                ON trafi_ajoneuvot.kunta = trafi_kunta.koodintunnuss 
												WHERE jarnro = $id ";       
          
          // aja SQL lause
          $res = mysqli_query($yhteys,$sql) or die("<br>$sql<br>$id ");
          
          // tulosta se
          $auto = mysqli_fetch_object($res);
     
		  echo "Ajoneuvo on ";
          echo $auto->pitkaselite_fi;      
          echo " ";
          if ($auto->merkkiSelvakielinen != NULL){      
          echo $auto->merkkiSelvakielinen;      
          echo " merkkinen ";}   
          else echo " ";
          if ($auto->lyhytselite_fi != NULL){      
          echo $auto->lyhytselite_fi;}      
          else echo " kulkuneuvo";
          if ($auto->mallimerkinta != NULL){       
          echo ", mallia ";
          echo $auto->mallimerkinta;}      
          else if ($auto->mallimerkinta != NULL && $auto->istumapaikkojenlkm != NULL) {            
          echo ". ";}
          else  echo $auto->mallimerkinta;      
          echo ". Siinä on ";
          if ($auto->istumapaikkojenlkm != NULL && $auto->omamassa != NULL){            
          echo $auto->istumapaikkojenlkm;                                                          
          echo" istumapaikkaa, ja massaltaan se on ";}
          else if ($auto->istumapaikkojenlkm != NULL){      
          echo $auto->istumapaikkojenlkm;      
          echo " istumapaikkaa";}                                                       
          if ($auto->omamassa != NULL){      
          echo $auto->omamassa;      
          echo " kg.";}
          if ($auto->suurinNettoteho != NULL){      
          echo " Suurin nettoteho on ";
          echo $auto->suurinNettoteho;      
          echo " kW. ";}
          if ($auto->PITKASELITE_fii != NULL){      
          echo " Korityyppi on ";
          echo $auto->PITKASELITE_fii;      
          echo ".";}
          if ($auto->iskutilavuus != NULL && $auto->ovienlukumaara != "0"){
          echo " Ajoneuvon iskutilavuus on ";
          echo $auto->iskutilavuus;
          echo " cm^3 ja siinä on ";
          echo $auto->ovienlukumaara;
          echo " ovea.";}
          else if ($auto->iskutilavuus != NULL) {
          echo " Ajoneuvon iskutilavuus on ";
          echo $auto->iskutilavuus;
          echo " cm^3. ";}
          else if ($auto->ovienlukumaara != NULL){
          echo "Siinä on ";
          echo $auto->ovienlukumaara;
          echo " ovea. ";}
          else echo " ";
          if ($auto->ensirekisterointipvm != NULL){
          echo " Se rekisteröitiin ";
          echo $auto->ensirekisterointipvm;
          echo ". ";}
          else ". ";
          if ($auto->pitkaseliteu_fi != NULL){
          echo "Ajoneuvo sijaitsee paikassa ";
          echo $auto->pitkaseliteu_fi;
          echo ".";}
          else echo " ";

          
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