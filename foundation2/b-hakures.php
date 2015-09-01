<div id="myModal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">

<?php
$yhteys=mysqli_connect("localhost","data14","mv2Mqbm888DvqbjT","data14");
if(mysqli_connect_errno())
{
die("MySQL, virhe yhteyden luonnissa: ".mysqli_connect_error());
}
$yhteys->set_charset('utf8');
$tulos=mysqli_query($yhteys,"SELECT * FROM trafi_ajoneuvot;");
echo "<select name='merkki'>";

while($rivi=mysqli_fetch_array($tulos)) {
  echo '<option value="'.$rivi['id'].'"';
    if($rivi['id']==$X)
      { echo 'selected="selected"'; }
  echo ">".$rivi['title']."</option>";
};
              
echo "</select>";
mysqli_close($yhteys);
?>


  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>