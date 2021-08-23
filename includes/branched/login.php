<?php 

include '../branched/config.php';

$exists = false;
$adminExists = false;

foreach ($user as $username=>$password){
    if($username ===$_POST['username']  && $password === $_POST['password']){
        $exists = true;
        break;
    }
}

foreach($admin as $username=>$password){
    if($username ===$_POST['username']  && $password === $_POST['password']){
        $adminExists = true;
        break;
    }
}
if($exists){
    $_SESSION['user'] = $_POST['username'];
    header("location:" . $appLink . "pages/privateHome.php");
}
else if($adminExists){
    $_SESSION['admin'] = $_POST['username'];
    header("location:" . $appLink . "pages/privateHome.php");
}
else {
    header("location:" . $appLink . "pages/login.php");
}

