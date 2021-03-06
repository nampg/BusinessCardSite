<?php
/**
 * Template Name: Note 
 *
 * @package WordPress
 * @subpackage Minatoya
 * @since Minatoya 1.0
 */

get_header(); ?>

<div class="container">
    <div class="main-container">
        <div class="content-block note">
        	<?php
	        	$args=array(
        			'name' => 'note-post',
        			'post_type' => 'post',
        			'post_status' => 'publish',
        			'numberposts' => 1
	        	);
				$posts = get_posts($args);
				$post = $posts ? $posts[0] : null;
				echo $post->post_content;
        	?>
        </div>
        <div class="creative-design">
            <img src="<?php echo get_bloginfo('template_url'); ?>/img/creative-design.png" alt="" />
        </div>
    </div>
</div>

<?php
get_footer();