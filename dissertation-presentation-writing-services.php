<?php
include 'dbconnection/dbconnect.php';
// Declare the variables with default values
$heading = '';
$point1 = '';
$point2 = '';
$point3 = '';

// Fetch the data from the table
$sql = "SELECT `heading`, `point1`, `point2`, `point3` FROM  `dissertation-presentation-writing-services-black-box`";
$result = $conn->query($sql);

// Check if any rows were returned
if ($result->num_rows > 0) {
    // Retrieve the data
    $row = $result->fetch_assoc();
    $heading = $row['heading'];
    $point1 = $row['point1'];
    $point2 = $row['point2'];
    $point3 = $row['point3'];
}

// Generate the content for $boxContent and $freeTopics
$boxContent = $heading;
$freeTopics = array($point1, $point2, $point3);
//brown boxes

// Fetch the data from the table
$sql = "SELECT * FROM `dissertation-presentation-writing-services-3brown-boxes`";
$result = $conn->query($sql);

// Declare the variables with default values
$box1_id = '';
$box1_title = '';
$box1_content = '';
$box2_id = '';
$box2_title = '';
$box2_content = '';
$box3_id = '';
$box3_title = '';
$box3_content = '';

// Check if any rows were returned
if ($result->num_rows > 0) {
    // Retrieve the data
    while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $title = $row['3boxes'];
        $content = $row['para'];

        // Assign the values to the corresponding variables
        if ($id == 1) {
            $box1_id = $id;
            $box1_title = $title;
            $box1_content = $content;
        } elseif ($id == 2) {
            $box2_id = $id;
            $box2_title = $title;
            $box2_content = $content;
        } elseif ($id == 3) {
            $box3_id = $id;
            $box3_title = $title;
            $box3_content = $content;
        }
    }
}
//after brown boxes 
// Fetch the data from the table
$sql = "SELECT * FROM `dissertation-presentation-writing-services-2headings` WHERE id = 1";
$result = $conn->query($sql);

// Declare the variables with default values
$heading = '';
$para = '';

// Check if any rows were returned
if ($result->num_rows > 0) {
    // Retrieve the data
    $row = $result->fetch_assoc();
    $heading = $row['heading'];
    $para = $row['para'];
}
//Big brown box 
//Fetch the data from the table
$sql = "SELECT * FROM `dissertation-presentation-writing-services-big-brown-box` WHERE id = 0";
$result = $conn->query($sql);

// Declare the variables with default values
$heading1 = '';
$heading2 = '';
$heading3 = '';
$heading4 = '';
$heading5 = '';
$para1 = '';
$para2 = '';
$para3 = '';
$para4 = '';
$para5 = '';

// Check if any rows were returned
if ($result->num_rows > 0) {
    // Retrieve the data
    $row = $result->fetch_assoc();
    $heading1 = $row['heading1'];
    $heading2 = $row['heading2'];
    $heading3 = $row['heading3'];
    $heading4 = $row['heading4'];
    $heading5 = $row['heading5'];
    $para1 = $row['para1'];
    $para2 = $row['para2'];
    $para3 = $row['para3'];
    $para4 = $row['para4'];
    $para5 = $row['para5'];
}

// //After big brown box

// // Declare the variables
$headingb1 = '';
$headingb2 = '';
$headingb3 = '';
$headingb4 = '';
$headingb5 = '';
$headingb6 = '';
$headingb7 = '';
$parab1 = '';
$parab2 = '';
$parab3 = '';
$parab4 = '';
$parab5 = '';
$parab6 = '';

