<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>用Skeleton写文章</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="css/skeleton.css" rel="stylesheet">
<script type="text/javascript" src="js/echarts.js"></script>
<script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
<style type="text/css">
	p{ text-indent:2em;}
</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="twelve column">
				<h2 style="text-align: center">我是大标题</h2>
			</div>
		</div>
		<div class="row">
			<div class="twelve column">
				<p>
					我是文章的开头部分，文章开头部分很重要，俗话说好的开头……emmmmm什么就成功了一半啥的，就足以说明文章开头部分的重要性了。但是我现在这个开头好像有点短了啊，我应该怎么加点内容呢，欸，要不就这样吧，行那就先这样吧。
				</p>
			</div>
		</div>
		<div class="row">
			<div class="twelve column">
				<h4>1.我是小标题</h4>
				<p>
					常见的文章是不是都是总分总的结构，我先构思一下文章的结构，其实也没什么好构思的，因为我其实只会这一种，还是Old Li教会我的（忽然好想他，欸，我是想他呢还是想高中的生活，我是想高中的生活呢还是沉浸在自己的回忆里？），所以就这么写吧。
				</p>
				<p>
					其实也没什么好写的，我踏马在干嘛啊，我怎么开始写这些废话了啊啊啊啊啊啊啊，我为什么不好写一些关于报告的东西啊啊啊啊啊。难受难受，浪费了这么多时间写这些废话，找十七！你的良心不会痛吗！！！
				</p>
				<p>
					下面这个div就放一个表吧，这样排版好不好啊啊啊啊啊,不好，一点都不好。
				</p>
			</div>
		</div>
		<div class="row">
			<div class="twelve column" id="container" style="height: 600%;"></div>
		    <script type="text/javascript">
		    var dom = document.getElementById("container");
var myChart = echarts.init(dom);
var app = {};
option = null;
app.title = 'GDP';
option = {
	title: {
		text: '城市常驻人口增长率'
	},
    tooltip: {
        trigger: 'axis',
        axisPointer: {
            type: 'cross'
        }
    },
    legend: {
        data:['上海','北京','深圳','广州','重庆','天津','成都','武汉','杭州','南京']
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
            data: ["2008", "2009", "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017"]
        },
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
                        return 'GDP  ' + params.value
                            + (params.seriesData.length ? '：' + params.seriesData[0].data : '');
                    }
                }
            },
        }
    ],
    yAxis: [
        {
            type: 'value'
        }
    ],
    series: [
                    {
                        name:'上海',
                        type:'line',
                        xAxisIndex: 1,
                        smooth: true,
                        data: <?php require_once 'func.php'; echo getYearData('population','上海'); ?>
                    },
                    {
                        name:'北京',
                        type:'line',
                        smooth: true,
                        data: <?php echo getYearData('population','北京'); ?>

                    },
                            {
                        name:'深圳',
                        type:'line',
                        smooth: true,
                        data: <?php echo getYearData('population','深圳'); ?>

                    },
                            {
                        name:'广州',
                        type:'line',
                        smooth: true,
                        data: <?php echo getYearData('population','广州'); ?>

                    },
                            {
                        name:'重庆',
                        type:'line',
                        smooth: true,
                        data: <?php echo getYearData('population','重庆'); ?>

                    },
                            {
                        name:'天津',
                        type:'line',
                        smooth: true,
                        data: <?php echo getYearData('population','天津'); ?>

                    },
                            {
                        name:'成都',
                        type:'line',
                        smooth: true,
                        data: <?php echo getYearData('population','成都'); ?>

                    },
                           {
                        name:'武汉',
                        type:'line',
                        smooth: true,
                        data: <?php echo getYearData('population','武汉'); ?>

                    },
                    {
                        name:'杭州',
                        type:'line',
                        smooth: true,
                        data: <?php echo getYearData('population','杭州'); ?>

                    },
                    {
                        name:'南京',
                        type:'line',
                        smooth: true,
                        data: <?php echo getYearData('population','南京'); ?>

                    }
                ]
};
;

