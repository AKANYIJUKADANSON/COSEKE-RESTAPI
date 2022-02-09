<?php
    include('config.php');

    //Capturing data from the user
    if(isset($_POST['register'])){

        //Validating data
        if(empty($_POST['fname'])){
            echo "Please enter your first name";
        }
        elseif(empty($_POST['lname'])){
            echo "Please enter your last name";
        }
        elseif(empty($_POST['age'])){
            echo "Please enter your age";
        }
        else{
            $firstName = $_POST['fname'];
            $lastName = $_POST['lname'];
            $age = $_POST['age'];


            //Storing data
            $storage = "INSERT INTO storeuserdata_tbl(firstname,lastname, age) VALUE('$firstName', '$lastName','$age')";

            $query = mysqli_query($connection, $storage);
            if(!$query){
                // if storage is uncomplete, then display an error message
                echo $errorMsg;
            }else{
                // Grant access to home page
                header('location:activity.html');
            }
        }        
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StoreData</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <fieldset>
        <form action="index.php" method="POST">
            <h1>REGISTER</h1>
            <br>
            <input type="text" name="fname" placeholder="Enter your first name">
            <br>

            <input type="text" name="lname" placeholder="Enter your  last name">
            <br>

            <input type="text" name="age" placeholder="Enter your age">
            <br>

            <input type="submit" name="register" value="Register">
            
        </form>
    </fieldset>
</body>
</html>