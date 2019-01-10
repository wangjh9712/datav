<!DOCTYPE html>
<html style="height: 100%">
   <head>
       <meta charset="utf-8">
   </head>
   <body style="height: 100%; margin: 0">
	   <?php 
	   	$year=$_GET['year'];
	   ?>
       <div id="container" style="height: 100%"></div>
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
            data:<?php echo getFullYearData("house_price","$year");?>,
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
            data:<?php echo getFullYearData("pay","$year");?>,
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
   </body>
</html>