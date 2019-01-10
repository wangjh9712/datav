<!DOCTYPE html>
<html style="overflow-x: hidden;">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>全国主要城市数据展现 | 户籍人口增长率</title>
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="/css/open-iconic-bootstrap.min.css">
<script src="https://cdn.bootcss.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.bootcss.com/echarts/4.2.0-rc.2/echarts.js"></script>
<script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
</head>

<body>
	<?php require_once '/component/header.php' ?>
	<div class="container">
		<div class="row">
			<div class="col" style="margin: 0px;">
				<h1 class="display-4">户籍人口增长率</h1>	
			</div>
		</div>
		<div class="row">
			<div class="col" style="margin: 0px;">
				<div id="containerLine" style="height:600px; margin: 0"></div>
				 <script type="text/javascript">
		    var dom = document.getElementById("containerLine");
				var myChart = echarts.init(dom);
				var app = {};
				option = null;
				app.title = '增长率';
				option = {
					title: {
						text: '户籍人口增长率'
					},
				    tooltip: {
				        trigger: 'axis',
				        axisPointer: {
				            type: 'cross'
				        }
				    },
				    legend: {
				        data:['上海','北京','深圳','广州','重庆','天津','成都','武汉','杭州','南京'],
				        selected: {
					                '重庆': false, '天津': false, '成都': false, '武汉': false, '杭州': false, '南京': false
					            }
				    },
				    grid: {
				        top: 70,
				        bottom: 50
				    },
				    xAxis: [
				        {
				            type: 'category',
				            axisTick: {
				                alignWithLabel: true
				            },
				            axisLine: {
				                onZero: false,
				            },
				            axisPointer: {
				                label: {
				                    formatter: function (params) {
				                        return '增长率  ' + params.value
				                            + (params.seriesData.length ? '：' + params.seriesData[0].data : '');
				                    }
				                }
				            },
				            data: ["2009", "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017"]
				        }
				    ],
				    yAxis: [
				        {
				            type: 'value',
				            name: '%'
				        }
				    ],
				    series: [
			                    {
			                        name:'上海',
			                        type:'line',
			                        smooth: true,
			                        data: <?php require_once 'func.php'; echo getRate('上海'); ?>
			                    },
			                    {
			                        name:'北京',
			                        type:'line',
			                        smooth: true,
			                        data: <?php echo getRate('北京'); ?>
			                    },
			                            {
			                        name:'深圳',
			                        type:'line',
			                        smooth: true,
			                        data: <?php echo getRate('深圳'); ?>
			                    },
			                            {
			                        name:'广州',
			                        type:'line',
			                        smooth: true,
			                        data: <?php echo getRate('广州'); ?>
			                    },
			                            {
			                        name:'重庆',
			                        type:'line',
			                        smooth: true,
			                        data: <?php echo getRate('重庆'); ?>
			                    },
			                            {
			                        name:'天津',
			                        type:'line',
			                        smooth: true,
			                        data: <?php echo getRate('天津'); ?>
			                    },
			                            {
			                        name:'成都',
			                        type:'line',
			                        smooth: true,
			                        data: <?php echo getRate('成都'); ?>
			                    },
			                    {
			                        name:'武汉',
			                        type:'line',
			                        smooth: true,
			                        data: <?php echo getRate('武汉'); ?>
			                    },
			                    {
			                        name:'杭州',
			                        type:'line',
			                        smooth: true,
			                        data: <?php echo getRate('杭州'); ?>
			                    },
			                    {
			                        name:'南京',
			                        type:'line',
			                        smooth: true,
			                        data: <?php echo getRate('南京'); ?>
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