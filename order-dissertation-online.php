<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Navbar</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/navbar.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/slider.css" />
  <link rel="stylesheet" href="css/sidebarnav.css"/>
  <link rel="stylesheet" href="css/faq.css">
  <link rel="stylesheet" href="css/footer.css">
  <style>
    .slider-container {
      width: 100%;
      height: 100vh;
      background-color: #f8f9fa;
      padding: 20px;
      display: flex;
      align-items: center;
      justify-content: center;
      position: sticky;
      top: 0;
    }
    .slider-container .carousel {
      max-height: calc(100vh - 40px); /* Account for padding */
    }
    .list {
      background-color: #000;
      margin-left: 10px;
      padding-top: 25px;
      padding-bottom: 25px;
      border-left: 2px solid;
      border-color: red;
    }
    .list-heading {
      color: white;
      padding-left: 10px;
      background-color: #000;
      padding-bottom: 10px;
      font-family: Roboto;
      font-weight: 600;
    }
    .list-item {
      text-decoration: none;
      list-style: none;
      color: white;
    }
    .col-box {
      background-color: #2f2f2f;
      border: 1px solid #3e3e3e;
      padding: 10px;
    }
    .circle-no {
      color: #FD4755;
      font-size: 45px;
      padding: 10px;
    }
    table {
    width: 100%;
    border-collapse: collapse;
  }

  th, td {
    border: 1px solid #ccc;
    padding: 8px;
  }

  @media (max-width: 600px) {
    th, td {
      display: block;
      width: 100%;
    }
  }
  </style>
</head>
<body>
  <?php include 'includes/navbar.php'?>

  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <div class="slider-container">
          <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <h1 id="reviews">Live Reviews</h1>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="carousel-content" style="text-align:center;">
                  <p>Struggling from heavy expense I wanted to buy affordable dissertation UK based and luckily I crossed mypath here. No extra expenses.</p>
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
                <div class="carousel-content" style="text-align:center;">
                  <p>No doubt that these people have such big fan following because recently I’ve also been a part of it. What is not to like? All in favor of us!</p>
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
              <div class="carousel-item">
                <div class="carousel-content" style="text-align:center;">
                  <p>God knows how astounding it was when I decided to take help from DWH and their amazing writers! My 4-year academic journey has been made flawless.</p>
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
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
      <div class="col-lg-9">
        <div class="container-fluid banner-container" style="background-image: url('images/banner.jpg'); padding-bottom:10px;">
          <div class="row">
            <div class="col-lg-5" style="padding-top: 150px;">
              <ul class="list">
                <h4>Order Dissertation Online Now</h4>
                <li class="list-item"><i class="fa-solid fa-check"></i> Free & Well Researched Topics</li>
                <li class="list-item"><i class="fa-solid fa-check"></i> UK Dissertation Native Writers</li>
                <li class="list-item"><i class="fa-solid fa-check"></i> Unlimited FREE Revisions</li>
              </ul>
            </div>
            <div class="col-lg-6">
              <div class="d-flex align-items-center justify-content-center">
                <form class="form" style="margin-left:30px;background-color:white; padding-top:20px; margin-top:25px; padding-bottom:10px; padding-left:20px; padding-right:20px;border-radius:10px;border-color:red;border-left: 2px solid;border-right: 2px solid;border-top: 2px solid;border-bottom: 2px solid;">
                  <h1 class="form-heading">Get <span style="color:red">25%</span> OFF On your 1st Order</h1>
                  <div class="row mb-3">
                    <div class="col-md-6">
                      <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                    </div>
                    <div class="col-md-6">
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-md-6">
                      <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone">
                    </div>
                    <div class="col-md-6">
                      <input type="number" class="form-control" id="wordCount" name="wordCount" placeholder="Number of Words">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-md-12">
                      <select class="form-select" id="dropdown" name="dropdown">
                        <option value="option1">Dissertation</option>
                        <option value="option2">Option 2</option>
                        <option value="option3">Option 3</option>
                      </select>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-md-12">
                      <textarea class="form-control" id="message" name="message" rows="4" placeholder="Message"></textarea>
                    </div>
                  </div>
                  <div class="d-flex justify-content-center align-items-start">
                    <button type="submit" class="btn btn-danger btn-block" style="width: 100%">Send</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid">
  <div class="row align-items-stretch">
    <div class="col-lg-4 col-md-6">
      <div class="col-box h-100" style="background-color: #2f2f2f; border: 1px solid #3e3e3e; padding:10px; margin-right: -15px; margin-left: -25px;">
        <div>
          <i class="fontawesome-icon fa-tools fas circle-no" style="color: #FD4755; font-size: 45px; padding: 10px;"></i>
          <h4 style="color: white;">Money-Back Guarantee</h4>
          <p style="color: white;">100% Compliance of UK Data security’s Rule & Regulation, We are highly compliant writing company in London managing data security of our clients.</p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6">
      <div class="col-box h-100" style="background-color: #2f2f2f; border: 1px solid #3e3e3e;padding:8px; margin-right: -15px; margin-left: -15px;">
        <div style="flex-grow: 1;">
          <i class="fontawesome-icon fa-lightbulb far circle-no" style="color: #FD4755; font-size: 45px; padding: 10px;"></i>
          <h4 style="color: white;">UK Native Writers</h4>
          <p style="color: white;">100% Compliance of UK Data security’s Rule & Regulation, We are highly compliant writing company in London managing data security of our clients.</p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6">
      <div class="col-box h-100"  style="background-color: #2f2f2f; border: 1px solid #3e3e3e;padding:4px; margin-right: -25px; margin-left: -15px;">
        <div>
          <i class="fontawesome-icon fa-user-edit fas circle-no" style="color: #FD4755; font-size: 45px; padding: 10px;"></i>
          <h4 style="color: white;">100% Originality</h4>
          <p style="color: white;">Being UK Best Writing Company we assure availability of customer support functioning 24-hours to assist you in any query faced regarding any complication.</p>
        </div>
      </div>
    </div>
  </div>
