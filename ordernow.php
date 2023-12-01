<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Order Now - Dissertation Writing Help.net</title>
	  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css">
	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>
	  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> -->

	  <!-- Font Awesome CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="css/navbar.css" />
	  <link rel="stylesheet" href="css/style.css" />
	  <link rel="stylesheet" href="css/slider.css" />
    <link rel="stylesheet" href="css/sidebarnav.css"/>
    <link rel="stylesheet" href="css/faq.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="icon" type="image" href="images/Logo.png">
    <?php include 'googleheadcode.php'; ?>
    <style>
            .selectize-control.form-control {
            border-color: #ced4da;
            border-radius: 0.25rem;
            padding-right: 2.375rem;
        }

        .selectize-input {
            border-color: transparent;
            background-color: transparent;
        }

        .selectize-dropdown-content div {
            display: flex;
            align-items: center;
        }

        .selectize-dropdown-content div i {
            margin-left: auto;
            color: #6c757d;
        }

        .form-group {
            position: relative;
        }

        .form-group .icon {
            position: absolute;
            right: 0.75rem;
            top: 70%;
            transform: translateY(-50%);
            pointer-events: none;
        }
        .copyright {
  display:block;
  margin-top: 100px;
  text-align: center;
  font-family: 'Poppins';
  font-size: 12px;
  font-weight: bold;
  text-transform: uppercase;
}
.copyright a{
  text-decoration: none;
  color: #EE4E44;
}
.file-upload{
    margin-top: 23px;
}
 textarea.form-control {
    height:35px;
}
#btn-danger{
    background: linear-gradient(to bottom, #002d4c 0%, #0ba8e6 100%);
    border: none;
    color:white;
    font-family: 'Poppins';
    font-weight: 500;
}

h2{
    font-family: 'Poppins';
    font-size: 40px;
    font-weight: 600;
    color: #002D4C;
    
}
h1{
    font-family: 'Poppins';
    font-size: 40px;
    font-weight: 600;
    color: #002D4C;
    
}
form{
    font-family:'Poppins';
}
    </style>
</head>
<body>
<?php
// Include PHPMailer classes
require_once 'PHPMailer-master/src/PHPMailer.php';
require_once 'PHPMailer-master/src/SMTP.php';
require_once 'PHPMailer-master/src/Exception.php';

