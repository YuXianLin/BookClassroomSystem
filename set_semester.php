<?php
  $link = mysql_connect( 'localhost' , 'root', 'a311006leo');
  if ( !$link ) 
  {
    echo 'not connect mysql';
  }
  mysql_query( 'set names utf8' );
  mysql_select_db('web' , $link);

  $year=$_GET['semesteryear'];
  $semester=$_GET['semester'];
  $startdate=$_GET['datestart'];
  $enddate=$_GET['dateend'];
  $sql="INSERT INTO semester (Year,Semester,date_s,date_e) values ('$year','$semester','$startdate','$enddate')";
  //echo $sql;
  if(mysql_query($sql,$link))
  {
?>
	<script>
	  alert('學期區間設定完成');
	  history.back();
	</script>
<?
  }
  mysql_close($link);
?>

