<?php get_header(); ?>

<!-- content -->
<div id="content">
<div class="inner">

<!-- primary -->
<main id="primary">

<!-- breadcrumb -->
<div class="breadcrumb">
<?php bcn_display(); ?>
</div><!-- /breadcrumb -->

<div class="archive-head">
<div class="archive-lead">SEARCH</div>
<h1 class="archive-title m_search"><span>"<?php the_search_query(); ?>"</span>の検索結果：<?php echo $wp_query->found_posts; ?>件</h1>
</div><!-- /archive-head -->



<?php
//記事があればentriesブロック以下を表示
if (have_posts() ) :
?>
<!-- entries -->
<div class="entries m_horizontal">
<?php
//記事数ぶんループ
while ( have_posts() ) :
the_post();
?>

<!-- entry-item -->
<a href="<?php the_permalink(); //記事のリンクを表示 ?>" class="entry-item">
<!-- entry-item-img -->
<div class="entry-item-img">
<?php
if (has_post_thumbnail() ) {
// アイキャッチ画像が設定されてれば大サイズで表示
the_post_thumbnail('large');
} else {
// なければnoimage画像をデフォルトで表示
echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
}
?>
</div><!-- /entry-item-img -->

<!-- entry-item-body -->
<div class="entry-item-body">
<div class="entry-item-meta">
<?php
// カテゴリー１つ目の名前を表示
$category = get_the_category();
if ($category[0] ) {
echo '<div class="entry-item-tag">' . $category[0]->cat_name . '</div><!-- /entry-item-tag -->';
}
?>
<!-- 公開日時を動的に表示する -->
<time class="entry-item-published" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time><!-- /entry-item-published -->
</div><!-- /entry-item-meta -->
<h2 class="entry-item-title"><?php the_title(); //タイトルを表示 ?></h2><!-- /entry-item-title -->
<div class="entry-item-excerpt">
<?php the_excerpt(); //抜粋を表示 ?>
</div><!-- /entry-item-excerpt -->
</div><!-- /entry-item-body -->
</a><!-- /entry-item -->
<?php
endwhile;
?>

</div><!-- /entries -->
<?php endif; ?>

<?php get_template_part('template-parts/pagenation'); ?>

</main><!-- /primary -->

<?php get_sidebar(); ?>

</div><!-- /inner -->
</div><!-- /content -->

<?php get_footer(); ?>