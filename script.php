<?php
$conn = mysqli_connect("localhost","root","","contact");
if(!$conn){
    echo"connection failure";
    }
//echo "connection estabilished";
if($_SERVER['REQUEST_METHOD']==='POST')
{
    $a = $b = $c = $d = '' ;

    $a=$_POST['name'];
    $b=$_POST['email'];
    $c=$_POST['subject'];
    $d=$_POST['message'];

    $sql = "INSERT INTO form (name,email,subject,message) VALUES ('$a','$b','$c','$d')";
    mysqli_query($conn, $sql) or die ("query failed");
    echo '<script> alert("data submited")</script>';
    header("Refresh: 1; url=index.php");
    mysqli_close($conn);
}
?>
