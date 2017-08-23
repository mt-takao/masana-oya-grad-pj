<?php
$onepress_news_id        = get_theme_mod( 'onepress_news_id', esc_html__('news', 'onepress') );
$onepress_news_disable   = get_theme_mod( 'onepress_news_disable' ) == 1 ? true : false;
$onepress_news_title     = get_theme_mod( 'onepress_news_title', esc_html__('Latest News', 'onepress' ));
$onepress_news_subtitle  = get_theme_mod( 'onepress_news_subtitle', esc_html__('Section subtitle', 'onepress' ));
$onepress_news_number    = get_theme_mod( 'onepress_news_number', '3' );
$onepress_news_more_link = get_theme_mod( 'onepress_news_more_link', '#' );
$onepress_news_more_text = get_theme_mod( 'onepress_news_more_text', esc_html__('Read Our Blog', 'onepress' ));
if ( onepress_is_selective_refresh() ) {
    $onepress_news_disable = false;
}
?>
<?php if ( ! $onepress_news_disable  ) :

$desc = get_theme_mod( 'onepress_news_desc' );
?>
<?php if ( ! onepress_is_selective_refresh() ){ ?>
<section id="<?php if ( $onepress_news_id != '' ) echo $onepress_news_id; ?>" <?php do_action( 'onepress_section_atts', 'news' ); ?> class="<?php echo esc_attr( apply_filters( 'onepress_section_class', 'section-news section-padding onepage-section', 'news' ) ); ?>">
<?php } ?>
    <?php do_action( 'onepress_section_before_inner', 'news' ); ?>
	<div class="container">
		<?php if ( $onepress_news_title ||  $onepress_news_subtitle ||  $desc ) { ?>
		<div class="section-title-area">
			<?php if ( $onepress_news_subtitle != '' ) //echo '<h5 class="section-subtitle">' . esc_html( $onepress_news_subtitle ) . '</h5>'; ?>
			<?php if ( $onepress_news_title != '' ) //echo '<h2 class="section-title">' . esc_html( $onepress_news_title ) . '</h2>'; ?>
            <?php if ( $desc ) {
                //echo '<div class="section-desc">' . apply_filters( 'onepress_the_content', wp_kses_post( $desc ) ) . '</div>';
			} ?>
			<h5 class="section-subtitle">Information</h5>
			<h2 class="section-title">真那さん卒業企画へのカンパのお願い</h2>  
			<div class="section-desc">
				<p style="text-align: center">私たち大矢真那さん卒業企画では、9年間SKE48を愛し支え続けてきてくれた真那さんへ、<br />
				精一杯の愛と感謝の気持ちを込めて、卒業までの各種イベントでの企画を準備しております。<br />
				また、企画の趣旨にご賛同いただける皆様へ、企画のためのカンパをお願いしております。<br />
				ご協力いただけます方は、次の詳細と注意点をご確認のうえ、受付口座までお振込みいただきますようお願いいたします。</p>
			</div>
        </div>
		<?php } ?>
		<div class="section-content">
			<div class="row">
				<div class="col-sm-12">
					<div class="blog-entry wow slideInUp">

					<article id="post-1" class="list-article clearfix post-1 post type-post status-publish format-standard hentry category-1">

					<table class="table">
						<tbody>
							<tr>
								<td class="table-info">カンパ金額</td>
								<td>1,000円/1口（口数は任意）</td>
							</tr>
							<tr>
								<td class="table-info">受付期間</td>
								<td>～9月15日（木）</td>
							</tr>
							<tr>
								<td class="table-info">受付口座</td>
								<td><p>【ゆうちょ銀行からお振込の場合】<br>
								記号：１２０１０<br>
								番号：１５３２３００１</p>
								<p>【他行からのお振込の場合】<br>
								店名：二〇八（ニゼロハチ）<br>
								種目：普通<br>
								口座番号：１５３２３００<br>
								名義：大矢真那後援会（オオヤマサナコウエンカイ）</p>
							</td>
						</tr>
					</tbody>
				</table>

				<div>
					<p>※注意事項</p>
					<ul>
						<li>ゆうちょ銀行以外からお振込いただく場合、振込手数料はお振込みいただく方ご自身でご負担ください。</li>
						<li>この企画へのカンパは卒業コンサートや卒業公演の当選を保証するものではありません。</li>
						<li>企画の内容についてはサプライズで行うため、当日までお伝えできません。</li>
						<li>卒業コンサートの内容や卒業までのスケジュール等に関しての質問にはお答えできません。</li>
						<li>この企画についてメンバー、SKE48運営に問合わせることは絶対にしないでください。</li>
					</ul>


				</div>
	</div>

</article><!-- #post-## -->


						<?php
						$query = new WP_Query(
							array(
								'posts_per_page' => $onepress_news_number,
								'suppress_filters' => 0,
							)
						);
						?>
						<?php if ( $query->have_posts() ) : ?>

							<?php /* Start the Loop */ ?>
							<?php while ( $query->have_posts() ) : $query->the_post(); ?>
								<?php
									/*
									 * Include the Post-Format-specific template for the content.
									 * If you want to override this in a child theme, then include a file
									 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
									 */
									//get_template_part( 'template-parts/content', 'list' );
								?>

							<?php endwhile; ?>
						<?php else : ?>
							<?php get_template_part( 'template-parts/content', 'none' ); ?>
						<?php endif; ?>

						<?php if ( $onepress_news_more_link != '' ) { ?>
						<div class="all-news">
							<a class="btn btn-theme-primary-outline" href="<?php //echo esc_url($onepress_news_more_link) ?>"><?php if ( $onepress_news_more_text != '' ) //echo esc_html( $onepress_news_more_text ); ?></a>
						</div>
						<?php } ?>

					</div>
				</div>
			</div>

		</div>
	</div>
	<?php do_action( 'onepress_section_after_inner', 'news' ); ?>
<?php if ( ! onepress_is_selective_refresh() ){ ?>
</section>
<?php } ?>
<?php endif;
wp_reset_query();

