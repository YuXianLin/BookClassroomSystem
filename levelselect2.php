<?php
  if($_SESSION["level"]=="admins")
  {
    header('location:set_semester.html');
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
