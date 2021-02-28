<?php
$w=new mysqli("localhost","root","") or die("connection failed");
$d='create database stock';
if($w->query($d)===TRUE)
{
    echo 'database created successfully with the name stock';
}
else
{
    echo 'error occured'.$w->error;
}
$w->close();
?>