</div>

        <h2 style="text-align:center;">Sneak Peek To Our Clients Successful Experience</h2>
        <p style="text-align:center;">Check out yourself what our client’s reactions are by discovering just where to buy a dissertation stitched to perfection!</p>
        <!-- Add the rest of your content here -->
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <img src="images/img1.jpg" alt="">
            </div>
            <div class="col-lg-4">
            <img src="images/img2.jpg" alt="">
            </div>
            <div class="col-lg-4">
            <img src="images/img2.jpg" alt="">
            </div>
          </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
          <h2 style="text-align:center;">Easy Process To Buy MBA Dissertation</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4" style="background-color:#f7f7f7;padding:20px;"> 
            <h5>Featuring Services Offered by DWH</h5>
         <ul>
           <li style="list-style:none"><i class="fa-solid fa-chevron-right" style="padding-right:5px;font-size:10px;"></i>Dissertation Introduction writing</li>
           <li style="list-style:none; padding-top:8px;"><i class="fa-solid fa-chevron-right" style="padding-right:5px;font-size:10px;"></i>Dissertation Abstract Writing Service</li>
           <li style="list-style:none; padding-top:8px;"><i class="fa-solid fa-chevron-right" style="padding-right:5px;font-size:10px;"></i>Literature Review Help</li>
           <li style="list-style:none; padding-top:8px;"><i class="fa-solid fa-chevron-right" style="padding-right:5px;font-size:10px;"></i>SPSS Data Analysis Services</li>
          </ul> 
          <hr style="border-top: 3px solid #ccc; border-color:red;">
          <img src="images/1subbanner.png" alt="" class="img-fluid">
          </div>
          <div class="col-lg-8" style="background-color: #313131; padding:15px;">
             <h3 style="color:white;">Fill in your order requirements:</h3>
             <p style="color:white;">To place your dissertation order, you need to fill out our order form with all the requirements that you desire with any customization required by your end. Carefully, mention every need and fill all the tabs with accurate information.</p>
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-6">
                <h5 style="color:white;">Safely make your payment:</h5>
                <p style="color:white;">Once your order form is approved, you may proceed to the payment section for your order. Your query of how much to buy a dissertation will be crystal clear once your order requirements are filled completely. We ensure the safest payment methods like PayPal, Visa, and Paynote which are made easy for your convenience.</p>
                <h5 style="color:white;">Select the writer of your choice:</h5>
                <p style="color:white;">Be wise on selecting your favourite writer as your choice should be based on their qualification and skills that will be needed on your dissertation and matches its nature. You can always view all our writers before making a selection.</p>
              </div>
              <div class="col-lg-6">
                <h5 style="color:white;">Take a follow-up on your order:</h5>
                <p style="color:white;">You can always check on your order and its state of working for tracking purposes. Get to know your order’s progress and specify any additional requirement or specification or communicate with the writer or support specialist.</p>
                <h5 style="color:white;">Enjoy your dissertation on-time:</h5>
                <p style="color:white;">Your dissertation will be delivered to you on the communicated time when it is done. Once, you receive your dissertation, you can check it carefully for additional changes you might require or get it revised if not satisfied accordingly.</p>
              </div>
            </div>
          </div>
            </div>
        </div>
      </div>
      <!--After brownbox container--!-->
      <div class="container-fluid">
        <div class="row"> 
          <div class="col-lg-12">
            <h2 style="padding-top:30px;">Waving Goodbye to Stressful MBA Dissertation!</h2>
            <p style="padding-top:10px;">Getting out of MBA troubling dissertation is not as hard as you imagine. Though it’s very simple. And mostly the wisest gets the best dissertations by making a smart decision to buy MBA dissertation service on time.</p>
            <p style="padding-top:10px;">We know how struggling an MBA dissertation could get. With all the other courses deadlines, assignments, homework and even extracurricular activities. It is merely impossible to give 100% to your MBA dissertation. This drives students in buying a MBA dissertation in order to secure their grade.</p>
            <p>This lead student to:</p>
            <ul>
              <li>Focus on other courses as well</li>
              <li>Make time for other activities</li>
              <li>Enjoy a completely written dissertation</li>
              <li>No worries on compromising the grade</li>
            </ul>
            <h1>What Drives Confusion Regarding MBA Dissertation?</h1>
            <p style="padding-top:10px;">You might not even believe it yet but you have landed on the no.1 platform for MBA dissertation.</p>
            <p style="padding-top:10px;">The only confusion that students might face during their wish to buy MBA dissertation, is the selection of the right services. Our above statement will get clearer with our exclusive services and offers which show what a reliable platform and other scams look alike.</p>
