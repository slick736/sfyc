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

	<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

		<title>个人主页-i宠</title>
		<meta name="description" content="" />
		<meta name="author" content="Shi" />
		<meta name="viewport" content="width=device-width; initial-scale=1.0" />
		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico" />
		<link rel="apple-touch-icon" href="/apple-touch-icon.png" />

   	    <link rel="stylesheet" type="text/css" href="css/style-article.css"/>

   	    <script type="text/javascript" src="js/jquery-2.0.3.min.js"></script>
   	    <script type="text/javascript" src="js/article.js"></script>
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
							<img src="images/TLogo4B.png"></img>
						</a>
					</div>
					<div id="divoption4" class="divoptions">
						<a href="apps.php">
							<img src="images/TLogo5A.png"></img>
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

			<!--这里一个大块用于写文章-->
			<div id="article_writer">
				<!-- 放置标题 -->
				<div id="article_header">
					来，说说你的新鲜事......
					<br/>
					<hr/>
					<br/>
					请输入标题(40字符以内，可选)
					<br/>
					<input type="text" id="topic_inputer">
					</input>
				</div>
				<!-- 放置正文 -->
				<div id="article_body">
					<div id="article_function">
						<div id="function1" class="functions">
							预留功能1
						</div>
						<div id="function2" class="functions">
							预留功能2
						</div>
						<div id="function3" class="functions">
							预留功能3
						</div>
						<div id="function4" class="functions">
							预留功能4
						</div>
						<div id="function5" class="functions">
							预留功能5
						</div>
					</div>
					<textarea id="article_inputer"></textarea>
				</div>
				<!-- 页脚，发布 -->
				<div id="article_footer">
					<div id="publisher_id">
						<div id="publisher1" class="publishers">
							以主人名义发布(默认)
						</div>
						<div id="publisher2" class="publishers">
							以宠物1名义发布
						</div>
						<div id="publisher3" class="publishers">
							以宠物2名义发布
						</div>
					</div>
					<br/>
					<div id="receiver_id">
						<div id="receiver1" class="receivers">
							所有人可见(默认)
						</div>
						<div id="receiver2" class="receivers">
							仅收听者可见
						</div>
						<div id="receiver3" class="receivers">
							仅自己可见
						</div>
					</div>
					<br/>
					<!-- a href="myspace.html" -->
						<div id="publish" onclick="publishcomplete()">
							发布
						</div>
					<!-- /a -->
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
