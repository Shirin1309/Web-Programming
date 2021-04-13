<?php
$w=new mysqli("localhost","root","","student") or die("connection failed");
$q="select * from transport";
$res=$w->query($q);
if($res->num_rows>0)
{
    echo '<table><tr><th>ID</th><th>Name</th><th>Place</th><th>Mode</th></tr>';
    while($w=$res->fetch_assoc())
    {
        echo '<tr><td>'.$w['stud_id'].'</td><td>'.$w['stud_name'].'</td><td>'.$w['stud_place'].'</td><td>'.$w['Mode'].'</td></tr>';
    }
    echo '</table>';
}
