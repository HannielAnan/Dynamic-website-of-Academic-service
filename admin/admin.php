<!--index admin section-->
<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Redirect the user to the login page or display an access denied message
    header('Location: please.php');
    exit;
}
//include 'dbconnection/dbconnect.php';
// Connect to the database
$servername = "localhost";
$username = "acadvdfr_theexperts";
$password = "gqQxDDtr4XTY";
$dbname = "acadvdfr_theexperts";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}




// <!--index admin section end-->
// <!--Buy MBA dissertation section start-->

// Assuming you have already established a connection to the database ($conn)

// Assuming you have already established a connection to the database ($conn)

// Assuming you have already established a connection to the database ($conn)

$sql11 = "SELECT id, `heading`, `point1`, `point2`, `point3` FROM `buy-mba-dissertation-service-black-box`";
$result11 = $conn->query($sql11);

// Initialize a variable to track the output
$output11 = '';

if ($result11->num_rows > 0) {
    // Output the data
    while ($row11 = $result11->fetch_assoc()) {
        $output11 .= '<form method="POST" class="form-group">';
        $output11 .= '<input type="hidden" name="id" value="' . $row11['id'] . '">';

        $output11 .= '<label for="heading">Heading:</label>';
        $output11 .= '<input type="text" name="heading" value="' . $row11['heading'] . '" class="form-control"><br>';

        $output11 .= '<label for="point1">Point 1:</label>';
        $output11 .= '<input type="text" name="point1" value="' . $row11['point1'] . '" class="form-control"><br>';

        $output11 .= '<label for="point2">Point 2:</label>';
        $output11 .= '<input type="text" name="point2" value="' . $row11['point2'] . '" class="form-control"><br>';

        $output11 .= '<label for="point3">Point 3:</label>';
        $output11 .= '<input type="text" name="point3" value="' . $row11['point3'] . '" class="form-control"><br>';

        $output11 .= '<button type="submit" name="submit11" class="btn btn-primary">Save</button>';
        $output11 .= '</form>';
    }
} else {
    $output11 .= "No data found.";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit11'])) {
    // Retrieve the submitted data
    $id11 = $_POST['id'];
    $heading = $_POST['heading'];
    $point1 = $_POST['point1'];
    $point2 = $_POST['point2'];
    $point3 = $_POST['point3'];

    // Prepare and bind the update statement
    $stmt11 = $conn->prepare("UPDATE `buy-mba-dissertation-service-black-box` SET `heading` = ?, `point1` = ?, `point2` = ?, `point3` = ? WHERE `id` = ?");
    $stmt11->bind_param("ssssi", $heading, $point1, $point2, $point3, $id11);

    if ($stmt11->execute()) {
        $stmt11->close();

        // Content updated successfully
        echo '<script>alert("Content saved successfully.");</script>'; // Display pop-up message
        header("Location: admin.php"); // Redirect to admin.php
        exit();
    } else {
        $output11 .= "Error updating content: " . $stmt11->error;
    }
}

// <!--Brown boxes start-->

// Assuming you have already established a connection to the database ($conn)

$sql12 = "SELECT id, `3boxes` AS `boxes`, `para` FROM `buy-mba-dissertation-service-3brown-boxes`";
$result12 = $conn->query($sql12);

// Initialize a variable to track the output
$output12 = '';

if ($result12->num_rows > 0) {
    // Output the data
    while ($row12 = $result12->fetch_assoc()) {
        $output12 .= '<form method="POST" class="form-group">';
        $output12 .= '<input type="hidden" name="id" value="' . $row12['id'] . '">';

        $output12 .= '<label for="boxes">Heading:</label>';
        $output12 .= '<input type="text" name="boxes" value="' . $row12['boxes'] . '" class="form-control"><br>';

        $output12 .= '<label for="para">Paragraph:</label>';
        $output12 .= '<input type="text" name="para" value="' . $row12['para'] . '" class="form-control"><br>';

        $output12 .= '<button type="submit" name="submit12" class="btn btn-primary">Save</button>';
        $output12 .= '</form>';
    }
} else {
    $output12 .= "No data found.";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit12'])) {
    // Retrieve the submitted data
    $id12 = $_POST['id'];
    $boxes = $_POST['boxes'];
    $para = $_POST['para'];

    // Prepare and bind the update statement
    $stmt12 = $conn->prepare("UPDATE `buy-mba-dissertation-service-3brown-boxes` SET `3boxes` = ?, `para` = ? WHERE `id` = ?");
    $stmt12->bind_param("ssi", $boxes, $para, $id12);

    if ($stmt12->execute()) {
        $stmt12->close();

        // Content updated successfully
        echo '<script>alert("Content saved successfully.");</script>'; // Display pop-up message
        header("Location: admin.php"); // Redirect to admin.php
        exit();
    } else {
        $output12 .= "Error updating content: " . $stmt12->error;
    }
}


//<!--Brown boxes end--!-->
//<!-- 2headings after 3 brown boxes start-->
$sql13 = "SELECT id, `heading`, `para` FROM `buy-mba-dissertation-service-2headings`";
$result13 = $conn->query($sql13);

// Initialize a variable to track the output
$output13 = '';

if ($result13->num_rows > 0) {
    // Output the data
    while ($row13 = $result13->fetch_assoc()) {
        $output13 .= '<form method="POST" class="form-group">';
        $output13 .= '<input type="hidden" name="id" value="' . $row13['id'] . '">';

        $output13 .= '<label for="boxes">Heading:</label>';
        $output13 .= '<input type="text" name="heading" value="' . $row13['heading'] . '" class="form-control"><br>';

        $output13 .= '<label for="para">Paragraph:</label>';
        $output13 .= '<input type="text" name="para" value="' . $row13['para'] . '" class="form-control"><br>';

        $output13 .= '<button type="submit" name="submit13" class="btn btn-primary">Save</button>';
        $output13 .= '</form>';
    }
} else {
    $output13 .= "No data found.";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit13'])) {
    // Retrieve the submitted data
    $id13 = $_POST['id'];
    $heading = $_POST['heading'];
    $para = $_POST['para'];

    // Prepare and bind the update statement
    $stmt13 = $conn->prepare("UPDATE `buy-mba-dissertation-service-2headings` SET `heading` = ?, `para` = ? WHERE `id` = ?");
    $stmt13->bind_param("ssi", $heading, $para, $id13);

    if ($stmt13->execute()) {
        $stmt13->close();

        // Content updated successfully
        echo '<script>alert("Content saved successfully.");</script>'; // Display pop-up message
        header("Location: admin.php"); // Redirect to admin.php
        exit();
    } else {
        $output13 .= "Error updating content: " . $stmt13->error;
    }
}
//<!-- 2headings after 3 brown boxes end-->
//<!-- big brown boxes start-->
$sql14 = "SELECT id, `heading1`, `heading2`, `heading3`, `heading4`, `heading5`, `para1`, `para2`, `para3`, `para4`, `para5` FROM `buy-mba-dissertation-service-big-brown-box`";
$result14 = $conn->query($sql14);

// Initialize a variable to track the output
$output14 = '';

