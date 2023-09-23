<?php

function requireVal($input){

    if(empty($input)){
        return false;
    }
    return true;
}
function minVal($input ,$length){

    if(strlen($input) < $length){
        return false;
    }
    return true;
}
function maxnVal($input ,$length){

    if(strlen($input) > $length){
        return false;
    }
    return true;
}

function emailVal($email){

    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        return false;
    }
    return true;
}






