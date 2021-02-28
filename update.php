<?php
$w=new mysqli("localhost","root","","stock") or die("connection failed");
$q='update sample set Date_exp="2020/2/28" where Itemcode=102';
if($w->query($q)===TRUE)
{
    echo"successfully updated";
}
else
{
    echo"Connection Error".$w->error;
}
$w->close();
?>