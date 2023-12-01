<?php
include 'dbconnection/dbconnect.php';



?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta name="robots" content="all">
    <meta name="robots" content="follow, index">
    <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>404</title>
   
	  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css">
	 <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>
	  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> -->

	  <!-- Font Awesome CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.2.96/css/materialdesignicons.min.css">
      <link rel="stylesheet" href="css/navbar.css" />
	  <link rel="stylesheet" href="css/style.css" />
	  <link rel="stylesheet" href="css/slider.css" />
    <link rel="stylesheet" href="css/sidebarnav.css"/>
    <link rel="stylesheet" href="css/faq.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="icon" type="image" href="images/Logo.png">
    <style>
  .first_button {
    backface-visibility: hidden;
    perspective: 1000px;
    background: linear-gradient(to bottom, #002d4c 0%, #0ba8e6 100%);
    border:none;
    border-radius:10px;
    padding:10px 20px 10px 20px;
    color:white;
    border-radius: 25px 25px 25px 25px;
    border-width: 0px 0px 0px 0px;
    border-style: solid;
    font-family:'poppins';
    font-weight:600;
    margin-top:-2px;
  }
/* Add the shake animation keyframes */
 /* Add the shake animation keyframes */
 
 /* Custom CSS for dropdown-hover */
.dropdown:hover > .dropdown-menu {
  display: block;
}

.dropdown-submenu:hover > .dropdown-menu {
  display: none;
}

.dropdown-submenu:hover > .dropdown-submenu > .dropdown-menu {
  display: block;
}

@media (max-width: 1024px) and (max-height: 600px){
    .first_button{
        padding: 4px 4px 4px 4px;
        margin-top: 4px;
    }
}

/* ... (any other styles you may have) ... */


  /* Add the shake animation keyframes */

  /* Apply the heart_vibrate animation followed by the shake animation to the specified element */
  @media (width: 1024px) and (height: 600px){
      #numbersbutton{
          font-size:12px;
      }
  }
@media (max-width: 767px){
    .navbar-light .navbar-toggler{
    padding-left: 160px;
    padding-right: 144px;
    }
}
 @media (max-width: 767px) {
        #menu-item-6152 {
          display: none;
        }
        .first_button{
            display: none;
        }
       #whatsapp {
          display: none;
        }
      }
      /* Show the element on mobile */
  @media only screen and (max-width: 767px) {
    #menu-item-6000 {
      display: block !important;
        padding-bottom:5px;
    }
  }

  /* Hide the element on desktop */
  @media only screen and (min-width: 768px) {
    #menu-item-6000 {
      display: none !important;
    
    }
  }
  #1ul{
      font-family:'Poppins';
      color:#777777;
      font-weight: 600;
      font-size: 14px;
  }
  #numbersbutton{
      text-decoration:none;
      border-width: 0px 0px 0px 0px;
      padding:10px 20px 10px 20px;
      border-radius: 25px 25px 25px 25px;
      background-color:#002D4C; 
      color:white;
  }
  .custom-container {
            background-color: #f2f2f2; /* Your desired background color */
            padding: 20px; /* Add padding for spacing */
        }
    h1{
    font-family: 'Poppins';
    color: #002D4C;
    padding-top: 100px;
    padding-bottom: 100px;
    }
