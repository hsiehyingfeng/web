<center>
<?php
	$k=0;
	$a=$_POST["x"];
	echo '小於'.$a.'質數';
	$data[$k++]=2;	
	for($i=2;$i<=$a;$i++)
		for($j=2;$j<$i;$j++)
		{
			if($i%$j==0)
			{
				break;
			}
			else
			{
				$data[$k]=$i;
				$k++;
				break;
			}
		}
	$k=0;
	echo '<table width="999"  border="1"  >';
	
for ($i = 1; $data[$k]!=0; $i++) {
  for ($j = 1;  $j <= 2;  $j++) {
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



