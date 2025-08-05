<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>NAST Image Slider</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="margin: 0px; padding: 0; font-family: 'Segoe UI', sans-serif; background-color: #C4D7F3;">

  <!-- Image Slider Section -->
  <div style="width: 100%; overflow: hidden; padding: 40px 0; display: flex; justify-content: center; align-items: center; background-color: #fff;">
    <div style="width: 90%; max-width: 1200px; overflow: hidden; position: relative;">
      
      <!-- Heading -->
      <div style="text-align: center; margin-bottom: 30px;">
        <h2 style="font-size: 32px; font-weight: 700; color: #002244; margin: 0;">NAST India – Student Showcase</h2>
        <p style="font-size: 16px; color: #444; margin-top: 8px;">A glimpse of our students' creativity and achievements</p>
      </div>
      
      <!-- Image Carousel -->
      <div id="carouselTrack" style="display: flex; transition: transform 0.5s ease-in-out;">

        <?php
        // Array of image paths
        $images = [
          "images/slider1.png",
          "images/slider2.png",
          "images/slider3.png",
          "images/slider3.png",
          "images/slider2.png",
          "images/slider1.png",
          "images/slider2.png",
          "images/slider3.png",
          "https://via.placeholder.com/300x360?text=Image+9",
          "https://via.placeholder.com/300x360?text=Image+10",
          "/images/slider1.png" // for seamless loop
        ];

        foreach ($images as $img) {
          echo '<div style="flex: 0 0 auto; width: 300px; height: 360px; margin-right: 20px;">
                  <img src="' . $img . '" style="width: 100%; height: 100%; object-fit: cover;" />
                </div>';
        }
        ?>

      </div>
    </div>
  </div>

  <!-- Carousel JS -->
  <script>
    const track = document.getElementById("carouselTrack");
    const items = track.children;
    const itemCount = items.length;
    const itemWidth = items[0].offsetWidth + 20;
    let index = 0;

    function slideCarousel() {
      index++;
      track.style.transition = "transform 0.5s ease-in-out";
      track.style.transform = `translateX(-${index * itemWidth}px)`;

      if (index === itemCount - 1) {
        setTimeout(() => {
          track.style.transition = "none";
          track.style.transform = "translateX(0px)";
          index = 0;
        }, 600);
      }
    }

    setInterval(slideCarousel, 2000);
  </script>

</body>
</html>
