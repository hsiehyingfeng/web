<?php
	header("Content-Type:text/html; charset=big5");
	$myJoke ="ABCDE";
	for($i=0;$i<5;$i++)
	{
		for($j=0;$j<=$i;$j++)
			echo substr("$myJoke",$i,1);	
		echo "<br/>";
	}
			
		
?>