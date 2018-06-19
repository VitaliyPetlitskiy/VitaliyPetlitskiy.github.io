
<!--HeaderMenu-->

<!-- Option 1 -->
<?php wp_nav_menu(array ('theme_location'=>'menu', 'menu_class'=>'nav' ))?>
'container'=>'false'

<!-- Option 2 -->
<nav class="nav">
<?php
$massiv_vhodnih_parametrov = array(
	'container' => false,	// - без предварительно обертки тягом.
	'echo' => false,		// - вернуть меню для предварительной обработки средствами РНР.
	'items_wrap' => '%3$s',	// - аргумент фцнкции формама строки sprintf ().
	'depth' => 0,			// - глубина, уровень вложенности = 0.
);
/* Удалим из строки меню все кроме HTML-тега гиперссылки: */
print strip_tags ( wp_nav_menu( $massiv_vhodnih_parametrov ), '<a>');
?>
</nav>




<!-- functions.php -->
<?php
//HeaderMenu
register_nav_menu( 'menu', 'Меню в шапке' );
?>