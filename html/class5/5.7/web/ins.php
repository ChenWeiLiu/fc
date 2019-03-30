<?
include "../../../ins.php";
session_start();
$db_server = "localhost";	//mysql server
$db_access = $db_name5;	//mysql access
$db_db = "db7";		//資料表

//mysql
$db_lin=mysql_connect($db_server,$db_user,$db_pass);
//$result=mysql_db_query($db_access,"select * from $eduos_configure order by id desc",$db_lin);
//$row=mysql_num_rows($result);
//$res=mysql_fetch_array($result);
mysql_select_db($db_access);


$title_db = $title_name."學生評量";//網站名稱
$title_na_db = "五年級主題(7)一碗白飯：";//網站名稱
$pss = "12";//每頁頁數
//我應該做的事,可以增加只要加上流水號最多十個
$idoyes[0] = "我不會羨慕別人所擁有的東西。";
$idoyes[1] = "我時常把「謝謝」、「感恩」掛在嘴邊，感激別人的讚美、幫助。";
$idoyes[2] = "我會用行動（擁抱、字條）表達感恩之意。";
$idoyes[3] = "我能每日為家人做一件事，他們就不需要自己去做。";
$idoyes[4] = "我懂得心存感恩，所以我時常幫助需要幫忙的人。";
//評語//可以無限增加
$no_db_id[1] = "讀後心得寫太短了喔!";
$no_db_id[2] = "你的心得與故事好像無關吧?";
$no_db_id[3] = "你的心得寫的很好";
$no_db_id[4] = "這個心得是你自己寫的嗎?";
$no_db_id[5] = "不錯喔!";
$no_db_id[6] = "嗯~很棒!";
$no_db_id[7] = "還不錯喔~";
$no_db_id[8] = "請你再多看幾次這個故事";
$no_db_id[9] = "你都有做到喔";
$no_db_id[10] = "真的非常不錯";
$admins = $adminID;
$passwds = $adminPS;
?>