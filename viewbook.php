<!DOCTYPE html>
<html lang="en">
  <head>
    <title>view books</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="admin_dashboard_css.css" media="all" rel="Stylesheet" type="text/css" />
    <style></style>
  </head>
  <body>

    
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" style="color: #fff">BIBLIOMAC ADMIN</a>
        </div>
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="logout.php" style="color: #fff" ><span class="glyphicon glyphicon-log-out"></span> LOGOUT</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

   
 <!--buttons -->
 <div class="content">
 <ul style="list-style-type:none;margin-top: 2%;">
    <li style="display:inline"><button onclick="location.href='viewbook.php'" style="color: white;
  background-color: #646464;">VIEW BOOKS</button></li>
    <li style="display:inline"><button  onclick="location.href='viewcust.php'">VIEW CUSTOMERS</button></li>
    <li style="display:inline"><button onclick="location.href='viewcatg.php'">VIEW CATEGORIES</button></li>
    <li style="display:inline"><button onclick="location.href='vieworder.php'">VIEW ORDERS</button> </li>
    <li style="display:inline"><button  onclick="location.href='feedback.php'">CONTACT REQUESTS</button></li>
    <li style="display:inline"><button onclick="location.href='addbooks.php'">ADD BOOK</button></li>
    <li style="display:inline"><button onclick="location.href='delete.php'">DELETE BOOK</button></li>
    <li style="display:inline"><button onclick="location.href='updatecategory.php'">UPDATE CATEGORY</button></li>
    
</ul>
<br><br> 
    <div style="padding-left:10%">
   
   <?php 
   $mysqli= new mysqli("localhost","root","","ebook_shop");
   $sql="UPDATE books SET b_img= LTRIM(b_img)";
   if ($result= mysqli_query($mysqli,"SELECT b_id,b_nm,b_subcat,b_desc,b_publisher,b_edition,b_isbn,b_page,b_img,b_price FROM books ORDER BY b_id")){
     
     while($row=mysqli_fetch_array($result))
     {
      echo '<div class="col-sm-4">';
      echo "<img src='images/".$row['b_img']."'height='300' width='200'>"; echo "<br>";
      echo "<h4>";echo "Book Id: "; echo $row["b_id"];echo "</h4>";
      echo "<h4>";echo "Book Name: "; echo $row["b_nm"];echo "</h4>";
      echo "<h4>";echo "Category: "; echo $row["b_subcat"];echo "</h4>";
      echo "<h4>";echo "Book Price : ";echo $row["b_price"];echo "</h4>"; echo "<br>";
      echo '</div>';
     }
   }
   ?>
   </div>
</div>
    
  </body>
</html>
