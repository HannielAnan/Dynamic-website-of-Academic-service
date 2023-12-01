<?php
include 'dbconnection/dbconnect.php';

$ids = array(1, 2, 3, 4, 5, 6, 7, 8);
$data = array();

foreach ($ids as $id) {
    $query = "SELECT `heading1`, `para1`, `li1`, `li2`, `li3`, `li4`, `li5`, `li6`, `li7`, `li8`, `li9` FROM `index6` WHERE id = $id";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $data[$id] = array(
            "heading1" => $row["heading1"],
            "para1" => $row["para1"],
            "liContents" => array(
                $row["li1"],
                $row["li2"],
                $row["li3"],
                $row["li4"],
                $row["li5"],
                $row["li6"],
                $row["li7"],
                $row["li8"],
                $row["li9"]
            )
        );
    } else {
        $data[$id] = array(
            "heading1" => "Default heading1 content",
            "para1" => "Default para1 content",
            "liContents" => array_fill(0, 9, "Default li content")
        );
    }
}

// Close the database connection
$conn->close();
?>


<!--sidebar container end!-->
<!-- Sidebar container Start -->
<div class="container" id="tabs">
  <div class="row" style="background-color: #f5f6f7; padding:20px;">
    <!-- first row first col start -->
    <div class="col-lg-12 col-md-12 col-sm-12" style="height: auto;">
      <div class="wrapper">
        <div class="sidebar">
          <ul class="sidebar-list">
            <li id="litab" style="text-decoration: none; list-style-type: none; padding: 8px; margin: 7px; border: 1px solid; border-color: #f1f2f2; background-color: #fff;font-family:'Poppins';color:#777777;" class="tab" data-tab="Marketing"><a href="#Marketing" style="color:#777777;text-decoration: none;" onclick="toggleIcon(this)">Management Marketing</a></li> 
            
            <a href="#Management1" onclick="toggleIcon(this)" style="text-decoration: none;color:#777777;font-family:'Poppins';">  <li class="tab-item mobile-only" id="tab1mobile" style="text-align:center;">Management Marketing </li></a>
             
             <!-- fist heading data -->
        <div class="info1 text-center" data-tab="Management1" style="color: #002D4C;">
          <div>
            <h2 style="font-family:'Poppins';"><?php echo $data[1]["heading1"]; ?></h2>
            <div><p style="font-family:'Poppins';"><?php echo $data[1]["para1"]; ?></p></div>
            <div class="row">
          <div class="col-lg-6">
          <ul style="color:#777777;font-family:'Poppins';">
              <li><?php echo $data[1]["liContents"][0]; ?></li>
              <li><?php echo $data[1]["liContents"][1]; ?></li>
              <li><?php echo $data[1]["liContents"][2]; ?></li>
              <li><?php echo $data[1]["liContents"][3]; ?></li>
              <li><?php echo $data[1]["liContents"][4]; ?></li>
            </ul>
            </div>  
            <div class="col-lg-6">
          <ul style="color:#777777;font-family:'Poppins';">
              <li><?php echo $data[1]["liContents"][5]; ?></li>
              <li><?php echo $data[1]["liContents"][6]; ?></li>
              <li><?php echo $data[1]["liContents"][7]; ?></li>
              <li><?php echo $data[1]["liContents"][8]; ?></li>
            </ul>
            </div>  
          </div>
          </div>
          <!-- Add other content here -->
        </div>
        <!-- fist heading data end -->
        
            <li id="litab1" style="text-decoration: none; list-style-type: none; padding: 8px; margin:7px; border:1px solid; border-color:#f1f2f2;background-color: #fff;font-family:'Poppins';color:#777777;"><a href="#Nursing" style="color:#777777;text-decoration:none;" onclick="toggleIcon(this)">Nursing</a></li>
            
            <a href="#Nursing1" onclick="toggleIcon(this)" style="text-decoration: none;color:#777777;font-family:'Poppins';"><li class="tab-item mobile-only" id="tab2mobile">Nursing</li></a>
           
            <!-- fist heading data -->
        <div class="info1" data-tab="Nursing1" style="color: #002D4C;">
          <div>
            <h2 style="font-family:'Poppins';"><?php echo $data[2]["heading1"]; ?></h2>
            <div><p style="font-family:'Poppins';"><?php echo $data[2]["para1"]; ?></p></div>
            <div class="row">
          <div class="col-lg-6">
          <ul style="color:#777777;font-family:'Poppins';">
              <li><?php echo $data[2]["liContents"][0]; ?></li>
              <li><?php echo $data[2]["liContents"][1]; ?></li>
              <li><?php echo $data[2]["liContents"][2]; ?></li>
              <li><?php echo $data[2]["liContents"][3]; ?></li>
              <li><?php echo $data[2]["liContents"][4]; ?></li>
            </ul>
            </div>  
            <div class="col-lg-6">
          <ul style="color:#777777;font-family:'Poppins';">
              <li><?php echo $data[2]["liContents"][5]; ?></li>
              <li><?php echo $data[2]["liContents"][6]; ?></li>
              <li><?php echo $data[2]["liContents"][7]; ?></li>
              <li><?php echo $data[2]["liContents"][8]; ?></li>
            </ul>
            </div>  
          </div>
          </div>
          <!-- Add other content here -->
        </div>
        <!-- fist heading data end -->
            <li id="litab2" style="text-decoration: none; list-style-type: none; padding: 8px; margin:7px; border:1px solid; border-color:#f1f2f2;background-color: #fff;font-family:'Poppins';color:#777777;"><a href="#law" style="color:#777777; text-decoration:none;" onclick="toggleIcon(this)">Law</a></li>
          
            <a href="#Law1" onclick="toggleIcon(this)" style="text-decoration: none;color:#777777;font-family:'Poppins';"><li class="tab-item mobile-only" id="tab3mobile">Law</li></a>
              
           <!-- fist heading data -->
        <div class="info1" data-tab="Law1" style="color: #002D4C;">
          <div>
            <h2 style="font-family:'Poppins';"><?php echo $data[3]["heading1"]; ?></h2>
            <div><p style="font-family:'Poppins';"><?php echo $data[3]["para1"]; ?></p></div>
            <div class="row">
           <div class="col-lg-6">
          <ul style="color:#777777;font-family:'Poppins';">
          <li><?php echo $data[3]['liContents'][0]; ?></li>
          <li><?php echo $data[3]['liContents'][1]; ?></li>
          <li><?php echo $data[3]['liContents'][2]; ?></li>
          <li><?php echo $data[3]['liContents'][3]; ?></li>
          <li><?php echo $data[3]['liContents'][4]; ?></li>
            </ul>
            </div>  
            <div class="col-lg-6">
          <ul style="color:#777777;font-family:'Poppins';">
          <li><?php echo $data[3]['liContents'][5]; ?></li>
          <li><?php echo $data[3]['liContents'][6]; ?></li>
          <li><?php echo $data[3]['liContents'][7]; ?></li>
          <li><?php echo $data[3]['liContents'][8]; ?></li>
            </ul>
            </div>  
          </div>
          </div>
          <!-- Add other content here -->
        </div>
        <!-- fist heading data end -->
            <li id="litab3" style="text-decoration: none; list-style-type: none; padding: 8px; margin:7px; border:1px solid; border-color:#f1f2f2;background-color: #fff;font-family:'Poppins';color:#777777;"><a href="#statistics" style="color:#777777;text-decoration:none;" onclick="toggleIcon(this)">Statistics</a></li>
          
            <a href="#Statistics1" onclick="toggleIcon(this)" style="text-decoration: none;color:#777777;font-family:'Poppins';">  <li class="tab-item mobile-only" id="tab4mobile">Statistics </li></a>
             
           <!-- fist heading data -->
        <div class="info1" data-tab="Statistics1" style="color: #002D4C;">
          <div>
            <h2 style="font-family:'Poppins';"><?php echo $data[4]["heading1"]; ?></h2>
            <div><p style="font-family:'Poppins';"><?php echo $data[4]["para1"]; ?></p></div>
            <div class="row">
          <div class="col-lg-6">
          <ul style="color:#777777;font-family:'Poppins';">
              <li><?php echo $data[4]["liContents"][0]; ?></li>
              <li><?php echo $data[4]["liContents"][1]; ?></li>
              <li><?php echo $data[4]["liContents"][2]; ?></li>
              <li><?php echo $data[4]["liContents"][3]; ?></li>
              <li><?php echo $data[4]["liContents"][4]; ?></li>
            </ul>
            </div>  
            <div class="col-lg-6">
          <ul style="color:#777777;font-family:'Poppins';">
              <li><?php echo $data[4]["liContents"][5]; ?></li>
              <li><?php echo $data[4]["liContents"][6]; ?></li>
              <li><?php echo $data[4]["liContents"][7]; ?></li>
              <li><?php echo $data[4]["liContents"][8]; ?></li>
            </ul>
            </div>  
          </div>
          </div>
          <!-- Add other content here -->
        </div>
        <!-- fist heading data end -->
            <li id="litab4" style="text-decoration: none; list-style-type: none; padding: 8px; margin:7px; border:1px solid; border-color:#f1f2f2;background-color: #fff;font-family:'Poppins';color:#777777;"><a href="#accounting" style="color:#777777;text-decoration:none;" onclick="toggleIcon(this)">Accounting</a></li>
          
            <a href="#accounting1" onclick="toggleIcon(this)" style="text-decoration: none;color:#777777;font-family:'Poppins';"> <li class="tab-item mobile-only" id="tab5mobile">Accounting</li></a>
              
           <!-- fist heading data -->
        <div class="info1" data-tab="accounting1" style="color: #002D4C;">
          <div>
            <h2 style="font-family:'Poppins';"><?php echo $data[5]["heading1"]; ?></h2>
            <div><p style="font-family:'Poppins';"><?php echo $data[5]["para1"]; ?></p></div>
            <div class="row">
          <div class="col-lg-6">
          <ul style="color:#777777;font-family:'Poppins';">
              <li><?php echo $data[5]["liContents"][0]; ?></li>
              <li><?php echo $data[5]["liContents"][1]; ?></li>
              <li><?php echo $data[5]["liContents"][2]; ?></li>
              <li><?php echo $data[5]["liContents"][3]; ?></li>
              <li><?php echo $data[5]["liContents"][4]; ?></li>
            </ul>
            </div>  
            <div class="col-lg-6">
          <ul style="color:#777777;font-family:'Poppins';">
              <li><?php echo $data[5]["liContents"][5]; ?></li>
              <li><?php echo $data[5]["liContents"][6]; ?></li>
              <li><?php echo $data[5]["liContents"][7]; ?></li>
              <li><?php echo $data[5]["liContents"][8]; ?></li>
            </ul>
            </div>  
          </div>
          </div>
          <!-- Add other content here -->
        </div>
        <!-- fist heading data end -->
            <li id="litab5" style="text-decoration: none; list-style-type: none; padding: 8px; margin:7px; border:1px solid; border-color:#f1f2f2;background-color: #fff;font-family:'Poppins';color:#777777;"><a href="#engineer" style="color:#777777;text-decoration:none;" onclick="toggleIcon(this)">Engineering</a></li>
             
            <a href="#engineer1" onclick="toggleIcon(this)" style="text-decoration: none;color:#777777;font-family:'Poppins';"><li class="tab-item mobile-only" id="tab6mobile">Engineering </li></a>
             
            <!-- fist heading data -->
        <div class="info1" data-tab="engineer1" style="color: #002D4C;">
          <div>
            <h2 style="font-family:'Poppins';"><?php echo $data[6]["heading1"]; ?></h2>
            <div><p style="font-family:'Poppins';"><?php echo $data[6]["para1"]; ?></p></div>
            <div class="row">
          <div class="col-lg-6">
          <ul style="color:#777777;font-family:'Poppins';">
              <li><?php echo $data[6]["liContents"][0]; ?></li>
              <li><?php echo $data[6]["liContents"][1]; ?></li>
              <li><?php echo $data[6]["liContents"][2]; ?></li>
              <li><?php echo $data[6]["liContents"][3]; ?></li>
              <li><?php echo $data[6]["liContents"][4]; ?></li>
            </ul>
            </div>  
            <div class="col-lg-6">
          <ul style="color:#777777;font-family:'Poppins';">
              <li><?php echo $data[6]["liContents"][5]; ?></li>
              <li><?php echo $data[6]["liContents"][6]; ?></li>
              <li><?php echo $data[6]["liContents"][7]; ?></li>
              <li><?php echo $data[6]["liContents"][8]; ?></li>
            </ul>
            </div>  
          </div>
          </div>
          <!-- Add other content here -->
        </div>
        <!-- fist heading data end -->
            <li id="litab6" style="text-decoration: none; list-style-type: none; padding: 8px; margin:7px; border:1px solid; border-color:#f1f2f2;background-color: #fff;font-family:'Poppins';color:#777777;"><a href="#information" style="color:#777777;text-decoration:none;" onclick="toggleIcon(this)">Information Technology</a></li>
         
            <a href="#information1" onclick="toggleIcon(this)" style="text-decoration: none;color:#777777;font-family:'Poppins';">   <li class="tab-item mobile-only" id="tab7mobile">Information </li></a>
             
           <!-- fist heading data -->
        <div class="info1" data-tab="information1" style="color: #002D4C;">
          <div>
            <h2 style="font-family:'Poppins';"><?php echo $data[7]["heading1"]; ?></h2>
            <div><p style="font-family:'Poppins';"><?php echo $data[7]["para1"]; ?></p></div>
            <div class="row">
          <div class="col-lg-6">
          <ul style="color:#777777;font-family:'Poppins';">
              <li><?php echo $data[7]["liContents"][0]; ?></li>
              <li><?php echo $data[7]["liContents"][1]; ?></li>
              <li><?php echo $data[7]["liContents"][2]; ?></li>
              <li><?php echo $data[7]["liContents"][3]; ?></li>
              <li><?php echo $data[7]["liContents"][4]; ?></li>
            </ul>
            </div>  
            <div class="col-lg-6">
          <ul style="color:#777777;font-family:'Poppins';">
              <li><?php echo $data[7]["liContents"][5]; ?></li>
              <li><?php echo $data[7]["liContents"][6]; ?></li>
              <li><?php echo $data[7]["liContents"][7]; ?></li>
              <li><?php echo $data[7]["liContents"][8]; ?></li>
            </ul>
            </div>  
          </div>
          </div>
          <!-- Add other content here -->
        </div>
        <!-- fist heading data end -->
            <li id="litab7" style="text-decoration: none; list-style-type: none; padding: 8px; margin:7px; border:1px solid; border-color:#f1f2f2;background-color: #fff;font-family:'Poppins';color:#777777;"><a href="#ecnomics" style="color:#777777;text-decoration:none;" onclick="toggleIcon(this)">Economics</a></li>
             
            <a href="#economics1" onclick="toggleIcon(this)" style="text-decoration: none;color:#777777;font-family:'Poppins';"><li class="tab-item mobile-only" id="tab8mobile">ecnomics</li></a>
              
            <!-- fist heading data -->
        <div class="info1" data-tab="economics1" style="color: #002D4C;">
          <div>
            <h2 style="font-family:'Poppins';"><?php echo $data[8]["heading1"]; ?></h2>
            <div><p style="font-family:'Poppins';"><?php echo $data[8]["para1"]; ?></p></div>
            <div class="row">
          <div class="col-lg-6">
          <ul style="color:#777777;font-family:'Poppins';">
              <li><?php echo $data[8]["liContents"][0]; ?></li>
              <li><?php echo $data[8]["liContents"][1]; ?></li>
              <li><?php echo $data[8]["liContents"][2]; ?></li>
              <li><?php echo $data[8]["liContents"][3]; ?></li>
              <li><?php echo $data[8]["liContents"][4]; ?></li>
            </ul>
            </div>  
            <div class="col-lg-6">
          <ul style="color:#777777;font-family:'Poppins';">
              <li><?php echo $data[8]["liContents"][5]; ?></li>
              <li><?php echo $data[8]["liContents"][6]; ?></li>
              <li><?php echo $data[8]["liContents"][7]; ?></li>
              <li><?php echo $data[8]["liContents"][8]; ?></li>
            </ul>
            </div>  
          </div>
          </div>
          <!-- Add other content here -->
        </div>
        <!-- fist heading data end -->
            <!-- Add other list items here -->
          </ul>
        </div>
      </div>
    </div>
    <!-- first row first col end -->
    <div class="container desktop-tabs">
    <!-- second row second col start -->
    <div class="col-lg-12 col-md-8 col-sm-12" style="height: auto;">
      <div class="main_content">
        <!-- fist heading data -->
        <div class="info" data-tab="Marketing" id="Marketing" style="color: #002D4C;">
          <div>
            <h2 style="font-family:'Poppins';"><?php echo $data[1]["heading1"]; ?></h2>
            <div><p>   <p style="font-family:'Poppins';"><?php echo $data[1]["para1"]; ?></p></p></div>
            <div class="row">
          <div class="col-lg-6">
          <ul style="color:#777777;font-family:'Poppins';">
              <li><?php echo $data[1]["liContents"][0]; ?></li>
              <li><?php echo $data[1]["liContents"][1]; ?></li>
              <li><?php echo $data[1]["liContents"][2]; ?></li>
              <li><?php echo $data[1]["liContents"][3]; ?></li>
              <li><?php echo $data[1]["liContents"][4]; ?></li>
            </ul>
            </div>  
            <div class="col-lg-6">
          <ul style="color:#777777;font-family:'Poppins';">
              <li><?php echo $data[1]["liContents"][5]; ?></li>
              <li><?php echo $data[1]["liContents"][6]; ?></li>
              <li><?php echo $data[1]["liContents"][7]; ?></li>
              <li><?php echo $data[1]["liContents"][8]; ?></li>
            </ul>
            </div>  
          </div>
          </div>
          <!-- Add other content here -->
        </div>
        <!-- fist heading data end -->
        <!-- Second heading data -->
        <div class="info" id="Nursing" data-tab="Nursing" style="color: #002D4C;";>
          <div>
            <h2 style="font-family:'Poppins';"><?php echo $data[2]["heading1"]; ?></h2>
            <div><p style="font-family:'Poppins';"><?php echo $data[2]["para1"]; ?></p></div>
            <div class="row">
          <div class="col-lg-6">
          <ul style="color:#777777;font-family:'Poppins';">
              <li><?php echo $data[2]["liContents"][0]; ?></li>
              <li><?php echo $data[2]["liContents"][1]; ?></li>
              <li><?php echo $data[2]["liContents"][2]; ?></li>
              <li><?php echo $data[2]["liContents"][3]; ?></li>
              <li><?php echo $data[2]["liContents"][4]; ?></li>
            </ul>
            </div>  
            <div class="col-lg-6">
          <ul style="color:#777777;font-family:'Poppins';">
              <li><?php echo $data[2]["liContents"][5]; ?></li>
              <li><?php echo $data[2]["liContents"][6]; ?></li>
              <li><?php echo $data[2]["liContents"][7]; ?></li>
              <li><?php echo $data[2]["liContents"][8]; ?></li>

            </ul>
            </div>  
          </div>
          </div>
          <!-- Add other content here -->
        </div>
        <!-- Second heading data end -->
                <!-- Second heading data -->
                <div class="info" data-tab="law" id="law" style="color: #002D4C;">
          <div>
            <h2 style="font-family:'Poppins';"><?php echo $data[3]["heading1"]; ?></h2>
            <div><p style="font-family:'Poppins';"><?php echo $data[3]["para1"]; ?>:</p></div>
            <div class="row">
          <div class="col-lg-6">
          <ul style="color:#777777;font-family:'Poppins';">
          <li><?php echo $data[3]['liContents'][0]; ?></li>
          <li><?php echo $data[3]['liContents'][1]; ?></li>
          <li><?php echo $data[3]['liContents'][2]; ?></li>
          <li><?php echo $data[3]['liContents'][3]; ?></li>
          <li><?php echo $data[3]['liContents'][4]; ?></li>
            </ul>
            </div>  
            <div class="col-lg-6">
          <ul style="color:#777777;font-family:'Poppins';">
          <li><?php echo $data[3]['liContents'][5]; ?></li>
          <li><?php echo $data[3]['liContents'][6]; ?></li>
          <li><?php echo $data[3]['liContents'][7]; ?></li>
          <li><?php echo $data[3]['liContents'][8]; ?></li>
            </ul>
            </div>  
          </div>
          </div>

        <!-- Add other heading sections here -->
      </div>
      <!--statistic--!-->
      <div class="info" id="statistics" data-tab="statistics" style="color:#002D4C;">
          <div>
            <h2 style="font-family:'Poppins';"><?php echo $data[4]["heading1"]; ?></h2>
            <div><p style="font-family:'Poppins';"><?php echo $data[4]["para1"]; ?>:</p></div>
            <div class="row">
          <div class="col-lg-6">
          <ul style="color:#777777;font-family:'Poppins';">
              <li><?php echo $data[4]['liContents'][0]; ?></li>
              <li><?php echo $data[4]['liContents'][1]; ?></li>
              <li><?php echo $data[4]['liContents'][2]; ?></li>
              <li><?php echo $data[4]['liContents'][3]; ?></li>
              <li><?php echo $data[4]['liContents'][4]; ?></li>
            </ul>
            </div>  
            <div class="col-lg-6">
          <ul style="color:#777777;font-family:'Poppins';">
              <li><?php echo $data[4]['liContents'][5]; ?></li>
              <li><?php echo $data[4]['liContents'][6]; ?></li>
              <li><?php echo $data[4]['liContents'][7]; ?></li>
              <li><?php echo $data[4]['liContents'][8]; ?></li>
            </ul>
            </div>  
          </div>
          </div>
       <!--statistic end--!-->
