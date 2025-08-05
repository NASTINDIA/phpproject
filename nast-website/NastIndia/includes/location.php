<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Location & Testimonials</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>

  <div style="padding:40px 20px;background-color:#ffffff;">
    <h2 style="text-align:center; color: #222; font-size: 36px; font-weight: 700; margin-bottom: 40px;">Our Location</h2>

    <div style="display:flex;flex-wrap:wrap;gap:30px;max-width:1200px;margin:0 auto;">

      <!-- Testimonials (Left) -->
      <div class="testimonial-slider" style="flex:1 1 500px;max-width:600px;background:#ffffff;border-radius:16px;overflow:hidden;position:relative;box-shadow:0 6px 20px rgba(0, 0, 0, 0.15);">
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

      <!-- Google Map (Right) -->
      <div style="flex:1 1 500px;border-radius:12px;overflow:hidden;box-shadow:0 6px 20px rgba(0, 0, 0, 0.15);min-height:400px;">
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3600.260898035517!2d85.1016747!3d25.6246394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed570898ae06c3%3A0xb54805f3c9921d4a!2sRadhika%20Apartment!5e0!3m2!1sen!2sin!4v1692954348590!5m2!1sen!2sin"
          allowfullscreen
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          style="width:100%;height:100%;border:none;min-height:400px;">
        </iframe>
      </div>
    </div>
  </div>

  <script>
    let currentSlide = 0;
    const slider = document.getElementById('slider');
    const dots = document.getElementsByClassName('dot');

    function updateSlider() {
      slider.style.transform = 'translateX(-' + currentSlide * 100 + '%)';
      for (let i = 0; i < dots.length; i++) {
        dots[i].style.background = i === currentSlide ? '#333' : '#bbb';
      }
    }

    function nextSlide() {
      currentSlide = (currentSlide + 1) % 3;
      updateSlider();
    }

    function prevSlide() {
      currentSlide = (currentSlide - 1 + 3) % 3;
      updateSlider();
    }

    function goToSlide(index) {
      currentSlide = index;
      updateSlider();
    }

    updateSlider();
  </script>
</body>
</html>
