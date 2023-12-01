<?php
include 'dbconnection/dbconnect.php';

$query = "SELECT `heading`, `subheading`, `para` FROM `index10` WHERE id = 1";
$result = $conn->query($query);

$data = array();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $data = array(
        "heading" => $row["heading"],
        "subheading" => $row["subheading"],
        "para" => $row["para"]
    );
} else {
    $data = array(
        "heading" => "Default heading content",
        "subheading" => "Default subheading content",
        "para" => "Default para content"
    );
}

// Close the database connection
$conn->close();
?>

<!-- our client container start-->
<div class="container" id="reviewss"  style="padding-top: 80px;">
  <div class="row" style="background-color: #f5f6f7;padding:30px;">
    <div class="col-lg-6">
     <h3 id="customerreviewheading">Customer Reviews</h3>
     <h5 id="customersubheading">Read Testimonials of Our Most Satisfied Customers</h5>
     <p id="customerp">Our multi-talented team offers exceptional academic writing services to help students who trust us for their grades. Check out the testimonials and reviews from our satisfied customers!</p>
    </div>  
    <div class="col-lg-6">
    <div id="testimonialSlider" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-bs-target="#testimonialSlider" data-bs-slide-to="0" class="active"></li>
          <li data-bs-target="#testimonialSlider" data-bs-slide-to="1"></li>
          <li data-bs-target="#testimonialSlider" data-bs-slide-to="2"></li>
        </ol>

        <!-- Testimonial Slides -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="testimonial">
              <p id="sliderp">
						“Experiencing burnout in quarantine, I had zero motivation to start my 5 page term paper about the major I’m pursuing. Thanks to the amazing people at Academic Expert who proved to be a great help in my trying times. The work I received from them was exceptionally good, will definitely take help from them again.”</p>
              <p><strong>John Doe</strong></p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="testimonial">
              <p id="sliderp">
						“Being an individual who always struggles with words, I always have a hard time delivering my ideas in black and white. But people at Academic Expert, through their professional assistance made it easier for me to write my long essay. Their mentoring improved my writing skills, for which I’d be always grateful for them.”</p>
              <p><strong>Jane Smith</strong></p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="testimonial">
              <p id="sliderp">
						“Thankful to a friend who recommended me Academic Expert. Have been taking their help for quite some time now for my school assignments, and they deliver quality work every single time. Amazing and friendly team, excellent services.”					</p>
              <p><strong>Mike Johnson</strong></p>
            </div>
          </div>
        </div>

        <!-- Controls
        <a class="carousel-control-prev" href="#testimonialSlider" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#testimonialSlider" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a> -->
      </div>
    </div>
  </div>
</div>

<!-- our client container end-->
<style>
 #sliderp{
     font-family: 'Poppins', sans-serif; 
     font-weight:400;
     font-style: italic;
     font-size: 1.3em;
     line-height: 1.5;
     color:#777777;
 }
 .testimonial{
     font-family: 'Poppins', sans-serif;
     font-weight:400;
 }
 #customerreviewheading{
     font-family: 'Poppins', sans-serif;
     color:#002D4C;
     font-weight: 600;
     border-left:10px solid #ffa500;
     padding-left:10px;
     font-size: 40px;
 }
 #customersubheading{
     font-family: 'Poppins', sans-serif;
     color:#002D4C;
     font-weight: 600;
 }
 #customerp{
     font-family: 'Poppins', sans-serif;
     font-weight:400;
     color:#777777;
 }
</style>