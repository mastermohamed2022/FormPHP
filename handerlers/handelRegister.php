<?php

 session_start();
include '../core/function.php';
include '../core/validation.php';

$errors = [];

if(checkRequestMethod("POST") && checkPostInput('name')){

foreach($_POST as $key => $value){

     $$key = sanitizeinput($value) ;
    }

    // validations
// name => required , min:3 , max : 25
    if(!requireVal($name)){
        $errors[]= "name is requird";
    }elseif(!minVal($name,3)){
        $errors[]= "name must be greater than 3 chars";
    
    }elseif (!maxnVal($name ,25)){
        $errors[]= "name must be sma;;er than 25 chars";
    }
    
    // validations
// email => required ,email

    if(!requireVal($email)){
        $errors[]= "email is requird";
    }elseif(emailVal($email)){
        $errors[]= "Please type a valid email";
    
    }
// validations
// password => required ,  min:6 , max : 20


    if(!requireVal($password)){
        $errors[]= "password is requird";
    }elseif(!minVal($password,6)){
        $errors[]= "password must be greater than 6 chars";
    
    }elseif (!maxnVal($password,20)){
        $errors[]= "password must be sma;;er than 20 chars";
    }
    






    if(empty($errors)){
        $user_file = fopen("../data/user.csv","a+");
        $data =[$name,$email,shal($password)];
        fputcsv($ $user_file,$data);
        //redirect

        $_SESSION['auth']=[$name,$email];

    }else{
        $_SESSION['errors'] = $errors;
        header("location:../register.php");
        die;
    }


}else{
    echo "not supported";

}