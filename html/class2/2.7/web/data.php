<?
include "ins.php";
//�Ѯv���y
if($_POST["th_no_db"] != "" && $_SESSION["user_db_id"] == "yes"){
	$hotaddes = "update $db_db set th_no_db='".$_POST["th_no_db"]."',th_txt_db='".$_POST["th_txt_db"]."' where id = '".$_POST["db_id"]."'";
	mysql_query($hotaddes,$db_lin);
	header("location: list.php");
};
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5" />
<title><? echo $title_db;?></title>
<link href="content.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {font-size: 13px}
.style4 {font-size: 12px}
-->
</style>
</head>
<!------------ ���J����X�Ϭq���� ------------>
<SCRIPT LANGUAGE="JavaScript">
<!--
function addCh(str) {
  document.form.th_txt_db.value+=str;
  document.form.th_txt_db.focus();
}
//-->
</SCRIPT>
<body>
<table width="800" border="0" align="center" cellpadding="3" cellspacing="0" class="pageTopTB">
  <tr>
    <td><? echo $title_db;?></td>
  </tr>
</table>
 <table width="800" border="0" align="center" cellpadding="3" cellspacing="2" class="pageTopTB">
  <tr>
    <td align="center" class="contentTD"><table width="100%" height="100" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td align="center" bgcolor="#FFFFFF"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="780" height="100">
            <param name="movie" value="image/banner.swf" />
            <param name="quality" value="high" />
            <embed src="image/banner.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="780" height="100"></embed>
          </object></td>
        </tr>
      </table>
<? //�I�s�ǥ͸��
$result_list=mysql_db_query($db_access,"select * from $db_db where id = '".$_GET["data_db_id"]."'",$db_lin);
$ros_list=mysql_num_rows($result_list);
$res_list=mysql_fetch_array($result_list);
?>
      <table width="750" height="40" border="0" cellpadding="0" cellspacing="0" class="subName">
        <tr>
          <td align="center" valign="bottom"><? echo $title_na_db." ".$res_list[name_db];?>���G��Ū��߱o�P�ۧڵ��q</td>
        </tr>
      </table>
      <br />
      <table width="750" height="30" border="0" cellpadding="0" cellspacing="1" class="dataSubTitle">
        <tr>
          <td colspan="2" align="center"><table width="750" height="30" border="0" cellpadding="0" cellspacing="0" background="image/subTitleBG.jpg" class="dataSubTitle">
              <tr>
              <!--
                <td width="399" align="center">�ڪ�Ū��߱o</td>
                -->
                <td width="750" align="left">�@�ڰ���F��?</td>
              </tr>
          </table></td>
        </tr>
        <tr>
         <!--
          <td width="400" valign="top" class="dataContentTD"><table width="400" border="0" cellpadding="10" cellspacing="0" style="TABLE-LAYOUT: fixed; WORD-BREAK: break-all">
              <tr>
                <td align="left" style="overflow:hidden"><? echo $res_list["txt_db"];?></td>
              </tr>
          </table></td>
          -->
          <td width="350" class="dataContentTD"><table width="350" border="0" cellpadding="5" cellspacing="0">
              <tr>
              
                <td>
			<? if($idoyes[0] != ""){?>
			<? for($i_do=0;$i_do < 10;$i_do++){?>
				<? if($idoyes[$i_do] != ""){
					$idos = $i_do+1;?>
				    <table width="330" border="0" cellspacing="2">
		              <tr>
		                <td width="230" class="dataContentTD"><div align="left"><? echo $idoyes[$i_do];?></div></td>
		                
		                <td width="120" class="dataContentTD">
	                	<div align="left">
						  <? for($i=0;$i < $res_list["no".$idos."_db"];$i++){?>
							  <img src="image/dataHeart.jpg" alt="Heart" />
		                  <? };?>
		                </div>
						</td>
		              </tr>
            </table>
				<? };?>
			<? };?>
		<? };?>
			</td>
              </tr>
          </table></td>
        </tr>
      </table>
      <br />
      <table width="750" height="30" border="0" align="center" cellpadding="0" cellspacing="1" class="dataSubTitle">
        <tr>
          <td align="left"><table width="750" height="30" border="0" cellpadding="0" cellspacing="0" background="image/subTitleBG.jpg" class="dataSubTitle">
              <tr>
                <td align="left">�@�Ѯv���y</td>
              </tr>
            </table></td>
        </tr>
        <tr>
          <td align="left" class="dataContentTD">

		  	<? if($_SESSION["user_db_id"] != "yes"){
				echo $res_list[th_txt_db] != ""?"<b>".$res_list[th_no_db]."</b>�Ѯv���A�����y�G<br>".ereg_replace(chr(13),"<br>",$res_list[th_txt_db]):"�Ѯv�|�����y";
			};?>
