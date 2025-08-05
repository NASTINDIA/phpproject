<!-- carousel.php -->
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>NAST Image Slider</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="margin: 0px; padding: 0; font-family: 'Segoe UI', sans-serif; background-color: #C4D7F3;">

<div class="carousel">
  <div style="margin-left: 0px; padding: 0px 0px;">
    <div class="container-fluid px-0">
      <div id="hospitalCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="2000">
            <img src="images/carousalimage.png" class="d-block w-100" style="height:600px; object-fit: cover; border-radius: 10px;" alt="Slide 1">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="images/slide2.png" class="d-block w-100" style="height:600px; object-fit: fill; border-radius: 10px;" alt="Slide 2">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="images/slide3.png" class="d-block w-100" style="height:600px; object-fit: fill; border-radius: 10px;" alt="Slide 3">
          </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#hospitalCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#hospitalCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
        </button>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Carousel Settings -->
<script>
  const myCarousel = document.querySelector('#hospitalCarousel');
  const carousel = new bootstrap.Carousel(myCarousel, {
    interval: 6000,
    ride: 'carousel',
    pause: false,
    wrap: true
  });
</script>

</body>
</html>
