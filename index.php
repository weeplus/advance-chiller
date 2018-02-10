<?php
	$pathLang=(!isset($_COOKIE['ck_lang']) || $_COOKIE['ck_lang']=="")?"en":$_COOKIE['ck_lang'];
	include($pathLang."/index.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" >
<head>
	
	
	<meta name="robots" content="index, follow" />
	<meta name="keywords" content="chiller, ชิลเลอร์, ชิลเลอร์ระบายความร้อนด้วยน้ำ, ชิลเลอร์ระบายความร้อนด้วยอากาศ, เครื่องควบคุมอุณหภูมิอุตสาหกรรม, control box air conditioner" />
  	<meta name="title" content="แอดวานซ์ ชิลเลอร์" />
  	<meta name="author" content="Administrator" />
	  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>ชิลเลอร์, chiller, เครื่องทำน้ำเย็นอุตสหกรรม</title>
	<link rel="stylesheet" href="./styles/style.css">
	<link rel="stylesheet" href="./styles/flexboxgrid.css">
</head>

<body>
	<!-- HEADER -->
	<header id="main-header">
		<div class="container">
			<div class="row end-sm end-md end-lg center-xs middle-xs middle-sm middle-md middle-lg">
				<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
					<!--<h1><span class="primary-text">Advance  </span>Chiller</h1> -->
					<img src="./images/logo.jpg" alt="Advance Chiller" height="70" width="140">
				</div>
				<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
					<nav class="navbar">
						<ul class="navbar-nav">
							<li><a href="#"><?=_Home?></a></li>
							<li><a href="about.php"><?=_About_Us?></a></li>
							<li><a href="#Products" ><?=_Products?></a></li>
							<li><a href="#"><?=_Site_Map?></a></li>
						</ul>
						<a href="javascript:setLang('th');"><img src="./images/th.png" alt="thai"></a>
						<a href="javascript:setLang('en');"><img src="./images/en.png" alt="English"></a>
					</nav>
				</div>
			</div>
		</div>
	</header>


	<!-- <div id="side-menu" class="side-nav">
		<a href="index.php" class="btn-close" onclick="closeSlideMenu()">&times;</a>
		<a href="air_chiller.php"><?=_Air_Cooled?></a>
		<a href="water_chiller.php"><?=_Water_Cooled?></a>
		<a href="spot_chiller.php"><?=_Spot_Cooled?></a>
		<a href="#"><?=_Site_Map?></a>
	</div> -->

	<section id="showcase">
		<div class="container">
			<div class="row center-xs center-sm center-md center-lg middle-xs middle-sm middle-md middle-lg">
			<div class="col-xs-10 col-sm-10 col-md-10 col-lg-7 showcase-content">
				<h1>Welcome to <span class="primary-text">AppTheme</span></h1>
				<p>A template built with HTML5, CSS3 and Flexboxgrid</p>
			</div>
			</div>
		</div>
	</section>

	<div id="Products">
		<h1><?= $strProduct ?></h1>
	</div>


	<script type="text/javascript">
		function setLang(langID){
			var days=365; // กำหนดจำนวนวันที่ต้องการให้จำค่า  
			var date = new Date();  
			date.setTime(date.getTime()+(days*24*60*60*1000));  
			var expires = "; expires="+date.toGMTString();  
			document.cookie = "ck_lang=" +langID+ "; expires=" + expires + "; path=/";  
			window.location.reload()
		}

		function openSlideMenu(){
		document.getElementById('side-menu').style.width = '250px';
		//document.getElementById('main').style.marginLeft = '250px';
		}

		function closeSlideMenu(){
		document.getElementById('side-menu').style.width = '0';
		//document.getElementById('main').style.marginLeft = '0';
		}

		function closeShowcase(){
		document.getElementById('showcase').style.width = '0';
		document.getElementById('main').style.marginLeft = '0';
		}
	</script>

</body>
</html>