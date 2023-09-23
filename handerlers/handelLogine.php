<?php
include '../core/function.php';

foreach($_POST as $key => $value){
    $$key = sanitizeinput($value) ;
}

