<?php
$w=new mysqli("localhost","root","") or die("connection failed");
$q="create database railway";
if($w->query($q)===TRUE)
{
    echo 'successfully created';
}
else
{
    echo 'error'.$w->error;
}
?>