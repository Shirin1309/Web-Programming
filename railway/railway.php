<html>
    <head>
        <title>Railway Ticket Reservation</title>
        <link rel="stylesheet" type="text/css" href="railway.css">
        <style>
            h1{
                background-color: seagreen;
                font-family: sans-serif;
                font-style: italic;
            }
            table{
                background-color:teal;
                padding: 10px;
                font-style: oblique;
            }
            th{
                color:wheat;
            }
            a{
                background-color:green;
            }
        </style>
    </head>
    <body>
        <marquee bgcolor=cyan>New 2 trains to Delhi are launched!!!!!!!!!</marquee>
        <center>
            <h1>RAILWAY TICKET RESERVATION
            </h1>
            <br><br><br>
            <DIV>
                <form action='' method='POST'>
                    <table border=1>
                        <tr><th>PERSON ID</th><td><input type="number" name="num" ></td></tr>
                        <tr><th>NAME</th><td><input type="text" name="name" id="name"></td></tr>
                        <tr><th>ADDRESS</th><td><textarea name="address"></textarea></td></tr>
                        <tr><th>PH NO</th><td><input type="number" name="ph" id="ph"></td></tr>
                        <tr><th>TRAIN No:</th><td><input type="number" name="tno" ></td></tr>
                        <tr><th>TRAIN NAME</th><td><input type="text" name="tname" ></td></tr>
                        <tr><th>DATE OF JOURNEY</th><td><input type="date" name="tdate"></td></tr>
                        <tr><th colspan="2"><input type="submit" name="go" value="RESERVE" onclick="valid()"></th></tr>
                    </table>
                </form>
            </DIV>
        </center>
        <script>
            function valid()
            {
                var a=document.getElementById("name").value;
                var b=/^[a-z A-Z]+$/
                var p=document.getElementById("ph").value;
                var q=/^(7|8|9)\d{9}/
                if(a=="")
                {
                    alert("Enter Name!!!!");
                    document.getElementById("name").focus();
                    return false;
                }
                else{

                if(a.match(b))
                {

                }
                else
                {
                    alert("Enter valid name");
                    document.getElementById("name").focus();
                    return false;
                }
             }
             if(p=="")
             {
                 alert("Enter phone no!!!!");
                 document.getElementById("ph").focus();
                 return false;
             }
             else
             {
                 if(q.test(p))
                 {

                 }
                 else
                 {
                    alert("Enter valid ph no!!!");
                    document.getElementById("ph").focus();
                    return false;
                 }
             }
            }
                
        </script>
        <center><a href="rail_display.php">DISPLAY</a></center>
    </body>
</html>
<?php
$w=new mysqli("localhost","root","","railway") or die("connection failed");
if(isset($_POST['go']))
{
    $pid=$_POST["num"];
    $n=$_POST["name"];
    $a=$_POST["address"];
    $p=$_POST["ph"];
    $tno=$_POST["tno"];
    $tname=$_POST["tname"];
    $d=$_POST["tdate"];
    $q="insert into booking values($pid,'$n','$a',$p,$tno,'$tname','$d')";
    if($w->query($q)===TRUE)
    {
    echo 'successfully inserted';
    }
    else
    {
    echo 'error'.$w->error;
    }
}
?>

