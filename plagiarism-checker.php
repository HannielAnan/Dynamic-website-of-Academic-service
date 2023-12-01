
<?php
// Add these lines for debugging

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ensure the form fields are set
    if (
        isset($_POST['Subject']) &&
        isset($_POST['Level']) &&
        isset($_POST['degree']) &&
        isset($_POST['whatsapp']) &&
        isset($_POST['email']) &&
        isset($_POST['WordCount'])
    ) {
        // Collect form data
        $subject = $_POST['Subject'];
        $level = $_POST['Level'];
        $degree = $_POST['degree'];
        $whatsapp = $_POST['whatsapp'];
        $email = $_POST['email'];
        $wordCount = $_POST['WordCount'];
// Add these lines for debugging
//error_log(print_r($_FILES, true));

        // Process file upload
        if (isset($_FILES['choose_file']) && $_FILES['choose_file']['error'] === UPLOAD_ERR_OK) {
            $fileTmpName = $_FILES['choose_file']['tmp_name'];
            $originalFileName = $_FILES['choose_file']['name'];
            $fileContent = file_get_contents($fileTmpName);
            
            // Formulate email content with file attachment
            $message = "Subject: $subject\nLevel: $level\nDegree: $degree\nWhatsApp: $whatsapp\nEmail: $email\nWord Count: $wordCount\n";
            
            // Attach the file to the email
            $separator = md5(time());
            $eol = PHP_EOL;
            
            $attachment = chunk_split(base64_encode($fileContent));
            $headers = "From: $email" . $eol;
            $headers .= "MIME-Version: 1.0" . $eol;
            $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol . $eol;
            
            $body = "--" . $separator . $eol;
            $body .= "Content-Type: text/plain; charset=\"iso-8859-1\"" . $eol;
            $body .= "Content-Transfer-Encoding: 7bit" . $eol . $eol;
            $body .= $message . $eol . $eol;
            $body .= "--" . $separator . $eol;
            $body .= "Content-Type: application/octet-stream; name=\"" . $originalFileName . "\"" . $eol;
            $body .= "Content-Transfer-Encoding: base64" . $eol;
            $body .= "Content-Disposition: attachment" . $eol . $eol;
            $body .= $attachment . $eol;
            $body .= "--" . $separator . "--";
            $to = 'info@dissertationwritinghelp.net'; // Set the actual recipient email address

            // Send email with attachment
            $success = mail($to, $subject, $body, $headers);
        } else {
            // Formulate email content without file attachment
            $message = "Subject: $subject\nLevel: $level\nDegree: $degree\nWhatsApp: $whatsapp\nEmail: $email\nWord Count: $wordCount\n";
            
            // Send email without attachment
            $success = mail($to, $subject, $message);
        }

        if ($success) {
            // Return a success response
            http_response_code(200);
            echo 'Form submitted successfully!';
        } else {
            // Return an error response
            http_response_code(500);
            echo 'Error submitting form! Check your server logs for more information.';
        }
    } else {
        // Return a bad request response if the required fields are not set
        http_response_code(400);
        echo 'Bad request! Ensure all required fields are filled.';
    }
} //else {
    // Return a bad request response if the request method is not POST
   // http_response_code(400);
    //echo 'Bad request! Invalid request method.';
//}
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta name="robots" content="all">
    <meta name="robots" content="follow, index">
    <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Plagiarism Checker</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.2.96/css/materialdesignicons.min.css">
	<link rel="stylesheet" href="css/navbar.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/slider.css" />
	<link rel="stylesheet" href="css/sidebarnav.css"/>
	<link rel="stylesheet" href="css/faq.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="icon" type="image" href="images/Logo.png">
	<meta property="og:title" content="Fix your dissertation with Dissertation Writing Help - Your trusted partner for addressing supervisor feedback.">
	<meta property="og:description" content="Correct plagiarism with access to key information sources. FAQs available. Contact us at +44 115 888 3562 or info@dissertationwritinghelp.net for exceptional dissertation help.">
	<meta property="og:url" content="https://dissertationwritinghelp.net/">
	<meta property="og:type" content="website">
	<meta property="og:image" content="https://dissertationwritinghelp.net/images/Best-Dissertation-Writing-Help.webp">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="Plagiarism Checker.">
	<meta name="twitter:description" content="Correct plagiarism with access to key information sources. FAQs available. Contact us at +44 115 888 3562 or info@dissertationwritinghelp.net for exceptional dissertation help.">
	<meta name="twitter:url" content="https://dissertationwritinghelp.net/">
	<meta name="twitter:image" content="https://dissertationwritinghelp.net/images/Best-Dissertation-Writing-Help.webp">

	<?php include 'googleheadcode.php'; ?>

	<style>
		body {
			background-color: #0f80de;
			overflow-x: hidden; /* Add this line */
		}
		nav {
			background-color: white;
		}
		.alert{
		    padding: 0rem 0.5rem;
		    padding-top:10px;
		}
		/* Style for the scrollable form */
