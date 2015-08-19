<!doctype html>
<html class="no-js" lang="en">
  <head>
 <?php
        $yht = mysqli_connect("localhost", "data14", "mv2Mqbm888DvqbjT", "data14");
        echo mysqli_error($yht);
        mysqli_set_charset($yht,"utf8");
    ?>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ajoneuvotiedot</title>
    <script src="js/vendor/modernizr.js"></script>
  </head>

  <body>                                                             
    <? include("ypalkki.php") ?>                           
    <div class="row" style="height: 100px;"></div>
    <div class="row">
      <div class=" small-3 medium-3 large-3 small-centered medium-centered large-centered columns">
        <? include("auto.php"); ?>
		<h3>TOP-10</h3>
        <a href="tilastot.php?table=0">Merkit</a><br>
        <a href="tilastot.php?table=1">Väri</a><br>
      </div>
    </div>
    <div class="small-6 medium-6 large-6 columns">
        <table>
            <?
                //Muuttuja $sql sisältää yleispätevän lauseen tilastollisten
                //määrien laskemiseen.
                //Alla olevat listat sisältävät kyselylauseen muuttuvat
                //tiedot joihin viitataan $_GET["table"]-muuttujalla.
                //Esim sql-lause määräytyy tablen ollessa 0 (Ajoneuven
                //merkit) listojen ensimmäisten alkioiden mukaan.
                
                // Jos tiettyä kategoriaa ei ole valittu, täytyy käyttää jotakin oletusarvoa
                if (isset($_GET["table"])
                    $num = $_GET["table"];
                else
                    $num = 0;
                
                $hselite = array("Yleisimmät merkit","Yleisimmät värit");
                $harvo = array("Määrä","Määrä");
                $selite = array("merkkiSelvakielinen","pitkaselite_fi");
                $arvo = array("COUNT(merkkiSelvakielinen)","COUNT(vari)");
                $fromWhere = array(" ",",trafi_vari WHERE
                trafi_ajoneuvot.vari=trafi_vari.koodintunnus");
                $groupby = array("merkkiSelvakielinen","vari");
                
                echo "<thead><tr>
                        <th>".$hselite[$num]."</th>
                        <th>".$harvo[$num]."</th>
                      </thead>
                      <tbody>";
                
                $sql = "SELECT ".$selite[$num].", ".$arvo[$num]." FROM trafi_ajoneuvot".$fromWhere[$num]." GROUP BY ".$groupby[$num]." ORDER BY ".$arvo[$num]." DESC LIMIT 10";
                $result = mysqli_query($yht, $sql);
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr><td>".$row[$selite[$num]]."</td><td>".$row[$arvo[$num]]."</td>";
                } 
            ?>
        </tbody>
        </table>
    <div class="small-6 medium-6 large-6 columns">
        
    </div>
	
    </div>
  
    
    
    
	
  </body>
  <? include("footer.php"); ?>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
</html>
