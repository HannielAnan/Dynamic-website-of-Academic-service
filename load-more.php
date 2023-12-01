<?php
include 'dbconnection/blogshow.php';

mysqli_set_charset($connection, "utf8mb4");

// Get the page number from the URL
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

// Calculate the offset based on the page number
$postsPerPage = 3;
$offset = ($page - 1) * $postsPerPage;

// Perform the SQL query to fetch additional blog posts with LIMIT and OFFSET
$sql = "SELECT * FROM `blog_post` ORDER BY `date` DESC LIMIT $postsPerPage OFFSET $offset";
$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        // Display the additional blog posts in the same format as your initial code
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
                        echo '<img src="data:image/jpeg;base64,' . base64_encode($image) . '" alt="' . $title . '" class="img-fluid" loading="lazy" />';
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
    // No more posts to load, return empty data
    echo 'No blog posts found.';
}

mysqli_close($connection);
?>
