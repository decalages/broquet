<?php 	
$mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) );  	

foreach( $mypages as $page ) {		 		
    $content = $page->post_content; 		
    if ( ! $content ) 	?> 		
    	
   
    <section id="section<?php echo $page->ID; ?>" class="content-area">
		<main id="main" class="site-main">
        <?php echo get_the_post_thumbnail( $page->ID ); ?>
        <h2><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a></h2> 	
       
		<?php echo $content; ?>

		</main><!-- .site-main -->
    </section><!-- .content-area -->    



    <?php 	}	 ?>