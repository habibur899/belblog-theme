<?php
/*
 * Template Name: Home
 * */
get_header();
?>

    <section class="slider-style-six">
        <div class="container">
            <div class="row">
				<?php
				$args  = array(
					'post_type'      => 'post',
					'posts_per_page' => 3
				);
				$query = new WP_Query( $args );
				if ( have_posts() ) {
				while ( $query->have_posts() ) {
				$query->the_post();
				if ( 1 > $query->current_post ) {
				?>
                <div class="col-md-8 col-sm-12 col-xs-12 first-column">
                    <div class="single-item">
                        <div class="single-item-overlay">
                            <div class="img-box">
								<?php the_post_thumbnail(); ?>
                                <div class="overlay">
                                    <div class="inner-box">
                                        <div class="content blog-content-one">
                                            <div class="meta-text"><?php the_category(); ?></div>
                                            <div class="title"><h3><a
                                                            href="<?php the_permalink(); ?>"> <?php the_title() ?></a>
                                                </h3></div>
                                            <div class="date">
                                                <span><?php echo esc_html__( 'On', 'belblog' ) ?></span> <?php echo esc_attr( get_the_date() ) ?>
                                                &nbsp;&nbsp;<i
                                                        class="flaticon-circle"></i>&nbsp;&nbsp;<span><?php echo esc_html__( 'By', 'belblog' ) ?></span>
												<?php the_author() ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 column">
					<?php
					}

                    elseif ( 3 > $query->current_post ) {
						?>

                        <div class="single-item">
                            <div class="single-item-overlay">
                                <div class="img-box">
									<?php the_post_thumbnail( 'medium' ); ?>
                                    <div class="overlay">
                                        <div class="inner-box">
                                            <div class="content blog-content-one">
                                                <div class="meta-text"><?php the_category(); ?></div>
                                                <div class="title"><h3><a
                                                                href="<?php the_permalink(); ?>"> <?php the_title() ?></a>
                                                    </h3></div>
                                                <div class="date">
                                                    <span><?php echo esc_html__( 'On', 'belblog' ) ?></span> <?php echo esc_attr( get_the_date() ) ?>
                                                    &nbsp;&nbsp;<i
                                                            class="flaticon-circle"></i>&nbsp;&nbsp;<span><?php echo esc_html__( 'By', 'belblog' ) ?></span>
													<?php the_author() ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
						<?php
					}
					}
					}
					wp_reset_query();
					?>

                </div>
            </div>
        </div>
    </section>


    <!-- carousel-style-one -->
    <section class="carousel-style-one mar-bottom-100">
        <div class="single-item-carousel-overlay owl-control-none">
			<?php
			$featured_args  = array(
				'post_type'      => 'post',
				'posts_per_page' => - 1,
				'meta_key'       => 'featured_post',
				'meta_value'     => true
			);
			$featured_query = new WP_Query( $featured_args );
			if ( have_posts() ) {
				while ( $featured_query->have_posts() ) {
					$featured_query->the_post();
					?>
                    <div class="single-item">
                        <div class="single-item-overlay">
                            <div class="img-box">
								<?php the_post_thumbnail( 'medium' ); ?>
                                <div class="overlay">
                                    <div class="inner-box">
                                        <div class="content blog-content-one">
                                            <div class="meta-text"><?php the_category(); ?></div>
                                            <div class="title"><h6><a
                                                            href="<?php the_permalink(); ?>"><?php the_title() ?></a>
                                                </h6></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<?php
				}
			}
			wp_reset_query();
			?>

        </div>
    </section>
    <!-- carousel-style-one end -->


    <!-- blog side -->
    <section class="blog-side blog-style-one blog-style-three">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12 content-side">
                    <div class="blog-details-content">
                        <div class="row">
							<?php
							$blog_args = array(
								'posts_per_page' => 8,
								'post_type'      => 'post'
							);
							$blog_que  = new WP_Query( $blog_args );
							if ( have_posts() ) {
								while ( $blog_que->have_posts() ) {
									$blog_que->the_post();
									?>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="content-box overlay-item">
                                            <div class="inner-box">
                                                <div class="image-box">
                                                    <figure class="image"><?php
														if ( has_post_thumbnail() ) {
															the_post_thumbnail( 'medium' );
														}
														?></figure>
                                                    <div class="overlay-box">
                                                        <div class="overlay-inner">
                                                            <div class="content">
                                                                <a href="<?php the_permalink(); ?>"><i
                                                                            class="fa fa-link"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="blog-content-one blog-content-two sp-six centred">
                                                <div class="top-content">
                                                    <div class="meta-text"><?php the_category(); ?></div>
                                                    <div class="title"><h4><a
                                                                    href="<?php the_permalink(); ?>"><?php the_title() ?></a>
                                                        </h4>
                                                    </div>
                                                    <div class="date">
                                                        <span><?php echo esc_html__( 'On', 'belblog' ) ?></span> <?php the_date() ?>
                                                        <i
                                                                class="flaticon-circle"></i>&nbsp;&nbsp;<span><?php echo esc_html__( 'On', 'belblog' ) ?></span>
														<?php the_author() ?>
                                                    </div>
                                                </div>
                                                <div class="text">
                                                    <p><?php echo wp_trim_words( get_the_content(), 30, ' ' ) ?></p>
                                                </div>
                                                <ul class="meta-list centred">
                                                    <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp;
															<?php echo esc_html( get_comments_number() ) ?></a>
                                                        &nbsp; <i class="flaticon-circle"></i> &nbsp; <a href="#"><i
                                                                    class="fa fa-heart-o" aria-hidden="true"></i>&nbsp;
                                                            13</a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i>
                                                            &nbsp;Share</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
								<?php }
							} ?>

                        </div>
                        <ul class="page-pagination page-pagination centred">
                            <li><a href="#"><i class="fa fa-angle-left"></i>&nbsp;&nbsp;&nbsp;PREV</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#" class="active">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">NEXT&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div>

				<?php get_sidebar() ?>

            </div>
        </div>
    </section>
    <!-- blog side end -->

<?php
get_footer();
