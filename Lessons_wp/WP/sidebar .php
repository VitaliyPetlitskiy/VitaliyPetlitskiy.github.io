
<!-- sidebar -->

<ul id="sidebar">
<?php if ( ! dynamic_sidebar('sidebar') ) : ?>
	<!-- <li>код блока 1</li>
	<li>код блока 2</li> -->
<?php endif; ?>
</ul>


<!-- functions.php -->

<?php

//sidebar 
$args = array(
	'name'          => 'Виджит sidebar',
	'id'            => 'sidebar',
	'description'   => 'Здесь добавляем виджиты сайтбара',
	'before_widget' => '<div class="widget">',
	'after_widget'  => '</div>',
	'before_title'  => '<h4 class="widget_title">',
	'after_title'   => '</h4>',
);

register_sidebar( $args );
?>