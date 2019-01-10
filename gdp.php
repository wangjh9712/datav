<!DOCTYPE html>
<html style="overflow-x: hidden;">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>全国主要城市数据展现 | GDP与三大产业</title>
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
	<div class="container-fluid">
		<div class="row">
			<div class="col text-center jumbotron" style="margin: 0px;">
				<h1 class="display-4">GDP与三大产业</h1>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col">
				<p class="lead">
					采用时间轴的方式，动态的展示了全国主要36个城市的GDP、第一产业、第二产业和第三产业十年来的数据发展趋势
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col" style="margin: 0px;">
				<div id="ContainerBar" style="height:600px; margin: 0"></div>
				<?php require_once 'func.php' ?>
				<script type="text/javascript">
					var DomBar = document.getElementById("ContainerBar");
					var myChartBar = echarts.init(DomBar);
					var appBar = {};
					option = null;
					var dataMap = {};
					function dataFormatter(obj) {
					    var pList = <?php echo getCity(); ?>;
					    var temp;
					    for (var year = 2008; year <= 2017; year++) {
					        var max = 0;
					        var sum = 0;
					        temp = obj[year];
					        for (var i = 0, l = temp.length; i < l; i++) {
					            max = Math.max(max, temp[i]);
					            sum += temp[i];
					            obj[year][i] = {
					                name : pList[i],
					                value : temp[i]
					            }
					        }
					        obj[year + 'max'] = Math.floor(max / 100) * 100;
					        obj[year + 'sum'] = sum;
					    }
					    return obj;
					}
					dataMap.dataGDP = dataFormatter({
					    //max : 60000,
					    2008:<?php echo getFullYearData('gdp','2008'); ?>,
					    2009:<?php echo getFullYearData('gdp','2009'); ?>,
					    2010:<?php echo getFullYearData('gdp','2010'); ?>,
					    2011:<?php echo getFullYearData('gdp','2011'); ?>,
					    2012:<?php echo getFullYearData('gdp','2012'); ?>,
					    2013:<?php echo getFullYearData('gdp','2013'); ?>,
					    2014:<?php echo getFullYearData('gdp','2014'); ?>,
					    2015:<?php echo getFullYearData('gdp','2015'); ?>,
					    2016:<?php echo getFullYearData('gdp','2016'); ?>,
					    2017:<?php echo getFullYearData('gdp','2017'); ?>
					});
					dataMap.dataPI = dataFormatter({
					    //max : 4000,
					    2008:<?php echo getFullYearData('pri_industry','2008'); ?>,
					    2009:<?php echo getFullYearData('pri_industry','2009'); ?>,
					    2010:<?php echo getFullYearData('pri_industry','2010'); ?>,
					    2011:<?php echo getFullYearData('pri_industry','2011'); ?>,
					    2012:<?php echo getFullYearData('pri_industry','2012'); ?>,
					    2013:<?php echo getFullYearData('pri_industry','2013'); ?>,
					    2014:<?php echo getFullYearData('pri_industry','2014'); ?>,
					    2015:<?php echo getFullYearData('pri_industry','2015'); ?>,
					    2016:<?php echo getFullYearData('pri_industry','2016'); ?>,
					    2017:<?php echo getFullYearData('pri_industry','2017'); ?>
					});
					dataMap.dataSI = dataFormatter({
					    //max : 26600,
					    2008:<?php echo getFullYearData('sec_industry','2008'); ?>,
					    2009:<?php echo getFullYearData('sec_industry','2009'); ?>,
					    2010:<?php echo getFullYearData('sec_industry','2010'); ?>,
					    2011:<?php echo getFullYearData('sec_industry','2011'); ?>,
					    2012:<?php echo getFullYearData('sec_industry','2012'); ?>,
					    2013:<?php echo getFullYearData('sec_industry','2013'); ?>,
					    2014:<?php echo getFullYearData('sec_industry','2014'); ?>,
					    2015:<?php echo getFullYearData('sec_industry','2015'); ?>,
					    2016:<?php echo getFullYearData('sec_industry','2016'); ?>,
					    2017:<?php echo getFullYearData('sec_industry','2017'); ?>
					});
					dataMap.dataTI = dataFormatter({
					    //max : 25000,
					    2008:<?php echo getFullYearData('ter_industry','2008'); ?>,
					    2009:<?php echo getFullYearData('ter_industry','2009'); ?>,
					    2010:<?php echo getFullYearData('ter_industry','2010'); ?>,
					    2011:<?php echo getFullYearData('ter_industry','2011'); ?>,
					    2012:<?php echo getFullYearData('ter_industry','2012'); ?>,
					    2013:<?php echo getFullYearData('ter_industry','2013'); ?>,
					    2014:<?php echo getFullYearData('ter_industry','2014'); ?>,
					    2015:<?php echo getFullYearData('ter_industry','2015'); ?>,
					    2016:<?php echo getFullYearData('ter_industry','2016'); ?>,
					    2017:<?php echo getFullYearData('ter_industry','2017'); ?>
					});
					// dataMap.dataEstate = dataFormatter({
					//     //max : 3600,
					//     2008:<?php echo getFullYearData('pay','2008'); ?>,
					//     2009:<?php echo getFullYearData('pay','2009'); ?>,
					//     2010:<?php echo getFullYearData('pay','2010'); ?>,
					//     2011:<?php echo getFullYearData('pay','2011'); ?>,
					//     2012:<?php echo getFullYearData('pay','2012'); ?>,
					//     2013:<?php echo getFullYearData('pay','2013'); ?>,
					//     2014:<?php echo getFullYearData('pay','2014'); ?>,
					//     2015:<?php echo getFullYearData('pay','2015'); ?>,
					//     2016:<?php echo getFullYearData('pay','2016'); ?>,
					//     2017:<?php echo getFullYearData('pay','2017'); ?>
					// });
					// dataMap.dataFinancial = dataFormatter({
					//     //max : 3200,
					//     2008:<?php echo getFullYearData('house_price','2008'); ?>,
					//     2009:<?php echo getFullYearData('house_price','2009'); ?>,
					//     2010:<?php echo getFullYearData('house_price','2010'); ?>,
					//     2011:<?php echo getFullYearData('house_price','2011'); ?>,
					//     2012:<?php echo getFullYearData('house_price','2012'); ?>,
					//     2013:<?php echo getFullYearData('house_price','2013'); ?>,
					//     2014:<?php echo getFullYearData('house_price','2014'); ?>,
					//     2015:<?php echo getFullYearData('house_price','2015'); ?>,
					//     2016:<?php echo getFullYearData('house_price','2016'); ?>,
					//     2017:<?php echo getFullYearData('house_price','2017'); ?>
					// });
					option = {
					    baseOption: {
					        timeline: {
					            // y: 0,
					            axisType: 'category',
					            // realtime: false,
					            // loop: false,
					            autoPlay: true,
					            // currentIndex: 2,
					            playInterval: 1000,
					            // controlStyle: {
					            //     position: 'left'
					            // },
					            data: [
					                '2008','2009','2010','2011','2012', '2013','2014','2015','2016','2017',
					            ],
					            label: {
					                formatter : function(s) {
					                    return (new Date(s)).getFullYear();
					                }
					            }
					        },
					        title: {
					            subtext: '数据来自国家统计局'
					        },
					        tooltip: {
					        },
					        legend: {
					            x: 'right',
					            data: ['GDP','第一产业', '第二产业', '第三产业'/*,'工资', '房价'*/],
					            selected: {
					                'GDP': true, '第一产业': false, '第二产业': false, '第三产业': false
					            }
					        },
					        calculable : true,
					        grid: {
					            top: 80,
					            bottom: 100,
					            tooltip: {
					                trigger: 'axis',
					                axisPointer: {
					                    type: 'shadow',
					                    label: {
					                        show: true,
					                        formatter: function (params) {
					                            return params.value.replace('\n', '');
					                        }
					                    }
					                }
					            }
					        },
					        xAxis: [
					            {
					                'type':'category',
					                'axisLabel':{'interval':0},
					                'data':[
					                    '上海','\n乌鲁木齐','兰州','\n北京','南京','\n南宁','南昌','\n厦门',
					                    '合肥','\n呼和浩特','哈尔滨','\n大连','天津','\n太原','宁波','\n广州',
					                    '成都','\n拉萨','昆明','\n杭州','武汉','\n沈阳','济南','\n海口',
					                    '深圳','\n石家庄','福州','\n西宁','西安','\n贵阳','郑州','\n重庆',
					                    '银川','\n长春','长沙','\n青岛'
					                ],
					                splitLine: {show: false}
					            }
					        ],
					        yAxis: [
					            {
					                type: 'value',
					                name: '金额（亿元）'
					            }
					        ],
					        series: [
					            {name: 'GDP', type: 'bar'},
					            // {name: '工资', type: 'bar'},
					            // {name: '房价', type: 'bar'},
					            {name: '第一产业', type: 'bar'},
					            {name: '第二产业', type: 'bar'},
					            {name: '第三产业', type: 'bar'},
					            // {
					            //     name: 'GDP占比',
					            //     type: 'pie',
					            //     center: ['75%', '35%'],
					            //     radius: '28%',
					            //     z: 100
					            // }
					        ]
					    },
					    options: [
					        {
					            title: {text: '2008全国宏观经济指标'},
					            series: [
					                {data: dataMap.dataGDP['2008']},
					                // {data: dataMap.dataFinancial['2008']},
					                // {data: dataMap.dataEstate['2008']},
					                {data: dataMap.dataPI['2008']},
					                {data: dataMap.dataSI['2008']},
					                {data: dataMap.dataTI['2008']}
					            ]
					        },
					        {
					            title: {text: '2009全国宏观经济指标'},
					            series: [
					                {data: dataMap.dataGDP['2009']},
					                // {data: dataMap.dataFinancial['2009']},
					                // {data: dataMap.dataEstate['2009']},
					                {data: dataMap.dataPI['2009']},
					                {data: dataMap.dataSI['2009']},
					                {data: dataMap.dataTI['2009']}
					            ]
					        },
					        {
					            title: {text: '2010全国宏观经济指标'},
					            series: [
					                {data: dataMap.dataGDP['2010']},
					                // {data: dataMap.dataFinancial['2010']},
					                // {data: dataMap.dataEstate['2010']},
					                {data: dataMap.dataPI['2010']},
					                {data: dataMap.dataSI['2010']},
					                {data: dataMap.dataTI['2010']}
					            ]
					        },
					        {
					            title: {text: '2011全国宏观经济指标'},
					            series: [
					                {data: dataMap.dataGDP['2011']},
					                // {data: dataMap.dataFinancial['2011']},
					                // {data: dataMap.dataEstate['2011']},
					                {data: dataMap.dataPI['2011']},
					                {data: dataMap.dataSI['2011']},
					                {data: dataMap.dataTI['2011']}
					            ]
					        },
					        {
					            title: {text: '2012全国宏观经济指标'},
					            series: [
					                {data: dataMap.dataGDP['2012']},
					                // {data: dataMap.dataFinancial['2012']},
					                // {data: dataMap.dataEstate['2012']},
					                {data: dataMap.dataPI['2012']},
					                {data: dataMap.dataSI['2012']},
					                {data: dataMap.dataTI['2012']}
					            ]
					        },
					        {
					            title: {text: '2013全国宏观经济指标'},
					            series: [
					                {data: dataMap.dataGDP['2013']},
					                // {data: dataMap.dataFinancial['2013']},
					                // {data: dataMap.dataEstate['2013']},
					                {data: dataMap.dataPI['2013']},
					                {data: dataMap.dataSI['2013']},
					                {data: dataMap.dataTI['2013']}
					            ]
					        },
					        {
					            title: {text: '2014全国宏观经济指标'},
					            series: [
					                {data: dataMap.dataGDP['2014']},
					                // {data: dataMap.dataFinancial['2014']},
					                // {data: dataMap.dataEstate['2014']},
					                {data: dataMap.dataPI['2014']},
					                {data: dataMap.dataSI['2014']},
					                {data: dataMap.dataTI['2014']}
					            ]
					        },
					        {
					            title: {text: '2015全国宏观经济指标'},
					            series: [
					                {data: dataMap.dataGDP['2015']},
					                // {data: dataMap.dataFinancial['2015']},
					                // {data: dataMap.dataEstate['2015']},
					                {data: dataMap.dataPI['2015']},
					                {data: dataMap.dataSI['2015']},
					                {data: dataMap.dataTI['2015']}
					            ]
					        },
					        {
					            title: {text: '2016全国宏观经济指标'},
					            series: [
					                {data: dataMap.dataGDP['2016']},
					                // {data: dataMap.dataFinancial['2016']},
					                // {data: dataMap.dataEstate['2016']},
					                {data: dataMap.dataPI['2016']},
					                {data: dataMap.dataSI['2016']},
					                {data: dataMap.dataTI['2016']}
					            ]
					        },
					        {
					            title: {text: '2017全国宏观经济指标'},
					            series: [
					                {data: dataMap.dataGDP['2017']},
					                // {data: dataMap.dataFinancial['2017']},
					                // {data: dataMap.dataEstate['2017']},
					                {data: dataMap.dataPI['2017']},
					                {data: dataMap.dataSI['2017']},
					                {data: dataMap.dataTI['2017']}
					            ]
					        }
					    ]
					};
					if (option && typeof option === "object") {
					    myChartBar.setOption(option, true);
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