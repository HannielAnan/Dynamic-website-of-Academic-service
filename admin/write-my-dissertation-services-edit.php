<?php
include '../dbconnection/dbconnect.php';
// <!--Buy MBA dissertation section start-->
//<!--Seo part -->
// Assuming your database connection is established and named $conn
// Function to display and update records
function display_and_update_records($conn, $table) {
    $sql = "SELECT id, page_identifier, title, meta_description FROM `$table`";
    $result = $conn->query($sql);

    if (!$result) {
        die("Error in SQL query: " . $conn->error);
    }

    $output = '';

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $output .= '<form method="POST">';
            $output .= '<input type="hidden" name="id" value="' . $row['id'] . '">';
            $output .= '<label for="page_identifier">Page Identifier:</label>';
            $output .= '<input type="text" name="page_identifier" value="' . $row['page_identifier'] . '"><br>';
            $output .= '<label for="title">Title:</label>';
            $output .= '<input type="text" name="title" value="' . $row['title'] . '"><br>';
            $output .= '<label for="meta_description">Meta Description:</label>';
            $output .= '<textarea name="meta_description">' . $row['meta_description'] . '</textarea><br>';
            $output .= '<button type="submit" name="submit">Save</button>';
            $output .= '</form>';
        }
    } else {
        $output .= 'No records found';
    }

    // Check for form submission
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $id = $_POST['id'];
        $page_identifier = $_POST['page_identifier'];
        $title = $_POST['title'];
        $meta_description = $_POST['meta_description'];

        $sql = "UPDATE `$table` SET page_identifier=?, title=?, meta_description=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sssi', $page_identifier, $title, $meta_description, $id);

        if ($stmt->execute()) {
            // Redirect on successful update
            header("Location: buy-mba-dissertation-service-edit.php" . $_SERVER['PHP_SELF']);
            exit;
        } else {
            // Print error information
            echo "Error updating record: " . $stmt->error;
        }
    }

    return $output;
}

// Display and update SEO records
$seoOutput = display_and_update_records($conn, "write-my-dissertation-services-title_and-description");
// Assuming you have already established a connection to the database ($conn)

// Assuming you have already established a connection to the database ($conn)

// Assuming you have already established a connection to the database ($conn)

$sql11 = "SELECT id, `heading`, `point1`, `point2`, `point3` FROM `write-my-dissertation-services-black-box`";
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
    $stmt11 = $conn->prepare("UPDATE `write-my-dissertation-services-black-box` SET `heading` = ?, `point1` = ?, `point2` = ?, `point3` = ? WHERE `id` = ?");
    $stmt11->bind_param("ssssi", $heading, $point1, $point2, $point3, $id11);

    if ($stmt11->execute()) {
        $stmt11->close();

        // Content updated successfully
        echo '<script>alert("Content saved successfully.");</script>'; // Display pop-up message
        header("Location: purchase-dissertations-online-edit.php"); // Redirect to admin.php
        exit();
    } else {
        $output11 .= "Error updating content: " . $stmt11->error;
    }
}

// <!--Brown boxes start-->

// Assuming you have already established a connection to the database ($conn)

$sql12 = "SELECT id, `3boxes` AS `boxes`, `para` FROM `write-my-dissertation-services-3brown-boxes`";
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
    $stmt12 = $conn->prepare("UPDATE `write-my-dissertation-services-3brown-boxes` SET `3boxes` = ?, `para` = ? WHERE `id` = ?");
    $stmt12->bind_param("ssi", $boxes, $para, $id12);

    if ($stmt12->execute()) {
        $stmt12->close();

        // Content updated successfully
        echo '<script>alert("Content saved successfully.");</script>'; // Display pop-up message
        header("Location: buy-dissertation-online-edit.php"); // Redirect to admin.php
        exit();
    } else {
        $output12 .= "Error updating content: " . $stmt12->error;
    }
}


