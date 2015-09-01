<?php
$yhteys=mysqli_connect("localhost","data14","mv2Mqbm888DvqbjT","data14");
if(mysqli_connect_errno())
{
die("MySQL, virhe yhteyden luonnissa: ".mysqli_connect_error());
}
$yhteys->set_charset('utf8');
$tulos1=mysqli_query($yhteys,"SELECT title FROM shukari_model
                            WHERE shukari_model.make_id LIKE '".$X."%';" );
echo "<select name='title'>";
while($rivi1=mysqli_fetch_array($tulos1))	{
  echo "<option value=".$rivi1['title'].">".$rivi1['title']."</option>";
};

$tulos2=mysqli_query($yhteys,"SELECT * FROM shukari_make;");
echo "<select name='merkki'>";

while($rivi2=mysqli_fetch_array($tulos2)) {
  echo '<option value="'.$rivi['id'].'"';
    if($rivi2['id']==$X)
      { echo 'selected="selected"'; }
  echo ">".$rivi2['title']."</option>";
};

  for($i='1970';$i<='2015';$i++)
    {
    echo '<option value="'.$i.'"';
      if($i==$Y)
        {echo 'selected="selected"';}
    echo '>'.$i.'</option>';
    }


echo "</select>";
mysqli_close($yhteys);
?>