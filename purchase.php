<?php
session_start();
$con=mysqli_connect("localhost","root","","ebook_shop");

if(mysqli_connect_error()){
    
    echo "<script> alert('cannot connect to database'); window.location.href='mycart.php' </script> ";
    exit();
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['purchase']))
    {

        $query1= "INSERT INTO `orders`( `order_date`, `full_name`, `phone_number`,`address`,`mode`) VALUES (now(),'$_POST[fullname]','$_POST[phone_no]','$_POST[address]','$_POST[pay_mode]')";
        if(mysqli_query($con,$query1))
        {
            $order_id=mysqli_insert_id($con);
           $query2=" INSERT INTO `user_orders`(`order_id`, `book_name`, `price`, `quantity`, `user_name`) VALUES (?,?,?,?,?)";
            $stmt=mysqli_prepare($con,$query2);
            if($stmt)
            {
                mysqli_stmt_bind_param($stmt,"isiis",$order_id,$Item_name,$Price,$Quantity,$username);
                foreach($_SESSION['cart'] as $key=>$values)
                {
                    $Item_name=$values['Item_Name'];
                    $Price=$values['Price'];
                    $Quantity=$values['Quantity'];
                    $username= $_SESSION['username'];
                    mysqli_stmt_execute($stmt);
                }
                unset($_SESSION['cart']);
                echo "<script> alert('Order Placed.'); window.location.href='user_dashboard.php' </script> ";
            }
            else
            {
                echo "<script> alert('sql prepared stmt error'); window.location.href='mycart.php' </script> ";
            }
        }
        else
        {
          echo "<script> alert('sql error'); window.location.href='mycart.php' </script> ";
        }
    }
}

?>