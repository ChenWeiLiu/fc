<?
include "../../../ins.php";
session_start();
$db_server = "localhost";	//mysql server
$db_access = $db_name6;	//mysql access
$db_db = "db2";		//資料表

//mysql
$db_lin=mysql_connect($db_server,$db_user,$db_pass);
//$result=mysql_db_query($db_access,"select * from $eduos_configure order by id desc",$db_lin);
//$row=mysql_num_rows($result);
//$res=mysql_fetch_array($result);
mysql_select_db($db_access);


$title_db = $title_name."學生評量";//網站名稱
$title_na_db = "六年級主題(2)網路圓夢大使-沈芯菱：";//網站名稱
$pss = "12";//每頁頁數
//我應該做的事,可以增加只要加上流水號最多十個
$idoyes[0] = "網路上送出自己的資料或照片前，一定會徵得家人的同意。";
$idoyes[1] = "與網友見面一定會在公共場所，並請同學或大人陪同前往。";
$idoyes[2] = "我會遵守網路倫理，尊重別人的意見，避免使用不雅的字眼。";
$idoyes[3] = "我不輕易傳送來路不明的郵件或下載，以免觸犯法律。";
$idoyes[4] = "我能抗拒誘惑，避免接觸色情或非法網站。";
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