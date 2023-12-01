<?php
include 'dbconnection/dbconnect.php';

$query = "SELECT `3boxes`, `para`, `reviews`, `id` FROM `index2` WHERE id IN (1, 2, 3)";
$result = $conn->query($query);

$h4Contents = array();
$pContents = array();
$reviewsContents = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if ($row["id"] == 1) {
            $h4Contents[1] = $row["3boxes"];
        } elseif ($row["id"] == 2) {
            $h4Contents[2] = $row["3boxes"];
        } elseif ($row["id"] == 3) {
            $h4Contents[3] = $row["3boxes"];
        }
        $pContents[$row["id"]] = $row["para"];
        $reviewsContents[$row["id"]] = $row["reviews"];
    }
} else {
    $h4Contents = array_fill(1, 3, "Default h4 content");
    $pContents = array_fill(1, 3, "Default p content");
    $reviewsContents = array_fill(1, 3, "Default reviews content");
}

// Close the database connection
$conn->close();
?>

<div class="container">
  <div class="row">
    <!--<div class="col-lg-3" id="sliderreview">
      <h2 id="reviews">Live Reviews</h2>
      <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <!-- Carousel Indicators (Dots) -->
        <!-- ... (carousel indicators code) ... --
          <!-- Carousel Indicators (Dots) --
          <ol class="carousel-indicators">
          <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
          <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
          <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
        </ol>

        <!-- Carousel Slides --
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="carousel-content">
              <p id="text1">?php echo isset($reviewsContents[1]) ? $reviewsContents[1] : ''; ?></p>
              <img src="images/flag1.jpg" alt="">
              <div class="star-rating">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="carousel-content">
              <p id="text2">?php echo isset($reviewsContents[2]) ? $reviewsContents[2] : ''; ?></p>
              <img src="images/flag2.jpg" alt="">
              <div class="star-rating">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="carousel-content">
              <p id="text3">?php echo isset($reviewsContents[3]) ? $reviewsContents[3] : ''; ?></p>
              <img src="images/flag3.jpg" alt="">
              <div class="star-rating">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
              </div>
            </div>
          </div>
        </div>

        <!-- Carousel Controls (Arrows) --
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
        
        <!-- Carousel Slides -->
        <!-- ... (carousel slides code) ... --

        <!-- Carousel Controls (Arrows) --
        <!-- ... (carousel controls code) ... --
      </div>
    </div>-->
    <div class="col-lg-4 col-md-4 col-sm-12">
      <div id="box1" class="col-box h-100">
        <i class="fontawesome-icon fa-tools fas circle-no" id="font3"></i>
        <h4 id="allh4"><?php echo isset($h4Contents[1]) ? $h4Contents[1] : ''; ?></h4>
        <p id="allp"><?php echo isset($pContents[1]) ? $pContents[1] : ''; ?></p>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
      <div id="box2" class="col-box h-100">
        <i class="fontawesome-icon fa-lightbulb far circle-no" id="font3"></i>
        <h4 id="allh4"><?php echo isset($h4Contents[2]) ? $h4Contents[2] : ''; ?></h4>
        <p id="allp"><?php echo isset($pContents[3]) ? $pContents[2] : ''; ?></p>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
      <div id="box3" class="col-box h-100">
        <i class="fontawesome-icon fa-user-edit fas circle-no" id="font3"></i>
        <h4 id="allh4"><?php echo isset($h4Contents[3]) ? $h4Contents[3] : ''; ?></h4>
        <p id="allp"><?php echo isset($pContents[3]) ? $pContents[3] : ''; ?></p>
      </div>
    </div>
  </div>
</div>

<style>
   /* Add custom CSS here */
/* Add custom CSS here */

  /* For screens less than or equal to 767px (mobiles) */
  @media (max-width: 767px) {
    /* Remove margin-right for box1 and margin-left for box3 on mobiles */
    #box1 {
      margin-right: 0;
      margin-top: 50px;
    }
     #box2 {
      margin-top: 60px;
    }
    #box3 {
      margin-left: 0;
      margin-top: 70px;
    }
    #sliderreview{
        margin-top:10px;
    }
  }
 /* For screens larger than 767px (tablets, desktops, and laptops) */
  @media (min-width: 768px) {
    #box1 {
      margin-right: -30px; /* Apply margin-right only to the second col-box element */
    }

    #box3 {
      margin-left: -25px; /* Apply margin-left only to the fourth col-box element */
    }
  }
  @media (max-width: 768px) {
  /* Your CSS styles for mobile devices go here */
  #font3{
      padding-left: 120px !important;
  }
}
#box1{
    background-color: #2f2f2f;
    border: 1px solid #3e3e3e; 
    padding:10px;
    font-family:'Poppins';
}
#box2{
    background-color: #2f2f2f; 
    border: 1px solid #3e3e3e;
    padding:10px;
    font-family:'Poppins';
}
#box3{
    background-color: #2f2f2f;
    border: 1px solid #3e3e3e;
    padding:10px; 
    font-family:'Poppins';
}
#font3{
    color: #0BA8E6; 
    font-size: 45px; 
    padding: 10px;
}
#reviews{
    color:#002D4C;
    font-family:'Poppins';
}
#text1{
    color:#777777;
    font-family:'Poppins';
}
#text2{
    color:#777777;
    font-family:'Poppins';
}
#text3{
    color:#777777;
    font-family:'Poppins';
}
.carousel-content{
   text-align:center; 
}
#allh4{
    color: white;
    font-family:'Poppins';
}
#allp{
    color: white;
    font-family:'Poppins';
}
@media (max-width: 767px) {
  /* Your CSS rules for mobile devices go here */
  #allp{
    color: white;}
}

</style>
