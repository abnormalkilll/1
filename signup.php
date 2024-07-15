<?php
session_start();
include("connection.php");
include("functions.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {
        $user_id = random_num(20);
        $query = "insert into users (user_id, user_name, password) values ('&user_id', '&user_name', '&password')";
        mysqli_query($con, $query);
        header("location: login.php");
        die;
    }else{
        echo "PLease Enter Some Valid Information!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
</head>
<body>
    <style>
        #text{
            height: 25;
            border-radius: 5px;
            padding: 4px;
            border: solid thin #aaa;
        }
        #button{
            padding: 10px;
            width: 100px;
            color: while;
            background-color: lightblue;
            border: none;
        }
        #box{
            background-color: grey;
            margin: auto;
            width: 300px;
            padding: 20px;
        }
    </style>

    <div id="box">
        <form method="post">
            <div style="font-size: 20px;margin: 100px;color: white;">Signup</div>

            <input id="text" type="text" name="user_name"><br><br>
            <input id="text" type="password" name="password"><br><br>
            <input id="button" type="submit" value="Signup"><br><br>

            <a href="login.php">Already have Account</a><br><br>
        </form>
    </div>
</body>
</html>