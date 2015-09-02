<!doctype html>
<html class="no-js" lang="en">
  <head>
  <?php

        $yht = mysqli_connect("localhost", "data14", "mv2Mqbm888DvqbjT", "data14");
        echo mysqli_error($yht);
        mysqli_set_charset($yht,"utf8");
   
   $result = mysqli_query($yht, "SELECT COUNT(jarnro) FROM trafi_ajoneuvot;");
   $row = mysqli_fetch_array($result,MYSQLI_NUM);
   $all = $row["0"] / 100;

   if (isset($_GET["table"]))
      $num = $_GET["table"];
   else
      $num = 0;
  
       $head = array("<th>Yleisimmät merkit</th><th>Määrä</th><th>Osuus</th>",
                 "<th>Yleisimmät värit</th><th>Määrä</th><th>Osuus</th>",
                 "<th>Yleisimmät ajoneuvoluokat</th><th>Pitkä selite</th><th>Määrä</th><th>Osuus</th>",
                 "<th>Yleisimmät ajoneuvoryhmät</th><th>Määrä</th><th>Osuus</th>",
                 "<th>Yleisimmät käyttötavat</th><th>Määrä</th><th>Osuus</th>",
                 "<th>Yleisimmät käyttövoimat</th><th>Määrä</th><th>Osuus</th>",
                 "<th>Yleisimmät korityypit</th><th>Määrä</th><th>Osuus</th>");
   
   
   $data = array("SELECT merkkiSelvakielinen,COUNT(merkkiSelvakielinen),CONCAT(ROUND(((COUNT(merkkiSelvakielinen))/".$all."),1),' %') FROM trafi_ajoneuvot GROUP BY merkkiSelvakielinen ORDER BY COUNT(merkkiSelvakielinen) DESC",
                 "SELECT pitkaselite_fi,COUNT(vari),CONCAT(ROUND(((COUNT(vari))/".$all."),1),' %') FROM trafi_ajoneuvot,trafi_vari WHERE trafi_ajoneuvot.vari=trafi_vari.koodintunnus GROUP BY vari ORDER BY COUNT(vari) DESC",
                 "SELECT lyhytselite_fi,pitkaselite_fiu,COUNT(pitkaselite_fiu),CONCAT(ROUND(((COUNT(pitkaselite_fiu))/".$all."),1),' %') FROM trafi_ajoneuvot,trafi_ajoneuvoluokka WHERE trafi_ajoneuvot.ajoneuvoluokka=trafi_ajoneuvoluokka.ajoneuvoluokka GROUP BY pitkaselite_fiu ORDER BY COUNT(pitkaselite_fiu) DESC",
                 "SELECT PITKASELITE_fi,COUNT(PITKASELITE_fi),CONCAT(ROUND(((COUNT(PITKASELITE_fi))/".$all."),1),' %') FROM trafi_ajoneuvot,trafi_ajoneuvoryhma WHERE trafi_ajoneuvot.ajoneuvoryhma=trafi_ajoneuvoryhma.KOODINTUNNUS GROUP BY PITKASELITE_fi ORDER BY COUNT(PITKASELITE_fi) DESC",
                 "SELECT lyhytselite_fi,COUNT(lyhytselite_fi),CONCAT(ROUND(((COUNT(lyhytselite_fi))/".$all."),1),' %') FROM trafi_ajoneuvot,trafi_kaytto WHERE trafi_ajoneuvot.ajoneuvonkaytto=trafi_kaytto.ajoneuvonkaytto GROUP BY lyhytselite_fi ORDER BY COUNT(lyhytselite_fi) DESC",
                 "SELECT SELITE_fi,COUNT(SELITE_fi),CONCAT(ROUND(((COUNT(SELITE_fi))/".$all."),1),' %') FROM trafi_ajoneuvot,trafi_kayttovoima WHERE trafi_ajoneuvot.Kayttovoima=trafi_kayttovoima.KOODINTUNNUS GROUP BY SELITE_fi ORDER BY COUNT(SELITE_fi) DESC",
                 "SELECT PITKASELITE_fii,COUNT(PITKASELITE_fii),CONCAT(ROUND(((COUNT(PITKASELITE_fii))/".$all."),1),' %') FROM trafi_ajoneuvot,trafi_korityyppi WHERE trafi_ajoneuvot.korityyppi=trafi_korityyppi.KO GROUP BY PITKASELITE_fii ORDER BY COUNT(PITKASELITE_fii) DESC");


    ?>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation</title>
    <script src="js/vendor/modernizr.js"></script>
  </head>

  <body>                                                             
    <? include("navbar.php") ?>                           
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.9/css/dataTables.foundation.min.css" type="text/css"></link> 
    <div class="row"></div>
      <div class=" small-3 medium-3 large-3 small-centered medium-centered large-centered columns">
            <? include("auto.php"); ?>
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
    <div class="small-9 medium-9 large-9 columns">
        <table class="responsive" id="table">
        <thead>
        <?php
//          $sql = $data[$num]." DESC LIMIT 10";
            echo "<tr>".$head[$num];
   echo "</thead>";
    echo "<tbody>";
            $sql = $data[$num];
            $result = mysqli_query($yht, $sql);
            echo mysqli_error($yht);
            while($row = mysqli_fetch_array($result,MYSQLI_NUM)){
              $i = 0;
              echo "<tr>";
              while(isset($row[$i])){
                 echo "<td>".$row[$i]."</td>";
                 $i++;
              }
           }
?>
        </tbody>
        </table>
    </div>
    </div>
  </body>
  <? include("footer.php"); ?>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/r/zf-5.5.2/dt-1.10.8/datatables.min.js"></script>        
    <script>
      $(document).foundation();
    
      $(document).ready(function() {
                 $('#table').dataTable({"aaSorting": [[1, 'desc']] });
      } );
    </script>
</html>
