<?php
$w=new mysqli("localhost","root","","stock") or die("connection failed");
$q='select * from sample';
$res=$w->query($q);
if($res->num_rows>0)
{
    echo '<table border=1><tr><th>Stock_ID</th><th>Stock_Name</th><th>Type</th><th>Available</th><th>Expiry Date</th></tr>';
    while($u=$res->fetch_assoc())
    {
        echo '<tr><td>'.$u["Itemcode"].'</td><td>'.$u["Item_name"].'</td><td>'.$u["Type"].'</td><td>'.$u["Available"].'</td><td>'.$u["Date_exp"].'</td></tr>';
    }

}
echo"</table>";

$w->close();
?>