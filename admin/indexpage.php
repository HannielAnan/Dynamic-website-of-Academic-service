<?php
include '../dbconnection/dbconnect.php';
$sql = "SELECT id, box FROM `index` WHERE box ";
$result = $conn->query($sql);

// Initialize a variable to track the output
$output = '';

if ($result->num_rows > 0) {
    // Output the data
    while ($row = $result->fetch_assoc()) {
        $output .= '<form method="POST" class="form-group">';
        $output .= '<input type="hidden" name="id" value="' . $row['id'] . '">';

        if (!in_array($row['id'], $excludedIDs)) {
            $output .= '<label for="box">Slider title:</label>';
            $output .= '<textarea name="box" class="form-control tinymce">' . $row['box'] . '</textarea><br>';
        }

     
        $output .= '</form>';
    }
} else {
    $output .= "No data found.";
}


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit1'])) {
    // Retrieve the submitted data
    $id = $_POST['id'];
    $box = $_POST['box'];
    $table = $_POST['table'];

    // Prepare and bind the update statement
    $stmt = $conn->prepare("UPDATE `index` SET `box` = ?, `table` = ? WHERE `id` = ?");
    $stmt->bind_param("ssi", $box, $table, $id);

    if ($stmt->execute()) {
        $stmt->close();

        // Content updated successfully
        echo '<script>alert("Content saved successfully.");</script>'; // Display pop-up message
        header("Location: admin.php"); // Redirect to admin.php
        exit();
    } else {
        $output .= "Error updating content: " . $stmt->error;
    }
}
/* 2nd table index*/
// Query to retrieve the data from the `index2` table
$sql2 = "SELECT id, `3boxes`, reviews, para FROM `index2`";
$result2 = $conn->query($sql2);

// Initialize a variable to track the output
$output2 = '';

if ($result2->num_rows > 0) {
    // Output the data
    while ($row2 = $result2->fetch_assoc()) {
        $output2 .= '<form method="POST" class="form-group">';
        $output2 .= '<input type="hidden" name="id" value="' . $row2['id'] . '">';
        $output2 .= '<label for="3boxes">3 Boxes:</label>';
        $output2 .= '<input type="text" name="3boxes" value="' . $row2['3boxes'] . '" class="form-control"><br>';
        $output2 .= '<label for="reviews">Reviews:</label>';
        $output2 .= '<input type="text" name="reviews" value="' . $row2['reviews'] . '" class="form-control"><br>';
        $output2 .= '<label for="para">Para:</label>';
        $output2 .= '<input type="text" name="para" value="' . $row2['para'] . '" class="form-control"><br>';
        $output2 .= '<button type="submit" name="submit2" class="btn btn-primary">Save</button>';
        $output2 .= '</form>';
    }
} else {
    $output2 .= "No data found.";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit2'])) {
    // Retrieve the submitted data
    $id2 = $_POST['id'];
    $boxes2 = $_POST['3boxes'];
    $reviews2 = $_POST['reviews'];
    $para2 = $_POST['para'];

    // Prepare and bind the update statement
    $stmt2 = $conn->prepare("UPDATE `index2` SET `3boxes` = ?, `reviews` = ?, `para` = ? WHERE `id` = ?");
    $stmt2->bind_param("sssi", $boxes2, $reviews2, $para2, $id2);

    if ($stmt2->execute()) {
        $stmt2->close();

        // Content updated successfully
        echo '<script>alert("Content saved successfully.");</script>'; // Display pop-up message
        header("Location: admin.php"); // Redirect to admin.php
        exit();
    } else {
        $output2 .= "Error updating content: " . $stmt2->error;
    }
}
/* 3rd table index*/
$sql3 = "SELECT id, `heading`, `text` FROM `index3`";
$result3 = $conn->query($sql3);

// Initialize a variable to track the output
$output3 = '';

