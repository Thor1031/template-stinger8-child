<?php
	global $post;
	$args    = array(
		'posts_per_page' => 8, // 表示する記事数
	);
	$myposts = get_posts( $args ); // パラメータをもとに投稿データの配列を作成

	// ループで回す
	foreach ( $myposts as $post ) {
		setup_postdata( $post ); // 投稿データをsetup
		?>

			<!-- //パーマリンク -->
		<a href="<?php the_permalink(); ?>">
		<!-- //サムネイルがあったら表示 -->
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'index_thumbnail' ); ?>
		</a>

		<?php else : ?>
		<?php endif; ?>


		<dl>
			<dt>
				<div class="entry-category">
					<?php the_category( '｜' ); ?>
				</div><!-- /news-category -->

				<time class="entry-date" datetime="<?php the_time( 'Y.m.d' ); ?>">
					<?php the_time( 'Y.m.d' ); ?>
				</time><!-- /news-date -->
			</dt>

			<dd>
				<!-- //パーマリンク -->
				<a href="<?php the_permalink(); ?>">
					<!-- //タイトル -->
					<?php the_title(); ?>
				</a>
			</dd>
		</dl>
		<?php
	}
		wp_reset_postdata();
	?>
