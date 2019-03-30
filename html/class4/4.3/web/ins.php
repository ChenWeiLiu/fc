<?
include "../../../ins.php";
session_start();
$db_server = "localhost";	//mysql server
$db_access = $db_name4;	//mysql access
$db_db = "db3";		//資料表

//mysql
$db_lin=mysql_connect($db_server,$db_user,$db_pass);
//$result=mysql_db_query($db_access,"select * from $eduos_configure order by id desc",$db_lin);
//$row=mysql_num_rows($result);
//$res=mysql_fetch_array($result);
mysql_select_db($db_access);


$title_db = $title_name."學生評量";//網站名稱
$title_na_db = "四年級主題(3)小豬善來：";//網站名稱
$pss = "12";//每頁頁數
//我應該做的事,可以增加只要加上流水號最多十個
$idoyes[0] = "每天都有吃蔬菜、水果。";
$idoyes[1] = "我會愛護小動物。";
$idoyes[2] = "家裡養寵物我會定時餵他，幫牠清潔。";
$idoyes[3] = "背詩：誰道群生性命微，哺雛覓食故飛飛，勸君莫打三春鳥，子在巢中望母歸。(唐白居易)";
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