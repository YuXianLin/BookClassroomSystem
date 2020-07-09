<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--

Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Title      : Boorish
Version    : 1.0
Released   : 20080123
Description: A wide two-column design suitable for blogs and small websites.

-->
<?php
header("Content-Type:text/html; charset=big5");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
	<meta http-equiv="content-type"/>
	<title>�ާ@�D����</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="default.css" rel="stylesheet" type="text/css" />
	<!-- jQuery v1.9.1 -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
	<!-- Moment.js v2.20.0 -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.0/moment.min.js"></script>
	<!-- FullCalendar v3.8.1 -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.8.1/fullcalendar.min.css" rel="stylesheet"  />
	<link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.8.1/fullcalendar.print.css" rel="stylesheet" media="print"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.8.1/fullcalendar.min.js"></script>

	<style>
	  .myButton 
	  {
		-moz-box-shadow: 10px 15px 25px -10px #20c9a7;
		-webkit-box-shadow: 10px 15px 25px -10px #20c9a7;
		box-shadow: 10px 15px 25px -10px #20c9a7;
		background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #4579c7), color-stop(1, #2abda4));
		background:-moz-linear-gradient(top, #4579c7 5%, #2abda4 100%);
		background:-webkit-linear-gradient(top, #4579c7 5%, #2abda4 100%);
		background:-o-linear-gradient(top, #4579c7 5%, #2abda4 100%);
		background:-ms-linear-gradient(top, #4579c7 5%, #2abda4 100%);
		background:linear-gradient(to bottom, #4579c7 5%, #2abda4 100%);
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#4579c7', endColorstr='#2abda4',GradientType=0);
		background-color:#4579c7;
		-moz-border-radius:20px;
		-webkit-border-radius:20px;
		border-radius:20px;
		border:5px solid #359194;
		display:inline-block;
		cursor:pointer;
		color:#291d21;
		font-family:Georgia;
		font-size:20px;
		font-weight:bold;
		font-style:italic;
		padding:10px 30px;
		text-decoration:none;
		text-shadow:0px 0px 10px #d0f734;
	  }
	  .myButton:hover 
	  {
		background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #2abda4), color-stop(1, #4579c7));
		background:-moz-linear-gradient(top, #2abda4 5%, #4579c7 100%);
		background:-webkit-linear-gradient(top, #2abda4 5%, #4579c7 100%);
		background:-o-linear-gradient(top, #2abda4 5%, #4579c7 100%);
		background:-ms-linear-gradient(top, #2abda4 5%, #4579c7 100%);
		background:linear-gradient(to bottom, #2abda4 5%, #4579c7 100%);
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#2abda4', endColorstr='#4579c7',GradientType=0);
		background-color:#2abda4;
	  }
	  .myButton:active 
	  {
		position:relative;
		top:1px;
	  }
	</style>

    <style> 
	  /* The Modal (background) */ 
	  .modal 
	  { 
		display: none; /* Hidden by default */ 
		position: fixed; /* Stay in place */ 
		z-index: 1; /* Sit on top */ 
		padding-top: 100px; /* Location of the box */ 
		left: 0; 
		top: 0; 
		width: 100%; /* Full width */ 
		height: 100%; /* Full height */ 
		overflow: auto; /* Enable scroll if needed */ 
		background-color: rgb(0,0,0); /* Fallback color */ 
		background-color: rgba(0,0,0,0.4); /* Black w/ opacity */ 
	  }  
	  /* Modal Content */ 
	  .modal-content 
	  { 
		background-color: #fefefe; 
		margin: auto; 
		padding: 20px; 
		border: 1px solid #888; 
		width: 80%; 
	  }  
	  /* The Close Button */ 
	  .close 
	  { 
		color: #aaaaaa; 
		float: right; 
		font-size: 28px; 
		font-weight: bold; 
	  } 	 
	  .close:hover, 
	  .close:focus 
	  { 
	    color: #000; 
	    text-decoration: none; 
	    cursor: pointer; 
	  }
	</style> 
</head>
<body>
<!-- start header -->
<div id="header">
	<div id="logo">
		<h1><a href="#">�����j��</a></h1><br>
		<h2 align=center>�w���ЫǨt��</h2>
	</div>
	<div id="menu">
		<ul>
			<li class="current_page_item"><a href="index.html">�^����</a></li>
			<li><a href="http://www.fju.edu.tw" target="_other">���j����</a></li>
			<li><a href="http://140.136.251.210/staff/" target="_other">��¾���u��T�J�f��</a></li>
			<li><a href="https://elearn2.fju.edu.tw/" target="_other">Tronclass</a></li>
		</ul>
	</div>
</div>
<!-- end header -->
<!-- start page -->
<div id="page">
	<!-- start content -->
	<div id="content">
		<!-- start latest-post -->
		<div id="latest-post" class="post">
			<h1 class="title">Welcome to Fu Jen Catholic University!</h1><br><br><br>
			<img src="images/4.jpg" height=280 width=550>
			<p>&nbsp;</p>
		</div>
		<!-- end latest-post -->
		<!-- start recent-posts -->
		<div id="recent-posts">
		<h2 align=center>
		  <a href="logout.php"><u>�z�n!&nbsp;&nbsp;�n�X</u></a>
		</h2><br>
			<div id="example"></div><br>
	<script>
		$( "#example" ).fullCalendar({
			// �ѼƳ]�w[��1]
			header: { // �����ƪ�
				left: "prev,next today", // �����m�W�@���B�U�@���M����
				center: "title", // ������m���D
				right: "month,basicDay" // �k���m��B�P�B��
			},
			defaultDate: "2019-01-01", // �_�l���
			weekends: true, // ��ܬP������P����
			editable: false,  // �Ұʩ즲�վ���
			events: 
			[
			  { 
				title: "��F�|ĳ",
				start: "2018-10-04"
			  },
			  { 
				title: "��y��񰲤@��",
				start: "2018-10-10"
			  },
			  { 
				title: "�i�׳��Z�N��y�ͷ|(�ߤW)",
				start: "2018-10-17"
			  },
			  { 
				title: "�鶡���Z�N��y�ͷ|(�U��)",
				start: "2018-10-24"
			  },
			  { 
				title: "�����Ҹ�",
				start: "2018-11-05",
				end: "2018-11-10"
			  },
			  { 
				title: "��F�|ĳ",
				start: "2018-11-08"
			  },
			  { 
				title: "�i�׳��g�|(�@�B�|�~�šA�ߤW�T�|�`)",
				start: "2018-11-14"
			  },
			  { 
				title: "����B�^��򥻯�O�˴�",
				start: "2018-11-21"
			  },
			  { 
				title: "�t���I�O",
				start: "2018-12-03"
			  },
			  { 
				title: "��F�|ĳ",
				start: "2018-12-06"
			  },
			  { 
				title: "�ռy����(���j�D�O�t���l�L�L�V��o�`���鬰12��8��)",
				start: "2018-12-07"
			  },
			  { 
				title: "�ռy�P���y���j�|",
				start: "2018-12-07"
			  },
			  { 
				title: "�ռy�B�ʷ|",
				start: "2018-12-08"
			  },
			  { 
				title: "�ռy�ɰ��@��",
				start: "2018-12-10"
			  },
			  { 
				title: "�t�ϸ��](�U��)",
				start: "2018-12-21"
			  },
			  { 
				title: "�t�ϸ`�l�]����(�i�׳��U�ȡB�ߤW���Z���ҡF��L�Ǩ�U�Z�ߤW���Z����)",
				start: "2018-12-24"
			  },
			  { 
				title: "�ѩ������B�t�ϸ`�񰲤@��",
				start: "2018-12-25"
			  },
			  { 
				title: "�ǥͥӽХ�ǺI���",
				start: "2018-12-26"
			  },
			  { 
				title: "�}�������u�ʩ񰲤@��",
				start: "2018-12-31"
			  },
			  { 
				title: "�}�������񰲤@��",
				start: "2019-01-01"
			  },
			  { 
				title: "�հȷ|ĳ",
				start: "2019-01-03"
			  },
			  { 
				title: "�Ǵ��Ҹ�",
				start: "2019-01-07",
				end: "2019-01-12"
			  },
			  { 
				title: "��F�|ĳ",
				start: "2019-01-10"
			  },
			  { 
				title: "�ǥ;Ǵ��Ƿ~���Zú��I���",
				start: "2019-01-22"
			  },
			  { 
				title: "�H�o�ǥ;Ǵ��Ƿ~���Z�q����",
				start: "2019-01-24"
			  },
			  { 
				title: "���i��",
				start: "2019-02-04"
			  },
			  { 
				title: "�K�`��",
				start: "2019-02-05"
			  },
			  { 
				title: "�K�`����",
				start: "2019-02-06",
				end: "2019-02-08"
			  },
			  { 
				title: "107�Ǧ~�ײĤ@�Ǵ��Ǵ��Ҹոɦ�",
				start: "2019-02-12",
				end: "2019-02-14"
			  },
			  { 
				title: "�����ͤΥ~�y�͵��U��",
				start: "2019-02-13"
			  },
			  { 
				title: "�ǥ�ú������O�I���",
				start: "2019-02-05"
			  },
			]
		});
	</script>
			
		</div>
		<!-- end recent-posts -->
	</div>
	<!-- end content -->
	<!-- start sidebar -->
	<div id="sidebar">
		<ul>
			<li>
				<h2>�w���Ы�</h2>
				<img src="images/i1.jpg" width="150" height="150" border="0" alt=""><br>
				<p><br><a href="book_class.html" class="myButton">�I���e��</a></p>
			</li>
			<li>
				<h2>�w������</h2>
				<img src="images/i2.jpg" width="150" height="150" border="0" alt=""><br>
				<p><br><a href="book_record.html" class="myButton">�I���e��</a></p>
			</li>
			<li>
				<h2>�b���޲z</h2>
				<img src="images/i3.jpg" width="150" height="150" border="0" alt=""><br>
				<p><br><a href="levelselect.php" class="myButton" >�I���e��</a></p>
			</li>
			<li>
				<h2>�]�w�Ǵ��϶�</h2>
				<img src="images/i6.jpg" width="150" height="150" border="0" alt=""><br>
				<p><br><a href="levelselect2.php" class="myButton" >�I���e��</a></p>
			</li>
		</ul>
		
		<div style="clear: both;">&nbsp;</div>
	</div>
</div>
</body>
</html>