</div>
 <!-- acounting start!-->
 <div class="info" id="accounting" data-tab="accounting" style="color: #002D4C;">
          <div>
            <h2 style="font-family:'Poppins';"><?php echo $data[5]["heading1"]; ?></h2>
            <div><p style="font-family:'Poppins';"><?php echo $data[5]["para1"]; ?>:</p></div>
            <div class="row">
          <div class="col-lg-6">
          <ul style="color:#777777;font-family:'Poppins';">
              <li><?php echo $data[5]['liContents'][0]; ?></li>
              <li><?php echo $data[5]['liContents'][1]; ?></li>
              <li><?php echo $data[5]['liContents'][2]; ?></li>
              <li><?php echo $data[5]['liContents'][3]; ?></li>
              <li><?php echo $data[5]['liContents'][4]; ?></li>
            </ul>
            </div>  
            <div class="col-lg-6">
          <ul style="color:#777777;font-family:'Poppins';">
              <li><?php echo $data[5]['liContents'][5]; ?></li>
              <li><?php echo $data[5]['liContents'][6]; ?></li>
              <li><?php echo $data[5]['liContents'][7]; ?></li>
              <li><?php echo $data[5]['liContents'][8]; ?></li>
           
            </ul>
            </div>  
          </div>
          </div>
       <!-- acounting end!-->
