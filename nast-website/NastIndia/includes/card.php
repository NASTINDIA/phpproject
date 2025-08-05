<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Creative Digital Agency</title>
</head>
<body style="margin: 0; font-family: Arial, sans-serif; background-color: #f9f9f9;">

  <h1 style="text-align: center; font-size: 36px; color: #0f0f0f; font-weight: 800; margin-top:40px;">
    We are Strategic Creative Digital Agency Service
  </h1>

  <div style="display: flex; justify-content: center; flex-wrap: wrap; gap: 24px; margin-top: 50px;">

    <!-- Card Styles -->
    <style>
      .card-link {
        text-decoration: none;
        color: inherit;
      }

      .card {
        background-color: #fff;
        border-radius: 16px;
        width: 320px;
        box-shadow: 0 6px 24px rgba(0, 0, 0, 0.06);
        display: flex;
        flex-direction: column;
        overflow: hidden;
        transition: transform 0.3s ease;
      }

      .card:hover {
        transform: translateY(-5px);
      }

      .card img {
        width: 100%;
        height: 400px;
        object-fit: cover;
      }

      .card-content {
        padding: 20px;
      }

      .card-content h3 {
        margin: 0 0 10px 0;
        font-size: 20px;
        font-weight: 700;
        color: #1a1a1a;
      }

      .card-content p {
        color: #555;
        line-height: 1.6;
        font-size: 15px;
      }
    </style>

    <!-- DesignXpert -->
    <a href="designxpert.php" class="card-link">
      <div class="card">
        <img src="images/graphicsdesigner.jpg" alt="DesignXpert">
        <div class="card-content">
          </div>
      </div>
    </a>

    <!-- EditXpert -->
    <a href="EditXpert.php" class="card-link">
      <div class="card">
        <img src="images/videoeditor.jpg" alt="EditXpert">
        <div class="card-content">
           </div>
      </div>
    </a>

    <!-- MasterXpert -->
    <a href="MasterXpert.php" class="card-link">
      <div class="card">
        <img src="images/digitalmarketing.jpg" alt="MasterXpert">
        <div class="card-content">
          </div>
      </div>
    </a>

  </div>

  <!-- CTA Button -->
  <div style="text-align: center; margin-top: 40px; margin-bottom: 40px;">
    <a href="MasterXpert.php" style="text-decoration: none;">
      <button style="padding: 14px 24px; background-color: #ff7b00; color: #fff; border: none; border-radius: 8px; font-size: 16px; cursor: pointer; transition: background-color 0.3s ease;"
              onmouseover="this.style.backgroundColor='#e96e00'"
              onmouseout="this.style.backgroundColor='#ff7b00'">
        All Our Services
      </button>
    </a>
  </div>

</body>
</html>
