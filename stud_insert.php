<?php
$w=new mysqli("localhost","root","","student") or die("connection failed");
$q="insert into transport values(101,'Maya','EKM','Private Bus'),(102,'Anu','Aluva','college bus')";
if($w->query($q)===TRUE)
{
    echo 'successfully created';
}
 else    
 {
     echo 'connection failed'.$w->error;
 }

?>
