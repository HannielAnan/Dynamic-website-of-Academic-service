<?php
include '../dbconnection/dbconnect.php';
//<!--Buy MASTer dissertation section start-->
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
            header("Location: dissertation-introduction-writing-edit.php" . $_SERVER['PHP_SELF']);
            exit;
        } else {
            // Print error information
            echo "Error updating record: " . $stmt->error;
        }
    }

    return $output;
}

// Display and update SEO records
$seoOutput = display_and_update_records($conn, "dissertation-abstract-writing-service-title_and-description");
//<!--Brown boxes end--!-->
//Black box 
// Assuming you have already established a connection to the database ($conn)

$sql22 = "SELECT id, `heading`, `point1`, `point2`, `point3` FROM `dissertation-introduction-writing-black-box`";
$result22 = $conn->query($sql22);

// Initialize a variable to track the output
$output22 = '';

if ($result22->num_rows > 0) {
    // Output the data
    while ($row22 = $result22->fetch_assoc()) {
        $output22 .= '<form method="POST" class="form-group">';
        $output22 .= '<input type="hidden" name="id" value="' . $row22['id'] . '">';

        $output22 .= '<label for="heading">Heading:</label>';
        $output22 .= '<textarea name="heading" class="form-control">' . $row22['heading'] . '</textarea><br>';

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
    $stmt22 = $conn->prepare("UPDATE `dissertation-introduction-writing-black-box` SET `heading` = ?, `point1` = ?, `point2` = ?, `point3` = ? WHERE `id` = ?");
    $stmt22->bind_param("ssssi", $heading, $point1, $point2, $point3, $id22);

    if ($stmt22->execute()) {
        $stmt22->close();

        // Content updated successfully
        echo '<script>alert("Content saved successfully.");</script>'; // Display pop-up message
        header("Location: dissertation-introduction-writing-edit.php"); // Redirect to admin.php
        exit();
    } else {
        $output22 .= "Error updating content: " . $stmt22->error;
    }
}
// <!--Brown boxes start-->

// Assuming you have already established a connection to the database ($conn)

$sql21 = "SELECT id, `3boxes` AS `boxes`, `para` FROM `dissertation-introduction-writing-3brown-boxes`";
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
    $stmt21 = $conn->prepare("UPDATE `dissertation-introduction-writing-3brown-boxes` SET `3boxes` = ?, `para` = ? WHERE `id` = ?");
    $stmt21->bind_param("ssi", $boxes, $para, $id21);

    if ($stmt21->execute()) {
        $stmt21->close();

        // Content updated successfully
        echo '<script>alert("Content saved successfully.");</script>'; // Display pop-up message
        header("Location: dissertation-introduction-writing-edit.php"); // Redirect to admin.php
        exit();
    } else {
        $output21 .= "Error updating content: " . $stmt21->error;
    }
}


//<!--Brown boxes end--!-->

