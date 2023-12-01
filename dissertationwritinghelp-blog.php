<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'dbconnection/blogshow.php';

mysqli_set_charset($connection, "utf8mb4");

// Define the number of posts to load initially and for each subsequent "Load More" click
$postsPerPage = 3;

// Get the page number from the URL, or default to 1
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

// Calculate the offset based on the page number
$offset = ($page - 1) * $postsPerPage;

// Perform the SQL query to fetch blog posts with LIMIT and OFFSET
$sql = "SELECT * FROM `blog_post` ORDER BY `date` DESC LIMIT $postsPerPage OFFSET $offset";
$result = mysqli_query($connection, $sql);
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta name="robots" content="all">
    <meta name="robots" content="follow, index">
    <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog for Dissertation Writing Help</title>
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
    <link rel="icon" type="image" href="/images/Logo.png">
    <?php include 'googleheadcode.php'; ?>
<style>

    .card-title a {
        font-family: 'Poppins' !important;
        color: #002D4C !important;
        font-weight: 600 !important;
        text-decoration: none !important;
    }
    .card-body {
        box-shadow: 0 0 10px 0 rgba(0,0,0,.15);
    }
    .read-more {
        text-align: center;
    }
    .read-more a {
        text-align: center;
    }
    h1{
        font-family:'Poppins';
        color:#002D4C !important;
        text-align:center;
    }
    #more{
        padding-bottom:10px;
    }
</style>

</head>
<body>
     <?php include 'googlebodycode.php'; ?>

      <?php include 'includes/navbar.php'?>
      <h1>Dissertation writing help blog</h1>
   
    <div class="container">
        <div class="row" id="blog-posts">
       
            <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $url = $row['url']; 
                    $title = $row['title'];
                    $content = $row['content'];
                    $tags = $row['tags'];
                    $date = $row['date'];
                    $image = $row['image']; // Assuming there's a date column
                    // Strip HTML tags from the content
                    $content = strip_tags($content);
                    // Create a Bootstrap card for each blog post with a clickable title link
                    echo '<div class="col-lg-4 mb-4">'; // Adjust the column size and margin as needed
                    echo '<div class="card h-100">'; // Add h-100 class to make the card fill the parent height
                    echo '<div class="card-body d-flex flex-column">';
                    if (!empty($image)) {
                         $encodedUrl = urlencode($url); // Encode the URL
                        echo '<a href="blog/' . $encodedUrl . '">';
                        echo '<img src="data:image/jpeg;base64,' . base64_encode($image) . '" alt="' . $title . '" class="img-fluid" />';
                        echo '</a>';
                    }
                    $encodedUrl = urlencode($url); // Encode the URL
                    echo "<h5 class='card-title d-flex justify-content-center mb-3'><a href='blog/$encodedUrl'>$title</a></h5>"; // Link to blog.php with post_id as a parameter
                    echo "<p class='card-text flex-grow-1'>" . substr($content, 0, 150) . "...</p>"; // Display a summary of the content
                    echo "<div class='read-more d-flex justify-content-center'><a href='blog/$encodedUrl' class='btn btn-primary'>Read more</a></div>";// Link to blog.php with post_id as a parameter
                    // Add more card elements as needed
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo "No blog posts found.";
            }
            ?>
             
        </div>
        <!-- Add a "Load More" button -->
<div class="text-center" id="more">
    <button id="load-more" class="btn btn-primary">Load More</button>
</div>

    </div>
   
    <?php include 'includes/footer.php'?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>
<script src="javascript/navbar.js"> </script>
<script src="javascript/slider.js"> </script>
<script src="javascript/sidebarnav.js"> </script>
<script src="javascript/faq.js"> </script>
<script>
$(document).ready(function () {
    let page = 2; // Start with page 2, as the initial page is already loaded

    $('#load-more').on('click', function () {
        // Send an AJAX request to fetch more blog posts
        $.ajax({
            url: 'load-more.php?page=' + page, // Modify the URL accordingly
            type: 'GET',
            success: function (data) {
                if (data) {
                    // Append the new blog posts to the existing content
                    $('#blog-posts').append(data);
                    page++; // Increment the page number for the next "Load More" click
                } else {
                    // No more posts to load, so hide the "Load More" button
                    $('#load-more').hide();
                }
            },
        });
    });
});
</script>

</body>
</html>
<?php
// Close the database connection
mysqli_close($connection);
?>