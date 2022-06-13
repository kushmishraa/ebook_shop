<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>My Orders</title>
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
    <style>
       table {
  border-collapse: collapse;
  width: 80%;
  margin-left: 12%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}
    </style>
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
            <!-- <li class="nav-item dropdown">
              <a
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
            
            <a  href="mycart.php" class="btn btn-outline-success"><span class="glyphicon glyphicon-shopping-cart"></span> MY CART (<?php echo $count; ?>)</a>
            </li>
          </ul>
          
          <!-- search bar code -->
          <form class="navbar-form navbar-right" role="search" action="search.php" method="GET">
            <div class="form-group input-group">
              <input type="text" class="form-control" placeholder="name ,author ,genre"  id="search" name="search"/>
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
   if ($result= mysqli_query($mysqli,"SELECT book_name,price,quantity FROM user_orders WHERE user_name='{$_SESSION['username']}'")){
    echo "<table>";
    echo "<tr>";
    echo "<th>"; echo "BOOK NAME";echo "</th>";
    echo "<th>"; echo "PRICE";echo "</th>";
    echo "<th>"; echo "QUANTITY";echo "</th>";
    
    echo "</tr>";
     while($row=mysqli_fetch_array($result))
     {
      echo "<tr>";
      echo "<td>"; echo $row["book_name"];echo "</td>";
      echo "<td>"; echo $row["price"];echo "</td>";
      echo "<td>"; echo $row["quantity"];echo "</td>";
      echo "</tr>";
     }
     echo "</table>";
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
