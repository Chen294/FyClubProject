<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无忧论坛-首页</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<?php
		$link=mysqli_connect('localhost','forumadmin','123456','forum');
		mysqli_set_charset($link, "utf8");
            if(!$link)    die("连接数据库失败");
		$result=mysqli_query($link,"SELECT ID,title,intro,content from article ORDER BY ID DESC LIMIT 8");
		session_start();
	?>
	<!--top header-->
	<header>
		<div class="header">
			<div class="logo"><a href="index">无忧论坛</a></div>
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
		<!--items-->
		<div class="items">
			<li class="item">
				<?php $row=mysqli_fetch_array($result,MYSQLI_NUM);?>
				<span class="item-pic">
					<a href="#"><img src="img/item-01.jpg" alt=""></a>
				</span>
				<span class="item-title">
					<a href="user/article/article.php?id=<?=$row[0]?>"><?php echo($row[1]);?></a>
				</span>
				<div class="item-info">
					<?php echo($row[2]);?>
				</div>
				<div class="item-foot">
					<span class="lable">
						<a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CSS3|Html5</a>
					</span>
					<span class="time">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2018-05-04
					</span>
					<span class="viewnum">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;浏览&#40;<a href="/">0</a>&#41;
					</span>
					<div class="readmore">
						<a href="user/article/article.php?id=<?$row[0]?>">'阅读原文</a>
					</div>
				</div>
			</li>
			<li class="item">
				<?php $row=mysqli_fetch_array($result,MYSQLI_NUM);?>
				<span class="item-pic">
					<a href="#"><img src="img/item-01.jpg" alt=""></a>
				</span>
				<span class="item-title">
					<a href="user/article/article.php?id=<?=$row[0]?>"><?php echo($row[1]);?></a>
				</span>
				<div class="item-info">
					<?php echo($row[2]);?>
				</div>
				<div class="item-foot">
					<span class="lable">
						<a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CSS3|Html5</a>
					</span>
					<span class="time">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2018-05-04
					</span>
					<span class="viewnum">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;浏览&#40;<a href="/">0</a>&#41;
					</span>
					<div class="readmore">
						<a href="user/article/article.php?id=<?=$row[0]?>">阅读原文</a>
					</div>
				</div>
			</li>
			<li class="item">
				<?php $row=mysqli_fetch_array($result,MYSQLI_NUM);?>
				<span class="item-pic">
					<a href="#"><img src="img/item-01.jpg" alt=""></a>
				</span>
				<span class="item-title">
					<a href="user/article/article.php?id=<?=$row[0]?>"><?php echo($row[1]);?></a>
				</span>
				<div class="item-info">
					<?php echo($row[2]);?>
				</div>
				<div class="item-foot">
					<span class="lable">
						<a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CSS3|Html5</a>
					</span>
					<span class="time">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2018-05-04
					</span>
					<span class="viewnum">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;浏览&#40;<a href="/">0</a>&#41;
					</span>
					<div class="readmore">
						<a href="user/article/article.php?id=<?=$row[0]?>">阅读原文</a>
					</div>
				</div>
			</li>
			<li class="item">
				<?php $row=mysqli_fetch_array($result,MYSQLI_NUM);?>
				<span class="item-pic">
					<a href="#"><img src="img/item-01.jpg" alt=""></a>
				</span>
				<span class="item-title">
					<a href="user/article/article.php?id=<?=$row[0]?>"><?php echo($row[1]);?></a>
				</span>
				<div class="item-info">
					<?php echo($row[2]);?>
				</div>
				<div class="item-foot">
					<span class="lable">
						<a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CSS3|Html5</a>
					</span>
					<span class="time">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2018-05-04
					</span>
					<span class="viewnum">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;浏览&#40;<a href="/">0</a>&#41;
					</span>
					<div class="readmore">
						<a href="user/article/article.php?id=<?=$row[0]?>">阅读原文</a>
					</div>
				</div>
			</li>
			<li class="item">
				<?php $row=mysqli_fetch_array($result,MYSQLI_NUM);?>
				<span class="item-pic">
					<a href="#"><img src="img/item-01.jpg" alt=""></a>
				</span>
				<span class="item-title">
					<a href="user/article/article.php?id=<?=$row[0]?>"><?php echo($row[1]);?></a>
				</span>
				<div class="item-info">
					<?php echo($row[2]);?>
				</div>
				<div class="item-foot">
					<span class="lable">
						<a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CSS3|Html5</a>
					</span>
					<span class="time">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2018-05-04
					</span>
					<span class="viewnum">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;浏览&#40;<a href="/">0</a>&#41;
					</span>
					<div class="readmore">
						<a href="user/article/article.php?id=<?=$row[0]?>">阅读原文</a>
					</div>
				</div>
			</li>
			<li class="item">
				<?php $row=mysqli_fetch_array($result,MYSQLI_NUM);?>
				<span class="item-pic">
					<a href="#"><img src="img/item-01.jpg" alt=""></a>
				</span>
				<span class="item-title">
					<a href="user/article/article.php?id=<?=$row[0]?>"><?php echo($row[1]);?></a>
				</span>
				<div class="item-info">
					<?php echo($row[2]);?>
				</div>
				<div class="item-foot">
					<span class="lable">
						<a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CSS3|Html5</a>
					</span>
					<span class="time">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2018-05-04
					</span>
					<span class="viewnum">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;浏览&#40;<a href="/">0</a>&#41;
					</span>
					<div class="readmore">
						<a href="user/article/article.php?id=<?=$row[0]?>">阅读原文</a>
					</div>
				</div>
			</li>
			<li class="item">
				<?php $row=mysqli_fetch_array($result,MYSQLI_NUM);?>
				<span class="item-pic">
					<a href="#"><img src="img/item-01.jpg" alt=""></a>
				</span>
				<span class="item-title">
					<a href="user/article/article.php?id=<?=$row[0]?>"><?php echo($row[1]);?></a>
				</span>
				<div class="item-info">
					<?php echo($row[2]);?>
				</div>
				<div class="item-foot">
					<span class="lable">
						<a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CSS3|Html5</a>
					</span>
					<span class="time">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2018-05-04
					</span>
					<span class="viewnum">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;浏览&#40;<a href="/">0</a>&#41;
					</span>
					<div class="readmore">
						<a href="user/article/article.php?id=<?=$row[0]?>">阅读原文</a>
					</div>
				</div>
			</li>
			<li class="item">
				<?php $row=mysqli_fetch_array($result,MYSQLI_NUM);?>
				<span class="item-pic">
					<a href="#"><img src="img/item-01.jpg" alt=""></a>
				</span>
				<span class="item-title">
					<a href="user/article/article.php?id=<?=$row[0]?>"><?php echo($row[1]);?></a>
				</span>
				<div class="item-info">
					<?php echo($row[2]);?>
				</div>
				<div class="item-foot">
					<span class="lable">
						<a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CSS3|Html5</a>
					</span>
					<span class="time">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2018-05-04
					</span>
					<span class="viewnum">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;浏览&#40;<a href="/">0</a>&#41;
					</span>
					<div class="readmore">
						<a href="user/article/article.php?id=<?=$row[0]?>">阅读原文</a>
					</div>
				</div>
			</li>
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
  		<p>Design by David Chan<a href="#"> @无忧论坛</a></p>
	</div>
	
	
	
	
	
	
	
	
	
	
	
</body>
</html>