if ($result14->num_rows > 0) {
    // Output the data
    while ($row14 = $result14->fetch_assoc()) {
        $output14 .= '<form method="POST" class="form-group">';
        $output14 .= '<input type="hidden" name="id" value="' . $row14['id'] . '">';

        $output14 .= '<label for="boxes">Heading:</label>';
        $output14 .= '<input type="text" name="heading1" value="' . $row14['heading1'] . '" class="form-control"><br>';
        $output14 .= '<label for="boxes">Heading:</label>';
        $output14 .= '<input type="text" name="heading2" value="' . $row14['heading2'] . '" class="form-control"><br>';
        $output14 .= '<label for="boxes">Heading:</label>';
        $output14 .= '<input type="text" name="heading3" value="' . $row14['heading3'] . '" class="form-control"><br>';
        $output14 .= '<label for="boxes">Heading:</label>';
        $output14 .= '<input type="text" name="heading4" value="' . $row14['heading4'] . '" class="form-control"><br>';
        $output14 .= '<label for="boxes">Heading:</label>';
        $output14 .= '<input type="text" name="heading5" value="' . $row14['heading5'] . '" class="form-control"><br>';
        $output14 .= '<label for="para">Paragraph:</label>';
        $output14 .= '<input type="text" name="para1" value="' . $row14['para1'] . '" class="form-control"><br>';
        $output14 .= '<label for="para">Paragraph:</label>';
        $output14 .= '<input type="text" name="para2" value="' . $row14['para2'] . '" class="form-control"><br>';
        $output14 .= '<label for="para">Paragraph:</label>';
        $output14 .= '<input type="text" name="para3" value="' . $row14['para3'] . '" class="form-control"><br>';
        $output14 .= '<label for="para">Paragraph:</label>';
        $output14 .= '<input type="text" name="para4" value="' . $row14['para4'] . '" class="form-control"><br>';
        $output14 .= '<label for="para">Paragraph:</label>';
        $output14 .= '<input type="text" name="para5" value="' . $row14['para5'] . '" class="form-control"><br>';
        $output14 .= '<button type="submit" name="submit14" class="btn btn-primary">Save</button>';
        $output14 .= '</form>';
    }
} else {
    $output14 .= "No data found.";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit14'])) {
    // Retrieve the submitted data
    $id14 = $_POST['id'];
    $heading1 = $_POST['heading1'];
    $heading2 = $_POST['heading2'];
    $heading3 = $_POST['heading3'];
    $heading4 = $_POST['heading4'];
    $heading5 = $_POST['heading5'];
    $para1 = $_POST['para1'];
    $para2 = $_POST['para2'];
    $para3 = $_POST['para3'];
    $para4 = $_POST['para4'];
    $para5 = $_POST['para5'];

    // Prepare and bind the update statement
    $stmt14 = $conn->prepare("UPDATE `buy-mba-dissertation-service-big-brown-box` SET `heading1` = ?, `heading2` = ?, `heading3` = ?, `heading4` = ?, `heading5` = ?, `para1` = ?, `para2` = ?, `para3` = ?, `para4` = ?, `para5` = ? WHERE `id` = ?");
    $stmt14->bind_param("ssssssssssi", $heading1, $heading2, $heading3, $heading4, $heading5, $para1, $para2, $para3, $para4, $para5, $id14);

    if ($stmt14->execute()) {
        $stmt14->close();

        // Content updated successfully
        echo '<script>alert("Content saved successfully.");</script>'; // Display pop-up message
        header("Location: admin.php"); // Redirect to admin.php
        exit();
    } else {
        $output14 .= "Error updating content: " . $stmt14->error;
    }
}
//<!-- big brown boxes end-->
//<!-- Heading and Paragraph after big brown box-->
$sql15 = "SELECT id, `heading1`, `heading2`, `heading3`, `heading4`, `heading5`, `heading6`, `para1`, `para2`, `para3`, `para4`, `para5`, `para6` FROM `buy-mba-dissertation-service-after-brown-box`";
$result15 = $conn->query($sql15);

// Initialize a variable to track the output
$output15 = '';

if ($result15->num_rows > 0) {
    // Output the data
    while ($row15 = $result15->fetch_assoc()) {
        $output15 .= '<form method="POST" class="form-group">';
        $output15 .= '<input type="hidden" name="id" value="' . $row15['id'] . '">';

        $output15 .= '<label for="boxes">Heading:</label>';
        $output15 .= '<input type="text" name="heading1" value="' . $row15['heading1'] . '" class="form-control"><br>';
        $output15 .= '<label for="boxes">Heading:</label>';
        $output15 .= '<input type="text" name="heading2" value="' . $row15['heading2'] . '" class="form-control"><br>';
        $output15 .= '<label for="boxes">Heading:</label>';
        $output15 .= '<input type="text" name="heading3" value="' . $row15['heading3'] . '" class="form-control"><br>';
        $output15 .= '<label for="boxes">Heading:</label>';
        $output15 .= '<input type="text" name="heading4" value="' . $row15['heading4'] . '" class="form-control"><br>';
        $output15 .= '<label for="boxes">Heading:</label>';
        $output15 .= '<input type="text" name="heading5" value="' . $row15['heading5'] . '" class="form-control"><br>';
        $output15 .= '<label for="boxes">Heading:</label>';
        $output15 .= '<input type="text" name="heading6" value="' . $row15['heading6'] . '" class="form-control"><br>';
        $output15 .= '<label for="para">Paragraph:</label>';
        $output15 .= '<input type="text" name="para1" value="' . $row15['para1'] . '" class="form-control"><br>';
        $output15 .= '<label for="para">Paragraph:</label>';
        $output15 .= '<input type="text" name="para2" value="' . $row15['para2'] . '" class="form-control"><br>';
        $output15 .= '<label for="para">Paragraph:</label>';
        $output15 .= '<input type="text" name="para3" value="' . $row15['para3'] . '" class="form-control"><br>';
        $output15 .= '<label for="para">Paragraph:</label>';
        $output15 .= '<input type="text" name="para4" value="' . $row15['para4'] . '" class="form-control"><br>';
        $output15 .= '<label for="para">Paragraph:</label>';
        $output15 .= '<input type="text" name="para5" value="' . $row15['para5'] . '" class="form-control"><br>';
        $output15 .= '<label for="para">Paragraph:</label>';
        $output15 .= '<input type="text" name="para6" value="' . $row15['para6'] . '" class="form-control"><br>';
        $output15 .= '<button type="submit" name="submit15" class="btn btn-primary">Save</button>';
        $output15 .= '</form>';
    }
} else {
    $output15 .= "No data found.";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit15'])) {
    // Retrieve the submitted data
    $id15 = $_POST['id'];
    $heading1 = $_POST['heading1'];
    $heading2 = $_POST['heading2'];
    $heading3 = $_POST['heading3'];
    $heading4 = $_POST['heading4'];
    $heading5 = $_POST['heading5'];
    $heading6 = $_POST['heading6'];
    $para1 = $_POST['para1'];
    $para2 = $_POST['para2'];
    $para3 = $_POST['para3'];
    $para4 = $_POST['para4'];
    $para5 = $_POST['para5'];
    $para6 = $_POST['para6'];

    // Prepare and bind the update statement
    $stmt15 = $conn->prepare("UPDATE `buy-mba-dissertation-service-after-brown-box` SET `heading1` = ?, `heading2` = ?, `heading3` = ?, `heading4` = ?, `heading5` = ?, `heading6` = ?, `para1` = ?, `para2` = ?, `para3` = ?, `para4` = ?, `para5` = ?, `para6` = ? WHERE `id` = ?");
    $stmt15->bind_param("sssssssssssss", $heading1, $heading2, $heading3, $heading4, $heading5, $heading6, $para1, $para2, $para3, $para4, $para5, $para6, $id15);

    if ($stmt15->execute()) {
        $stmt15->close();

        // Content updated successfully
        echo '<script>alert("Content saved successfully.");</script>'; // Display pop-up message
        header("Location: admin.php"); // Redirect to admin.php
        exit();
    } else {
        $output15 .= "Error updating content: " . $stmt15->error;
    }
}
//<!-- Heading and Paragraph after big brown box end-->
//faq part
$sql16 = "SELECT id, `heading`, `question1`, `answer1`, `question2`, `answer2`, `question3`, `answer3`, `question4`, `answer4`, `question5`, `answer5`, `question6`, `answer6`, `question7`, `answer7`, `question8`, `answer8`,`question9`, `answer9`  FROM `buy-mba-dissertation-service-faq`";
$result16 = $conn->query($sql16);

// Initialize a variable to track the output
$output16 = '';

