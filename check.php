<form method="POST" action="finish.php">
<table border=1 width=30% align=center>
  <tr>
	<td colspan=2 align=center>您預約的資訊如下</td>
  </tr>
<?
  session_start();
  $_SESSION["classroom"]="";
  $_SESSION["times"]="";
  if($_SESSION["method"]==1)
  {
    //echo $_SESSION["method"],"<br>";
	//echo $_SESSION["dateday"],"<br>";
?>
	<tr>
	  <td align=center>預約方式:</td>
	  <td align=center>平時預借</td>
	</tr>
	<tr>
	  <td align=center>預約日期:</td>
	  <td align=center><? echo $_SESSION["dateday"]; ?></td>
	</tr>
<?
  }
  else
  {
    //echo $_SESSION["method"],"<br>";
	//echo $_SESSION["year"],"<br>";
	//echo $_SESSION["semester"],"<br>";
?>
	<tr>
	  <td align=center>預約方式:</td>
	  <td align=center>學期預借</td>
	</tr>
	<tr>
	  <td align=center>預約學年:</td>
	  <td align=center><? echo $_SESSION["year"]; ?></td>
	</tr>
	<tr>
	  <td align=center>預約學期:</td>
	  <td align=center>
	    <? 
	      if($_SESSION["semester"]==1)
	      {
	        echo "上學期";
		  }
		  else
	      {
			echo "下學期";
		  }
        ?>
	  </td>
	</tr>
	<tr>
	  <td align=center>預約星期:</td>
	  <td align=center>
		<? 
		  switch($_SESSION["weekday"])
	      {
			case 1:echo "一"; break;
			case 2:echo "二"; break;
			case 3:echo "三"; break;
			case 4:echo "四"; break;
			case 5:echo "五"; break;
			case 6:echo "六"; break;
		  }
		?>
	  </td>
	</tr>
<?
  }

  $A=$_POST["AB401_checked"];
  $B=$_POST["BB401_checked"];
  $C=$_POST["CB401_checked"];
  $D=$_POST["DB401_checked"];
  $E=$_POST["EB401_checked"];

  $lenA=count($A);
  if($lenA>0)
  {
	$_SESSION["classroom"]="AB401";
	$_SESSION["times"]=$A;
?>
	<tr>
	  <td align=center>預約教室:</td>
	  <td align=center><? echo $_SESSION["classroom"] ?></td>
	</tr>
	<tr>
	  <td align=center>預約時間(起):</td>
	  <td align=center><? echo $A[0]; ?></td>
	</tr>
	<tr>
	  <td align=center>預約時間(迄):</td>
	  <td align=center><? echo end($A); ?></td>
	</tr>
<?
  }

  $lenB=count($B);
  if($lenB>0)
  {
	$_SESSION["classroom"]="BB401";
	$_SESSION["times"]=$B;
?>
	<tr>
	  <td align=center>預約教室:</td>
	  <td align=center><? echo $_SESSION["classroom"] ?></td>
	</tr>
	<tr>
	  <td align=center>預約時間(起):</td>
	  <td align=center><? echo $B[0]; ?></td>
	</tr>
	<tr>
	  <td align=center>預約時間(迄):</td>
	  <td align=center><? echo end($B); ?></td>
	</tr>
<?
  }
  
   $lenC=count($C);
  if($lenC>0)
  {
	$_SESSION["classroom"]="CB401";
	$_SESSION["times"]=$C;
?>
	<tr>
	  <td align=center>預約教室:</td>
	  <td align=center><? echo $_SESSION["classroom"] ?></td>
	</tr>
	<tr>
	  <td align=center>預約時間(起):</td>
	  <td align=center><? echo $C[0]; ?></td>
	</tr>
	<tr>
	  <td align=center>預約時間(迄):</td>
	  <td align=center><? echo end($C); ?></td>
	</tr>
<?
  }

   $lenD=count($D);
  if($lenD>0)
  {
	$_SESSION["classroom"]="DB401";
	$_SESSION["times"]=$D;
?>
	<tr>
	  <td align=center>預約教室:</td>
	  <td align=center><? echo $_SESSION["classroom"] ?></td>
	</tr>
	<tr>
	  <td align=center>預約時間(起):</td>
	  <td align=center><? echo $D[0]; ?></td>
	</tr>
	<tr>
	  <td align=center>預約時間(迄):</td>
	  <td align=center><? echo end($D); ?></td>
	</tr>
<?
  }

   $lenE=count($E);
  if($lenE>0)
  {
	$_SESSION["classroom"]="EB401";
	$_SESSION["times"]=$E;
?>
	<tr>
	  <td align=center>預約教室:</td>
	  <td align=center><? echo $_SESSION["classroom"] ?></td>
	</tr>
	<tr>
	  <td align=center>預約時間(起):</td>
	  <td align=center><? echo $E[0]; ?></td>
	</tr>
	<tr>
	  <td align=center>預約時間(迄):</td>
	  <td align=center><? echo end($E); ?></td>
	</tr>
<?
  }
?>
  <tr>
    <td colspan=2 align=center>
	  <input type=submit value="確認預約">&nbsp;&nbsp;
	  <input type="button" value="取消預約" onclick="javascrtpt:window.location.href='book_class.html'">
	</td>
  </tr>
</table>
</form>
