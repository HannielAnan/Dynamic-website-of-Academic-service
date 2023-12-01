<?php
// Include your database connection code here
include 'dbconnection/dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    // Get the HTML content from the Quill editor
    $content = $_POST["content"];
    $tags = $_POST["tags"];
    $date = $_POST["date"];
    $url = $_POST["url"];
    $seo_title = $_POST["seo_title"];

    // Handle image upload
    $image = $_FILES["image"]["name"];
    $image_tmp = $_FILES["image"]["tmp_name"];
    $image_path = "uploads/" . $image;

    move_uploaded_file($image_tmp, $image_path);

    // Insert data into the blog table
    $sql = "INSERT INTO blog_post (title, content, tags, date, image, url, seo_title) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$title, $content, $tags, $date, $image_path, $url, $seo_title]);

    // Redirect to a success page or display a success message
    header("Location: blog_upload.php");
    exit();
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Blog Upload</title>
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
      <div class="row">
        <div class="col-lg-12">
            <h1>Blog Upload</h1>
          <form action="add_blog" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="title">Title:</label>
              <input type="text" class="form-control" name="title" required>
            </div>

            <div class="form-group">
               <label for="content">Content:</label>
               <!-- Hidden input field to store the HTML content -->
               <input type="hidden" name="content" id="quillContent" value="">
              <div id="quill-editor" style="min-height: 200px;"></div>
               <textarea class="form-control" id="contentMirror" rows="5" readonly></textarea>
            </div>
            <div class="form-group">
              <label for="tags">Tags:</label>
              <input type="text" class="form-control" name="tags">
            </div>

            <div class="form-group">
              <label for="date">Date:</label>
              <input type="text" class="form-control" name="date" value="<?php echo date('Y-m-d H:i:s'); ?>">
            </div>

            <div class="form-group">
              <label for="image">Add only Webp Image Please:</label>
              <input type="file" class="form-control-file" name="image">
            </div>

            <div class="form-group">
              <label for="url">URL:</label>
              <input type="text" class="form-control" name="url">
            </div>

            <div class="form-group">
              <label for="seo_title">SEO Title:</label>
              <input type="text" class="form-control" name="seo_title">
            </div>

            <button type="submit" class="btn btn-primary">Add Blog</button>
          </form>
        </div>
      </div>
    </div>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
 <script>
  var quill = new Quill('#quill-editor', {
    theme: 'snow',
    placeholder: 'Compose your content...',
    modules: {
      toolbar: [
        [{ 'header': [2, 3, 4, 5, false] }],
        [{ 'list': 'ordered'}, { 'list': 'bullet' }],
        ['bold', 'italic', 'underline'],
        ['link', 'image'],
        ['clean']
      ],
    },
  });


  quill.on('text-change', function() {
    var htmlContent = quill.root.innerHTML;
    document.getElementById('quillContent').value = htmlContent;
    document.getElementById('contentMirror').value = quill.getText();
  });

  var toolbar = quill.getModule('toolbar');
  toolbar.addHandler('image', function() {
    var fileInput = document.createElement('input');
    fileInput.setAttribute('type', 'file');
    fileInput.setAttribute('accept', 'image/*');
    fileInput.click();

    fileInput.onchange = function() {
      var file = fileInput.files[0];
      if (file) {
        var formData = new FormData();
        formData.append('image', file);

        var reader = new FileReader();
        reader.onload = function(e) {
          var range = quill.getSelection();

          // Insert the image
          quill.insertEmbed(range.index, 'image', e.target.result);

          // Get reference to inserted image
          var img = quill.root.querySelector('img');

          // Get parent p element
          var parent = img.parentElement;

          // Apply img-fluid class to parent p
          quill.formatText(parent.offset(quill.scroll), parent.length(), 'class', 'img-fluid');

          // Move cursor
          quill.setSelection(range.index + 1, Quill.sources.SILENT);
        };
        reader.readAsDataURL(file);
      }
    };
  });
</script>
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