if ($result16->num_rows > 0) {
    // Output the data
    while ($row16 = $result16->fetch_assoc()) {
        $output16 .= '<form method="POST" class="form-group">';
        $output16 .= '<input type="hidden" name="id" value="' . $row16['id'] . '">';
        $output16 .= '<label for="heading">heading:</label>';
        $output16 .= '<input type="text" name="heading" value="' . $row16['heading'] . '" class="form-control"><br>';
        $output16 .= '<label for="question1">Question:</label>';
        $output16 .= '<input type="text" name="question1" value="' . $row16['question1'] . '" class="form-control"><br>';
        $output16 .= '<label for="answer1">Answer:</label>';
        $output16 .= '<input type="text" name="answer1" value="' . $row16['answer1'] . '" class="form-control"><br>';
        $output16 .= '<label for="question2">Question 2:</label>';
        $output16 .= '<input type="text" name="question2" value="' . $row16['question2'] . '" class="form-control"><br>';
        $output16 .= '<label for="answer2">Answer 2:</label>';
        $output16 .= '<input type="text" name="answer2" value="' . $row16['answer2'] . '" class="form-control"><br>';
        $output16 .= '<label for="question3">Question 3:</label>';
        $output16 .= '<input type="text" name="question3" value="' . $row16['question3'] . '" class="form-control"><br>';
        $output16 .= '<label for="answer3">Answer 3:</label>';
        $output16 .= '<input type="text" name="answer3" value="' . $row16['answer3'] . '" class="form-control"><br>';
        $output16 .= '<label for="question4">Question 4:</label>';
        $output16 .= '<input type="text" name="question4" value="' . $row16['question4'] . '" class="form-control"><br>';
        $output16 .= '<label for="answer4">Answer 4:</label>';
        $output16 .= '<input type="text" name="answer4" value="' . $row16['answer4'] . '" class="form-control"><br>';
        $output16 .= '<label for="question5">Question 5:</label>';
        $output16 .= '<input type="text" name="question5" value="' . $row16['question5'] . '" class="form-control"><br>';
        $output16 .= '<label for="answer5">Answer 5:</label>';
        $output16 .= '<input type="text" name="answer5" value="' . $row16['answer5'] . '" class="form-control"><br>';
        $output16 .= '<label for="question6">Question 6:</label>';
        $output16 .= '<input type="text" name="question6" value="' . $row16['question6'] . '" class="form-control"><br>';
        $output16 .= '<label for="answer6">Answer 6:</label>';
        $output16 .= '<input type="text" name="answer6" value="' . $row16['answer6'] . '" class="form-control"><br>';
        $output16 .= '<label for="question7">Question 7:</label>';
        $output16 .= '<input type="text" name="question7" value="' . $row16['question7'] . '" class="form-control"><br>';
        $output16 .= '<label for="answer7">Answer 7:</label>';
        $output16 .= '<input type="text" name="answer7" value="' . $row16['answer7'] . '" class="form-control"><br>';
        $output16 .= '<label for="question8">Question 8:</label>';
        $output16 .= '<input type="text" name="question8" value="' . $row16['question8'] . '" class="form-control"><br>';
        $output16 .= '<label for="answer8">Answer 8:</label>';
        $output16 .= '<input type="text" name="answer8" value="' . $row16['answer8'] . '" class="form-control"><br>';
        $output16 .= '<label for="question9">Question 9:</label>';
        $output16 .= '<input type="text" name="question9" value="' . $row16['question9'] . '" class="form-control"><br>';
        $output16 .= '<label for="answer9">Answer 9:</label>';
        $output16 .= '<input type="text" name="answer9" value="' . $row16['answer9'] . '" class="form-control"><br>';
       

        $output16 .= '<button type="submit" name="submit16" class="btn btn-primary">Save</button>';
        $output16 .= '</form>';
    }
} else {
    $output16 .= "No data found.";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit16'])) {
    // Retrieve the submitted data
    $id16 = $_POST['id'];
    $heading = $_POST['heading'];
    $question1 = $_POST['question1'];
    $answer1 = $_POST['answer1'];
    $question2 = $_POST['question2'];
    $answer2 = $_POST['answer2'];
    $question3 = $_POST['question3'];
    $answer3 = $_POST['answer3'];
    $question4 = $_POST['question4'];
    $answer4 = $_POST['answer4'];
    $question5 = $_POST['question5'];
    $answer5 = $_POST['answer5'];
    $question6 = $_POST['question6'];
    $answer6 = $_POST['answer6'];
    $question7 = $_POST['question7'];
    $answer7 = $_POST['answer7'];
    $question8 = $_POST['question8'];
    $answer8 = $_POST['answer8'];
    $question9 = $_POST['question9'];
    $answer9 = $_POST['answer9'];

    // Prepare and bind the update statement
    $stmt16 = $conn->prepare("UPDATE `buy-mba-dissertation-service-faq` SET `heading`= ?, `question1`= ?, `answer1`= ?, `question2`= ?, `answer2`=?, `question3`=?, `answer3`=?, `question4`=?, `answer4`=?, `question5`=?, `answer5`=?,  `question6`=?, `answer6`=?, `question7`=?, `answer7`=?, `question8`=?, `answer8`=?,`question9`=?, `answer9`=?   WHERE `id` = ?");
    $stmt16->bind_param("sssssssssssssssssssi", $heading, $question1, $answer1, $question2, $answer2, $question3, $answer3, $question4, $answer4, $question5, $answer5, $question6, $answer6, $question7, $answer7, $question8, $answer8, $question9, $answer9, $id16);
    
    
    if ($stmt16->execute()) {
        $stmt16->close();

        // Content updated successfully
      //  echo '<script>alert("Content saved successfully.");</script>'; // Display pop-up message
        header("Location: admin.php"); // Redirect to admin.php
        exit();
    } else {
        $output16 .= "Error updating content: " . $stmt16->error;
    }
}


//<!--Buy MBA dissertation section end-->
//<!--Buy MASTer dissertation section start-->
//faq part
$sql17 = "SELECT id, `heading`, `question1`, `answer1`, `question2`, `answer2`, `question3`, `answer3`, `question4`, `answer4`, `question5`, `answer5`, `question6`, `answer6`, `question7`, `answer7`, `question8`, `answer8`,`question9`, `answer9`  FROM `buy-master-dissertation-service-faq`";
$result17 = $conn->query($sql17);

// Initialize a variable to track the output
$output17 = '';