</div>
<!-- enigner start!-->
<div class="info" id="engineer" data-tab="engineer" style="color:#002D4C;">
          <div>
            <h2 style="font-family:'Poppins';"><?php echo $data[6]["heading1"]; ?></h2>
            <div style="font-family:'Poppins';"><p><?php echo $data[6]["para1"]; ?>:</p></div>
            <div class="row">
          <div class="col-lg-6">
          <ul style="color:#777777;font-family:'Poppins';">
              <li><?php echo $data[6]['liContents'][0]; ?></li>
              <li><?php echo $data[6]['liContents'][1]; ?></li>
              <li><?php echo $data[6]['liContents'][2]; ?></li>
              <li><?php echo $data[6]['liContents'][3]; ?></li>
              <li><?php echo $data[6]['liContents'][4]; ?></li>
            </ul>
            </div>  
            <div class="col-lg-6">
          <ul style="color:#777777;font-family:'Poppins';">
              <li><?php echo $data[6]['liContents'][5]; ?></li>
              <li><?php echo $data[6]['liContents'][6]; ?></li>
              <li><?php echo $data[6]['liContents'][7]; ?></li>
              <li><?php echo $data[6]['liContents'][8]; ?></li>
            </ul>
            </div>  
          </div>
          </div>
       <!-- engineer end!-->
    </div>
    <!-- enigner start!-->
 <div class="info" id="information" data-tab="information" style="color: #002D4C;">
          <div>
            <h2 style="font-family:'Poppins';"><?php echo $data[7]["heading1"]; ?></h2>
            <div><p style="font-family:'Poppins';"><?php echo $data[7]["para1"]; ?>:</p></div>
            <div class="row">
          <div class="col-lg-6">
          <ul style="color:#777777;font-family:'Poppins';">
              <li><?php echo $data[7]['liContents'][0]; ?></li>
              <li><?php echo $data[7]['liContents'][1]; ?></li>
              <li><?php echo $data[7]['liContents'][2]; ?></li>
              <li><?php echo $data[7]['liContents'][3]; ?></li>
              <li><?php echo $data[7]['liContents'][4]; ?></li>
            </ul>
            </div>  
            <div class="col-lg-6">
          <ul style="color:#777777;font-family:'Poppins';">
              <li><?php echo $data[7]['liContents'][5]; ?></li>
              <li><?php echo $data[7]['liContents'][6]; ?></li>
              <li><?php echo $data[7]['liContents'][7]; ?></li>
              <li><?php echo $data[7]['liContents'][8]; ?></li>
           
            </ul>
            </div>  
          </div>
          </div>
       <!-- engineer end!-->
