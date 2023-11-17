<?php

if(session_status() === PHP_SESSION_NONE){
    session_start();
}

function language_get_file(){
    $_SESSION['lang'] = $_SESSION['lang'] ?? "fr";
    $_SESSION['lang'] = $_GET['lang'] ?? $_SESSION['lang'];

    return $_SESSION['lang'] . ".php";
}

function __($str){

    global $lang;

    {
        $languageFile = language_get_file();

        if(file_exists($languageFile)){
            include $languageFile;

            if(!empty($lang[$str])){
                return $lang[$str];
            }
        }
    }

    return $str;
}

?>