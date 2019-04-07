<center>
<?php
	$a=$_POST["x"];
	$b=$_POST["y"];
	echo $a.'X'.$b.'矩陣';
	for($i=1;$i<=$a;$i++)
		for($j=1;$j<=$b;$j++)
		{
			$data[$i][$j]=rand(0,100);
		}
	echo '<table width="999"  border="1"  >';
	
for ($i = 1;  $i <= $a;  $i++) {
  for ($j = 1;  $j <= $b;  $j++) {
      if($i%2==0)
        echo '<td align="center" bgcolor="green">'.$data[$i][$j].'</td>';
	  else
		echo '<td align="center" bgcolor="yellow">'.$data[$i][$j].'</td>';
    }
    echo '<br />'.'</tr>';
}
echo '</table>'.'<br />';


	echo $b.'X'.$a.'矩陣';

	echo '<table width="500"  border="1"  >';
for ($i = 1;  $i <= $b;  $i++) {
  for ($j = 1;  $j <= $a;  $j++) {
      if($i%2==0)
        echo '<td align="center" bgcolor="green">'.$data[$j][$i].'</td>';
	  else
		echo '<td align="center" bgcolor="yellow">'.$data[$j][$i].'</td>';
    }
    echo '<br />'.'</tr>';
}
echo '</table>'.'<br />';

?>
</center>