</div>
<!-- enigner start!-->
<div class="info" id="ecnomics" data-tab="ecnomics" style="color: #002D4C;">
          <div>
            <h2 style="font-family:'Poppins';"><?php echo $data[8]["heading1"]; ?></h2>
            <div><p style="font-family:'Poppins';"><?php echo $data[8]["para1"]; ?>:</p></div>
            <div class="row">
          <div class="col-lg-6">
          <ul style="color:#777777;font-family:'Poppins';">
              <li><?php echo $data[8]['liContents'][0]; ?></li>
              <li><?php echo $data[8]['liContents'][1]; ?></li>
              <li><?php echo $data[8]['liContents'][2]; ?></li>
              <li><?php echo $data[8]['liContents'][3]; ?></li>
              <li><?php echo $data[8]['liContents'][4]; ?></li>
            </ul>
            </div>  
            <div class="col-lg-6">
          <ul style="color:#777777;font-family:'Poppins';">
              <li><?php echo $data[8]['liContents'][5]; ?></li>
              <li><?php echo $data[8]['liContents'][6]; ?></li>
              <li><?php echo $data[8]['liContents'][7]; ?></li>
              <li><?php echo $data[8]['liContents'][8]; ?></li>
             
            </ul>
            </div>  
          </div>
          </div>
       <!-- engineer end!-->
