<?php
header("Content-Type:application/json");
require "data.php";

if(!empty($_GET['name']) and !empty($_GET['jersey_no']))
{
	$name=$_GET['name'];
	$jersey_no=$_GET['jersey_no'];

	$r1 = get_jersey_no($name,$jersey_no);
	
	if(empty($r1))
	{
		response(200,"Cricketer Not Found",NULL);
	}
	else
	{
		response(200,"Cricketer Found",$r1);
	}	
}
else

if(!empty($_GET['name']) and !empty($_GET['roll']))
{
	$name=$_GET['name'];
	$roll=$_GET['roll'];

	$r2 = get_roll($name,$roll);
	
	if(empty($r2))
	{
		response(200,"Cricketer Not Found",NULL);
	}
	else
	{
		response(200,"Cricketer Found",$r2);
	}	
}
else

if(!empty($_GET['name']) and !empty($_GET['borth_date']))
{
	$name=$_GET['name'];
	$birth_date=$_GET['birth_date'];

	$r3 = get_birth_date($name,$birth_date);
	
	if(empty($r3))
	{
		response(200,"Cricketer Not Found",NULL);
	}
	else
	{
		response(200,"Cricketer Found",$r3);
	}	
}
else

if(!empty($_GET['name']) and !empty($_GET['team_name']))
{
	$name=$_GET['name'];
	$team_name=$_GET['team_name'];

	$r4 = get_team_name($name,$team_name);
	
	if(empty($r4))
	{
		response(200,"Cricketer Not Found",NULL);
	}
	else
	{
		response(200,"Cricketer Found",$r4);
	}	
}
else
{
	response(400,"Invalid Request",NULL);
}

function response($status,$status_message,$data)
{
	header("HTTP/1.1 ".$status);
	
	$response['status']=$status;
	$response['status_message']=$status_message;
	$response['data is correct']=$data;
	
	$json_response = json_encode($response);
	echo $json_response;
}
?>
