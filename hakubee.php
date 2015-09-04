<?php
// JOONA, JUHO, HANNU, MIRO
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
    <form method="POST" action="hakubee.php">
     <p>Valitse haluamasi merkki: </p>
      <select name="merkki">
        <option value="Audi">Audi</option>
        <option value="BMW">BMW</option>
        <option value="Citroen">Citroen</option>
        <option value="Ford">Ford</option>
        <option value="Mazda">Mazda</option>
        <option value="Mercedes-Benz">Mercedes-Benz</option>
        <option value="Mitsubishi">Mitsubishi</option>
        <option value="Renault">Renault</option>
        <option value="Saab">Saab</option>
        <option value="Skoda">Skoda</option>
        <option value="Toyota">Toyota</option>
        <option value="Volkswagen">Volkswagen</option>
        <option value="Volvo">Volvo</option>
      </select>
    </form>



      <?php
      $NXT= $_POST['Next'];

      if($NXT=="True")
      {

      $merkki = $_POST['merkki'];

      echo"
      <form type='POST' action='hakubee.php'>
       <select name='merkkix'>
        <option value=".$merkki.">".$merkki."</option>
       </select>
      ";
      switch($merkki)
      {
       case "Audi";

      ?>
       <select name="malli">

      <option disabled value="desc4">Audi</option>
      <option value="A4">A4</option>
      <option value="A6">A6</option>
        </select>
        <?php
      break;

        case "BMW";
        ?>
        <select name="malli">
      <option disabled value="desc9">BMW</option>
      <option value="530d">530d</option>
      <option value="523i">523i</option>
        </select>
        <?php
     break;

       case "Citroen";
       ?>
        <select name="malli">
      <option disabled value="desc11">Citroen</option>
      <option value="XANTIA">Xantia</option>
        </select>
        <?php
    break;

      case "Ford";
      ?>
        <select name="malli">
     <option disabled value="desc6">Ford</option>
     <option value="FOCUS">Focus</option>
     <option value="MONDEA">Mondea</option>
     <option value="TRANSIT_100">Transit 100</option>
        </select>
        <?php
    break;

      case "Mazda";
      ?>
        <select name="malli">
      <option disabled value="desc8">Mazda</option>
      <option value="6">6</option>
        </select>
        <?php
    break;

        case "Mercedes-Benz";
        ?>
         <select name="malli">
      <option disabled value="desc3"><u>Mercedes-Benz</u></option>
      <option value="C_200_CDI">C 200 CDI</option>
      <option value="E_200_CDI">E 200 CDI</option>
      <option value="E_200_CDI">E 220 CDI</option>
         </select>
         <?php
    break;

        case "Mitsubishi";
        ?>
         <select name="malli">
      <option disabled value="desc12">Mitsubishi</option>
      <option value="PAJERO">Pajero</option>
         </select>
         <?php
    break;

        case "Renault";
        ?>
         <select name="malli">
      <option disabled value="desc6">Renault</option>
      <option value="MEGANE">Megane</option>
         </select>
         <?php
    break;

        case "Saab";
        ?>
        <select name="malli">
      <option disabled value="desc5">Saab</option>
      <option value="9-3">9-3</option>
      <option value="900">900</option>
        </select>
        <?php
    break;

        case "Skoda";
        ?>
        <select name="malli">
      <option disabled value="desc7">Skoda</option>
      <option value="OCTAVIA">Octavia</option>
        </select>
        <?php
    break;

        case "Toyota";
        ?>
        <select name="malli">
      <option disabled value="desc1">Toyota</option>
      <option value="AVENSIS">Avensis</option>
      <option value="STARLET">Starlet</option>
      <option value="HIACE">Hiace</option>
        </select>
        <?php
    break;

        case "Volkswagen";
        ?>
        <select name="malli">
      <option disabled value="desc2">Volkswagen</option>
      <option value="GOLF">Golf</option>
      <option value="PASSAT">Passat</option>
      <option value="TRANSPORTER_1.9TD-70X0A-K">Transporter 1.9TD-70X0A-K</option>
        </select>
        <?php
    break;

        case "Volvo";
        ?>
        <select name="malli">
      <option disabled value="desc10">Volvo</option>
      <option value="240">240</option>
      <option value="V70">v70</option>
        </select>
        <?php
    break;
     }
     ?>
      </form>
      <button name="btn" value="TRUE">Seuraava</button>
     <?php

    $NXT = "True";
    $nxt = $_POST['btn'];

    if($nxt=="TRUE")
    {

      ?>
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
                            WHERE trafi_ajoneuvot.ensirekisterointipvm LIKE '".$Y."%'
                            AND trafi_ajoneuvot.merkkiSelvakielinen LIKE '".$X."'
                            AND trafi_ajoneuvot.mallimerkinta LIKE '%".$Z."%';" );
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
	<td>".$rivi['Co2']."</td>;
    </tr>";
  }
  echo "</table>";
mysqli_close($yhteys);
}
else
{
echo "Ei yhteyttä";
}
else
{
echo "";
}
}
else
{
?>
<button name="Next" value="True">Seuraava</button>
<?php
}
