<?php
/**
 * トップページ用のSNSボタン
 */

		$url_encode   = urlencode( get_home_url() );
		$title_encode = urlencode( get_bloginfo( 'name' ) );

if ( function_exists( 'scc_get_share_twitter' ) ) {
	$plug = 'smanone';
} else {
	$plug = '';
}
?>


<div class="sns">
	<ul class="clearfix">
		<!-- Youtube関連 -->
		<!-- 公式チャンネルへのボタン -->
		<li class="youtube-official">
			<a
				target="_blank"
				href="https://www.youtube.com/user/freeejp"> <!-- hrefに公式ページのURLを -->
				<i class="fab fa-youtube"></i>
				<span class="snstext <?php //echo $plug; ?>" >Youtube</span>
			</a>
		</li>

		<!-- Twitter関連 -->
		<!-- 公式ページへのボタン -->
		<li class="twitter-official">
			<a
				target="_blank"
				href="https://twitter.com/freee_jp"> <!-- hrefに公式ページのURLを -->
				<i class="fab fa-twitter"></i>
				<span class="snstext <?php //echo $plug; ?>" >Twitter</span>
			</a>
		</li>

		<!--ツイートボタン-->
		<li class="twitter">
			<a
				onclick="window.open('//twitter.com/intent/tweet?url=<?php echo $url_encode; ?>&text=<?php echo $title_encode; ?>&tw_p=tweetbutton', '', 'width=500,height=450'); return false;">
				<i class="fab fa-twitter"></i>
				<span class="snstext <?php echo $plug; ?>" >Twitter</span>

				<?php
				if ( function_exists( 'get_scc_twitter' ) ) {
					if ( scc_get_share_twitter( array( 'post_id' => 'home' ) ) !== 0 ) {
						echo '<span class="snscount">' . scc_get_share_twitter( array( 'post_id' => 'home' ) ) . '</span>';
					} else {
						echo '<span class="snstext pcnone" >Twitter</span>';
					}
				}
				?>
			</a>
		</li>
		<!-- /Twitter関連　ここまで -->

		<!--Facebook関連-->
		<!-- 公式ページへのボタン -->
		<li class="facebook-official">
			<a
				target="_blank"
				href="https://www.facebook.com/freee.co.jp"> <!-- hrefに公式ページのURLを -->
				<i class="fab fa-facebook-f"></i>
				<span class="snstext <?php //echo $plug; ?>" >Facebook</span>
			</a>
		</li>

		<!--Facebookボタン-->
		<li class="facebook">
			<a target="_blank" href="//www.facebook.com/sharer.php?src=bm&u=<?php echo $url_encode; ?>&t=<?php echo $title_encode; ?>">
				<i class="fab fa-facebook-f"></i>
				<span class="snstext <?php echo $plug; ?>" >Facebook</span>
				<?php
				if ( function_exists( 'get_scc_facebook' ) ) {
					if ( scc_get_share_facebook( array( 'post_id' => 'home' ) ) !== 0 ) {
						echo '<span class="snscount">' . scc_get_share_facebook( array( 'post_id' => 'home' ) ) . '</span>';
					} else {
						echo '<span class="snstext pcnone" >Facebook</span>';
					}
				}
				?>
			</a>
		</li>

		<!--Google+1ボタン-->
		<li class="googleplus">
		<a target="_blank" href="https://plus.google.com/share?url=<?php echo $url_encode; ?>" ><i class="fab fa-google-plus"></i><span class="snstext <?php echo $plug; ?>" >Google+</span>
		<?php
		if ( function_exists( 'get_scc_gplus' ) ) {
			if ( scc_get_share_gplus( array( 'post_id' => 'home' ) ) !== 0 ) {
				echo '<span class="snscount">' . scc_get_share_gplus( array( 'post_id' => 'home' ) ) . '</span>';
			} else {
				echo '<span class="snstext pcnone" >Google+</span>';
			}
		}
		?>
		</a>
		</li>

		<!--ポケットボタン-->
		<li class="pocket">
			<a onclick="window.open('//getpocket.com/edit?url=<?php echo $url_encode; ?>&title=<?php echo $title_encode; ?>', '', 'width=500,height=350'); return false;" >
				<i class="fab fa-get-pocket"></i>
				<span class="snstext <?php echo $plug; ?>" >Pocket</span>
				<?php
				if ( function_exists( 'get_scc_pocket' ) ) {
					if ( scc_get_share_pocket( array( 'post_id' => 'home' ) ) !== 0 ) {
						echo '<span class="snscount">' . scc_get_share_pocket( array( 'post_id' => 'home' ) ) . '</span>';
					} else {
						echo '<span class="snstext pcnone" >Pocket</span>';
					}
				}
				?>
			</a>
		</li>

		<!--はてブボタン-->
		<li class="hatebu">
			<a href="//b.hatena.ne.jp/entry/<?php home_url(); ?>" class="hatena-bookmark-button" data-hatena-bookmark-layout="simple" title="<?php bloginfo( 'name' ); ?>">
				<span style="font-weight:bold" class="fa-hatena">B!</span>
				<span class="snstext <?php echo $plug; ?>" >はてブ</span>
				<?php
				if ( function_exists( 'get_scc_hatebu' ) ) {
					if ( scc_get_share_hatebu( array( 'post_id' => 'home' ) ) !== 0 ) {
						echo '<span class="snscount">' . scc_get_share_hatebu( array( 'post_id' => 'home' ) ) . '</span>';
					} else {
						echo '<span class="snstext pcnone" >はてブ</span>';
					}
				}
				?>
			</a><script type="text/javascript" src="//b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>
		</li>

		<!--LINEボタン-->
		<li class="line">
			<a target="_blank" href="//line.me/R/msg/text/?<?php echo $title_encode . '%0A' . $url_encode; ?>"><i class="fa fa-comment" aria-hidden="true"></i><span class="snstext" >LINE</span></a>
		</li>

	</ul>
</div>
