<?php
if(isset($_POST['name'])){
    // // Set connection variables
    $server = "sql210.unaux.com";
    $username = "unaux_29969394";
    $password = "1237898792951Sanket";

    // $server = "localhost";
    // $username = "root";
    // $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $mobile = $_POST['mobile'];
    $name = $_POST['name'];
	$email = $_POST['email'];
	$orderdetails = $_POST['orderdetails'];
	$sql = "INSERT INTO `clickograph`.`Orders` (`Mobile`,`Name`, `Email`, `OrderDetails`) VALUES ('$mobile','$name', '$email', '$orderdetails');";
    // echo $sql;

    //Execute the query
    if(mysqli_query($con, $sql)){
        // echo "Successfully inserted";
        // Flag for successful insertion
        if($insert = true){
            echo '<script>alert("Thankyou For Submission!");</script>';
            echo '<script>window.location="contact.html"</script>';
        }
        }
    else{
            echo "ERROR: $sql <br> $con->error";
        }
    
    // Close the database connection
    $con->close();
	}
?>