// // Fetch the data from the table
$sql = "SELECT * FROM  `dissertation-presentation-writing-services-after-brown-box` WHERE id = 1"; // Replace 'your_table_name' with the actual table name
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $headingb1 = $row['heading1'];
    $headingb2 = $row['heading2'];
    $headingb3 = $row['heading3'];
    $headingb4 = $row['heading4'];
    $headingb5 = $row['heading5'];
    $headingb6 = $row['heading6'];
    $headingb7 = $row['heading7'];
    $headingb8 = $row['heading8'];
    $headingb9 = $row['heading9'];
    $parab1 = $row['para1'];
    $parab2 = $row['para2'];
    $parab3 = $row['para3'];
    $parab4 = $row['para4'];
    $parab5 = $row['para5'];
    $parab6 = $row['para6'];
    $parab7 = $row['para7'];
    $parab8 = $row['para8'];
    $parab9 = $row['para'];
} 
//form code
$sql = "SELECT id, heading, options FROM form";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $ids = array();
    $headings = array();
    $options = array();

    while ($row = $result->fetch_assoc()) {
        $ids[] = $row['id']; // Store the id in an array
        $headings[] = $row['heading']; // Store the heading in an array
        $options[] = $row['options']; // Store the options in an array
    }
} else {
    echo "No data found.";
}

