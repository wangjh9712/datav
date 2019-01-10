<!DOCTYPE html>
<html style="overflow-x: hidden;">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>全国主要城市数据展现</title>
  <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="/css/open-iconic-bootstrap.min.css">
<script src="https://cdn.bootcss.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
	<?php require_once '/component/header.php' ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col text-center jumbotron" style="margin: 0px;">
				<span style="font-size: 300px;">🌏</span>
				<h1 class="display-4">全国主要城市数据展现</h1>
				<h4>GDP与三大产业</h4>
				<h3>人均工资与房价</h3>
				<h2>常驻人口增长率</h2>
			</div>
		</div>
		<div class="row" clearfix style="vertical-align: middle;">
			<div class="col" style="background-color: #000; height: 400px;">
				<h1>地图展示</h1>
			</div>
			<div class="col" style="background-color: #033; height: 400px;">
				<h1>常驻人口增长率</h1>
			</div>
			<div class="col" style="background-color: #066; height: 400px;">
				<h1>GDP与三大产业</h1>
			</div>
			<div class="col" style="background-color: #099; height: 400px;">
				<h1>人均工资与房价</h1>
			</div>
		</div>
	</div>
	<?php require_once '/component/footer.php' ?>
</body>
</html>