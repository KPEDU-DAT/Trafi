<?php
$X=$_POST['merkki'];
$Y=$_POST['vuosi'];
?>
<form method="POST" action="b-body.php">
  <p>Valitse haluamasi merkki ja vuosimalli: </p>
    <?	include("b-php2.php"); 
        include("b-hakures.php"); ?>
  <button name="button" value="true" type="submit" data-reveal-id="myModal"> Seuraava</button>
</form>
<script>
      document.write('<script src=js/vendor/' +
      ('__proto__' in {} ? 'zepto' : 'jquery') +
      '.js><\/script>')
      </script>

        <script
src="http://foundation.zurb.com/assets/js/jquery.js"></script>
        <script
src="http://foundation.zurb.com/templates/js/foundation.min.js"></script>
        <script>
        $(document).foundation();
        </script>
        <script
        src="http://foundation.zurb.com/assets/js/templates/jquery.js"></script>
        <script
        src="http://foundation.zurb.com/assets/js/templates/foundation.js"></script>
        <script>
         $(document).foundation();
          var doc = document.documentElement;
           doc.setAttribute('data-useragent', navigator.userAgent);
            </script>
