<?php
ini_set('display_error' ,'1');

function dbconnect()
{
    static $connect = null;
    if ($connect == null) {
        $connect = mysqli_connect('localhost', 'root', '', 'blabla');
        if (!$connect){
            die(''. mysqli_connect_error());
        }
    }
    return $connect;
}