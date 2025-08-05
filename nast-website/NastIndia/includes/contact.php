<?php
$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $first_name = $_POST['first_name'] ?? '';
    $last_name = $_POST['last_name'] ?? '';
    $mobile_number = $_POST['mobile_number'] ?? '';
    $course = $_POST['course'] ?? '';
    $email = $_POST['email'] ?? '';
    $city = $_POST['city'] ?? '';

    // Optional: Save to DB or send email here
    $message = "Thank you $first_name, your response has been submitted!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Us - NAST</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div style="padding:40px 20px;background-color:#ffffff;">
<div style="padding: 5px 20px;">
  <h1 style="text-align: center; color: #222; font-size: 36px; font-weight: 700;">Contact Us</h1>
</div>

<div style="display: flex; flex-wrap: wrap; justify-content: center; padding: 40px;">

  <!-- Contact Form -->
  <div style="flex: 1; min-width: 350px; max-width: 520px; margin-right: 40px; padding: 40px; background: #fff; border-radius: 10px; box-shadow: 0 5px 25px rgba(0,0,0,0.05);">
    <form method="POST" action="">
      <div style="display: flex; gap: 22px; margin-bottom: 16px;">
        <div style="flex: 1;">
          <label>First Name*</label>
          <input type="text" name="first_name" required style="width: 100%; padding: 9px; border-radius: 50px;">
        </div>
        <div style="flex: 1;">
          <label>Last Name*</label>
          <input type="text" name="last_name" required style="width: 100%; padding: 9px; border-radius: 50px;">
        </div>
      </div>

      <div style="display: flex; gap: 22px; margin-bottom: 16px;">
        <div style="flex: 1;">
          <label>Mobile*</label>
          <input type="text" name="mobile_number" required style="width: 100%; padding: 9px; border-radius: 50px;">
        </div>
        <div style="flex: 1;">
          <label>Select Course*</label>
          <input type="text" name="course" required style="width: 100%; padding: 9px; border-radius: 50px;">
        </div>
      </div>

      <div style="display: flex; gap: 22px; margin-bottom: 16px;">
        <div style="flex: 1;">
          <label>Email ID*</label>
          <input type="email" name="email" required style="width: 100%; padding: 9px; border-radius: 50px;">
        </div>
        <div style="flex: 1;">
          <label>City*</label>
          <input type="text" name="city" required style="width: 100%; padding: 9px; border-radius: 50px;">
        </div>
      </div>

      <div style="text-align: center; margin-top: 20px;">
        <button type="submit" style="background: #ff6b00; color: white; border: none; padding: 10px 30px; font-size: 15px; border-radius: 40px; font-weight: bold; cursor: pointer;">
          Submit
        </button>
      </div>

      <?php if ($message): ?>
        <div style="margin-top: 16px; color: green; text-align: center;">
          <p><?php echo htmlspecialchars($message); ?></p>
        </div>
      <?php endif; ?>
    </form>
  </div>

  <!-- Contact Info -->
  <div style="flex: 1; min-width: 300px; max-width: 450px; padding: 40px 20px;">

    <div style="display: flex; background: #fff; padding: 16px; margin-bottom: 16px; border-radius: 10px; box-shadow: 0 3px 8px rgba(0,0,0,0.04);">
      <div style="margin-right: 12px;">📞</div>
      <div>
        <strong>Phone</strong><br>
        <span>+91 89872 84489</span>
      </div>
    </div>

    <div style="display: flex; background: #fff; padding: 16px; margin-bottom: 16px; border-radius: 10px; box-shadow: 0 3px 8px rgba(0,0,0,0.04);">
      <div style="margin-right: 12px;">📧</div>
      <div>
        <strong>Email</strong><br>
        <span>nastindia@gmail.com</span>
      </div>
    </div>

    <div style="display: flex; background: #fff; padding: 16px; border-radius: 10px; box-shadow: 0 3px 8px rgba(0,0,0,0.04);">
      <div style="margin-right: 12px;">📍</div>
      <div>
        <strong>Address</strong><br>
        <span>301, 3rd Floor, Radhika Apartment, Indrapuri Rd No.10, Keshri Nagar, Patna – 800024</span>
      </div>
    </div>

  </div>
</div>
</div>
</body>
</html>