</div>
</div>
</div>
  </div>
</div>
</div>
<!-- Sidebar container end -->
<style>
/*Ipadmini*/
@media screen and (width: 768px) and (height: 1024px) {
  /* Your CSS styles for iPad Mini (768x1024) go here */
 #litab{
     display: none;
  }
  #litab1{
      display: none;
  }
   #litab2{
      display: none;
  }
   #litab3{
  display: none;
    
  }
   #litab4{
  display: none;
  }
   #litab5{
     display: none;
  }
   #litab6{
  display: none;
  }
   #litab7{
    display: none;
    
  }
    
}

  .sidebar-list {
    list-style-type: none;
    padding: 0;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #f5f6f7;
    overflow-x: auto;
    white-space: nowrap; 

  }

  .sidebar-list li {
    margin: 10px;
  }
  
      @media (max-width: 1024px) and (max-height: 600px) {
         .sidebar-list {
    list-style-type: none;
    padding: 0;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #f5f6f7;
    overflow-x: auto;
    white-space: nowrap; 
    font-size:12px;
  }
  }
    @media (max-width: 768px) {
   .sidebar-list {
      flex-direction: column;
      align-items: flex-start;
    }


    /* Adjust the padding for each list item in mobile mode */
    .sidebar-list li {
      padding-left: 1rem;
    }

    /* Adjust the font size for list items in mobile mode */
    .sidebar-list li a {
      font-size: 14px;
    }
  }
  
  @media (max-width: 768px) {
  /* Your CSS styles for mobile devices go here */
    
  #litab{
      padding-right: 106px !important;
    padding-left: 54px !important;
  }
  #litab1{
      padding-right: 106px !important;
    padding-left: 120px !important;
  }
   #litab2{
    padding-right: 125px !important;
    padding-left: 130px !important;
    
  }
   #litab3{
    padding-right: 93px !important;
    padding-left: 120px !important;
    
  }
   #litab4{
   padding-right: 90px !important;
    padding-left: 104px !important;
  }
   #litab5{
    padding-right: 86px !important;
    padding-left: 103px !important;
  }
   #litab6{
