<?php
	$db = new mysqli('localhost','root','','ABET');
	
		// receive all input values from the form
		$Name = mysqli_real_escape_string($db, $_POST['name']);
		$Number = mysqli_real_escape_string($db, $_POST['number']);
        $collage_type = mysqli_real_escape_string($db, $_POST['collage_type']);
        $collage = mysqli_real_escape_string($db, $_POST['collage']);

        $result = $Name . ' ' . $Number;

	// Database connection
	ini_set("display_errors", "1");
	error_reporting(E_ALL);
  


	
	if($db->connect_error){
		echo "$db->connect_error";
		die("Connection Failed : ". $db->connect_error);
	} else {
		
		$query = "INSERT INTO course (name,collage_type,collage) 
  			  VALUES('$result', '$collage_type', '$collage')";
  	mysqli_query($db, $query);
	
		echo "Registration successfully...";
        header('location: index.php');

		$db->close();
  }
	
?>