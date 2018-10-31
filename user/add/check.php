<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>checkadd</title>
</head>

<body>
	<?php
		session_start();
    	if(empty($_SESSION['t_name']))
    	{
			echo "<script>alert('您还未登录不能发帖，请登录！3s后跳转到登录页面')<//script>";
       	 	header("Refresh:3;Location:../login/login.html");
   		}
		$user=$_SESSION['t_name'];
		/*链接数据库*/
        $link=mysqli_connect('localhost','forumadmin','123456','forum');//数据库连接填入应参数
		mysqli_set_charset($link, "utf8");
            if(!$link)    die("连接数据库失败");
	    
		$tit=$_POST['title'];
		$int=$_POST['intro'];
		$con=$_POST['content'];
	    mysqli_query($link,"INSERT INTO article (title,intro,content,writer,time) VALUES ('$tit','$int','$con','$user',now())");
		
	    //断开连接
		mysqli_close($link);
		echo "<script>alert('发帖成功！3s后跳转到主页面')<//script>";
	    header("Refresh:3;url=../../index.php");
	?>
</body>
</html>