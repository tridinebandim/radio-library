<?php 
require_once("includes/config.php");

session_start();

$db_connection = mysql_connect ($DBHost, $DBUser, $DBPass) OR die (mysql_error());  
$db_select = mysql_select_db ($DBName) or die (mysql_error());

if(isset($_GET['event_id'])){
	
}


IF(isset($_POST['submit']))
{
	$db_table = $TBL_PR . "events";
	
	$_POST['description'] = substr($_POST['description'],0,500);
	$_POST['title'] = substr($_POST['title'],0,30);

	if(isset($_POST['title']) && is_int($_POST['id']){
		mysql_query("DELETE FROM $db_table WHERE event_id='".addslashes($_POST['id'])."' LIMIT 1");
	}

	mysql_query("INSERT INTO $db_table ( `event_id` , `event_day` , `event_month` , `event_year` , `event_starttime` , `event_endtime` , `event_title` , `event_desc` ) VALUES ('', '".addslashes($_POST['day'])."', '".addslashes($_POST['month'])."', '".addslashes($_POST['year'])."', '".addslashes($_POST['start_hour'].":".$_POST['start_minute'])."', '".addslashes($_POST['end_hour'].":".$_POST['end_minute'])."', '".addslashes($_POST['title'])."', '".addslashes($_POST['description'])."')");
	$_POST['month'] = $_POST['month'] + 1;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Easy Calendar - Add Event</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language='javascript' type="text/javascript">
<!--
 function redirect_to(where, closewin)
 {
 	opener.location= 'index.php?' + where;
 	
 	if (closewin == 1)
 	{
 		self.close();
 	}
 }
  //-->
 </script>
</head>
<body onLoad="javascript:redirect_to('month=<?php echo $_POST['month'].'&year='.$_POST['year']; ?>',1);">
</body>
</html>
<?php 
}
ELSE 
{
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Calendar - Add Event</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="images/cal.css" rel="stylesheet" type="text/css">
</head>
<body>
<form name="form1" method="post" action="">
  <table width="480" border="0" cellspacing="0" cellpadding="0">
    <tr> 
      <td width="200" height="40" valign="top"><span class="addevent">Date</span><br> 
        <span class="addeventextrainfo">(MM/DD/YY)</span></td>
      <td height="40" valign="top"> <select name="month" id="month">
          <option value="1" <?php IF($_GET['month'] == "1"){ echo "selected"; } ?>>01</option>
          <option value="2" <?php IF($_GET['month'] == "2"){ echo "selected"; } ?>>02</option>
          <option value="3" <?php IF($_GET['month'] == "3"){ echo "selected"; } ?>>03</option>
          <option value="4" <?php IF($_GET['month'] == "4"){ echo "selected"; } ?>>04</option>
          <option value="5" <?php IF($_GET['month'] == "5"){ echo "selected"; } ?>>05</option>
          <option value="6" <?php IF($_GET['month'] == "6"){ echo "selected"; } ?>>06</option>
          <option value="7" <?php IF($_GET['month'] == "7"){ echo "selected"; } ?>>07</option>
          <option value="8" <?php IF($_GET['month'] == "8"){ echo "selected"; } ?>>08</option>
          <option value="9" <?php IF($_GET['month'] == "9"){ echo "selected"; } ?>>09</option>
          <option value="10" <?php IF($_GET['month'] == "10"){ echo "selected"; } ?>>10</option>
          <option value="11" <?php IF($_GET['month'] == "11"){ echo "selected"; } ?>>11</option>
          <option value="12" <?php IF($_GET['month'] == "12"){ echo "selected"; } ?>>12</option>
        </select> <select name="day" id="day">
          <option value="1" <?php IF($_GET['day'] == "1"){ echo "selected"; } ?>>01</option>
          <option value="2" <?php IF($_GET['day'] == "2"){ echo "selected"; } ?>>02</option>
          <option value="3" <?php IF($_GET['day'] == "3"){ echo "selected"; } ?>>03</option>
          <option value="4" <?php IF($_GET['day'] == "4"){ echo "selected"; } ?>>04</option>
          <option value="5" <?php IF($_GET['day'] == "5"){ echo "selected"; } ?>>05</option>
          <option value="6" <?php IF($_GET['day'] == "6"){ echo "selected"; } ?>>06</option>
          <option value="7" <?php IF($_GET['day'] == "7"){ echo "selected"; } ?>>07</option>
          <option value="8" <?php IF($_GET['day'] == "8"){ echo "selected"; } ?>>08</option>
          <option value="9" <?php IF($_GET['day'] == "9"){ echo "selected"; } ?>>09</option>
          <option value="10" <?php IF($_GET['day'] == "10"){ echo "selected"; } ?>>10</option>
          <option value="11" <?php IF($_GET['day'] == "11"){ echo "selected"; } ?>>11</option>
          <option value="12" <?php IF($_GET['day'] == "12"){ echo "selected"; } ?>>12</option>
          <option value="13" <?php IF($_GET['day'] == "13"){ echo "selected"; } ?>>13</option>
          <option value="14" <?php IF($_GET['day'] == "14"){ echo "selected"; } ?>>14</option>
          <option value="15" <?php IF($_GET['day'] == "15"){ echo "selected"; } ?>>15</option>
          <option value="16" <?php IF($_GET['day'] == "16"){ echo "selected"; } ?>>16</option>
          <option value="17" <?php IF($_GET['day'] == "17"){ echo "selected"; } ?>>17</option>
          <option value="18" <?php IF($_GET['day'] == "18"){ echo "selected"; } ?>>18</option>
          <option value="19" <?php IF($_GET['day'] == "19"){ echo "selected"; } ?>>19</option>
          <option value="20" <?php IF($_GET['day'] == "20"){ echo "selected"; } ?>>20</option>
          <option value="21" <?php IF($_GET['day'] == "21"){ echo "selected"; } ?>>21</option>
          <option value="22" <?php IF($_GET['day'] == "22"){ echo "selected"; } ?>>22</option>
          <option value="23" <?php IF($_GET['day'] == "23"){ echo "selected"; } ?>>23</option>
          <option value="24" <?php IF($_GET['day'] == "24"){ echo "selected"; } ?>>24</option>
          <option value="25" <?php IF($_GET['day'] == "25"){ echo "selected"; } ?>>25</option>
          <option value="26" <?php IF($_GET['day'] == "26"){ echo "selected"; } ?>>26</option>
          <option value="27" <?php IF($_GET['day'] == "27"){ echo "selected"; } ?>>27</option>
          <option value="28" <?php IF($_GET['day'] == "28"){ echo "selected"; } ?>>28</option>
          <option value="29" <?php IF($_GET['day'] == "29"){ echo "selected"; } ?>>29</option>
          <option value="30" <?php IF($_GET['day'] == "30"){ echo "selected"; } ?>>30</option>
          <option value="31" <?php IF($_GET['day'] == "31"){ echo "selected"; } ?>>31</option>
        </select> <select name="year" id="year">
          <option value="2003" <?php IF($_GET['year'] == "2003"){ echo "selected"; } ?>>2003</option>
          <option value="2004" <?php IF($_GET['year'] == "2004"){ echo "selected"; } ?>>2004</option>
          <option value="2005" <?php IF($_GET['year'] == "2005"){ echo "selected"; } ?>>2005</option>
          <option value="2006" <?php IF($_GET['year'] == "2006"){ echo "selected"; } ?>>2006</option>
          <option value="2007" <?php IF($_GET['year'] == "2007"){ echo "selected"; } ?>>2007</option>
        </select> </td>
    </tr>
    <tr> 
      <td width="200" height="40" valign="top"><span class="addevent">Start Time</span><br> 
        <span class="addeventextrainfo">(24hr Format)</span></td>
      <td height="40" valign="top"> <input name="start_hour" type="text" id="start_hour" value="00" size="2" maxlength="2">
        : 
        <input name="start_minute" type="text" id="start_minute" value="00" size="2" maxlength="2"> 
      </td>
    </tr>
    <tr> 
      <td width="200" height="40" valign="top"><span class="addevent">End Time</span><br> 
        <span class="addeventextrainfo">(24hr Format)</span></td>
      <td height="40" valign="top"> <input name="end_hour" type="text" id="end_hour" value="21" size="2" maxlength="2">
        : 
        <input name="end_minute" type="text" id="end_minute" value="00" size="2" maxlength="2"> 
      </td>
    </tr>
    <tr> 
      <td width="200" height="40" valign="top"><span class="addevent">Person Name</span></td>
      <td height="40" valign="top"> <input name="title" type="text" id="title" size="20"> 
      </td>
    </tr>
    <tr> 
      <td width="200" height="40" valign="top"><span class="addevent">Description of Studio Use</span></td>
      <td height="40" valign="top"> <textarea name="description" cols="18" rows="5" id="description"></textarea> 
      </td>
    </tr>
    <tr> 
      <td width="200">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td><input name="submit" type="submit" id="submit" value="Book Studio Use"></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php 
} 
?>