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