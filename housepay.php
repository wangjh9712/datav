<!DOCTYPE html>
<html style="overflow-x: hidden;">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>全国主要城市数据展现 | 人均工资与房价</title>
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="/css/open-iconic-bootstrap.min.css">
<script src="https://cdn.bootcss.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
	
</style>
</head>
<body>
</head>

<body>
	<?php require_once '/component/header.php' ?>
	<div class="container">
		<div class="row">
			<div class="col" style="margin: 0px;">
				<h1 class="display-4">人均工资与房价</h1>
			</div>
		</div>
		<div class="row" style="margin: 10px;">
			<div class="col text-center">
				<div class="btn-group" role="group" aria-label="Basic example">
					<?php
					for($year=2017;$year>2007;$year--){
						echo "
						<a href=\"housepay?year=$year\" style=\"margin-right: 10px;\"><button type=\"button\" class=\"btn btn-secondary\">$year</button></a>";
					}
					?>
				</div>
			</div>
		</div>
		<div class="row" style="height:600px; margin: 0">
			<div class="col" style="margin: 0px;">
				 <?php	$year=$_GET['year']; ?>
       <div id="container" style="height: 100%"></div>
       <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/echarts.min.js"></script>
<!--
       <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts-gl/echarts-gl.min.js"></script>
       <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts-stat/ecStat.min.js"></script>
       <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/extension/dataTool.min.js"></script>
       <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/map/js/china.js"></script>
       <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/map/js/world.js"></script>
       <script type="text/javascript" src="https://api.map.baidu.com/api?v=2.0&ak=ZUONbpqGBsYGXNIYHicvbAbM"></script>
       <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/extension/bmap.min.js"></script>
       <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/simplex.js"></script>
-->
       <script type="text/javascript">
			var dom = document.getElementById("container");
			var myChart = echarts.init(dom);
			var app = {};
			option = null;
			option = {
				title : {
					text: '中国主要城市房价（元/平方米）和工资（元/年）',
					subtext: '来源国家统计局'
				},
				tooltip : {
					trigger: 'axis'
				},
				legend: {
					data:['GDP','人口']
				},
				toolbox: {
					show : true,
					feature : {
						dataView : {show: true, readOnly: false},
						magicType : {show: true, type: ['line', 'bar']},
						restore : {show: true},
						saveAsImage : {show: true}
					}
				},
				calculable : true,
				xAxis : [
					{
						type : 'category',
						data : <?php require("func.php"); echo getCity();?>
					}
				],
				yAxis : [
					{
						type : 'value'
					}
				],
				series : [
					{
						name:'房价',
						type:'bar',
						data:<?php echo getFullYearData("house_price",$year);?>,
						markPoint : {
							data : [
								{type : 'max', name: '房价最高'},
								{type : 'min', name: '房价最低'}
							]
						},
						markLine : {
							data : [
								{type : 'average', name: '房价平均值'}
							]
						}
					},
					{
						name:'工资',
						type:'bar',
						data:<?php echo getFullYearData("pay",$year);?>,
						markPoint : {
							data : [
								{type:'max', name: '工资最高'},
								{type:'min', name: '工资最少'}
							]
						},
						markLine : {
							data : [
								{type : 'average', name : '工资平均值'}
							]
						}
					}
				]
			};
			;
			if (option && typeof option === "object") {
				myChart.setOption(option, true);
			}
		</script>
			</div>
		</div>
		<div class="row">
			<div class="col">
				描述
			</div>
		</div>
	
	
	
	</div>
	<?php require_once '/component/footer.php' ?>
</body>
</html>