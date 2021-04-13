<?php
$w=new mysqli("localhost","root","") or die("connection failed");
$q="create database student";
if($w->query($q)===TRUE)
{
    echo 'successfully created';
}
 else    
 {
     echo 'connection failed'.$w->error;
 }

?>
