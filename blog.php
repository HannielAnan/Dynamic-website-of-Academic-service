<?php include 'dbconnection/blogdb-connect.php'?>


<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta name="robots" content="all">
    <meta name="robots" content="follow, index">
    <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
       <?php
    // Check if the post_id is set in the URL
    if (isset($_GET['url'])) {
        $url = urldecode($_GET['url']);
    
        // Perform a database query to fetch the full blog post based on the post_id
        $sql = "SELECT `seo_title` FROM `blog_post` WHERE `url` = '$url'";
        $result = mysqli_query($connection, $sql);

        if (!$result) {
            die("Database query error: " . mysqli_error($connection));
        }
    
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $seo_title = $row['seo_title']; // Custom SEO title
    
            // Output the <title> element with the dynamically fetched SEO title
            echo '<title>' . htmlspecialchars($seo_title) . '</title>';
        } else {
            echo '<title>Default Title</title>'; // Set a default title if no SEO title is found
        }
    }

    ?>
    
    
  <?php
    if (isset($_GET['url'])) {
    // Get the post_id parameter from the URL
    $url = urldecode($_GET['url']);

    // Perform a database query to fetch the full blog post based on the post_id
    $sql = "SELECT * FROM `blog_post` WHERE `url` = '$url'";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $url = $row['url'];
        $title = $row['title'];
        $content = $row['content'];

        // Truncate both the title and content to a specified length
        $maxTitleLength = 70; // Adjust as needed
        $maxContentLength = 80; // Adjust as needed
        $meta_title = substr(strip_tags($title), 0, $maxTitleLength);
        $meta_description = substr(strip_tags($content), 0, $maxContentLength);

        // Concatenate the title and content in the meta description
        $meta_description = $meta_title . ' - ' . $meta_description;

        // Generate the meta description tag
        echo '<meta name="description" content="' . htmlspecialchars($meta_description) . '">';
    }
}

    ?>

 
	  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css">
	 <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>
	  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> -->

	  <!-- Font Awesome CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.2.96/css/materialdesignicons.min.css">
      <link rel="stylesheet" href="/css/navbar.css" />
	  <link rel="stylesheet" href="/css/style.css" />
	  <link rel="stylesheet" href="/css/slider.css" />
    <link rel="stylesheet" href="/css/sidebarnav.css"/>
    <link rel="stylesheet" href="/css/faq.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="icon" type="image" href="../images/Logo.png">
     <style>
        /* Style for the table of contents (TOC) */
         /* Style for the table of contents (TOC) */
        .table-of-contents {
            top: 0;
            right: 0;
            width: auto; /* Adjust the width as needed */
            background-color: #f9f9f9;
            padding: 20px;
            border-left: 1px solid #ccc;
            overflow-y: auto;
            max-height: 100%;
            margin-top:20px;
            margin-bottom:20px;
        }

        .table-of-contents h2 {
            font-size: 18px;
            margin-top: 0;
        }

        .table-of-contents ul {
            list-style-type: none;
            padding-left: 0;
        }

        .table-of-contents li {
            margin-bottom: 5px;
        }

        .table-of-contents a {
            text-decoration: none;
            color: #7e8890;
        }

        .table-of-contents a:hover {
            text-decoration: underline;
        }
        /* Style for the scrollable form */
/* Style for the scrollable form */
.scrollable-form {
    position: sticky; /* Use sticky positioning */
    top: 50px; /* Adjust the top position as needed */
    right: 10px; /* Adjust the right position as needed */
    width: auto; /* Adjust the width as needed */
    background-color: #fff;
    border: 1px solid #ccc;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    max-height: calc(100vh - 50px); /* Limit the height to the viewport height minus the top offset */
    overflow-y: auto; /* Add vertical scroll when content overflows */
    color:#002D4C;
}

