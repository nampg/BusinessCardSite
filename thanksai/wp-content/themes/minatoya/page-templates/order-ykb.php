<?php
/**
 * Template Name: Order YKB 
 *
 * @package WordPress
 * @subpackage Minatoya
 * @since Minatoya 1.0
 */

get_header(); ?>

<div class="container">
    <div class="main-container">
        <div class="content-block order">  
            <?php 
				$args = array(
					'post_type' => 'card',
					'post_status' => 'publish',
					'post_per_page' => '-1',
					'order' => 'DESC',
					'tax_query' => array(
						array(
							'taxonomy' => 'category',
							'field' => 'slug',
							'terms' => 'card-back'
						)
					)
				);
				query_posts($args);
				if(have_posts()):
					$count = 0;
					while(have_posts()): the_post(); 
						$count++;
						$imageUrl = get_field('image', get_the_ID());
						if($count % 2 > 0):	
			?>
			<div class="row">
				<div class="col-xs-6">
					<p class="card-title"><?php the_title(); ?></p>
					<img src="<?php echo $imageUrl?>" alt="" />
				</div>	
			<?php else: ?>
				<div class="col-xs-6">
					<p class="card-title"><?php the_title(); ?></p>
					<img src="<?php echo $imageUrl?>" alt="" />
				</div>	
			</div>
			<?php endif;?>
			<?php 
					endwhile;
					// Enclosed div tag if the number of cards is odd
					if($count % 2 > 0):
			?>
			</div>	
			<?php
					endif;
				endif; 
				wp_reset_query();
			?>
        </div>
    </div>
</div>

<?php
get_footer();