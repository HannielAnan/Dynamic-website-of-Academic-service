<?php
include 'dbconnection/dbconnect.php';

$query = "SELECT `heading1`, `subheading1`, `text1` FROM `index4`";
$result = $conn->query($query);

$h2Content = "";
$h5Contents = array();
$pContents = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if (empty($h2Content)) {
            $h2Content = $row["heading1"];
        }
        $h5Contents[] = $row["subheading1"];
        $pContents[] = $row["text1"];
    }
} else {
    $h2Content = "Default h2 content";
    $h5Contents = array_fill(0, 3, "Default h5 content");
    $pContents = array_fill(0, 3, "Default p content");
}

// Close the database connection
$conn->close();
?>
<div class="container" id="cont3">
  <div class="row">
    <div class="col-lg-12">
      <div id="div1">
        <h2 id="mainh2">
          <?php echo $h2Content; ?>
        </h2>
      </div>
    </div>

    <!--new row-->
    <div class="row">
      <!--column1-->
      <div class="col-lg-4 col-md-4 col-sm-12">
       <img src="images/Best-Dissertation-Writing-Help-long-banner.webp" alt="dissertation writing help" class="img-fluid" width="100%" height="auto" loading="lazy">
      </div>
      <!--column1end-->

      <!--column2-->
      <div class="col-lg-4 col-md-4 col-sm-12" id="column">
        <!-- Icons and Texts -->
        <div class="row">
          <div class="col" id="insidecolumn">
          
            <div>
              <h5 id="h1">
                <i class="fas fa-thumbs-up" id="font"></i>
                <?php echo isset($h5Contents[0]) ? $h5Contents[0] : ''; ?>
              </h5>
              <p id="p"><?php echo isset($pContents[0]) ? $pContents[0] : ''; ?></p>
            </div>
          </div>
        </div>
        <!--first text end-->

        <!--second text-->
        <div class="row">
          <div class="col" id="insidecolumn">
        
            <div>
              <h5 id="h2">
                <i class="fas fa-square-check" id="font"></i>
                <?php echo isset($h5Contents[1]) ? $h5Contents[1] : ''; ?>
              </h5>
              <p id="p"><?php echo isset($pContents[1]) ? $pContents[1] : ''; ?></p>
            </div>
          </div>
        </div>
        <!--second  text end-->

        <!--third text-->
        <div class="row">
          <div class="col" id="insidecolumn">
            
            <div>
              <h5 id="h3">
                <i class="fas fa-headset" id="headsetfont"></i>
                <?php echo isset($h5Contents[5]) ? $h5Contents[5] : ''; ?>
              </h5>
              <p id="p"><?php echo isset($pContents[5]) ? $pContents[5] : ''; ?></p>
            </div>
          </div>
        </div>
        <!--third  text end-->
      </div>
      <!--column2end-->

      <!--column3-->
      <div class="col-lg-4 col-md-4 col-sm-12" id="column">
        <!-- Icons and Texts -->
        <div class="row">
          <div class="col" id="insidecolumn">
            
            <div>
              <h5 id="h4">
                <i class="fas fa-comments" id="commentfont"></i>
                <?php echo isset($h5Contents[3]) ? $h5Contents[3] : ''; ?>
              </h5>
              <p id="p"><?php echo isset($pContents[3]) ? $pContents[3] : ''; ?></p>
            </div>
          </div>
        </div>
        <!--first text end-->

        <!--second text-->
        <div class="row">
          <div class="col" id="insidecolumn">
            
            <div>
              <h5 id="h5">
                <i class="fas fa-server" id="font"></i>
                <?php echo isset($h5Contents[4]) ? $h5Contents[4] : ''; ?>
              </h5>
              <p id="p"><?php echo isset($pContents[4]) ? $pContents[4] : ''; ?></p>
            </div>
          </div>
        </div>
        <!--second text end-->

        <!--third text-->
        <div class="row">
          <div class="col" id="insidecolumn">
            
            <div>
              <h5 id="h6">
                <i class="fas  fa-pen-to-square" id="penfont"></i>
                <?php echo isset($h5Contents[2]) ? $h5Contents[2] : ''; ?>
              </h5>
              <p id="p"><?php echo isset($pContents[2]) ? $pContents[2] : ''; ?></p>
            </div>
          </div>
        </div>
        <!--third text end-->
      </div>
      <!--column3end-->
    </div>
    <!--new row end-->
  </div>
</div>

