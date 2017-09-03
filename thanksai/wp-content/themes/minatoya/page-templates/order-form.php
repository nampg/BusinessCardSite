<?php
/**
 * Template Name: Order Form 
 *
 * @package WordPress
 * @subpackage Minatoya
 * @since Minatoya 1.0
 */

get_header(); ?>

<div class="container">
    <div class="main-container">
        <div class="content-block order-form">
        	<div class="success_box">All of the fields were successfully validated!</div>
			<div class="error_box"></div>
			<p class="form-note">
				team gracis名刺注文フォーム<br>
				<br>
				下記の内容を入力後、注文ボタンを押してください注文完了画面が表示される
				まで、注文は完了いたしません。
			</p>
			<form name="form-order" class="form-horizontal" action="" method="post">
				<div class="sub-form applicant-information">
					<p class="title">▽申込者情報</p>
					<div class="form-group">    
						<label for="" class="col-sm-1 control-label">姓</label>
						<div class="col-sm-5">
							<input type="text" class="form-control input-require" name="last_name"/>
						</div>
						<label for="" class="col-sm-1 control-label">名</label>
						<div class="col-sm-5">
							<input type="text" class="form-control input-require" name="first_name"/>
						</div>
					</div>
					<div class="form-group">    
						<label for="" class="col-sm-4 control-label">＊連絡用メールアドレス</label>
						<div class="col-sm-8"> 
							<input type="text" class="form-control input-require" name="email"/>
						</div>
					</div>
					<div class="form-group">    
						<label for="" class="col-sm-4 control-label">＊連絡用電話番号</label>
						<div class="col-sm-8"> 
							<input type="text" class="form-control input-require" name="phone" placeholder="例: 09012345678"/>
						</div>
						
						<div class="form-group">    
						<label for="" class="col-sm-11 control-label" style="text-align:center">（数字のみで入力して下さい）</label>
						</div>

					</div>
					
					
					
					<div class="form-group">    
						<label for="" class="col-sm-4 control-label">＊振込人名称</label>
						<div class="col-sm-8"> 
							<input type="text" class="form-control input-require" name="transfer_name"/>
						</div>
					</div>
					<p>
						（全角カタカナで記入してください。<br>
						姓と名の間にスペースは使用しないでください）
					</p>
				</div>
				<div class="sub-form destination-information">
					<p class="title">▽送付先情報</p>
					<div class="form-group">
						<label for="" class="col-sm-4 control-label">＊送付先電話番号</label>
						<div class="col-sm-8"> 
							<input type="text" class="form-control input-require" name="destination_phone" placeholder="例: 09012345678"/>
						</div>
						<div class="form-group">    
						<label for="" class="col-sm-11 control-label" style="text-align:center">（数字のみで入力して下さい）</label>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-4 control-label">＊送付先郵便番号</label>
						<div class="col-sm-8"> 
							<input type="text" class="form-control input-require" name="destination_postal_code" placeholder="例: 4093866"/>
						</div>
						<div class="form-group">    
						<label for="" class="col-sm-11 control-label" style="text-align:center">（数字のみで入力して下さい）</label>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-4 control-label">＊送付先住所１</label>
						<div class="col-sm-8"> 
							<input type="text" class="form-control input-require" name="address_1"/>
						</div>
					</div>
					<p>（都道府県から番地まで）</p>
					<div class="form-group">
						<label for="" class="col-sm-4 control-label">＊送付先住所２</label>
						<div class="col-sm-8"> 
							<input type="text" class="form-control input-require" name="address_2"/>
						</div>
					</div>
					<p>（ビル、マンション、部屋番号など）</p>
					<div class="form-group">
						<label for="" class="col-sm-4 control-label">＊送付先会社名</label>
						<div class="col-sm-8"> 
							<input type="text" class="form-control input-require" name="destination_company"/>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-4 control-label">＊送付先氏名</label>
						<div class="col-sm-8"> 
							<input type="text" class="form-control input-require" name="destination_name"/>
						</div>
					</div>
					<p>（送料は本人負担でお願いします。）</p>
				</div>
				<div class="sub-form businesscard-design">
					<p class="title">▽名刺デザイン選択</p>
					<div class="form-group">
						<label for="" class="col-sm-4 control-label">＊デザイン表面</label>
						<div class="col-sm-8">
							<?php 
								$args = array(
									'post_type' => 'card',
									'post_status' => 'publish',
									'post_per_page' => '-1',
									'order' => 'ASC',
									'tax_query' => array(
										array(
											'taxonomy' => 'category',
											'field' => 'slug',
											'terms' => 'card-front'
										)
									)
								);
								query_posts($args);
								if(have_posts()):
							?>
							<select name="card_front" class="form-control">
							<?php while(have_posts()): the_post(); ?>
								<option value="<?php the_title(); ?>"><?php the_title(); ?></option>
							<?php endwhile; ?>
							</select>
							<?php 
								endif; 
								wp_reset_query();
							?>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-4 control-label">＊デザイン裏面</label>
						<div class="col-sm-8">
							<?php 
								$args = array(
									'post_type' => 'card',
									'post_status' => 'publish',
									'post_per_page' => '-1',
									'order' => 'ASC',
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
							?>
							<select name="card_back" class="form-control">
							<?php while(have_posts()): the_post(); ?>
								<option value="<?php the_title(); ?>"><?php the_title(); ?></option>
							<?php endwhile; ?>
							</select>
							<?php 
								endif; 
								wp_reset_query();
							?>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-4 control-label">＊ロゴマーク</label>
						<div class="col-sm-8">
							<label class="control-label" style="display: block;">
								<input type="radio" name="card_logo" value="Team Gras!s" checked/>
								<span>Team Gras!s</span>                                        
							</label>
							<label class="control-label">
								<input type="radio" name="card_logo" value="なし"/>
								<span>なし</span>                                        
							</label>
						</div>
					</div>
				</div>
				<div class="sub-form businesscard-information">
					<p class="title">▽名刺記載情報</p>
					<div class="form-group">
					   <label for="" class="col-sm-4 control-label">＊氏名</label>
					   <div class="col-sm-8">
						   <input type="text" class="form-control input-require" name="card_name"/>
					   </div>
					</div>
					<div class="form-group">
					   <label for="" class="col-sm-4 control-label">ローマ字氏名</label>
					   <div class="col-sm-8">
						   <input type="text" class="form-control" name="card_romanized_name"/>
					   </div>
					</div>
					<div class="form-group">
					   <label for="" class="col-sm-4 control-label">郵便番号</label>
					   <div class="col-sm-8">
						   <input type="text" class="form-control" name="card_postal_code"/>
					   </div>
					</div>
					<div class="form-group">
					   <label for="" class="col-sm-4 control-label">住所</label>
					   <div class="col-sm-8">
						   <input type="text" class="form-control" name="card_address"/>
					   </div>
					</div>
					<div class="form-group">
					   <label for="" class="col-sm-4 control-label">電話番号</label>
					   <div class="col-sm-8">
						   <input type="text" class="form-control" name="card_phone"/>
					   </div>
					</div>
					<div class="form-group">
					   <label for="" class="col-sm-4 control-label">メールアドレス</label>
					   <div class="col-sm-8">
						   <input type="text" class="form-control" name="card_email"/>
					   </div>
					</div>
					<div class="form-group">
					   <label for="" class="col-sm-4 control-label">自由項目欄１</label>
					   <div class="col-sm-8">
						   <input type="text" class="form-control" name="card_option_1"/>
					   </div>
					</div>
					<div class="form-group">
					   <label for="" class="col-sm-4 control-label">自由項目欄２</label>
					   <div class="col-sm-8">
						   <input type="text" class="form-control" name="card_option_2"/>
					   </div>
					</div>
					<div class="form-group">
					   <label for="" class="col-sm-4 control-label">自由項目欄３</label>
					   <div class="col-sm-8">
						   <input type="text" class="form-control" name="card_option_3"/>
					   </div>
					</div>
					<p>（氏名以外の項目の入力がない場合は空欄になります）</p>
				</div>
				<div class="sub-form non-mb">
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
					?>
					
					<table class="table">
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
								$count = 0;
								while(have_posts()): the_post(); 
									$count++;
							?>
							<tr>
								<td><?php the_title(); ?></td>
								<td>
									<?php 
										$packageID = get_the_ID();
										$price = get_post_meta($packageID, 'price', true);
										echo '￥', $price;
									?>
								</td>
								<td><input type="text" class="form-control input-small package-quantity" name="quantity_<?php echo $packageID;?>"/></td>
								<td>
									<span class="package-subtotal-text"></span>
									<input type="hidden" class="form-control input-small package-subtotal" name="subtotal_<?php echo $packageID;?>"/>
								</td>
							</tr>
							<?php endwhile; ?>
						</tbody>
					</table>
					<?php 
						endif; 
						wp_reset_query();
					?>
				</div>
				<div class="sub-form">
					<div class="form-group">
						<label for="" class="col-sm-4 control-label">*個人情報の取扱いへの同意</label>
						<div class="col-sm-8">
							<label class="control-label">
								<input type="radio" value="1" name="customer-accept"/>
								<span>同意する</span>
							</label>
						</div>    
					</div>
				</div>
				<p class="important-note">
					＊振込先情報：<br>
					お支払い確認してから、作業始まりますのでお手数ですが、<br>
					宜しくお願いします。
				</p>
				<div class="customer-info">
					<div class="form-group">
						<p class="col-sm-3">名義 ：</p>
						<p class="col-sm-6">PHAM VU LANG</p>
					</div>        
					<div class="form-group">
						<p class="col-sm-3">銀行名 ：</p>
						<p class="col-sm-6">MIZUHO 銀行</p>
					</div>
					<div class="form-group">
						<p class="col-sm-3">支店名 ：</p>
						<p class="col-sm-6">甲府支店</p>
					</div>
					<div class="form-group">
						<p class="col-sm-3">口座番号 ：</p>
						<p class="col-sm-6">普通　2867754  　</p>
					</div>
				</div>
				<input type="hidden" name="form-order-card" value="1" />
				<input type="submit" class="show-on-accepted" style="display: none;" value="＊確認画面へ" />
			</form>
        </div>
    </div>
</div>

<?php
get_footer();