<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>36个城市</title>
	<!-- Echart -->
	<script type="text/javascript" src="/js/echarts.js"></script>
	<script type="text/javascript" src="/js/echarts-gl.js"></script>
	<script type="text/javascript" src="/js/macarons.js"></script>
	<!-- ecStat -->
	<script type="text/javascript" src="/js/ecStat.js"></script>

	<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/extension/dataTool.min.js"></script>
	<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/map/js/china.js"></script>
	<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/map/js/world.js"></script>
	<script type="text/javascript" src="https://api.map.baidu.com/api?v=2.0&ak=ZUONbpqGBsYGXNIYHicvbAbM"></script>
	<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/extension/bmap.min.js"></script>
	<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/simplex.js"></script>
</head>
<body style="height: 100%; margin: 0">
	<div id="container" style="height: 100%"></div>
</body>
<script type="text/javascript">
	var dom = echarts.init(dom);
	var app = {};
	option = null;
	var data = <?php require_once 'json.php?t=gdp';?>;
	
</script>
</html>