<?
  $link = mysql_connect( 'localhost' , 'root', 'a311006leo');
  if ( !$link ) 
  {
	echo 'not connect mysql';
  }
  mysql_query( 'set names utf8' );
  mysql_select_db('web' , $link);

  //echo $_SESSION["method"],"<br>";
  //echo $_SESSION["dateday"],"<br>";
  //echo $_SESSION["year"],"<br>";
  //echo $_SESSION["semester"],"<br>";
  //echo $_SESSION["weekday"],"<br>";
  //echo $_SESSION["classroom"],"<br>";
  $time=$_SESSION["times"];
  $s=$time[0];
  $e=end($time);
  //echo $time[0]," ",end($time),"<br>";

  $sql="select * from teacher where t_account='$_SESSION[user]'";
  //echo $sql,"<br>";
  $result=mysql_query($sql,$link);
  $record=mysql_fetch_row($result);
  //echo $record[0];
  switch($_SESSION["method"])
  {
	case 1:
      $sql1="INSERT INTO bookrecord (t_id,Class_code,Dates,S_Times,E_Times,Method) values ('$record[0]','$_SESSION[classroom]','$_SESSION[dateday]','$s','$e','$_SESSION[method]')";
	  break;
	case 2:
      $sql1="INSERT INTO bookrecord (t_id,Class_code,Year,Semester,weekday,S_Times,E_Times,Method) values ('$record[0]','$_SESSION[classroom]','$_SESSION[year]','$_SESSION[semester]','$_SESSION[weekday]'
	  ,'$s','$e','$_SESSION[method]')";
	  break;
  }
  if(mysql_query($sql1,$link));
  {
	echo "<script> alert('預約完成'); </script>"; 
	echo "<meta http-equiv='Refresh' content='0;URL=book_class.html'>";
  }
  unset($_SESSION["method"]);
  unset($_SESSION["dateday"]);
  unset($_SESSION["year"]);
  unset($_SESSION["semester"]);
  unset($_SESSION["weekday"]);
  unset($_SESSION["classroom"]);
  unset($_SESSION["times"]);
  mysql_close($link);
?>
