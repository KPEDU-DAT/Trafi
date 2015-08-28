<?php
$yhteys=mysqli_connect("localhost","data14","mv2Mqbm888DvqbjT","data14");
if(mysqli_connect_errno())
{
die("MySQL, virhe yhteyden luonnissa: ".mysqli_connect_error());
}
$yhteys->set_charset('utf8');
$tulos=mysqli_query($yhteys,"SELECT * FROM trafi_ajoneuvot
                            WHERE trafi_ajoneuvot.ensirekisterointipvm LIKE
'".$Y."%'
                            AND trafi_ajoneuvot.merkkiSelvakielinen LIKE
'".$X."'
                            AND trafi_ajoneuvot.mallimerkinta LIKE
'%".$z."%';" );