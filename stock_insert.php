<?php
$w=new mysqli("localhost","root","","stock") or die("connection failed");
$q='create table sample(Itemcode int(5) primary key,Item_name varchar(25),Type varchar(20),Available varchar(10) NOT NULL,Date_exp date)';
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
