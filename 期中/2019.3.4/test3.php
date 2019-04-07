<center>
<?php
	$a=$_POST["M"];
	$b=$_POST["N"];
	echo $a.'X'.$b.'乘法表';
	
	echo '<table width="999"  border="1"  >';
for ($i = 1;  $i <= $a;  $i++) {
  for ($j = 1;  $j <= $b;  $j++) {
	  if($i%2==0)
        echo '<td align="center" bgcolor="green">'.$i . 'X' . $j . '=' .( $i * $j ).'</td>';
	  else
		echo '<td align="center" bgcolor="yellow">'.$i . 'X' . $j . '=' .( $i * $j ).'</td>';
    }
    echo '<br />'.'</tr>';
}
echo '</table>'.'<br />';

?>
</center>



