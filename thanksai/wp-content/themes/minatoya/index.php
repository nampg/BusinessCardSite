<?php
	/* Show alert message when order complete */ 
	if($_COOKIE['order_success'] == '1'):
		setcookie('order_success', null, strtotime('-1 day'), '/');
?>
<script>
//alert('Your order has been saved successfully');
</script>
<?php endif; ?>

<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Minatoya
 * @since Minatoya
 */

get_header(); ?>
<div class="container">
    <div class="main-container">
    	<div class="row">
			<img src="<?php echo get_bloginfo('template_url'); ?>/img/banner-new.png" alt="" class="banner" />
			<div class="main-block">
				<ul class="main-list">
					<li>必須項目はすべて入力をしてください。</li>
					<li>入力情報は改行を使用しないで下さい。</li>
					<li>ご入金は必ず、ご注文完了後にお願いいたします。</li>
					<li>ご注文及びご入金の確認ができた注文確定日より、<br>二週間以内に商品を発送いたします。</li>
				</ul>
			</div>
			<div class="main-link">
				<a href="<?php echo home_url('/') . 'order'?>">名刺注文はこちらへ</a>    
			</div>  
		</div>
    </div>
</div>
<?php
get_footer();