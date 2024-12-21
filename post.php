<?php
// echo "<pre>";
    // print_r($_POST);
    echo "My name is ".$_POST['name']."<br>";
    echo "My email is ".$_POST['email']."<br>";
    echo "My naPhone Number is ".$_POST['phone']."<br>";
    echo "My message is ".$_POST['message']."<br>";

?>
<style>
    .form{
        height:300px;
        width:300px;
        border:1px solid
    }
</style>
    <form action="" method="post">
<label for="">Name</label>
        <input type="text" name="name">
        <label for="">Email</label>
        <input type="text" name="email">
        <label for="">Phone</label>
        <input type="text" name="phone">
        <label for="">Message</label>
        <input type="text" name="message">

        <input type="submit">
    </form>