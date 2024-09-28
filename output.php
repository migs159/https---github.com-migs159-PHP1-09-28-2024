<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email              = $_POST["email"];
    $username           = $_POST ["username"];
    $password           = $_POST ["password"];
    $comfirm_password   = $_POST ["confirm_password"];



    if(trim($username) != ""){
        echo "USER email is". $username. "<br>" ;
    } else{
        echo "field username is empty<br>";
    }
    
    if(trim($email) != ""){
        echo "USER email is not empty<br>"  ;
    } else{
        echo "field email is empty<br>";
        }

    if(trim($password) != ""){
        echo "USER password is not empty<br>"  ;
    } else{
         echo "field password is empty<br>";
        }

    if(trim($email) != ""){
        echo "USER confirm_password is not empty<br>"  ;
        } else{
         echo "field confirm_password is empty<br>";
        }
}








?>