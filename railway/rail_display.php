<html>
    <head>
        <link rel="stylesheet" type="text/css" href="railway.css">
        <style>
            h1{
                 background-color:tomato;
                 color:white;
                 font-style:oblique;
                 font-family:verdana;
            }
         table{
             background-color:teal;
             padding:10px;
             color:white;
         }
                </style>

        </head>
    <body><center>
       <h1>BOOKING LIST</h1></center>


<?php
$w=new mysqli("localhost","root","","railway") or die("connection failed");
$q="select pid,name,tno,tname,date from booking";
$r=$w->query($q);
if($r->num_rows>0)
{
    echo '<center><table border="1"><tr><th>PID</th><th>NAME</th><th>TRAIN NO:</th><th>TRAIN NAME</th><th>DATE OF JOURNEY</th></tr>';
    while($u=$r->fetch_assoc())
    {
        echo '<tr><td>'.$u["pid"].'</td><td>'.$u["name"].'</td><td>'.$u["tno"].'</td><td>'.$u["tname"].'</td><td>'.$u["date"].'</td></tr>';

    }
    echo '</table></center>';
}
?>
<center>
       <a href="railway.php">BOOK A TICKET</a></center>
    </body>
</html>
