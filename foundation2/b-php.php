<?php   
$X = $_POST['merkki'];
$Z = $_POST['malli'];
$Y = $_POST['vuosi'];
$btn = $_POST['nappi'];
if($btn=="True")
{
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
'%".$Z."%';" );
    echo "<table>";
    echo  "<tr><th>Luokka</th><th>1. rekisteröinti
pvm</th><th>Ryhmä</th><th>Versio</th><th>Ovien Lkm</th><th>Korityyppi</th><th>Merkki</th><th>Malli</th><th>Co2 päästöt</th></tr>";
while($rivi=mysqli_fetch_array($tulos)) {
    echo "<tr>
        
<td>".$rivi['ajoneuvoluokka']."</td>
<td>".$rivi['ensirekisterointipvm']."</td>
<td>".$rivi['ajoneuvoryhma']."</td>
<td>".$rivi['versio']."</td>
<td>".$rivi['ovienlukumaara']."</td> 
<td>".$rivi['korityyppi']."</td>
<td>".$rivi['merkkiSelvakielinen']."</td>
<td>".$rivi['kaupallinenNimi']."</td>
<td>".$rivi['Co2']."</td></tr>";
  }
  echo "</table>";
mysqli_close($yhteys);
}
else
{
echo "";
}

?>