<?php

@$table = $_GET['t'];
@$year = $_GET['y'];
@$area = $_GET['a'];

//获得数据库连接
function getConn(){
	define('MYSQL_HOST','118.24.119.40');
	define('MYSQL_DB','sjfx');
	define('MYSQL_USER','sjfx');
	define('MYSQL_PW','LnWSD4wFPHTp2S7Z');
	$conn = mysqli_connect(MYSQL_HOST,MYSQL_USER,MYSQL_PW,MYSQL_DB) or die ("Can't Reach The Database!");
	mysqli_query($conn,"set names utf8");
	return $conn;
};

//获得$table数据
function getData($table,$area,$year){
	$conn = getConn();
	if($area == '*'){
		$query = "SELECT `$year` FROM $table";
	}elseif($year == '*'){
		$query = "SELECT * FROM $table WHERE area LIKE '%$area%'";
	}else{
		$query = "SELECT `$year` FROM $table WHERE area LIKE '%$area%'";
	}
	$result = mysqli_query($conn,$query);
	if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){
			echo json_encode($row);
		}
	}else{
		echo '0 Data';
	}
};

function getGeo(){
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