//<!--Brown boxes end--!-->
//<!-- 2headings after 3 brown boxes start-->
$sql13 = "SELECT id, `heading`, `para` FROM `write-my-dissertation-services-2headings`";
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
    $stmt13 = $conn->prepare("UPDATE `write-my-dissertation-services-2headings` SET `heading` = ?, `para` = ? WHERE `id` = ?");
    $stmt13->bind_param("ssi", $heading, $para, $id13);

    if ($stmt13->execute()) {
        $stmt13->close();

        // Content updated successfully
        echo '<script>alert("Content saved successfully.");</script>'; // Display pop-up message
        header("Location: buy-dissertation-online-edit.php"); // Redirect to admin.php
        exit();
    } else {
        $output13 .= "Error updating content: " . $stmt13->error;
    }
}
//<!-- 2headings after 3 brown boxes end-->
//<!-- big brown boxes start-->
$sql14 = "SELECT id, `heading1`, `heading2`, `heading3`, `heading4`, `heading5`, `para1`, `para2`, `para3`, `para4`, `para5` FROM `write-my-dissertation-services-big-brown-box`";
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
    $stmt14 = $conn->prepare("UPDATE `write-my-dissertation-services-big-brown-box` SET `heading1` = ?, `heading2` = ?, `heading3` = ?, `heading4` = ?, `heading5` = ?, `para1` = ?, `para2` = ?, `para3` = ?, `para4` = ?, `para5` = ? WHERE `id` = ?");
    $stmt14->bind_param("ssssssssssi", $heading1, $heading2, $heading3, $heading4, $heading5, $para1, $para2, $para3, $para4, $para5, $id14);

    if ($stmt14->execute()) {
        $stmt14->close();

        // Content updated successfully
        echo '<script>alert("Content saved successfully.");</script>'; // Display pop-up message
        header("Location: buy-dissertation-online-edit.php"); // Redirect to admin.php
        exit();
    } else {
        $output14 .= "Error updating content: " . $stmt14->error;
    }
}
//<!-- big brown boxes end-->
//<!-- Heading and Paragraph after big brown box-->
$sql15 = "SELECT id, `heading1`, `heading2`, `heading3`, `heading4`, `heading5`, `heading6`, `para1`, `para2`, `para3`, `para4`, `para5`, `para6` FROM `write-my-dissertation-services-after-brown-box3`";
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
        $output15 .= '<label for="para1">Paragraph:</label>';
        $output15 .= '<input type="text" name="para1" value="' . htmlspecialchars($row15['para1']) . '" class="form-control"><br>';
        $output15 .= '<label for="para2">Paragraph:</label>';
        $output15 .= '<input type="text" name="para2" value="' . htmlspecialchars($row15['para2']) . '" class="form-control"><br>';
        $output15 .= '<label for="para3">Paragraph:</label>';
        $output15 .= '<input type="text" name="para3" value="' . htmlspecialchars($row15['para3']) . '" class="form-control"><br>';
        $output15 .= '<label for="para4">Paragraph:</label>';
        $output15 .= '<input type="text" name="para4" value="' . htmlspecialchars($row15['para4']) . '" class="form-control"><br>';
        $output15 .= '<label for="para5">Paragraph:</label>';
        $output15 .= '<input type="text" name="para5" value="' . htmlspecialchars($row15['para5']) . '" class="form-control"><br>';
        $output15 .= '<label for="para6">Paragraph:</label>';
        $output15 .= '<input type="text" name="para6" value="' . htmlspecialchars($row15['para6']) . '" class="form-control"><br>';
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
    $stmt15 = $conn->prepare("UPDATE `write-my-dissertation-services-after-brown-box3` SET `heading1` = ?, `heading2` = ?, `heading3` = ?, `heading4` = ?, `heading5` = ?, `heading6` = ?, `para1` = ?, `para2` = ?, `para3` = ?, `para4` = ?, `para5` = ?, `para6` = ? WHERE `id` = ?");
    $stmt15->bind_param("sssssssssssss", $heading1, $heading2, $heading3, $heading4, $heading5, $heading6, $para1, $para2, $para3, $para4, $para5, $para6, $id15);

    if ($stmt15->execute()) {
        $stmt15->close();

        // Content updated successfully
        echo '<script>alert("Content saved successfully.");</script>'; // Display pop-up message
        header("Location: buy-dissertation-online-edit.php"); // Redirect to admin.php
        exit();
    } else {
        $output15 .= "Error updating content: " . $stmt15->error;
    }
}
//<!-- Heading and Paragraph after big brown box end-->
//faq part
error_reporting(E_ALL);
ini_set('display_errors', 1);