.scrollable-form { /* Use sticky positioning */
    top: 50px; /* Adjust the top position as needed */
    right: 10px; /* Adjust the right position as needed */
    width: auto; /* Adjust the width as needed */
    background-color: #fff;
    border: 1px solid #ccc;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    /max-height: calc(120vh - 60px); /* Limit the height to the viewport height minus the top offset */ /* Add vertical scroll when content overflows */
    color:#002D4C;
    height:auto;
}
.custom-file-input {
  color: transparent;
}
.custom-file-input::-webkit-file-upload-button {
  visibility: hidden;
}
.custom-file-input::before {
  content: 'Select some files';
  color: black;
  display: inline-block;
  background: -webkit-linear-gradient(top, #f9f9f9, #e3e3e3);
  border: 1px solid #999;
  border-radius: 3px;
  padding: 5px 8px;
  outline: none;
  white-space: nowrap;
  -webkit-user-select: none;
  cursor: pointer;
  text-shadow: 1px 1px #fff;
  font-weight: 700;
  font-size: 10pt;
}
.custom-file-input:hover::before {
  border-color: black;
}
.custom-file-input:active {
  outline: 0;
}
.custom-file-input:active::before {
  background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9); 
}

form{
    padding-bottom:10px;
}
h1{
    color:white;
    font-family:'Poppins'; 
    text-align:center; 
    font-size: 62px;
    font-weight: bold;
    padding-top:20px;
    padding-bottom:20px;
}
h2{
    color:#002D4C;
    font-family:'Poppins';
}
ul{
    color:white;
   
}
#p{
    font-family:'Poppins'; 
    color:black;
    font-style: italic;
    font-size:12px;
}

