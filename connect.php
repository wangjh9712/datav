<?php

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
function getData($table){
	$conn = getConn();
	$query = "SELECT * FROM $table";
	$result = mysqli_query($conn,$query);
	$rows = array();
	if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){
			$rows[] = $row;
		}
		return $rows;
	}else{
		return '0 Data';
	}
	
};

//将getData()得到的数据化为json
function getJson($table){
	$data = getData($table);
	echo json_encode($data);
}

//getJson('city_location');
//city_location 城市坐标
//gdp GDP
//house_price 房价
//pay 平均薪资
//population 人口
//pri_industry 第一产业
//sec_industry 第二产业
//ter_industry 第三产业

?>