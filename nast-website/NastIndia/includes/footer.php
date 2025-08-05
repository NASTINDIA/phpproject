<!-- footer.php -->
<div>
  <footer style="background-color:#1B4584;color:white;padding:40px 20px;display:flex;flex-wrap:wrap;justify-content:space-between;width:100%;">

    <!-- Column 1 -->
    <div style="flex:1;min-width:250px;padding:20px;">
      <img src="images/logonast.png" alt="NAST Logo" style="height:50px;"><br><br>
      <p>Join NAST and embark on a journey that will unlock<br>your true potential, inspire creativity, and empower<br>you to lead in a world of limitless possibilities.<br> Founded by industry veterans at Brandflu, our<br>vision was to merge classroom learning with<br>industry demands.</p>
    </div>

    <!-- Column 2 -->
    <div style="flex:0 0 200px;padding:20px 10px;">
      <h4 style="margin-bottom:15px;">Quick Links</h4>
      <ul style="list-style:none;padding:0;line-height:2em;margin:0;">
        <li><a href="MasterXpert.php" style="color:white;text-decoration:none;">Courses</a></li>
        <li><a href="#" style="color:white;text-decoration:none;">Placements</a></li>
        <li><a href="whynast.php" style="color:white;text-decoration:none;">About Us</a></li>
        <li><a href="maincontsct.php" style="color:white;text-decoration:none;">Contact</a></li>
        <li><a href="franchise.php" style="color:white;text-decoration:none;">Franchise</a></li>
      </ul>
    </div>

    <!-- Feedback Section -->
    <div style="flex:1;min-width:250px;padding:20px;text-align:left;">
      <h3 style="font-size:1.1em;">Did you find the information you were looking for?</h3>

      <div style="margin-top:10px;">
        <button onclick="showResponse('yes')" style="margin:1px;padding:2px 20px;border:1px solid orange;background:transparent;color:white;border-radius:20px;cursor:pointer;">Yes</button>
        <button onclick="showResponse('no')" style="margin:1px;padding:2px 20px;border:1px solid orange;background:transparent;color:white;border-radius:20px;cursor:pointer;">No</button>
      </div>

      <div id="thankYou" style="margin-top:15px;display:none;font-size:1em;">✅ Thank you so much for the feedback!</div>

      <div id="feedbackForm" style="margin-top:8px;display:none;">
        <label for="message">What were you looking for?</label><br>
        <textarea id="message" placeholder="Type your message..." style="margin-top:5px;width:100%;max-width:300px;padding:1px;border-radius:5px;resize:vertical;border:none;"></textarea><br>
        <button onclick="submitFeedback()" style="margin-top:10px;padding:5px 20px;background-color:orange;color:white;border:none;border-radius:20px;cursor:pointer;">
          Submit
        </button>
      </div>
    </div>
  </footer>

  <!-- Footer Bottom -->
  <div style="background-color:#1B4584;padding:1px;display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;width:100%;">
    <div style="display:flex;gap:30px;font-size:1em;padding:5px 15px;">
      <a href="#" style="text-decoration:none;color:white;">Terms & Conditions</a>
      <a href="#" style="text-decoration:none;color:white;">Privacy Policy</a>
    </div>

    <!-- Social Icons -->
    <div style="display:flex;gap:10px;">
      <a href="https://www.facebook.com/nastindia.in" target="_blank" style="background:#ffffff;padding:10px;border-radius:10px;box-shadow:0 0 5px rgba(0,0,0,0.1);">
        <img src="https://img.icons8.com/color/48/facebook-new.png" alt="Facebook" width="24" height="24" />
      </a>
      <a href="https://www.instagram.com/nastindia.in/" target="_blank" style="background:#ffffff;padding:10px;border-radius:10px;box-shadow:0 0 5px rgba(0,0,0,0.1);">
        <img src="https://img.icons8.com/color/48/instagram-new--v1.png" alt="Instagram" width="24" height="24" />
      </a>
      <a href="https://www.linkedin.com/company/nastindia/" target="_blank" style="background:#ffffff;padding:10px;border-radius:10px;box-shadow:0 0 5px rgba(0,0,0,0.1);">
        <img src="https://img.icons8.com/color/48/linkedin.png" alt="LinkedIn" width="24" height="24" />
      </a>
    </div>
  </div>

  <!-- Feedback Script -->
  <script>
    function showResponse(type) {
      document.getElementById('thankYou').style.display = type === 'yes' ? 'block' : 'none';
      document.getElementById('feedbackForm').style.display = type === 'no' ? 'block' : 'none';
    }

    function submitFeedback() {
      const message = document.getElementById('message').value.trim();

      if (message === '') {
        alert("Please enter your message before submitting.");
        return;
      }

      document.getElementById('feedbackForm').style.display = 'none';
      document.getElementById('thankYou').style.display = 'block';
      document.getElementById('message').value = '';
    }
  </script>
</div>