</style>
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
  <a class="navbar-brand mx-auto" href="https://dissertationwritinghelp.net/"><img src="images/DISSERTATION-WRITING-HELP-.png" alt="logo" id="logo"></a>
   <li id="menu-item-6000" class="unselectable menu-item menu-item-type-custom menu-item-object-custom menu-item-6152 fusion-menu-item-button mx-auto" data-classes="unselectable" data-item-id="6000" style="margin:8px;">
          <a href="mailto:info@dissertationwritinghelp.net" class="fusion-icon-only-link fusion-bar-highlight" style="text-decoration:none;">
            <span class="menu-text fusion-button button-default button-small" id="numbersbutton">
              <span class="button-icon-divider-left">
               <i class="fa-solid fa-envelope"></i>
              </span>
              <span class="fusion-button-text-left">info@dissertationwritinghelp.net</span>
            </span>
          </a>
        </li>
         <li id="menu-item-6000" class="unselectable menu-item menu-item-type-custom menu-item-object-custom menu-item-6152 fusion-menu-item-button mx-auto" data-classes="unselectable" data-item-id="6000" style="margin:8px;">
          <a href="https://wa.me/442071937705" class="fusion-icon-only-link fusion-bar-highlight" style="text-decoration:none;">
            <span class="menu-text fusion-button button-default button-small" id="numbersbutton">
              <span class="button-icon-divider-left">
               <i class="fa-solid fa-phone-volume"></i>
              </span>
              <span class="fusion-button-text-left">+44 7564 313 614</span>
            </span>
          </a>
        </li>
    <button class="navbar-toggler mx-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
     
    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item dropdown dropdown-hover">
          <a class="nav-link" href="#" id="navbarDropdown" role="button">
            Dissertation
            <i class="fas fa-chevron-down"></i>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li class="nav-item dropdown drop-down02">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownWritingServices" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Levels
              </a>
              <ul class="dropdown-menu sub-menu02" aria-labelledby="navbarDropdownWritingServices" id="1ul">
                <li><a class="dropdown-item" href="https://dissertationwritinghelp.net/buy-mba-dissertation-service">Buy MBA Dissertation</a></li>
				<li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="https://dissertationwritinghelp.net/buy-master-dissertation-services">Buy Master Dissertation</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="https://dissertationwritinghelp.net/buy-phd-dissertation-services">Buy PHD Dissertation</a></li>
			
              </ul>
            </li>
			 <li><hr class="dropdown-divider"></li> 
            <li class="nav-item dropdown drop-down02">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownWritingServices" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Writing Services
              </a>
              <ul class="dropdown-menu sub-menu02" aria-labelledby="navbarDropdownWritingServices">
                <li><a class="dropdown-item" href="https://dissertationwritinghelp.net/buy-dissertation-online">Buy a Dissertation</a></li>
				<li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="https://dissertationwritinghelp.net/ordernow">Order a Dissertation</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="purchase-dissertations-online.php">Purchase Dissertation</a></li>
				<li><hr class="dropdown-divider"></li>
				<li><a class="dropdown-item" href="write-my-dissertation-services.php">Write my Dissertation</a></li>
				<li><hr class="dropdown-divider"></li>
				<li><a class="dropdown-item" href="https://dissertationwritinghelp.net/dissertation-writing-service">Dissertation writing services</a></li>
					<li><hr class="dropdown-divider"></li>
				<li><a class="dropdown-item" href="#">Dissertation writing help</a></li>
              </ul>
            </li>
			<li><hr class="dropdown-divider"></li>
			<li class="nav-item dropdown drop-down02">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownDataAnalysis" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Data Analysis
              </a>
              <ul class="dropdown-menu sub-menu02" aria-labelledby="navbarDropdownDataAnalysis">
                <li><a class="dropdown-item" href="https://dissertationwritinghelp.net/qualitative-data-dissertation">Qualitative Data Dissertation</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="https://dissertationwritinghelp.net/phd-qualitative-data-analysis-services">Phd Qualitative Data Analysis Services</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="https://dissertationwritinghelp.net/phd-data-collection-help">PHD Data Collection help</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="https://dissertationwritinghelp.net/dissertation-data-analysis-services">Dissertation Data Analysis Services</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="https://dissertationwritinghelp.net/primary-data-collection-help">Primary Data Collection Help</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="https://dissertationwritinghelp.net/spss-data-analysis-services">Spss Data Analysis Services</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="https://dissertationwritinghelp.net/secondary-data-collection-help">Secondary Data Collection Help</a></li>
                <li><hr class="dropdown-divider"></li> 
                <li><a class="dropdown-item" href="https://dissertationwritinghelp.net/research-methodology-help">Research Methodology Help</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="https://dissertationwritinghelp.net/dissertation-viva-counselling">Dissertation Viva Counselling</a></li>
              </ul>
            </li>
			<li><hr class="dropdown-divider"></li>
			<li class="nav-item dropdown drop-down02">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownProposal" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Proposal
              </a>
              <ul class="dropdown-menu sub-menu02" aria-labelledby="navbarDropdownProposal">
  <li class="dropdown">
    <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdownLevels" role="button" data-bs-toggle="dropdown" aria-expanded="false">Levels</a>
    <ul class="dropdown-menu sub-menu02" aria-labelledby="navbarDropdownLevels">
      <li><a class="dropdown-item" href="#">Masters Dissertation Proposal Help</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="#">Phd Dissertation Proposal Help</a></li>
    </ul>
  </li>
  <li><hr class="dropdown-divider"></li>
  <li class="dropdown">
    <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdownWritingServices" role="button" data-bs-toggle="dropdown" aria-expanded="false">Writing Services</a>
    <ul class="dropdown-menu sub-menu02" aria-labelledby="navbarDropdownWritingServices">
      <li><a class="dropdown-item" href="#">Dissertation Proposal Help</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="#">Research Proposal Writing Service</a></li>
    </ul>
  </li>
