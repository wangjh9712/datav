<?php
function getConn(){
	//获得数据库连接
	$host = '118.24.119.40';
	$dbname = 'sjfx';
	$dbuser = 'sjfx';
	$password = 'LnWSD4wFPHTp2S7Z';
	$conn = mysqli_connect($host,$dbuser,$password,$dbname) or die ("Can't Reach The Database!");
	mysqli_query($conn,"set names utf8");
	return $conn;
};

function getData($table,$year){
	//获得$table数据对象 for BMap
	$conn = getConn();
	$query = "SELECT * FROM $table";
	$result = mysqli_query($conn,$query);
	$val = array();
	if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){
			$arr['name']=$row['area'];
			$arr['value']=$row[$year];
			array_push($val, $arr);
		}
		return json_encode($val,JSON_UNESCAPED_UNICODE);
	}else{
		return '0 Data';
	}
};

function getGeo(){
	//取得地图坐标JSON对象 for BMap
	$conn = getConn();
	$query = "SELECT * FROM city_location";
	$result = mysqli_query($conn,$query);
	while($row = mysqli_fetch_array($result)){
		$row['lng'] = (float)$row['lng'];
		$row['lat'] = (float)$row['lat'];
		$loc = array($row['lng'],$row['lat']);
		$arr[$row['name']] = $loc;
	}
	return json_encode($arr,JSON_UNESCAPED_UNICODE);
}

function getYearData($table,$area){
	//一个城市在$table中十年的数据数组 for multiple-x-axis
	$conn = getConn();
	$query = "SELECT * FROM $table WHERE area = '$area'";
	$result = mysqli_query($conn,$query);
	while($row = mysqli_fetch_row($result)){
		for($i=1;$i<=10;$i++){
			$arr[] = (float)$row[$i];
		}
	}
	$arr = array_reverse($arr);
	return json_encode($arr,JSON_UNESCAPED_UNICODE);
}

function getFullYearData($table,$year){
	//获得$table数据对象 for mix-timeline
	$conn = getConn();
	$query = "SELECT `$year` FROM $table";
	$result = mysqli_query($conn,$query);
	$val = array();
	if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_row($result)){
			$arr = (float)$row['0'];
			array_push($val, $arr);
		}
		return json_encode($val,JSON_UNESCAPED_UNICODE);
	}else{
		return '0 Data';
	}
}

function getCity(){
	//获得城市列表
	$conn = getConn();
	$query = "SELECT * FROM gdp";
	$result = mysqli_query($conn,$query);
	$val = array();
	if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_row($result)){
			$arr = $row['0'];
			array_push($val, $arr);
		}
		return json_encode($val,JSON_UNESCAPED_UNICODE);
	}else{
		return '0 Data';
	}
}

<<<<<<< HEAD
// $arr = json_decode(getFullYearData('pri_industry','2008'));
// $sum = array_sum(json_decode(getFullYearData('pri_industry','2008')));
// array_push($arr, $sum);
// print_r (json_encode($arr,JSON_UNESCAPED_UNICODE));
=======
function getRate($area){
	//2009-2017 常驻人口增长率
	$conn = getConn();
	$query = "SELECT * FROM population WHERE area = '$area'";
	$result = mysqli_query($conn,$query);
	while($row = mysqli_fetch_row($result)){
		for($i=1;$i<10;$i++){
			$a = (float)$row[$i];
			$b = (float)$row[$i+1];
			$r = -(1 -($a / $b))*100;
			$arr[] = $r;
		}
	}
	$arr = array_reverse($arr);
	return json_encode($arr,JSON_UNESCAPED_UNICODE);
}
>>>>>>> 4c71727c1d375bd4d25cb64dcbd7ea2991062a67
// JSON_FORCE_OBJECT 强行转为obj
//city_location 城市坐标    
//gdp GDP
//house_price 房价
//pay 平均薪资
//population 人口
//pri_industry 第一产业
//sec_industry 第二产业
//ter_industry 第三产业
?>
