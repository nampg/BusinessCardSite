<?php
/**
 * Template Name: order-succeed 
 *
 * @package WordPress
 * @subpackage Minatoya
 * @since Minatoya 1.0
 */

get_header(); ?>

<div class="container">
    <div class="main-container">
    
        <div class="content-block profile">
        
        
		
		
		<div class="form-group">    
						
						<div class="row form-group"> 
						<img class="col-sm-1 form-group control-label"  src="<?php echo get_bloginfo('template_url'); ?>/img/logothanksai.png" alt="" />
						
							<label for="" class="col-sm-10 control-label" style="text-align:center">ご注文ありがとうございました。</label>
							<label for="" class="col-sm-10 control-label" style="text-align:center">注文内容が受付サーバーに送信されました。</label>
						</div>
						
						

					</div>
        	
			
        </div>
        
        
        
        <div class="creative-design">
            <img src="<?php echo get_bloginfo('template_url'); ?>/img/creative-design.png" alt="" />
        </div>
    </div>
</div>

<?php
get_footer();