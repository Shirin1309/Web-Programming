<?php
$w=new mysqli("localhost","root","","railway") or die("connection failed");
$q="create table booking(pid int(8) primary key,name varchar(25),address varchar(30),ph int(10),tno int(8),tname varchar(40),date date)";
if($w->query($q)===TRUE)
{
    echo 'successfully created';
}
else
{
    echo 'error'.$w->error;
}
    ?>