//<!-- 2headings after 3 brown boxes start-->
$sql20 = "SELECT id, `heading`, `para` FROM `dissertation-introduction-writing-2headings`";
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
    $stmt20 = $conn->prepare("UPDATE `dissertation-introduction-writing-2headings` SET `heading` = ?, `para` = ? WHERE `id` = ?");
    $stmt20->bind_param("ssi", $heading, $para, $id20);

    if ($stmt20->execute()) {
        $stmt20->close();

        // Content updated successfully
        echo '<script>alert("Content saved successfully.");</script>'; // Display pop-up message
        header("Location: dissertation-introduction-writing-edit.php"); // Redirect to admin.php
        exit();
    } else {
        $output20 .= "Error updating content: " . $stmt20->error;
    }
}
//<!-- 2headings after 3 brown boxes end-->
//<!-- big brown boxes start-->
$sql19 = "SELECT id, `heading1`, `heading2`, `heading3`, `heading4`, `heading5`, `para1`, `para2`, `para3`, `para4`, `para5` FROM `dissertation-introduction-writing-big-brown-box`";
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
    $stmt19 = $conn->prepare("UPDATE `dissertation-introduction-writing-big-brown-box` SET `heading1` = ?, `heading2` = ?, `heading3` = ?, `heading4` = ?, `heading5` = ?, `para1` = ?, `para2` = ?, `para3` = ?, `para4` = ?, `para5` = ? WHERE `id` = ?");
    $stmt19->bind_param("ssssssssssi", $heading1, $heading2, $heading3, $heading4, $heading5, $para1, $para2, $para3, $para4, $para5, $id19);

    if ($stmt19->execute()) {
        $stmt19->close();

        // Content updated successfully
        echo '<script>alert("Content saved successfully.");</script>'; // Display pop-up message
        header("Location: dissertation-introduction-writing-edit.php"); // Redirect to admin.php
        exit();
    } else {
        $output19 .= "Error updating content: " . $stmt19->error;
    }
}
//<!-- big brown boxes end-->
//<!-- Heading and Paragraph after big brown box-->
$sql18 = "SELECT id, `heading1`, `heading2`, `heading3`, `heading4`, `heading5`, `heading6`, `para1`, `para2`, `para3`, `para4`, `para5`, `para6` FROM `dissertation-introduction-writing-after-brown-box`";
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
        $output18 .= '<label for="para1">Paragraph 1:</label>';
        $output18 .= '<textarea name="para1" class="form-control">' . $row18['para1'] . '</textarea><br>';
        $output18 .= '<label for="para">Paragraph:</label>';
        $output18 .= '<textarea name="para2" class="form-control">' . $row18['para2'] . '</textarea><br>';
        $output18 .= '<label for="para">Paragraph:</label>';
        $output18 .= '<textarea name="para3" class="form-control">' . $row18['para3'] . '</textarea><br>';
        $output18 .= '<label for="para">Paragraph:</label>';
        $output18 .= '<textarea name="para4" class="form-control">' . $row18['para4'] . '</textarea><br>';
        $output18 .= '<label for="para">Paragraph:</label>';
        $output18 .= '<textarea name="para5" class="form-control">' . $row18['para5'] . '</textarea><br>';
        $output18 .= '<label for="para">Paragraph:</label>';
        $output18 .= '<textarea name="para6" class="form-control">' . $row18['para6'] . '</textarea><br>';
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
    $stmt18 = $conn->prepare("UPDATE `dissertation-introduction-writing-after-brown-box` SET `heading1` = ?, `heading2` = ?, `heading3` = ?, `heading4` = ?, `heading5` = ?, `heading6` = ?, `para1` = ?, `para2` = ?, `para3` = ?, `para4` = ?, `para5` = ?, `para6` = ? WHERE `id` = ?");
    $stmt18->bind_param("sssssssssssss", $heading1, $heading2, $heading3, $heading4, $heading5, $heading6, $para1, $para2, $para3, $para4, $para5, $para6, $id18);

    if ($stmt18->execute()) {
        $stmt18->close();

        // Content updated successfully
        echo '<script>alert("Content saved successfully.");</script>'; // Display pop-up message
        header("Location: dissertation-introduction-writing-edit.php"); // Redirect to admin.php
        exit();
    } else {
        $output18 .= "Error updating content: " . $stmt18->error;
    }
}
//<!-- Heading and Paragraph after big brown box end-->
//faq part
$sql17 = "SELECT id, `heading`, `question1`, `answer1`, `question2`, `answer2`, `question3`, `answer3`, `question4`, `answer4`, `question5`, `answer5`, `question6`, `answer6`, `question7`, `answer7`, `question8`, `answer8`,`question9`, `answer9`  FROM `dissertation-introduction-writing-faq`";
$result17 = $conn->query($sql17);

// Initialize a variable to track the output
$output17 = '';

if ($result17->num_rows > 0) {
    // Output the data
    while ($row17 = $result17->fetch_assoc()) {
        $output17 .= '<form method="POST" class="form-group">';
        $output17 .= '<input type="hidden" name="id" value="' . $row17['id'] . '">';
        $output17 .= '<label for="heading">Heading:</label>';
        $output17 .= '<input type="text" name="heading" value="' . htmlspecialchars($row17['heading']) . '" class="form-control"><br>';
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
    $stmt17 = $conn->prepare("UPDATE `dissertation-abstract-writing-service-faq` SET `heading`= ?, `question1`= ?, `answer1`= ?, `question2`= ?, `answer2`=?, `question3`=?, `answer3`=?, `question4`=?, `answer4`=?, `question5`=?, `answer5`=?,  `question6`=?, `answer6`=?, `question7`=?, `answer7`=?, `question8`=?, `answer8`=?,`question9`=?, `answer9`=?   WHERE `id` = ?");
    $stmt17->bind_param("sssssssssssssssssssi", $heading, $question1, $answer1, $question2, $answer2, $question3, $answer3, $question4, $answer4, $question5, $answer5, $question6, $answer6, $question7, $answer7, $question8, $answer8, $question9, $answer9, $id17);
    
    
    if ($stmt17->execute()) {
        $stmt17->close();

        // Content updated successfully
      //  echo '<script>alert("Content saved successfully.");</script>'; // Display pop-up message
        header("Location: dissertation-introduction-writing-edit.php"); // Redirect to admin.php
        exit();
    } else {
        $output17 .= "Error updating content: " . $stmt17->error;
    }
}


//<!--Buy MASTER dissertation section end-->
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
        max-width: 800px;
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
        <h1>Big blue box</h1>
        <?php echo $output22; ?>
        <h1>3 brown boxes code</h1>
        <?php echo $output21; ?>
        <h1>2 Headings after 3 brown boxes</h1>
        <?php echo $output20; ?>
        <h1>Big brown box</h1>
        <?php echo $output19; ?>
        <h1>Heading and paragraph after Big brown box</h1>
        <?php echo $output18; ?>
        <h1>Faq</h1>
        <?php echo $output17; ?>
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
