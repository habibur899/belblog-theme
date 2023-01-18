<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<!-- page wrapper -->
<body class="boxed_wrapper">


<!-- .preloader -->
<!-- <div class="preloader"></div> -->
<!-- /.preloader -->


<!-- menu-area -->
<header class="main-header header-style-four">

    <!-- header-top-style-two -->
    <div class="header-top-two">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <ul class="social-style-four in-block">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="logo-box centred">

						<?php
						$custom_logo_id = get_theme_mod( 'custom_logo' );
						$logo           = wp_get_attachment_image_src( $custom_logo_id, 'full' );
						if ( has_custom_logo() ) {
							echo '<a href="' . esc_url( site_url() ) . '"><figure><img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '"></figure></a>';
						} else {
							echo '<h1>' . get_bloginfo( 'name' ) . '</h1>';
						}
						?>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="search-box">
                        <form action="index.html" method="post">
                            <div class="form-group">
                                <input type="search" name="search" placeholder="Search" required="">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- header-top-style-two -->


    <!-- main-menu -->
    <div class="theme_menu menu-area stricky centred">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 menu-column">
                    <div class="menu-area">
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                        data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix">
								<?php
								wp_nav_menu( array(
									'menu_class'     => 'menu navigation clearfix',
									'fallback_cb'    => 'wp_page_menu',
									'theme_location' => 'main-menu',
									'walker'         => new WP_Bootstrap_Navwalker()
								) );
								?>


                                <!-- mobile menu -->
	                            <?php
	                            wp_nav_menu( array(
		                            'menu_class'     => 'menu mobile-menu clearfix',
		                            'fallback_cb'    => 'wp_page_menu',
		                            'theme_location' => 'mobile-menu',
		                            'walker'         => new WP_Bootstrap_Navwalker()
	                            ) );
	                            ?>

                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end main-menu -->
</header>
<!-- end menu-area -->
