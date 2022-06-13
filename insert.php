
<?php

$servername="localhost";
$username="root";
$password="";
$dbname="ebook_shop";
$conn=mysqli_connect($servername,$username,$password,$dbname);

$book_id=$_POST['b_id'];
$book_nm=$_POST['b_nm'];
$book_sub=$_POST['b_subcat'];       //getting all the values posted from the form
$book_desc=$_POST['b_desc'];
$book_pub=$_POST['b_publisher'];
$book_edition=$_POST['b_edition'];
$book_isbn=$_POST['b_isbn'];
$book_page=$_POST['b_page'];
$book_price=$_POST['b_price'];



    if(isset($_POST['submit'])){
        $conn=mysqli_connect($servername,$username,$password,$dbname);

      
        $filename=$_FILES['image']['name'];  //storing image name
        $tempname=$_FILES['image']['tmp_name'];//storing temproray image name 
        // $filename1=$_FILES['pdf']['name']; //storing pdf file and name
        // $tempname1=$_FILES['pdf']['tmp_name'];//storing temproray pdf file name


            $sql="SELECT b_id FROM books WHERE b_id=$book_id"; //checking book id if already exsit
            $result=mysqli_query($conn,$sql);
            $numrows= mysqli_num_rows($result);
            if($numrows>0){
                    echo ' book id already exist';
                    return false;
            }


       
        $conn=mysqli_connect($servername,$username,$password,$dbname);
        if($conn->connect_error){

            die("connection failed");

    }
        
        $image=$_FILES['image']['name']; //storing image in image variable 
        // $pdf=$_FILES['pdf']['name'];    // storing pdf in pdf variable
        


        
        $sql=" INSERT INTO books VALUES('$book_id','$book_nm','$book_sub','$book_desc','$book_pub','$book_edition
        ', '$book_isbn' , ' $book_page' , '$book_price', ' $image ' )"; // using image and pdf variable to insert records in database

                  
        mysqli_query($conn,$sql);

        if(isset($filename)){

            if(!empty($filename)){
                $target_path = 'images/';//specifying server path where the uploaded image is to be stored
                // $target_path1 = 'pdf/'; // specifying server path where the uploaded pdf is to be stored
                if(move_uploaded_file($tempname,$target_path.$filename)){

                    echo '<script>alert("Book added")</script>';
                    echo "<script>window.open('addbooks.php');</script>";

                }//moving uploaded image to specified targeted folder
                else{
                        echo "<h2>error in image</h2>";

                }
                // if(move_uploaded_file($tempname1,$target_path1.$filename1)){

                //     echo "<h2 style='text-align:center'>file uploaded</h2>";
                //     echo "<a href='adminpanel.php' style='text-decoration:none;'><button style='padding:1%; margin-left:48%'> dashboard</button></a>";

                // }//moving uploaded image to specified targeted folder
                // else{
                //         echo 'error in pdf';

                // }

            }

        }



    }

    else{

        echo ' please sumbit the form';
    }
        
  
                                
?>
