<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无忧论坛-首页</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<?php
		$id=$_GET['id'];
		$link=mysqli_connect('localhost','forumadmin','123456','forum');
		mysqli_set_charset($link, "utf8");
            if(!$link)    die("连接数据库失败");
		$result=mysqli_query($link,"SELECT ID,title,intro,content,writer,time from article WHERE ID='$id'");
		session_start();
	?>
	<!--top header-->
	<header>
		<div class="header">
			<div class="logo"><a href="index">川大计算机论坛</a></div>
			<div class="nav">
				<ul>
					<li><a href="index.html">网站首页</a></li>
					<li><a href="#">问题求助</a></li>
					<li><a href="#">技术专题</a></li>
					<li><a href="#">学无止境</a></li>
					<li><a href="#">留言</a></li>
					<li><a href="#">关于我</a></li>
				</ul>
			</div>
			 


			<div class="user"><a href="user/add/add.php">我要说 </a>|<?php 
if(!empty($_SESSION['t_name']))
    echo "<a href=\"#\">欢迎您，{$_SESSION["t_name"]}</a>";
else
    echo '<a href="user/login/login.html">请登陆</a>';
?>
		</div>
	</header>
	<!--top header end-->
	
	<!-- main-->
	<div class="main">
		<?php $row=mysqli_fetch_array($result,MYSQLI_NUM); ?>
		<div class="article">
			<h3 class="title"><?php echo $row[1] ?></h3>
			<div class="author">
				<span class="icon-01"><?php echo "$row[4]"; ?></span>
				<span class="icon-02"><?php echo "$row[5]"; ?></span>
				<span class="icno-03">共<b style="color:#333;">XXX</b>人围观</span>
			</div>
			
			<div class="intro">
				<strong style="color:#38485A;padding-right:8px;">简介</strong><?php echo "$row[2]"; ?></div>
			<div class="text">
				<?php echo "$row[3]"; ?>
			</div>
		</div>
		<!--items end-->
		
		<!--side bar-->
		<div class="sidebar">
			<div class="about">

			</div>
			<div class="search">

			</div>
			<div class="classify">

			</div>
			<div class="recommend">

			</div>
			<div class="link">

			</div>
			<div class="promote">

			</div>
		</div>
		<!--side bar end-->
	</div>
	<!-- main end-->
	
	
	
	<!--foot-->
	<div class="foot">
  		<p>Design by David Chan<a href="#"> @川大计算机论坛</a></p>
	</div>
	
	
	
	
	
	
	
	
	
	
	
</body>
</html>