h1{
    text-align:center;
    font-family:'Poppins';
    color:#002D4C;
    font-weight: 700;
    padding-top:20px;
}
h2{
    font-family:'Poppins';
    color:#002D4C;
    font-weight: 600;
    padding-top:20px;
}
  /* Style for paragraphs (p) */
    /* Style for paragraphs (p) within .blog-content */
.blog-content  {
    font-family: 'poppins', sans-serif;
    font-size: 16px;
    line-height: 1.5;
    color: #7e8890; /* Adjust the text color as needed */
}
#banner{
    padding-bottom:20px;
}
/* Add more styles for other HTML elements within .blog-content if needed */
/* Hide table of contents on mobile devices */
@media (max-width: 767px) {
  .table-of-contents {
    display: none;
  }
}
h3{
    color:#4193d0;
    padding-top:10px;
}
a {
    color: #0d6efd;
    text-decoration: none;
}
img{
    max-width: 100%;
    height: auto;
}
    </style>
   <?php include 'googleheadcode.php'; ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "What is the analysis of infrastructure?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Infrastructure analysis involves evaluating the components and systems that support a society or business, assessing their efficiency, sustainability, and impact on overall development."
    }
  },{
    "@type": "Question",
    "name": "What does infrastructure business include?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Infrastructure business encompasses sectors like transportation (roads, airports), construction, and energy infrastructures, focusing on developing and maintaining the essential structures for societal function."
    }
  },{
    "@type": "Question",
    "name": "What are the 4 types of infrastructure?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "The four main types of infrastructure are transportation, utilities (water and sewage), communication, and energy."
    }
  },{
    "@type": "Question",
    "name": "What is the infrastructure of a business model?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "In a business context, infrastructure refers to the foundational elements that support the organization's operations, including technology, facilities, and human resources. In conclusion, Ferrovial's consolidated management report and financial statements offer a rich tapestry of insights into the infrastructure business. Understanding the strategic vision, business performance, and sustainability practices provides a holistic view of the company's journey. With Dissertationwritinghelp by your side, navigating the intricacies of infrastructure analysis becomes a seamless process."
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


</head>
<body>
<?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
if (isset($_GET['url'])) {
    // Get the post_id parameter from the URL
    $url = urldecode($_GET['url']);

    // Perform a database query to fetch the full blog post based on the post_id
    $sql = "SELECT * FROM `blog_post` WHERE `url` = '$url'";
    $result = mysqli_query($connection, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $description = $row['description'];
        echo "<p class='hidden'>$description</p>";
    } else {
        echo ".";
    }
}
?>

     
    <?php include 'includes/navbar.php'?>
    
    <div class="container">
         <div class="row">
            <!-- Blog Title and Image (12 columns) -->
            <div class="col-md-12">
                <?php
                  error_reporting(E_ALL);
        ini_set('display_errors', 1);
                // Check if the post_id is set in the URL
                if (isset($_GET['url'])) {
                    // Get the post_id parameter from the URL
                   $url = urldecode($_GET['url']);

                    // Perform a database query to fetch the full blog post based on the post_id
                    $sql = "SELECT * FROM `blog_post` WHERE `url` = '$url'";
                    $result = mysqli_query($connection, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                        $url = $row['url'];
                        $title = $row['title'];
                        $image = $row['image']; // Fetch the image URL or content from the "Image" column

                        // Display the full blog post content
                        echo "<h1>$title</h1>";
                        // Display the image as a banner
                        if (!empty($image)) {
                            echo '<img src="data:image/webp;base64,' . base64_encode($image) . '" alt="' . $title . '" class="img-fluid" id="banner">';
                        }
                    } else {
                        echo "Blog post not found.";
                    }
                } else {
                    echo "Invalid blog post ID.";
                }
                ?>
            </div>
        </div>
        <div class="row">
            
            <!-- Blog Content (9 columns) -->
            <div class="col-md-8">
                <div class="blog-content">

                <?php
                 error_reporting(E_ALL);
                 ini_set('display_errors', 1);
// Function to generate a dynamic table of contents (TOC) based on <h1> headings
function generateDynamicTOC($content) {
    $pattern = '/<h2[^>]*>(.*?)<\/h2>/i';

    preg_match_all($pattern, $content, $matches);

    if (!empty($matches[0])) {
        echo '<div class="table-of-contents">';
        echo '<h2>Table of Contents</h2>';
        echo '<ul>';

        foreach ($matches[0] as $key => $heading) {
            $text = strip_tags($matches[1][$key]);
            $anchor = 'section' . ($key + 1); // Generate a unique anchor for each heading

            echo '<li>';
            echo '<a href="#' . $anchor . '">' . $text . '</a>';
            echo '</li>';
        }

        echo '</ul>';
        echo '</div>';
    }
}

if (isset($_GET['url'])) {
    // Get the post_id parameter from the URL
    $url = urldecode($_GET['url']);

    // Perform a database query to fetch the full blog post based on the post_id
    $sql = "SELECT * FROM `blog_post` WHERE `url` = '$url'";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $url = $row['url'];
        $title = $row['title'];
        $content = $row['content'];
        $tags = $row['tags'];
        $date = $row['date'];
        $image = $row['image']; // Fetch the image URL or content from the "Image" column

        // Output the content
        echo $content;
    } else {
        $content = "Table not found."; // Set a default message when no rows are found
        echo $content;
    }
} else {
    echo "Invalid blog post ID.";
}

