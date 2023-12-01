<?php
include 'dbconnection/dbconnect.php';

$query = "SELECT `box`, `id` FROM `index` WHERE id IN (1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 234)";
$result = $conn->query($query);

$tableOfContents = array();
$boxContent = "";
$freeTopics = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if ($row["id"] == 1) {
            $boxContent = $row["box"];
        } elseif (in_array($row["id"], [2, 3, 4])) {
            $freeTopics[$row["id"]] = $row["box"];
        }
    }
} else {
    $tableOfContents = array_fill(1, 11, "Default content");
}


//form code
$sql = "SELECT id, heading, options FROM form";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $ids = array();
    $headings = array();
    $options = array();

    while ($row = $result->fetch_assoc()) {
        $ids[] = $row['id']; // Store the id in an array
        $headings[] = $row['heading']; // Store the heading in an array
        $options[] = $row['options']; // Store the options in an array
    }
} else {
    echo "No data found.";
}
//form code
$sql = "SELECT id, heading, options FROM form";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $ids = array();
    $headings = array();
    $options = array();

    while ($row = $result->fetch_assoc()) {
        $ids[] = $row['id']; // Store the id in an array
        $headings[] = $row['heading']; // Store the heading in an array
        $options[] = $row['options']; // Store the options in an array
    }
} else {
    echo "No data found.";
}
//form Data 
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve the form data
  $page = $_POST['page'];
  $date = $_POST['date'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $wordCount = $_POST['wordCount'];
  $dropdown = $_POST['dropdown'];
  $message = $_POST['message'];

  // Prepare the SQL statement to insert the data into the table
  $stmt = $conn->prepare("INSERT INTO form_data (`page`, `date`, `name`, `email`, `phone`, `wordCount`, `dropdown`, `message`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
  $stmt->bind_param("ssssssss", $page, $date, $name, $email, $phone, $wordCount, $dropdown, $message);

  // Execute the statement
  if ($stmt->execute()) {
      echo "Data stored successfully.";
  } else {
      echo "Error storing data: " . $stmt->error;
  }
}

// Close the database connection
$conn->close();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $wordCount = $_POST['wordCount'];
    $dropdown = $_POST['dropdown'];
    $message = $_POST['message'];
    $page = isset($_POST['page']) ? $_POST['page'] : 'Unknown Page';
    
    // Construct the email message
    $to = 'info@dissertationwritinghelp.net'; // Change this to the recipient's email address
    $subject = 'Form Submited by - Name: ' . $name . ' - Email: ' . $email; // Include name and email in subject
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Phone: $phone\n";
    $email_message .= "Word Count: $wordCount\n";
    $email_message .= "Subject: $dropdown\n";
    $email_message .= "Message: $message\n";
    $email_message .= "Page: $page\n"; 
    
    // Send the email
$headers = 'From: ' . $email . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    
    if (mail($to, $subject, $email_message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Error sending email.";
    }
}
?>
<form class="form" method="POST" id="formentry">
                <h4 class="form-heading" id="formheading"><?php echo $headings[0]; ?></h4>
                <div class="row mb-3">
                    <input type="hidden" method="POST" class="form-control" name="page" value="BLog page">
               <input type="hidden" class="form-control" name="date" value="<?php echo date('Y-m-d'); ?>">
                  <div class="col-md-6">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                  </div>
                  <div class="col-md-6">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone">
                  </div>
                  <div class="col-md-6">
                    <input type="number" class="form-control" id="wordCount" name="wordCount" placeholder="Number of Words">
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-12">
                    <select class="form-select" id="dropdown" name="dropdown">
                      <option value="Dissertation"><?php echo $options[0]; ?></option>
                      <?php if (!empty($options[1])) { ?>
                      <option value="Dissertation-Topics"><?php echo $options[1]; ?></option>
                      <?php } ?>
                      <?php if (!empty($options[2])) { ?>
                      <option value="Dissertation-Abstract"><?php echo $options[2]; ?></option>
                      <?php } ?>
                      <?php if (!empty($options[3])) { ?>
                      <option value="Dissertation-Proposel"><?php echo $options[3]; ?></option>
                      <?php } ?>
                      <?php if (!empty($options[4])) { ?>
                      <option value="Dissertation- Analysis Chapter"><?php echo $options[4]; ?></option>
                      <?php } ?>
                      <?php if (!empty($options[5])) { ?>
                      <option value="Dissertation- Conclusion Chapter"><?php echo $options[5]; ?></option>
                      <?php } ?><
                      <?php if (!empty($options[6])) { ?>
                      <option value="Dissertation- Introduction Chapter"><?php echo $options[6]; ?></option>
                      <?php } ?>
                      <?php if (!empty($options[7])) { ?>
                      <option value="Dissertation- Literature Review Chapter"><?php echo $options[7]; ?></option>
                      <?php } ?>
                      <?php if (!empty($options[8])) { ?>
                      <option value="Dissertation- Methodology Chapter"><?php echo $options[8]; ?></option>
                       <?php } ?>
                       <?php if (!empty($options[9])) { ?>
                      <option value="Dissertation Editing and Proof Reading"><?php echo $options[9]; ?></option>
                       <?php } ?>
                       <?php if (!empty($options[10])) { ?>
                      <option value="Essay"><?php echo $options[10]; ?></option>
                       <?php } ?>
                        <?php if (!empty($options[11])) { ?>
                      <option value="Admission Essay"><?php echo $options[11]; ?></option>
                       <?php } ?>
                        <?php if (!empty($options[12])) { ?>
                      <option value="Scholarship Essay"><?php echo $options[12]; ?></option>
                       <?php } ?>
                        <?php if (!empty($options[13])) { ?>
                      <option value="Case Study"><?php echo $options[13]; ?></option>
                       <?php } ?>
                        <?php if (!empty($options[14])) { ?>
                      <option value="Annotated Bibliography"><?php echo $options[14]; ?></option>
                       <?php } ?>
                        <?php if (!empty($options[15])) { ?>
                      <option value="Assignment"><?php echo $options[15]; ?></option>
                       <?php } ?>
                        <?php if (!empty($options[16])) { ?>
                      <option value="Book Report/Review"><?php echo $options[16]; ?></option>
                       <?php } ?>
                        <?php if (!empty($options[17])) { ?>
                      <option value="Case Analysis"><?php echo $options[17]; ?></option>
                       <?php } ?>
                        <?php if (!empty($options[18])) { ?>
                      <option value="Course Work"><?php echo $options[18]; ?></option>
                       <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-12">
                    <textarea class="form-control" id="message" name="message" rows="4" placeholder="Message"></textarea>
                  </div>
                </div>
                <div class="d-flex justify-content-center align-items-start">
                  <button type="submit" class="btn btn-danger btn-block" style="width: 100%;background-color:#02397b;border:none;">Send</button>
                </div>
              </form>