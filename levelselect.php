<?php
  if($_SESSION["level"]=="admins")
  {
    header('location:acco_manage.php');
  }
  else
  {
?>
	<script>
	  alert('沒有權限使用');
	  history.back();
	</script>
<?
  }
?>