@keyframes blink {
    0% { color: red; }
    50% { color: transparent; }
    100% { color: red; }
}
#a {
    color: red;
    font-family: 'Poppins';
    text-decoration: none;
    animation: blink 1s linear infinite;
}
#whatsappa {
    color:red;
    font-family: 'Poppins';
    text-decoration: none;
     animation: blink 1s linear infinite;
}
 .col-lg-6.d-flex.align-items-center {
        flex-direction: column;
    }
   #down {
            display: block; /* Set the default display property */
        }

        @media (min-width: 768px) {
            #down {
                display: none; /* Hide the image on screens wider than 767px (typical desktop screens) */
            }
        }
         /* Styles for non-mobile devices (greater than 600px wide, for example) */
        #right {
            display: block;
        }

        /* Media query for screens with a maximum width of 600px (typical for mobile devices) */
        @media (max-width: 600px) {
            #right {
                display: none; /* Hide the element on mobile devices */
            }
        }
        .border-width-4 {
  border-width: 4px !important;
}
.overflow-x-hidden {
  overflow-x: hidden;  
}
.h-100vh {
  height: 100vh;
}
.z-index-1 {
  z-index: 1;
}
.z-index-2 {
  z-index: 2;
}
.opacity-05 {
  opacity: 0.5;
}
.delay-01s {
  animation-delay: 0.2s;
}
.delay-02s {
  animation-delay: 0.4s;
}
.delay-03s {
  animation-delay: 0.6s;
}
.delay-04s {
  animation-delay: 0.8s;
}
.delay-05s {
  animation-delay: 1s;
}
.card-body {
    flex: 1 1 auto;
    padding: 0.1rem 1rem;
}
#i{
    color:black;
    font-size:74px;
    padding-top: 30px;
    padding-bottom: 30px
}
/*----  Main Style  ----*/
#cards_landscape_wrap-2{
  text-align: center;
  background: #F7F7F7;
}
#cards_landscape_wrap-2 .container{
  padding-top: 40px; 
  padding-bottom: 50px;
}
#cards_landscape_wrap-2 a{
  text-decoration: none;
  outline: none;
}
#cards_landscape_wrap-2 .card-flyer {
  border-radius: 5px;
  height: 400px;
}
#cards_landscape_wrap-2 .card-flyer .image-box{
  background: #ffffff;
  overflow: hidden;
  border-radius: 5px;
}
#cards_landscape_wrap-2 .card-flyer .image-box img{
  -webkit-transition:all .9s ease; 
  -moz-transition:all .9s ease; 
  -o-transition:all .9s ease;
  -ms-transition:all .9s ease; 
  width: 100%;
  height: 200px;
}
#cards_landscape_wrap-2 .card-flyer:hover .image-box img{
  opacity: 0.7;
  -webkit-transform:scale(1.15);
  -moz-transform:scale(1.15);
  -ms-transform:scale(1.15);
  -o-transform:scale(1.15);
  transform:scale(1.15);
}
#cards_landscape_wrap-2 .card-flyer .text-box{
  text-align: center;
}
#cards_landscape_wrap-2 .card-flyer .text-box .text-container{
  padding: 30px 18px;
}
#cards_landscape_wrap-2 .card-flyer{
  background: #FFFFFF;
  margin-top: 50px;
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  -ms-transition: all 0.2s ease-in;
  -o-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
  box-shadow: 0px 3px 4px rgba(0, 0, 0, 0.40);
}
#cards_landscape_wrap-2 .card-flyer:hover{
  background: #fff;
  box-shadow: 0px 15px 26px rgba(0, 0, 0, 0.50);
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  -ms-transition: all 0.2s ease-in;
  -o-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
  margin-top: 50px;
}
#cards_landscape_wrap-2 .card-flyer .text-box p{
  margin-top: 10px;
  margin-bottom: 0px;
  padding-bottom: 0px; 
  font-size: 14px;
  letter-spacing: 1px;
  color: #000000;
}
#cards_landscape_wrap-2 .card-flyer .text-box h6{
  margin-top: 0px;
  margin-bottom: 4px; 
  font-size: 18px;
  font-weight: bold;
  text-transform: uppercase;
  font-family: 'Poppins';
  letter-spacing: 1px;
  color: #002D4C;
}
#h4{
    color:white;
    font-size: 36px;
    text-align: center;
    padding-top: 30px;
    margin-bottom: 40px;
    font-family: 'Poppins', sans-serif;
}
#faqp{
    color:white;
}
#cards_landscape_wrap-1{
  padding-top:30px;
  padding-bottom:30px;
  background: white;
}
h3{
    color:#002D4C;
    font-family:'Poppins';
}
#plagiarismh3{
    padding-top:10px; 
    padding-bottom:10px;
    text-align:center;
}
	</style>

</head>
<body>
	<?php include 'googlebodycode.php'; ?>
	<?php include 'includes/navbar.php'?>
	<!-- Add this code within your HTML body -->
<!-- Add this code within your HTML body -->
<div id="popup" class="position-fixed h-100 w-100 top-0 start-0 overflow-x-hidden z-index-2" style="display: none;">
    <div class="position-absolute h-100 w-100 bg-dark opacity-05 z-index-1"></div>
    <div class="position-absolute top-50 start-50 translate-middle bg-white border-width-4 shadow-lg p-3 rounded z-index-2">
        <div role="alert" class="mx-3 mb-3 animated flipInX delay-05s">
            <div class="px-4 py-1 bg-primary text-white rounded-top">Detailed Alert</div>
            <div class="px-4 py-3 bg-white d-flex flex-column rounded-bottom">
                <p>Thank You for Choosing Dissertation Writing help!
                    <br> We appreciate your interest in Dissertation Writing help and the trust you’ve placed in us. Your submission has been successfully received. Our team is diligently working to assist you in your academic journey.</p>
                <a href="https://dissertationwritinghelp.net/plagiarism-checker">
                    <button type="button" class="btn btn-primary">GO BACK!</button>
                </a>
            </div>
        </div>
    </div>
