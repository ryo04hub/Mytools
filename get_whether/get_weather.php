<?php
//市川市の現在の天気を表示する
$url = 'http://api.openweathermap.org/data/2.5/weather?q=ichikawa,jp&units=metric&APPID=ecce1515541589457882afdef077bd71';
$weather = json_decode(file_get_contents($url), true);

$weatherShow = '
<div>%sの天気</div>
<div>天気:%s</div>
<div>天気詳細:%s</div>
<div><img src="http://openweathermap.org/img/w/%s.png" style="width:200px"></div>
<div>温度:%s 度</div>
<div>湿度:%s パーセント</div>
<div>風速:%sメートル</div>';

//上記の%s（strin型）に、$whetherの値を、順番に格納する
echo sprintf($weatherShow, $weather['name'], $weather['weather'][0]['main'], $weather['weather'][0]['description'], $weather['weather'][0]['icon'], $weather['main']['temp'], $weather['main']['humidity'], $weather['wind']['speed']);

//配列の中身を確認する（テスト用）
echo "<pre>";
var_dump($weather);
echo "</pre>";

?>
