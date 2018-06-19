		


<!-- Installing plugins -->
<!-- Duplicate Post, Page Builder by SiteOrigin, YITH WooCommerce Ajax Navigation  -->

<!-- basket: [woocommerce_cart] ordering: [woocommerce_checkout] -->





<!-- post title-->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- post -->
<?php the_title( $before = '', $after = '', $echo = true ) ?>
<?php the_content( $more_link_text = null, $strip_teaser = false )?>
<?php the_excerpt()?>
<?php the_tags( $before = null, $sep = ', ', $after = '' )?>
<?php the_date( $d = '', $before = '', $after = '', $echo = true )?>
<?php the_permalink( $post = 0 )?>


<!-- picture -->
<?php the_post_thumbnail( 'full', 'class=' )?>

<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<h3>Данных постов нет</h3>
<?php endif; ?>


<!-- functions.php -->

<?php


//connection
function theme_name_scripts() {

	wp_enqueue_style ( 'style', get_stylesheet());
	wp_enqueue_style ( 'style', get_template_directory_uri() . '/css/style.css' );
	wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js');
	
}
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );


//connection of a thumbnail
add_theme_support( 'post-thumbnails' );


?>



