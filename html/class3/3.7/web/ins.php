<?
include "../../../ins.php";
session_start();
$db_server = "localhost";	//mysql server
$db_access = $db_name3;	//mysql access
$db_db = "db7";		//��ƪ�

//mysql
$db_lin=mysql_connect($db_server,$db_user,$db_pass);
//$result=mysql_db_query($db_access,"select * from $eduos_configure order by id desc",$db_lin);
//$row=mysql_num_rows($result);
//$res=mysql_fetch_array($result);
mysql_select_db($db_access);


$title_db = $title_name."�ǥ͵��q";//�����W��
$title_na_db = "�T�~�ťD�D(7)�]���p�Ū��G�ơG";//�����W��
$pss = "12";//�C������
//�����Ӱ�����,�i�H�W�[�u�n�[�W�y�����̦h�Q��
$idoyes[0] = "�ڷ|�R���a�̤ξǮժ��F��C";
$idoyes[1] = "�ۤv������Ӫ��A�֪���R����S���зN�C";
$idoyes[2] = "�Q�R�F��ɡA���Ҽ{�O�_�u���ݭn�ΡC";
//���y//�i�H�L���W�[
$no_db_id[1] = "Ū��߱o�g�ӵu�F��!";
$no_db_id[2] = "�A���߱o�P�G�Ʀn���L���a?";
$no_db_id[3] = "�A���߱o�g���ܦn";
$no_db_id[4] = "�o�Ӥ߱o�O�A�ۤv�g����?";
$no_db_id[5] = "������!";
$no_db_id[6] = "��~�ܴ�!";
$no_db_id[7] = "�٤�����~";
$no_db_id[8] = "�ЧA�A�h�ݴX���o�ӬG��";
$no_db_id[9] = "�A���������";
$no_db_id[10] = "�u���D�`����";
$admins = $adminID;
$passwds = $adminPS;
?>