<?php get_header(); ?>

<div id="content" class="clearfix">
	<div id="contentInner">
		<div class="st-main">

			<!-- Slider -->
			<ul class="main-slider">
				<li href="#">
					<img class="slider-img pc" src="<?php echo get_stylesheet_directory_uri(); ?>/images/img-slide-01.jpg" alt="slide01">
					<img class="slider-img sp" src="<?php echo get_stylesheet_directory_uri(); ?>/images/img-slide-01-sp.jpg" alt="slide01-sp">
				</li>
				<li href="#">
					<img class="slider-img pc" src="<?php echo get_stylesheet_directory_uri(); ?>/images/img-slide-02.jpg" alt="slide02">
					<img class="slider-img sp" src="<?php echo get_stylesheet_directory_uri(); ?>/images/img-slide-02-sp.jpg" alt="slide02-sp">
				</li>
			</ul><!-- /Slider-->


			<article>
				<div class="st-aside">
					<?php get_template_part( 'itiran' ); ?>
					<?php get_template_part( 'st-pagenavi' ); //ページナビ読み込み ?>
				</div>

					<?php get_template_part( 'sns-top' ); //ソーシャルボタン読み込み ?>

			</article>
		</div>
	</div>
	<!-- /#contentInner -->
	<?php get_sidebar(); ?>
</div>
<!-- /#content -->
<?php get_footer(); ?>