if ($result3->num_rows > 0) {
    // Output the data
    while ($row3 = $result3->fetch_assoc()) {
        $output3 .= '<form method="POST" class="form-group">';
        $output3 .= '<input type="hidden" name="id" value="' . $row3['id'] . '">';
        $output3 .= '<label for="heading">3 Boxes:</label>';
        $output3 .= '<input type="text" name="heading" value="' . $row3['heading'] . '" class="form-control"><br>';
        $output3 .= '<label for="reviews">Reviews:</label>';
        $output3 .= '<input type="text" name="text" value="' . $row3['text'] . '" class="form-control"><br>';
        $output3 .= '<button type="submit" name="submit3" class="btn btn-primary">Save</button>';
        $output3 .= '</form>';
    }
} else {
    $output3 .= "No data found.";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit3'])) {
    // Retrieve the submitted data
    $id3 = $_POST['id'];
    $heading = $_POST['heading'];
    $text = $_POST['text'];

    // Prepare and bind the update statement
    $stmt3 = $conn->prepare("UPDATE `index3` SET `heading` = ?, `text` = ? WHERE `id` = ?");
    $stmt3->bind_param("ssi", $heading, $text, $id3);

    if ($stmt3->execute()) {
        $stmt3->close();

        // Content updated successfully
        echo '<script>alert("Content saved successfully.");</script>'; // Display pop-up message
        header("Location: admin.php"); // Redirect to admin.php
        exit();
    } else {
        $output3 .= "Error updating content: " . $stmt3->error;
    }
}
/* 4th table index */
/* 4th table index */
$excludedIDs = [2, 3, 4, 5, 6];
$sql4 = "SELECT id, `heading1`, `subheading1`, `text1` FROM `index4`";
$result4 = $conn->query($sql4);

// Initialize a variable to track the output
$output4 = '';

if ($result4->num_rows > 0) {
    // Output the data
    while ($row4 = $result4->fetch_assoc()) {
        $output4 .= '<form method="POST" class="form-group">';
        $output4 .= '<input type="hidden" name="id" value="' . $row4['id'] . '">';

        if (!in_array($row4['id'], $excludedIDs)) {
            $output4 .= '<label for="heading1">Heading:</label>';
            $output4 .= '<input type="text" name="heading1" value="' . $row4['heading1'] . '" class="form-control"><br>';
        }

        $output4 .= '<label for="subheading1">Sub Heading:</label>';
        $output4 .= '<input type="text" name="subheading1" value="' . htmlspecialchars($row4['subheading1']) . '" class="form-control"><br>';
        $output4 .= '<label for="text1">Text:</label>';
        $output4 .= '<input type="text" name="text1" value="' . htmlspecialchars($row4['text1']) . '" class="form-control"><br>';
        $output4 .= '<button type="submit" name="submit4" class="btn btn-primary">Save</button>';
        $output4 .= '</form>';
    }
} else {
    $output4 .= "No data found.";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit4'])) {
    // Retrieve the submitted data
    $id4 = $_POST['id'];
    $heading1 = $_POST['heading1'];
    $subheading1 = $_POST['subheading1'];
    $text1 = $_POST['text1'];

    // Prepare and bind the update statement
    $stmt4 = $conn->prepare("UPDATE `index4` SET `heading1` = ?, `subheading1` = ?, `text1` = ? WHERE `id` = ?");
    $stmt4->bind_param("sssi", $heading1, $subheading1, $text1, $id4);

    if ($stmt4->execute()) {
        $stmt4->close();

        // Content updated successfully
        echo '<script>alert("Content saved successfully.");</script>'; // Display pop-up message
        header("Location: admin.php"); // Redirect to admin.php
        exit();
    } else {
        $output4 .= "Error updating content: " . $stmt4->error;
    }
}
/* 5th table index */
$excludedIDs = [2, 3, 4, 5];
$sql5 = "SELECT id, `heading`, `subheading`, `para` FROM `index5`";
$result5 = $conn->query($sql5);

// Initialize a variable to track the output
$output5 = '';

