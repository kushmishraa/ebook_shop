<!DOCTYPE html>
<html lang="en">
<head>
 
  <title>Bibliomac</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="style.css" media="all" rel="Stylesheet" type="text/css" />
  <style>
   
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">BIBLIOMAC</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#categories">CATEGORIES</a></li>
        <li><a href="#latest_additions">LATEST ADDITIONS</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <li><a href="userLogin.php" ><span class="glyphicon glyphicon-user"></span>&nbsp;LOGIN </a></li>
      </ul>
    </div>
  </div>
</nav>
<br><br><br>
<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid text-center  ">
  <div class="container ">
    <h1>The New Age of Digital Reading</h1>
    <p>Read what you want, when you want!</p>
  </div>
</div>

<!-- Container (About Section) -->


<div id="about" class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
    <img src="ebook_img.png" width="400" height="400" class="img-fluid  " alt="Responsive image">
    </div>
    <div class="col-sm-8">
      <h2>ABOUT BIBLIOMAC</h2><br>
      <h4> Bibliomac is a one stop destination for all book readers. The readers can easily login to their account and gain access to various books. Bibliomac helps to read anywhere anytime digitally.</h4><br>
     
    </div>
  </div>
</div>

<!-- Container (Categories Section) -->
<div id="categories" class="container-fluid text-center">
  <h2>CATEGORIES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
    <img src="index_page_book_images/classic_genre.jpg"  width="200" height="300">
      <h4>Classics</h4>
    </div>

    <div class="col-sm-4">
    <img src="index_page_book_images/detective_genre.jpg"  width="200" height="300">
      <h4>Detective and Mystery</h4>
      
    </div>
    <div class="col-sm-4">
    <img src="index_page_book_images/harry_potter.jpeg"  width="200" height="300">
      <h4>Fantasy</h4>
      
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
    <img src="index_page_book_images/self_care_genre.jpg"  width="200" height="300">
      <h4>Motivational</h4>
     
    </div>
    <div class="col-sm-4">
    <img src="index_page_book_images/mythology_genre.jpg"  width="200" height="300">
      <h4>Mythology</h4>
     
    </div>
    <div class="col-sm-4">
    <img src="index_page_book_images/short_stories_genre.jpg"  width="200" height="300">
      <h4 style="color:#303030;">Short Stories</h4>
     
    </div>
  </div>
</div>

<!-- Container (Latest additions Section) -->
<div id="latest_additions" class="container-fluid text-center bg-grey">
  
  <h2>LATEST ADDITIONS</h2><br>
   <?php 
   $mysqli= new mysqli("localhost","root","","ebook_shop");
  //  $sql="UPDATE books SET b_img= LTRIM(b_img)";
   $edit=mysqli_query($mysqli,"UPDATE books SET b_img= LTRIM(b_img)");
   if ($result= mysqli_query($mysqli,"SELECT * FROM books ORDER BY b_id DESC LIMIT 3")){
     
     while($row=mysqli_fetch_array($result))
     {
      echo '<div class="col-sm-4 slideanim ">';
      echo "<img src='images/".$row['b_img']."'height='300' width='200'>"; echo "<br>";
      echo "<h4>"; echo $row["b_nm"];echo "</h4>";
      echo "<h4>";echo "Rs ";echo $row["b_price"];echo "</h4>"; 
      echo '</div>';
     }
   }
   ?>
  
  </div><br>
  
  <h2 class=" text-center ">What our customers say</h2>
  <div id="myCarousel" class="carousel slide text-center " data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"Bibliomac helped me develop a habit of reading"<br><span>Michael Roe</span></h4>
        <br>
      </div>
      <div class="item">
        <h4>"One word... WOW!!"<br><span>John Smith</span></h4>
        <br>
      </div>
      <div class="item">
        <h4>"I can read my favorites books anytime anywhere"<br><span>Richa Jain</span></h4>
        <br>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>



<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT US</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Maharashtra, India</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span><a href = "mailto:ebook.shop@gmail.com">Email Us</a></p>
    </div>
    <div class="col-sm-7 ">
      <div class="row">
      <form method="post" action="insert_contact_us_data.php">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="con_name" name="con_name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="con_email" name="con_email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="con_query" name="con_query" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
</form>
  </div>
</div>



<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>@ COPYRIGHT 2022 <a href="" title="">E BOOK SHOP</a></p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>