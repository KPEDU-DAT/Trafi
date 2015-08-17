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
                <th>Yleisimmät automallit</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>Malli 1</td><td>2030</td>
                </tr>
                <tr>
                    <td>Malli 2</td><td>245030</td>
                </tr>
                <tr>
                    <td>Malli 3</td><td>241030</td>
                </tr>
                <tr>
                    <td>Malli 1</td><td>2030</td>
                </tr>
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
