<?php
include 'dbconnection/dbconnect.php';

$query = "SELECT `box`, `id` FROM `index` WHERE id IN (1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 234)";
$result = $conn->query($query);

$tableOfContents = array();
$boxContent = "";
$freeTopics = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $tableOfContents[$row["id"]] = $row["table"];
        if ($row["id"] == 1) {
            $boxContent = $row["box"];
        } elseif (in_array($row["id"], [2, 3, 4])) {
            $freeTopics[$row["id"]] = $row["box"];
        }
    }
} else {
    $tableOfContents = array_fill(1, 11, "Default content");
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
}

// Close the database connection
$conn->close();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $wordCount = $_POST['wordCount'];
    $dropdown = $_POST['dropdown'];
    $message = $_POST['message'];
    $page = isset($_POST['page']) ? $_POST['page'] : 'Unknown Page';
    
    // Construct the email message
    $to = 'info@dissertationwritinghelp.net'; // Change this to the recipient's email address
    $subject = 'Form Submited by - Name: ' . $name . ' - Email: ' . $email; // Include name and email in subject
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Phone: $phone\n";
    $email_message .= "Word Count: $wordCount\n";
    $email_message .= "Subject: $dropdown\n";
    $email_message .= "Message: $message\n";
    $email_message .= "Page: $page\n"; 
    
    // Send the email
$headers = 'From: ' . $email . "\r\n" .
    'Reply-To: info@dissertationwritinghelp.net' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    
    if (mail($to, $subject, $email_message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Error sending email.";
    }
}
?>
<div class="container">
  <div class="row">
   <!--<div class="col-lg-3">
 <h2 id="tablecontent" class="table-heading">
    ?php echo isset($tableOfContents[1]) ? $tableOfContents[1] : ''; ?>
  </h2>
  
  <div id="table">
       <p class="table-item">
     <a href="#cont3" class="table-item" id="alltabs">
      <i class="fa-solid fa-chevron-right" id="allicons"></i>
      ?php echo isset($tableOfContents[2]) ? $tableOfContents[2] : ''; ?>
    </a>
    </p>
        <p class="table-item">
    <a href="#cont3" class="table-item" id="alltabs">
      <i class="fa-solid fa-chevron-right" id="allicons"></i>
      ?php echo isset($tableOfContents[3]) ? $tableOfContents[3] : ''; ?>
    </a>
    </p>
    <p class="table-item">
         <a href="#easy" class="table-item"id="alltabs">
      <i class="fa-solid fa-chevron-right" id="allicons"></i>
      ?php echo isset($tableOfContents[4]) ? $tableOfContents[4] : ''; ?>
      </a>
    </p>
    <p class="table-item">
         <a href="#tabs" class="table-item" id="alltabs">
      <i class="fa-solid fa-chevron-right" id="allicons"></i>
      ?php echo isset($tableOfContents[5]) ? $tableOfContents[5] : ''; ?>
      </a>
    </p>
    <p class="table-item">
         <a href="#head" class="table-item" id="alltabs">
      <i class="fa-solid fa-chevron-right" id="allicons"></i>
      ?php echo isset($tableOfContents[6]) ? $tableOfContents[6] : ''; ?>
      </a>
    </p>
    <p class="table-item">
         <a href="#methodology" class="table-item" id="alltabs">
      <i class="fa-solid fa-chevron-right" id="allicons"></i>
      ?php echo isset($tableOfContents[7]) ? $tableOfContents[7] : ''; ?>
       </a>
    </p>
    <p class="table-item">
         <a href="#offer" class="table-item" id="alltabs">
      <i class="fa-solid fa-chevron-right" id="allicons"></i>
      ?php echo isset($tableOfContents[8]) ? $tableOfContents[8] : ''; ?>
      </a>
    </p>
      <p class="table-item">
         <a href="#assigment" class="table-item" id="alltabs">
      <i class="fa-solid fa-chevron-right" id="allicons"></i>
      ?php echo isset($tableOfContents[12]) ? $tableOfContents[12] : ''; ?>
      </a>
    </p>
    <p class="table-item">
        <a href="#reviewss" class="table-item" id="alltabs">
      <i class="fa-solid fa-chevron-right" id="allicons"></i>
      ?php echo isset($tableOfContents[9]) ? $tableOfContents[9] : ''; ?>
      </a>
    </p>
    <p class="table-item">
         <a href="#faqss" class="table-item" id="alltabs">
      <i class="fa-solid fa-chevron-right" id="allicons"></i>
      ?php echo isset($tableOfContents[10]) ? $tableOfContents[10] : ''; ?>
       </a>
    </p>
  </div>
