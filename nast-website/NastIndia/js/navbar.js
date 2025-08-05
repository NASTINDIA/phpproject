document.addEventListener("DOMContentLoaded", function () {
  const toggle = document.getElementById("menu-toggle");
  const navLinks = document.getElementById("nav-links");

  toggle.addEventListener("click", () => {
    navLinks.classList.toggle("show");
  });

  const dropdownToggles = document.querySelectorAll(".dropdown-toggle");
  dropdownToggles.forEach(toggle => {
    toggle.addEventListener("click", (e) => {
      if (window.innerWidth <= 768) {
        e.preventDefault();
        const dropdownMenu = toggle.nextElementSibling;
        dropdownMenu.style.display = dropdownMenu.style.display === "block" ? "none" : "block";
      }
    });
  });
});