<p>Now, it is crystal clear! How we differ from others as our motto revolves around your satisfaction.</p>
<h1>MBA Dissertations Stitched By MBA Master Specialists Themselves!</h1>
<p>Don’t you worry about who will be writing your MBA dissertation because you will get the best mba dissertation help uk based as we only assign MBA specialists to your dissertation task.</p>
        <ul>
          <li>Once your MBA dissertation domain is selected it will be forwarded to the domain head.</li>
          <li>The domain head will select the topic for your dissertation along with their team of specialists</li>
          <li>After selecting your topic it will be assigned to the most experienced MBA dissertation writer yet the one whose skills and qualifications will be most beneficial for your dissertation</li>
          <li>You will be freely allowed to communicate with your writer whenever you feel like it.</li>
        </ul>
        <h2>Do You Know You Can Pick Your Own MBA Dissertation Writer?</h2>
        <p>From our platform, yes!</p>
        <p>Our mba dissertation writing services permit you to choose your own writer. You have the opportunity to select your favourite writer responsible for your MBA dissertation. It’s not necessary that we will select your writer for you. You have the chance of doing it on your own. What you should consider before deciding on your MBA dissertation writer is:</p>
        <ul>
          <li>View the writer’s profile</li>
          <li>Check their qualification and experience</li>
          <li>Make sure their skill set matches your dissertation nature</li>
          <li>Communicate with them</li>
          <li>Make selection only if you are completely satisfied with our writer</li>
        </ul>  
      </div>
        </div>
      </div>
        <!--After brownbox container end--!-->
          <!--FAQ container start--!-->
        <div class="containr">
          <div class="row">
            <div class="col-lg-12">
              <?php include 'includes/faq.php'?>
            </div>
          </div>
        </div>
          <!--FAQ container end--!-->
      </div>
    </div>
  </div>
  <?php include 'includes/footer.php'?>
  <script src="javascript/faq.js"> </script>
  <script src="javascript/navbar.js"> </script>
</body>
</html>
