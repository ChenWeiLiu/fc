<?
include "ins.php";
//¼g¤J¸ê®Æ
if($_POST["myclass"] != "" && $_POST["myname"] != ""){
	$hotaddes="insert into $db_db(na_db,class_db,num_db,name_db,txt_db,no1_db,no2_db,no3_db,no4_db,no5_db,no6_db,no7_db,no8_db,no9_db,no10_db,date_db)values('".$_POST["titlename"]."','".$_POST["myclass"]."','".$_POST["mynumber"]."','".$_POST["myname"]."','".$_POST["textfield"]."','".$_POST["myheart1"]."','".$_POST["myheart2"]."','".$_POST["myheart3"]."','".$_POST["myheart4"]."','".$_POST["myheart5"]."','".$_POST["myheart6"]."','".$_POST["myheart7"]."','".$_POST["myheart8"]."','".$_POST["myheart9"]."','".$_POST["myheart10"]."',now())"; 
	mysql_query($hotaddes,$db_lin);
};
Header("Location:list.php");
?>
