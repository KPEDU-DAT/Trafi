<?php
//KOODI= JOONA, JUHO, HANNU, MIRO
//PROJEKTIJOHTAJA= EQ (ERIKA)
?>


<!DOCTYPE HTML>
<?php

?>
<html>
  <head>
    <meta charset="UTF-8">   
    <title> Hakukone B </title>
  </head>
  <body>
    <form method="POST" action="hakukonebeta.php">
     <p>Valitse haluamasi merkki: </p>
      <select name="merkki">
      <option value="Volvo">Volvo</option>
      <option value="Toyota">Toyota</option>
      <option value="Volkswagen">Volkswagen</option>
      <option value="Mercedes-Benz">Mercedes-Benz</option>
      <option value="Audi">Audi</option>
      <option value="Saab">Saab</option>
      <option value="Ford">Ford</option>
      <option value="Renault">Renault</option>
      <option value="Mazda">Mazda</option>
      <option value="Citroen">Citroen</option>
      <option value="Skoda">Skoda</option>
      <option value="Mitsubishi">Mitsubishi</option>
      <option value="BMW">BMW</option>
      </select>
      <p>Valitse haluamasi malli: </p>
      <select name="malli">
      
      <option disabled value="desc1">Toyota</option>
      <option value="AVENSIS">Avensis</option>
      <option value="STARLET">Starlet</option>
      <option value="HIACE">Hiace</option>
      
      <option disabled value="desc2">Volkswagen</option>
      <option value="GOLF">Golf</option>
      <option value="PASSAT">Passat</option>
      <option value="TRANSPORTER_1.9TD-70X0A-K">Transporter 1.9TD-70X0A-K</option>
      
      <option disabled value="desc3"><u>Mercedes-Benz</u></option>
      <option value="C_200_CDI">C 200 CDI</option>
      <option value="E_200_CDI">E 200 CDI</option>
      <option value="E_200_CDI">E 220 CDI</option>
      
      <option disabled value="desc4">Audi</option>
      <option value="A4">A4</option>
      <option value="A6">A6</option>
      
      <option disabled value="desc5">Saab</option>
      <option value="9-3">9-3</option>
      <option value="900">900</option>
      
      <option disabled value="desc6">Renault</option>
      <option value="MEGANE">Megane</option>
      
      <option disabled value="desc6">Ford</option>
      <option value="FOCUS">Focus</option>
      <option value="MONDEA">Mondea</option>
      <option value="TRANSIT_100">Transit 100</option>
      
      <option disabled value="desc7">Scoda</option>
      <option value="OCTAVIA">Ocativia</option>
      
      <option disabled value="desc8">Mazda</option>
      <option value="6">6</option>
      
      <option disabled value="desc9">BMW</option>
      <option value="530d">530d</option>
      <option value="523i">523i</option>
      
      <option disabled value="desc10">Volvo</option>
      <option value="240">240</option>
      <option value="V70">v70</option>
      
      <option disabled value="desc11">Citroen</option>
      <option value="XANTIA">Xantia</option>
      
      <option disabled value="desc12">Mitsubishi</option>
      <option value="PAJERO">Pajero</option>      
    </select>
      
      <p>Valitse haluttu vuosimalli: </p>
      
      <select name="vuosi">
      <option value="1990">1990</option>
      <option value="1991">1991</option>
      <option value="1992">1992</option>
      <option value="1993">1993</option>
      <option value="1994">1994</option>
      <option value="1995">1995</option>
      <option value="1996">1996</option>
      <option value="1997">1997</option>
      <option value="1998">1998</option>
      <option value="1999">1999</option>
      <option value="2000">2000</option>
      <option value="2001">2001</option>
      <option value="2002">2002</option>
      <option value="2003">2003</option>
      <option value="2004">2004</option>
      <option value="2005">2005</option>
      <option value="2006">2006</option>
      <option value="2007">2007</option>
      <option value="2008">2008</option>
      <option value="2009">2009</option>
      <option value="2010">2010</option>
      <option value="2011">2011</option>
      </select>
      <button name="nappi" value="True">Aloita haku</button>
    </form>

    <table class="table">
<?php

$X= $_POST['merkki'];
$Z= $_POST['malli'];
$Y= $_POST['vuosi'];
$btn=$_POST['nappi'];

if($btn=="True")
{
  
$yhteys=mysqli_connect("localhost","data14","mv2Mqbm888DvqbjT","data14");
                                               
if(mysqli_connect_errno())
{
die("MySQL, virhe yhteyden luonnissa: ". mysqli_connect_error());
}

$yhteys->set_charset('utf8');

$tulos= mysqli_query($yhteys,"SELECT ajoneuvoluokka, ensirekisterointipvm, merkkiSelvakielinen, kaupallinenNimi 
                             FROM trafi_ajoneuvot      
                             WHERE trafi_ajoneuvot.ensirekisterointipv =  '".$Y."%'
                             AND  trafi_ajoneuvot.merkkiSelvakielinen ='".$X."'
                             AND  trafi_ajoneuvot.kaupallinenNimi ='".$Z."'
                             LIMIT 10;" );

echo "<tr><th>Ajoneuvoluokka</th><th>Ensirekisteröinti</th><th>Merkki</th><th>Malli</th>";
while($rivi=mysqli_fetch_array($tulos))
{
echo "<tr>
       <td>".$rivi['ajoneuvoluokka']."</td>
       <td>".$rivi['ensirekisteroinitpvm']."</td>
       <td>".$rivi['merkkiSelvakielinen']."</td>
       <td>".$rivi['kaupallinenNimi']."</td>
      </tr>";
}

mysqli_close($yhteys);

}

else
{
echo "";
}
?>
   </table>
  </body>
</html>
