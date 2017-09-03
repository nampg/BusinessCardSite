<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title><?php wp_title(''); ?></title>
	<?php wp_head(); ?>
</head>
<body>
	<div id="wrapper">
        <header id="head-top">
        	<div class="top-bar"></div>
            <div class="header-main">
	            <div class="container">
	                <div class="row">
	                    <div class="col-md-5 col-sm-5 col-xs-12">
	                        <h1 class="logo">
	                            <a href="/thanksai">
	                                <img src="<?php echo get_bloginfo('template_url') . '/img/logo-new.png'; ?>" alt="" />
	                            </a>
	                        </h1>
	                    </div>
	                    <div class="col-md-5 col-sm-6 col-xs-12 pull-right">
                            <div class="header-info">
                                <p>お気軽にお問い合わせください。</p>
                                <p class="contact">Tel 055-269-6367</p>
                                <p class="time">受付時間 10:10 – 18:00 (土 – 日 - 祝日除く)</p>   
                            </div>   
                        </div>
	                </div>   
	                
	                <div class="row">
	                    <div class="header-nav">
	                        <nav class="navbar mainmenu" role="navigation">
	                            <div class="navbar-header">
	                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mobile-menu">
	                                    <span class="sr-only">Toggle navigation</span>
	                                    <span class="icon-bar"></span>
	                                    <span class="icon-bar"></span>
	                                    <span class="icon-bar"></span>
	                                </button>      
	                            </div>
	                            
	                            <?php
						        	wp_nav_menu( array(
						                'menu'              => 'primary',
						                'theme_location'    => 'primary',
						                'depth'             => 2,
						                'container'         => 'div',
						                'container_class'   => 'collapse navbar-collapse',
						        		'container_id'      => 'mobile-menu',
						                'menu_class'        => 'main-nav nav navbar-nav',
						                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
						                'walker'            => new wp_bootstrap_navwalker())
						            );
						        ?>   
	                            
	                            <!--
	                            <div class="collapse navbar-collapse" id="mobile-menu">
	                                <ul id="mainNav" class="nav navbar-nav">
	                                    <li class="home"><a href="/">Home</a></li>        
	                                    <li class="dropdown">
	                                       <a href="#" class="dropdown-toggle" data-toggle="dropdown">デザイン <span class="caret"></span></a>
	                                       <ul class="dropdown-menu" role="menu">
	                                           <li><a href="/ykf-card">見本(表)</a></li>
	                                           <li><a href="/ykb-card">見本(裏)</a></li>
	                                       </ul>  
	                                    </li>
	                                    <li><a href="/order">オーダー</a></li>
	                                    <li><a href="/payment">英語名刺</a></li>
	                                    <li><a href="/note">注意事項</a></li>
	                                    <li><a href="/profile">会社概要</a></li>
	                                </ul>
	                            </div>
	                            -->
	                        </nav>   
                        </div>
	                </div>
	            </div>
            </div>
            <div class="bottom-bar"></div>
        </header>
        <main class="main-page">