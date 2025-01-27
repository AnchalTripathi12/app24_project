<?php   
    $email="anchal@gmail.com";
    $id="10a";
    var_dump(filter_var($email,FILTER_VALIDATE_EMAIL));
    var_dump($email);
    echo filter_var($email,FILTER_SANITIZE_STRING);
    var_dump($email);
    echo filter_var($email,FILTER_SANITIZE_NUMBER_INT);
    echo isset($_POST['email'])."<br/>";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=filter_var($_POST['name'],FILTER_SANITIZE_STRING);
    $email=filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
    $ip="127.0.0.1";
    if(empty($name)){
        echo "Name is required";
    }elseif(empty($email)){
        echo "Name is required";
    }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo "Please enter a valid ";
    }elseif(!filter_var($ip,FILTER_VALIDATE_IP)){
        echo "IP Address not valid ";
    }else{
        echo "Ip is valid";
    }
}
?>
<form action="" method="post">
    <input type="text" placeholder="name" name="name">
    <input type="email" placeholder="email" name="email">
<button>Submit</button>
</form>