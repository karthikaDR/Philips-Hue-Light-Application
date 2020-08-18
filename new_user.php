<?php
    $username = "root";
    $password = "csun_2019";
    $hostname = "localhost";
    
    $dbhandle = mysqli_connect($hostname, $username, $password);
    $selected = mysqli_select_db("website",$dbhandle);
    
    //adding to the database
    if(isset($_POST['user']) && isset($_POST['pass']))
    {   $user = $_POST['user'];
        $pass = $_POST['pass'];
        mysqli_query("INSERT INTO user(username, password) VALUES('$user', '$pass')");
        //messege
        echo("User created successfully");
    }
    
    mysqli_close();
?>

<html>
    <body>
        <h1>Signup!</h1>
        <form action= "new_user.php" method= "POST">
            <p>Username:</p><input type= "text" name="user"/>
            <p>Password:</p><input type= "password" name="pass"/>
            <input type= "submit" value= "Signup"/>
        </form>
    </body>
</html>