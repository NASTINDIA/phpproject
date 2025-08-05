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

<!-- includes/testimonial.php -->
<div class="testimonial-slider" style="flex:1 1 500px;max-width:1800px;background:#ffffff;border-radius:16px;overflow:hidden;position:relative;">
  <div id="slider" style="display:flex;transition:transform 0.5s ease-in-out;">
    
    <!-- Slide 1 -->
    <div class="slide" style="min-width:100%;padding:30px;box-sizing:border-box;">
      <div style="background:white;border-radius:16px;padding:40px;text-align:center;">
        <h2>Shivam Soni</h2>
        <div style="color:#666;">2025-02-12</div>
        <div style="color:#f7b500;font-size:20px;">★ ★ ★ ★ ☆</div>
        <p>Brandflu offers great social media marketing service. They create engaging content and manage campaigns well. Highly recommended!</p>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="slide" style="min-width:100%;padding:30px;box-sizing:border-box;">
      <div style="background:white;border-radius:16px;padding:40px;text-align:center;">
        <h2>Aman Patel</h2>
        <div style="color:#666;">2025-04-10</div>
        <div style="color:#f7b500;font-size:20px;">★ ★ ★ ★ ★</div>
        <p>NAST helped me land a remote job in video editing. Practical training and internship experience were amazing!</p>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="slide" style="min-width:100%;padding:30px;box-sizing:border-box;">
      <div style="background:white;border-radius:16px;padding:40px;text-align:center;">
        <h2>Neha Sharma</h2>
        <div style="color:#666;">2025-06-05</div>
        <div style="color:#f7b500;font-size:20px;">★ ★ ★ ★ ★</div>
        <p>Amazing graphic design course! Faculty support and project-based learning made it a great journey. Highly recommend NAST India.</p>
      </div>
    </div>
  </div>

  <!-- Arrows -->
  <button onclick="prevSlide()" style="position:absolute;top:50%;left:10px;transform:translateY(-50%);background:white;border:none;font-size:24px;padding:5px 10px;border-radius:50%;cursor:pointer;">❮</button>
  <button onclick="nextSlide()" style="position:absolute;top:50%;right:10px;transform:translateY(-50%);background:white;border:none;font-size:24px;padding:5px 10px;border-radius:50%;cursor:pointer;">❯</button>

  <!-- Dots -->
  <div style="text-align:center;margin-top:15px;">
    <span onclick="goToSlide(0)" class="dot" style="height:12px;width:12px;margin:0 5px;background:#bbb;border-radius:50%;display:inline-block;cursor:pointer;"></span>
    <span onclick="goToSlide(1)" class="dot" style="height:12px;width:12px;margin:0 5px;background:#bbb;border-radius:50%;display:inline-block;cursor:pointer;"></span>
    <span onclick="goToSlide(2)" class="dot" style="height:12px;width:12px;margin:0 5px;background:#bbb;border-radius:50%;display:inline-block;cursor:pointer;"></span>
  </div>
</div>

  
 <!-- Include the card -->
 <?php include("includes/card.php"); ?>
  
 <!-- Include the slider -->
 <?php include("includes/slider.php"); ?>


   <!-- Include the footer -->
 <?php include("includes/footer.php"); ?>

  


</body>
</html>