</div>-->

    <div class="col-lg-12">
      <div class="container-fluid banner-container" id="imagebanner">
        <div class="row">
          <div class="col-lg-5" id="bluebox1">
            <ul class="list" id="bluebox">
            <h1 class="list-heading" id="besth4">
  <?php echo $boxContent; ?>
</h1>

<li class="list-item" id="free">
  <i class="fa-solid fa-check" id="allcheckicon"></i> <?php echo $freeTopics[2] ?? ''; ?>
</li>
<li class="list-item" id="free">
  <i class="fa-solid fa-check" id="allcheckicon"></i> <?php echo $freeTopics[3] ?? ''; ?>
</li>
<li class="list-item" id="free">
  <i class="fa-solid fa-check" id="allcheckicon"></i> <?php echo $freeTopics[4] ?? ''; ?>
</li>
            </ul>
          </div>
          <div class="col-lg-7">
        <div class="d-flex align-items-center justify-content-center" id="formdiv">
              <form class="form" method="POST" id="formentry">
                <h4 class="form-heading" id="formheading"><?php echo $headings[0]; ?></h4>
                <div class="row mb-3">
                    <input type="hidden" method="POST" class="form-control" name="page" value="index.php">
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
                      <option value="Dissertation"><?php echo $options[0]; ?></option>
                      <?php if (!empty($options[1])) { ?>
                      <option value="Dissertation-Topics"><?php echo $options[1]; ?></option>
                      <?php } ?>
                      <?php if (!empty($options[2])) { ?>
                      <option value="Dissertation-Abstract"><?php echo $options[2]; ?></option>
                      <?php } ?>
                      <?php if (!empty($options[3])) { ?>
                      <option value="Dissertation-Proposel"><?php echo $options[3]; ?></option>
                      <?php } ?>
                      <?php if (!empty($options[4])) { ?>
                      <option value="Dissertation- Analysis Chapter"><?php echo $options[4]; ?></option>
                      <?php } ?>
                      <?php if (!empty($options[5])) { ?>
                      <option value="Dissertation- Conclusion Chapter"><?php echo $options[5]; ?></option>
                      <?php } ?><
                      <?php if (!empty($options[6])) { ?>
                      <option value="Dissertation- Introduction Chapter"><?php echo $options[6]; ?></option>
                      <?php } ?>
                      <?php if (!empty($options[7])) { ?>
                      <option value="Dissertation- Literature Review Chapter"><?php echo $options[7]; ?></option>
                      <?php } ?>
                      <?php if (!empty($options[8])) { ?>
                      <option value="Dissertation- Methodology Chapter"><?php echo $options[8]; ?></option>
                       <?php } ?>
                       <?php if (!empty($options[9])) { ?>
                      <option value="Dissertation Editing and Proof Reading"><?php echo $options[9]; ?></option>
                       <?php } ?>
                       <?php if (!empty($options[10])) { ?>
                      <option value="Essay"><?php echo $options[10]; ?></option>
                       <?php } ?>
                        <?php if (!empty($options[11])) { ?>
                      <option value="Admission Essay"><?php echo $options[11]; ?></option>
                       <?php } ?>
                        <?php if (!empty($options[12])) { ?>
                      <option value="Scholarship Essay"><?php echo $options[12]; ?></option>
                       <?php } ?>
                        <?php if (!empty($options[13])) { ?>
                      <option value="Case Study"><?php echo $options[13]; ?></option>
                       <?php } ?>
                        <?php if (!empty($options[14])) { ?>
                      <option value="Annotated Bibliography"><?php echo $options[14]; ?></option>
                       <?php } ?>
                        <?php if (!empty($options[15])) { ?>
                      <option value="Assignment"><?php echo $options[15]; ?></option>
                       <?php } ?>
                        <?php if (!empty($options[16])) { ?>
                      <option value="Book Report/Review"><?php echo $options[16]; ?></option>
                       <?php } ?>
                        <?php if (!empty($options[17])) { ?>
                      <option value="Case Analysis"><?php echo $options[17]; ?></option>
                       <?php } ?>
                        <?php if (!empty($options[18])) { ?>
                      <option value="Course Work"><?php echo $options[18]; ?></option>
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

<style>
/* For screens less than or equal to 767px (mobiles) */
@media (max-width: 767px) {
  #tablecontent {
    display: none;
  }
  .form-control {
    margin-top: 10px;
  }
  .align-items-center {
    align-items: center!important;
    width: 350px;
    margin-left: -45px;
  }
}

