<!DOCTYPE html>
<html lang="en">
  <head>
    <title>view orders</title>
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
    <li style="display:inline"><button  onclick="location.href='viewcust.php'" >VIEW CUSTOMERS</button></li>
    <li style="display:inline"><button onclick="location.href='viewcatg.php'" >VIEW CATEGORIES</button></li>
    <li style="display:inline"><button onclick="location.href='vieworder.php'" style="color: white;
  background-color: #646464;">VIEW ORDERS</button> </li>
    <li style="display:inline"><button  onclick="location.href='feedback.php'">CONTACT REQUESTS</button></li>
    <li style="display:inline"><button onclick="location.href='addbooks.php'">ADD BOOK</button></li>
    <li style="display:inline"><button onclick="location.href='delete.php'">DELETE BOOK</button></li>
    <li style="display:inline"><button onclick="location.href='updatecategory.php'">UPDATE CATEGORY</button></li>
    
</ul>
<br><br> 
    <div style="padding-left:10%">
   
    <?php 
   $mysqli= new mysqli("localhost","root","","ebook_shop");
   if ($result= mysqli_query($mysqli,"SELECT order_id,order_date,full_name,phone_number,address,mode FROM orders ORDER BY order_id")){
    echo "<table>";
    echo "<tr>";
    echo "<th>"; echo "ORDER ID";echo "</th>";
    echo "<th>"; echo "ORDER DATE";echo "</th>";
    echo "<th>"; echo "FULL NAME";echo "</th>";
    echo "<th>"; echo "PHONE NUMBER";echo "</th>";
    echo "<th>"; echo "ADDRESS";echo "</th>";
    echo "<th>"; echo "MODE";echo "</th>";
    echo "</tr>";
     while($row=mysqli_fetch_array($result))
     {
      echo "<tr>";
      echo "<td>"; echo $row["order_id"];echo "</td>";
      echo "<td>"; echo $row["order_date"];echo "</td>";
      echo "<td>"; echo $row["full_name"];echo "</td>";
      echo "<td>"; echo $row["phone_number"];echo "</td>";
      echo "<td>"; echo $row["address"];echo "</td>";
      echo "<td>"; echo $row["mode"];echo "</td>";
      echo "</tr>";
     }
     echo "</table>";
   }
   ?> 
   
   </div>
</div>
    
  </body>
</html>
