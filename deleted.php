<?php
         $servername="localhost";
         $username="root";
         $password="";
         $dbname="ebook_shop";
         $conn=mysqli_connect($servername,$username,$password,$dbname);
         if($conn->connect_error){
     
             die("connection failed");
     
     }
     


    $bid=$_POST['bid'];
    $sql="DELETE FROM books where b_id=$bid";

    if(mysqli_query($conn,$sql)){

           
            echo "<a href='delete.php' style='text-decoration:none; color:white'><button style='padding:1% ; margin-left:45%; margin-top:5%'> Return to page </button></a>";
            // echo "<script>window.open('admin_dashboard.php')</script>";
    }
    else{

        echo 'error';
    }



?>