if (option && typeof option === "object") {
    myChart.setOption(option, true);
}
		    </script>
		</div>
		<div class="row">
			<div class="twelve column">
				<p>
					不知道上边放个图感觉怎么样，我还是赶紧弄完这个样式吧，先不在这里废话了啊啊啊啊啊我来凑字数吧我来凑字数吧我来凑字数吧。我来凑字数吧我来凑字数吧我来凑字数吧我来凑字数吧我来凑字数吧我来凑字数吧我来凑字数吧我来凑字数吧我来凑字数吧我来凑字数吧，我来凑字数吧我来凑字数吧我来凑字数吧我来凑字数吧我来凑字数吧我来凑字数吧我来凑字数吧我来凑字数吧。
				</p>
				<p>
					我来凑字数吧我来凑字数吧我来凑字数吧我来凑字数吧,我来凑字数吧我来凑字数吧我来凑字数吧我来凑字数吧我来凑字数吧.我来凑字数吧我来凑字数吧我来凑字数吧,我来凑字数吧我来凑字数吧我来凑字数吧.我来凑字数吧我来凑字数吧我来凑字数吧,我来凑字数吧我来凑字数吧,我来凑字数吧我来凑字数吧.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="twelve column">
				<h4>2.我是第二个小标题</h4>
			</div>
		</div>
		<div class="row">
			<div class="twelve column">
				<p>
					我是凑字数的，我来凑字数，大家先看一看效果我来凑字数吧我来凑字数吧。我来凑字数吧我来凑字数吧我来凑字数吧，我来凑字数吧我来凑字数吧我来凑字数吧我来凑字数吧，我来凑字数吧我来凑字数吧。我来凑字数吧我来凑字数吧我来凑字数吧我来凑字数吧，我来凑字数吧我来凑字数吧，我来凑字数吧我来凑字数吧，我来凑字数吧我来凑字数吧我来凑字数吧我来凑字数吧，我来凑字数吧我来凑字数吧我来凑字数吧。
				</p>
				<p>
					我是凑字数的，我来凑字数，大家先看一看效果我来凑字数吧我来凑字数吧。我来凑字数吧我来凑字数吧我来凑字数吧，我来凑字数吧我来凑字数吧我来凑字数吧我来凑字数吧，我来凑字数吧我来凑字数吧。我来凑字数吧我来凑字数吧我来凑字数吧我来凑字数吧，我来凑字数吧我来凑字数吧，我来凑字数吧我来凑字数吧，我来凑字数吧我来凑字数吧我来凑字数吧我来凑字数吧，我来凑字数吧我来凑字数吧我来凑字数吧。
				</p>
				<p>
					下面又是一个表格啦啦啦啦啦啦啦。
				</p>
			</div>
		</div>
		<div class="row">
			<div class="twelve column">
				<div id="ContainerBar" style="height: 600%"></div>
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
					            // selected: {
					            //     'GDP': false, '工资': false, '房价': false
					            // }
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
			<div class="twelve column">
				<p>
					hhhhhhhhhh,终于完成啦。凑字数凑字数凑字数凑字数凑字数凑字数，凑字数凑字数，凑字数凑字数，，，，，凑字数凑字数凑字数凑字数凑字数，，，凑字数凑字数凑字数凑字数凑字数凑字数凑字数凑字数凑字数凑字数。
				</p>
				<p>
					凑段落啦啦啦啦啦啦啦啦啦啦啦啦啦啦，哈哈哈哈哈哈哈哈6666666.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="twelve column">
				<h4>3.我是小标题</h4>
				<p>
					下面就是哈哈哈哈哈哈哈哈接着凑字数吧，啦啦啦啦啦啦啦啦啦啦啦啦哈哈哈哈哈哈哈哈哈，好了没啦啦啦啦啦啦啦啦。
				</p>
				<p>
					hhhhhhhhhh,终于完成啦。凑字数凑字数凑字数凑字数凑字数凑字数，凑字数凑字数，凑字数凑字数，，，，，凑字数凑字数凑字数凑字数凑字数，，，凑字数凑字数凑字数凑字数凑字数凑字数凑字数凑字数凑字数凑字数。
				</p>
				<p>
					凑段落啦啦啦啦啦啦啦啦啦啦啦啦啦啦，哈哈哈哈哈哈哈哈6666666.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="twelve column">
				<p>
					我是文章的结尾部分，文章结尾部分也很重要，俗话说好的结尾……emmmmm什么就成功了一半啥的，就足以说明文章结尾部分的重要性了。但是我现在这个结尾好像有点短了啊，我应该怎么加点内容呢，欸，要不就这样吧，行那就先这样吧。
				</p>
			</div>
		</div>
	</div>
</body>
</html>