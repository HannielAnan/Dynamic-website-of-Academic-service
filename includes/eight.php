<?php
include 'dbconnection/dbconnect.php';

$query = "SELECT `heading`, `para` FROM `index8` WHERE id IN (1, 2, 3)";
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

<!-- 4 boxes container start -->
<div class="container" style="margin-top: 20px;" id="methodology">
  <div class="row">
    <!-- first column start -->
   <div class="col-lg-3 col-md-6" style="padding: 0px; background-color: #f5f6f7; display: flex; flex-direction: column;">
      <div class="box-container" style="flex: 1; display: flex; flex-direction: column; align-items: flex-start;">
        <h4 id="boxesh3"><?php echo $data[0]['heading']; ?></h4>
        <div style="display: flex; flex-direction: column; justify-content: space-between; flex: 1;">
          <p id="boxesp"><?php echo $data[0]['para']; ?></p>
          <p id="readmore">
            <a href="https://dissertationwritinghelp.net/dissertation-introduction-writing">Read more<i class="fa-play-circle fas button-icon-right" id="boxesicon"></i></a>
          </p>
        </div>
      </div>
    </div>
    <!-- first column end -->

    <!-- second column start -->
    <div class="col-lg-3 col-md-6" style="padding: 0px;">
      <img src="images/laptop.webp" alt="Dissertation Writing help" width: "100%" height: "auto" loading="lazy">
    </div>
    <!-- second column end -->

    <!-- third column start -->
    <div class="col-lg-3 col-md-6" style="padding: 0px; background-color: #24262b; display: flex; flex-direction: column;">
      <div class="box-container" style="flex: 1; display: flex; flex-direction: column; align-items: flex-start;">
        <h4 id="boxesh"><?php echo $data[1]['heading']; ?></h4>
        <div style="display: flex; flex-direction: column; justify-content: space-between; flex: 1;">
          <p id="boxespmethodology"><?php echo $data[1]['para']; ?></p>
          <p id="methodologyreadmore">
           <a href="https://dissertationwritinghelp.net/dissertation-methodology-help"> Read more<i class="fa-play-circle fas button-icon-right" id="boxesicon"></i></a>
          </p>
        </div>
      </div>
    </div>
    <!-- third column end -->

    <!-- fourth column start -->
    <div class="col-lg-3 col-md-6" style="padding: 0px; background-color: #f5f6f7; display: flex; flex-direction: column;">
      <div class="box-container" style="flex: 1; display: flex; flex-direction: column; align-items: flex-start;">
        <h4 id="boxesh3"><?php echo $data[2]['heading']; ?></h4>
        <div style="display: flex; flex-direction: column; justify-content: space-between; flex: 1;">
          <p id="boxesp"><?php echo $data[2]['para']; ?></p>
          <p id="readmore">
           <a href="https://dissertationwritinghelp.net/dissertation-data-analysis-services">Read more<i class="fa-play-circle fas button-icon-right" id="boxesicon"></i></a>
          </p>
        </div>
      </div>
    </div>
    <!-- fourth column end -->
  </div>
</div>
<!-- 4 boxes container end -->
<style>
    #boxesh3{
        color: #002D4C; 
        padding: 10px;
        width: 200px;
        border-bottom: 3px solid #0BA8E6;
        font-family:'Poppins';
    }
     #boxesh{
        color: white; 
        padding: 10px;
        width: 200px;
        border-bottom: 3px solid #0BA8E6;
        font-family:'Poppins';
    }
    #boxesp{
        color:#777777;
        padding:10px;
        font-family:'Poppins';
    }
    #readmore{
        text-align:center;
        font-family:'Poppins';
        color:#777777;
    }
    #boxespmethodology{
        color:white;
        padding:10px;
        font-family:'Poppins';
    }
    #methodology{
        
        font-family:'Poppins';
        color:white;
    }
    #methodologyreadmore{
        text-align:center;
        font-family:'Poppins';
        color:white;
    }
</style>