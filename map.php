<!DOCTYPE html>
<html style="overflow-x: hidden;">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>全国主要城市数据展现 | 地图</title>
  <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="/css/open-iconic-bootstrap.min.css">
  <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.bootcss.com/twitter-bootstrap/4.2.1/js/bootstrap.bundle.min.js"></script>
  </style>
  </head>
<body>
	<?php require_once '/component/header.php' ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col text-center jumbotron" style="margin: 0px;">
				<h1 class="display-4">地图展示</h1>
			</div>
		</div>
		<div class="row" style="margin: 10px;">
			<div class="col text-center">
				<div class="btn-group">
					<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-right: 10px;">GDP</button>
					<div class='dropdown-menu'>
					<?php
					for($year=2017;$year>2007;$year--){
						echo "
						<a class='dropdown-item' href=\"bar.php?year=$year&table=gdp\" target='map'>$year</a>";
					}
					?>
					</div>
				</div>
				<div class="btn-group">
					<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-right: 10px;">房价</button>
					<div class='dropdown-menu'>
					<?php
					for($year=2017;$year>2007;$year--){
						echo "
						<a class='dropdown-item' href=\"bar.php?year=$year&table=house_price\" target='map'>$year</a>";
					}
					?>
					</div>
				</div>
				<div class="btn-group">
					<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-right: 10px;">人均薪资</button>
					<div class='dropdown-menu'>
					<?php
					for($year=2017;$year>2007;$year--){
						echo "
						<a class='dropdown-item' href=\"bar.php?year=$year&table=pay\" target='map'>$year</a>";
					}
					?>
					</div>
				</div>
				<div class="btn-group">
					<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-right: 10px;">户籍人口</button>
					<div class='dropdown-menu'>
					<?php
					for($year=2017;$year>2007;$year--){
						echo "
						<a class='dropdown-item' href=\"bar.php?year=$year&table=population\" target='map'>$year</a>";
					}
					?>
					</div>
				</div>
				<div class="btn-group">
					<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-right: 10px;">第一产业</button>
					<div class='dropdown-menu'>
					<?php
					for($year=2017;$year>2007;$year--){
						echo "
						<a class='dropdown-item' href=\"bar.php?year=$year&table=pri_industry\" target='map'>$year</a>";
					}
					?>
					</div>
				</div>
				<div class="btn-group">
					<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-right: 10px;">第二产业</button>
					<div class='dropdown-menu'>
					<?php
					for($year=2017;$year>2007;$year--){
						echo "
						<a class='dropdown-item' href=\"bar.php?year=$year&table=sec_industry\" target='map'>$year</a>";
					}
					?>
					</div>
				</div>
				<div class="btn-group">
					<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-right: 10px;">第三产业</button>
					<div class='dropdown-menu'>
					<?php
					for($year=2017;$year>2007;$year--){
						echo "
						<a class='dropdown-item' href=\"bar.php?year=$year&table=ter_industry\" target='map'>$year</a>";
					}
					?>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<iframe style="width: 900px; height: 600px;" src="bar.php?table=gdp&year=2017" frameborder="0" scrolling="auto" id="map" name="map"></iframe>
			</div>
		</div>
	</div>
	<?php require_once '../component/footer.php' ?>
</body>
</html>