</ul>


            </li>
            <li><hr class="dropdown-divider"></li>
            <li class="nav-item dropdown drop-down02">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownSubjective" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Subjective
              </a>
              <ul class="dropdown-menu sub-menu02" aria-labelledby="navbarDropdownSubjective">
                <li><a class="dropdown-item" href="#">Business management dissertation help</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Digital marketing dissertation help</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Social media marketing dissertation help</a></li>
              </ul>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li class="nav-item dropdown drop-down02">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownOther" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Other
              </a>
              <ul class="dropdown-menu sub-menu02" aria-labelledby="navbarDropdownOther">
                <li><a class="dropdown-item" href="#">Dissertation Abstract Writing Service</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Dissertation Introduction Writing</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Dissertation Chapter Writing Services</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Literature Review Help</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Dissertation Methodology Help</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Dissertation Discussion Writing</a></li>
                <li><hr class="dropdown-divider"></li> 
                <li><a class="dropdown-item" href="#">Dissertation Presentation Writing Services</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Dissertation Chapter Writing Services</a></li>
                <li><hr class="dropdown-divider"></li>   
                <li><a class="dropdown-item" href="#">Dissertation Poster Design Services</a></li>
                <li><hr class="dropdown-divider"></li> 
                <li><a class="dropdown-item" href="#">Dissertation Poster Writing Services</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="dissertation-formatting-service.php">Dissertation Formatting Service</a></li>
              </ul>
            </li>
          </ul>
        </li>
		<!-- <li><hr class="dropdown-divider"></li> -->
		<li class="nav-item dropdown">
  <a class="nav-link" href="#" id="navbarDropdownProofreading" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Proofreading <i class="fas fa-chevron-down"></i>
  </a>
  <ul class="dropdown-menu" aria-labelledby="navbarDropdownProofreading">
    <li class="dropdown drop-down02">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownOther" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               Services
              </a>
              <ul class="dropdown-menu sub-menu02" aria-labelledby="navbarDropdownOther">
                <li><a class="dropdown-item" href="#">Dissertation Proofreading Service</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">PHD Dissertation Proofreading Services</a></li>
              </ul>
    </li>
    <li><hr class="dropdown-divider"></li>
    <li class="dropdown drop-down02">
      <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdownServices" role="button" data-bs-toggle="dropdown" aria-expanded="false">Subjective Services</a>
      <ul class="dropdown-menu sub-menu02" aria-labelledby="navbarDropdownServices">
        <li><a class="dropdown-item" href="#">Accounting Dissertation Proofreading Service</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Business management Proofreading Services</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Digital Marketing Dissertation Proofreading Services</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">HRM Dissertation Proofreading Services</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">LAW Dissertation Proofreading Services</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Marketing Dissertation Proofreading Services</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Nursing Dissertation Proofreading Service</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">SupplyChain Management Proofreading Service</a></li>

      </ul>
    </li>
  </ul>