if ($result4->num_rows > 0) {
    // Output the data
    while ($row5 = $result5->fetch_assoc()) {
        $output5 .= '<form method="POST" class="form-group">';
        $output5 .= '<input type="hidden" name="id" value="' . $row5['id'] . '">';

        if (!in_array($row5['id'], $excludedIDs)) {
            $output5 .= '<label for="heading">Heading:</label>';
            $output5 .= '<input type="text" name="heading" value="' . $row5['heading'] . '" class="form-control"><br>';
        }

        $output5 .= '<label for="subheading">Sub Heading:</label>';
        $output5 .= '<input type="text" name="subheading" value="' . $row5['subheading'] . '" class="form-control"><br>';
        $output5 .= '<label for="para">Text:</label>';
        $output5 .= '<input type="para" name="para" value="' . $row5['para'] . '" class="form-control"><br>';
        $output5 .= '<button type="submit" name="submit5" class="btn btn-primary">Save</button>';
        $output5 .= '</form>';
    }
} else {
    $output5 .= "No data found.";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit5'])) {
    // Retrieve the submitted data
    $id5 = $_POST['id'];
    $heading = $_POST['heading'];
    $subheading = $_POST['subheading'];
    $para = $_POST['para'];

    // Prepare and bind the update statement
    $stmt5 = $conn->prepare("UPDATE `index5` SET `heading` = ?, `subheading` = ?, `para` = ? WHERE `id` = ?");
    $stmt5->bind_param("sssi", $heading, $subheading, $para, $id5);

    if ($stmt5->execute()) {
        $stmt5->close();

        // Content updated successfully
        echo '<script>alert("Content saved successfully.");</script>'; // Display pop-up message
        header("Location: admin.php"); // Redirect to admin.php
        exit();
    } else {
        $output5 .= "Error updating content: " . $stmt5->error;
    }
}
/* 6th table index */
$sql6 = "SELECT id, `tab1`, `heading1`, `para1`, `li1`, `li2`,`li3`,`li4`,`li5`,`li6`,`li7`, `li8`, `li9` FROM `index6`";
$result6 = $conn->query($sql6);

// Initialize a variable to track the output
$output6 = '';

if ($result6->num_rows > 0) {
    // Output the data
    while ($row6 = $result6->fetch_assoc()) {
        $output6 .= '<form method="POST" class="form-group">';
        $output6 .= '<input type="hidden" name="id" value="' . $row6['id'] . '">';
        $output6 .= '<label for="tab1">Tabs:</label>';
        $output6 .= '<input type="text" name="tab1" value="' . $row6['tab1'] . '" class="form-control"><br>';
        $output6 .= '<label for="heading1">Heading:</label>';
        $output6 .= '<input type="text" name="heading1" value="' . $row6['heading1'] . '" class="form-control"><br>';
        $output6 .= '<label for="li1">Point1:</label>';
        $output6 .= '<input type="text" name="li1" value="' . $row6['li1'] . '" class="form-control"><br>';
        $output6 .= '<label for="li2">Point2:</label>';
        $output6 .= '<input type="text" name="li2" value="' . $row6['li2'] . '" class="form-control"><br>';
        $output6 .= '<label for="li3">Point3:</label>';
        $output6 .= '<input type="text" name="li3" value="' . $row6['li3'] . '" class="form-control"><br>';
        $output6 .= '<label for="li4">Point4:</label>';
        $output6 .= '<input type="text" name="li4" value="' . $row6['li4'] . '" class="form-control"><br>';
        $output6 .= '<label for="li5">Point5:</label>';
        $output6 .= '<input type="text" name="li5" value="' . $row6['li5'] . '" class="form-control"><br>';
        $output6 .= '<label for="li6">Point6:</label>';
        $output6 .= '<input type="text" name="li6" value="' . $row6['li6'] . '" class="form-control"><br>';
        $output6 .= '<label for="li7">Point7:</label>';
        $output6 .= '<input type="text" name="li7" value="' . $row6['li7'] . '" class="form-control"><br>';
        $output6 .= '<label for="li8">Point8:</label>';
        $output6 .= '<input type="text" name="li8" value="' . $row6['li8'] . '" class="form-control"><br>';
        $output6 .= '<label for="li9">Point9:</label>';
        $output6 .= '<input type="text" name="li9" value="' . $row6['li9'] . '" class="form-control"><br>';
        $output6 .= '<button type="submit" name="submit6" class="btn btn-primary">Save</button>';
        $output6 .= '</form>';
    }
} else {
    $output6 .= "No data found.";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit6'])) {
    // Retrieve the submitted data
    $id6 = $_POST['id'];
    $tab1 = $_POST['tab1'];
    $heading1 = $_POST['heading1'];
    $li1 = $_POST['li1'];
    $li2 = $_POST['li2'];
    $li3 = $_POST['li3'];
    $li4 = $_POST['li4'];
    $li5 = $_POST['li5'];
    $li6 = $_POST['li6'];
    $li7 = $_POST['li7'];
    $li8 = $_POST['li8'];
    $li9 = $_POST['li9'];

    // Prepare and bind the update statement
    $stmt6 = $conn->prepare("UPDATE `index6` SET `tab1` = ?, `heading1` = ?, `li1` = ?, `li2` = ?, `li3` = ?, `li4` = ?, `li5` = ?, `li6` = ?, `li7` = ?, `li8` = ?, `li9` = ? WHERE `id` = ?");
    $stmt6->bind_param("sssssssssssi", $tab1, $heading1, $li1, $li2, $li3, $li4, $li5, $li6, $li7, $li8, $li9, $id6);

    if ($stmt6->execute()) {
        $stmt6->close();

        // Content updated successfully
        echo '<script>alert("Content saved successfully.");</script>'; // Display pop-up message
        header("Location: admin.php"); // Redirect to admin.php
        exit();
    } else {
        $output6 .= "Error updating content: " . $stmt6->error;
    }
}

