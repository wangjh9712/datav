<!DOCTYPE html>
<html style="overflow-x: hidden;">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>全国主要城市数据展现</title>
  <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="/css/open-iconic-bootstrap.min.css">
  <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.bootcss.com/twitter-bootstrap/4.2.1/js/bootstrap.bundle.min.js"></script>
	<style>
		.info-content{background-color: #fff;box-shadow:2px 2px 3px 2px #ccc;margin: 0 0 20px 0;}
	</style>
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
				<h2>户籍人口增长率</h2>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row " clearfix style="vertical-align: middle; text-align: center;margin-top: 40px;">
			<div class="col-lg-5 info-content" style="width：10px">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>地图</h2>
            <p>地图与柱状图相结合展示了全国主要36个城市的GDP、第一产业、第二产业、第三产业、人均工资、房价和户籍人口增长密度的2008——2017的详细数据。</p>
            <p><a class="btn btn-secondary" href="/map.php" role="button">View details »</a></p>
          </div><!-- /.col-lg-5 -->
			<div class="col-lg-2"></div>
          <div class="col-lg-5 info-content">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>GDP与三大产业</h2>
            <p>采用时间轴的方式，动态的展示了全国主要36个城市的GDP、第一产业、第二产业和第三产业十年来的数据发展趋势。</p>
            <p><a class="btn btn-secondary" href="/gdp.php" role="button">View details »</a></p>
          </div><!-- /.col-lg-5 -->
		</div>
		<div class="row" clearfix style="vertical-align: middle; text-align: center">
          <div class="col-lg-5 info-content">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>人均工资与房价</h2>
            <p>使用柱状图和折线图两种类型相结合的方式,展示了全国主要36个城市的房价和工资的详细数据以及之间的关系。</p>
            <p><a class="btn btn-secondary" href="/housepay.php" role="button">View details »</a></p>
          </div><!-- /.col-lg-5 -->
			<div class="col-lg-2"></div>
		<div class="col-lg-5 info-content">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>户籍人口增长率</h2>
            <p>采用折线图展示了36个城市中2017年GDP总数排名前十城市十年来的人口增长率变化。</p>
            <p><a class="btn btn-secondary" href="/popu.php" role="button">View details »</a></p>
          </div><!-- /.col-lg-5 -->
		</div>
	</div>
	<?php require_once '/component/footer.php' ?>
</body>
</html>