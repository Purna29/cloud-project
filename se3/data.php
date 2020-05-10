<?php

function get_jersey_no($name)
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

        if ($result->num_rows > 0) {
             // output data of each row
             while($row = $result->fetch_assoc()) {
                      $jersey_no = $row["jersey_no"];
      }
    } else {
                     $jersey_no = null;
        }

    $conn->close();

    return $jersey_no;
}

function get_name($jersey_no)
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

       $sql = "SELECT name FROM items2 WHERE jersey_no = '$jersey_no'";
       $result = $conn->query($sql);

        if ($result->num_rows > 0) {
             // output data of each row
             while($row = $result->fetch_assoc()) {
                      $name = $row["name"];
      }
    } else {
                     $name = null;
        }

    $conn->close();

    return $name;
}


function get_roll($name)
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
                      $roll = $row["roll"];
      }
    } else {
                     $roll = null;
        }

    $conn->close();

    return $roll;
}

function get_birth_date($name)
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
                      $birth_date = $row["birth_date"];
      }
    } else {
                     $birth_date = null;
        }

    $conn->close();

    return $birth_date;
}

function get_team_name($name)
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
                      $team_name = $row["team_name"];
      }
    } else {
                     $team_name = null;
        }

    $conn->close();

    return $team_name;
}


?>
