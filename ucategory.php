<?php
    $servername="localhost";//change
    $username="root";//change
    $password="";//change
    $dbname="ebook_shop";//change
    $conn=mysqli_connect($servername,$username,$password,$dbname);
    if($conn->connect_error){

        die("connection failed");

}


$catname=$_POST['cat_name1'];
$catid=$_POST['cat_id1'];


$sql="UPDATE category SET cat_name='$catname' WHERE cat_id='$catid'";

$result=mysqli_query($conn,$sql);
if($result){

    // echo 'category updated =>';
    echo '<script>alert("Category Updated")</script>';

    echo "<a style='text-decoration:none;color:black;' href='viewcatg.php'> <button style='padding:1%'> view category </button></a>'";
}
else{
        echo 'error';

}

?>