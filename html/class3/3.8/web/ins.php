<?
include "../../../ins.php";
session_start();
$db_server = "localhost";	//mysql server
$db_access = $db_name3;	//mysql access
$db_db = "db8";		//資料表

//mysql
$db_lin=mysql_connect($db_server,$db_user,$db_pass);
//$result=mysql_db_query($db_access,"select * from $eduos_configure order by id desc",$db_lin);
//$row=mysql_num_rows($result);
//$res=mysql_fetch_array($result);
mysql_select_db($db_access);


$title_db = $title_name."學生評量";//網站名稱
$title_na_db = "三年級主題(8)名醫華陀的故事：";//網站名稱
$pss = "12";//每頁頁數
//我應該做的事,可以增加只要加上流水號最多十個
$idoyes[0] = "同學不舒服時，我會關心他。";
$idoyes[1] = "不做有危險的比賽或遊戲。";
$idoyes[2] = "朋友犯錯時，我會輕聲細語的勸告他。";
$idoyes[3] = "別人犯錯時，我能原諒他，心裡祝福他早日改過。";
$idoyes[4] = "背弟子規：聞過怒，聞譽樂，損友來，益友卻，聞譽恐，聞過欣，直諒士，漸相親。";
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