<?php
/**
 * Template Name: Order Confirm 
 *
 * @package WordPress
 * @subpackage Minatoya
 * @since Minatoya 1.0
 */ 
if(!isset($_GET['id'])) {
	header('Location: ' . home_url());
	//header('Location: http://design-mycreative.jp/thanksai/order-succeed/');
	exit;
}
get_header(); ?>

<div class="container">
    <div class="main-container">
        <div class="content-block order-form order-confirm">
        	<?php
	            global $wpdb;
        		$query = 'SELECT * FROM thanksaiposts WHERE ID = %d';
        		$order = $wpdb->get_row($wpdb->prepare($query, intval($_GET['id'])));
				$orderID = $order->ID;
				$data = get_post_meta($order->ID);
        	?>
            <p>team gracis名刺注文フォーム</p>
            <form name="form-order" class="form-horizontal" action="" method="post">
                <div class="sub-form applicant-information">
                    <p class="title">▽申込者情報</p>
                    <div class="form-group">    
                        <label for="" class="col-sm-4 control-label">申込者名</label>
                        <div class="col-sm-8">
                        	<?php echo $data['first_name'][0] . $data['last_name'][0]; ?>
                        </div>
                    </div>
                    <div class="form-group">    
                        <label for="" class="col-sm-4 control-label">＊連絡用メールアドレス</label>
                        <div class="col-sm-8"> 
                        	<?php echo $data['email'][0]; ?>
                        </div>
                    </div>
                    <div class="form-group">    
                        <label for="" class="col-sm-4 control-label">＊振込人名称</label>
                        <div class="col-sm-8"> 
                            <?php echo $data['transfer_name'][0];?>
                        </div>
                    </div>
                    <div class="form-group">    
                        <label for="" class="col-sm-4 control-label">＊連絡用電話番号</label>
                        <div class="col-sm-8"> 
                        	<?php echo $data['phone'][0];?>
                        </div>
                    </div>
                </div>
                <div class="sub-form destination-information">
                    <p class="title">▽送付先情報</p>
                    <div class="form-group">
                        <label for="" class="col-sm-4 control-label">＊送付先電話番号</label>
                        <div class="col-sm-8"> 
                        	<?php echo $data['destination_phone'][0];?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-4 control-label">＊送付先郵便番号</label>
                        <div class="col-sm-8">
                        	<?php echo $data['destination_postal_code'][0];?> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-4 control-label">＊送付先住所１</label>
                        <div class="col-sm-8">
                        	<?php echo $data['address_1'][0];?> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-4 control-label">＊送付先住所２</label>
                        <div class="col-sm-8"> 
                            <?php echo $data['address_2'][0];?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-sm-4 control-label">＊送付先会社名</label>
                        <div class="col-sm-8"> 
                        	<?php echo $data['destination_company'][0];?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-4 control-label">＊送付先氏名</label>
                        <div class="col-sm-8">
                        	<?php echo $data['destination_name'][0];?> 
                        </div>
                    </div>
                </div>
                <div class="sub-form businesscard-design">
                    <p class="title">▽名刺デザイン選択</p>
                    <div class="form-group">
                        <label for="" class="col-sm-4 control-label">＊デザイン表面</label>
                        <div class="col-sm-8">
                        	<?php echo $data['card_front'][0];?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-4 control-label">＊デザイン裏面</label>
                        <div class="col-sm-8">
                        	<?php echo $data['card_back'][0];?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-4 control-label">＊ロゴマーク</label>
                        <div class="col-sm-8">
                            <?php echo $data['card_logo'][0];?>
                        </div>
                    </div>
                </div>
                <div class="sub-form businesscard-information">
                    <p class="title">▽名刺記載情報</p>
                    <div class="form-group">
                       <label for="" class="col-sm-4 control-label">＊氏名</label>
                       <div class="col-sm-8">
                       	   <?php echo $data['card_name'][0];?>
                       </div>
                    </div>
                    <div class="form-group">
                       <label for="" class="col-sm-4 control-label">ローマ字氏名</label>
                       <div class="col-sm-8">
                       	   <?php echo $data['card_romanized_name'][0];?>	
                       </div>
                    </div>
                    <div class="form-group">
                       <label for="" class="col-sm-4 control-label">郵便番号</label>
                       <div class="col-sm-8">
                       	   <?php echo $data['card_postal_code'][0];?>	
                       </div>
                    </div>
                    <div class="form-group">
                       <label for="" class="col-sm-4 control-label">住所</label>
                       <div class="col-sm-8">
                       	   <?php echo $data['card_address'][0];?>
                       </div>
                    </div>
                    <div class="form-group">
                       <label for="" class="col-sm-4 control-label">電話番号</label>
                       <div class="col-sm-8">
                       	   <?php echo $data['card_phone'][0];?>		
                       </div>
                    </div>
                    <div class="form-group">
                       <label for="" class="col-sm-4 control-label">メールアドレス</label>
                       <div class="col-sm-8">
                           <?php echo $data['card_email'][0];?>
                       </div>
                    </div>
                    <div class="form-group">
                       <label for="" class="col-sm-4 control-label">自由項目欄１</label>
                       <div class="col-sm-8">
                       	   <?php echo $data['card_option_1'][0];?>
                       </div>
                    </div>
                    <div class="form-group">
                       <label for="" class="col-sm-4 control-label">自由項目欄２</label>
                       <div class="col-sm-8">
                       	   <?php echo $data['card_option_2'][0];?>
                       </div>
                    </div>
                    <div class="form-group">
                       <label for="" class="col-sm-4 control-label">自由項目欄３</label>
                       <div class="col-sm-8">
    					   <?php echo $data['card_option_3'][0];?>
                       </div>
                    </div>
                </div>
                <p>注意事項を確認してください    注意事項を確認しました</p>
                <div class="sub-form non-mb">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>商品名</th>
                                <th>価格 (税込)</th>
                                <th>注文数</th>
                                <th>計</th>
                            </tr>
                        </thead>
                        <tbody>
						<?php
							$args = array(
								'post_type' => 'selling-package',
								'post_status' => 'publish',
								'post_per_page' => '-1',
								'order' => 'ASC',
								'tax_query' => array(
									array(
										'taxonomy' => 'category',
										'field' => 'slug',
										'terms' => 'selling-package-category'
									)
								)
							);
						query_posts($args);
						if(have_posts()):
							while(have_posts()): the_post(); 
								$packageID = get_the_ID();
								$quantity = get_post_meta($orderID, 'quantity_' . $packageID, true);
								$subTotal = get_post_meta($orderID, 'subtotal_' . $packageID, true);
								$grandTotal = get_post_meta($orderID, 'grand_total', true);
						?>
							<tr>
								<td><?php the_title(); ?></td>
								<td><?php echo '￥', get_post_meta($packageID, 'price', true);?></td>
								<td><?php echo $quantity ? $quantity : '0';?></td>
								<td><?php echo $subTotal ? '￥' . $subTotal : '0';?></td>
							</tr>
						<?php endwhile; ?>
							<tr>
                                <td colspan="3">Total</td>
                                <td><?php echo $grandTotal ? '￥' . $grandTotal : '';?></td>
                            </tr>	
						<?php
							endif;
							wp_reset_query();
						?>
						</tbody>
					</table>	
                </div>
                <p>支払方法 銀行振込</p>
                <input type="hidden" name="order-confirm-submit" value="1" />
                <input type="hidden" name="order-id" value="<?php echo $orderID;?>" />
                <input type="submit" value="注文" />
            </form>
        </div>
        <div class="creative-design">
            <img src="<?php echo get_bloginfo('template_url'); ?>/img/creative-design.png" alt="" />
        </div>
    </div>
</div>

<?php
get_footer();