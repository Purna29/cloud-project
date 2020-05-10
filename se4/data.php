<?php

function get_jersey_no($name,$jersey_no)
{
        /* Database INFO */
	$servername = "localhost";
	$username = "vellalap1";
	$password = "81n4br";
	$dbname = "vellalap1_db";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
       }

       $sql = "SELECT jersey_no FROM items2 WHERE name = '$name'";
       $result = $conn->query($sql);

        if($result->num_rows > 0) {
             // output data of each row
             while($row = $result->fetch_assoc()) {
                      $p = $row["jersey_no"];
      }
    } else {
                     $p = null;
        }

    $conn->close();

if ($p == $jersey_no) 
  {
    return "true";
  }
else 
 {
  return "false";

 }

}

function get_roll($name,$roll)
{
        /* Database INFO */
	$servername = "localhost";
	$username = "vellalap1";
	$password = "81n4br";
	$dbname = "vellalap1_db";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
       }

       $sql = "SELECT roll FROM items2 WHERE name = '$name'";
       $result = $conn->query($sql);

        if ($result->num_rows > 0) {
             // output data of each row
             while($row = $result->fetch_assoc()) {
                      $p = $row["roll"];
      }
    } else {
                     $p = null;
        }

    $conn->close();

if ($p == $roll) 
  {
    return "true";
  }
else 
 {
  return "false";

 }

}

function get_birth_date($name,$birth_date)
{
        /* Database INFO */
	$servername = "localhost";
	$username = "vellalap1";
	$password = "81n4br";
	$dbname = "vellalap1_db";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
       }

       $sql = "SELECT birth_date FROM items2 WHERE name = '$name'";
       $result = $conn->query($sql);

        if ($result->num_rows > 0) {
             // output data of each row
             while($row = $result->fetch_assoc()) {
                      $p = $row["birth_date"];
      }
    } else {
                     $p = null;
        }

    $conn->close();

if ($p == $birth_date) 
  {
    return "true";
  }
else 
 {
  return "false";

 }

}

function get_team_name($name,$team_name)
{
        /* Database INFO */
	$servername = "localhost";
	$username = "vellalap1";
	$password = "81n4br";
	$dbname = "vellalap1_db";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
       }

       $sql = "SELECT team_name FROM items2 WHERE name = '$name'";
       $result = $conn->query($sql);

        if ($result->num_rows > 0) {
             // output data of each row
             while($row = $result->fetch_assoc()) {
                      $p = $row["team_name"];
      }
    } else {
                     $p = null;
        }

    $conn->close();

if ($p == $team_name) 
  {
    return "true";
  }
else 
 {
  return "false";

 }

}

?>
