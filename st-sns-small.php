<?php $category = get_the_category(); ?> <!-- 全カテゴリーのデータを取得 -->
<?php $category = $category[0]; ?> <!-- 先頭のカテゴリーのデータを取得 -->
<a
	href="https://twitter.com/share?ref_src=twsrc%5Etfw"
	class="twitter-share-button"
	data-text="<?php the_title(); ?> | <?php echo esc_html( $category->cat_name ); ?> | freee株式会社 &#13;"
	data-via="freee_jp"
	data-lang="ja"
	data-show-count="false">
	Tweet
</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

<div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>

<div class="fb-share-button" data-href="<?php the_permalink(); ?>" data-layout="button" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo rawurlencode( get_permalink() ); ?>&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">シェア</a></div>
