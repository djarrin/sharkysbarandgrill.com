<?php 
  /*
Template Name: One Page Theme
*/
 get_header(); 
 	    
?>


<!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
               <center><h1>Sharkys Bar and Grill</h1></center>
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="http://localhost:85/sharkysbarandgrill/wp-content/uploads/2015/02/sharkysSign.png" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <center><img src="http://localhost:85/sharkysbarandgrill/wp-content/uploads/2015/02/sharkysSign.png" alt="..."></center>
      <div class="carousel-caption">
        ...
      </div>
    </div>
    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
           

            
      </div>
    </div>
        <div class="site-container">
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
        </div>
<?php get_footer(); ?>
    

