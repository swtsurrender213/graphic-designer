<?php
/**
 * Template Name: Portfolio
 */

get_header(); ?>

<div class="clear"></div>

</header> <!-- / END HOME SECTION  -->

<div id="content" class="site-content">

	<div class="container">
<div style="text-align:left;" class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
	<div class="row">
	 <div class="col-lg-7">
	 <?php while ( have_posts() ) : the_post(); 
				
						get_template_part( 'content', 'page' );

						if ( comments_open() || '0' != get_comments_number() ) :

							comments_template();

						endif;

					endwhile; 
				?>
	 </div>
	 
	 <div class="col-lg-4">
	 <?php get_sidebar(); ?>
	 </div>
	
	
	</div>
	</div><!-- .container -->

<?php get_footer(); ?>