<!DOCTYPE html>
<html lang="en">
  <head>
    <title>add books</title>
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
  font-size: 15px;
}

 td {
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
    <li style="display:inline"><button onclick="location.href='addbooks.php'" style="color: white;
  background-color: #646464;">ADD BOOK</button></li>
    <li style="display:inline"><button onclick="location.href='delete.php'">DELETE BOOK</button></li>
    <li style="display:inline"><button onclick="location.href='updatecategory.php'">UPDATE CATEGORY</button></li>
    
</ul>
<br><br> 
    <div style="padding-left:10%">
   
    <fieldset style="
    margin-top: 2%;
    width: 60%;
    margin-left: 10%;
    height:80%;
    margin-bottom:2%;">
      
        
            <form method="POST" action="insert.php" enctype="multipart/form-data">
            <table width="50%"  align="center">
    <tr>
         <td colspan=2>
         <!-- <center><font size=4><b>ADD BOOKS</b></font></center> -->
        </td>
    </tr>
    
    <tr>
        <td><span>Book-id :</span></td>
        <td><input type="number" name="b_id" maxlength="4" required></td>
     </tr>
        
     <tr>
        <td><span>Book name :</span></td>
        <td><input type="text" name="b_nm" maxlength="60" required></td>
     </tr>
    
     <tr>
        <td><span>Book subcategory :</span></td>
        <td><input type="text" name="b_subcat" maxlength="25" required></td>
     </tr>
    
     <tr>
        <td><span>Book description :</span></td>
        <td><textarea rows="4" cols="40" name="b_desc"></textarea></td>
     </tr>
    
     <tr>
        <td><span>Book publisher :</span></td>
        <td><input type="text" name="b_publisher" maxlength="40" required></td>
     </tr>
    
     <tr>
        <td><span>Book edition :</span></td>
        <td><input type="text" name="b_edition" maxlength="20" required></td>
     </tr>
    
     <tr>
        <td> <span>Book isbn :</span></td>
        <td><input type="text" name="b_isbn" maxlength="10" required></td>
     </tr>

     <tr>
        <td> <span>Pages :</span></td>
        <td><input type="number" name="b_page" maxlength="5" required></td>
     </tr>

     <tr>
        <td><span>Price :</span></td>
        <td><input type="number" name="b_price" maxlength="5" required></td>
     </tr>

     <tr>
        <td> <span>Cover : </span></td>
        <td><input type="file" accept="image/*" name="image" style="padding: 2%;" ></td>
     </tr>
 
    
     
    
     
     <tr>
        <td></td>
        <td colspan="2"><input type="submit" value="add book" name="submit" style="padding: 1%; width:30%;"></td>
    </tr>
    
    
    </table>
            </form>
        </fieldset>
   </div>
</div>
    
  </body>
</html>