if ($result17->num_rows > 0) {
    // Output the data
    while ($row17 = $result17->fetch_assoc()) {
        $output17 .= '<form method="POST" class="form-group">';
        $output17 .= '<input type="hidden" name="id" value="' . $row17['id'] . '">';
        $output17 .= '<label for="heading">heading:</label>';
        $output17 .= '<input type="text" name="heading" value="' . $row17['heading'] . '" class="form-control"><br>';
        $output17 .= '<label for="question1">Question:</label>';
        $output17 .= '<input type="text" name="question1" value="' . $row17['question1'] . '" class="form-control"><br>';
        $output17 .= '<label for="answer1">Answer:</label>';
        $output17 .= '<input type="text" name="answer1" value="' . $row17['answer1'] . '" class="form-control"><br>';
        $output17 .= '<label for="question2">Question 2:</label>';
        $output17 .= '<input type="text" name="question2" value="' . $row17['question2'] . '" class="form-control"><br>';
        $output17 .= '<label for="answer2">Answer 2:</label>';
        $output17 .= '<input type="text" name="answer2" value="' . $row17['answer2'] . '" class="form-control"><br>';
        $output17 .= '<label for="question3">Question 3:</label>';
        $output17 .= '<input type="text" name="question3" value="' . $row17['question3'] . '" class="form-control"><br>';
        $output17 .= '<label for="answer3">Answer 3:</label>';
        $output17 .= '<input type="text" name="answer3" value="' . $row17['answer3'] . '" class="form-control"><br>';
        $output17 .= '<label for="question4">Question 4:</label>';
        $output17 .= '<input type="text" name="question4" value="' . $row17['question4'] . '" class="form-control"><br>';
        $output17 .= '<label for="answer4">Answer 4:</label>';
        $output17 .= '<input type="text" name="answer4" value="' . $row17['answer4'] . '" class="form-control"><br>';
        $output17 .= '<label for="question5">Question 5:</label>';
        $output17 .= '<input type="text" name="question5" value="' . $row17['question5'] . '" class="form-control"><br>';
        $output17 .= '<label for="answer5">Answer 5:</label>';
        $output17 .= '<input type="text" name="answer5" value="' . $row17['answer5'] . '" class="form-control"><br>';
        $output17 .= '<label for="question6">Question 6:</label>';
        $output17 .= '<input type="text" name="question6" value="' . $row17['question6'] . '" class="form-control"><br>';
        $output17 .= '<label for="answer6">Answer 6:</label>';
        $output17 .= '<input type="text" name="answer6" value="' . $row17['answer6'] . '" class="form-control"><br>';
        $output17 .= '<label for="question7">Question 7:</label>';
        $output17 .= '<input type="text" name="question7" value="' . $row17['question7'] . '" class="form-control"><br>';
        $output17 .= '<label for="answer7">Answer 7:</label>';
        $output17 .= '<input type="text" name="answer7" value="' . $row17['answer7'] . '" class="form-control"><br>';
        $output17 .= '<label for="question8">Question 8:</label>';
        $output17 .= '<input type="text" name="question8" value="' . $row17['question8'] . '" class="form-control"><br>';
        $output17 .= '<label for="answer8">Answer 8:</label>';
        $output17 .= '<input type="text" name="answer8" value="' . $row17['answer8'] . '" class="form-control"><br>';
        $output17 .= '<label for="question9">Question 9:</label>';
        $output17 .= '<input type="text" name="question9" value="' . $row17['question9'] . '" class="form-control"><br>';
        $output17 .= '<label for="answer9">Answer 9:</label>';
        $output17 .= '<input type="text" name="answer9" value="' . $row17['answer9'] . '" class="form-control"><br>';
       

        $output17 .= '<button type="submit" name="submit17" class="btn btn-primary">Save</button>';
        $output17 .= '</form>';
    }
} else {
    $output17 .= "No data found.";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit17'])) {
    // Retrieve the submitted data
    $id17 = $_POST['id'];
    $heading = $_POST['heading'];
    $question1 = $_POST['question1'];
    $answer1 = $_POST['answer1'];
    $question2 = $_POST['question2'];
    $answer2 = $_POST['answer2'];
    $question3 = $_POST['question3'];
    $answer3 = $_POST['answer3'];
    $question4 = $_POST['question4'];
    $answer4 = $_POST['answer4'];
    $question5 = $_POST['question5'];
    $answer5 = $_POST['answer5'];
    $question6 = $_POST['question6'];
    $answer6 = $_POST['answer6'];
    $question7 = $_POST['question7'];
    $answer7 = $_POST['answer7'];
    $question8 = $_POST['question8'];
    $answer8 = $_POST['answer8'];
    $question9 = $_POST['question9'];
    $answer9 = $_POST['answer9'];

    // Prepare and bind the update statement
    $stmt17 = $conn->prepare("UPDATE `buy-master-dissertation-service-faq` SET `heading`= ?, `question1`= ?, `answer1`= ?, `question2`= ?, `answer2`=?, `question3`=?, `answer3`=?, `question4`=?, `answer4`=?, `question5`=?, `answer5`=?,  `question6`=?, `answer6`=?, `question7`=?, `answer7`=?, `question8`=?, `answer8`=?,`question9`=?, `answer9`=?   WHERE `id` = ?");
    $stmt17->bind_param("sssssssssssssssssssi", $heading, $question1, $answer1, $question2, $answer2, $question3, $answer3, $question4, $answer4, $question5, $answer5, $question6, $answer6, $question7, $answer7, $question8, $answer8, $question9, $answer9, $id17);
    
    
    if ($stmt17->execute()) {
        $stmt17->close();

        // Content updated successfully
      //  echo '<script>alert("Content saved successfully.");</script>'; // Display pop-up message
        header("Location: admin.php"); // Redirect to admin.php
        exit();
    } else {
        $output17 .= "Error updating content: " . $stmt17->error;
    }
}


//<!--Buy MASTER dissertation section end-->
//Heading and paragraph after brown box MBA Page 
//<!-- Heading and Paragraph after big brown box-->
$sql18 = "SELECT id, `heading1`, `heading2`, `heading3`, `heading4`, `heading5`, `heading6`, `para1`, `para2`, `para3`, `para4`, `para5`, `para6` FROM `buy-master-dissertation-service-after-brown-box`";
$result18 = $conn->query($sql18);

// Initialize a variable to track the output
$output18 = '';

if ($result18->num_rows > 0) {
    // Output the data
    while ($row18 = $result18->fetch_assoc()) {
        $output18 .= '<form method="POST" class="form-group">';
        $output18 .= '<input type="hidden" name="id" value="' . $row18['id'] . '">';

        $output18 .= '<label for="boxes">Heading:</label>';
        $output18 .= '<input type="text" name="heading1" value="' . $row18['heading1'] . '" class="form-control"><br>';
        $output18 .= '<label for="boxes">Heading:</label>';
        $output18 .= '<input type="text" name="heading2" value="' . $row18['heading2'] . '" class="form-control"><br>';
        $output18 .= '<label for="boxes">Heading:</label>';
        $output18 .= '<input type="text" name="heading3" value="' . $row18['heading3'] . '" class="form-control"><br>';
        $output18 .= '<label for="boxes">Heading:</label>';
        $output18 .= '<input type="text" name="heading4" value="' . $row18['heading4'] . '" class="form-control"><br>';
        $output18 .= '<label for="boxes">Heading:</label>';
        $output18 .= '<input type="text" name="heading5" value="' . $row18['heading5'] . '" class="form-control"><br>';
        $output18 .= '<label for="boxes">Heading:</label>';
        $output18 .= '<input type="text" name="heading6" value="' . $row18['heading6'] . '" class="form-control"><br>';
        $output18 .= '<label for="para">Paragraph:</label>';
        $output18 .= '<input type="text" name="para1" value="' . $row18['para1'] . '" class="form-control"><br>';
        $output18 .= '<label for="para">Paragraph:</label>';
        $output18 .= '<input type="text" name="para2" value="' . $row18['para2'] . '" class="form-control"><br>';
        $output18 .= '<label for="para">Paragraph:</label>';
        $output18 .= '<input type="text" name="para3" value="' . $row18['para3'] . '" class="form-control"><br>';
        $output18 .= '<label for="para">Paragraph:</label>';
        $output18 .= '<input type="text" name="para4" value="' . $row18['para4'] . '" class="form-control"><br>';
        $output18 .= '<label for="para">Paragraph:</label>';
        $output18 .= '<input type="text" name="para5" value="' . $row18['para5'] . '" class="form-control"><br>';
        $output18 .= '<label for="para">Paragraph:</label>';
        $output18 .= '<input type="text" name="para6" value="' . $row18['para6'] . '" class="form-control"><br>';
        $output18 .= '<button type="submit" name="submit18" class="btn btn-primary">Save</button>';
        $output18 .= '</form>';
    }
} else {
    $output18 .= "No data found.";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit18'])) {
    // Retrieve the submitted data
    $id18 = $_POST['id'];
    $heading1 = $_POST['heading1'];
    $heading2 = $_POST['heading2'];
    $heading3 = $_POST['heading3'];
    $heading4 = $_POST['heading4'];
    $heading5 = $_POST['heading5'];
    $heading6 = $_POST['heading6'];
    $para1 = $_POST['para1'];
    $para2 = $_POST['para2'];
    $para3 = $_POST['para3'];
    $para4 = $_POST['para4'];
    $para5 = $_POST['para5'];
    $para6 = $_POST['para6'];

    // Prepare and bind the update statement
    $stmt18 = $conn->prepare("UPDATE `buy-master-dissertation-service-after-brown-box` SET `heading1` = ?, `heading2` = ?, `heading3` = ?, `heading4` = ?, `heading5` = ?, `heading6` = ?, `para1` = ?, `para2` = ?, `para3` = ?, `para4` = ?, `para5` = ?, `para6` = ? WHERE `id` = ?");
    $stmt18->bind_param("sssssssssssss", $heading1, $heading2, $heading3, $heading4, $heading5, $heading6, $para1, $para2, $para3, $para4, $para5, $para6, $id18);

    if ($stmt18->execute()) {
        $stmt18->close();

        // Content updated successfully
        echo '<script>alert("Content saved successfully.");</script>'; // Display pop-up message
        header("Location: buy-master-dissertation-services.php"); // Redirect to admin.php
        exit();
    } else {
        $output18 .= "Error updating content: " . $stmt18->error;
    }
}
//<!-- Heading and Paragraph after big brown box end-->
//<!-- big brown boxes start-->
$sql19 = "SELECT id, `heading1`, `heading2`, `heading3`, `heading4`, `heading5`, `para1`, `para2`, `para3`, `para4`, `para5` FROM `buy-master-dissertation-service-big-brown-box`";
$result19 = $conn->query($sql19);

