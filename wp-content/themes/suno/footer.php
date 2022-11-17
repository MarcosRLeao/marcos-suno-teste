<?php

/**
 * Theme footer partial.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MyApp
 */

?>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<script type="text/javascript">
		function validate() {
			var x = document.getElementById("menuMobi");
			if (x.style.display === "flex") {
				x.style.display = "none";
			} else {
				x.style.display = "flex";
			}
		}
	</script> 
	
<?php wp_footer(); ?>
</body>

</html>