<?php
	include_once 'rConnect.php';

?>


<?php
	$name 			= $_POST["field1"];
	$email			= $_POST["field2"];
	$telno 			= $_POST["field3"];
	$checkin		= $_POST["field4"];
	$checkout 		= $_POST["field5"];
	$no_of_guests	= $_POST["field6"];

	
	$sql = "insert into accomadation(Name ,E-mail,Phone_Number ,check_in,check_out,Number_Of_Guests)values('$name ','$email','$telno ','$checkin','$checkout','$no_of_guests')";        //insert data query
	
	if(mysqli_query($conn,$sql)){
		echo "<script>alert('Record inserted succefully')</script>";
	}
	else{
		echo "<script>alert('ERROR in inserting')</script>";
	}
	mysqli_close($conn);
?>