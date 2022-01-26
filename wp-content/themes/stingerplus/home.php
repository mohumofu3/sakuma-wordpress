<?php get_header(); ?>

<div id="content" class="clearfix">
	<div id="contentInner">
		<main <?php st_text_copyck(); ?>>
			<article>
				<div class="home-post">
					<!-- 授業 -->
					<?php if (have_posts()) : ?>
						<?php while (have_posts()) : ?>
							<?php the_post(); ?>
							<h2><?php the_title(); ?></h2>

							<div class="post-preview">
								<a href="<?php the_permalink(); ?>">
									<h3 class="post-subtitle"><?php the_excerpt(); ?></h3>
								</a>

								<p class="post-meta">
									Posted by
									<?php the_author(); ?>
									<?php the_time(get_option('date_format')); ?>
								</p>
							</div>
							<!-- Divider-->
							<hr class="my-4" />
						<?php endwhile; ?>
						<!-- Pager-->
						<div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
					<?php else : ?>
						<p>記事がありません</p>
					<?php endif; ?>

					<?php if (is_paged()) : //次ページは表示しない 
					?>
					<?php else : ?>

						<?php if (trim($GLOBALS["stdata9"]) !== '') { //固定記事挿入していない場合
						} else { ?>
							<div class="nowhits"><?php get_template_part('popular-thumbnail'); //任意のエントリ 
																		?></div>

							<?php if (is_front_page() && is_active_sidebar(12)) { ?>
								<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(12)) : else : //トップ上部のウィジェット 
								?>
								<?php endif; ?>
							<?php } ?>
							<?php get_template_part('news-st'); //お知らせ 
							?>
						<?php } ?>

						<?php get_template_part('st-topin'); //固定記事挿入 
						?>

						<?php //任意のエントリ
						if ((is_home() || is_front_page()) && (isset($GLOBALS['stdata59']) && $GLOBALS['stdata59'] === 'yes')) { //トップ記事の場合 
						?>
							<div style="padding-top:20px;">
								<?php if (isset($GLOBALS['stdata5']) && $GLOBALS['stdata5'] === 'yes') {
									get_template_part('popular-thumbnail-off');
								} else {
									get_template_part('popular-thumbnail-on');
								} ?>
							</div>
						<?php }  //任意のエントリここまで 
						?>

						<?php if (is_front_page() && is_active_sidebar(13)) { ?>
							<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(13)) : else : //トップ下部のウィジェット 
							?>
							<?php endif; ?>
						<?php } ?>

				</div>

			<?php endif; ?>

			<aside>

				<?php //記事一覧
				if ($GLOBALS["stdata44"]  === '') { //新着一覧非表示で無い場合
					if (trim($GLOBALS["stdata9"]) !== '' && !is_paged()) { //固定記事の挿入の場合
						if (trim($GLOBALS["stdata66"]) !== '') { //新着記事の文字を挿入
							$new_entryname = esc_html($GLOBALS["stdata66"]);
						} else {
							$new_entryname = 'NEW ENTRY';
						}
				?>
						<p class="n-entry-t"><span class="n-entry"><?php echo $new_entryname; ?></span></p>
					<?php } ?>

					<?php get_template_part('itiran'); ?>
					<?php get_template_part('st-pagenavi'); //ページナビ読み込み 
					?>
				<?php } ?>

			</aside>

			<?php get_template_part('sns-top'); //ソーシャルボタン読み込み 
			?>
			<?php if (isset($GLOBALS['stplus']) && $GLOBALS['stplus'] === 'yes') {
				get_template_part('st-rank'); //ランキング 
			} ?>


			</article>
		</main>
	</div>
	<!-- /#contentInner -->
	<?php get_sidebar(); ?>
</div>
<!-- /#content -->
<?php get_footer(); ?>