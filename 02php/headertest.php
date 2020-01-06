<!DOCTYPE html>
<html lang="ko">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=">
	<meta charset="UTF-8">
	<title>집에가고싶다</title>
	<style>
		*{margin: 0; padding: 0;}
		li{list-style: none;}
		a:visited,a:link{text-decoration: none; color:#000;}
		.clearfix:after{display: block; content:""; clear: both;}

		#header{width: 960px; margin: 0 auto; background-color: #f00;}
		#header h1{width: 150px; text-align: center; margin: 0 auto;}
		#header .gnb ul li{float: left; width: 20%;}
		#header .gnb ul li a{display: block; line-height: 30px; text-align: center;}
		#header .gnb ul li a:hover{background-color: #000; color:#fff;}
		#header .gnb ul li.active{background-color: #000;}

		.visual{height: 400px; background-color: #000;}
		section#section{width: 960px; height: 1000px; background-color: darkgray; margin: 0 auto;}
		footer#footer{height: 200px; background-color: #f00;}

		.sub{height: 200px; background-color: pink;}
		.sub div{text-align: center; font-weight: bold; font-size: 40px;}
		.content{float:left; width: 800px; height: 1000px; background-color: pink;}
		.menu{float: right; width: 150px; height: 1000px; background-color: pink;}


	</style>
</head>
<body>
	<header id="header">
		<h1><a href="#">logo</a></h1>
		<nav class="gnb">
			<ul class="clearfix">
				<li><a href="companytest.php">company</a></li>
				<li><a href="#">menu2</a></li>
				<li><a href="#">menu3</a></li>
				<li><a href="#">menu4</a></li>
				<li><a href="#">menu5</a></li>
			</ul>
		</nav>
	</header>