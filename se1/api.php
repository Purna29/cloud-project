<?php
header("Content-Type:application");
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
		response(NULL,NULL,NULL,NULL);
	}
	else
	{
		response($jersey_no,$roll,$birth_date,$team_name);
	}	
}
else
{
	response(NULL,NULL,NULL,NULL);
}
function response($data1,$data2,$data3,$data4)
{
	header("HTTP/1.1 ");
	
	echo $data1,$data2,$data3,$data4;
}

?>
