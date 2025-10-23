<script>
    document.addEventListener("DOMContentLoaded", () => {
      const accordionHeaders = document.querySelectorAll(".card-header");

      accordionHeaders.forEach((header) => {
        header.addEventListener("click", () => {
          const isActive = header.classList.contains("active");
          const collapseSection = header.nextElementSibling;

          // Close all other accordion sections
          document.querySelectorAll(".card-header").forEach((otherHeader) => {
            if (otherHeader !== header) {
              otherHeader.classList.remove("active");
              otherHeader.setAttribute("aria-expanded", "false");
              otherHeader.nextElementSibling.classList.remove("show");
            }
          });

          // Toggle the clicked accordion section
          if (!isActive) {
            header.setAttribute("aria-expanded", true);
            header.classList.add("active");
            collapseSection.classList.add("show");
          }
        });

        // Optional: Add keyboard support
        header.addEventListener("keydown", (event) => {
          if (event.key === "Enter" || event.key === " ") {
            event.preventDefault();
            header.click();
          }
        });
      });

      // Ensure the first accordion section is open by default
      const firstHeader = accordionHeaders[0];
      if (firstHeader) {
        firstHeader.classList.add("active");
        firstHeader.setAttribute("aria-expanded", "true");
        firstHeader.nextElementSibling.classList.add("show");
      }
    });
  </script>
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/bootstrap.min.js.map"></script>
  <script src="assets/js/jquery.sticky.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/custom.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/js/fancybox.js"></script>
  <script src="assets/js/slick.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function() {
      ga.q.push(arguments)
    };
    ga.q = [];
    ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto');
    ga('set', 'anonymizeIp', true);
    ga('set', 'transport', 'beacon');
    ga('send', 'pageview')
  </script>
  <!-- <script src="https://www.google-analytics.com/analytics.js" async></script> -->