<!DOCTYPE html>
<html lang="en">
  <head>
    <title>delete book</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="admin_dashboard_css.css" media="all" rel="Stylesheet" type="text/css" />
    <style>
       table {
  border-collapse: collapse;
  width: 80%;
  
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
    <li style="display:inline"><button onclick="location.href='viewbook.php'" >VIEW BOOKS</button></li>
    <li style="display:inline"><button  onclick="location.href='viewcust.php'">VIEW CUSTOMERS</button></li>
    <li style="display:inline"><button onclick="location.href='viewcatg.php'">VIEW CATEGORIES</button></li>
    <li style="display:inline"><button onclick="location.href='vieworder.php'">VIEW ORDERS</button> </li>
    <li style="display:inline"><button  onclick="location.href='feedback.php'">CONTACT REQUESTS</button></li>
    <li style="display:inline"><button onclick="location.href='addbooks.php'" >ADD BOOK</button></li>
    <li style="display:inline"><button onclick="location.href='delete.php'" style="color: white;
  background-color: #646464;">DELETE BOOK</button></li>
    <li style="display:inline"><button onclick="location.href='updatecategory.php'">UPDATE CATEGORY</button></li>
    
</ul>
<br><br> 
<div style="padding-left:10%">  
<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="ebook_shop";
    $conn=mysqli_connect($servername,$username,$password,$dbname);
    if($conn->connect_error){

        die("connection failed");

}


$sql="SELECT b_id,b_nm,b_subcat,b_publisher,b_edition,b_isbn FROM books ORDER BY b_id";
$result=mysqli_query($conn,$sql);

$numrows=mysqli_num_rows($result);

if($numrows>0){
  echo "<table>";
  echo "<tr>";
  echo "<th>"; echo "BOOK ID";echo "</th>";
  echo "<th>"; echo "BOOK NAME";echo "</th>";
  echo "<th>"; echo "BOOK CATEGORY";echo "</th>";
  echo "<th>"; echo "BOOK PUBLISHER";echo "</th>";
  echo "<th>"; echo "BOOK EDITION";echo "</th>";
  echo "<th>"; echo "BOOK ISBN";echo "</th>";
  echo "</tr>";
        while($row=$result->fetch_assoc()){

          echo "<tr>";
      echo "<td>"; echo $row["b_id"];echo "</td>";
      echo "<td>"; echo $row["b_nm"];echo "</td>";
      echo "<td>"; echo $row["b_subcat"];echo "</td>";
      echo "<td>"; echo $row["b_publisher"];echo "</td>";
      echo "<td>"; echo $row["b_edition"];echo "</td>";
      echo "<td>"; echo $row["b_isbn"];echo "</td>";
      echo "</tr>";

        }
        echo "</table>";

}
else{

        echo "<h2 style='margin-left:2%;'> No books found !</h2>";

}


?>


<div>

        <fieldset style="width: 40%; margin-left:2%; margin-top:2%;">
            <legend>DELETE BOOK</legend>
          

            <form action="deleted.php" method="POST">
               
               <span>Select Book ID: </span><br><br><input type="number" name="bid">&nbsp;&nbsp;
               <input type="submit" value="Delete" style=" width:30%"> 
                   
            </form>
           
        </fieldset>
       
</div>
</div>
  </body>
</html>
