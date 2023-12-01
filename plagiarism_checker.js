
function checkPlagiarism() {
    var textToCheck = document.getElementById('textToCheck').value;

    // Make an AJAX request to your PHP file, which will handle the Copyleaks API call
    // You can use vanilla JavaScript or a library like jQuery for AJAX

    // Example using jQuery
    $.ajax({
        url: 'plagiarism_detector_handler.php',
        type: 'POST',
        data: { text: textToCheck },
        success: function(response) {
            document.getElementById('plagiarismResult').innerHTML = response;
        },
        error: function(error) {
            console.log('Error:', error);
        }
    });
}
