<?php
    $username = "root";
    $password = "csun_2019";
    $hostname = "localhost";
    
    $dbhandle = mysqli_connect($hostname, $username, $password);
    $selected = mysqli_select_db("website",$dbhandle)
    if(!$dbhandle)
    {
        echo("could not connect to database");
        die();
    }
    //variable declarations
    $myusername = $_POST['user'];
    $mypassword = $_POST['pass'];
    
    //checking for the existing user in mysql
    $query = "SELECT * FROM user WHERE username = '$myusername' and password = '$mypassword'";
    $result = mysqli_query($query);
    $count = mysqli_num_rows($result);
    
    mysqli_close();
    
    if($count==1)
    {
       header("location: login_success.php");
    }else
    {
        echo'Incorrect username or password';
    }
?>