/* 7th table index */
$sql7 = "SELECT id, `heading`, `heading2`, `para1` FROM `index7`";
$result7 = $conn->query($sql7);

// Initialize a variable to track the output
$output7 = '';

if ($result7->num_rows > 0) {
    // Output the data
    $row7 = $result7->fetch_assoc();
    $output7 .= '<form method="POST" class="form-group">';
    $output7 .= '<input type="hidden" name="id" value="' . $row7['id'] . '">';
    $output7 .= '<label for="heading">heading:</label>';
    $output7 .= '<input type="text" name="heading" value="' . $row7['heading'] . '" class="form-control"><br>';
    $output7 .= '<label for="heading2">heading2:</label>';
    $output7 .= '<input type="text" name="heading2" value="' . $row7['heading2'] . '" class="form-control"><br>';
    $output7 .= '<label for="para1">para1:</label>';
    $output7 .= '<input type="text" name="para1" value="' . $row7['para1'] . '" class="form-control"><br>';
    $output7 .= '<button type="submit" name="submit7" class="btn btn-primary">Save</button>';
    $output7 .= '</form>';
} else {
    $output7 .= "No data found.";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit7'])) {
    // Retrieve the submitted data
    $id7 = $_POST['id'];
    $heading = $_POST['heading'];
    $heading2 = $_POST['heading2'];
    $para = $_POST['para1'];

    // Prepare and bind the update statement
    $stmt7 = $conn->prepare("UPDATE `index7` SET `heading` = ?, `heading2` = ?, `para1` = ? WHERE `id` = ?");
    $stmt7->bind_param("sssi", $heading, $heading2, $para, $id7);

    if ($stmt7->execute()) {
        $stmt7->close();

        // Content updated successfully
        echo '<script>alert("Content saved successfully.");</script>'; // Display pop-up message
        header("Location: admin.php"); // Redirect to admin.php
        exit();
    } else {
        $output7 .= "Error updating content: " . $stmt7->error;
    }
}
// /* 8th table index */
$sql8 = "SELECT id, `heading`, `para` FROM `index8`";
$result8 = $conn->query($sql8);

// Initialize a variable to track the output
$output8 = '';

