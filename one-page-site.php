<?php 
  /*
Template Name: One Page Theme
*/
 get_header(); 
 	    
?>


<!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
          
           

            
      </div>
    </div>
 <?php 
			    $args = array(
			        'post_type' => 'page',
			        'order' => 'ASC'
			    );
			    $the_query = new WP_Query( $args );		    
			?>
			<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>	
            
            <?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; endif; ?>
<?php get_footer(); ?>
    

