<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
	<style>
      .bg 
	  {
        position: fixed;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        z-index: -999;
      }
      .bg img 
	  {
        min-height: 100%;
        width: 100%;
      }
    </style>
  </head>
  <body>
  <div class="bg">
      <img src="images/bgimg1.jpg">
    </div>
	<br><br><br><br><br><br>

    <?
	  $accountnumber=$_SESSION["user"];
	  $link = mysql_connect( 'localhost' , 'root', 'a311006leo');
	  if ( !$link ) 
	  {
		echo 'not connect mysql';
	  }
	  mysql_query( 'set names utf8' );
	  mysql_select_db('web' , $link);

	  $sql="SELECT * FROM bookrecord b,teacher t where b.t_id=t.t_id and  Method='1' and t_account='$accountnumber'";
	  //echo $sql;
	  //$result=mysql_query($sql,$link);
	  //echo $result;

      if($result=mysql_query($sql,$link))
	  {
		$count=mysql_num_rows($result);
		if($count>=1)
		{
?>		  
		  <table width=50% border=1 align=center>
			<tr>
			  <th>預約教室</th>
			  <th>預約日期</th>
			  <th>時間--起</th>
			  <th>時間--迄</th>
			  <th>功能</th>
			</tr>
<?
		  for($i=1;$i<=$count;$i++)
		  {
		    if($record=mysql_fetch_row($result))
		    {
			  $bookid=$record[0];
			  $bookclassroom=$record[2];
			  $bookdate=$record[5];
			  $bookstart=$record[7];
			  $bookend=$record[8];
		    }

			echo 
			"<tr align=center>
	          <td>$bookclassroom</td>
			  <td>$bookdate</td>
			  <td>$bookstart</td>
			  <td>$bookend</td>
			  <td><a href=delete_of.php?No=$bookid>[刪除]</a></td>
			</tr>";
		  }
		  echo "</table>";
		}
		else
		{
		  echo "<h1>目前沒有\"平時預借\"的紀錄!</h1>";
		}
	  }
	?>
  </body>
</html>