</div>



	<div class="container">
	    	<h1>Get Your Plagiarism Check</h1>
		<div class="row" style="padding-bottom:30px;">
			<div class="col-lg-6">
			    <h2>Plagiarism Check</h2>
				<ul>
					<li>Upload word file</li>
					<li>Get a plagiarism report</li>
					<li>We provide offline Turnitin report.</li>
					<li>You will get a report via email.</li>
					<li>Value the confidentiality of your submissions</li>
					<li>Get your plagiarism decrease below 10% as per your academic need <strong><a href="https://dissertationwritinghelp.net/ordernow" id="a">Order Now!</a></strong></li>
				</ul>
				<div class="justify-content-center">
				    <div class="row">
				        <div class="col-lg-6">
			    			<img src="images/Plagiarism-girl.gif" class="img-fluid" id="right" alt="plagiarism-checker">
			    			<img src="images/Plagiarism-girl-down (1) (1).gif" class="img-fluid" id="down" alt="plagiarism-checker">
			    	</div>
			    	<div class="col-lg-6">
			    	    	<img src="images/BOOK-GIF-new (1) (1).gif" class="img-fluid">
			    	    </div>
			    	</div>
				</div>
			</div>
			<div class="col-lg-6 justify-content-center">
		<div class="scrollable-form">
				  <form class="form" method="POST" id="formentry">
                <div class="row mb-3">
                    <input type="hidden" method="POST" class="form-control" name="page" value="BLog page">
               <input type="hidden" class="form-control" name="date" value="<?php echo date('Y-m-d'); ?>">
                  <div class="col-md-6">
                    <input type="text" class="form-control" id="Subject" name="Subject" placeholder="Subject" required>
                  </div>
                  <div class="col-md-6">
                    <input type="text" class="form-control" id="Level" name="Level" placeholder="Level" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <input type="text" class="form-control" id="degree" name="degree" placeholder="Degree">
                  </div>
                  <div class="col-md-6">
                    <input type="number" class="form-control" id="whatsapp" name="whatsapp" placeholder="Whatsapp Number">
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <input class="form-control" type="email" id="email" name="email" placeholder="Email">
                  </div>
                   <div class="col-md-6">
                <!--<input type="file" class="custom-file-input">-->
             <input type="number" class="form-control" id="WordCount" name="WordCount" placeholder="Word Count">
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-12">
                     <input class="form-control" type="file" id="choose_file" name="choose_file" accept=".docx, .doc, .pdf">
                  </div>
                </div>
                <div class="d-flex justify-content-center align-items-start">
                  <button type="submit" class="btn btn-danger btn-block" style="width: 100%;background-color:#02397b;border:none;">Send</button>
                </div>
                <div style="padding-top:10px;">
                  <div class="card" style="background:#f7f7f7;">
                      <div class="card-body">
                          <div class="row">
                         <div class="col-lg-6">
                              Small document
                              <br>
                              Up to 7,500 words
                         </div>
                         <div class="col-lg-6 d-flex justify-content-end">
                            $19.95
                         </div>
                         </div>
                      </div>
                  </div>
              </div>
               <div style="padding-top:10px;">
                  <div class="card" style="background:#f7f7f7;">
                      <div class="card-body">
                          <div class="row">
                         <div class="col-lg-6">
                              Regular document
                              <br>
                              7,500 to 50,000 words
                         </div>
                         <div class="col-lg-6 d-flex justify-content-end">
                            $29.95
                         </div>
                         </div>
                      </div>
                  </div>
              </div>
               <div style="padding-top:10px;">
                  <div class="card" style="background:#f7f7f7;">
                      <div class="card-body">
                          <div class="row">
                         <div class="col-lg-6">
                              Large document
                              <br>
                              50,000+ words
                         </div>
                         <div class="col-lg-6 d-flex justify-content-end">
                            $39.95
                         </div>
                         </div>
                      </div>
                  </div>
              </div>
                 <div class="alert" id="note">
                  <p id="p"><strong>Note :-</strong> Upload Word file and wait for the plagiarism report to be sent out via email you provided. Get in touch with customer support representative to track your report.  <a href="https://wa.me/447564313614" id="whatsappa"><strong>+44 115 888 3562</strong></a></p>
              </div>
              
              </form>
              </div>
             
			</div>
		</div>
	</div>
    <!--div class="container">
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <h2>Receive your plagiarism report</h2>
            </div>
        </div>
         <div class="row">
            <div class="col-lg-3 d-flex justify-content-center">
                <i class="fa-solid fa-file-arrow-up" id="i"></i>
               
            </div>
             <div class="col-lg-3 d-flex justify-content-center" id="i">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
             <div class="col-lg-3 d-flex justify-content-center" id="i">
                <i class="fa-solid fa-file"></i>
            </div>
             <div class="col-lg-3 d-flex justify-content-center" id="i">
                <i class="fa-solid fa-file-lines"></i>
            </div>
        </div>
    </div-->
       <!-- Topic Cards -->
    <div id="cards_landscape_wrap-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <h2>Receive your plagiarism report</h2>
            </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <a href="">
                        <div class="card-flyer">
                            <div class="text-box">
                                <div class="image-box">
                                    <img src="images/card-plagiarism (1) (1).webp" alt="plagiarism-checker">
                                </div>
                                <div class="text-container">
                                    <h6>1.Submit</h6>
                                    <p>your paper by uploading a Microsoft Word, PDF, or ODT file, enter your details, and proceed with the payment.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <a href="">
                        <div class="card-flyer">
                            <div class="text-box">
                                <div class="image-box">
                                    <img src="images/card4-plagiarism (1) (1).webp" alt="plagiarism-checker">
                                </div>
                                <div class="text-container">                                    
                                    <h6>2.Be Patient for a Few Minutes</h6>
                                    <p>Your document is being compared to billions of web pages, books, articles, and more. This process may require a few minutes.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <a href="">
                        <div class="card-flyer">
                            <div class="text-box">
                                <div class="image-box">
                                  <img src="images/card3-plagiarism.webp" alt="plagiarism-checker">
                                </div>

                                <div class="text-container">
                                    <h6>Get the Report</h6>
                                   <p>The report will show where your work is similar to other sources, and it will give you a plagiarism score.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <a href="">
                        <div class="card-flyer">
                            <div class="text-box">
                                <div class="image-box">
                                     <img src="images/card5-plagiarism (1).webp" alt="plagiarism-checker">
                                </div>
                                <div class="text-container">
                                    <h6>Correct Plagiarism</h6>
                                   <p>Include the proper sources or rephrase your writing. Our helpful Knowledge Base can guide you through this process.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
     <div id="cards_landscape_wrap-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3>You probably think you don't need a plagiarism checker</h3>
                <p>After all, you never copy and paste someone else's work, you're skilled at rephrasing, and you diligently keep track of your sources.</p>
                <p>But what about unintentional plagiarism? It happens more often than you realize! Maybe you paraphrased a bit too closely or forgot to include that last citation or set of quotation marks.</p>
                <p>Even if it's accidental, plagiarism is a serious offense. It could lead to failing your course or being put on academic probation. The risks simply aren't worth it.</p>
            </div>
            <div class="col-lg-6">
            <img src="images/Plagiarism-Check (1).webp" class="img-fluid" alt="plagiarism-checker">
            </div>
        </div>
    </div>
    </div>
    <div id="cards_landscape_wrap-2">
    <div class="container" style="background:#f7f7f7;">
        <div class="row">
            <div class="col-lg-4 d-flex justify-content-start" style="padding-top:10px;padding-bottom:10px;">
               
               <div class="card" style="width: 100%;">
   <img src="images/turnitin-partner.webp" class="img-fluid" alt="plagiarism-checker">
  <div class="card-body">
    <p class="card-text"><a href="https://www.dissertationwritinghelp.net/"><strong>Dissertation Writing Help</strong></a> uses advanced plagiarism-checking software to make sure your work is original. We're approved by Turnitin, a top-notch plagiarism prevention tool. Our software can catch anything from using the same words to changing words with similar meanings.</p>
  </div>
