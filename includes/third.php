<?php
include 'dbconnection/dbconnect.php';

$query = "SELECT `heading`, `text` FROM `index3`";
$result = $conn->query($query);

$h3Content = "";
$pContent = "";

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $h3Content = $row["heading"];
    $pContent = $row["text"];
} else {
    $h3Content = "Default h3 content";
    $pContent = "Default p content";
}

// Close the database connection
$conn->close();
?>
<div class="container">
	<div class="row">
		<div class="col-lg-12" id="go1">
			<div id="divheading">
              <h3 id="heading"><?php echo $h3Content; ?></h3>
			</div>
			<p id="section3p"><?php echo $pContent; ?></p>
			<div class="container">
				<div class="row">
					<!-- <div class="col-md-4 col-sm-12">
						<img src="images/img1.jpg" alt="" class="img-fluid">
					</div>
					<div class="col-md-4 col-sm-12">
						<img src="images/img2.jpg" alt="" class="img-fluid">
					</div>
					<div class="col-md-4 col-sm-12">
						<img src="images/img3.jpg" alt="" class="img-fluid">
					</div> -->
				</div>
			</div>
		</div>		
	</div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-4">
<img src="images/trustpilot-logo.webp" alt="trustpilot-dissertation-writing-help" class="img-fluid trustreviews">
        </div>
         <div class="col-lg-4">
<img src="images/Trust-Reviews-logo.webp" alt="trustReviews-dissertation-writing-help" class="img-fluid trustreviews">
        </div>
         <div class="col-lg-4">
<img src="images/sitejabber-logo.webp" alt="sitejabber-dissertation-writing-help" class="img-fluid trustreviews">
        </div>
    </div>
</div>
<style>
 .trustreviews {
    display: block;
    margin: 0 auto;
}


  @media (max-width: 767px) {
      #go1{
          margin-top:25px;
      }
  }
  #heading{
      margin: 0; 
      font-size: 1em; 
      text-align: center;
      font-family:'Poppins';
      color:#002D4C;
      font-weight:600;
  }
  #section3p{
      text-align: center;
      font-family:'Poppins';
      color:#777777;
  }
  #divheading{
      font-size: 30px;
      margin-top: 0px; 
      margin-bottom: 5px;
  }
  #go1{
      padding-top:15px;
  }
  @media (width: 412px) and (height: 915px) {
    /* Your CSS rules for devices with a viewport of 412x915 */
     #heading{
         margin-top: 51px;
     }
}
@media (width: 375px) and (height: 667px) {
    /* Your CSS rules for devices with a viewport of 375x667 */
    #heading{
        margin-top: 50px;
        
    }
}
@media (width: 414px) and (height: 896px) {
    /* Your CSS rules for devices with a viewport of 414x896 */
    #heading{
        margin-top: 50px;
    }
}
@media (width: 390px) and (height: 844px) {
    /* Your CSS rules for devices with a viewport of 390x844 */
    #heading{
        margin-top: 50px;
    }
}
@media (width: 393px) and (height: 851px) {
    /* Your CSS rules for devices with a viewport of 393x851 */
     #heading{
        margin-top: 50px;
    }
}
@media (width: 360px) and (height: 740px) {
    /* Your CSS rules for devices with a viewport of 360x740 */
     #heading{
        margin-top: 50px;
    }
}
@media (width: 412px) and (height: 914px) {
    /* Your CSS rules for devices with a viewport of 412x914 */
     #heading{
        margin-top: 50px;
    }
}
@media (width: 360px) and (height: 640px) {
    /* Your CSS rules for devices with a viewport of 360x640 */
     #heading{
        margin-top: 50px;
    }
}
@media (width: 375px) and (height: 812px) {
    /* Your CSS rules for devices with a viewport of 375x812 */
     #heading{
        margin-top: 50px;
    }
}
@media (width: 360px) and (height: 800px) {
    /* Your CSS rules for devices with a viewport of 360x800 */
     #heading{
        margin-top: 50px;
    }
}
@media (max-width: 768px) {
    /* Your CSS rules for mobile devices */
  #heading{
        margin-top: 50px;
    }
}

</style>