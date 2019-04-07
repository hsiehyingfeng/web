<center>
<?php
	$k=0;
	$a=$_POST["x"];
	echo '小於'.$a.'年分的閏年';
	for ($i = 1; $i<$a; $i++)
	if ($i%4==0 && ($i%100!=0 || $i%400==0))
	{
		$data[$k++]=$i;
		
	}	
	$k=0;
	echo '<table width="999"  border="1"  >';
for ($i = 1; $data[$k]!=0; $i++) {
  for ($j = 1;  $j <= 5;  $j++) {
      if($i%2==0)
        echo '<td align="center" bgcolor="green">'.$data[$k++].'</td>';
	  else
		echo '<td align="center" bgcolor="yellow">'.$data[$k++].'</td>';
    }
    echo '<br />'.'</tr>';
}
echo '</table>'.'<br />';


?>
</center>



