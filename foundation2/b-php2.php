<?php
$X=$_POST['merkki'];
$Y=$_POST['vuosi'];
$yhteys=mysqli_connect("localhost","data14","mv2Mqbm888DvqbjT","data14");
if(mysqli_connect_errno())
{
die("MySQL, virhe yhteyden luonnissa: ".mysqli_connect_error());
}
$yhteys->set_charset('utf8');
$tulos=mysqli_query($yhteys,"SELECT trafi_ajoneuvot.mallimerkinta FROM trafi_ajoneuvot
                            WHERE trafi_ajoneuvot.ensirekisterointipvm LIKE '".$Y."%'
                            AND trafi_ajoneuvot.merkkiSelvakielinen LIKE '".$X."';" );

while($rivi=mysqli_fetch_array($tulos))	{
  echo $rivi['mallimerkinta']." ";
mysqli_close($yhteys);
?>