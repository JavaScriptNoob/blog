<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
<form   method="get" >
    <input type="submit" name="quit" value="quit">
</form>
<?php
session_start();

if ( isset($_GET["quit"])||strlen($_SESSION['name'])<1){
    unset($_SESSION["name"]);
    session_destroy();
    header("Location:login.php");



}else{
    echo $_SESSION['name'];

}


?>

</body>
</html>