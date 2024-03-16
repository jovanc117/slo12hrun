<div class="sponzorji">
            <h2>Zlati sponzor:</h2>
            <img src="slike/logotip-iskraemeco.png" alt="Zlati sponzor Iskraemeko">
            <h2>Sponzorji</h2>
            <img src="slike/logotip-ajm.jpg" alt="Sponzor">
        </div>
    </main>
    <footer>
        <div>
        <a target="_blank" href="https://www.facebook.com/slovenian12hourrun">
        <img src="slike/logo-facebook-b.png" alt="Facebook">
        </a>
        <a target="_blank" href="https://www.instagram.com/slovenian12hourrun/">
        <img src="slike/logo-instagram-b.png" alt="Instagram">
        </a>
        </div>
        <h4>SLOVENIAN 12 HOUR RUN</h4>
        <p>Klemen Boštar<br>
            070 - 878 498<br>
            klemen.botar@gmail.com</p>
            &copy; | SLOVENIAN 12 HOUR RUN
    </footer>
    <script>
        window.onscroll = function() {scrollFunction()};
        function scrollFunction() {
            if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                document.getElementById("header").style.display = "none";
                document.getElementById("nav").style.backgroundColor = "#8ab900";
            } else {
                document.getElementById("header").style.display = "block";
                document.getElementById("nav").style.backgroundColor = "#8bb900be";
            }
        }
    </script>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="slick/slick.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.your-class').slick({
                setting-name: setting-value
            });
        })
    </script>
        <script>
        $('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  fade: true,
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: true,
  centerMode: true,
  focusOnSelect: true,
  arrows: false
});
$(".slide").slick({
    infinite: true,
    autoplay: true,
    autoplaySpeed: 4000,
    arrows: false
})
$('.single-item').slick();
    </script>
    <script src="js/js.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
</body>
</html>