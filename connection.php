<?php
    // mysqli_connect(host,username,password,databasename);
    // echo "<pre>";
    $con= mysqli_connect('localhost','root','','php1');
    // if(!$con){
    //     echo "Connection Established";
    // }
    // else{
    //     echo "Somthing went wrong";
    //     echo mysqli_connect_error();
    // }

// -----------------------------------------------------------------------------------------------

    // $sql="create table users(id int(20) primary key, name varchar(25), email varchar(50))";
    // // $sql="drop table php1";
    // // echo mysqli_query($con,$sql);
    // if(mysqli_query($con,$sql)){
    //     echo "Table created";
    // }
    // else{
    //     echo mysqli_error($con);
    // }

// -----------------------------------------------------------------------------------------------

    // $sql="Insert into users(id,name,email) values(1,'Anchal','anchal12@gmail.com')";
    // if(mysqli_query($con,$sql)){
    //     echo "Data inserted successfully";
    // }
    // else{
    //     echo mysqli_error($con);
    // }

// -----------------------------------------------------------------------------------------------

    // $sql="Insert into users(id,name,email) values(2,'Anchal','anchal12@gmail.com');";
    // $sql .="Insert into users(id,name,email) values(3,'Anchal','anchal12@gmail.com');";
    // $sql .="Insert into users(id,name,email) values(4,'Anchal','anchal12@gmail.com');";

    // mysqli_multi_query($con,$sql);

// -----------------------------------------------------------------------------------------------

    // $sql="Insert into users(name,email) values('Anchal','anchal12@gmail.com');";
    // if(mysqli_query($con,$sql)){
    //         echo mysqli_insert_id($con);
    //     }

// -----------------------------------------------------------------------------------------------

    // $sql= "Delete from users where id=2";
    // echo mysqli_query($con,$sql);
    // echo mysqli_affected_rows($con);

// -----------------------------------------------------------------------------------------------

//     $sql="select * from users";
// //    print_r(mysqli_query($con,$sql)) ;
//     $result= mysqli_query($con,$sql);
//     echo mysqli_num_rows($result);
//     echo "<pre>";
    // print_r(mysqli_fetch_all($result,MYSQLI_ASSOC)[0]); this is a print all array---
    // print_r(mysqli_fetch_array($result,MYSQLI_ASSOC)[0]); this is a print only first array--- 

    // print_r(mysqli_fetch_assoc($result));

// -----------------------------------------------------------------------------------------------

//    while($record=mysqli_fetch_assoc($result)){
//     print_r($record);
//    }

// -----------------------------------------------------------------------------------------------

$sql="update users set name='shubhii' where id=3";
mysqli_query($con,$sql);
echo mysqli_affected_rows($con);
?>