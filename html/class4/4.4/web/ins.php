<?
include "../../../ins.php";
session_start();
$db_server = "localhost";	//mysql server
$db_access = $db_name4;	//mysql access
$db_db = "db4";		//��ƪ�

//mysql
$db_lin=mysql_connect($db_server,$db_user,$db_pass);
//$result=mysql_db_query($db_access,"select * from $eduos_configure order by id desc",$db_lin);
//$row=mysql_num_rows($result);
//$res=mysql_fetch_array($result);
mysql_select_db($db_access);


$title_db = $title_name."�ǥ͵��q";//�����W��
$title_na_db = "�|�~�ťD�D(4)�P���`�G";//�����W��
$pss = "12";//�C������
//�����Ӱ�����,�i�H�W�[�u�n�[�W�y�����̦h�Q��
$idoyes[0] = "��O�H�e�ڪF��ɡA�ڷ|���G�u���¡v�C";
$idoyes[1] = "���g�W�W�r�A�Χ��~�A�R�C";
$idoyes[2] = "��F�覬��b�T�w���a��C";
$idoyes[3] = "�ۤv�ײz�a��������C";
$idoyes[4] = "�I���g�G�����泹�ĤQ�l��G�u���l���ƿˤ]�A�~�h�P��q�A�i�h�P��֡A�f�h�P��~�A��h�P��s�A���h�P���Y�C�v";
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