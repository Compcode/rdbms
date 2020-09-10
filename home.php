<?php

    include('connect.php');
    
    $user_name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $password = $_POST['pass'];
    
    $sql = "INSERT INTO registration(user_name,email,contact,password)
            VALUES('$user_name','$email','$contact','$password')";

    $sql2 = "INSERT INTO login(email,password) VALUES('$email','$password')";
    
            
    if(!mysqli_query($con,$sql))
    {
        echo "No data was saved";
    }

    if(!mysqli_query($con,$sql2))
    {
        echo "";
    }

    else
    {
        echo "You have been registered";
    }
    
    header("refresh:3; url=login.html");
    
    ?>