/* For iPhone 14 Pro */
@media only screen and (device-width: 390px) and (device-height: 844px) and (-webkit-device-pixel-ratio: 3) {
  .align-items-center {
    align-items: center!important;
    width: 350px;
    margin-left: -25px;
  }
}

/* For screens with a resolution of 414x736 (iPhone 6) */
@media (max-width: 414px) and (max-height: 736px) {
  .table-heading {
    display: none;
  }
  .align-items-center {
    align-items: center!important;
    width: 350px;
    margin-left: -10px;
  }
}

/* For screens with a width around 6.6 inches */
@media (max-width: 720px) and (max-height: 1600px) {
  .table-heading {
    display: none;
  }
  .align-items-center {
    align-items: center!important;
    width: 350px;
    margin-left: -45px;
  }
}
@media (max-width: 767px){
    #besth4{
        font-size: 16px !important;
    }
    #free{
         font-size: 14px !important;
    }
    #bluebox{
        margin-right: -15px !important;
        padding-left: 0px !important;
    }
  
}
@media (min-width: 1280px) and (max-width: 1366px) and (min-height: 768px) and (max-height: 1024px) {
  /* Your CSS styles for the 1280x1024 resolution go here */
  #imagebanner{
      height:600px;
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
@media (max-width: 768px) {
  /* Your CSS styles for mobile devices go here */
  #bluebox1{
      padding-top: 65px !important;
  }
}
@media only screen and (min-width: 1024px) and (min-height: 600px) and (max-width: 1024px) and (max-height: 600px) {
    #imagebanner{
        height:540px;
    }
}
#tablecontent{
   font-weight: 900;
   margin-top: 20px;
   color: #002D4C; 
   font-family: 'Poppins', sans-serif; 
}
#alltabs{
    text-decoration:none; 
    color:#777777;
    font-family:'Poppins';
    font-weight:600;
}
#allicons{
    font-size: 10px;
    padding-right:10px;
}
#imagebanner {
    position: relative; /* Make the parent element relative */
    background-image: url('images/banner (1).webp'); 
    padding-bottom: 10px;
    background-repeat: no-repeat;
    height: auto;
    background-size: cover;
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
    /*margin-right:-47px;*/
    padding-left: 12px;
    margin-left: -10px;
    position:relative;
}
#besth4{
    color: white;
    background-color: #003a7a;
    font-family:'Poppins';
    font-weight: 700;
    font-size:42px
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
    position:relative;
}
#formheading{
     font-size:32px;
}
@media (max-width: 767px) {
  /* Your CSS rules for mobile devices go here */
   #imagebanner{
        height:930px;
    }
}
@media screen and (min-width: 1280px) and (min-height: 800px) {
  /* Your CSS styles for devices with a resolution of 1280x800 or higher go here */
  #bluebox{
      margin-left: 45px;
      margin-right: -50px;
  }
}
@media (min-width: 1024px) and (min-height: 600px) {
    /* Your CSS rules for devices with a viewport of 1024x600 or larger */
    #bluebox{
        margin-right: -40px;
    }
}
@media (width: 414px) and (height: 896px) {
    /* Your CSS rules for devices with a viewport of 414x896 */
       #formentry{ 
           margin-right: -50px;
           
       }
}
@media (width: 390px) and (height: 844px) {
    /* Your CSS rules for devices with a viewport of 390x844 */
    #formentry{
    margin-right: -25px;
    }
}
@media (width: 393px) and (height: 851px) {
    /* Your CSS rules for devices with a viewport of 393x851 */
    #formentry{
    margin-right: -30px;
    }
}
@media (width: 412px) and (height: 915px) {
    /* Your CSS rules for devices with a viewport of 412x915 */
    #formentry{
    margin-right: -50px;
    }
}
@media (width: 412px) and (height: 914px) {
    /* Your CSS rules for devices with a viewport of 412x914 */
    #formentry{
    margin-right: -50px;
    }
}
@media (width: 414px) and (height: 736px) {
    /* Your CSS rules for devices with a viewport of 414x736 */
     #formentry{
    margin-right: -50px;
    }
}
@media (width: 412px) and (height: 892px) {
    /* Your CSS rules for devices with a viewport of 412x892 */
     #formentry{
    margin-right: -50px;
    }
}
@media (width: 428px) and (height: 926px) {
    /* Your CSS rules for devices with a viewport of 428x926 */
     #formentry{
    margin-right: -60px;
    }
}

h4 {
    font-family: 'Poppins';
    color: #002D4C;
}
#imagebanner::before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-color: rgba(0, 0, 0, 0.5); /* Adjust the color and opacity as needed */
    pointer-events: none; 
    
}
</style>
