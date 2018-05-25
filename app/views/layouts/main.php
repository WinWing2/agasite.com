<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MainPage</title>

    <!-- Bootstrap -->
    <link href="/public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>

<body>

<h1>MainPage</h1>
<ul>
    <li><a href="/">Home</a></li>
    <li><a href="/user/signup">Signup</a></li>
    <li><a href="/user/login">Login</a></li>
    <li><a href="/user/login">Logout</a></li>
</ul>
<?php
echo "<hr><p>layouts-main start</p>";
echo $content;
echo "<p>layouts-main end</p><hr>";
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="/public/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
