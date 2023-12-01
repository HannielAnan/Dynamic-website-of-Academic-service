<?php
include 'dbconnection/dbconnect.php';

$query = "SELECT `heading`, `heading2`, `para1` FROM `index7`";
$result = $conn->query($query);

$heading1 = '';
$heading2 = '';
$para1 = '';

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $heading1 = $row["heading"];
    $heading2 = $row["heading2"];
    $para1 = $row["para1"];
} else {
    $heading1 = "Default heading1 content";
    $para1 = "Default para1 content";
}

// Close the database connection
$conn->close();
?>

<div class="container" id="head">
  <div class="row" style="background-color: #f5f6f7; margin-top:20px;">
    <div class="col-lg-3 col-md-12 text-center" id="div">
      <h5>FOUNDER & HEAD</h5>
    </div>
    <div class="col-lg-9 col-md-12">
      <h5 class="mt-3"><?php echo $heading1; ?></h5>
      <p id="section7p"><?php echo $heading2; ?></p>
      <p id="section7p"><?php echo $para1; ?></p>
    
    </div>
  </div>
</div>
<style>
@media (max-width: 767px){
    #div
    {
        margin-top: 40px !important;
    }
}
h5{
    font-family:'Poppins';
}
.mt-3{
       color:#002D4C; 
       font-family:'Poppins';
       font-size:32px;
}
#section7p{
    color: #777777;
    font-family:'Poppins';
}
#div{
    margin-top:120px;
}

</style>