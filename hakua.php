<!doctype html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html>

  <head>
  
  <title>YOLO</title>
   <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   <meta name="description" content="Documentation and reference library for ZURB Foundation. JavaScript, CSS, components, grid and more."/>
   <meta name="author" content="ZURB, inc. ZURB network also includes zurb.com"/>
   <meta name="copyright" content="ZURB, inc. Copyright (c) 2015"/>
   
  <link rel="stylesheet" href="/~patriksipi/Foundation/bower_components/foundation/css/foundation.css"/>
  <script src="/~patriksipi/Foundation/bower_components/modernizr/modernizr.js"></script>
   <head/>

  
  
<style>

 img{padding-top: 150px;}
 
</style>
    



  
  </head>  
 <body>
 <center>
 <div class="large-12 medium-12 small-12 columns">
 <img src="http://www.comparateur-assurance-auto.biz/images/auto.png">
 </div>
 
 <form>
 <div class="row">
  <div class="large-12 columns">
   <div class="row collapse postfix-round">
    <div class="small-9 columns">
   
    </div>
     <div class="small-3 columns">
     
     </div>
    </div>
   </div>
  </div>
 </div>
 </form>
<form action="hakua.php" method="POST"> 
                                                                                             
  <input type="text" placeholder="Haku" name="valmistenumero2">                          
  <button class="secondary button" type="submit" name="laheta" value="true">Hae</button>
</form>
<table>
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
        echo  "<tr><th>Merkki</th><th>Malli</th><th>Kunta</th><th>Vaihteisto</th><th>Väri</th>";
        while($rivi = mysqli_fetch_array($tulos)) {                                             
         echo "<tr>                                
                  <td>".$rivi['merkkiSelvakielinen']."</td> 
                  <td>".$rivi['mallimerkinta']."</td>       
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
                                     
          
 
 </center>
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
            </script>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       </script>
    </body>
</html>