</div>
            </div>
            <div class="col-lg-4 d-flex justify-content-center" style="padding-top:10px;padding-bottom:10px;">
                <div class="card" style="width: 100%;">
   <img src="images/plagiarism-file (1) (1) (1).webp" class="img-fluid" alt="plagiarism-checker">
  <div class="card-body">
    <p class="card-text">You get special access to important information sources. We check what you submit against a huge database that includes 99 billion webpages, 8 million publications, and content in over 20 languages from around the world.</p>
  </div>
</div>
            </div>
            <div class="col-lg-4 d-flex justify-content-end" style="padding-top:10px;padding-bottom:10px;">
                 <div class="card" style="width: 100%;">
   <img src="images/plagiarism-checker-card.webp" class="img-fluid" alt="plagiarism-checker">
  <div class="card-body">
    <p class="card-text">Check for similarities with things that haven't been published yet. You can upload your past assignments, the sources you used, or even a classmate's paper to find (self-)plagiarism that might be hard to spot otherwise.</p>
  </div>
</div>
            </div>
        </div>
    </div>
    </div>
    <div id="cards_landscape_wrap-1">
    <div class="container">
        <h3 id="plagiarismh3">Manual Inspection Versus Plagiarism Detection</h3>
        <div class="row">
            <div class="col-lg-6">
                <p>
                    Certainly, you can go through each sentence yourself, but it takes a lot of time and you might accidentally use someone else's idea. The <strong><a href="https://dissertationwritinghelp.net/dissertation-writing-help">Dissertation writing help</a></strong> plagiarism checker helps students find and fix these issues before handing in their papers. So, how does it work? It looks at the entire text and compares it with things on the internet like websites and other online content. The longer the text, the more time it takes to check.
                </p>
            </div>
            <div class="col-lg-6">
                <p>
                    A plagiarism checker with a percentage feature is available, and it uses various methods to check for plagiarism.

