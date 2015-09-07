<div class="tableresponsive">
  <body>
    <div class="tasaus">
        <h1>Ajoneuvotiedot</h1>
          <p>
            <form action="a-body.php" method="POST"> 
                 <div class="row">
                  <div class="large-12 columns">
                  <div class="row collapse postfix-round">
                  <div class="small-9 columns">
                  <input type="text" placeholder="Anna Rekisterinumero:" name="rekisterinumero">
                  </div>
                  <div class="small-3 columns">
                  <p><button class="secondary button postfix info" type="submit" name="laheta" value="true">Hae</button>
                  </div>
                  </div>
                  </div>
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
        echo  "<tr><th>Ajoneuvoluokka</th><th>Merkki</th><th>Malli</th>";
                                                   
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
		</div>
		
        </p>                                                           
                                     
          
 