// Close the database connection

// Close the database connection
mysqli_close($connection);
     

                ?>
               <?php
               // Display FAQs heading
echo '<h2>FAQs</h2>';
// Display FAQs
for ($i = 1; $i <= 4; $i++) {
    $faqQuestion = $row["faq{$i}_question"];
    $faqAnswer = $row["faq{$i}_answer"];

    if (!empty($faqQuestion) && !empty($faqAnswer)) {
        echo '<div class="question">';
        echo '<button id="question">';
        echo "<span id='answer'>{$faqQuestion}</span>";
        echo '<i class="fas fa-chevron-down d-arrow"></i>';
        echo '</button>';
        echo "<p>{$faqAnswer}</p>";
        echo '</div>';
    }
}
?>


                </div>
            </div>
             <!-- Table of Contents (3 columns) -->
            <div class="col-md-4">
                <?php
                // Generate the dynamic table of contents (TOC)
                generateDynamicTOC($content);
                ?>
                 <div class="scrollable-form">
                <h4>Consult With Experts</h4>
                <?php include 'includes/blog_form.php'?>
                </div>
            </div>
        </div>
    </div>
    <?php include 'includes/footer.php'?>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="/javascript/navbar.js"> </script>
<script src="/javascript/slider.js"> </script>
<script src="/javascript/sidebarnav.js"> </script>
<script src="/javascript/faq.js"> </script>
<script>
$(document).ready(function() {
    // Function to generate IDs for headings and add them dynamically
    function generateHeadingIds() {
        $('h2').each(function(index) {
            var id = 'section' + (index + 1);
            $(this).attr('id', id);
        });
    }

    // Call the function to generate IDs for headings
    generateHeadingIds();

    // Define the offset for scrolling down
    var scrollOffset = 50; // Adjust this value to control how far down it scrolls

    // Smooth scrolling for anchor links
    $('a[href^="#"]').on('click', function(event) {
        var target = $($(this).attr('href'));
        if (target.length) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top - scrollOffset // Subtract the offset
            }, 1500);
        }
    });
});
$(document).ready(function() {
    var $form = $('#scrollable-form');
    var initialTop = $form.offset().top;

    $(window).scroll(function() {
        var scrollTop = $(this).scrollTop();

        // Adjust the form's top position based on scrolling
        if (scrollTop > initialTop) {
            $form.css('top', scrollTop - initialTop + 'px');
        } else {
            $form.css('top', '0'); // Reset to the original top position
        }
    });
});

</script>

</body>
</html>