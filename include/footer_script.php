<link rel="stylesheet" href="https://raw.github.com/username/project/master/style.css"/>
<script src="https://raw.github.com/username/project/master/script.js"></script>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<!-- disable body scroll which navbar is in active -->

<!--//-->
<script>
	$(function () {
		$('.navbar-toggler').click(function () {
			$('body').toggleClass('noscroll');
		})
	});
</script>
<!--/scroll-down-JS-->
<!--pop-up-box-->

<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script>
	$(document).ready(function () {
		$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',

			fixedContentPos: false,
			fixedBgPos: true,

			overflowY: 'auto',

			closeBtnInside: true,
			preloader: false,

			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});

		$('.popup-with-move-anim').magnificPopup({
			type: 'inline',

			fixedContentPos: false,
			fixedBgPos: true,

			overflowY: 'auto',

			closeBtnInside: true,
			preloader: false,

			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-slide-bottom'
		});
	});
</script>

<!--//pop-up-box-->
<!-- for blog carousel slider -->
<script src="assets/js/owl.carousel1.js"></script>
<script>
	$(document).ready(function () {
		$("#owl-demo2").owlCarousel({
			items: 1,
			lazyLoad: true,
			autoPlay: true,
			navigation: false,
			navigationText: ["", ""],
			rewindNav: false,
			scrollPerPage: true,
			pagination: false,
			paginationNumbers: false,

		})
	});
	$(document).ready(function () {
		$("#owl-demo1").owlCarousel({
			loop: true,
			margin: 20,
			responsiveClass: true,
			responsive: {
				0: {
					items: 1,
					nav: true
				},
				600: {
					items: 2,
					nav: false
				},
				1000: {
					items: 3,
					nav: true,
					loop: false
				}
			}
		})
	})
</script>

<script src="assets/js/bootstrap.min.js"></script>