padding-right: 33px !important;
    padding-left: 57px !important;
  }
   #litab7{
    padding-right: 90px !important;
    padding-left: 102px !important;
    
  }
}

    
    @media (max-width: 767px) {
        .sidebar-list {
            white-space: normal;
        }
       
    }
    /* Add new CSS class for mobile devices */
 @media only screen and (min-width: 768px) {
  /* styles for devices with a screen width of 768 pixels or more */
  .info1{
        display: none !important;
  }
  
  
}

 @media only screen and (max-width: 767px) {
     
  /* styles for mobile devices */
   .info {
      display: none !important;
    }
}
 @media (max-width: 768px) {
    .engineer-section {
      display: none;
    }
  }
/* Hide all content by default */
.info1 {
  display: none;
}

/* Show the active tab's content */
.info1.active {
  display: block !important;
}
/* Common styles for both tabs */
.tab-item {
  text-decoration: none;
  list-style-type: none;
  padding: 8px;
  margin: 7px;
  border: 1px solid;
  border-color: #f1f2f2;
  background-color: #fff;
  font-family: 'Poppins';
  color: #777777;
}

/* Styles for the duplicate tab - only displayed on mobile */
.mobile-only {
  display: none;
}

/* Media query to show the duplicate tab on mobile devices */
@media only screen and (max-width: 768px) {
  .mobile-only {
    display: block;
  }
  #tab1mobile{
     padding-left: 35px;
    padding-right: 30px;
  }
  /* You can add more styles specific to mobile here if needed */
}
@media only screen and (max-width: 767px) {
  /* styles for devices with a screen width of 768 pixels or more */
  #litab{
      display:none;
  }
  #litab1{
      display:none;
  }
  #litab2{
      display:none;
  }
  #litab3{
      display:none;
  }
  #litab4{
      display:none;
  }
  #litab5{
      display:none;
  }
   #litab6{
      display:none;
  }
   #litab7{
      display:none;
  }
}
@media only screen and (min-width: 360px) {
  /* CSS */
  #tab1mobile{
    padding-left: 55px;
    padding-right: 55px;
  }
  #tab2mobile{
    padding-left: 110px;
    padding-right: 110px;
  }
  #tab3mobile{
    padding-left: 124px;
    padding-right: 124px;
  }
   #tab4mobile{
    padding-left: 105px;
    padding-right: 105px;
  }
   #tab5mobile{
    padding-left: 97px;
    padding-right: 97px;
  }
   #tab6mobile{
    padding-left: 97px;
    padding-right: 97px;
  }
   #tab7mobile{
    padding-left: 97px;
    padding-right: 97px;
  }
   #tab8mobile{
    padding-left: 105px;
    padding-right: 105px;
  }
}
/*GOOgle Pixel5*/
@media only screen and (min-width: 393px) {
  /* CSS */
  #tab1mobile{
    padding-left: 70px;
    padding-right: 70px;
  }
  #tab2mobile{
    padding-left: 128px;
    padding-right: 128px;
  }
  #tab3mobile{
    padding-left: 140px;
    padding-right: 140px;
  }
   #tab4mobile{
    padding-left: 122px;
    padding-right: 122px;
  }
    #tab5mobile{
    padding-left: 115px;
    padding-right: 115px;
  }
   #tab6mobile{
    padding-left: 115px;
    padding-right: 115px;
  }
   #tab7mobile{
    padding-left: 115px;
    padding-right: 115px;
  }
   #tab8mobile{
    padding-left: 122px;
    padding-right: 122px;
  }
}
  /*One plus nord 2*/
