<?
	session_start();
	if (isset($SESSION)) {
		if (!$SESSION["account_name"]) {
			$FullName = "";
		} else {
			$FullName = $SESSION["full_name"];
		}
	}
	else {
		$FullName = "";
	}

$host = "localhost";
$user="webmaster";
$pw = "password";
$dbname = "zoo";
//include"connect.php";
$c = mysql_connect($host,$user,$pw);
if(!$c)
{
echo "erorr";
exit();
}
$time_now =time();
$time_out = $time_now + 350;
//session_start();
$sess_id=$_SERVER['REMOTE_ADDR'];
$sql="delete from tb_useronline  where online_id='$sess_id' or online_time < '$time_now'";
$result=mysql_db_query($dbname,$sql);
$sql="insert into tb_useronline values('$sess_id','$time_out')";
$result=mysql_db_query($dbname,$sql);
$sql="select * from tb_useronline";
$result=mysql_db_query($dbname,$sql);
$useronline=mysql_num_rows($result);

	include "gen_year.php";
	if (isset($yearly)){
		if ($yearly == ""){
			$yearly = date("Y") + 543;
		}
	} else {
		$yearly = date("Y") + 543;
	}
	include ("news/connect.inc.php");
	$strSQL = "select * from news where show_flag = 'Y' order by news_id desc";

	$result = mysql_query($strSQL);
	$count = mysql_num_rows($result);
