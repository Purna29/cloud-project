<?php
header("Content-Type:application/json");
require "data.php";

if(!empty($_GET['jersey_no']))
{
	$jersey_no=$_GET['jersey_no'];
	$name = get_name($jersey_no);        
	if(empty($name))
	{
		response_name(200,"Cricketer Not Found",NULL,NULL,NULL,NULL);
	}
	else
	{
		response_name(200,"Cricketer Found",$name);
	}	
}
else

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
		response(200,"Crickketer Found",$jersey_no,$roll,$birth_date,$team_name);
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
	$response['Jersey_no']=$d1;
        $response['Roll']=$d2;
        $response['Birth Date']=$d3;
        $response['Team Name']=$d4;
	
	$json_response = json_encode($response);
	echo $json_response;
}

function response_name($status,$status_message,$d1)
{
	header("HTTP/1.1 ".$status);
	
	$response_name['status']=$status;
	$response_name['status_message']=$status_message;
	$response_name['Name of the Cricketer with this jersey number is']=$d1;
       	$json_response_name = json_encode($response_name);
	echo $json_response_name;
}

?>
