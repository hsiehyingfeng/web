<?php
	date_default_timezone_set("Asia/Taipei");
	$dateStr1 =	 date("Y-m-d H:i:s"); 
	$dateStr2 = "2016-11-03 21:35:00"; 
	echo '現在時間:'.$dateStr1."<br />";
	echo '另一時間:'.$dateStr2."<br />";
	echo "相差秒數：".(strtotime($dateStr1)-strtotime($dateStr2))."<br />";
	echo "相差分鐘：".(strtotime($dateStr1)-strtotime($dateStr2))/(60)."<br />";
	echo "相差小時：".(strtotime($dateStr1)-strtotime($dateStr2))/(60*60)."<br />";
	echo "相差天數：".(strtotime($dateStr1)-strtotime($dateStr2))/(60*60*24)."<br />";
?>