@media screen and (width: 820px) and (height: 1180px) {
  /* Your CSS styles for screens with a width of 820px and a height of 1180px go here */
#litab{
      display:none;
  }
  #litab1{
      display:none;
  }
  #litab2{
      display:none;
  }
  #litab3{
      display:none;
  }
  #litab4{
      display:none;
  }
  #litab5{
      display:none;
  }
   #litab6{
      display:none;
  }
   #litab7{
      display:none;
  }
  .sidebar-list {
    flex-direction: column;
    align-items: flex-start;
}
.mobile-only {
    display: block;
}
.info1.active {
    display: block !important;
    text-align: start !important;
    text-wrap: wrap;
}
#tab1mobile {
    padding-left: 220px;
    padding-right: 300px;
}
#tab2mobile {
    padding-left: 300px;
    padding-right: 290px;
}
#tab3mobile {
    padding-left: 312px;
    padding-right: 320px;
}
#tab4mobile {
    padding-left: 295px;
    padding-right: 280px;
}
#tab5mobile {
    padding-left: 285px;
    padding-right: 270px;
}
#tab6mobile {
    padding-left: 275px;
    padding-right: 280px;
}
#tab7mobile {
    padding-left: 270px;
    padding-right: 295px;
}
#tab8mobile {
    padding-left: 285px;
    padding-right: 280px;
}
.main_content{
    display: none;
}
}
@media screen and (width: 768px) and (height: 1024px) {
  /* Your CSS styles for screens with a width of 768px and a height of 1024px (portrait tablet) go here */
  #tab1mobile {
    padding-left: 200px;
    padding-right: 250px;
}
#tab2mobile {
    padding-left: 295px;
    padding-right: 290px;
}
#tab3mobile {
    padding-left: 297px;
    padding-right: 317px;
}
#tab4mobile {
    padding-left: 295px;
    padding-right: 280px;
}
#tab5mobile {
    padding-left: 285px;
    padding-right: 270px;
}
#tab6mobile {
    padding-left: 275px;
    padding-right: 280px;
}
#tab7mobile {
    padding-left: 275px;
    padding-right: 280px;
}
#tab8mobile {
    padding-left: 285px;
    padding-right: 285px;
}
.info1.active {
    display: block !important;
    text-align: start !important;
    text-wrap: wrap;
}
.main_content{
    display: none;
}
}

