<?
include "ins.php";
$result_list=mysql_db_query($db_access,"select * from $db_db where id = '".$_GET["id"]."'",$db_lin);
$ros_list=mysql_num_rows($result_list);
$res_list=mysql_fetch_array($result_list);

echo "titlename=".$res_list[na_db]."&";
echo "myclass=".$res_list[class_db]."&";
echo "mynumber=".$res_list[num_db]."&";
echo "myname=".$res_list[name_db]."&";
echo "textfield=".$res_list[txt_db]."&";
echo "myheart1=".$res_list[no1_db]."&";
echo "myheart2=".$res_list[no2_db]."&";
echo "myheart3=".$res_list[no3_db]."&";
echo "myheart4=".$res_list[no4_db]."&";
echo "myheart5=".$res_list[no5_db]."&";
echo "myheart6=".$res_list[no6_db]."&";
echo "myheart7=".$res_list[no7_db]."&";
echo "myheart8=".$res_list[no8_db]."&";
echo "myheart9=".$res_list[no9_db]."&";
echo "myheart10=".$res_list[no10_db]."&";
echo "teachername=".$res_list[th_no_db]."&";
echo "teachertextfield=".$res_list[th_txt_db]."&";
echo "date_db=".$res_list[date_db];
?>
