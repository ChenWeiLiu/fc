<?
$myid=$_GET["id"];
$flashvars = "myid=" . $myid ;
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-TW" lang="zh-TW">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5" />
<title>孝悌好兒童評量列印</title>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>
<body bgcolor="#ffffff">

<script type="text/javascript">
AC_FL_RunContent( 'codebase','http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0','width','100%','height','100%','id','print','align','top','src','print','flashvars','<?php echo $flashvars; ?>','quality','high','bgcolor','#ffffff','name','print','allowscriptaccess','sameDomain','pluginspage','http://www.macromedia.com/go/getflashplayer','movie','print' ); //end AC code
</script><noscript><object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="100%" height="100%" id="print" align="top">
<param name="allowScriptAccess" value="sameDomain" />
<param name="movie" value="print.swf" />
<PARAM NAME=FlashVars VALUE="<?php echo $flashvars; ?>" />
<param name="quality" value="high" />
<param name="bgcolor" value="#ffffff" />
<embed src="print.swf" FlashVars="<?php echo $flashvars; ?>" quality="high" bgcolor="#ffffff" width="100%" height="100%" name="print" align="top" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
</object></noscript>
</body>
</html>
