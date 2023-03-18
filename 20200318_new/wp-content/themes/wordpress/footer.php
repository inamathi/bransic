  </div><!-- container -->
</section><!-- main-area -->

<?php if ( !is_home() || !is_front_page() ) : ?>
<footer class="print">
  <p>©Copyright<?php echo date("Y"); ?> bransic.All Rights Reserved.</p>
</footer>
<?php endif; ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/common.js?ver='.date('YmdGis', filemtime(get_template_directory().'/js/common.js')); ?>"></script>
<!-- swiper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>
<?php if( !is_page(102) && get_post_type() != 'artist'): ?>
<script>
  var mySwiper = new Swiper ('.swiper-container', {
    // ここからオプション
	effect: "slide",
	speed:700,
	spaceBetween:0,
	slidesPerView:2,
  slidesPerGroup:2,
	loop: true,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  })
 </script>
<?php else: ?>
 <script>
//スライダー
var slider = new Swiper('.slider', {
  effect: "slide",
  speed:700,
  spaceBetween:0,
  slidesPerView:1,
  slidesPerGroup:1,
  loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    scrollbar: {
      el: '.swiper-scrollbar',
    }
});
 </script>
<?php endif; ?>
<!-- AOS -->
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<?php if (1): ?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9PhNciO72TxmSfIoNlXxRSqfMU-p8_IQ&callback=initMap2"></script>
<?php else: ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/map.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCeeJ8a31qAI9ufFlI4_5KKe0MVc5KEwRI&callback=initMap"></script>
<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>