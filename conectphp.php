<?php
if(isset($_POST['btn_submit'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];
    $gender=$_POST['gender'];

    echo "This is my Username :".$username."<br/>";
    echo "This is my Email    :".$email."<br/>";
    echo "This is my Password :".$password."<br/>";
    echo "This is my Phone    :".$phone."<br/>";
    echo "This is my Gender   :".$gender."<br/>";

}
 ?>