<?php
//KOODI= JOONA, JUHO, HANNU, MIRO
//PROJEKTIJOHTAJA= EQ (ERIKA)
?>


<!DOCTYPE HTML>
<?php
$X= $_POST['merkki'];
$Z= $_POST['malli'];
$Y= $_POST['vuosi'];
$btn=$_POST['nappi']
?>
<html>
  <head>
    <meta charset="UTF-8">   
    <title> PHP + SQL </title>
  </head>
  <body>
    <form method="POST" action="hakukonebeta.php">
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
die("MySQL, virhe yhteyden luonnissa: ". mysqli_connect_error());
}

$yhteys->set_charset('utf8');

$tulos= mysqli_query($yhteys,"SELECT * FROM trafi_ajoneuvot      
                            WHERE 'ensirekisterointipvm' LIKE  '".$Y."%'
                            AND 'merkkiSelvakielinen' ='".$X."'
                            AND 'mallimerkinta' = '%".$Z."%';" );

while($rivi=mysqli_fetch_array($tulos))
{
    echo $rivi['ajoneuvoluokka']." ".$rivi['ensirekisterointipvm']." ".$rivi['ajoneuvoryhma']." ".
         $rivi['ajoneuvokaytto']." ".$rivi['variantti']." ".$rivi['versio']." ".
         $rivi['kayttoonottopvm']." ".$rivi['vari']." ".$rivi['ovienlukumaara']." ".
         $rivi['korityyppi']." ".$rivi['ohjaamotyyppi']." ".$rivi['istumapaikkojenlkm']." ".
         $rivi['omamassa']." ".$rivi['teknSuurSallKokmassa']." ".$rivi['tieliikSuurSallKokmassa']." ".
         $rivi['ajonKokPituus']." ".$rivi['ajoLeveys']." ".$rivi['ajonKorkeus']." ".
         $rivi['Kayttovoima']." ".$rivi['iskutilavuus']." ".$rivi['suurinNettoteho']." ".
         $rivi['sylintereidenLkm']." ".$rivi['ahdin']." ".$rivi['sahkohybridi']." ".
         $rivi['merkkiSelvakielinen']." ".$rivi['mallimerkinta']." ".$rivi['vaihteisto']." ".
         $rivi['vaihteidenlkm']." ".$rivi['kaupallinenNimi']." ".$rivi['voimanValJaTehostamistapa']." ".
         $rivi['tyyppihyvaksynta']." ".$rivi['yksittaisKayttovoima']." ".$rivi['kunta']." ".
         $rivi['Co2']." ".$rivi['mittarilukema']." ".$rivi['alue']." ".
         $rivi['valmistenumero2']." ".$rivi['jarnro'];
    echo "<br>";
}

mysqli_close($yhteys);

}

else
{
echo "";
}
?>
    </p>
  </body>
</html>
