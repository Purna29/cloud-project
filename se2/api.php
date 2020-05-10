<?php
header("Content-Type:application/json");
require "data.php";

if(!empty($_GET['name']))
{
	$name=$_GET['name'];
	$jersey_no = get_jersey_no($name);
        $roll = get_roll($name);
        $birth_date = get_birth_date($name);
        $team_name = get_team_name($name);
	
	if(empty($jersey_no))
	{
		response(200,"Cricketer Not Found",NULL,NULL,NULL,NULL);
	}
	else
	{
		response(200,"Cricketer Found",$jersey_no,$roll,$birth_date,$team_name);
	}	
}
else
{
	response(400,"Invalid Request",NULL,NULL,NULL,NULL);
}

function response($status,$status_message,$d1,$d2,$d3,$d4)
{
	header("HTTP/1.1 ".$status);
	
	$response['status']=$status;
	$response['status_message']=$status_message;
	$response['Jersey Number']=$d1;
        $response['Roll']=$d2;
        $response['Birth Date']=$d3;
        $response['Team Name']=$d4;
	
	$json_response = json_encode($response);
	echo $json_response;
}

?>
