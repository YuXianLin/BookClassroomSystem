<?php
  //$method="delete";

  $tid=$_GET["t_id"];
  $link=mysql_connect("localhost","root","a311006leo");
  mysql_select_db("web",$link);

  //讀取該公告原有資料
  $sql="delete from teacher where t_id='$tid'";
  mysql_query($sql,$link);
  header('location:acco_manage.php');

?>