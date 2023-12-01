<?php
include 'dbconnection/dbconnect.php';

$query = "SELECT `heading`, `subheading`, `para` FROM `index5`";
$result = $conn->query($query);

$h2Contents = array();
$h5Contents = array();
$pContents = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $h2Contents[] = $row["heading"];
        $h5Contents[] = $row["subheading"];
        $pContents[] = $row["para"];
    }
} else {
    $h2Contents = array_fill(0, 5, "Default h2 content");
    $h5Contents = array_fill(0, 5, "Default h5 content");
    $pContents = array_fill(0, 5, "Default p content");
}

// Close the database connection
$conn->close();
?>
<!--NEwcontainer--!-->
<div class="container">
	<!--first row-->
	<div class="row">
		<!--first col-->
		<div class="col-lg-12">
			
			<div id="imagediv">
			<h5 id="section5heading">
			<?php echo isset($h2Contents[0]) ? $h2Contents[0] : ''; ?>
			</h5>
			</div>

		</div>
		<!--first col end-->
	</div>
		<!--first row end-->
		<!--second row--!-->
		<div class="row">
		<!--second row first col--!-->
		<div class="col-lg-6" id="easy">
			<img src="images/Placing-Your-Order-is-Simple-for-Dissertation-Writing-help-bannaer.webp" alt="dissertation writing help" id="bannerimage" class="img-fluid" width="100%" height="auto" loading="lazy">

			</div>
			<!--second row first col end--!-->
			<!--second row second col--!-->
		<div class="col-lg-6">
			<h5 id="heading5"><?php echo isset($h5Contents[0]) ? $h5Contents[0] : ''; ?></h5>
			<p id="paragraph"><?php echo isset($pContents[0]) ? $pContents[0] : ''; ?></p>
			<h5 id="heading5"><?php echo isset($h5Contents[1]) ? $h5Contents[1] : ''; ?></h5>
			<p id="paragraph"><?php echo isset($pContents[1]) ? $pContents[1] : ''; ?></p>
			<h5 id="heading5"><?php echo isset($h5Contents[2]) ? $h5Contents[2] : ''; ?></h5>
			<p id="paragraph"><?php echo isset($pContents[2]) ? $pContents[2] : ''; ?></p>
			<h5 id="heading5"><?php echo isset($h5Contents[3]) ? $h5Contents[3] : ''; ?></h5>
			<p id="paragraph"><?php echo isset($pContents[3]) ? $pContents[3] : ''; ?></p>
			<h5 id="heading5"><?php echo isset($h5Contents[4]) ? $h5Contents[4] : ''; ?></h5>
			<p id="paragraph"><?php echo isset($pContents[4]) ? $pContents[4] : ''; ?></p>
		</div>
			<!--second row second col end--!-->
		</div>
		<!--second row--!-->
</div>
<!--NEwcontainer end--!-->
<style>
    #bannerimage{
        padding-top:25px;
        margin-left: -15px;
    }
    #heading5{
        color:#fd4755;
        font-size:18px;
        font-weight:650;
    }
    #paragraph{
        color:#777777;
        font-family:Poppins;
    }
    #imagediv{
        font-size:30px;
        margin-top:15px;
        margin-bottom:30px;
    }
    #section5heading{
        margin:0;
        font-size:1em;
        color:#002D4C;
        text-align: center;
        color:#002D4C;
        font-family:'Poppins';
        font-weight:600;
    }
    @media (max-width: 767px) {
  /* Your CSS rules for mobile devices go here */
  #bannerimage{
        padding-top: 0px;
        margin-top:5px;
        margin-left: 2px;
        margin-bottom: 20px;
    }
}

</style>