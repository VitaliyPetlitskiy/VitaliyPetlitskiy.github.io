
		
		<!-- footer -->

<ul id="sidebar">
<?php if ( ! dynamic_sidebar('footer') ) : ?>
	<!-- <li>код блока 1</li>
	<li>код блока 2</li> -->
<?php endif; ?>
</ul>
		<div class="widget search">
			<h4 class="widget__title">Поиск</h4>
			<form action="">
				<input type="text" placeholder="Поиск" name="s">
				<button type="submit" class="btn btn-black">Поиск</button>
			</form>
		</div>



		<!-- functions.php -->

<?php

//footer
$args_foote = array(
	'name'          => 'Виджит footer',
	'id'            => 'footer',
	'description'   => 'Здесь добавляем виджиты футера',
	'before_widget' => '<div class="widget">',
	'after_widget'  => '</div>',
	'before_title'  => '<h4 class="widget_title">',
	'after_title'   => '</h2>',
);

register_sidebar( $args_footer );

?>