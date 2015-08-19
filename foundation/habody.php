<!doctype html>
<html lang="fi">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Ajoneuvotiedot</title>
    <script src="js/vendor/modernizr.js"></script>
  </head>

  <body>                                                             
    <? include("body.php") ?>                           
    <div class="row" style="height: 100px;"></div>
    <div class="row">
      <div class="small-6 medium-6 large-6 small-centered medium-centered large-centered columns">
      	<? include("hakua.php"); ?>
      </div>
	</div>
  </body>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
</html>