//form Data 
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve the form data
  $page = $_POST['page'];
  $date = $_POST['date'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $wordCount = $_POST['wordCount'];
  $dropdown = $_POST['dropdown'];
  $message = $_POST['message'];

  // Prepare the SQL statement to insert the data into the table
  $stmt = $conn->prepare("INSERT INTO form_data (`page`, `date`, `name`, `email`, `phone`, `wordCount`, `dropdown`, `message`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
  $stmt->bind_param("ssssssss", $page, $date, $name, $email, $phone, $wordCount, $dropdown, $message);

  // Execute the statement
  if ($stmt->execute()) {
      echo "Data stored successfully.";
  } else {
      echo "Error storing data: " . $stmt->error;
  }

  $stmt->close();
}

// Fetch the title and meta description from the database based on the current page
$pageIdentifier = 'dissertation-presentation-writing-services';
$title = ''; // Initialize an empty variable for title
$metaDescription = ''; // Initialize an empty variable for meta description

// Construct the query
$query = "SELECT title, meta_description FROM `dissertation-presentation-writing-services-title_and-description` WHERE page_identifier = '$pageIdentifier'";

// Execute the query using the established database connection
$result = $conn->query($query);

// Check if the query was successful
if ($result) {
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $title = $row['title'];
        $metaDescription = $row['meta_description'];
      
    } else {
        echo "No data found for the given page identifier.<br>";
    }
} else {
    echo "Error executing the query: " . $conn->error . "<br>";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $wordCount = $_POST['wordCount'];
    $dropdown = $_POST['dropdown'];
    $message = $_POST['message'];
    
    // Construct the email message
    $to = 'info@dissertationwritinghelp.net'; // Change this to the recipient's email address
    $subject = 'New Form Submission';
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Phone: $phone\n";
    $email_message .= "Word Count: $wordCount\n";
    $email_message .= "Dropdown: $dropdown\n";
    $email_message .= "Message: $message\n";
    
    // Send the email
    $headers = 'From: webmaster@example.com' . "\r\n" .
        'Reply-To: webmaster@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    
    if (mail($to, $subject, $email_message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Error sending email.";
    }
}
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <meta name="robots" content="all">
  <meta name="robots" content="follow, index">
  <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $title; ?></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.2.96/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="css/navbar.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/slider.css" />
  <link rel="stylesheet" href="css/sidebarnav.css"/>
  <link rel="stylesheet" href="css/faq.css">
  <link rel="stylesheet" href="css/footer.css">
<link rel="icon" type="image" href="images/Logo.png">
<?php include 'googleheadcode.php'; ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "Can You Create My Dissertation Presentation Before the Deadline?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Absolutely! We're capable of crafting your dissertation presentation ahead of the deadline. Inform us about the timeframe, and we'll ensure to provide your dissertation presentation well in advance. Our round-the-clock customer support is available for any questions, and we're committed to prompt delivery."
    }
  },{
    "@type": "Question",
    "name": "Can You Create My Marketing Dissertation Presentation?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Absolutely! Our team includes industry experts in marketing who are available 24/7 to cater to your needs for a marketing dissertation presentation. No need to worry we have you covered. Our skilled dissertation presentation writers know how to craft an outstanding presentation. We're eager and ready to assist you with your marketing dissertation presentation."
    }
  },{
    "@type": "Question",
    "name": "How to Begin Your Dissertation Presentation?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Starting a dissertation presentation is simple. Begin by restating your research question. Next, explain how your research findings provide answers to that question. Share your research's significance and acknowledge its limitations. Lastly, propose potential future research and suggest additional possibilities. This approach outlines both the beginning and conclusion of your dissertation presentation."
    }
  },{
    "@type": "Question",
    "name": "Why Have a Dissertation Presentation?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "The purpose of a dissertation presentation is to evaluate your entire dissertation. It aims to showcase your research, its objectives, and how effectively you can present and defend it. The dissertation presentation reflects your grasp of the research topic. In the case of a mid-research presentation, students can showcase their ongoing progress."
    }
  },{
    "@type": "Question",
    "name": "",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": ""
    }
  }]
}
</script>
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
    font-family: 'Poppins';
  }

  @media (max-width: 600px) {
    th, td {
      display: block;
      width: 100%;
    }
  }
  #reviews{
      color:#002D4C;
      font-family: 'Poppins';
  }
  #imagebanner{
      background-image: url('images/banner.png'); 
      padding-bottom:10px;
    background-repeat: no-repeat;
    height: auto;
    background-size: cover;

  }
  #besth4{
    color: white;
    background-color: #003a7a;
    font-family:'Poppins';
    font-weight: 700;
    font-size:42px
}
@media only screen and (max-width: 55.75em){
    #bluebox{
        width: 310px !important;
    }
}
@media (max-width: 767px){
#besth4 {
    font-size: 16px !important;
}
#imagebanner {
    background-image: url(images/banner.png);
    padding-bottom: 10px;
    background-repeat: no-repeat;
    height: 100%;
    background-size: cover;
}
#bluebox {
    background-color: #003a7a;
    padding-top: 25px;
    padding-bottom: 25px;
    border-left: 2px solid;
    border-color: #fc8821;
    margin-right: -47px;
    padding-left: 12px;
    margin-left: -10px;
    width: 335px;
}
#formentry{
    margin-left:0 !important;
}
}
#bluebox1{
    padding-top: 150px; 
}
#bluebox{
    background-color: #003a7a; 
    padding-top: 25px; 
    padding-bottom: 25px; 
    border-left: 2px solid; 
    border-color: #fc8821;
    margin-right:-47px;
    padding-left: 12px;
    margin-left: -10px;
}
#free{
    text-decoration: none;
    list-style: none; 
    color: white;
    font-family:'Poppins';
    margin-bottom: 8px;
        font-size: 16px;
}
#allcheckicon{
    color:#0BA8E6;
    font-weight: 900;
    padding-right:8px;
    
}
#formentry{
    margin-left:30px;
    background-color:white; 
    padding-top:30px; 
    margin-top:25px; 
    padding-bottom:30px; 
    padding-left:20px; 
    padding-right:20px;
    border-radius:10px;
    border-color:red;
}
#formheading{
     font-size:32px;
}
#font3{
    color: #0BA8E6; 
    font-size: 45px; 
    padding: 10px;
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
#allh4{
    color: white;
    font-family:'Poppins';
}
#allp{
    color: white;
    font-family:'Poppins';
}
#mbaallp{
    color: #777777;
    font-family:'Poppins';
}
@media (min-width: 768px){
#box1 {
    margin-right: -30px;
}
}
@media (min-width: 768px){
#box3 {
    margin-left: -25px;
}
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
  #heading3rd{
      text-align:center;
      font-family: 'Poppins';
    color: #002D4C;
    font-weight: 700;
    font-size: 3em;
  }
  tbody{
      color:#777777;
       font-family: 'Poppins';
  }
  th {
    border: 1px solid #ccc;
    padding: 12px;
    color: #002D4C;
    font-family: 'Poppins';
}
h3{
    font-family:'Poppins';
       color: #002D4C;
}
h5{
    font-family:'Poppins';
       color: #002D4C;
}
h2{
    font-family:'Poppins';
       color: #002D4C;
}
 h3 {
    cursor: pointer;
  }
    h4 {
    cursor: pointer;
  }
   h5 {
    cursor: pointer;
  }
   h2 {
    cursor: pointer;
  }
  h4 {
    font-family: 'Poppins';
    color: #002D4C;
}
/*customer review*/
 #sliderp{
     font-family: 'Poppins', sans-serif; 
     font-weight:300;
     font-style: italic;
     font-size: 0.9em;
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
 @media screen and (min-width: 1280px) and (min-height: 800px){
#bluebox {
    margin-left: 45px;
    margin-right: -50px;
}
}
@media (min-width: 1280px) and (max-width: 1366px) and (min-height: 768px) and (max-height: 1024px) {
 #formdiv{
      /*height:600px;*/
        margin-top: 25px;
       
  }
  #formentry{
       padding-bottom: 40px !important;
       padding-top: 30px !important;
  }
  
}
 .content {
    overflow: hidden;
    transition: max-height 0.2s ease-out;
  }

  .content p {
    margin: 0;
    padding: 0;
    opacity: 1;
    transition: opacity 0.3s ease-out;
    padding-bottom:15px;
  }

  .content.collapsed p {
    opacity: 0;
  }
  #paftertable{
      color:#777777;
      font-size:12px;
      font-family:'Poppins';
  }
