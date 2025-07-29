<?php
ini_set('display_error' ,'1');
session_start();
function dbconnect()
{
    static $connect = null;
    if ($connect == null) {
        $connect = mysqli_connect('localhost', 'root', '', 'employees');
        if (!$connect){
            die(''. mysqli_connect_error());
        }
    }
    return $connect;
}