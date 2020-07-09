<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>管理者設定畫面</title>
    <!--引用css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" />
</head>
<body>
<form action="<?=$_SERVER['PHP_SELF']?>" method="get">
<table width=100%>
<tr>
	<td width=33%>&nbsp;</td>
	<td width=34% align=center><input type="text" name="search_post">&nbsp;&nbsp;<input type="submit" value="搜尋教師"></td>
	<td width=33% align=right><h3><a href="insert.php">新增教師</a>&nbsp;&nbsp;<a href="operation.php">回操作頁面</a></h3></td>
</tr>
</table>

	<hr><br>
	<table border=1 style='border-collapse: collapse;' width=100% align=center>
	  <tr align=center>
	    <th>教師編號</th>
		  <th>教師姓名</th>
		  <th>教師帳號</th>
		  <th>教師密碼</th>
		  <th>教師科系</th>
		  <th>教師身分</th>
		  <th>教師手機</th>
		  <th>教師信箱</th>
		  <th>功能</th>
	  </tr>

	<?php
	  //搜尋關鍵字
	  $search_post=$_GET["search_post"];

	  $link = mysql_connect( 'localhost' , 'root', 'a311006leo');
	  if ( !$link ) 
	  {
		echo 'not connect mysql';
	  }
	  mysql_query( 'set names utf8' );
	  mysql_select_db('web' , $link);
	  if(empty($search_post)) 
	    $sql = 'select * from teacher';
	  else 
	    $sql="select * from teacher where t_name like '%$search_post%'";

      if ($result = mysql_query($sql)) 
	  {
	    while ($row = mysql_fetch_row($result)) 
		{
		  echo "<tr align=center>";
		  for ($i=0; $i < mysql_num_fields($result); $i++) 
		  {
			if($i==5)
			{
			  if($row[5]==1)
			  {
				echo "<td>manager</td>";
			  }
			  else
		      {
				  echo "<td>user</td>";
			  }
			}
			else
			{
			  echo "<td>$row[$i]</td>";
			}
		}
		  echo "<td><a href=update.php?t_id=$row[0]>[修改]</a>&nbsp;&nbsp<a href=delete.php?t_id=$row[0]>[刪除]</a></td>";
		  echo "</tr>";
		}
      }
      echo "</table>";

	  
	?>
	<br>
	<hr>
	<br>
	</form>
  </body>
</html>