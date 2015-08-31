<?php
$X=$_POST['merkki'];
$Y=$_POST['vuosi'];
$yhteys=mysqli_connect("localhost","data14","mv2Mqbm888DvqbjT","data14");
if(mysqli_connect_errno())
{
die("MySQL, virhe yhteyden luonnissa: ".mysqli_connect_error());
}
$yhteys->set_charset('utf8');
$tulos=mysqli_query($yhteys,"SELECT title FROM shukari_model
                            WHERE shukari_model.make_id LIKE '".$X."%';" );
echo "<select name='title'>";
while($rivi=mysqli_fetch_array($tulos))	{
  echo "<option value=".$rivi['title'].">".$rivi['title']."</option>";
};
echo "</select>";
mysqli_close($yhteys);
?>