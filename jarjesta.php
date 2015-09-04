<?php
                $yhtey=mysqli_connect("localhost","data14","mv2Mqbm888DvqbjT","data14");

            if(mysqli_connect_errno()) {
                die("MySQL, virhe yhteyden luonnissa:" . mysqli_connect_error());
            }
                $yhtey->set_charset('utf8');
                $id = $_GET['id'];
                $asia = ("
                          UPDATE trafi_ajoneuvot
                          SET haku_maara = haku_maara + 1
                          WHERE jarnro = '$id';");

                if($tulos=$yhtey->multi_query($asia)) {
                  echo " ";}
                else {
                  echo "DIE MOTHERFUCKER" . " " . $asia . " " . $yhtey->error;

                mysqli_close($yhtey);}
?>