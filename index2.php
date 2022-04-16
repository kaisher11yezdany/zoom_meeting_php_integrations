<?php
include('config.php');
include('api.php');
$arr['topic']='Test ramneesh';
$arr['start_date']=date('2022-05-16 24:00:00');
$arr['duration']=30;
$arr['password']='123456789';
$arr['type']='2';
$result=createMeeting($arr);
if(isset($result->id)){
	echo "Join URL: <a href='".$result->join_url."'>".$result->join_url."</a><br/>";
	echo "Password: ".$result->password."<br/>";
	echo "Start Time: ".$result->start_time."<br/>";
	echo "Duration: ".$result->duration."<br/>";
}else{
	echo '<pre>';
	print_r($result);
}
?>