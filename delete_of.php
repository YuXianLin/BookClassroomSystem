<?php
  //$method="delete";

  $no=$_GET["No"];
  $link=mysql_connect("localhost","root","a311006leo");
  mysql_select_db("web",$link);

  //讀取該公告原有資料
  $sql="delete from bookrecord where No='$no'";
  if(mysql_query($sql,$link))
  {
?>
    <script>
	  alert('預約記錄刪除成功');
      history.back();
	</script>
<?
  }
?>