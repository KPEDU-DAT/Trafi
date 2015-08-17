<?php
$X= $_POST['merkki'];
$Z= $_POST['malli'];
$Y= $_POST['vuosi'];
$btn=$_POST['nappi'];
?>



<form method="POST" action="hbbody.php">
      <p>Kirjoittakaa haluttu merkki: </p>
      <input type="text" name="merkki" value="">
      <p>Kirjoittakaa haluttu malli: </p>
      <input type="text" name="malli" value="">
      <p>Kirjoittakaa haluttu vuosimalli: </p>
      <input type="text" name="vuosi" value="">
      <button name="nappi" value="True">Aloita haku</button>
    </form>

<?php
if($btn=="True")
{
  
$yhteys=mysqli_connect("localhost","data14","mv2Mqbm888DvqbjT","data14");
                                               
if(mysqli_connect_errno())
{
die("MySQL, virhe yhteyden luonnissa: ".mysqli_connect_error());
}
$yhteys->set_charset('utf8');
$tulos=mysqli_query($yhteys,"SELECT * FROM trafi_ajoneuvot
                            WHERE trafi_ajoneuvot.ensirekisterointipvm LIKE '".$Y."%'
                            AND trafi_ajoneuvot.merkkiSelvakielinen LIKE '".$X."'
                            AND trafi_ajoneuvot.mallimerkinta LIKE '%".$Z."%';" );
    echo "<table>";
    echo  "<tr><th>Luokka</th><th>1. rek. pvä</th><th>Ryhmä</th><th>dfjshkk</th><th>Väri</th>";
while($rivi=mysqli_fetch_array($tulos))	{
    echo "<tr>
             <td>".$rivi['ajoneuvoluokka']."</td> <td>".$rivi['ensirekisterointipvm']."</td> <td>".$rivi['ajoneuvoryhma']."</td> <td>".
         $rivi['ajoneuvokaytto']."</td> <td>".$rivi['variantti']."</td> <td>".$rivi['versio']."</td> <td>".
         $rivi['kayttoonottopvm']."</td> <td>".$rivi['vari']."</td> <td>".$rivi['ovienlukumaara']."</td> <td>".
         $rivi['korityyppi']."</td> <td>".$rivi['ohjaamotyyppi']."</td> <td>".$rivi['istumapaikkojenlkm']."</td> <td>".
         $rivi['omamassa']."</td> <td>".$rivi['teknSuurSallKokmassa']."</td> <td>".$rivi['tieliikSuurSallKokmassa']."</td> <td>".
         $rivi['ajonKokPituus']."</td> <td>".$rivi['ajoLeveys']."</td> <td>".$rivi['ajonKorkeus']."</td> <td>".
         $rivi['Kayttovoima']."</td> <td>".$rivi['iskutilavuus']."</td> <td>".$rivi['suurinNettoteho']."</td> <td>".
         $rivi['sylintereidenLkm']."</td> <td>".$rivi['ahdin']."</td> <td>".$rivi['sahkohybridi']."</td> <td>".
         $rivi['merkkiSelvakielinen']."</td> <td>".$rivi['mallimerkinta']."</td> <td>".$rivi['vaihteisto']."</td> <td>".
         $rivi['vaihteidenlkm']."</td> <td>".$rivi['kaupallinenNimi']."</td> <td>".$rivi['voimanValJaTehostamistapa']."</td> <td>".
         $rivi['tyyppihyvaksynta']."</td> <td>".$rivi['yksittaisKayttovoima']."</td> <td>".$rivi['kunta']."</td> <td>".
         $rivi['Co2']."</td> <td>".$rivi['mittarilukema']."</td> <td>".$rivi['alue']."</td> <td>".
         $rivi['valmistenumero2']."</td> <td>".$rivi['jarnro']."</td></tr>";
  }
  echo "</table>";
mysqli_close($yhteys);
}
else
{
echo "Ei yhteyttä";
}
?>
    </p>