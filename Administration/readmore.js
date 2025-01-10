const readMoreBtns = document.querySelectorAll('.read-more-btn');
    
    readMoreBtns.forEach(button => {
      button.addEventListener('click', function() {
        const messageText = this.previousElementSibling.previousElementSibling; // Access the <p class="message-text">
        const isExpanded = messageText.style.maxHeight === "none"; // Check if content is expanded
        
        if (isExpanded) {
          messageText.style.maxHeight = "1px"; // Collapse text
          this.textContent = "Read More"; // Change button to "Read More"
        } else {
          messageText.style.maxHeight = "none"; // Expand text
          this.textContent = "Read Less"; // Change button to "Read Less"
        }
      });
    });