// Initialize a variable to track the output
$output19 = '';

if ($result19->num_rows > 0) {
    // Output the data
    while ($row19 = $result19->fetch_assoc()) {
        $output19 .= '<form method="POST" class="form-group">';
        $output19 .= '<input type="hidden" name="id" value="' . $row19['id'] . '">';

        $output19 .= '<label for="boxes">Heading:</label>';
        $output19 .= '<input type="text" name="heading1" value="' . $row19['heading1'] . '" class="form-control"><br>';
        $output19 .= '<label for="boxes">Heading:</label>';
        $output19 .= '<input type="text" name="heading2" value="' . $row19['heading2'] . '" class="form-control"><br>';
        $output19 .= '<label for="boxes">Heading:</label>';
        $output19 .= '<input type="text" name="heading3" value="' . $row19['heading3'] . '" class="form-control"><br>';
        $output19 .= '<label for="boxes">Heading:</label>';
        $output19 .= '<input type="text" name="heading4" value="' . $row19['heading4'] . '" class="form-control"><br>';
        $output19 .= '<label for="boxes">Heading:</label>';
        $output19 .= '<input type="text" name="heading5" value="' . $row19['heading5'] . '" class="form-control"><br>';
        $output19 .= '<label for="para">Paragraph:</label>';
        $output19 .= '<input type="text" name="para1" value="' . $row19['para1'] . '" class="form-control"><br>';
        $output19 .= '<label for="para">Paragraph:</label>';
        $output19 .= '<input type="text" name="para2" value="' . $row19['para2'] . '" class="form-control"><br>';
        $output19 .= '<label for="para">Paragraph:</label>';
        $output19 .= '<input type="text" name="para3" value="' . $row19['para3'] . '" class="form-control"><br>';
        $output19 .= '<label for="para">Paragraph:</label>';
        $output19 .= '<input type="text" name="para4" value="' . $row19['para4'] . '" class="form-control"><br>';
        $output19 .= '<label for="para">Paragraph:</label>';
        $output19 .= '<input type="text" name="para5" value="' . $row19['para5'] . '" class="form-control"><br>';
        $output19 .= '<button type="submit" name="submit19" class="btn btn-primary">Save</button>';
        $output19 .= '</form>';
    }
} else {
    $output19 .= "No data found.";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit19'])) {
    // Retrieve the submitted data
    $id19 = $_POST['id'];
    $heading1 = $_POST['heading1'];
    $heading2 = $_POST['heading2'];
    $heading3 = $_POST['heading3'];
    $heading4 = $_POST['heading4'];
    $heading5 = $_POST['heading5'];
    $para1 = $_POST['para1'];
    $para2 = $_POST['para2'];
    $para3 = $_POST['para3'];
    $para4 = $_POST['para4'];
    $para5 = $_POST['para5'];

    // Prepare and bind the update statement
    $stmt19 = $conn->prepare("UPDATE `buy-master-dissertation-service-big-brown-box` SET `heading1` = ?, `heading2` = ?, `heading3` = ?, `heading4` = ?, `heading5` = ?, `para1` = ?, `para2` = ?, `para3` = ?, `para4` = ?, `para5` = ? WHERE `id` = ?");
    $stmt19->bind_param("ssssssssssi", $heading1, $heading2, $heading3, $heading4, $heading5, $para1, $para2, $para3, $para4, $para5, $id19);

    if ($stmt19->execute()) {
        $stmt19->close();

        // Content updated successfully
        echo '<script>alert("Content saved successfully.");</script>'; // Display pop-up message
        header("Location: admin.php"); // Redirect to admin.php
        exit();
    } else {
        $output19 .= "Error updating content: " . $stmt19->error;
    }
}
//<!-- big brown boxes end-->
//<!-- 2headings after 3 brown boxes start-->
$sql20 = "SELECT id, `heading`, `para` FROM `buy-master-dissertation-service-2headings`";
$result20 = $conn->query($sql20);

// Initialize a variable to track the output
$output20 = '';

if ($result20->num_rows > 0) {
    // Output the data
    while ($row20 = $result20->fetch_assoc()) {
        $output20 .= '<form method="POST" class="form-group">';
        $output20 .= '<input type="hidden" name="id" value="' . $row20['id'] . '">';

        $output20 .= '<label for="boxes">Heading:</label>';
        $output20 .= '<input type="text" name="heading" value="' . $row20['heading'] . '" class="form-control"><br>';

        $output20 .= '<label for="para">Paragraph:</label>';
        $output20 .= '<input type="text" name="para" value="' . $row20['para'] . '" class="form-control"><br>';

        $output20 .= '<button type="submit" name="submit20" class="btn btn-primary">Save</button>';
        $output20 .= '</form>';
    }
} else {
    $output20 .= "No data found.";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit20'])) {
    // Retrieve the submitted data
    $id20 = $_POST['id'];
    $heading = $_POST['heading'];
    $para = $_POST['para'];

    // Prepare and bind the update statement
    $stmt20 = $conn->prepare("UPDATE `buy-master-dissertation-service-2headings` SET `heading` = ?, `para` = ? WHERE `id` = ?");
    $stmt20->bind_param("ssi", $heading, $para, $id20);

    if ($stmt20->execute()) {
        $stmt20->close();

        // Content updated successfully
        echo '<script>alert("Content saved successfully.");</script>'; // Display pop-up message
        header("Location: admin.php"); // Redirect to admin.php
        exit();
    } else {
        $output20 .= "Error updating content: " . $stmt20->error;
    }
}
//<!-- 2headings after 3 brown boxes end-->
// <!--Brown boxes start-->

// Assuming you have already established a connection to the database ($conn)

$sql21 = "SELECT id, `3boxes` AS `boxes`, `para` FROM `buy-master-dissertation-service-3brown-boxes`";
$result21 = $conn->query($sql21);

// Initialize a variable to track the output
$output21 = '';

if ($result21->num_rows > 0) {
    // Output the data
    while ($row21 = $result21->fetch_assoc()) {
        $output21 .= '<form method="POST" class="form-group">';
        $output21 .= '<input type="hidden" name="id" value="' . $row21['id'] . '">';

        $output21 .= '<label for="boxes">Heading:</label>';
        $output21 .= '<input type="text" name="boxes" value="' . $row21['boxes'] . '" class="form-control"><br>';

        $output21 .= '<label for="para">Paragraph:</label>';
        $output21 .= '<input type="text" name="para" value="' . $row21['para'] . '" class="form-control"><br>';

        $output21 .= '<button type="submit" name="submit21" class="btn btn-primary">Save</button>';
        $output21 .= '</form>';
    }
} else {
    $output21 .= "No data found.";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit21'])) {
    // Retrieve the submitted data
    $id21 = $_POST['id'];
    $boxes = $_POST['boxes'];
    $para = $_POST['para'];

    // Prepare and bind the update statement
    $stmt21 = $conn->prepare("UPDATE `buy-master-dissertation-service-3brown-boxes` SET `3boxes` = ?, `para` = ? WHERE `id` = ?");
    $stmt21->bind_param("ssi", $boxes, $para, $id21);

    if ($stmt21->execute()) {
        $stmt21->close();

        // Content updated successfully
        echo '<script>alert("Content saved successfully.");</script>'; // Display pop-up message
        header("Location: admin.php"); // Redirect to admin.php
        exit();
    } else {
        $output21 .= "Error updating content: " . $stmt21->error;
    }
}


//<!--Brown boxes end--!-->
//Black box 
// Assuming you have already established a connection to the database ($conn)

$sql22 = "SELECT id, `heading`, `point1`, `point2`, `point3` FROM `buy-master-dissertation-service-black-box`";
$result22 = $conn->query($sql22);

// Initialize a variable to track the output
$output22 = '';

