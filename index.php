<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Government Portal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="4.jpeg" alt="sand truck"> 
    <div class= "container">
        <h1><b>Welcome to Government Portal for Sand Merchandiser</b></h1> 
        <hr>
        <p><u>New User Registration</u></p>
        <br>
        <p><i>Enter your Details to Book your Sand Truck</i></p>
        <hr>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter Customer's Name here :">
            <input type="email" name="email" id="email" placeholder="Customer's Email :">    
            <input type="number" name="phone" id="phone" placeholder="Enter Customer's Contact Number :">
            <input type="number" name="aadhar" id="aadhar" placeholder="Enter Customer's Aadhar Number for Authentication :">
            <input type="text" name="address" id="address" placeholder="Enter Customer's Destination here :">
            <textarea name="desc" id="desc" cols="30" rows="7" placeholder="Share any other information with us here:"></textarea>
            <button class="btn">Submit</button>
            <!--<button class="btn">Reset</button>-->
        </form>
    </div>
    <script src="index.js"></script>
    <!--INSERT INTO `mysand` (`sno`, `name`, `email`, `mobno`, `aadharno`, `address`, `date`) VALUES ('1', 'test name', 'testmail@gmail.com', '1234567890', '123456789012', 'test address', current_timestamp()); -->
</body>
</html>

<?php

    #$server = "localhost";
    #$username = "root";
    #$password = 'root';
    #$port = "3307";
    
    #define("DB_HOST", "localhost:3306");
    #define("DB_USER", "root");
    #define("DB_PASSWORD", "");
    #define("DB_DATABASE", "my_sandp");

    $con=mysqli_connect("localhost", "root", "", "my_sandp");

    #$con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("Connection to this Database failed due to" . mysqli_connect_error());
    }

// INSERTING DATA TO DATABASE USING QUERY
    $name = isset($_POST['name']);
    $email = isset($_POST['email']);
    $phone = isset($_POST['phone']);
    $aadharno = isset($_POST['aadharno']);
    $address = isset($_POST['address']);
    $des = isset($_POST['des']);
    
    #$query=mysqli_query($con,"insert into sanduser(name,email,phone,aadhar,address,desc) value('$name','$email','$phone','$aadhar','$address','$desc')");
    $query= "INSERT INTO `my_sandp`.`sanduser` (`name`, `email`, `phone`, `aadharno`, `address`, `des`, `date`) VALUES ('$name','$email','$phone','$aadharno','$address','$des', current_timestamp())";
    
    #echo $query; 
    if($con->query($query) == true) {
        echo "successfully Inserted";
    }
    else{
        echo "Error :$query <br> $con->error";
    }
    $con->close();

    #if ($query) {
     #   $msg="Users Detail has been added.";
      #}
      #else
       # {
        #  $msg="Something Went Wrong. Please try again";
        #}

?>