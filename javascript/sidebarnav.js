
  // Hide all info divs except the first one
  var infoDivs = document.getElementsByClassName('info');
  for (var i = 1; i < infoDivs.length; i++) {
    infoDivs[i].style.display = 'none';
  }
  
  // Get all the sidebar links
  var sidebarLinks = document.querySelectorAll('.sidebar ul li a');
  
  // Attach click event listeners to the sidebar links
  sidebarLinks.forEach(function(link) {
    link.addEventListener('click', function(event) {
      event.preventDefault(); // Prevent the default link behavior

      // Get the target ID from the href attribute
      var targetId = this.getAttribute('href').slice(1);
      
      // Hide all info divs
      for (var i = 0; i < infoDivs.length; i++) {
        infoDivs[i].style.display = 'none';
      }
      
      // Show the target content div
      var targetContent = document.getElementById(targetId);
      targetContent.style.display = 'block';
    });
  });
