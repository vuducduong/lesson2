<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style type="text/css">
    login{
        height:180px;width:230px;
        margin: 0;
        padding: 10px;
        border: 1px #CCC solid;
    }
    .login input{
        padding:5px; margin:5px;
    }
</style>
<body>
<form method="post">
    <div class="login">
        <h2>Login</h2>
        <input type="text" name="username" size="30" placeholder="username"/>
        <input type="password" name="password" size="30" placeholder="password"/>
        <input type="submit" value="Sign in"/>
    </div>
    <?php
   if($_SERVER["REQUEST_METHOD"]=="POST") {
       $username = $_REQUEST["username"];
       $password = $_REQUEST["password"];
       if ($username === "admin" && $password === "admin") {
           echo "welcome " . $username . " to website";
       } else {
           echo "login error";
       }
   }

    ?>
</form>
</body>
</html>
<?php