// Initialize variables outside the if block
$yourName = '';
$email = '';
$phone = '';
$education = '';
$academic_subject = '';
$paper_type = '';
$number_of_pages = '';
$word_count = '';
$delivery_time = '';
$citation_style = '';
$extra_requirements = '';
$fileTmpName = ''; // Initialize these variables
$originalFileName = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $yourName = $_POST['your_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $education = $_POST['education'];
    $academic_subject = $_POST['academic_subject'];
    $paper_type = $_POST['paper_type'];
    $number_of_pages = $_POST['number_of_pages'];
    $word_count = $_POST['word_count'];
    $delivery_time = $_POST['delivery_time'];
    $citation_style = $_POST['citation_style'];
    $extra_requirements = $_POST['extra_requirements'];

    // Check if file was uploaded successfully
    if (isset($_FILES['choose_file']) && $_FILES['choose_file']['error'] === UPLOAD_ERR_OK) {
        // Process the file upload
        $fileTmpName = $_FILES['choose_file']['tmp_name'];
        $fileSize = $_FILES['choose_file']['size'];
        $originalFileName = $_FILES['choose_file']['name'];
        $fileType = $_FILES['choose_file']['type'];

        // Read the file content
        $fileContent = file_get_contents($fileTmpName);
    }

    // Connect to the database (replace with your database credentials)
    $servername = "localhost";
    $username = "acadvdfr_theexperts";
    $password = "gqQxDDtr4XTY";
    $dbname = "acadvdfr_theexperts";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the SQL query to insert the form data into the table
    $stmt = $conn->prepare("INSERT INTO order_form_data (your_name, email, phone, education, academic_subject, paper_type, number_of_pages, word_count, delivery_time, citation_style, extra_requirements, choose_file, original_file_name, file_type) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssssssss", $yourName, $email, $phone, $education, $academic_subject, $paper_type, $number_of_pages, $word_count, $delivery_time, $citation_style, $extra_requirements, $fileContent, $originalFileName, $fileType);
    $stmt->execute();

    // Close the database connection
    $stmt->close();
    $conn->close();

    // Send email using PHPMailer
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls'; // Change this line
    $mail->Host = 'dissertationwritinghelp.net';
    $mail->Port = 587;
    $mail->Username = 'info@dissertationwritinghelp.net';
    $mail->Password = '=*#4UO!3zzBo';

    $mail->addAddress('info@dissertationwritinghelp.net', 'Recipient Name'); // Replace with actual recipient email address and name
    $mail->setFrom('info@dissertationwritinghelp.net', 'Testing');
    $mail->Subject = 'New Order Submission';

    $mail->Body = "Name: $yourName\n"
        . "Email: $email\n"
        . "Phone: $phone\n"
        . "Education: $education\n"
        . "Academic Subject: $academic_subject\n"
        . "Paper Type: $paper_type\n"
        . "Number of Pages: $number_of_pages\n"
        . "Word Count: $word_count\n"
        . "Delivery Time: $delivery_time\n"
        . "Citation Style: $citation_style\n"
        . "Extra Requirements: $extra_requirements\n";

    if (isset($fileContent) && isset($originalFileName)) {
        // Attach the uploaded file
        $mail->addAttachment($fileTmpName, $originalFileName);
    }

    if ($mail->send()) {
        echo 'Email sent successfully.';
    } else {
        echo 'Email sending failed: ' . $mail->ErrorInfo;
    }

    // Display an alert and reload the page
    echo '<script>alert("Form submitted."); window.location.href = window.location.href;</script>';
}

// Handle file download
if (isset($_GET['file_id'])) {
    // Connect to the database (replace with your database credentials)
    $servername = "localhost";
    $username = "acadvdfr_theexperts";
    $password = "gqQxDDtr4XTY";
    $dbname = "acadvdfr_theexperts";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $fileId = $_GET['file_id'];

    // Retrieve file data from the database
    $stmt = $conn->prepare("SELECT original_file_name, file_type, choose_file FROM order_form_data WHERE id = ?");
    $stmt->bind_param("i", $fileId);
    $stmt->execute();
    $stmt->store_result();

    // Check if the file record exists
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($originalFileName, $fileType, $fileContent);
        $stmt->fetch();

        // Set the appropriate content type header
        header("Content-type: $fileType");

        // Set the file name for download
        header("Content-Disposition: attachment; filename=\"$originalFileName\"");

        // Output the file content
        echo $fileContent;
        exit; // Add this line to prevent further processing of the script
    }

    // Close the statement and database connection
    $stmt->close();
    $conn->close();
}