if ($result8->num_rows > 0) {
    // Output the data
    while ($row8 = $result8->fetch_assoc()) {
        $output8 .= '<form method="POST" class="form-group">';
        $output8 .= '<input type="hidden" name="id" value="' . $row8['id'] . '">';
        $output8 .= '<label for="heading">Heading:</label>';
        $output8 .= '<input type="text" name="heading" value="' . htmlspecialchars($row8['heading']) . '" class="form-control"><br>';
        $output8 .= '<label for="para">Paragraph:</label>';
        $output8 .= '<input type="text" name="para" value="' . htmlspecialchars($row8['para']) . '" class="form-control"><br>';
        $output8 .= '<button type="submit" name="submit8" class="btn btn-primary">Save</button>';

        $output8 .= '</form>';
    }
} else {
    $output7 .= "No data found.";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit8'])) {
    // Retrieve the submitted data
    $id8 = $_POST['id'];
    $heading = $_POST['heading'];
    $para = $_POST['para'];

    // Prepare and bind the update statement
    $stmt8 = $conn->prepare("UPDATE `index8` SET `heading` = ?, `para` = ? WHERE `id` = ?");
    $stmt8->bind_param("ssi", $heading, $para, $id8);

    if ($stmt8->execute()) {
        $stmt8->close();

        // Content updated successfully
        echo '<script>alert("Content saved successfully.");</script>'; // Display pop-up message
        header("Location: admin.php"); // Redirect to admin.php
        exit();
    } else {
        $output8 .= "Error updating content: " . $stmt8->error;
    }
}
/*9th table */
// /* 9th table index */
$sql9 = "SELECT id, `heading`, `subheading`, `para` FROM `index10`";
$result9 = $conn->query($sql9);

// Initialize a variable to track the output
$output9 = '';

if ($result9->num_rows > 0) {
    // Output the data
    while ($row9 = $result9->fetch_assoc()) {
        $output9 .= '<form method="POST" class="form-group">';
        $output9 .= '<input type="hidden" name="id" value="' . $row9['id'] . '">';
        $output9 .= '<label for="heading">heading:</label>';
        $output9 .= '<input type="text" name="heading" value="' . $row9['heading'] . '" class="form-control"><br>';
        $output9 .= '<label for="subheading">Subheading:</label>';
        $output9 .= '<input type="text" name="subheading" value="' . $row9['subheading'] . '" class="form-control"><br>';
        $output9 .= '<label for="para">paragraph:</label>';
        $output9 .= '<input type="text" name="para" value="' . $row9['para'] . '" class="form-control"><br>';
        $output9 .= '<button type="submit" name="submit9" class="btn btn-primary">Save</button>';
        $output9 .= '</form>';
    }
} else {
    $output9 .= "No data found.";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit9'])) {
    // Retrieve the submitted data
    $id9 = $_POST['id'];
    $heading = $_POST['heading'];
    $subheading = $_POST['subheading'];
    $para = $_POST['para'];

    // Prepare and bind the update statement
    $stmt9 = $conn->prepare("UPDATE `index10` SET `heading` = ?, `subheading` = ?, `para` = ? WHERE `id` = ?");
    $stmt9->bind_param("sssi", $heading, $subheading, $para, $id9);

    if ($stmt9->execute()) {
        $stmt9->close();

        // Content updated successfully
        echo '<script>alert("Content saved successfully.");</script>'; // Display pop-up message
        header("Location: admin.php"); // Redirect to admin.php
        exit();
    } else {
        $output9 .= "Error updating content: " . $stmt9->error;
    }
}
// /* 10th table index */
$sql10 = "SELECT id, `heading`, `question1`, `answer1`, `question2`, `answer2`, `question3`, `answer3`, `question4`, `answer4`, `question5`, `answer5`,`question6`, `answer6` FROM `index11`";
$result10 = $conn->query($sql10);

// Initialize a variable to track the output
$output10 = '';