</li>

            <li class="nav-item dropdown">
          <a class="nav-link" href="#" id="navbarDropdownTopics" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Topics
            <i class="fas fa-chevron-down"></i>
          </a>
           <ul class="dropdown-menu" aria-labelledby="navbarDropdownProofreading">
    <li class="dropdown drop-down02">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownOther" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               Best Nursing Dissertation Topics for UK Students
              </a>
              <ul class="dropdown-menu sub-menu02" aria-labelledby="navbarDropdownOther">
                <li><a class="dropdown-item" href="#">MSc Nursing Dissertation Topics</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">PhD Nursing Dissertation Topics</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Child Nursing Dissertation Topics</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Dissertation Topics in Medical Surgical Nursing</a></li>
                <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Emergency Nursing Dissertation Topics</a></li>
                 <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Health Care Dissertation Topics</a></li>
               <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Mental Health Nursing Dissertation Topics</a></li>
               <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Nursing Dissertation Topics Palliative Care</a></li>
              <li><hr class="dropdown-divider"></li>    
              <li><a class="dropdown-item" href="#">Nursing Dissertation Topics Critical Care</a></li>
               <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Nursing Dissertation Topics Dementia</a></li>
              </ul>
    </li>
    <li><hr class="dropdown-divider"></li>
    <li class="dropdown drop-down02">
      <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdownServices" role="button" data-bs-toggle="dropdown" aria-expanded="false">Marketing Dissertation Topics</a>
      <ul class="dropdown-menu sub-menu02" aria-labelledby="navbarDropdownServices">
        <li><a class="dropdown-item" href="#">Branding Dissertation Topics</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Digital Marketing Dissertation Topics</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Fashion Marketing Dissertation Topics</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Graphic Design Dissertation Topics</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Luxury Brand Dissertation Topics</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Retail Dissertation Topics</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Sales Dissertation Topics</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Social Media Marketing Dissertation Topics</a></li>

      </ul>
    </li>
    <li><hr class="dropdown-divider"></li>
    <li class="dropdown drop-down02">
      <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdownServices" role="button" data-bs-toggle="dropdown" aria-expanded="false">Business Management Dissertation Topics</a>
      <ul class="dropdown-menu sub-menu02" aria-labelledby="navbarDropdownServices">
        <li><a class="dropdown-item" href="#">Asset Management Dissertation Topics</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Change Management Dissertation Topics</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Construction Management Dissertation Topics</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Engineering Management Dissertation Topics</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Event Management Dissertation Topics</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">International Business Management Dissertation Topics</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Knowledge Management Dissertation Topics</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">MSc Management Dissertation Topics</a></li>

      </ul>
    </li>
     <li><hr class="dropdown-divider"></li>
     <li class="dropdown drop-down02">
      <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdownServices" role="button" data-bs-toggle="dropdown" aria-expanded="false">Education Dissertation Topics</a>
      <ul class="dropdown-menu sub-menu02" aria-labelledby="navbarDropdownServices">
        <li><a class="dropdown-item" href="#">Agricultural Education Dissertation Topics</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Higher Education Dissertation Topics</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">MA Education Dissertation Topics</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Masters Education Dissertation Topics</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Medical Education Dissertation Topics</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Physical Education Dissertation Topics</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Primary Education Dissertation Topics</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Sociology of Education Dissertation Topics</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Special Education Dissertation Topics</a></li>
      </ul>
    </li>
      <li><hr class="dropdown-divider"></li>
     <li class="dropdown drop-down02">
      <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdownServices" role="button" data-bs-toggle="dropdown" aria-expanded="false">Engineering Dissertation Topics</a>
      <ul class="dropdown-menu sub-menu02" aria-labelledby="navbarDropdownServices">
        <li><a class="dropdown-item" href="#">Civil Engineering Dissertation Topics</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Mechanical Engineering Dissertation Topics</a></li>
        <li><hr class="dropdown-divider"></li>
        

      </ul>
    </li>
  </ul>
        </li>
     
        <li id="menu-item-6152" class="unselectable menu-item menu-item-type-custom menu-item-object-custom menu-item-6152 fusion-menu-item-button" data-classes="unselectable" data-item-id="6152" style="margin:8px;">
          <a href="tel:+447564313614" class="fusion-icon-only-link fusion-bar-highlight" style="text-decoration:none;">
            <span class="menu-text fusion-button button-default button-small" id="numbersbutton">
              <span class="button-icon-divider-left">
               <i class="fa-solid fa-phone-volume"></i>
              </span>
              <span class="fusion-button-text-left">+44 7564 313 614</span>
            </span>
          </a>
        </li>
        <li id="menu-item-6152" class="unselectable menu-item menu-item-type-custom menu-item-object-custom menu-item-6152 fusion-menu-item-button" data-classes="unselectable" data-item-id="6152" style="margin:8px;">
          <a href="mailto:info@dissertationwriting.net" class="fusion-icon-only-link fusion-bar-highlight" style="text-decoration:none;">
            <span class="menu-text fusion-button button-default button-small" id="numbersbutton">
              <span class="button-icon-divider-left">
               <i class="fa-solid fa-envelope"></i>
              </span>
              <span class="fusion-button-text-left">info@dissertationwritinghelp.net
   </span>
            </span>
          </a>
        </li>
      <li>
      <a href="https://dissertationwritinghelp.net/ordernow.php"> <button type="button" class="first_button heart_vibrate_animate">ORDER NOW</button></a>
        </li>
            <li>
