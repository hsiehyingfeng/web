<?	
	$name =  $_POST["name"];
	echo "使用者名稱:"."$name"."<br>";
	$checkbox1 =  $_POST["checkbox1"];
	$buy1 =  $_POST["buy1"];
	if($checkbox1 =="400")	
	{
		$money=400*$buy1;
		echo "php 入門書   $400  購買數量:"."$buy1"."	價格:".(400*$buy1)."<br>";
	}
	$checkbox2 =  $_POST["checkbox2"];
	$buy2 =  $_POST["buy2"];
	if($checkbox2 =="550")
	{	
		$money+=550*$buy2;
		echo "c 語言入門書  $ 550 購買數量:"."$buy2"."	價格:".(550*$buy2)."<br>";
	}	
	$checkbox3 =  $_POST["checkbox3"];
	$buy3 =  $_POST["buy3"];
	if($checkbox3=="800")
	{
		$money+=800*$buy3;
		echo "資料結構原文書  $ 800 購買數量:"."$buy3"."	價格:".(800*$buy3)."<br>";
	}	
	echo "總價"."$money"."<br>";
	$type =  $_POST["type"];
	if($type==0.7)
	{
		echo "會員資格:金卡會員 7折"."<br>";
	}
	if($type==0.8)
	{
		echo "銀卡會員 8折"."<br>";
	}	
	if($type==0.95)
	{
		echo "一般會員 95折"."<br>";
	}
	$money*=$type;
	echo "打折後價格"."$money"."<br>";

?>