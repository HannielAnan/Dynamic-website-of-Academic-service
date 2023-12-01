<?php
include 'dbconnection/dbconnect.php';

$query = "SELECT `heading`, `question1`, `answer1`, `question2`, `answer2`, `question3`, `answer3`, `question4`, `answer4`, `question5`, `answer5`, `question6`, `answer6`, `question7`, `answer7`,`question8`, `answer8`  FROM `ma-education-dissertation-topics-faq`";
$result = $conn->query($query);

$data = array();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $data = array(
        "heading" => $row["heading"],
        "question1" => $row["question1"],
        "answer1" => $row["answer1"],
        "question2" => $row["question2"],
        "answer2" => $row["answer2"],
        "question3" => $row["question3"],
        "answer3" => $row["answer3"],
        "question4" => $row["question4"],
        "answer4" => $row["answer4"],
        "question5" => $row["question5"],
        "answer5" => $row["answer5"],
        "question6" => $row["question6"],
        "answer6" => $row["answer6"],
        "question7" => $row["question7"],
        "answer7" => $row["answer7"],
        "question8" => $row["question8"],
        "answer8" => $row["answer8"],
        "question9" => $row["question9"],
        "answer9" => $row["answer9"],
        
        
    );
} else {
    $data = array(
        "heading" => "Default heading content",
        "question1" => "Default question1 content",
        "answer1" => "Default answer1 content",
        "question2" => "Default question1 content",
        "answer2" => "Default answer1 content",
        "question3" => "Default question1 content",
        "answer3" => "Default answer1 content",
        "question4" => "Default question1 content",
        "answer4" => "Default answer1 content",
        "question5" => "Default question1 content",
        "answer5" => "Default answer1 content",
        "question6" => "Default question1 content",
        "answer6" => "Default answer1 content",
        "question7" => "Default question1 content",
        "answer7" => "Default answer1 content",
        "question8" => "Default question1 content",
        "answer8" => "Default answer1 content",
        "question9" => "Default question1 content",
        "answer9" => "Default answer1 content",
        
        // ... add default values for other columns
    );
}

// Close the database connection
$conn->close();
?>

<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <section>
        <h4 class="title"><?php echo $data['heading']; ?></h4>
        <div class="questions-container">
          <div class="row">
            <div class="col-lg-6">
              <?php if (!empty($data['question1']) && !empty($data['answer1'])) { ?>
                <div class="question">
                  <button id="question">
                    <span id="question3"><?php echo $data['question1']; ?></span>
                    <i class="fas fa-chevron-down d-arrow"></i>
                  </button>
                  <p><?php echo $data['answer1']; ?></p>
                </div>
              <?php } ?>

              <?php if (!empty($data['question2']) && !empty($data['answer2'])) { ?>
                <div class="question">
                  <button id="question">
                    <span id="question3"><?php echo $data['question2']; ?></span>
                    <i class="fas fa-chevron-down d-arrow"></i>
                  </button>
                  <p><?php echo $data['answer2']; ?></p>
                </div>
              <?php } ?>

            
            </div>

            <div class="col-lg-6">
                  <?php if (!empty($data['question3']) && !empty($data['answer3'])) { ?>
                <div class="question">
                  <button id="question">
                    <span id="question3"><?php echo $data['question3']; ?></span>
                    <i class="fas fa-chevron-down d-arrow"></i>
                  </button>
                  <p><?php echo $data['answer3']; ?></p>
                </div>
              <?php } ?>
              <?php if (!empty($data['question4']) && !empty($data['answer4'])) { ?>
                <div class="question">
                  <button id="question">
                    <span id="question3"><?php echo $data['question4']; ?></span>
                    <i class="fas fa-chevron-down d-arrow"></i>
                  </button>
                  <p><?php echo $data['answer4']; ?></p>
                </div>
              <?php } ?>

              <?php if (!empty($data['question5']) && !empty($data['answer5'])) { ?>
                <div class="question">
                  <button id="question">
                    <span id="question3"><?php echo $data['question5']; ?></span>
                    <i class="fas fa-chevron-down d-arrow"></i>
                  </button>
                  <p><?php echo $data['answer5']; ?></p>
                </div>
              <?php } ?>

              <?php if (!empty($data['question6']) && !empty($data['answer6'])) { ?>
                <div class="question">
                  <button id="question">
                    <span><?php echo $data['question6']; ?></span>
                    <i class="fas fa-chevron-down d-arrow"></i>
                  </button>
                  <p><?php echo $data['answer6']; ?></p>
                </div>
              <?php } ?>

              <?php if (!empty($data['question7']) && !empty($data['answer7'])) { ?>
                <div class="question">
                  <button id="question">
                    <span id="question3"><?php echo $data['question7']; ?></span>
                    <i class="fas fa-chevron-down d-arrow"></i>
                  </button>
                  <p><?php echo $data['answer7']; ?></p>
                </div>
              <?php } ?>

              <?php if (!empty($data['question8']) && !empty($data['answer8'])) { ?>
                <div class="question">
                  <button id="question">
                    <span id="question3"><?php echo $data['question8']; ?></span>
                    <i class="fas fa-chevron-down d-arrow"></i>
                  </button>
                  <p><?php echo $data['answer8']; ?></p>
                </div>
              <?php } ?>
            </div>
          </div>
        </div>
        <!-- faq container end -->
      </section>
    </div>
  </div>
</div>
