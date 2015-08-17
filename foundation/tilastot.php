<!doctype html>
<html class="no-js" lang="en">
  <head>
    <?php

        $yht = mysqli_connect("localhost", "data14", "mv2Mqbm888DvqbjT", "data14");
        echo mysqli_error($yht);

    ?>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation</title>
    <script src="js/vendor/modernizr.js"></script>
  </head>

  <body>                                                             
    <? include("ypalkki.php") ?>                           
    <div class="row" style="height: 100px;"></div>      
    <div class="row">
    
    <div class="small-6 medium-6 large-6 columns">
        <table>
        <thead>
            <tr>
                <th>Yleisimmät automallit</th><th>Määrä</th>
            </tr>
        </thead>
        <tbody>
                <?php
                    $res = mysqli_query($yht, "SELECT merkkiSelvakielinen, COUNT(merkkiSelvakielinen) from trafi_ajoneuvot GROUP BY merkkiSelvakielinen ORDER BY COUNT(merkkiSelvakielinen) DESC LIMIT 10;");
                    while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
                        echo "<tr><td>" . $row['merkkiSelvakielinen']. "</td><td>" . $row['count(merkkiselvakielinen)'] . "</td></tr>";
                    }
                ?>
        </tbody>
        </table>
      </div>
    
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
