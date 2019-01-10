<!DOCTYPE html>
<html style="height: 100%;">
   <head>
       <meta charset="utf-8">
   </head>
   <body style="height: 100%; margin: 0">
	   <?php
	      $table=$_GET['table'];
	      $year=$_GET['year'];
	   ?>
	<div id="main" style="height: 100%;width: 100%;z-index: -1"></div>
	<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/echarts.min.js"></script>
	<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts-gl/echarts-gl.min.js"></script>
	<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts-stat/ecStat.min.js"></script>
	<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/extension/dataTool.min.js"></script>
	<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/map/js/china.js"></script>
	<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/map/js/world.js"></script>
	<script type="text/javascript" src="https://api.map.baidu.com/api?v=2.0&ak=ZUONbpqGBsYGXNIYHicvbAbM"></script>
	<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/extension/bmap.min.js"></script>
	<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/simplex.js"></script>
	<script type="text/javascript">
		var dom1 = document.getElementById("main");
		var myChart1 = echarts.init(dom1);
		var app1 = {};
		option1 = null;
		var data1 = <?php require("func.php"); echo getData('$table','$year');?>;
		var geoCoordMap = <?php echo getGeo();?>;


				var convertData = function (data) {
					var res = [];
					for (var i = 0; i < data1.length; i++) {
						var geoCoord = geoCoordMap[data1[i].name];
						if (geoCoord) {
							res.push({
								name: data1[i].name,
								value: geoCoord.concat(data1[i].value)
							});
						}
					}
					return res;
				};

				option1 = {
					title: {
						text: '全国主要城市 - 百度地图',
						subtext: 'data from stats.gov',
						sublink: 'http://www.stats.gov.cn/',
						left: 'center'
					},
					tooltip : {
						trigger: 'item'
					},
					bmap: {
						center: [90.114129, 37.550339],
						zoom: 5,
						roam: true,
						mapStyle: {
							 styleJson: [
									{
										"featureType": "water",
										"elementType": "all",
										"stylers": {
											"color": "#d1d1d1"
										}
									},
									{
										"featureType": "land",
										"elementType": "all",
										"stylers": {
											"color": "#f3f3f3"
										}
									},
									{
										"featureType": "boundary",
										"elementType": "geometry",
										"stylers": {
											"color": "#064f85"
										}
									},
									{
										"featureType": "railway",
										"elementType": "all",
										"stylers": {
											"visibility": "off"
										}
									},
									{
										"featureType": "highway",
										"elementType": "geometry",
										"stylers": {
											"color": "#fdfdfd"
										}
									},
									{
										"featureType": "highway",
										"elementType": "geometry.fill",
										"stylers": {
											"color": "#fff",
											"lightness": 1
										}
									},
									{
										"featureType": "highway",
										"elementType": "labels",
										"stylers": {
											"visibility": "off"
										}
									},
									{
										"featureType": "arterial",
										"elementType": "geometry",
										"stylers": {
											"color": "#fefefe"
										}
									},
									{
										"featureType": "arterial",
										"elementType": "geometry.fill",
										"stylers": {
											"color": "#fefefe"
										}
									},
									{
										"featureType": "poi",
										"elementType": "all",
										"stylers": {
											"visibility": "off"
										}
									},
									{
										"featureType": "green",
										"elementType": "all",
										"stylers": {
											"color": "#056197",
											"visibility": "off"
										}
									},
									{
										"featureType": "subway",
										"elementType": "all",
										"stylers": {
											"visibility": "off"
										}
									},
									{
										"featureType": "manmade",
										"elementType": "all",
										"stylers": {
											"visibility": "off"
										}
									},
									{
										"featureType": "local",
										"elementType": "all",
										"stylers": {
											"visibility": "off"
										}
									},
									{
										"featureType": "arterial",
										"elementType": "labels",
										"stylers": {
											"visibility": "off"
										}
									},
									{
										"featureType": "boundary",
										"elementType": "geometry.fill",
										"stylers": {
											"color": "#fefefe"
										}
									},
									{
										"featureType": "building",
										"elementType": "all",
										"stylers": {
											"color": "#d1d1d1"
										}
									},
									{
										"featureType": "label",
										"elementType": "all",
										"stylers": {
											"visibility": "off"
										}
									}
							]
						}
					},
					series : [
						{
							name: '',
							type: 'effectScatter',
							coordinateSystem: 'bmap',
							data: convertData(data1),
							symbolSize: function (val) {
								return val[2] / 500;
							},
							showEffectOn: 'render',
							rippleEffect: {
								brushType: 'stroke'
							},
							hoverAnimation: true,
							label: {
								normal: {
									formatter: '{b}',
									position: 'right',
									show: false
								},
								emphasis: {
									show: true
								}
							},
							itemStyle: {
								normal: {
									color: 'purple',
									shadowBlur: 3,
									shadowColor: '#fff'
								}
							}
						}  
					]
				};
				if (option1 && typeof option1 === "object") {
					myChart1.setOption(option1, true);
				}
	   </script>
		<div id="container" style="height: 100%;width: 40%;position: absolute;top: 0px;z-index: 1;"></div>
		<script type="text/javascript">
				var dom = document.getElementById("container");
				var myChart = echarts.init(dom);
				var app = {};
				option = null;
				app.title = '中国主要城市 - 条形图';

				option = {
					color: ['purple'],
					title: {
						text: '中国主要城市',
						subtext: '数据来自国家统计局'
					},
					tooltip: {
						trigger: 'axis',
						axisPointer: {
							type: 'shadow'
						}
					},
					legend: {
						<?php echo "data: [$year年]" ?>
					},
					grid: {
						left: '15%',
						right: '4%',
						bottom: '3%',
						containLabel: true
					},
					xAxis: {
						type: 'value',
						boundaryGap: [0, 0.01]
					},
					yAxis: {
						type: 'category',
						data: <?php echo getCity();?>
					},
					series: [
						{
							<?php echo "name: [$year年]" ?>,
							zlevel: 1,
							type: 'bar',
							data: <?php echo getFullYearData("$table","$year");?>
						},
					]
				};
				;
				if (option && typeof option === "object") {
					myChart.setOption(option, true);
				}
		</script>
   </body>
</html>