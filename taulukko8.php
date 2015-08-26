<!doctype html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html>

  <head>

  <title>Tyylit</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Documentation and reference library for ZURB Foundation. JavaScript, CSS, components, grid and more."/>
    <meta name="author" content="ZURB, inc. ZURB network also includes zurb.com"/>
    <meta name="copyright" content="ZURB, inc. Copyright (c) 2015"/>

    <link rel="stylesheet" href="/~patriksipi/Foundation/bower_components/foundation/css/foundation.css"/>
    <script src="/~patriksipi/Foundation/bower_components/modernizr/modernizr.js"></script>
  <head/>



  <style>
    #header {
      
      text-align:center;
      padding:50px;
    }

    #table {
      padding:200px;
    }
    
    #h2
        {
        
        padding:20px;
        }
    
    #section {
      padding:100px;
    }
    #box {
          width: 100%;
          background-color: #F0F0F0;
              height: auto;
            border: 2px solid #D0D0D0;
              color:black;
                  padding:25px;
                  
    }
 


  </style>
         






  <body>


    <div id="header">
      <h1>Ajoneuvon kuvaus</h1>
    </div>



    <div id="section">

      <div id="h2"><h2>Ajoneuvo #1 kuvaus</h2></div>
      <div id="box">
      <p>
        <?php
          echo "Ajoneuvo on sininen <b>Mazda</b> -merkkinen henkilöauto, mallia <b>4D SEDAN 323 GLX-1.5-BF1262/2400.</b> 
          Siinä on 5 istumapaikkaa, ja massaltaan se on 930 kg. Suurin nettoteho on 0 ja korityyppi on tyhjä.
          Se rekisteröitiin <i>1988-05-25.</i>"; 
        ?>
        </div>
      </p>

    </div>




  </body>


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

</html>