</style>

<!-- Your existing HTML code goes here -->

<!-- Add a script to toggle the icon on tab click -->
 <!-- Add a script to toggle the icon on tab click -->
<script>
   function showContent(tab) {
    const tabId = tab.dataset.tab;
    const allContents = document.querySelectorAll('.info1');
    allContents.forEach((content) => {
      if (content.dataset.tab === tabId) {
        content.style.display = 'block';
      } else {
        content.style.display = 'none';
      }
    });
  }

  function toggleIcon(tabLink) {
    const allTabs = document.querySelectorAll('.sidebar-list li');
    allTabs.forEach((tab) => {
      tab.classList.remove('active');
    });
    tabLink.parentElement.classList.add('active');
    showContent(tabLink.parentElement);
  }

  // Add event listeners to the tab links
  const tabLinks = document.querySelectorAll('.sidebar-list li a');
  tabLinks.forEach((tabLink) => {
    tabLink.addEventListener('click', (event) => {
      event.preventDefault();
      toggleIcon(tabLink);
    });
  });

  // Show the initial content for the first tab
  showContent(document.querySelector('.sidebar-list li:first-child'));
   function toggleIcon(element) {
    const info = element.getAttribute("href").substring(1);
    const infoDiv = document.querySelector(".info1[data-tab='" + info + "']");
    
    if (!infoDiv.classList.contains("active")) {
      // Hide other active tabs
      const activeTabs = document.querySelectorAll(".info1.active");
      activeTabs.forEach((tab) => {
        tab.classList.remove("active");
      });

      // Show the clicked tab
      infoDiv.classList.add("active");
    }
  }
</script>