<?php

function get_jersey_no($name)
{
	$products = [
		"Dhoni"=>7,
		"Sachin"=>10,
		"Virat"=>18		
	];
	
	foreach($products as $product=>$jersey_no)
	{
		if($product==$name)
		{
			return $jersey_no;
			break;
		}
	}
}
function get_roll($name)
{
	$products = [
		"Dhoni"=>" Right Hand Batsman",
		"Sachin"=>" Batsman",
		"Virat"=>" Captain"			
	];
	
	foreach($products as $product=>$roll)
	{
		if($product==$name)
		{
			return $roll;
			break;
		}
	}
}
function get_birth_date($name)
{
	$products = [
		"Dhoni"=>" 7 July, 1981",
		"Sachin"=>" 24 April, 1972",
		"Virat"=>" 5 November, 1988"		
	];
	
	foreach($products as $product=>$birth_date)
	{
		if($product==$name)
		{
			return $birth_date;
			break;
		}
	}
}
function get_team_name($name)
{
	$products = [
		"Dhoni"=>" India",
		"Sachin"=>" India",
		"Virat"=>" India"			
	];
	
	foreach($products as $product=>$team_name)
	{
		if($product==$name)
		{
			return $team_name;
			break;
		}
	}
}

?>