Many universities use such tools because they have strict rules. To get a good grade, it's important to use a reliable and free plagiarism checker designed for students. <strong><a href="https://dissertationwritinghelp.net/dissertation-writing-help">Dissertation writing help</a></strong> has a popular anti-plagiarism software that is known for being very easy to use. It not only confirms that your assignment is unique, but it also highlights areas that need improvement and suggests changes. The detailed percentage report is useful for making your paper better.
                </p>
            </div>
        </div>
    </div>
    </div>
    <?php include 'includes/plagiarism-checker-faq.php'?>
	<?php include 'includes/footer.php'?>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="javascript/navbar.js"> </script>
	<script src="javascript/slider.js"> </script>
	<script src="javascript/sidebarnav.js"> </script>
	<script src="javascript/faq.js"> </script>
	<script>
    document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('formentry').addEventListener('submit', function (e) {
        e.preventDefault(); // Prevent the default form submission

        // Collect form data
        var formData = new FormData(this);

        // Fetch API to send form data to the server
        fetch(window.location.href, {
            method: 'POST',
            body: formData,
        })
        .then(response => {
            if (response.ok) {
                // Form submission successful, send Google Analytics event
                gtag('event', 'plagiarism_form_submission', {
                    'event_category': 'Form',
                    'event_label': 'Submission Successful',
                });

                // Update the page title
                document.title = 'Plagiarism Checker - Thank you for submitting the form';

                // Modify the URL to include the page title
                history.pushState({}, '', '/popup');
 
                // Show the pop-up
                document.getElementById('popup').style.display = 'block';
            } else {
                // Handle errors if needed
                console.error('Form submission failed!');
            }
        })
        .catch(error => {
            console.error('Error submitting form:', error);
        });
    });

    // Check for the 'popup' query parameter
    const urlParams = new URLSearchParams(window.location.search);
    const popupParam = urlParams.get('popup');

    // If 'popup' is set to 'show', display the pop-up
    if (popupParam === 'show') {
        // Update the page title
        document.title = 'Plagiarism Checker - Thank you for submitting the form';

        // Show the pop-up
        document.getElementById('popup').style.display = 'block';
    }
});


    </script>

</body>
</html>
