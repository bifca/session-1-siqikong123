<?php

require_once("wx_http_request.php");
header("Content-type: application/json; charset=utf-8");
$params = array(
    'city' => 'wuhan',
    'appkey' => '2a238a6217dbf76ff459e868c871d5d5'
  );
$url = 'https://way.jd.com/he/freeweather';
echo wx_http_request($url, $params );

//function tian(){
//$city=$_GET['city']; //接收城市名

//$url="http://wthrcdn.etouch.cn/weather_mini?city=北京市".$city;
//$str = file_get_contents($url);  //调用接口获得天气数据
//这一步很重要
//$result= gzdecode($str);   //解压
//end
//echo  $result;


//tian();





?>
