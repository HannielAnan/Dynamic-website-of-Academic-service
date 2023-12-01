<?php
include 'dbconnection/dbconnect.php';

$query = "SELECT `heading`, `para` FROM `index8` WHERE id IN (1, 2, 3, 4, 5)";
$result = $conn->query($query);

$data = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = array(
            "heading" => $row["heading"],
            "para" => $row["para"]
        );
    }
} else {
    $data[] = array(
        "heading" => "Default heading content",
        "para" => "Default para content"
    );
}

// Close the database connection
$conn->close();
?>
<!-- 4 boxes container end -->
<!-- Second four box container start -->
<div class="container">
  <div class="row custom-row">
    <!-- first column start -->
    <div class="col-lg-3 col-md-6" style="position: relative;">
        <img src="images/Best-Dissertation-Writing-Help-bannar.webp" alt="Dissertation writing help" id="workingimg" width="100%" height="100%" loading="lazy">
    </div>
    <!-- first column end -->

    <!-- second column start -->
    <div class="col-lg-3 col-md-6" style="padding: 0px; background-color: #f5f6f7; display: flex; flex-direction: column;">
      <div class="box-container" style="flex: 1; display: flex; flex-direction: column; align-items: flex-start;">
        <h4 id="boxesh3"><?php echo $data[3]['heading']; ?></h4>
        <div style="display: flex; flex-direction: column; justify-content: space-between; flex: 1;">
          <p id="boxesp"><?php echo $data[3]['para']; ?></p>
          <p id="readmore">
            <a href="https://dissertationwritinghelp.net/literature-review-help">Read more<i class="fa-play-circle fas button-icon-right" id="boxesicon"></i></a>
          </p>
        </div>
      </div>
    </div>
    <!-- second column end -->

    <!-- third column start -->
    <div class="col-lg-3 col-md-6" style="position: relative;">
      <img src="images/boy1.webp" alt="Dissertation writing help" id="boyimg" width="100%" height="auto" loading="lazy">
    </div>
    <!-- third column end -->

    <!-- fourth column start -->
    <div class="col-lg-3 col-md-6" style="background-color: #f5f6f7;">
      <div class="box-container" style="flex: 1; display: flex; flex-direction: column; align-items: flex-start;">
        <h4 id="boxesh3"><?php echo $data[4]['heading']; ?></h4>
        <div style="display: flex; flex-direction: column; justify-content: space-between; flex: 1;">
          <p id="boxesp"><?php echo $data[4]['para']; ?></p>
         <p id="readmore"><a href="https://www.dissertationwritinghelp.net/conclusion-recommendations-dissertation">
            Read more<i class="fa-play-circle fas button-icon-right" id="boxesicon"></i></a>
          </p>
        </div>
      </div>
    </div>
    <!-- fourth column end -->
  </div>
</div>
<!-- Second four box container end -->

<style>
  .custom-row > * {
    padding-right: 0;
    padding-left: 0;
  }
  @media (max-width: 768px) {
  /* Your CSS styles for mobile devices go here */
  #workingimg{
      position: inherit !important;
  }
  #boyimg{
      position: inherit !important;
  }
}
  #boxesh3{
        color: #002D4C; 
        padding: 10px;
        width: 200px;
        border-bottom: 3px solid #0BA8E6;
        font-family:'Poppins';
    }
    #readmore{
        text-align:center;
        font-family:'Poppins';
        color:#777777;
    }
    #boyimg{
        width: 100%;
        height:auto;
        position: absolute;
        bottom: 0;
    }
     #boxesp{
        color:#777777;
        padding:10px;
        font-family:'Poppins';
    }
    #boxesicon{
        padding-left: 10px; 
        color: #0BA8E6;
    }
    #workingimg{
        width: 100%; 
        height: 100%;
        position: absolute; 
        bottom: 0;
    }
    @media screen and (width: 820px) and (height: 1180px) {
  /* Your CSS styles for screens with a width of 820px and a height of 1180px go here */
       #workingimg{
      position: inherit;
       }
}

</style>