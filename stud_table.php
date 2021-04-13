<?php
$w=new mysqli("localhost","root","","student") or die("connection failed");
$q="create table transport(stud_id int(10) primary key,stud_name varchar(25),stud_place varchar(25),Mode varchar(20) NOT NULL)";
if($w->query($q)===TRUE)
{
    echo 'successfully created';
}
 else    
 {
     echo 'connection failed'.$w->error;
 }

?>
