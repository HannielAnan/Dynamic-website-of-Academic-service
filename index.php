<?php
include 'dbconnection/dbconnect.php';
// Fetch the title and meta description from the database based on the current page
$pageIdentifier = 'dissertationwritinghelp';
$title = ''; // Initialize an empty variable for title
$metaDescription = ''; // Initialize an empty variable for meta description

// Construct the query
$query = "SELECT title, meta_description FROM `index-title_and-description` WHERE page_identifier = '$pageIdentifier'";

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
 <?php
// Assuming $conn is a valid database connection

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT box FROM `index`";
$result = $conn->query($sql);

if (!$result) {
    die("Query failed: " . $conn->error);
}

$meta_description = '';

while ($row = $result->fetch_assoc()) {
    $meta_description .= $row['box'] . ' ';
}

// Decode HTML entities and trim
$meta_description = trim(html_entity_decode($meta_description));

// Generate the meta description tag
echo '<meta name="description" content="' . htmlspecialchars($meta_description) . '">';
?>

     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" async>
    
    
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" async>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.2.96/css/materialdesignicons.min.css" async>
    
    <!-- Your custom CSS files -->
    <link rel="stylesheet" href="css/navbar.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/slider.css" />
    <link rel="stylesheet" href="css/sidebarnav.css" />
    <link rel="stylesheet" href="css/faq.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="icon" type="image" href="images/Logo.png">
    
    <meta property="og:title" content="Expert Dissertation Writing Help Your Path to Academic Excellence">
    <meta property="og:description" content="Unlock top-tier Dissertation Writing Help for academic success. Our expert services ensure excellence in research, writing, and formatting. Trusted Service">
    <meta property="og:url" content="https://dissertationwritinghelp.net/">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://dissertationwritinghelp.net/images/Best-Dissertation-Writing-Help.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Expert Dissertation Writing Help Your Path to Academic Excellence">
    <meta name="twitter:description" content="Unlock top-tier Dissertation Writing Help for academic success. Our expert services ensure excellence in research, writing, and formatting. Trusted Service">
    <meta name="twitter:url" content="https://dissertationwritinghelp.net/">
    <meta name="twitter:image" content="https://dissertationwritinghelp.net/images/Best-Dissertation-Writing-Help.webp">
    
    <?php include 'googleheadcode.php'; ?>
    
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "FAQPage",
          "mainEntity": [{
            "@type": "Question",
            "name": "How can I monitor the progress of my dissertation order?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Our live chat support is accessible every day of the week, 365 days a year. You can easily communicate with our writers through email, live chat, and even WhatsApp!"
            }
          },
          {
            "@type": "Question",
            "name": "Why choose us for dissertation help?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Our team consists of Ph.D. writers from prestigious universities, ensuring top-notch assistance and excellent grades for your dissertations. Whenever you seek dissertation Writing help nearby for quick and reliable assistance, DissertationWritingHelp will always be there for you."
            }
          },
          {
            "@type": "Question",
            "name": "What sets our dissertation services apart as the most dependable?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Our impeccable track record speaks for itself, as we have never disappointed a single student with our exceptional dissertation writing services. Our team of field experts ensures each student receives a top-quality, tailor-made dissertation, that meets their specific requirements. When students come to us saying 'I need help writing my dissertation,' we always rise to the occasion. Our unwavering commitment to providing the best dissertation assistance makes us the most reliable choice."
            }
          },
          {
            "@type": "Question",
            "name": "What happens if I am dissatisfied with the services offered by your dissertation writing help company?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Ensuring customer satisfaction is our topmost priority, and we back it with a money-back guarantee if you are not content with our services."
            }
          }]
        }
    </script>
     <!-- Defer Non-Critical CSS -->

</head>
<body>
    <?php include 'googlebodycode.php'; ?>
    
    <p class="hidden">Unlock top-tier Dissertation Writing Help for academic success. Our expert services ensure excellence in research, writing, and formatting. Trusted Service</p>
    
    <?php include 'includes/navbar.php'?>
    <?php include 'includes/first.php'?>
    <?php include 'includes/second.php'?>
    <?php include 'includes/third.php'?>
    <?php include 'includes/fourth.php'?>
    <?php include 'includes/fifth.php'?> 
    <?php include 'includes/sixth.php'?>
    <?php include 'includes/seventh.php'?>
    <?php include 'includes/eight.php'?>
    <?php include 'includes/ninth.php'?>
    <?php include 'includes/ten.php'?> 
    <?php include 'includes/assignment-industry-experts.php'?>
    <?php include 'includes/eleven.php'?>
    <?php include 'includes/pricing.php'?>
    <?php include 'includes/faq.php'?>  
    <?php include 'includes/footer.php'?>
    
    <!-- Load Bootstrap JS asynchronously -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" async></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" async></script>
    <script src="javascript/navbar.js"></script>
    <script src="javascript/slider.js"></script>
    <script src="javascript/sidebarnav.js"></script>
    <script src="javascript/faq.js"></script>
   
</body>
</html>
