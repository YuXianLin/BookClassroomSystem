<?
  session_start();
  $_SESSION["method"]=1;
  $dateday=$_POST["dateday"];
  $_SESSION["dateday"]=$dateday;
  //echo $dateday;
  $link = mysql_connect( 'localhost' , 'root', 'a311006leo');
  if ( !$link ) 
  {
    echo 'not connect mysql';
  }
  mysql_query( 'set names utf8' );
  mysql_select_db('web' , $link);

  $sql="SELECT * FROM semester where '$dateday' between date_s and date_e";
  //echo $sql;
  $result=mysql_query($sql,$link);
  $count=mysql_num_rows($result);
  $record=mysql_fetch_row($result);
  
  if($count!=1)
  {
?>
	<script>
	  alert('您選擇的時段暫時不開放預借!');
	  history.back();
	</script>
<?
  }
  else
  {
    header('location:choose.html');
  }
?>

