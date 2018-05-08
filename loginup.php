<?php

if($_POST){
 
    $email = $_POST['email'];
    $password = $_POST['password'];
    $newpassword  =$_POST['newpassword'];

    if($_POST['password'] && $_POST['email']){
        $sql = mysql_query("select * from table_name where password ==$password && email == $email");
        echo'Login Sucessfully';
    }elseif($_POST['newpassword'] && $_POST['email']) {
        $sql = mysql_query('Insert into table_name(email,password,newpassword) VALUES ($email,$password,$newpassword)');
        echo 'Registration Sucessfully';
    }
}
?>