<?php
      echo"<tr>";
      echo"<td>";
      $conn=mysqli_connect("localhost","root","","ebook_shop");
      $sql="UPDATE books SET b_img= LTRIM(b_img)";
      mysqli_query($sql,$conn);
      $sql=" SELECT * , LTRIM(b_img) FROM books ";
      $result= mysqli_query($conn,$sql);
      if($result){
          while ($row = mysqli_fetch_array($result)) {
              echo "<div id='img_div'>";

              echo "<img src='images/".$row['b_img']."'height='300' width='200'>";
              

              echo "</div>";
          }
      }
    
     ?>
        
         <?php 
    echo "</td>";
    echo"</tr>";
    echo"<tr>";
    echo "<td>"; echo $row["b_nm"]; echo"</td>";
   echo"</tr>";
         echo"<tr>";
        echo "<td>"; echo $row["b_price"]; echo"</td>";
         echo"</tr>";
   
      
   echo "</table>"; 
   echo "</div>";
     
   
   
  ?>

 