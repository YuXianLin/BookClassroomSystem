<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
  </head>
  <body>
    <form method="post" action="<?=$_SERVER['PHP_SELF']?>">
    <table border=1 width=20% align=center>
    <tr align=center>
		<td colspan=2>新增教師</td>
    </tr>
    <tr>
		<td align=center>教師編號:</td>
		<td><input type="text" name="teacher_id"></td>
    </tr>
    <tr>
		<td align=center>教師姓名:</td>
		<td><input type="text" name="teacher_name"></td>
    </tr>
    <tr>
		<td align=center>教師帳號:</td>
		<td><input type="text" name="teacher_account"></td>
    </tr>
    <tr>
		<td align=center>教師密碼:</td>
		<td><input type="text" name="teacher_password"></td>
    </tr>
	<tr>
		<td align=center>教師科系:</td>
		<td><input type="text" name="teacher_department"></td>
    </tr>
	<tr>
		<td align=center>教師手機:</td>
		<td><input type="text" name="teacher_phone"></td>
    </tr>
	<tr>
		<td align=center>教師信箱:</td>
		<td><input type="text" name="teacher_mail"></td>
    </tr>
    <tr align=center>
		<td colspan=2>
		  <input type="submit" value="確認新增">&nbsp;&nbsp;
		  <input type="reset" value="重新填寫">&nbsp;&nbsp;<a href="acco_manage.php">回管理區</a>
		</td>
    </tr>
    </table>
	</form>

	<?php
	  $link = mysql_connect( 'localhost' , 'root', 'a311006leo');
	  if ( !$link ) 
	  {
		echo 'not connect mysql';
	  }
	  mysql_query( 'set names utf8' );
	  mysql_select_db('web' , $link);

	  if(isset($_POST['teacher_id']))
	  {
	    $id=$_POST['teacher_id'];
	    $name=$_POST['teacher_name'];
	    $account=$_POST['teacher_account'];
	    $password=$_POST['teacher_password'];
		$department=$_POST['teacher_department'];
		$phone=$_POST['teacher_phone'];
		$mail=$_POST['teacher_mail'];
	    $sql="INSERT INTO teacher (t_id,t_name,t_account,t_password,t_department,t_phone,t_gmail) values ('$id','$name','$account','$password','$department','$phone','$mail')";
	   mysql_query($sql,$link);
	   mysql_close($link);
	  }
	?>
  </body>
</html>
