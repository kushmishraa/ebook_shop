<?php
    $servername="localhost";//change
    $username="root";//change
    $password="";//change
    $dbname="ebook_shop";//change
    $conn=mysqli_connect($servername,$username,$password,$dbname);
    if($conn->connect_error){

        die("connection failed");

}


$catname=$_POST['cat_name'];
$catid=$_POST['cat_id'];


$sql="INSERT INTO category VALUES (' $catid ',' $catname ')";

$result=mysqli_query($conn,$sql);
if($result){

    // echo 'category updated';
    echo '<script>alert("New Category added")</script>';
}

?>