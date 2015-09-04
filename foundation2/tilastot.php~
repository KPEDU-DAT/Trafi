<!doctype html>
<html class="no-js" lang="en">
  <head>
  
  <?php
        $yht = mysqli_connect("localhost", "data14", "mv2Mqbm888DvqbjT", "data14");
        echo mysqli_error($yht);
        mysqli_set_charset($yht,"utf8");
   if (isset($_GET["table"]))
      $num = $_GET["table"];
   else
      $num = 0;
  
       $head = array("<th>Yleisimmät merkit</th><th>Määrä</th>",
                 "<th>Yleisimmät värit</th><th>Määrä</th>",
                 "<th>Yleisimmät ajoneuvoluokat</th><th>Pitkä selite</th><th>Määrä</th>",
                 "<th>Yleisimmät ajoneuvoryhmät</th><th>Määrä</th>",
                 "<th>Yleisimmät käyttötavat</th><th>Määrä</th>",
                 "<th>Yleisimmät käyttövoimat</th><th>Määrä</th>",
                 "<th>Yleisimmät korityypit</th><th>Määrä</th>");
   
   
   $data = array("SELECT merkkiSelvakielinen,COUNT(merkkiSelvakielinen) FROM trafi_ajoneuvot GROUP BY merkkiSelvakielinen ORDER BY COUNT(merkkiSelvakielinen)",
                 "SELECT pitkaselite_fi,COUNT(vari) FROM trafi_ajoneuvot,trafi_vari WHERE trafi_ajoneuvot.vari=trafi_vari.koodintunnus GROUP BY vari ORDER BY COUNT(vari)",
                 "SELECT lyhytselite_fi,pitkaselite_fiu,COUNT(pitkaselite_fiu) FROM trafi_ajoneuvot,trafi_ajoneuvoluokka WHERE trafi_ajoneuvot.ajoneuvoluokka=trafi_ajoneuvoluokka.ajoneuvoluokka GROUP BY pitkaselite_fiu ORDER BY COUNT(pitkaselite_fiu)",
                 "SELECT PITKASELITE_fi,COUNT(PITKASELITE_fi) FROM trafi_ajoneuvot,trafi_ajoneuvoryhma WHERE trafi_ajoneuvot.ajoneuvoryhma=trafi_ajoneuvoryhma.KOODINTUNNUS GROUP BY PITKASELITE_fi ORDER BY COUNT(PITKASELITE_fi)",
                 "SELECT lyhytselite_fi,COUNT(lyhytselite_fi) FROM trafi_ajoneuvot,trafi_kaytto WHERE trafi_ajoneuvot.ajoneuvonkaytto=trafi_kaytto.ajoneuvonkaytto GROUP BY lyhytselite_fi ORDER BY COUNT(lyhytselite_fi)",
                 "SELECT SELITE_fi,COUNT(SELITE_fi) FROM trafi_ajoneuvot,trafi_kayttovoima WHERE trafi_ajoneuvot.Kayttovoima=trafi_kayttovoima.KOODINTUNNUS GROUP BY SELITE_fi ORDER BY COUNT(SELITE_fi)",
                 "SELECT PITKASELITE_fii,COUNT(PITKASELITE_fii) FROM trafi_ajoneuvot,trafi_korityyppi WHERE trafi_ajoneuvot.korityyppi=trafi_korityyppi.KOODINTUNNUS GROUP BY PITKASELITE_fii ORDER BY COUNT(PITKASELITE_fii)");
    ?>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation</title>
    <link rel="stylesheet" href="http://cosmo.kpedu.fi/~jannenyman/projekti/Trafi/foundation2/bower_components/foundation/css/foundation.css"/>
    <script src="js/vendor/modernizr.js"></script>
  </head>

  <body>
  <? include("nav.php"); ?>
  <? include("auto.php"); ?>
  
         <div class="row"></div>
      <div class=" small-3 medium-3 large-3 small-centered medium-centered large-centered columns">
   
      </div>
    </div>
                <div class="row" style="height: 100px;"></div>      
    <div class="row">
    <div class="small-3 medium-3 large-3 columns">
        <h3>Tilastot</h3>
        <a href="tilastot.php?table=0">Yleisimmät merkit</a><br>
        <a href="tilastot.php?table=1">Yleisimmät värit</a><br>
        <a href="tilastot.php?table=2">Yleisimmät ajoneuvoluokat</a></br>
        <a href="tilastot.php?table=3">Yleisimmät ajoneuvoryhmät</a></br>
        <a href="tilastot.php?table=4">Yleisimmät käyttötavat</a></br>
        <a href="tilastot.php?table=5">Yleisimmät käyttövoimat</a></br>
        <a href="tilastot.php?table=6">Yleisimmät korityypit</a></br>
    </div>
    <div class="small-9 medium-9 large-9 small-centered columns">
        <table align=center>
        <?php
            $sql = $data[$num]." DESC LIMIT 10";
            echo "<tr>".$head[$num];
   
            $result = mysqli_query($yht, $sql);
            while($row = mysqli_fetch_array($result,MYSQLI_NUM)){
              $i = 0;
              echo "<tr>";
              while(isset($row[$i])){
                 echo "<td>".$row[$i]."</td>";
                 $i++;
              }
           }
        ?>
        </table>
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