$sql16 = "SELECT id, `heading`, `question1`, `answer1`, `question2`, `answer2`, `question3`, `answer3`, `question4`, `answer4`, `question5`, `answer5`, `question6`, `answer6`, `question7`, `answer7`, `question8`, `answer8` FROM `purchase-dissertations-online-faq`";
$result16 = $conn->query($sql16);
if (!$result16) {
    die("Error executing query: " . $conn->error);
}

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
   

    $stmt16 = $conn->prepare("UPDATE `purchase-dissertations-online-faq` SET `heading`= ?, `question1`= ?, `answer1`= ?, `question2`= ?, `answer2`=?, `question3`=?, `answer3`=?, `question4`=?, `answer4`=?, `question5`=?, `answer5`=?,  `question6`=?, `answer6`=?, `question7`=?, `answer7`=?, `question8`=?, `answer8`=?  WHERE `id` = ?");
    $stmt16->bind_param("ssssssssssssssssss", $heading, $question1, $answer1, $question2, $answer2, $question3, $answer3, $question4, $answer4, $question5, $answer5, $question6, $answer6, $question7, $answer7, $question8, $answer8, $id16);


    
    
    if ($stmt16->execute()) {
        $stmt16->close();

        // Content updated successfully
      //  echo '<script>alert("Content saved successfully.");</script>'; // Display pop-up message
        header("Location: buy-dissertation-online-edit.php"); // Redirect to admin.php
        exit();
    } else {
        $output16 .= "Error updating content: " . $stmt16->error;
    }
}


//<!--Buy MBA dissertation section end-->
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Form Data</title>
    <link rel="icon" type="image" href="images/DISSERTATION-WRITING-HELP-.png">
    <script src="//cdn.quilljs.com/1.3.6/quill.js"></script>
    <link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
 <style>
    .wrapper {
            display: flex;
        }

        .sidebar {
            width: 250px;
            background-color: #333;
            color: #fff;
            padding: 20px;
        }

        .sidebar h2 {
            font-size: 1.5rem;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            margin-bottom: 10px;
        }

        .sidebar ul li a {
            color: #fff;
            text-decoration: none;
        }

        .content {
            flex-grow: 1;
            padding: 20px;
        }
    .form-group {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
    }

    label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
    }

    input, textarea {
        width: 100%;
        padding: 8px;
        margin-bottom: 12px;
        box-sizing: border-box;
    }

    button {
        background-color: #4caf50;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        background-color: #45a049;
    }

    </style>
</head>
<body>

       <div class="wrapper">
           <?php include 'sidebar.php';?>
    <div class="container">
     <div class="info" id="hello">
        <div>HEllo Admin</div>
        <h1>SEO Part</h1>
         <?php echo $seoOutput; ?>
        <?php echo $output11; ?>
        <h1>3 brown boxes code</h1>
        <?php echo $output12; ?>
        <h1>2 Headings after 3 brown boxes</h1>
        <?php echo $output13; ?>
        <h1>Big brown box</h1>
        <?php echo $output14; ?>
        <h1>Heading and paragraph after Big brown box</h1>
        <?php echo $output15; ?>
        <h1>Faq</h1>
        <?php echo $output16; ?>
    </div>
      
    </div>
    </div>
</div>
</div>
</div>
 <!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
--> 
<script>
    $(document).ready(function () {
        $('.sidebar ul li a').click(function (event) {
            event.preventDefault(); // Prevent the default link behavior

            var targetId = $(this).attr('href').slice(1);

            // Hide all content sections
            $('.info').hide();

            // Show the target content section
            $('#' + targetId).show();
        });

        // Show the first content section by default
        $('#form').show();
    });

</script>

</body>
</html>