error_reporting(E_ALL);
ini_set('display_errors', 1);
?>


	<?php include 'includes/navbar.php'?>
    <div class="container">
    <div class="row"> 
        <div class="col-lg-9">
            <div class="container">
                <h1 style="text-align:center;">Fill Out The Order Form</h1>
                <form method="POST" action="https://dissertationwritinghelp.net/ordernow" enctype="multipart/form-data">
                <div class="row" style="padding-top:30px;">
                    <!-- Form inputs here -->
                    <div class="col-lg-4">
                <div class="form-group">
                    <label for="name">Your Name:</label>
                    <input type="text" class="form-control" id="name" name="your_name" placeholder="Enter your name" required>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="email">Your Email:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="phone">Phone Number:</label>
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" required> 
                </div>
            </div>
                </div>
                <div class="row" style="padding-top:30px;">
                    <!-- Form inputs here -->
                    <div class="col-lg-4">
                <div class="form-group">
                    <label for="education">Education:</label>
                    <div class="input-icon">
                        <select class="form-control" id="education" name="education" placeholder="Select education...">
                           <option selected="selected" disabled="true">--Please Select --</option>
                           <option value="Under Graduate">Under Graduate</option>
									<option value="Graduate">Graduate</option>
									<option value="Masters">Masters</option>
									<option value="PhD">PhD</option>
                        </select>
                        <span class="icon"><i class="fas fa-chevron-down"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="subject">Academic Subject:</label>
                    <div class="input-icon">
                        <select class="form-control" id="subject" name="academic_subject" placeholder="Select subject...">
                          <option selected="selected" disabled="true">--Please Select --</option>
                           <option value="Accounting">Accounting</option>
									<option value="Accounts Law">Accounts Law</option>
									<option value="Advertising">Advertising</option>
									<option value="Aeronautical Engineering">Aeronautical Engineering</option>
									<option value="Agency Law">Agency Law</option>
									<option value="Agriculture">Agriculture</option>
									<option value="Animal Management">Animal Management</option>
									<option value="Anthropology">Anthropology</option>
									<option value="Archaeology">Archaeology</option>
									<option value="Architecture">Architecture</option>
									<option value="Art">Art</option>
									<option value="Astrophysics">Astrophysics</option>
									<option value="Biochemistry">Biochemistry</option>
									<option value="Biology">Biology</option>
									<option value="Biotechnology">Biotechnology</option>
									<option value="Business">Business</option>
									<option value="Chemical Engineering">Chemical Engineering</option>
									<option value="Chemistry">Chemistry</option>
									<option value="Child Care">Child Care</option>
									<option value="Civil Engineering">Civil Engineering</option>
									<option value="Civil Litigation Law">Civil Litigation Law</option>
									<option value="Classics">Classics</option>
									<option value="Commercial Law">Commercial Law</option>
									<option value="Commercial Property Law">Commercial Property Law</option>
									<option value="Communications">Communications</option>
									<option value="Company Law / Business Law">Company Law / Business Law</option>
									<option value="Comparative Law">Comparative Law</option>
									<option value="Computer Engineering">Computer Engineering</option>
									<option value="Computing">Computing</option>
									<option value="Constitutional / Administrative Law">Constitutional / Administrative Law</option>
									<option value="Consumer Law">Consumer Law</option>
									<option value="Contract Law">Contract Law</option>
									<option value="Criminal Law">Criminal Law</option>
									<option value="Criminal Litigation">Criminal Litigation</option>
									<option value="Criminology">Criminology</option>
									<option value="Crisis Management">Crisis Management</option>
									<option value="Cultural Studies">Cultural Studies</option>
									<option value="Design">Design</option>
									<option value="Drama">Drama</option>
									<option value="E-Commerce">E-Commerce</option>
									<option value="Econometrics">Econometrics</option>
									<option value="Economics">Economics</option>
									<option value="Education">Education</option>
									<option value="Electrical Engineering">Electrical Engineering</option>
									<option value="Electronic Engineering">Electronic Engineering</option>
									<option value="Employment Law">Employment Law</option>
									<option value="Engineering">Engineering</option>
									<option value="English Language">English Language</option>
									<option value="Environmental Studies">Environmental Studies</option>
									<option value="Equity Law">Equity Law</option>
									<option value="Estate Management">Estate Management</option>
									<option value="European Law">European Law</option>
									<option value="European Studies">European Studies</option>
									<option value="Events Management">Events Management</option>
									<option value="Family Law">Family Law</option>
									<option value="Fashion">Fashion</option>
									<option value="Film Studies">Film Studies</option>
									<option value="Finance">Finance</option>
									<option value="Finance Law">Finance Law</option>
									<option value="Forensic Science">Forensic Science</option>
									<option value="General Law">General Law</option>
									<option value="Genetics">Genetics</option>
									<option value="Geography">Geography</option>
									<option value="Geology">Geology</option>
									<option value="History">History</option>
									<option value="Hospitality">Hospitality</option>
									<option value="Housing">Housing</option>
									<option value="Housing Law">Housing Law</option>
									<option value="HRM">HRM</option>
									<option value="Human Rights">Human Rights</option>
									<option value="I.T.">I.T.</option>
									<option value="Immigration Law">Immigration Law</option>
									<option value="Information Systems">Information Systems</option>
									<option value="Intellectual Property Law">Intellectual Property Law</option>
									<option value="International Development">International Development</option>
									<option value="International Law">International Law</option>
									<option value="International Relations">International Relations</option>
									<option value="International Studies">International Studies</option>
									<option value="Journalism">Journalism</option>
									<option value="Jurisprudence">Jurisprudence</option>
									<option value="Land Law / Property Law">Land Law / Property Law</option>
									<option value="Landlord and Tenant Law">Landlord and Tenant Law</option>
									<option value="Languages">Languages</option>
									<option value="Law">Law</option>
									<option value="Leisure Management">Leisure Management</option>
									<option value="Linguistics">Linguistics</option>
									<option value="Literature">Literature</option>
									<option value="Management">Management</option>
									<option value="Maritime Law">Maritime Law</option>
									<option value="Marketing">Marketing</option>
									<option value="Materials Science">Materials Science</option>
									<option value="Mathematics">Mathematics</option>
									<option value="Mechanical Engineering">Mechanical Engineering</option>
									<option value="Mechanics">Mechanics</option>
									<option value="Media">Media</option>
									<option value="Media and Information Technology Law">Media and Information Technology Law</option>
									<option value="Medicine">Medicine</option>
									<option value="Mental Health Law">Mental Health Law</option>
									<option value="Midwifery">Midwifery</option>
									<option value="Military">Military</option>
									<option value="Multimedia">Multimedia</option>
									<option value="Negligence Law">Negligence Law</option>
									<option value="Neuroscience">Neuroscience</option>
									<option value="Nursing">Nursing</option>
									<option value="Nutrition">Nutrition</option>
									<option value="Operations Management">Operations Management</option>
									<option value="Oriental Studies">Oriental Studies</option>
									<option value="Pathology">Pathology</option>
									<option value="Pharmacology">Pharmacology</option>
									<option value="Philosophy">Philosophy</option>
									<option value="Physical Education">Physical Education</option>
									<option value="Physical_Sciences">Physical_Sciences</option>
									<option value="Physics">Physics</option>
									<option value="Planning / Environmental Law">Planning / Environmental Law</option>
									<option value="Plant Science">Plant Science</option>
									<option value="Politics">Politics</option>
									<option value="Product Design">Product Design</option>
									<option value="Professional Conduct Law">Professional Conduct Law</option>
									<option value="Project Management">Project Management</option>
									<option value="Property">Property</option>
									<option value="Psychology">Psychology</option>
									<option value="Public Law">Public Law</option>
									<option value="Quantitative Methods">Quantitative Methods</option>
									<option value="Religion">Religion</option>
									<option value="Restitution Law">Restitution Law</option>
									<option value="Risk Management">Risk Management</option>
									<option value="Sciences">Sciences</option>
									<option value="Shipping Policy">Shipping Policy</option>
									<option value="Social Work">Social Work</option>
									<option value="Sociology">Sociology</option>
									<option value="Software Engineering">Software Engineering</option>
									<option value="Statistics">Statistics</option>
									<option value="Strategic Management">Strategic Management</option>
									<option value="Succession Law">Succession Law</option>
									<option value="Surveying">Surveying</option>
									<option value="Tax Law">Tax Law</option>
									<option value="Teaching">Teaching</option>
									<option value="Television">Television</option>
									<option value="Theatre">Theatre</option>
									<option value="Theology">Theology</option>
									<option value="Tort Law">Tort Law</option>
									<option value="Tourism">Tourism</option>
									<option value="Trusts Law">Trusts Law</option>
									<option value="Urban Studies">Urban Studies</option>
									<option value="Veterinary">Veterinary</option>
									<option value="Wills / Probate Law">Wills / Probate Law</option>
									<option value="Zoology">Zoology</option>
									<option value="Bio-informatics">Bio-informatics</option>
									<option value="Biomedical Sciences">Biomedical Sciences</option>
									<option value="Computer Forensics">Computer Forensics</option>
									<option value="Data Mining">Data Mining</option>
									<option value="Dentistry">Dentistry</option>
									<option value="Engineering Business Management">Engineering Business Management</option>
									<option value="Environmental Engineering">Environmental Engineering</option>
									<option value="Environmental Management">Environmental Management</option>
									<option value="Environmental Science">Environmental Science</option>
									<option value="Epidemiology">Epidemiology</option>
									<option value="Geophysics">Geophysics</option>
									<option value="Health and Safety Management">Health and Safety Management</option>
									<option value="Occupational Psychology">Occupational Psychology</option>
									<option value="Physiotherapy">Physiotherapy</option>
									<option value="Public Health">Public Health</option>
									<option value="Real Estate">Real Estate</option>
									<option value="Research Methods">Research Methods</option>
									<option value="Security Studies">Security Studies</option>
									<option value="Shipping and Trade Finance">Shipping and Trade Finance</option>
									<option value="Sports and Exercise Science">Sports and Exercise Science</option>
									<option value="Supply Chain Management">Supply Chain Management</option>
									<option value="Sustainable Energy">Sustainable Energy</option>
									<option value="Telecommunication Engineering">Telecommunication Engineering</option>
									<option value="Toxicology">Toxicology</option>
									<option value="Public Relations">Public Relations</option>
									<option value="Other">Other</option>
                        </select>
                        <span class="icon"><i class="fas fa-chevron-down"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="paper-type">Paper Type:</label>
                    <div class="input-icon">
                        <select class="form-control" id="paper-type" name="paper_type" placeholder="Select paper type...">
                          <option selected="selected" disabled="true">--Please Select --</option>
                           <option value="Dissertation">Dissertation</option>
									<option value="Dissertation Topics">Dissertation Topics</option>
									<option value="Dissertation-Abstract">Dissertation-Abstract</option>
									<option value="Dissertation Proposal">Dissertation Proposal</option>
									<option value="Dissertation- Analysis Chapter">Dissertation- Analysis Chapter</option>
									<option value="Dissertation- Conclusion Chapter">Dissertation- Conclusion Chapter</option>
									<option value="Dissertation- Introduction Chapter">Dissertation- Introduction Chapter</option>
									<option value="Dissertation- Literature Review Chapter">Dissertation- Literature Review Chapter</option>
									<option value="Dissertation- Methodology Chapter">Dissertation- Methodology Chapter</option>
									<option value="Dissertation Editing and Proof Reading">Dissertation Editing and Proof Reading</option>
									<option value="Essay">Essay</option>
									<option value="Admission Essay">Admission Essay</option>
									<option value="Scholarship Essay">Scholarship Essay</option>
									<option value="Case Study">Case Study</option>
									<option value="Annotated Bibliography">Annotated Bibliography</option>
									<option value="Assignment">Assignment</option>
									<option value="Book Report/Review">Book Report/Review</option>
									<option value="Case Analysis">Case Analysis</option>
									<option value="Course Work">Course Work</option>
									<option value="Information and Communication/ Computer Technology">Information and Communication/ Computer Technology</option>
									<option value="Reaction Paper">Reaction Paper</option>
									<option value="Research Paper">Research Paper</option>
									<option value="Research Proposal">Research Proposal</option>
									<option value="Statistics Project">Statistics Project</option>
									<option value="Term Paper">Term Paper</option>
									<option value="Thesis">Thesis</option>
									<option value="Thesis Proposal">Thesis Proposal</option>
									<option value="Laboratory Report">Laboratory Report</option>
									<option value="Movie Review">Movie Review</option>
									<option value="Multiple Choice Questions">Multiple Choice Questions</option>
									<option value="Power Point Presentation">Power Point Presentation</option>
									<option value="Article">Article</option>
									<option value="Speech">Speech</option>
									<option value="Other">Other</option>
                        </select>
                        <span class="icon"><i class="fas fa-chevron-down"></i></span>
                    </div>
                </div>
            </div>
                </div>
                <div class="row" style="padding-top:30px;">
                    <!-- Form inputs here -->
                    <div class="col-lg-4">
                <div class="form-group">
                    <label for="pages">Number of Pages:</label>
                    <input type="number" class="form-control" name="number_of_pages" id="pages" value="1">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="word-count">Word Count:</label>
                    <input type="number" class="form-control" name="word_count" id="word-count" value="0">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="delivery-time">Delivery Time:</label>
                    <div class="input-icon">
                        <select class="form-control" id="delivery-time" name="delivery_time" placeholder="Select delivery time...">
                          <option selected="selected" disabled="true">--Please Select --</option>
                          <option value="More than 15 Days">More than 15 Days</option>
									<option value="11-15 Days">11-15 Days</option>
									<option value="6-10 Days">6-10 Days</option>
									<option value="4-5 Days">4-5 Days</option>
									<option value="3 Days">3 Days</option>
									<option value="2 Days">2 Days</option>
									<option value="24 Hour">24 Hour</option>
                        </select>
                        <span class="icon"><i class="fas fa-chevron-down"></i></span>
                    </div>
                </div>
            </div>
                </div>
               
        <div class="row" style="padding-top:30px;">
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="citation-style">Citation Style:</label>
                    <div class="input-icon">
                        <select class="form-control" id="citation-style" name="citation_style" placeholder="Select citation style...">
                            <option selected="selected" disabled="true">--Please Select --</option>
                            <option value="MLA">MLA</option>
									<option value="APA">APA</option>
									<option value="Harvard">Harvard</option>
									<option value="Oxford">Oxford</option>
									<option value="Chicago/Turabian">Chicago/Turabian</option>
                        </select>
                        <span class="icon"><i class="fas fa-chevron-down"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="extra-requirements">Extra Requirements:</label>
                    <textarea class="form-control" id="extra-requirements" name="extra_requirements" rows="3"></textarea>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                <div class="file-upload">
  <div class="file-select">
    <div class="file-select-button" id="fileName">Choose File</div>
    <div class="file-select-name" id="noFile">No file chosen...</div> 
    <input type="file" name="choose_file" id="chooseFile">
  </div>
