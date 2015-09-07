<?php
$merkki = $_POST['merkki'];
$malli = $_POST['malli'];
$vuosi = $_POST['vuosi'];

echo "Haun kriteerit:<br>";
echo "Merkki: ".$merkki.", Malli: ".$malli.", Vuosimalli: ".$vuosi.".<br>";
?>

<p> Etkö löytänyt hakemaasi? </p>
<a href="b-haku.php">Palaa alkuun</a>
<?php

      include "connect.php";

      $yhteys->set_charset('UTF-8');
$tulos=mysqli_query($yhteys,"SELECT * FROM trafi_ajoneuvot
                            WHERE trafi_ajoneuvot.ensirekisterointipvm LIKE '".$vuosi."%'
                            AND trafi_ajoneuvot.merkkiSelvakielinen LIKE '".$merkki."'
							AND trafi_ajoneuvot.mallimerkinta LIKE '%".$malli."%'
                            LIMIT 25;" );
    echo "<table>";
    echo  "<tr><th>Merkki</th><th>Malli</th><th>Luokka</th><th>1. rek. pvm</th><th>Ryhmä</th>
            <th>Versio</th><th>Ovien lkm.</th><th>Korityyppi</th><th>Co2</th></tr>";
while($rivi=mysqli_fetch_array($tulos)) {
    echo "<tr>
    <td>".$rivi['merkkiSelvakielinen']."</td>
    <td>".$rivi['kaupallinenNimi']."</td>
    <td>".$rivi['ajoneuvoluokka']."</td>
    <td>".$rivi['ensirekisterointipvm']."</td>
    <td>".$rivi['ajoneuvoryhma']."</td>
    <td>".$rivi['versio']."</td>
    <td>".$rivi['ovienlukumaara']."</td> 
    <td>".$rivi['korityyppi']."</td>
    <td>".$rivi['Co2']."</td>
    </tr>";
    }
      echo "</table>";
mysqli_close($yhteys);

?>