<style>
    #div1{
        font-size: 30px; 
        margin-top: 20px; 
        margin-bottom: 30px;
    }
    #mainh2{
        margin: 0; 
        font-size: 1em; 
        line-height: 32px;
        color:#002D4C;
        font-weight:700;
        font-family:'Poppins';
        text-align: center;
    }
    #column{
        text-align:center;
    }
    #insidecolumn{
        display: flex;
        align-items: center;
    }
    #font{
        font-size:30px;
        color:#0BA8E6; 
        margin-right: 10px;
    }
    #penfont{
        font-size:30px;
        color:#0BA8E6; 
       /* margin-right: -30px;
        margin-top: -10px;*/
    }
    #headsetfont{
        font-size:30px;
        color:#0BA8E6; 
       /* margin-right: -30px;
        //margin-top: -8px;*/
    }
    #commentfont{
        font-size:30px;
        color:#0BA8E6; 
       margin-right: 9px;
    }
    #font-icon{
        font-size: 20px;
        color: #0BA8E6;
        margin-right: 10px;
    }
    #h5{
        font-family: 'Poppins';
        font-size:20px;
        color:#002D4C;
        line-height:21px;
        display: flex;
        align-items: center;
    }
    #p{
        color: #7e8890; 
        font-family: 'Poppins';
        text-align:left;
    }
     #h1{
        font-family: 'Poppins';
        font-size:18px;
        color:#002D4C;
        line-height:21px;
        display: flex;
        align-items: center;
    }
     #h2{
        font-family: 'Poppins';
        font-size:18px;
        color:#002D4C;
        line-height:19px;
        display: flex;
        align-items: center;
        margin-top: 45px;
    }
    @media (max-width: 768px) {
    /* Your CSS rules for mobile devices */
      #h2{ margin-top: 0px;
          
      }
}

     #h3{
        font-family: 'Poppins';
        font-size:18px;
        color:#002D4C;
        line-height:21px;
        display: flex;
        align-items: center;
    } #h4{
        font-family: 'Poppins';
        font-size:18px;
        color:#002D4C;
        line-height:21px;
        display: flex;
        align-items: center;
    } #h6{
        font-family: 'Poppins';
        font-size:18px;
        color:#002D4C;
        line-height:21px;
        display: flex;
        align-items: center;
    }
    @media screen and (min-width: 1024px) and (max-width: 1024px) and (min-height: 600px) and (max-height: 600px){
    #headsetfont {
    font-size: 30px;
    color: #0BA8E6;
    margin-right: 0px;
    margin-top: -8px;
             }
             #penfont {
    font-size: 30px;
    color: #0BA8E6;
    margin-right: 0;
    margin-top: -10px;
}
    }
    @media screen and (width: 820px) and (height: 1180px) {
  /* Your CSS styles for screens with a width of 820px and a height of 1180px go here */
  #h1{
      display: grid;
  }
   #h2{
      display: grid;
  }
   #h3{
      display: grid;
  }
   #h4{
      display: grid;
  }
   #h5{
      display: grid;
  }
   #h6{
      display: grid;
  }
  #font{
      padding-bottom: 8px;
  }
  #headsetfont{
      padding-bottom: 8px;
  }
  #commentfont{
      padding-bottom: 8px;
  }
  #penfont{
      padding-bottom: 8px;
  }
}
@media screen and (width: 768px) and (height: 1024px) {
  /* Your CSS styles for screens with a width of 768px and a height of 1024px (portrait tablet) go here */
   #h1{
      display: grid;
  }
   #h2{
      display: grid;
  }
   #h3{
      display: grid;
  }
   #h4{
      display: grid;
  }
   #h5{
      display: grid;
  }
   #h6{
      display: grid;
  }
}
@media screen and (width: 912px) and (height: 1368px) {
  /* Your CSS styles for screens with a width of 768px and a height of 1024px (portrait tablet) go here */
   #h1{
      display: grid;
  }
   #h2{
      display: grid;
  }
   #h3{
      display: grid;
  }
   #h4{
      display: grid;
  }
   #h5{
      display: grid;
  }
   #h6{
      display: grid;
  }
}
@media screen and (max-width: 1024px) {
   #h1{
      display: grid;
  }
   #h2{
      display: grid;
  }
   #h3{
      display: grid;
  }
   #h4{
      display: grid;
  }
   #h5{
      display: grid;
  }
   #h6{
      display: grid;
  }
}

</style>