</div>
                </div>
            </div>
                </div>
                <div style="display: flex; justify-content: center;padding-top:30px;padding-bottom:30px;">
                    <button type="submit" class="btn" id="btn-danger" style="width:100px;">Send</button>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <h5>Each order includes:</h5>
            <ul style="list-style:none;padding:10px;">
                <li><i class="fa-solid fa-check" style="padding-right:5px;color:red;"></i>Domain Expert Writers</li>
                <li><i class="fa-solid fa-check" style="padding-right:5px;color:red;"></i>100% Confidentiality Guaranteed</li>
                <li><i class="fa-solid fa-check" style="padding-right:5px;color:red;"></i>Free Plagiarism Report</li>
                <li><i class="fa-solid fa-check" style="padding-right:5px;color:red;"></i>Timely Delivery</li>
                <li><i class="fa-solid fa-check" style="padding-right:5px;color:red;"></i>Free Revisions Within Scope</li>
            </ul>
        </div>
    </div>
</form>
</div>

    <?php include 'includes/footer.php'?>
<script src="javascript/navbar.js"> </script>
<script src="javascript/slider.js"> </script>
<script src="javascript/sidebarnav.js"> </script>
<script src="javascript/faq.js"> </script>
<script>
        $(document).ready(function() {
            $('#education').selectize({
                renderOption: function(item, escape) {
                    return '<div>' + escape(item.text) + ' <i class="fas fa-chevron-down"></i></div>';
                }
            });
        });
    </script> 
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <?php include 'googlebodycode.php'; ?>
</body>
</html>