/* Apply different styles for mobile screens */

table {
  width: 100%;
  border-collapse: collapse;
}

th, td {
  padding: 8px;
  text-align: left;
}

/* Apply different styles for mobile screens */
@media (max-width: 768px) {
  th, td {
    display: block;
    width: 50%; /* Display columns side by side on mobile */
    float: left;
    box-sizing: border-box;
  }
  
  th {
    text-align: center;
  }
  td{
    height: 182px;
  }
}
 .content {
    overflow: hidden;
    transition: max-height 0.2s ease-out;
  }
.content2 {
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}
  .content p {
    margin: 0;
    padding: 0;
    opacity: 1;
    transition: opacity 0.3s ease-out;
    padding-bottom:15px;
  }

  .content.collapsed p {
    opacity: 0;
  }
  h5{
    cursor:pointer;
}
ul{
    color:#777777;
  
}
#colorp{
    color:#777777;
}
  </style>
</head>
<body>
    <?php include 'googlebodycode.php'; ?>
    <p class="hidden">Get expert help for impactful dissertation presentations. Affordable rates. 25% off on your first order. Contact us at +44 7564 313 614.</p>
  <?php include 'includes/navbar.php'?>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="container-fluid banner-container" id="imagebanner">
        <div class="row">
          <div class="col-lg-5" id="bluebox1">
            <ul class="list" id="bluebox">
            <h1 class="list-heading" id="besth4">
  <?php echo $boxContent; ?>
</h1>

<li class="list-item" id="free">
  <i class="fa-solid fa-check" id="allcheckicon"></i> <?php echo $freeTopics[0] ?? ''; ?>
</li>
<li class="list-item" id="free">
  <i class="fa-solid fa-check" id="allcheckicon"></i> <?php echo $freeTopics[1] ?? ''; ?>
</li>
<li class="list-item" id="free">
  <i class="fa-solid fa-check" id="allcheckicon"></i> <?php echo $freeTopics[2] ?? ''; ?>
