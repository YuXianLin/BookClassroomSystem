<?php
  $tid=$_GET["t_id"];
  $link=mysql_connect("localhost","root","a311006leo");
  mysql_select_db("web",$link);
  mysql_query( 'set names utf8' );

  //讀取該公告原有資料
  $sql="select * from teacher where t_id='$tid'";
  $rs=mysql_query($sql,$link);
  if($record=mysql_fetch_row($rs))
  {
	$tname=$record[1];
	$taccount=$record[2];
	$tpassword=$record[3];
	$tdepartment=$record[4];
	$tpermission=$record[5];
	$tphone=$record[6];
	$tmail=$record[7];
  }
?>

<center>
  <form method="post" action=<? $_SERVER[PHP_SELF] ?>>
    <input type=hidden name="method" value="<? echo $method ?>">
	<table border=1 align=center width="20%">
	<caption>修改教師資料</caption>
	  <tr>
		<td>教師編號:</td>
		<td><font color=red><? echo $tid ?></font><input type=hidden name="t_id" value="<? echo $tid ?>"></td>
	  </tr>
	  <tr>
		<td>教師姓名:</td>
		<td><input type=text name="t_name" value="<? echo $tname ?>"></td>
	  </tr>
	  <tr>
		<td>教師帳號:</td>
		<td><input type=text name="t_account" value="<? echo $taccount ?>"</td>
	  </tr>
	  <tr>
		<td>教師密碼:</td>
		<td><input type=text name="t_password" value="<? echo $tpassword ?>"></td>
	  </tr>
	  <tr>
		<td>教師科系:</td>
		<td><input type=text name="t_department" value="<? echo $tdepartment ?>"></td>
	  </tr>
	  <tr>
		<td>教師身分:</td>
		<td>
		  <?
		    if($tpermission==1)
			{
		  ?>
			  <select name="t_permission">
　			　  <option value="1" selected="true">manager</option>
　			　  <option value="2">user</option>
　　　　　　  </select>
          <?
			}
			else
			{
		  ?>
			  <select name="t_permission">
　			　  <option value="1">manager</option>
　			　  <option value="2" selected="true">user</option>
　　　　　　  </select>
          <?
			}
		  ?>
		</td>
	  </tr>
	  <tr>
		<td>教師手機:</td>
		<td><input type=text name="t_phone" value="<? echo $tphone ?>"></td>
	  </tr>
	  <tr>
		<td>教師信箱:</td>
		<td><input type=text name="t_gmail" value="<? echo $tmail ?>"></td>
	  </tr>
	  <tr align=center>
		<td colspan=2><input type="submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="acco_manage.php">回管理區</a></td>
	  </tr>
	</table>
  </form>
</center>
<?
  $t_id=$_POST["t_id"];
  $t_name=$_POST["t_name"];
  $t_account=$_POST["t_account"];
  $t_password=$_POST["t_password"];
  $t_department=$_POST["t_department"];
  $t_permission=$_POST["t_permission"];
  $t_phone=$_POST["t_phone"];
  $t_mail=$_POST["t_gmail"];

  $sql="update teacher set t_id ='$t_id',t_name ='$t_name',t_account ='$t_account',t_password ='$t_password',t_department ='$t_department',t_permission ='$t_permission',t_phone ='$t_phone',t_gmail ='$t_mail' where t_id='$t_id'";
  //echo $sql;
  mysql_query($sql,$link);
?>