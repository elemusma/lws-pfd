<?php get_header();
echo '<section class="body" style="padding:50px 0px;">';
echo '<div class="container">';
echo '<div class="row">';
echo '<div class="col-lg-9 col-md-8">';

echo '<h1>' . single_cat_title('', false) . '</h1>';

echo '<div class="row">';

$term = $wp_query->queried_object;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array('posts_per_page' => 10, 'post_type' => 'post','paged' => $paged, 'tax_query' => array(
    array(
        'taxonomy'  => $term->taxonomy,
        'field'     => 'slug',
        'terms'     => $term->slug,
        )
    ));
    query_posts($args); ?>
<!-- the loop -->
<?php if ( have_posts() ) : while (have_posts()) : the_post();
echo get_template_part('partials/blogs-query');
endwhile; ?>
<!-- pagination -->
<div class="col-md-12 text-center pt-5">
<?php echo paginate_links(array(
'show_all' => true,
'prev_text' => '&#60;',
'next_text' => '&#62;'
)); ?>
</div>
</div>
</div>
<?php get_template_part('partials/sidebar'); ?>

<?php else : ?>
<!-- No posts found -->
<?php endif; ?>
</div>
</div>
</section>
<?php get_footer(); ?>