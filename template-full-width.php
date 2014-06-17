<?php
/*
Template Name: Full Width
*/
?>
<?php get_header(); ?>

        <div class="columns navibg withall border-color">
            <div class="sixteen columns alpha">
                <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                    <h3><?php the_title(); ?></h3>
                <?php endwhile; ?>
            </div>
        </div>
    
    	
    	<br class="clear" />
        <div class="row fitvids">
        	<div class="sixteen columns">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
            <?php endwhile; ?>
    		</div>
    	</div>
<?php get_footer(); ?>
	