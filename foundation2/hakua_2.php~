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
   
  <link rel="stylesheet" href="http://cosmo.kpedu.fi/~jannenyman/projekti/Trafi/foundation2/bower_components/foundation/css/foundation.css"/>
  <script src="http://cosmo.kpedu.fi/~jannenyman/projekti/Trafi/foundation2/bower_components/modernizr/modernizr.js"></script>
   <head/>

  
  
  
  </head>
  <div class="tableresponsivecopy">  
 <body>

        <div class="tasaus">
        <h1>Ajoneuvotiedot</h1>
        


<p>
<form action="hakua_2.php" method="POST"> 
  <div class="row">
  <div class="large-12 columns">
    <div class="row collapse postfix-round">
    <div class="small-9 columns">                                                                                           
  <input type="text" placeholder="Haku" name="rekisterinumero">
  </div>
  <div class="small-3 columns">                          
  <p><button class="button postfix default" type="submit" name="laheta" value="true">Hae</button>
  </div>
  </div>
  </div>
 
 
</form>
</p>
<div class="header">
</div>
<table>

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
                                                
               								
                
      
              
        echo  "<thead><tr><th>Ajoneuvoluokka</th><th>Merkki</th><th>Malli</th><th>Ensirekisteröinti</th><th>Kunta</th><th>Vaihteisto</th><th>Iskutilavuus</th><th>Väri</th><th>Kuvaus</tr></tr></thead>";
              while ($rivi = mysqli_fetch_array($tulos)) {   
                                                   
         echo "<tr>  
                  <td>".$rivi['ajoneuvoluokka']."</td>                       
                  <td>".$rivi['merkkiSelvakielinen']."</td> 
                  <td>".$rivi['mallimerkinta']."</td>      
                  <td>".$rivi['ensirekisterointipvm']."</td>
                  <td>".$rivi['pitkaseliteu_fi']."</td>        
                  <td>".$rivi['vaihteisto']."</td>
                  <td>".$rivi['iskutilavuus']."</td>
                  <td>".$rivi['pitkaselite_fi']."</td>
                  <td><a href=\"hakua_tuo.php?id=".$rivi['koodi'].$rivi['jarnro']."\"' class='button tiny round'>Lisätietoja</a>"."</td>
                  
            </tr>";
            
            session_start();
                    $_SESSION['ajoneuvoluokka'] = $rivi['majoneuvoluokka'];
        			$_SESSION['merkkiSelvakielinen'] = $rivi['merkkiSelvakielinen'];
        			$_SESSION['mallimerkinta'] = $rivi['mallimerkinta'];
        			$_SESSION['ensirekisterointipvm'] = $rivi['ensirekisterointipvm'];
        			$_SESSION['pitkaseliteu_fi'] = $rivi['pitkaseliteu_fi'];
                    $_SESSION['vaihteisto'] = $rivi['vaihteisto'];
        			$_SESSION['iskutilavuus'] = $rivi['iskutilavuus'];
        			$_SESSION['pitkaselite_fi'] = $rivi['pitkaselite_fi'];
        		 '<br /><a href="hakua_tuo.php"> </a>'; 
        		 '<br /><a href="hakua_tuo.php?' . SID . '"> </a>';
            
                }         
                }  

                

            mysqli_close($yhteys);


        ?>
        </table> 
        </div>
        </div>
        </div>
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
                    
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           </script>
    </body>
</html>