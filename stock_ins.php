<?php
$w=new mysqli("localhost","root","","stock") or die("connection failed");
$q='insert into sample values(102,"mixture","dryfry","Yes","2021/03/17")';
if($w->query($q)===TRUE)
{
    echo"successfully created";
}
else
{
    echo"Connection Error".$w->error;
}
$w->close();
?>