if ($result10->num_rows > 0) {
    // Output the data
    while ($row10 = $result10->fetch_assoc()) {
        $output10 .= '<form method="POST" class="form-group">';
        $output10 .= '<input type="hidden" name="id" value="' . $row10['id'] . '">';
        $output10 .= '<label for="heading">heading:</label>';
        $output10 .= '<input type="text" name="heading" value="' . htmlspecialchars($row10['heading']) . '" class="form-control"><br>';
        $output10 .= '<label for="question1">Question:</label>';
        $output10 .= '<input type="text" name="question1" value="' . $row10['question1'] . '" class="form-control"><br>';
        $output10 .= '<label for="answer1">Answer:</label>';
        $output10 .= '<input type="text" name="answer1" value="' . $row10['answer1'] . '" class="form-control"><br>';
        $output10 .= '<label for="question2">Question 2:</label>';
        $output10 .= '<input type="text" name="question2" value="' . $row10['question2'] . '" class="form-control"><br>';
        $output10 .= '<label for="answer2">Answer 2:</label>';
        $output10 .= '<input type="text" name="answer2" value="' . $row10['answer2'] . '" class="form-control"><br>';
        $output10 .= '<label for="question3">Question 3:</label>';
        $output10 .= '<input type="text" name="question3" value="' . $row10['question3'] . '" class="form-control"><br>';
        $output10 .= '<label for="answer3">Answer 3:</label>';
        $output10 .= '<input type="text" name="answer3" value="' . $row10['answer3'] . '" class="form-control"><br>';
        $output10 .= '<label for="question4">Question 4:</label>';
        $output10 .= '<input type="text" name="question4" value="' . $row10['question4'] . '" class="form-control"><br>';
        $output10 .= '<label for="answer4">Answer 4:</label>';
        $output10 .= '<input type="text" name="answer4" value="' . $row10['answer4'] . '" class="form-control"><br>';
        $output10 .= '<label for="question5">Question 5:</label>';
        $output10 .= '<input type="text" name="question5" value="' . $row10['question5'] . '" class="form-control"><br>';
        $output10 .= '<label for="answer5">Answer 5:</label>';
        $output10 .= '<input type="text" name="answer5" value="' . $row10['answer5'] . '" class="form-control"><br>';
        $output10 .= '<button type="submit" name="submit10" class="btn btn-primary">Save</button>';
        $output10 .= '</form>';
    }
} else {
    $output10 .= "No data found.";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit10'])) {
    // Retrieve the submitted data
    $id10 = $_POST['id'];
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
    

    // Prepare and bind the update statement
    $stmt10 = $conn->prepare("UPDATE `index11` SET `heading`= ?, `question1`= ?, `answer1`= ?, `question2`= ?, `answer2`=?, `question3`=?, `answer3`=?, `question4`=?, `answer4`=?, `question5`=?, `answer5`=? WHERE `id` = ?");
    $stmt10->bind_param("sssssssssssi", $heading, $question1, $answer1, $question2, $answer2, $question3, $answer3, $question4, $answer4, $question5, $answer5, $id10);
    
    


    if ($stmt10->execute()) {
        $stmt10->close();

        // Content updated successfully
        echo '<script>alert("Content saved successfully.");</script>'; // Display pop-up message
        header("Location: admin.php"); // Redirect to admin.php
        exit();
    } else {
        $output10 .= "Error updating content: " . $stmt10->error;
    }
}


// <!--index admin section end-->


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
    </style>
</head>
<body>

       <div class="wrapper">
           <?php include 'sidebar.php';?>
    <div class="container">
    <div class="info" id="Samuel">
          <div>You can edit content here</div>
          <h1>Firstsection of Homepage</h1>
          <?php echo $output; ?>
          <h1>second section of Homepage</h1>
          <?php echo $output2; ?>
          <h1>Third section of HOmepage</h1>
          <?php echo $output3; ?>
          <h1>fourth section of Homepage</h1>
          <?php echo $output4; ?>
          <h1>fifth section of Homepage</h1>
          <?php echo $output5; ?>
          <h1>sixth section of Homepage</h1>
          <?php echo $output6; ?>
          <h1>seventh section of Homepage</h1>
          <?php echo $output7; ?>
          <h1>eight section of Homepage</h1>
          <?php echo $output8; ?>
          <h1>NINE section of Homepage</h1>
          <?php echo $output9; ?>
          <h1>FAq of Homepage</h1>
          <?php echo $output10; ?>
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