if ($result22->num_rows > 0) {
    // Output the data
    while ($row22 = $result22->fetch_assoc()) {
        $output22 .= '<form method="POST" class="form-group">';
        $output22 .= '<input type="hidden" name="id" value="' . $row22['id'] . '">';

        $output22 .= '<label for="heading">Heading:</label>';
        $output22 .= '<textarea name="heading" class="form-control tinymce">' . $row22['heading'] . '</textarea><br>';

        $output22 .= '<label for="point1">Point 1:</label>';
        $output22 .= '<input type="text" name="point1" value="' . $row22['point1'] . '" class="form-control"><br>';

        $output22 .= '<label for="point2">Point 2:</label>';
        $output22 .= '<input type="text" name="point2" value="' . $row22['point2'] . '" class="form-control"><br>';

        $output22 .= '<label for="point3">Point 3:</label>';
        $output22 .= '<input type="text" name="point3" value="' . $row22['point3'] . '" class="form-control"><br>';

        $output22 .= '<button type="submit" name="submit22" class="btn btn-primary">Save</button>';
        $output22 .= '</form>';
    }
} else {
    $output22 .= "No data found.";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit22'])) {
    // Retrieve the submitted data
    $id22 = $_POST['id'];
    $heading = $_POST['heading'];
    $point1 = $_POST['point1'];
    $point2 = $_POST['point2'];
    $point3 = $_POST['point3'];

    // Prepare and bind the update statement
    $stmt22 = $conn->prepare("UPDATE `buy-master-dissertation-service-black-box` SET `heading` = ?, `point1` = ?, `point2` = ?, `point3` = ? WHERE `id` = ?");
    $stmt22->bind_param("ssssi", $heading, $point1, $point2, $point3, $id22);

    if ($stmt22->execute()) {
        $stmt22->close();

        // Content updated successfully
        echo '<script>alert("Content saved successfully.");</script>'; // Display pop-up message
        header("Location: admin.php"); // Redirect to admin.php
        exit();
    } else {
        $output22 .= "Error updating content: " . $stmt22->error;
    }
}
//form data
// Fetch the form data
$sql = "SELECT * FROM form_data";
$result = $conn->query($sql);

// Initialize variables to store the fetched data
$formData = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Store the row data in the $formData array
        $formData[] = $row;
    }
}
//But PHD dissertation 
// Assuming you have already established a connection to the database ($conn)

$sql23 = "SELECT id, `heading`, `point1`, `point2`, `point3` FROM `buy-phd-dissertation-services-black-box`";
$result23 = $conn->query($sql23);

// Initialize a variable to track the output
$output23 = '';

if ($result23->num_rows > 0) {
    // Output the data
    while ($row23 = $result23->fetch_assoc()) {
        $output23 .= '<form method="POST" class="form-group">';
        $output23 .= '<input type="hidden" name="id" value="' . $row23['id'] . '">';

        $output23 .= '<label for="heading">Heading:</label>';
        $output23 .= '<textarea name="heading" class="form-control tinymce">' . $row23['heading'] . '</textarea><br>';

        $output23 .= '<label for="point1">Point 1:</label>';
        $output23 .= '<input type="text" name="point1" value="' . $row23['point1'] . '" class="form-control"><br>';

        $output23 .= '<label for="point2">Point 2:</label>';
        $output23 .= '<input type="text" name="point2" value="' . $row23['point2'] . '" class="form-control"><br>';

        $output23 .= '<label for="point3">Point 3:</label>';
        $output23 .= '<input type="text" name="point3" value="' . $row23['point3'] . '" class="form-control"><br>';

        $output23 .= '<button type="submit" name="submit23" class="btn btn-primary">Save</button>';
        $output23 .= '</form>';
    }
} else {
    $output23 .= "No data found.";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit23'])) {
    // Retrieve the submitted data
    $id23 = $_POST['id'];
    $heading = $_POST['heading'];
    $point1 = $_POST['point1'];
    $point2 = $_POST['point2'];
    $point3 = $_POST['point3'];

    // Prepare and bind the update statement
    $stmt23 = $conn->prepare("UPDATE `buy-phd-dissertation-services-black-box` SET `heading` = ?, `point1` = ?, `point2` = ?, `point3` = ? WHERE `id` = ?");
    $stmt23->bind_param("ssssi", $heading, $point1, $point2, $point3, $id23);

    if ($stmt23->execute()) {
        $stmt23->close();

        // Content updated successfully
        echo '<script>alert("Content saved successfully.");</script>'; // Display pop-up message
        header("Location: admin.php"); // Redirect to admin.php
        exit();
    } else {
        $output23 .= "Error updating content: " . $stmt23->error;
    }
}
// <!--Brown boxes start-->

// Assuming you have already established a connection to the database ($conn)

$sql24 = "SELECT id, `3boxes` AS `boxes`, `para` FROM `buy-phd-dissertation-service-3brown-boxes`";
$result24 = $conn->query($sql24);

// Initialize a variable to track the output
$output24 = '';

if ($result24->num_rows > 0) {
    // Output the data
    while ($row24 = $result24->fetch_assoc()) {
        $output24 .= '<form method="POST" class="form-group">';
        $output24 .= '<input type="hidden" name="id" value="' . $row24['id'] . '">';

        $output24 .= '<label for="boxes">Heading:</label>';
        $output24 .= '<input type="text" name="boxes" value="' . $row24['boxes'] . '" class="form-control"><br>';

        $output24 .= '<label for="para">Paragraph:</label>';
        $output24 .= '<input type="text" name="para" value="' . $row24['para'] . '" class="form-control"><br>';

        $output24 .= '<button type="submit" name="submit24" class="btn btn-primary">Save</button>';
        $output24 .= '</form>';
    }
} else {
    $output12 .= "No data found.";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit24'])) {
    // Retrieve the submitted data
    $id24 = $_POST['id'];
    $boxes = $_POST['boxes'];
    $para = $_POST['para'];

    // Prepare and bind the update statement
    $stmt24 = $conn->prepare("UPDATE `buy-phd-dissertation-service-3brown-boxes` SET `3boxes` = ?, `para` = ? WHERE `id` = ?");
    $stmt24->bind_param("ssi", $boxes, $para, $id24);

    if ($stmt24->execute()) {
        $stmt24->close();

        // Content updated successfully
        echo '<script>alert("Content saved successfully.");</script>'; // Display pop-up message
        header("Location: admin.php"); // Redirect to admin.php
        exit();
    } else {
        $output24 .= "Error updating content: " . $stmt24->error;
    }
}

//<!--Brown boxes end--!-->
//<!-- 2headings after 3 brown boxes start-->
$sql25 = "SELECT id, `heading`, `para` FROM `buy-phd-dissertation-service-2headings`";
$result25 = $conn->query($sql25);

// Initialize a variable to track the output
$output25 = '';

if ($result25->num_rows > 0) {
    // Output the data
    while ($row25 = $result25->fetch_assoc()) {
        $output25 .= '<form method="POST" class="form-group">';
        $output25 .= '<input type="hidden" name="id" value="' . $row25['id'] . '">';

        $output25 .= '<label for="boxes">Heading:</label>';
        $output25 .= '<input type="text" name="heading" value="' . $row25['heading'] . '" class="form-control"><br>';

        $output25 .= '<label for="para">Paragraph:</label>';
        $output25 .= '<input type="text" name="para" value="' . $row25['para'] . '" class="form-control"><br>';

        $output25 .= '<button type="submit" name="submit25" class="btn btn-primary">Save</button>';
        $output25 .= '</form>';
    }
} else {
    $output25 .= "No data found.";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit25'])) {
    // Retrieve the submitted data
    $id25 = $_POST['id'];
    $heading = $_POST['heading'];
    $para = $_POST['para'];

    // Prepare and bind the update statement
    $stmt25 = $conn->prepare("UPDATE `buy-phd-dissertation-service-2headings` SET `heading` = ?, `para` = ? WHERE `id` = ?");
    $stmt25->bind_param("ssi", $heading, $para, $id25);

    if ($stmt25->execute()) {
        $stmt25->close();

        // Content updated successfully
        echo '<script>alert("Content saved successfully.");</script>'; // Display pop-up message
        header("Location: admin.php"); // Redirect to admin.php
        exit();
    } else {
        $output25 .= "Error updating content: " . $stmt25->error;
    }
}
//<!-- 2headings after 3 brown boxes end-->
//<!-- big brown boxes start-->
$sql26 = "SELECT id, `heading1`, `heading2`, `heading3`, `heading4`, `heading5`, `para1`, `para2`, `para3`, `para4`, `para5` FROM `buy-phd-dissertation-service-big-brown-box`";
$result26 = $conn->query($sql26);

