<select name="vuosi">
<?php
  for($i='1970';$i<='2015';$i++)
    {
    echo '<option value="'.$i.'"';
      if($i==$Y)
        {echo 'selected="selected"';}
    echo '>'.$i.'</option>';
    }
?>
</select>