<a href="https://wa.me/442071937705" style="text-decoration:none;" id="whatsapp">
            <span class="menu-text fusion-button button-default button-small" style="color:green;">
            <i class="fa-brands fa-square-whatsapp" style="font-size:36px;padding-left:10px;"></i>
            </span>
          </a>
        </li>
    <!--<a aria-label="Chat on WhatsApp" href="https://wa.me/+447564313614"> <img alt="Chat on WhatsApp" src="images/WhatsAppButtonGreenLarge.png" />
<a />-->
      </ul>
    </div>
  </div>
  
</nav>

<!-- HTML remains unchanged -->

<!-- Add the following JavaScript code -->

<div class="container-fluid text-center custom-container">
    <div class="row">
        <div class="col-lg-12">
            <h1>404 Oops! That page can’t be found.</h1>
        </div>
    </div>
     <div class="row">
        <div class="col-lg-12">
            <a href="https://dissertationwritinghelp.net/buy-mba-dissertation-service"><button type="button" class="btn btn-primary">Buy MBA Dissertation</button></a>
        <a href="https://dissertationwritinghelp.net/buy-master-dissertation-services"><button type="button" class="btn btn-primary">Buy Master Dissertation</button></a>
         <a href="https://dissertationwritinghelp.net/buy-phd-dissertation-services"><button type="button" class="btn btn-primary">Buy PHD Dissertation</button></a>
           <a href="https://dissertationwritinghelp.net/buy-dissertation-online"><button type="button" class="btn btn-primary">Buy Dissertation Online</button></a>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'?>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="javascript/navbar.js"> </script>
<script src="javascript/slider.js"> </script>
<script src="javascript/sidebarnav.js"> </script>
<script src="javascript/faq.js"> </script>

 
	
</body>
</html>