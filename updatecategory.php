<!DOCTYPE html>
<html lang="en">
  <head>
    <title>update</title>
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
    <li style="display:inline"><button onclick="location.href='addbooks.php'">ADD BOOK</button></li>
    <li style="display:inline"><button onclick="location.href='delete.php'">DELETE BOOK</button></li>
    <li style="display:inline"><button onclick="location.href='updatecategory.php'" style="color: white;
  background-color: #646464;">UPDATE CATEGORY</button></li>
    
</ul>
<br><br> 
    <div style="padding-left:10%">
    <?php
    $servername="localhost";//change
    $username="root";//change
    $password="";//change
    $dbname="ebook_shop";//change
    $conn=mysqli_connect($servername,$username,$password,$dbname);
    if($conn->connect_error){

        die("connection failed");

}

//query for selecting books with a specific id
$sql="SELECT cat_id,cat_name FROM category ORDER BY cat_id";
$result=mysqli_query($conn,$sql);

$numrows=mysqli_num_rows($result);

if($numrows>0){
  echo "<table>";
  echo "<tr>";
  echo "<th>"; echo "CATEGORY ID";echo "</th>";
  echo "<th>"; echo "CATEGORY NAME";echo "</th>";
  echo "</tr>";
        while($row=$result->fetch_assoc()){
            //displaying result on webpage using html embded in php
            echo "<tr>";
            echo "<td>"; echo $row["cat_id"];echo "</td>";
            echo "<td>"; echo $row["cat_name"];echo "</td>";
            echo "</tr>";

        }
        echo "</table>";

}

else{

        echo "<img src='not_found.gif' style='margin-left:27%; width:40%;margin-top:2%;'>";

}




?>

<br><br>

<table>
  <tr>
    <td>
<fieldset style="width: 40%; margin-left:2%; margin-top:2%;">
    <legend>Add Category</legend>
    <form action="addcategory.php" method="POST">
    <span>category id : </span><br><br><input type="number" name="cat_id"><br><br>
    <span>category name : </span><br><br><input type="text" name="cat_name"><br><br>
    <input type="submit" value="add category"><br><br>
     </form>
</fieldset>
</td>

<td>
<fieldset style="width: 40%; margin-left:2%; margin-top:2%;">
    <legend>Update Category</legend>
    <form action="ucategory.php" method="POST">
    <span>category id : </span><br><br><input type="number" name="cat_id1"><br><br>
    <span>change name : </span><br><br><input type="text" name="cat_name1"><br><br>
    <input type="submit" value=" update book"><br><br>
     </form>
</fieldset>
</td>
</tr>
</table>
  
  </body>
</html>
