<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dd2.css">
</head>
<body>
    <h1>Thanks for provding your Information </h1>
    <h2>Our team will connect to you as soon as possible</h2>

    <main>
        <?php
        if($_SERVER["REQUEST_METHOD"]==="POST")
        {
            echo"<h2>Your Personal Information</h2>";
            $firstname=$_POST["firstname"];
            echo"<p>First Name : $firstname</p>";
            $lastname=$_POST["lastname"];
            echo"<p>Last Name : $lastname</p>";
            $mobilenumber=$_POST["mobilenumber"];
            echo"<p>Mobile Number : $mobilenumber</p>";
            $emailaddress=$_POST["emailaddress"];
            echo"<p>E-mail : $emailaddress</p>";
            $country=$_POST["country"];
            echo"<p>Country : $country</p>";
            $pincode=$_POST["pincode"];
            echo"<p>Pin Code : $pincode</p>";
            echo"<h2>Service Inquiry</h2>";
            $servicereq=$_POST["servicereq"];
            echo"<p>Service Required : $servicereq</p>";
            $carmodel=$_POST["carmodel"];
            echo"<p>Car Model : $carmodel</p>";
            $mfyear=$_POST["mfyear"];
            echo"<p>Made Year : $mfyear";

        }
        ?>
        </main>
</body>
</html>