</li>
            </ul>
          </div>
          <div class="col-lg-7">
        <div class="d-flex align-items-center justify-content-center" id="formdiv">
              <form class="form" method="POST" id="formentry">
                <h4 class="form-heading" id="formheading"><?php echo $headings[0]; ?></h4>
                <div class="row mb-3">
                    <input type="hidden" method="POST" class="form-control" name="page" value="https://dissertationwritinghelp.net/dissertation-viva-counselling">
               <input type="hidden" class="form-control" name="date" value="<?php echo date('Y-m-d'); ?>">
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
                      <option value="option1"><?php echo $options[0]; ?></option>
                      <?php if (!empty($options[1])) { ?>
                      <option value="option8"><?php echo $options[1]; ?></option>
                      <?php } ?>
                      <?php if (!empty($options[2])) { ?>
                      <option value="option8"><?php echo $options[2]; ?></option>
                      <?php } ?>
                      <?php if (!empty($options[3])) { ?>
                      <option value="option8"><?php echo $options[3]; ?></option>
                      <?php } ?>
                      <?php if (!empty($options[4])) { ?>
                      <option value="option8"><?php echo $options[4]; ?></option>
                      <?php } ?>
                      <?php if (!empty($options[5])) { ?>
                      <option value="option8"><?php echo $options[5]; ?></option>
                      <?php } ?><
                      <?php if (!empty($options[6])) { ?>
                      <option value="option8"><?php echo $options[6]; ?></option>
                      <?php } ?>
                      <?php if (!empty($options[7])) { ?>
                      <option value="option9"><?php echo $options[7]; ?></option>
                      <?php } ?>
                      <?php if (!empty($options[8])) { ?>
                      <option value="option10"><?php echo $options[8]; ?></option>
                       <?php } ?>
                       <?php if (!empty($options[9])) { ?>
                      <option value="option10"><?php echo $options[9]; ?></option>
                       <?php } ?>
                       <?php if (!empty($options[10])) { ?>
                      <option value="option10"><?php echo $options[10]; ?></option>
                       <?php } ?>
                        <?php if (!empty($options[11])) { ?>
                      <option value="option11"><?php echo $options[11]; ?></option>
                       <?php } ?>
                        <?php if (!empty($options[12])) { ?>
                      <option value="option10"><?php echo $options[12]; ?></option>
                       <?php } ?>
                        <?php if (!empty($options[13])) { ?>
                      <option value="option10"><?php echo $options[13]; ?></option>
                       <?php } ?>
                        <?php if (!empty($options[14])) { ?>
                      <option value="option10"><?php echo $options[14]; ?></option>
                       <?php } ?>
                        <?php if (!empty($options[15])) { ?>
                      <option value="option10"><?php echo $options[15]; ?></option>
                       <?php } ?>
                        <?php if (!empty($options[16])) { ?>
                      <option value="option10"><?php echo $options[16]; ?></option>
                       <?php } ?>
                        <?php if (!empty($options[17])) { ?>
                      <option value="option10"><?php echo $options[17]; ?></option>
                       <?php } ?>
                        <?php if (!empty($options[18])) { ?>
                      <option value="option10"><?php echo $options[18]; ?></option>
                       <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-12">
                    <textarea class="form-control" id="message" name="message" rows="4" placeholder="Message"></textarea>
                  </div>
                </div>
                <div class="d-flex justify-content-center align-items-start">
                  <button type="submit" class="btn btn-danger btn-block" style="width: 100%;background-color:#02397b;border:none;">Send</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  
       <!--three boxes start-->
<div class="container">
  <div class="row align-items-stretch">
    <div class="col-lg-4 col-md-6 col-sm-12">
      <div id="box1" class="col-box h-100">
        <i class="fontawesome-icon fa-tools fas circle-no" id="font3"></i>
        <h5 id="allh4"><?php echo $box1_title; ?></h5>
        <p id="allp"><?php echo $box1_content; ?></p>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12">
      <div id="box2" class="col-box h-100">
        <i class="fontawesome-icon fa-lightbulb far circle-no" id="font3"></i>
        <h5 id="allh4"><?php echo $box2_title; ?></h5>
        <p id="allp"><?php echo $box2_content; ?></p>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12">
      <div id="box3" class="col-box h-100">
        <i class="fontawesome-icon fa-user-edit fas circle-no" id="font3"></i>
        <h5 id="allh4"><?php echo $box3_title; ?></h5>
        <p id="allp"><?php echo $box3_content; ?></p>
      </div>
    </div>
  </div>
</div>

      <br>
      <br>
        <!-- Add the rest of your content here -->
       <div class="container">
	<div class="row">
		<div class="col-lg-12" id="go1">
			<div id="divheading">
              <h3 id="heading"><?php echo $heading; ?></h3>
			</div>
			<p id="section3p"><?php echo $para; ?></p>
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
    <div class="col-lg-12">
      <h2 id="heading3rd">Simple process to buy Dissertation Presentation Writing Services</h2>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-lg-12" style="padding:15px;">
      <h3 onclick="toggleContent2(this)"><?php echo $heading1; ?></h3>
    <div class="content2 collapsed">
      <p id="mbaallp"><?php echo $para1; ?></p>
       </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
            <h4 onclick="toggleContent4(this)"><?php echo $heading2; ?><span class="toggle-icon">+</span></h4>
            <div class="content">
            <p id="mbaallp"><?php echo $para2; ?></p>
            </div>
            <h4 onclick="toggleContent4(this)"><?php echo $heading3; ?><span class="toggle-icon">+</span></h4>
            <div class="content">
            <p id="mbaallp"><?php echo $para3; ?></p>
            </div>
          </div>
          <div class="col-lg-6">
            <h4 onclick="toggleContent4(this)"><?php echo $heading4; ?><span class="toggle-icon">+</span></h4>
            <div class="content">
            <p id="mbaallp"><?php echo $para4; ?></p>
            </div>
            <h4 onclick="toggleContent4(this)"><?php echo $heading5; ?><span class="toggle-icon">+</span></h4>
            <div class="content">
            <p id="mbaallp"><?php echo $para5; ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-lg-12 text-center">
             <img src="images/Looking-to-Purchase-Presentation-Writing-Services.webp" alt="Looking to Purchase Presentation Writing Services" id="subpagebanner" class="img-fluid">
        </div>
    </div>
</div>
<!---<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-lg-12 text-center">
             <img src="images/Outstanding-Support-In-Developing-For-Masters-Dissertation-Proposals-Help.webp" id="subpagebanner" class="img-fluid">
        </div>
    </div>
</div>
<!--After brownbox container-->
<div class="container">
  <div class="row"> 
    <div class="col-lg-12">
      <h3 onclick="toggleContent2(this)"><?php echo $headingb1; ?></h3>
       <div class="content2 collapsed">
      <p id="mbaallp"><?php echo $parab1; ?></p>
      </div>
      
      <h3 onclick="toggleContent4(this)"><span class="toggle-icon">+</span> <?php echo $headingb2; ?></h3>
       <div class="content">
      <p id="mbaallp"><?php echo $parab2; ?></p>
      </div>
      <h3 onclick="toggleContent4(this)"><span class="toggle-icon">+</span> <?php echo $headingb3; ?></h3>
    <div class="content">
      <p id="mbaallp"><?php echo $parab3; ?></p>
    </div>
    
      <h3 onclick="toggleContent4(this)"><span class="toggle-icon">+</span> <?php echo $headingb4;?></h3>
         <div class="content">
      <p id="mbaallp"><?php echo $parab4;?></p>
      </div>
       <h3 onclick="toggleContent4(this)"><span class="toggle-icon">+</span> <?php echo $headingb5;?></h3>
         <div class="content">
      <p id="mbaallp"><?php echo $parab5;?></p>
      </div>  
      <h3 onclick="toggleContent(this)"><span class="toggle-icon">+</span> <?php echo $headingb6;?></h3>
         <div class="content">
      <p id="mbaallp"><?php echo $parab6;?></p>
       
      </div>
     <h3 onclick="toggleContent(this)"><span class="toggle-icon">+</span> <?php echo $headingb7;?></h3>
         <div class="content">
      <p id="mbaallp"><?php echo $parab7;?></p>
      </div>
      <h3 onclick="toggleContent(this)"><?php echo $headingb8;?></h3>
         <div class="content">
      <p id="mbaallp"><?php echo $parab8;?></p>
      </div>
           <h3 onclick="toggleContent(this)"><?php echo $headingb9;?></h3>
         <div class="content">
      <p id="mbaallp"><?php echo $parab9;?></p>
      </div>
    </div>
  </div>
</div>

<!-- our client container start-->
 <?php include 'includes/assignment-industry-experts.php'?>
<div class="container" id="reviewss"  style="padding-top: 50px;">
  <div class="row" style="background-color: #f5f6f7;padding:30px;">
    <div class="col-lg-6">
     <h3 id="customerreviewheading">Recent Testimonial:</h3>
     <p id="customerp">One of our recent clients shared their experience with our affordable MBA dissertation services:</p>
    </div>  
    <div class="col-lg-6">
    <div id="testimonialSlider" class="carousel slide" data-bs-ride="carousel">
      

        <!-- Testimonial Slides -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="testimonial">
              <p id="sliderp">
                  "When I considered buying an MBA dissertation online, I was wary of choosing the wrong platform. My grade was non-negotiable, and I couldn't afford any compromise. Seeing my senior score 95% on her dissertation from Dissertation Writing Help made my decision clear. I chose DWH and selected Elena Rick to fulfill my dissertation needs. The results were beyond my expectations – not only did I achieve the best score, but I also received appreciation from my professor! It has truly been a fantastic experience in every aspect."
              </p>
               <p><strong>Samuel Paul</strong></p>
            </div>
          </div>
        </div>

       
      </div>
    </div>
  </div>
</div>

    <!--After brownbox container end--!-->
          <!--FAQ container start--!-->
        
              <?php include 'includes/dissertation-presentation-writing-services-faq.php'?>
           
          <!--FAQ container end--!-->
  <?php include 'includes/footer.php'?>
  <script src="javascript/faq.js"> </script>
  <script src="javascript/navbar.js"> </script>
  <script>
  // Wait for the DOM to load
  document.addEventListener('DOMContentLoaded', function() {
    var contentElements = document.querySelectorAll('.content');

    // Loop through each content element and collapse it
    contentElements.forEach(function(content) {
      var paragraph = content.querySelector('p');
      content.style.maxHeight = '0';
      paragraph.style.opacity = '0';
      content.classList.add('collapsed');
    });
  });

  function toggleContent(element) {
    var content = element.nextElementSibling;
    var paragraph = content.querySelector('p');

    if (content.classList.contains('collapsed')) {
      content.style.maxHeight = '0';
      content.classList.remove('collapsed');
      paragraph.style.opacity = '0';
      setTimeout(function() {
        content.style.maxHeight = content.scrollHeight + 'px';
        paragraph.style.opacity = '1';
      }, 10);
    } else {
      content.style.maxHeight = content.scrollHeight + 'px';
      content.classList.add('collapsed');
      paragraph.style.opacity = '0';
      setTimeout(function() {
        content.style.maxHeight = '0';
      }, 10);
    }
  }
</script>


<script>
  function toggleContent2(element) {
    var content2 = element.nextElementSibling;
    var paragraph = content2.querySelector('p');

    if (content2.classList.contains('collapsed')) {
      content2.style.maxHeight = '0';
      content2.classList.remove('collapsed');
      paragraph.style.opacity = '0';
      setTimeout(function() {
        content2.style.maxHeight = content2.scrollHeight + 'px';
        paragraph.style.opacity = '1';
      }, 200); // Increased delay for smoother transition
    } else {
      content2.style.maxHeight = content2.scrollHeight + 'px';
      content2.classList.add('collapsed');
      paragraph.style.opacity = '0';
      setTimeout(function() {
        content2.style.maxHeight = '0';
      }, 200); // Increased delay for smoother transition
    }
  }
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var contentElements = document.querySelectorAll('.content');

    contentElements.forEach(function(content) {
        content.style.maxHeight = '0';
        content.classList.add('collapsed');
    });
});

function toggleContent4(element) {
    var content = element.nextElementSibling;
    var paragraph = content.querySelector('p');
    var toggleIcon = element.querySelector('.toggle-icon');

    if (content.classList.contains('collapsed')) {
        content.style.maxHeight = content.scrollHeight + 'px';
        content.classList.remove('collapsed');
        paragraph.style.opacity = '1';
        toggleIcon.textContent = '-';
    } else {
        content.style.maxHeight = '0';
        content.classList.add('collapsed');
        paragraph.style.opacity = '0';
        toggleIcon.textContent = '+';
    }
}
</script>
</body>
</html>

      