// Initialize a variable to track the output
$output26 = '';

if ($result26->num_rows > 0) {
    // Output the data
    while ($row26 = $result26->fetch_assoc()) {
        $output26 .= '<form method="POST" class="form-group">';
        $output26 .= '<input type="hidden" name="id" value="' . $row26['id'] . '">';

        $output26 .= '<label for="boxes">Heading:</label>';
        $output26 .= '<input type="text" name="heading1" value="' . $row26['heading1'] . '" class="form-control"><br>';
        $output26 .= '<label for="boxes">Heading:</label>';
        $output26 .= '<input type="text" name="heading2" value="' . $row26['heading2'] . '" class="form-control"><br>';
        $output26 .= '<label for="boxes">Heading:</label>';
        $output26 .= '<input type="text" name="heading3" value="' . $row26['heading3'] . '" class="form-control"><br>';
        $output26 .= '<label for="boxes">Heading:</label>';
        $output26 .= '<input type="text" name="heading4" value="' . $row26['heading4'] . '" class="form-control"><br>';
        $output26 .= '<label for="boxes">Heading:</label>';
        $output26 .= '<input type="text" name="heading5" value="' . $row26['heading5'] . '" class="form-control"><br>';
        $output26 .= '<label for="para">Paragraph:</label>';
        $output26 .= '<input type="text" name="para1" value="' . $row26['para1'] . '" class="form-control"><br>';
        $output26 .= '<label for="para">Paragraph:</label>';
        $output26 .= '<input type="text" name="para2" value="' . $row26['para2'] . '" class="form-control"><br>';
        $output26 .= '<label for="para">Paragraph:</label>';
        $output26 .= '<input type="text" name="para3" value="' . $row26['para3'] . '" class="form-control"><br>';
        $output26 .= '<label for="para">Paragraph:</label>';
        $output26 .= '<input type="text" name="para4" value="' . $row26['para4'] . '" class="form-control"><br>';
        $output26 .= '<label for="para">Paragraph:</label>';
        $output26 .= '<input type="text" name="para5" value="' . $row26['para5'] . '" class="form-control"><br>';
        $output26 .= '<button type="submit" name="submit26" class="btn btn-primary">Save</button>';
        $output26 .= '</form>';
    }
} else {
    $output26 .= "No data found.";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit26'])) {
    // Retrieve the submitted data
    $id26 = $_POST['id'];
    $heading1 = $_POST['heading1'];
    $heading2 = $_POST['heading2'];
    $heading3 = $_POST['heading3'];
    $heading4 = $_POST['heading4'];
    $heading5 = $_POST['heading5'];
    $para1 = $_POST['para1'];
    $para2 = $_POST['para2'];
    $para3 = $_POST['para3'];
    $para4 = $_POST['para4'];
    $para5 = $_POST['para5'];

    // Prepare and bind the update statement
    $stmt26 = $conn->prepare("UPDATE `buy-phd-dissertation-service-big-brown-box` SET `heading1` = ?, `heading2` = ?, `heading3` = ?, `heading4` = ?, `heading5` = ?, `para1` = ?, `para2` = ?, `para3` = ?, `para4` = ?, `para5` = ? WHERE `id` = ?");
    $stmt26->bind_param("ssssssssssi", $heading1, $heading2, $heading3, $heading4, $heading5, $para1, $para2, $para3, $para4, $para5, $id26);

    if ($stmt26->execute()) {
        $stmt26->close();

        // Content updated successfully
        echo '<script>alert("Content saved successfully.");</script>'; // Display pop-up message
        header("Location: admin.php"); // Redirect to admin.php
        exit();
    } else {
        $output26 .= "Error updating content: " . $stmt26->error;
    }
}
//<!-- big brown boxes end-->
//After big brown box
$sql27 = "SELECT id, `text` FROM `buy-phd-dissertation-service-after-brown-box`";
$result27 = $conn->query($sql27);

// Initialize a variable to track the output
$output27 = '';

if ($result27->num_rows > 0) {
    // Output the data
    while ($row27 = $result27->fetch_assoc()) {
        $output27 .= '<form method="POST" class="form-group">';
        $output27 .= '<input type="hidden" name="id" value="' . $row27['id'] . '">';

        $output27 .= '<label for="boxes">TEXT:</label>';
        $output27 .= '<textarea type="text" name="text" class="form-control" tinymce>' . $row27['text'] . '" </textarea><br>';

        $output27 .= '<button type="submit" name="submit27" class="btn btn-primary">Save</button>';
        $output27 .= '</form>';
    }
} else {
    $output27 .= "No data found.";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit27'])) {
    // Retrieve the submitted data
    $id27 = $_POST['id'];
    $text = $_POST['text'];
    

    // Prepare and bind the update statement
    $stmt27 = $conn->prepare("UPDATE `buy-phd-dissertation-service-after-brown-box` SET `text` = ? WHERE `id` = ?");
    $stmt27->bind_param("si", $text, $id27);

    if ($stmt27->execute()) {
        $stmt27->close();

        // Content updated successfully
        echo '<script>alert("Content saved successfully.");</script>'; // Display pop-up message
        header("Location: admin.php"); // Redirect to admin.php
        exit();
    } else {
        $output27 .= "Error updating content: " . $stmt27->error;
    }
}
//<!-- 2headings after 3 brown boxes end-->
//faq part
$sql28 = "SELECT id, `heading`, `question1`, `answer1`, `question2`, `answer2`, `question3`, `answer3`, `question4`, `answer4`, `question5`, `answer5`, `question6`, `answer6`, `question7`, `answer7`, `question8`, `answer8`,`question9`, `answer9`  FROM `buy-phd-dissertation-service-faq`";
$result28 = $conn->query($sql28);

// Initialize a variable to track the output
$output28 = '';

