<?
  session_start();
  $_SESSION["method"]=2;
  $year=$_POST["year"];
  $semester=$_POST["semester"];
  $weekday=$_POST["weekday"];
  $_SESSION["year"]=$year;
  $_SESSION["semester"]=$semester;
  $_SESSION["weekday"]=$weekday;
  //echo $year.$semester;
  $link = mysql_connect( 'localhost' , 'root', 'a311006leo');
  if ( !$link ) 
  {
    echo 'not connect mysql';
  }
  mysql_query( 'set names utf8' );
  mysql_select_db('web' , $link);

  $sql="SELECT * FROM semester where Year='$year' and Semester='$semester'";
  echo $sql;
  $result=mysql_query($sql,$link);
  $count=mysql_num_rows($result);
  $record=mysql_fetch_row($result);
  
  if($count!=1)
  {
?>
	<script>
	  alert('請選擇正確的學期區間!');
	  history.back();
	</script>
<?
  }
  else
  {
    header('location:choose.html');
  }
?>

