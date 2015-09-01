<!doctype html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html>

  <head>
  
  <title>Haku A</title>
   <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   <meta name="description" content="Documentation and reference library for ZURB Foundation. JavaScript, CSS, components, grid and more."/>
   <meta name="author" content="ZURB, inc. ZURB network also includes zurb.com"/>
   <meta name="copyright" content="ZURB, inc. Copyright (c) 2015"/>
   
  <link rel="stylesheet" href="/~alexhassel/foundation/bower_components/foundation/css/foundation.css"/>
  <script src="/~erkkasailynoja/foundation/bower_components/modernizr/modernizr.js"></script>
   <head/>

  
  
<style>

 img{padding-top: 150px;}


#header {
    background-color:#D0D0D0;
    color:white;
    text-align:center;
    padding:5px;
}



#section {


    padding:100px;
}


 
</style>
    



  
  </head>  
 <body>

        <div id="header">
        <h1 style="color:white">Ajoneuvotiedot</h1>
        </div>
 
<center>
 <div class="large-12 medium-12 small-12 columns">
 <img src="http://www.comparateur-assurance-auto.biz/images/auto.png">
 </div>
<div id="table"> 
 <form>
 <div class="row">
  <div class="large-12 columns">
   <div class="row collapse postfix-round">
    <div class="small-9 columns">
   
 
     <div class="small-3 columns">
     
     </div>
    </div>
   </div>
  </div>
 </div>
 </form>
<form action="hakua_2.php" method="POST"> 
  <div class="row">
  <div class="large-12 columns">
    <div class="row collapse postfix-round">
    <div class="small-9 columns">                                                                                           
  <input type="text" placeholder="Haku" name="rekisterinumero">
  </div>
  <div class="small-3 columns">                          
  <button class="button postfix default" type="submit" name="laheta" value="true">Hae</button>
  </div>
  </div>
  </div>
  </div>
  </div>
</form>
<table class="responsive table table-hover table.bordered">
<?php  
            $yhteys=mysqli_connect("localhost","data14","mv2Mqbm888DvqbjT","data14");
            if(mysqli_connect_errno()) {
                die("MySQL, virhe yhteyden luonnissa:" . mysqli_connect_error());    
            }                           
            $yhteys->set_charset('utf8');                                        

      if ($_POST['rekisterinumero']) {
                $rek = mysqli_real_escape_string($yhteys ,$_POST['rekisterinumero']);
                $tulos = mysqli_query($yhteys, "SELECT *
                                                FROM trafi_ajoneuvot 
                                                CROSS JOIN trafi_rekisterinumerot 
                                                LEFT OUTER JOIN trafi_vari
                                                ON trafi_ajoneuvot.vari = trafi_vari.koodintunnus
                                                LEFT OUTER JOIN trafi_kunta
                                                ON trafi_ajoneuvot.kunta = trafi_kunta.koodintunnuss
                                                WHERE trafi_rekisterinumerot.koodi = trafi_ajoneuvot.jarnro
                                                AND trafi_rekisterinumerot.rekisterinumero = '" . $rek . "';");
                                                
               								
                
      
              while ($rivi = mysqli_fetch_array($tulos)) {
        echo  "<tr><th>Ajoneuvoluokka</th><th>Merkki</th><th>Malli</th></tr>";
                 
                                                   
         echo "<tr> 
                  
                  <td>".$rivi['ajoneuvoluokka']."</td>                       
                  <td>".$rivi['merkkiSelvakielinen']."</td> 
                  <td>".$rivi['mallimerkinta']."</td>      
                 
                  
                  
                  <tr><th>Ensirekisteröinti</th><th>Kunta</th><th>Vaihteisto</th></tr>
                  <td>".$rivi['ensirekisterointipvm']."</td>
                  <td>".$rivi['pitkaseliteu_fi']."</td>        
                  <td>".$rivi['vaihteisto']."</td>
                  
                  <tr><th>Iskutilavuus</th><th>Väri</th></tr>
                  
                  <td>".$rivi['iskutilavuus']."</td>
                  <td>".$rivi['pitkaselite_fi']."</td>
                  
                  <td><a href=\"hakua_tuo.php?id=".$rivi['koodi'].$rivi['jarnro']."\"' class='button tiny round'>Lisätietoja</a>"."</td>
                  
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
         
        </div>
        </div>
        </div>
          
        </table>
		</center>
		</div>
		
        </p>                      
        <script>                                     
                                     
          
 
 
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