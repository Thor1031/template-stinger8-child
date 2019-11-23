</div><!-- /contentw -->
<footer>
<div id="footer">
<div id="footer-in">
	<!-- フッターメニュー コンテナ -->
	<div id="footer-menucontainer">
		<dl>
			<dt>MenuHead1</dt>
			<dd>
				<?php // フッターメニュー
				$defaults = array(
					'theme_location'  => 'footer-l-menu',
					'container'       => 'div',
					'container_class' => 'footermenubox clearfix ',
					'menu_class'      => 'footermenust',
					'depth'           => 1,
				);
				wp_nav_menu( $defaults );
				?>
			</dd>
		</dl>
		<dl>
			<dt>MenuHead1</dt>
			<dd>
				<?php // フッターメニュー
				$defaults = array(
					'theme_location'  => 'footer-c-menu',
					'container'       => 'div',
					'container_class' => 'footermenubox clearfix ',
					'menu_class'      => 'footermenust',
					'depth'           => 1,
				);
				wp_nav_menu( $defaults );
				?>
			</dd>
		</dl>
		<dl>
			<dt>MenuHead1</dt>
			<dd>
				<?php // フッターメニュー
				$defaults = array(
					'theme_location'  => 'footer-r-menu',
					'container'       => 'div',
					'container_class' => 'footermenubox clearfix ',
					'menu_class'      => 'footermenust',
					'depth'           => 1,
				);
				wp_nav_menu( $defaults );
				?>
			</dd>
		</dl>
	</div>
	<!-- /フッターメニュー コンテナ ここまで -->

	<!-- フッターボトム　コンテナ -->
	<div id="footer-bottomcontainer">

		<div class="footer-wbox clearfix">
			<div class="footer-c">
				<!-- フッターのメインコンテンツ -->
				<p class="footerlogo">
					<!-- ロゴ又はブログ名 -->
					<?php if ( !is_home() || !is_front_page() ) { ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '' ); ?>" alt="ロゴ">
					<?php } ?>
						<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>
					<?php if ( !is_home() || !is_front_page() ) { ?>
						</a>
					<?php } ?>
				</p>

				<p>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'description' ); ?></a>
				</p>
			</div>
		</div>

		<p class="copy">Copyright&copy;
			<?php bloginfo( 'name' ); ?>
			,
			<?php echo date( 'Y' ); ?>
			All Rights Reserved.
		</p>
	</div>
	<!-- /フッターボトム　コンテナ ここまで-->
</div>
</div>
</footer>
</div>
<!-- /#wrapperin -->
</div>
<!-- /#wrapper -->
</div><!-- /#st-ami -->
<!-- ページトップへ戻る -->
	<div id="page-top"><a href="#wrapper" class="fa fa-angle-up"></a></div>
<!-- ページトップへ戻る　終わり -->
<!-- <script type="text/javascript">
	$(function() {
		$(".main-slider").slick({
			dots: true,
			infinite: true,
			speed: 300,
			slidesToShow: 1,
			adaptiveHeight: true,
			autoplay: true,
			autoplaySpeed: 3000,
			arrows: false,
		});
	});
</script> -->

<?php wp_footer(); ?>
</body></html>
