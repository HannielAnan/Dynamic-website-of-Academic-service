<?php
// Assuming you have already established a connection to your MySQL database
include 'dbconnection/dbconnect.php';

// Query to fetch the data from your table
$query = "SELECT heading1, p1, heading2, p2, heading3, p3, heading4, p4, heading FROM index9";

// Execute the query
$result = $conn->query($query);

// Initialize variables to store the heading and paragraph values
$heading1 = "";
$p1 = "";
$heading2 = "";
$p2 = "";
$heading3 = "";
$p3 = "";
$heading4 = "";
$p4 = "";
$heading = "";

// Fetch the data from the result set
while ($row = $result->fetch_assoc()) {
    $heading = $row['heading'];
    $heading1 = $row['heading1'];
    $p1 = $row['p1'];
    $heading2 = $row['heading2'];
    $p2 = $row['p2'];
    $heading3 = $row['heading3'];
    $p3 = $row['p3'];
    $heading4 = $row['heading4'];
    $p4 = $row['p4'];
}

// Now you can use the variables ($heading1, $p1, $heading2, $p2, etc.) anywhere in your PHP code

// Close the database connection
$conn->close();
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="text-center mt-4" id="offer"><?php echo $heading; ?></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <img src="images/Best-Dissertation-Writing-Help.webp" alt="Best Dissertation Writing Help" title="Best Dissertation Writing Help" class="img-fluid" id="bestbannerhome" width="100%" height="auto" loading="lazy">
        </div>
    </div>
  <div class="row">
    <div class="col-lg-6">
      <h4 id="heading1" onclick="toggleContent(this)"><?php echo $heading1; ?></h4>
      <div class="content">
         <p id="innerp4"><?php echo $p1; ?></p>
      </div>
      <h4 id="heading1" onclick="toggleContent(this)"><?php echo $heading2; ?></h4>
      <div class="content">
        <p id="p4"><?php echo $p2; ?></p>
      </div>
    </div>
    <div class="col-lg-6">
      <div>
        <h4 id="heading1" onclick="toggleContent(this)"><?php echo $heading3; ?></h4>
        <div class="content">
          <p id="p4"><?php echo $p3; ?></p>
        </div>
      </div>
      <h4 id="heading1" onclick="toggleContent(this)"><?php echo $heading4; ?></h4>
      <div class="content">
        <p id="p4"><?php echo $p4; ?></p>
      </div>
    </div>
  </div>
</div>
<style>
#bestbannerhome{
 padding-bottom:20px;   
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
  #offer{
      font-family: 'Poppins', sans-serif;
      font-weight:bold;
      padding-top:50px;
      padding-bottom:40px;
      color:#002D4C;
      font-size:3rem;
  }
  #heading1{
      padding-bottom:15px;
      font-family: 'Poppins', sans-serif; 
      text-align:center;
      color: #002D4C;
      font-size: 22px;
      font-weight: 600;
  }
  .content{
      padding-bottom:20px;
      color: #777777;
  }
  #p4{
      font-family: 'Poppins', sans-serif;
      color:#777777;
      padding:0px;
  }
  #innerp4{
      font-family: 'Poppins', sans-serif;
      color:#777777;
         padding-top: 5px;
    padding-bottom: 5px;
  }
</style>
<script>
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