<? if($_SESSION["user_db_id"] == "yes"){?>
<script>
function CheckInput()
{
   if (document.form.th_no_db.value.length < 1)
   {
      window.alert('�ж�J�Ѯv�m�W');
      document.form.th_no_db.focus();
      return false;
   }
   if (document.form.th_txt_db.value.length < 1)
   {
      window.alert('�ж�J���y!');
      document.form.th_txt_db.focus();
      return false;
   }
   if (document.form.th_txt_db.value.length > 99)
   {
      window.alert('���y��100�r�H��');
      document.form.th_txt_db.focus();
      return false;
   }
       ;
   return true;
}
</script>
		      <form name="form" method="post" action="" OnSubmit="return CheckInput()">
    	      
		        <p>
		          <!--�ǥ��˵���--��ܩ|�����q�ΦѮv���q���e-->
		          <!--�Ѯv�˵���--��ܥi�s���r��J��,�öK�J��Ʈw��������ƪ����q���e-->
		        </p>
		        <table width="100%" border="0" cellpadding="0" cellspacing="2">
                  <tr>
                    <td width="500" valign="top"><input name="db_id" type="hidden" value="<? echo $res_list["id"];?>" />
�Ѯv�m�W:
<input name="th_no_db" type="text" id="th_no_db" value="<? echo $res_list["th_no_db"];?>" size="20" /> �@�@�@�@�@
<input type="submit" name="Submit" value="�e�X���y">
<textarea name="th_txt_db" cols="60" rows="10" id="th_txt_db"><? echo $res_list[th_txt_db];?></textarea></td>
                    <td width="240" valign="top">
					�ҥy�p����<br />
                      <span class="style4">(�I��U�C�ҥy�|�۰ʶK����y���)</span>:
					  <table width="100%" border="0" cellpadding="0" cellspacing="0" class="date_good_td">
                      <tr>
                        <td>
					  <div class="style1" style="width:100%;height:150;overflow-x:hidden;overflow-y:scroll">
					    <? for($i=1;$i <= sizeof($no_db_id);$i++){?>
					    <a href="JavaScript:addCh('<? echo $no_db_id[$i];?>')"><? echo $no_db_id[$i];?></a><br />
					    <? };?>
			          </div></td>
                      </tr>
                    </table>                    </td>
                  </tr>
                </table>
		      </form>
			  <? };?>
			 </td>
        </tr>
</table>
    </td>
   </tr>
</table>
      <table width="800" border="0" align="center" cellpadding="10" cellspacing="0" class="pageTopTB">
        <tr>
          <td width="25%" align="left">
		  <? if($_SESSION["user_db_id"] != "yes"){?>
		  	<input name="button5" type="button" onClick="window.open('print.php?id=<? echo $res_list["id"];?>')" value="�C�L���q" />
		  <? };?>
		  </td>
          <td width="50%" align="center">&nbsp;</td>
          <td width="25%" align="right">
          <input name="button52" type="button" onClick="javascript:window.history.back();" value="�W�@��" /></td>
        </tr>
</table>
      </td>
  </tr>
</table>
</body>
</html>
