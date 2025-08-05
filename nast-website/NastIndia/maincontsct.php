<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>NAST India</title>
  <link rel="stylesheet" href="css/navbar.css">
</head>
<body>

  <!-- Include the Navbar -->
  <?php include("includes/navbar.php"); ?>

  <!-- Main Page Content -->


<!-- Contact Section -->
<div>
  <div style="background-color: #ffffff; padding: 40px 0;">

    <!-- Container -->
    <div style="
      display: flex;
      justify-content: center;
      align-items: stretch;
      flex-wrap: wrap;
      max-width: 1100px;
      margin: 0 auto;
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
      border-radius: 12px;
      overflow: hidden;
      background-color: #ffffff;
    ">

      <!-- Left Side Image -->
      <div style="flex: 1; display: flex; justify-content: center; align-items: center;">
        <img src="images/contactimage.png" alt="Contact" style="width: 100%; max-width: 480px; height: auto; object-fit: contain; padding: 20px;">
      </div>

      <!-- Right Side Form -->
      <div style="
        flex: 1;
        background-color: #ffffff;
        padding: 40px 30px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        color: #EC2A28;
      ">
        <h2 style="font-size: 28px; margin-bottom: 30px; text-align: center; font-weight: bold;">Contact Us</h2>

        <!-- PHP Form -->
        <form action="contact_submit.php" method="POST">

          <div style="margin-bottom: 15px;">
            <input type="text" name="first_name" placeholder="First Name*" required
                   style="width: 80%; padding: 12px 20px; border: 1px solid black; border-radius: 30px; font-size: 15px;">
          </div>

          <div style="margin-bottom: 15px;">
            <input type="text" name="last_name" placeholder="Last Name*" required
                   style="width: 80%; padding: 12px 20px; border: 1px solid black; border-radius: 30px; font-size: 15px;">
          </div>

          <div style="margin-bottom: 15px;">
            <input type="text" name="mobile_number" placeholder="Mobile Number*" required
                   style="width: 80%; padding: 12px 20px; border: 1px solid black; border-radius: 30px; font-size: 15px;">
          </div>

          <div style="margin-bottom: 15px;">
            <input type="text" name="course" placeholder="Select Course*" required
                   style="width: 80%; padding: 12px 20px; border: 1px solid black; border-radius: 30px; font-size: 15px;">
          </div>

          <div style="margin-bottom: 15px;">
            <input type="email" name="email" placeholder="Email ID*" required
                   style="width: 80%; padding: 12px 20px; border: 1px solid black; border-radius: 30px; font-size: 15px;">
          </div>

          <div style="margin-bottom: 20px;">
            <input type="text" name="city" placeholder="City*" required
                   style="width: 80%; padding: 12px 20px; border: 1px solid black; border-radius: 30px; font-size: 15px;">
          </div>

          <div style="text-align: center;">
            <button type="submit"
                    style="background-color: #EC2A28; color: #fff; border: none; padding: 12px 40px; font-size: 16px; border-radius: 30px; font-weight: bold; cursor: pointer;">
              Submit
            </button>
          </div>

          <!-- Optional success message -->
          <?php if (isset($_GET['message'])): ?>
            <div style="margin-top: 20px; color: black; text-align: center;">
              <p><?php echo htmlspecialchars($_GET['message']); ?></p>
            </div>
          <?php endif; ?>

        </form>
      </div>
    </div>
  </div>
</div>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $first = $_POST["first_name"];
  $last = $_POST["last_name"];
  $mobile = $_POST["mobile_number"];
  $course = $_POST["course"];
  $email = $_POST["email"];
  $city = $_POST["city"];

  // Example: Save to database or send an email

  // Redirect with success message
  header("Location: contact.php?message=Thank you for contacting us!");
  exit();
}
?>

  

 <!-- Include the card -->
 <?php include("includes/card.php"); ?>
  
  <!-- Include the location -->
  <?php include("includes/location.php"); ?>

   <!-- Include the footer -->
 <?php include("includes/footer.php"); ?>

  <script src="js/navbar.js" defer></script>

<?php
  $page = $_GET['page'] ?? 'home';
?>
<ul>
  <li><a href="?page=whynast">Why NAST India</a></li>
</ul>

<div class="content">
  <?php
    if ($page == "whynast") {
      include("includes/whynast.php");
    } else {
      include("includes/home.php");
    }
  ?>
</div>


</body>
</html>
