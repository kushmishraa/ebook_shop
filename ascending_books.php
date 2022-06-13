<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Ascending Books</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Lato"
      rel="stylesheet"
      type="text/css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="user_dashboard_css.css" media="all" rel="Stylesheet" type="text/css" />
    <style></style>
  </head>
  <body>

    
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button
            type="button"
            class="navbar-toggle"
            data-toggle="collapse"
            data-target="#myNavbar"
          >
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" style="color: #fff">BIBLIOMAC</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <!-- <li><a href="user_dashboard.php">HOME</a></li> -->
            <li><a href="user_dashboard.php" style="color: #fff">ALL BOOKS</a></li>
            <li class="nav-item dropdown">
              <!-- <a
                class="nav-link dropdown-toggle"
                id="navbarDropdownMenuLink"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
                >CATEGORIES <span class="glyphicon glyphicon-triangle-bottom"></a
              > -->
              <!-- <div
                class="dropdown-menu dropdown-primary"
                aria-labelledby="navbarDropdownMenuLink"
              >
                <a class="dropdown-item" href="#">&nbsp;CLASSICS</a>
                <a class="dropdown-item" href="#">&nbsp;DETECTIVE</a>
                <a class="dropdown-item" href="#">&nbsp;FANTASY</a>
                <a class="dropdown-item" href="#">&nbsp;MOTIVATIONAL</a>
                <a class="dropdown-item" href="#">&nbsp;MYTHOLOGY</a>
                <a class="dropdown-item" href="#">&nbsp;SHORT STORIES</a>
              </div> -->
            </li>

            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                id="navbarDropdownMenuLink"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
                >SORT BY PRICE <span class="glyphicon glyphicon-triangle-bottom"></a
              >
              <div
                class="dropdown-menu dropdown-primary"
                aria-labelledby="navbarDropdownMenuLink"
              >
                <a class="dropdown-item" href="ascending_books.php">&nbsp;ASCENDING</a>
                <a class="dropdown-item" href="descending_books.php">&nbsp;DESCENDING</a>
              </div>
            </li>
            <!-- <li><a href="#">CONTACT</a></li> -->
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                id="navbarDropdownMenuLink-4"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <i class="fas fa-user"></i>
                <?php 
                echo $_SESSION['username'];
                ?>
                <span class="glyphicon glyphicon-triangle-bottom">
              </a>
              <div
                class="dropdown-menu dropdown-menu-right dropdown-info"
                aria-labelledby="navbarDropdownMenuLink-4"
              >
                
                <a class="dropdown-item" href="order_display.php">VIEW ORDERS</a>
                <a class="dropdown-item" href="logout.php">LOG OUT</a>
              </div>
            </li>
            <li>
            <?php $count=0;
          if(isset($_SESSION['cart']))
          {
            $count=count($_SESSION['cart']);
          }
          ?>
            
            <a h href="mycart.php" class="btn btn-outline-success"><span class="glyphicon glyphicon-shopping-cart"></span> MY CART (<?php echo $count; ?>)</a>
            </li>
          </ul>
          <form class="navbar-form navbar-right" role="search" action="search.php" method="GET">
            <div class="form-group input-group">
              <input type="text" class="form-control" placeholder="name , author , genre"  id="search" name="search"/>
              <span class="input-group-btn">
                <button class="btn btn-default"  id="submit" type="submit" value="Search" >
                  <span class="glyphicon glyphicon-search"></span>
                </button>
              </span>
            </div>
          </form>
        </div>
      </div>
    </nav>
    
   <!-- display books  -->
   <?php 
   $mysqli= new mysqli("localhost","root","","ebook_shop");
   $sql="UPDATE books SET b_img= LTRIM(b_img)";
   if ($result= mysqli_query($mysqli,"SELECT * FROM books ORDER BY b_price ASC")){
     
     while($row=mysqli_fetch_array($result))
     {
      echo '<form action="managecart.php" method="POST">'; 

      echo '<div class="col-sm-4 " style="padding-left: 3%">';
        echo '<div class="container">';
        echo '<div class="row">'; 
            echo ' <div class="col-sm-4">';
                echo '<div class="panel panel-default">'; 

                    echo '<div class="panel-heading">';echo $row["b_nm"]; echo "</div>";  
                    echo '<div class="panel-body " style="padding-left:25%">'; 
                    echo "<img src='images/".$row['b_img']."'height='300' width='200'>"; echo "<br>";
                  echo "</div>";  
                  echo '<div class="panel-footer">';echo"₹: ";echo $row["b_price"];echo "</div>"; 
                  echo '<div class="panel-footer">';echo"Genre: ";echo $row["b_subcat"];echo "</div>"; 
                  echo '<div class="panel-footer">';echo substr($row['b_desc'],0,100); echo"<a>...Read More</a>";echo "</div>";  
                  
                  echo '<input type="hidden" name="Item_ID" value="'.$row['b_id'].'">';
                  echo '<input type="hidden" name="Item_Name" value="'.$row['b_nm'].'">';
                  echo '<input type="hidden" name="Price" value="'.$row['b_price'].'">';
                  echo '<br><button type="submit" style="margin-left: 35%" name="Add_To_Cart" class="btn btn-info">Add to cart</button><br><br>'; 
                  
                  echo "</div>";
                  echo "</div>";
                  echo "</div>";
                  echo"<br>";echo"<br>";
                  echo "</div>";
                  echo "</div>"; 
                  echo '</form>'; 
     }
   }
   ?>
   
    <br />

    <br />
    <!-- <footer class="text-center text-white fixed-bottom" style="background-color: #21081a;"> -->
        <!-- Grid container -->
        <!-- <div class="container p-4"></div> -->
        <!-- Grid container -->
      
        <!-- Copyright -->
        <!-- <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          <p style="font-size:20px" >© 2020 Copyright:</p>
          <a class="text-white" href="" style="font-size:20px">Bibliomac.com</a>
        </div> -->
        <!-- Copyright -->
      <!-- </footer> -->
  </body>
</html>
