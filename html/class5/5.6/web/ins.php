<?
include "../../../ins.php";
session_start();
$db_server = "localhost";	//mysql server
$db_access = $db_name5;	//mysql access
$db_db = "db6";		//��ƪ�

//mysql
$db_lin=mysql_connect($db_server,$db_user,$db_pass);
//$result=mysql_db_query($db_access,"select * from $eduos_configure order by id desc",$db_lin);
//$row=mysql_num_rows($result);
//$res=mysql_fetch_array($result);
mysql_select_db($db_access);


$title_db = $title_name."�ǥ͵��q";//�����W��
$title_na_db = "���~�ťD�D(6)���ڧ��l�������G";//�����W��
$pss = "12";//�C������
//�����Ӱ�����,�i�H�W�[�u�n�[�W�y�����̦h�Q��
$idoyes[0] = "�ڷ|�H��ʪ�F��������q�R�M�P�E�C";
$idoyes[1] = "�ڷ|�V���䪺�H���X�Q�P�¥L���ܡC";
$idoyes[2] = "�C�ѷQ�T�����ۤv�P��ּ֩κ������ơA�ðO���U�ӡC";
$idoyes[3] = "�ɱ`�f�����¡A�P���a�H�B�B�ͩM�Ѯv��ڭ̪����U�C";
$idoyes[4] = "�ñ��g�D���ƪ��A���h�����U�L�H�C";
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