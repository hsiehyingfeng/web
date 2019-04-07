<?
$y=$_POST["y"];
$m=$_POST["m"];
date_default_timezone_set("Asia/Taipei");
$timestamp =strtotime(date("$y-$m-01"));
$day=date("t",$timestamp);		
$w = date("w",$timestamp);;
$date = function($day,$w){
	echo "<table border='1'>";
	echo "<tr><th>星期日</th><th>星期一</th><th>星期二</th><th>星期三</th><th>星期四</th><th>星期五</th><th>星期六</th></tr>";
	$arr = array();
	for($i=1;$i<=$day;$i++){
	array_push($arr,$i);
	}
	if($w>=1&&$w<=6){
		for($m=1;$m<=$w;$m++){
		array_unshift($arr,"");
		}
	}
	$n=0;
	for($j=1;$j<=count($arr);$j++){
	$n++;
		if($n==1) echo "<tr>";
		echo "<td width='80px'>".$arr[$j-1]."</td>";
		if($n==7){
		echo "</tr>";
		$n=0;
		}
	}
	if($n!=7)echo "</tr>";
echo "</table>";
};
$date($day,$w);

?>