?>
<html>
<head>
<title>ZPO Data Center  -  I N T R A N E T</title>
<META NAME="Author" CONTENT="Computer Peripheral & Supplies">
<META NAME="Keywords" CONTENT="องค์การสวนสัตว์">
<META NAME="Description" CONTENT="Intranet องค์การสวนสัตว์">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="intranetzoo.js"></script>
<script type="text/javascript" language="JavaScript">
<!-- HIDE CODE
function checkform(formja) {
	if (formja.userid.value=="") {
		alert("Please type your login name");
		formja.userid.focus();
		return(false);
	}
	if (formja.userpwd.value=="") {
		alert("Please type your password");
		formja.userpwd.focus();
		return(false);
	}
}
function popUp(URL) {
	day = new Date();
	id = day.getTime();
	eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=1,width=700,height=650');");
}
// END HIDE CODE -->
</script>
<style type="text/css">
<!--
.style2 {color: #88BC50}
.style3 {color: #FFFFFF}
-->
</style>
</head>
<?
if ($FullName == "") {
	if ($count > 0) {
		echo "<body background=\"images/bg_image.jpg\" onload=\"javascript:popUp('PopupNews.php')\">";
	} else {
		echo "<body background=\"images/bg_image.jpg\">";
	}
} else {
	echo "<body background=\"images/bg_image.jpg\">";
}
?>
<center>
<table width="900" border="0" cellspacing="0" cellpadding="0"bgcolor="#FFFFFF">
	    <td width="920" align="left" valign="top" bgcolor="#000000">
			<img align="middle" src="images/the_zoo.jpg"></td>
	    <tr>
	      <td align="left" valign="top">
          <!--<table width="648" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
  <tr>
		<td width="654" align="left" valign="middle"><br>&nbsp;<img src="images/conget-pimuk.jpg" width="630" height="200"></td>
	</tr>
</table>--></td>
        <tr>
          <td align="left" valign="top"><table width="900" border="0" cellpadding="5" cellspacing="0">
            <td width="630" align="left" valign="top"><div align="center">
              <table width="900" border="0" cellpadding="5" cellspacing="0">
              <td width="630" align="left" valign="top"><div align="center">
                <table width="900" border="0" cellpadding="5" cellspacing="0">
                  <tr>
                  <tr>
                    <td width="272" align="center" valign="middle"><?
				if ($FullName != ""){
					$LegendShow = "L o g i n&nbsp;&nbsp;A l r e a d y";
				} else {
					$LegendShow = "S t a f f&nbsp;&nbsp;O n l y";
				}
			?>
                      <fieldset style="width: 210px;">
                        <legend><font face="Arial" size="2" color="#0080FF"><b><? echo $LegendShow; ?></b></font></legend>
                        <form onSubmit="return checkform(this)" action="login.php" method="post" name="login" style="margin: 0">
                          <table width="200" cellpadding="0" cellspacing="3" border="0">
                            <?php
					if ($FullName == ""){
						if (isset($error)){
							if ($error == "yes") {
								echo "<tr height=\"22\">";
								echo "<td width=\"200\" colspan=\"2\" align=\"left\">";
								echo "<img src=\"images/icon_err.gif\" border=\"0\" align=\"left\"><font face=\"MS Sans Serif\" size=\"1\" color=\"#FF0000\">login name หรือ password ไม่ถูกต้อง</font>";
								echo "</td></tr>";
							}
						}
						if (!isset($account)){
							$account = "";
						}
					?>
                            <tr height="22">
                              <td width="30" align="right"><font face="MS Sans Serif" size="1">login name</font><font face="MS Sans Serif" size="1" color="#0080FF">: &nbsp;</font></td>
                              <td width="30"><input type="text" name="userid" style="width: 100px;" value="<? echo $account; ?>"></td>
                              <td align="right"><font face="MS Sans Serif" size="1"><span class="style3">:</span></font><font face="MS Sans Serif" size="1" color="#0080FF">&nbsp; </font></td>
                            </tr>
                            <tr height="22">
                              <td align="right"><font face="MS Sans Serif" size="1">password</font></td>
                              <td><input type="password" name="userpwd" style="width: 100px;" value=""></td>
                              <td align="right">&nbsp;</td>
                            </tr>
                            <tr height="22">
                              <td align="right">&nbsp;</td>
                              <td><input type="image" name="submit" src="images/login.jpg" value="login"></td>
                              <td align="right">&nbsp;</td>
                            </tr>
                            <?
					} else {
						echo "<tr height=\"45\"><td colspan=\"2\" valign=\"top\" background=\"images/bg-gra.jpg\">";
						echo "<font size=\"2\">ยินดีต้อนรับ:</font> <font color=\"#0000FF\">$FullName</font>&nbsp;&nbsp;<br>";
						echo "<font size=\"2\">เข้าสู่ระบบ:</font> <a href=\"menu_frame.php\"><font color=\"#0000FF\">Back Office</font></a>&nbsp;&nbsp";
						echo "<font size=\"2\">ออกจากระบบ:</font> <a href=\"logout.php\"><font color=\"#0000FF\">Logout</font></a>";
						echo "</td></tr>";
					}
					?>
                          </table>
                        </form>
                      </fieldset></td>
                       <td align="left" valign="top"><!--<table width="630" border="0" cellspacing="0" cellpadding="0">
                         <tr>
    <td width="310"><a href="http://192.168.0.1/2555/%E0%B8%84%E0%B8%93%E0%B8%B0%E0%B8%81%E0%B8%A3%E0%B8%A3%E0%B8%A1%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%AD%E0%B8%87%E0%B8%84%E0%B9%8C%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%AA%E0%B8%A7%E0%B8%99%E0%B8%AA%E0%B8%B1%E0%B8%95%E0%B8%A7%E0%B9%8C/02_%E0%B8%99%E0%B9%82%E0%B8%A2%E0%B8%9A%E0%B8%B2%E0%B8%A2%E0%B9%81%E0%B8%A5%E0%B8%B0%E0%B8%84%E0%B8%B3%E0%B8%AA%E0%B8%B1%E0%B9%88%E0%B8%87%E0%B8%82%E0%B8%AD%E0%B8%87%E0%B8%84%E0%B8%93%E0%B8%B0%E0%B8%81%E0%B8%A3%E0%B8%A3%E0%B8%A1%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%AD%E0%B8%87%E0%B8%84%E0%B9%8C%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%AA%E0%B8%A7%E0%B8%99%E0%B8%AA%E0%B8%B1%E0%B8%95%E0%B8%A7%E0%B9%8C%202555/%E0%B9%81%E0%B8%99%E0%B8%A7%E0%B8%99%E0%B9%82%E0%B8%A2%E0%B8%9A%E0%B8%B2%E0%B8%A2%E0%B8%82%E0%B8%AD%E0%B8%87%E0%B8%84%E0%B8%93%E0%B8%B0%E0%B8%81%E0%B8%A3%E0%B8%A3%E0%B8%A1%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%AD%E0%B8%87%E0%B8%84%E0%B9%8C%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%AA%E0%B8%A7%E0%B8%99%E0%B8%AA%E0%B8%B1%E0%B8%95%E0%B8%A7%E0%B9%8C/%E0%B8%A7%E0%B8%B4%E0%B8%AA%E0%B8%B1%E0%B8%A2%E0%B8%97%E0%B8%B1%E0%B8%A8%E0%B8%99%E0%B9%8C%E0%B9%81%E0%B8%A5%E0%B8%B0%E0%B8%99%E0%B9%82%E0%B8%A2%E0%B8%9A%E0%B8%B2%E0%B8%A2%E0%B8%82%E0%B8%AD%E0%B8%87%E0%B8%84%E0%B8%93%E0%B8%B0%E0%B8%81%E0%B8%A3%E0%B8%A3%E0%B8%A1%E0%B8%81%E0%B8%B2%E0%B8%A3-%E0%B8%AD%E0%B8%AA%E0%B8%AA.pdf" target="_blank"><img src="policy-borad-banner.png" width="300" height="150"></td>
    <td width="320"><a href="http://192.168.0.1/2555/%E0%B8%9C%E0%B8%B9%E0%B9%89%E0%B8%AD%E0%B8%B3%E0%B8%99%E0%B8%A7%E0%B8%A2%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%AD%E0%B8%87%E0%B8%84%E0%B9%8C%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%AA%E0%B8%A7%E0%B8%99%E0%B8%AA%E0%B8%B1%E0%B8%95%E0%B8%A7%E0%B9%8C/1_%E0%B8%99%E0%B9%82%E0%B8%A2%E0%B8%9A%E0%B8%B2%E0%B8%A2%E0%B9%81%E0%B8%A5%E0%B8%B0%E0%B8%84%E0%B8%B3%E0%B8%AA%E0%B8%B1%E0%B9%88%E0%B8%87%E0%B8%82%E0%B8%AD%E0%B8%87%E0%B8%9C%E0%B8%B9%E0%B9%89%E0%B8%AD%E0%B8%B3%E0%B8%99%E0%B8%A7%E0%B8%A2%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%AD%E0%B8%87%E0%B8%84%E0%B9%8C%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%AA%E0%B8%A7%E0%B8%99%E0%B8%AA%E0%B8%B1%E0%B8%95%E0%B8%A7%E0%B9%8C/%E0%B8%84%E0%B8%B3%E0%B8%AA%E0%B8%B1%E0%B9%88%E0%B8%87%E0%B9%81%E0%B8%95%E0%B9%88%E0%B8%87%E0%B8%95%E0%B8%B1%E0%B9%89%E0%B8%87%E0%B8%9C%E0%B8%B9%E0%B9%89%E0%B8%AD%E0%B8%B3%E0%B8%99%E0%B8%A7%E0%B8%A2%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%AD%E0%B8%87%E0%B8%84%E0%B9%8C%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%AA%E0%B8%A7%E0%B8%99%E0%B8%AA%E0%B8%B1%E0%B8%95%E0%B8%A7%E0%B9%8C/%E0%B9%81%E0%B8%95%E0%B9%88%E0%B8%87%E0%B8%95%E0%B8%B1%E0%B9%89%E0%B8%87%E0%B8%9C%E0%B8%B9%E0%B9%89%E0%B8%AD%E0%B8%B3%E0%B8%99%E0%B8%A7%E0%B8%A2%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%AD%E0%B8%87%E0%B8%84%E0%B9%8C%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%AA%E0%B8%A7%E0%B8%99%E0%B8%AA%E0%B8%B1%E0%B8%95%E0%B8%A7%E0%B9%8C.pdf" target="_blank"><img src="appointment--ceo-banner.png" width="300" height="150"></td>
  </tr>
</table> -->
</td>
                  </tr>
  <td width="250" align="left" valign="top"><form action="<? echo $PHP_SELF; ?>" method="post" style="margin: 0">
    <div align="center"><font size="2" face="MS Sans Serif" color="#0000FF">ข้อมูลของปี: </font>
      <?
				genYear($yearly);
			?>
      <input type="submit" value="go" style="color: #0000FF; background-color: #F1F1F1; width: 27px;">
    </div>
  </form>
    <iframe src="menu.php?yearly=<? echo $yearly; ?>" frameborder="0" name="menu" width="255" height="1550" scrolling="auto"> </iframe>
    <!--
			<img src="images/zoo1.jpg">
			--></td>
    <td width="630" align="left" valign="top"><div align="center" >
      <!--<marquee direction="left" scrollamount="3" class="style53 style1"><a href="http://192.168.0.1/news/view_news.php?news_id=291" target="_blank">
			&lt;&lt;&lt;<a href="http://61.19.242.78/aculearn-idm/v4/opr/studioclient.asp?modulename=acl100526_101926_019945&author=92f6d937f853fe454181545a10ed4aca&cat=aculive-av">กระทรวงทรัพยากรธรรมชาติและสิ่งแวดล้อม ขอเชิญชวนผู้สนใจ รับชมการถ่ายทอดสดพิธีเปิด &quot; การประชุมเชิงปฏิบัติการเพื่อสร้างความรู้ความเข้าใจในแนวทางบูรณาการประสานความร่วมมือและแลกเปลี่ยนความคิดเห็นตามยุทธการแก้ไขปัญหาวิกฤตป่าไม้ของชาติ &quot; ณ โรงแรมเดอะรอยัล ซิตี้ กรุงเทพฯ ในวันที่ 15 กันยายน 2553 ตั้งแต่เวลา 9.00 น. เป็นต้นไป คลิ๊ก..</a>&lt;&lt;&lt;
			</marquee>-->      
     <!--<a href="http://192.168.0.1/live/index.html" target="_blank"><img src="seaza2011-live-in.jpg" width="625" height="321"></a> <br><br>-->
     <!--<table width="610" height="378" border="0" cellpadding="0" cellspacing="0" background="bg-g.jpg">
                         <tr>
                           <td height="28" colspan="3"><img src="bg-g2.jpg" width="602"></td>
                         </tr>
                         <tr>
                           <td width="4%" height="276" align="center" valign="middle"><p align="center">&nbsp;</p></td>
                           <td width="94%">
                             <object classid="clsid:6BF52A52-394A-11D3-B153-00C04F79FAA6" width="555" height="293" align="top" id="MediaPlayer1">
                             <param name="URL" value="mms://203.113.25.41:8080/itlive"/>
                             <param name="autoStart" value="true" />
                             <param name="uiMode" value="full"/>
                             <param name="error" value="item"/>
                             <param name="stretchToFit" value="true"/>
                             <param name="volume" value="100" />
                             <param name="enableContextMenu" value="1" />
                             <embed
				src= "mms://203.113.25.41:8080/itlive"
				width=555
				height=293 align="top" type="application/x-mplayer2" 
				id="MediaPlayer1"
				showcontrols=1
				showdisplay=0
				showstatusbar=1
				volume=20
				enablecontextmenu=1> </embed>
                           </object></td>
                           <td width="2%" align="center" valign="middle">&nbsp;</td>
                         </tr>
                         
                       </table>-->
    <!--<a href="http://192.168.0.1/zvdo/index.html" target="_blank"><img src="vd0-02-55-.jpg" width="625" height="95"></a></div>-->
    <br>
      <fieldset style="width: 630px;" >
        <legend><img src="images/menu_if.jpg" width="630" height="24"></legend>
        <iframe src="information.php?yearly=<? echo $yearly; ?>" style="border:0px solid #57A209" frameborder="0" name="content" width="630" height="100"  scrolling="auto"> </iframe>
      </fieldset>
      <br>
      <fieldset style="width: 630px;">
        <legend><img src="images/menu_news.jpg" width="630" height="24"></legend>
        <iframe src="ShowNews.php" style="border:0px solid #57A209" frameborder="0" name="News" width="630" height="290" scrolling="auto"> </iframe>
      </fieldset>
      <br>
      <fieldset style="width: 630px;">
        <legend><img src="images/menu_wb.jpg"></legend>
        <iframe src="ShowForum.php" style="border:0px solid #57A209" frameborder="0" name="WebBoard" width="630" height="290" scrolling="auto"> </iframe>
      </fieldset>
      <br>
      <fieldset style="width: 630px;">
        <legend><img src="images/menu_link.jpg"></legend>
        <iframe src="link.php" style="border:0px solid #57A209" frameborder="0" name="LinkNamager" width="630" height="230" scrolling="auto"></iframe>
      </fieldset>
      <br>
      <? echo "ออนไลน์ $useronline คน";?></td>
  </tr> <!-- <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
  </tr>  
                </table>
              </div></td></tr> 
              </table>
            </div></td></tr> -->
          </table></td> 
          <tr>
              <td align="center" valign="top" bgcolor="#D6D6D6"><img src="images/iso-logo.jpg" /></td>     
          </tr>
          <tr>
          <td align="center" valign="top" bgcolor="#D6D6D6"><font color="#0000FF">The Zoological Park Organization Under the Royal Patronage of H.M. The King</font></td>
    </table>
</center>
<?
	mysql_close();
?>
</body>
</html>
