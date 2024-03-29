<?php
	session_start();
	if(isset($_SESSION['LOGIN'])){
		$sign_in=TRUE;
	}
	else{
		$sign_in=FALSE;
	}
?>
<!DOCTYPE html>
<html>
	<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

		<title>站内应用-i宠</title>
		<meta name="description" content="" />
		<meta name="author" content="Shi" />
		<meta name="viewport" content="width=device-width; initial-scale=1.0" />
		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico" />
		<link rel="apple-touch-icon" href="/apple-touch-icon.png" />

   	    <link rel="stylesheet" type="text/css" href="css/style-apps.css">
	</head>

	<body>
		<div id="container">
			<!-- 标题图 -->
			<div id="titleboard">
				<img src="images/TitleBoard9.png" id="board_inner">

				</img>
				<img src="images/TitleBoard8.png" id="board_outer">

				</img>
			</div>

			<!-- header块是顶部条块，放置登陆按钮等-->
			<div id="header">
				<div id="t_blank">

				</div>
				<!-- 修改内容：这里添加了登陆按钮的预置位-->
				<div id="logo1" class="leaderelements">
					<img src="images/BlackStar.png"></img>
				</div>
				<!-- div id="logo2" class="leaderelements">Tencent</div -->
				<div id="logo3" class="leaderelements">
				<?php
					if($sign_in)
						echo "<a href='logout.php'>退出登录</a>";
					else
						echo "<a href='login.php'>登录</a> | <a href='Register.php'>注册</a>";
				?>
				</div>
				<br/>
				<br/>
			</div>

			<!-- ads块是放置动态广告宣传图，推广内容等的区域-->
			<!--
			<div id="ads">
			This is ads div. ads块是放置动态广告宣传图，推广内容等的区域
			</div>
			-->

			<!-- menu块是放置选项标签的-->
			<div id="menu">
				<!-- 修改：这里放置选项按钮及搜索栏 -->
				<div id="menulogo">
					<img src="images/iPet.png"></img>
				</div>
				<div id="menuinterface">
					<div id="divoption0" class="divoptions">
						<a href="index.php">
							<img src="images/TLogo1A.png"></img>
						</a>
					</div>
					<div id="divoption1" class="divoptions">
						<a href="adoption.php">
							<img src="images/TLogo2A.png"></img>
						</a>
					</div>
					<div id="divoption2" class="divoptions">
						<a href="news.php">
							<img src="images/TLogo3A.png"></img>
						</a>
					</div>
					<div id="divoption3" class="divoptions">
						<a href="article.php">
							<img src="images/TLogo4A.png"></img>
						</a>
					</div>
					<div id="divoption4" class="divoptions">
						<a href="apps.php">
							<img src="images/TLogo5B.png"></img>
						</a>
					</div>
					<div id="divoption5" class="divoptions">
						<a href="myspace.php">
							<img src="images/TLogo6A.png"></img>
						</a>
					</div>
					<input class="search-input2" placeholder="Search...">
					<img src="images/paw.png" id="searchpaw">

					</img>
				</div>

			</div>

			<!-- content块分contentLeft和contentRight,放置主要内容-->
			<div id="content">
				<!-- contentLeft块是选择过滤器-->
				<div id="contentLeft">
					<!-- 修改内容：这里放上了未加js代码的选择器 -->
					<div id="cat" class="browserlv1">
						<div id="cats" class="browsertop">
							Cats
							<hr/>
						</div>
						<div id="cat1" class="browserlv2">
							Cat1
							<hr/>
						</div>
						<div id="cat2" class="browserlv2">
							Cat2
							<hr/>
						</div>
						<div id="cat3" class="browserlv2">
							Cat3
							<hr/>
						</div>
					</div>
					<div id="dog" class="browserlv1">
						<div id="dogs" class="browsertop">
							Dogs
							<hr/>
						</div>
						<div id="dog1" class="browserlv2">
							Dog1
							<hr/>
						</div>
						<div id="dog2" class="browserlv2">
							Dog2
							<hr/>
						</div>
						<div id="dog3" class="browserlv2">
							Dog3
							<hr/>
						</div>
					</div>
					<div id="fish" class="browserlv1">
						<div id="fishes" class="browsertop">
							Fishes
							<hr/>
						</div>
						<div id="fish1" class="browserlv2">
							Fish1
							<hr/>
						</div>
						<div id="fish2" class="browserlv2">
							Fish2
							<hr/>
						</div>
						<div id="fish3" class="browserlv2">
							Fish3
							<hr/>
						</div>
					</div>
					<br/>
					<hr/>
					<br/>
					<div id="custom" class="browserlv1">
						<div id="customs" class="browsertop">
							Custom
							<hr/>
						</div>
						<div id="custom1" class="browserlv2">
							Custom1
							<hr/>
						</div>
						<div id="custom2" class="browserlv2">
							Custom2
							<hr/>
						</div>
						<div id="custom3" class="browserlv2">
							Custom3
							<hr/>
						</div>
					</div>
				</div>

				<!-- contentRight块现在放一些图片-->
				<div id="contentRight">
					<img class="item" src="images/5.jpg" width="170" height="135">
					<img class="item" src="images/6.jpg" width="170" height="135">
					<img class="item" src="images/7.jpg" width="170" height="135">
					<img class="item" src="images/8.jpg" width="170" height="135">
					<img class="item" src="images/9.jpg" width="170" height="135">
					<img class="item" src="images/1.jpg" width="170" height="135">
					<img class="item" src="images/2.jpg" width="170" height="135">
					<img class="item" src="images/3.jpg" width="170" height="135">
					<img class="item" src="images/4.jpg" width="170" height="135">
					<!--
					<p>This is contentRight. contentRight块是放置主要阅读内容的</p>
					<p>This is contentRight. contentRight块是放置主要阅读内容的</p>
					<p>This is contentRight. contentRight块是放置主要阅读内容的</p>
					<p>This is contentRight. contentRight块是放置主要阅读内容的</p>
					<p>This is contentRight. contentRight块是放置主要阅读内容的</p>
					<p>This is contentRight. contentRight块是放置主要阅读内容的</p>
					<p>This is contentRight. contentRight块是放置主要阅读内容的</p>
					<p>This is contentRight. contentRight块是放置主要阅读内容的</p>
					-->
				</div>
			</div>

			<!--footer块是放置页脚信息的-->
			<div id="footer">
				<!-- 修改内容：这里改变了页脚 -->
				<br/>
				<hr/>
				<br/>
				Copyright 2013-2014 SFYC Studio
				<br/>
				<br/>
			</div>
		</div>
	</body>
</html>