if ($result28->num_rows > 0) {
    // Output the data
    while ($row28 = $result28->fetch_assoc()) {
        $output28 .= '<form method="POST" class="form-group">';
        $output28 .= '<input type="hidden" name="id" value="' . $row28['id'] . '">';
        $output28 .= '<label for="heading">heading:</label>';
        $output28 .= '<input type="text" name="heading" value="' . $row28['heading'] . '" class="form-control"><br>';
        $output28 .= '<label for="question1">Question:</label>';
        $output28 .= '<input type="text" name="question1" value="' . $row28['question1'] . '" class="form-control"><br>';
        $output28 .= '<label for="answer1">Answer:</label>';
        $output28 .= '<input type="text" name="answer1" value="' . $row28['answer1'] . '" class="form-control"><br>';
        $output28 .= '<label for="question2">Question 2:</label>';
        $output28 .= '<input type="text" name="question2" value="' . $row28['question2'] . '" class="form-control"><br>';
        $output28 .= '<label for="answer2">Answer 2:</label>';
        $output28 .= '<input type="text" name="answer2" value="' . $row28['answer2'] . '" class="form-control"><br>';
        $output28 .= '<label for="question3">Question 3:</label>';
        $output28 .= '<input type="text" name="question3" value="' . $row28['question3'] . '" class="form-control"><br>';
        $output28 .= '<label for="answer3">Answer 3:</label>';
        $output28 .= '<input type="text" name="answer3" value="' . $row28['answer3'] . '" class="form-control"><br>';
        $output28 .= '<label for="question4">Question 4:</label>';
        $output28 .= '<input type="text" name="question4" value="' . $row28['question4'] . '" class="form-control"><br>';
        $output28 .= '<label for="answer4">Answer 4:</label>';
        $output28 .= '<input type="text" name="answer4" value="' . $row28['answer4'] . '" class="form-control"><br>';
        $output28 .= '<label for="question5">Question 5:</label>';
        $output28 .= '<input type="text" name="question5" value="' . $row28['question5'] . '" class="form-control"><br>';
        $output28 .= '<label for="answer5">Answer 5:</label>';
        $output28 .= '<input type="text" name="answer5" value="' . $row28['answer5'] . '" class="form-control"><br>';
        $output28 .= '<label for="question6">Question 6:</label>';
        $output28 .= '<input type="text" name="question6" value="' . $row28['question6'] . '" class="form-control"><br>';
        $output28 .= '<label for="answer6">Answer 6:</label>';
        $output28 .= '<input type="text" name="answer6" value="' . $row28['answer6'] . '" class="form-control"><br>';
        $output28 .= '<label for="question7">Question 7:</label>';
        $output28 .= '<input type="text" name="question7" value="' . $row28['question7'] . '" class="form-control"><br>';
        $output28 .= '<label for="answer7">Answer 7:</label>';
        $output28 .= '<input type="text" name="answer7" value="' . $row28['answer7'] . '" class="form-control"><br>';
        $output28 .= '<label for="question8">Question 8:</label>';
        $output28 .= '<input type="text" name="question8" value="' . $row28['question8'] . '" class="form-control"><br>';
        $output28 .= '<label for="answer8">Answer 8:</label>';
        $output28 .= '<input type="text" name="answer8" value="' . $row28['answer8'] . '" class="form-control"><br>';
        $output28 .= '<label for="question9">Question 9:</label>';
        $output28 .= '<input type="text" name="question9" value="' . $row28['question9'] . '" class="form-control"><br>';
        $output28 .= '<label for="answer9">Answer 9:</label>';
        $output28 .= '<input type="text" name="answer9" value="' . $row28['answer9'] . '" class="form-control"><br>';
       

        $output28 .= '<button type="submit" name="submit28" class="btn btn-primary">Save</button>';
        $output28 .= '</form>';
    }
} else {
    $output28 .= "No data found.";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit28'])) {
    // Retrieve the submitted data
    $id28 = $_POST['id'];
    $heading = $_POST['heading'];
    $question1 = $_POST['question1'];
    $answer1 = $_POST['answer1'];
    $question2 = $_POST['question2'];
    $answer2 = $_POST['answer2'];
    $question3 = $_POST['question3'];
    $answer3 = $_POST['answer3'];
    $question4 = $_POST['question4'];
    $answer4 = $_POST['answer4'];
    $question5 = $_POST['question5'];
    $answer5 = $_POST['answer5'];
    $question6 = $_POST['question6'];
    $answer6 = $_POST['answer6'];
    $question7 = $_POST['question7'];
    $answer7 = $_POST['answer7'];
    $question8 = $_POST['question8'];
    $answer8 = $_POST['answer8'];
    $question9 = $_POST['question9'];
    $answer9 = $_POST['answer9'];

    // Prepare and bind the update statement
    $stmt28 = $conn->prepare("UPDATE `buy-phd-dissertation-service-faq` SET `heading`= ?, `question1`= ?, `answer1`= ?, `question2`= ?, `answer2`=?, `question3`=?, `answer3`=?, `question4`=?, `answer4`=?, `question5`=?, `answer5`=?,  `question6`=?, `answer6`=?, `question7`=?, `answer7`=?, `question8`=?, `answer8`=?,`question9`=?, `answer9`=?   WHERE `id` = ?");
    $stmt28->bind_param("sssssssssssssssssssi", $heading, $question1, $answer1, $question2, $answer2, $question3, $answer3, $question4, $answer4, $question5, $answer5, $question6, $answer6, $question7, $answer7, $question8, $answer8, $question9, $answer9, $id28);
    
    
    if ($stmt28->execute()) {
        $stmt28->close();

        // Content updated successfully
      //  echo '<script>alert("Content saved successfully.");</script>'; // Display pop-up message
        header("Location: admin.php"); // Redirect to admin.php
        exit();
    } else {
        $output28 .= "Error updating content: " . $stmt28->error;
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css">
	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>
      <script src="https://cdn.tiny.cloud/1/3k07dle4wt81uoq3xisevnt07n651jmbgcc52yn8a90mav4t/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
      <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        
        th, td {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }
        
        tr:hover {
            background-color: #f5f5f5;
        }
        
        .download-btn {
            padding: 5px 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <div class="sidebar">
        <h2>Hello Admin</h2>
        <ul>
            <li><a href="https://dissertationwritinghelp.net/admin/blog_upload">Enter Admin Panel</a></li>
            <!--<li><a href="#hello"><i class="fas fa-user"></i>Buy MBA dissertation</a></li>
            <li><a href="#hello1"><i class="fas fa-address-card"></i>Buy MASTER dissertation</a></li>
            <li><a href="#hello2"><i class="fas fa-project-diagram"></i>Buy PHD dissertation</a></li>
            <li><a href="#hello3"><i class="fas fa-blog"></i>Buy a dissertation</a></li>
            <li><a href="#hello4"><i class="fas fa-address-book"></i>Order a dissertation</a></li>
            <li><a href="#hello5"><i class="fas fa-map-pin"></i>Purchase dissertation</a></li>
            <li><a href="#hello5"><i class="fas fa-map-pin"></i>Write my dissertation</a></li>
            <li><a href="#hello5"><i class="fas fa-map-pin"></i>Dissertation writing services</a></li>
            <li><a href="#hello5"><i class="fas fa-map-pin"></i>Phd Qualitative Data Analysis Services</a></li>
            <li><a href="#hello5"><i class="fas fa-map-pin"></i>PHD Data Collection help</a></li>
            <li><a href="#hello5"><i class="fas fa-map-pin"></i>Dissertation Data Analysis Services</a></li>
            <li><a href="#hello5"><i class="fas fa-map-pin"></i>Primary Data Collection Help</a></li>
            <li><a href="#hello5"><i class="fas fa-map-pin"></i>Spss Data Analysis Services</a></li>
            <li><a href="#hello5"><i class="fas fa-map-pin"></i>Secondary Data Collection Help</a></li>
            <li><a href="#hello5"><i class="fas fa-map-pin"></i>Research Methodology Help</a></li>
            <li><a href="#hello5"><i class="fas fa-map-pin"></i>Dissertation Viva Counselling</a></li>
            <li><a href="#hello5"><i class="fas fa-map-pin"></i>Masters Dissertation Proposal Help</a></li>
            <li><a href="#hello5"><i class="fas fa-map-pin"></i>Phd Dissertation Proposal Help</a></li>
            <li><a href="#hello5"><i class="fas fa-map-pin"></i>Dissertation Proposal Help</a></li>
            <li><a href="#hello5"><i class="fas fa-map-pin"></i>Research Proposal Writing Service</a></li>
            <li><a href="#hello5"><i class="fas fa-map-pin"></i>Business management dissertation help</a></li>
            <li><a href="#hello5"><i class="fas fa-map-pin"></i>Digital marketing dissertation help</a></li>
            <li><a href="#hello5"><i class="fas fa-map-pin"></i>Social media marketing dissertation help</a></li>
            <li><a href="#hello5"><i class="fas fa-map-pin"></i>Dissertation Abstract Writing Service</a></li>
            <li><a href="#hello5"><i class="fas fa-map-pin"></i>Dissertation Introduction Writing</a></li>
            <li><a href="#hello5"><i class="fas fa-map-pin"></i>Dissertation Chapter Writing Services</a></li>
            <li><a href="#hello5"><i class="fas fa-map-pin"></i>Literature Review Help</a></li>
            <li><a href="#hello5"><i class="fas fa-map-pin"></i>Dissertation Methodology Help</a></li>
            <li><a href="#hello5"><i class="fas fa-map-pin"></i>Dissertation Discussion Writing</a></li>
            <li><a href="#hello5"><i class="fas fa-map-pin"></i>Dissertation Presentation Writing Services</a></li>
            <li><a href="#hello5"><i class="fas fa-map-pin"></i>Dissertation Chapter Writing Services</a></li>
             <li><a href="#hello5"><i class="fas fa-map-pin"></i>Dissertation Chapter Writing Services</a></li> -->

        </ul> 
    </div>
   
       
</table>
        </div>
        
      <h1 style="text-align:center;">Welcome Admin</h1>
   
  
<script>
  $(document).ready(function() {
    $('.sidebar ul li a').click(function(event) {
      event.preventDefault(); // Prevent the default link behavior

      var targetId = $(this).attr('href').slice(1);

      $('.info').hide(); // Hide all content sections
      $('#' + targetId).show(); // Show the target content section
    });
  });


</script>


</body>
</html>
