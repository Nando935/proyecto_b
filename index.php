
<?php 
get_header();
if (have_posts()) : 
while (have_posts()) : the_post(); ?>

<div class="master_container">

<?php
	$mypages = get_pages( array( 'child_of' => 7, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) ); /*comprobar que el numero de pagina sea el correcto*/

	foreach( $mypages as $page ) {		
		$content = $page->post_content;

    ?>
        <div class="background-drinks center_elements">
        <div class="title_distance"><h1><?php echo $page->post_title; ?></h1></div>
        
        
        <?php
            echo '<div class="textos center_elements">' .$content.'</div>';
            echo get_the_post_thumbnail( $page->ID, 'medium_large');
		
         
	}	
?>
</div>
</div>


<?php 
endwhile;
else :
    echo "<p>No hay contenido que mostrar</p>";
   endif;
get_footer();
?>
