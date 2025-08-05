<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Improved FAQ</title>
</head>
<body style="margin:0; font-family:'Segoe UI', sans-serif; background-color:#ffffff; color:#000000;">

  <div style="display:flex; flex-wrap:wrap; padding:40px 60px; justify-content:center; align-items:flex-start;">

    <!-- Left Side -->
    <div style="flex:1; min-width:300px; text-align:center;">
      <h1 style="font-size:2.8rem; font-weight:bold; margin-bottom:0;">
        Frequently <br><span style="color:#000000;">Asked </span>Questions
      </h1>
      <img src="https://via.placeholder.com/220x220?text=Character" alt="Character"
           style="width:220px; margin-top:20px; border-radius:10px;">
    </div>

    <!-- Right Side -->
    <div style="flex:1.5; min-width:320px; padding-left:40px;">

      <?php
      // Example FAQ data array
      $faqs = [
        [
          "question" => "Are drawing skills compulsory for doing the Animation program?",
          "answer" => "No, drawing skills are helpful but not mandatory. Our programs teach you from the basics."
        ],
        [
          "question" => "Which course I should prefer after Grade 12th?",
          "answer" => "Depending on your interest, you can choose from Animation, VFX, Game Design, or Graphic Design courses."
        ],
        [
          "question" => "What is the difference between 1 Year & 2 Year Program?",
          "answer" => "2-Year programs offer more in-depth training, advanced tools, and project work compared to 1-Year diploma programs."
        ],
        [
          "question" => "Is your faculty from Industry?",
          "answer" => "Yes, our faculty are experienced professionals from the animation and VFX industry."
        ]
      ];

      foreach ($faqs as $faq) {
        echo '
        <div style="border-bottom:1px solid #fff; padding:15px 0;">
          <div style="display:flex; justify-content:space-between; align-items:center;">
            <span style="font-size:1.1rem;">' . htmlspecialchars($faq["question"]) . '</span>
            <div class="faq-toggle" onclick="toggleFAQ(this)" style="font-size:1.5rem; cursor:pointer; transition:transform 0.3s ease;">+</div>
          </div>
          <div class="faq-answer" style="max-height:0; overflow:hidden; transition:max-height 0.3s ease; font-size:0.95rem; color:#000000; margin-top:5px;">
            ' . htmlspecialchars($faq["answer"]) . '
          </div>
        </div>';
      }
      ?>

    </div>
  </div>

  <!-- JavaScript -->
  <script>
    function toggleFAQ(icon) {
      const answer = icon.parentElement.nextElementSibling;
      const isOpen = answer.style.maxHeight && answer.style.maxHeight !== "0px";

      if (isOpen) {
        answer.style.maxHeight = "0";
        icon.innerText = "+";
        icon.style.transform = "rotate(0deg)";
      } else {
        answer.style.maxHeight = answer.scrollHeight + "px";
        icon.innerText = "×";
        icon.style.transform = "rotate(45deg)";
      }
    }
  </script>

</body>
</html>
