<?php

get_header();
global $post;
$author_id = $post->post_author;
?>


    <!-- blog side -->
    <section class="blog-side sp-seven blog-style-one standard-post sec-pad">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12 content-side">
                    <div class="blog-details-content">
                        <figure><?php the_post_thumbnail(); ?></figure>
                        <div class="blog-content-one sp-three">
                            <div class="top-content centred">
                                <div class="meta-text"><?php the_category(); ?></div>
                                <div class="title"><h3><?php the_title() ?></h3></div>
                                <div class="date">
                                    <span><?php echo esc_html__( 'On', 'belblog' ) ?></span> <?php echo esc_attr( get_the_date() ) ?>
                                    &nbsp;<i
                                            class="flaticon-circle"></i>&nbsp;&nbsp;<span><?php echo esc_html__( 'By', 'belblog' ) ?></span> <?php echo esc_attr( get_the_author_meta( 'display_name', $author_id ) ) ?>
                                </div>
                            </div>
                            <div class="text">
								<?php the_content(); ?>
                            </div>
                            <ul class="meta-list centred">
                                <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp; 37</a>
                                    &nbsp;
                                    <i class="flaticon-circle"></i> &nbsp; <a href="#"><i class="fa fa-heart-o"
                                                                                          aria-hidden="true"></i>&nbsp;
										<?php echo esc_html( get_comments_number() ) ?></a></li>
                                <li><a href="post1.html"><i class="flaticon-substract"></i> &nbsp; CONTINUE READING
                                        &nbsp; <i class="flaticon-substract"></i></a></li>
                                <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> &nbsp;Share</a>
                                </li>
                            </ul>
                        </div>
                        <div class="single-authore">
                            <div class="authore-img">
								<?php
								?>
                                <figure><?php echo get_avatar( get_the_author_meta( 'id' ) );
	                                ?></figure>
                            </div>
                            <div class="authore-title"><?php echo esc_attr( get_the_author_meta( 'display_name', $author_id ) ) ?>
                                - <span><?php echo esc_html__( 'Author', 'belfast' ) ?></span></div>
                            <div class="text"><p><?php echo esc_attr( get_the_author_meta( 'description', $author_id ) ) ?></p></div>
                            <ul class="social-link">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                            </ul>
                        </div>
                        <div class="related-post centred">
                            <div class="title-text-two">RELATED POSTS</div>
                            <div class="carousel-style-four nav-style-none dots-style-one">
                                <div class="carousel-style-one">
                                    <figure><img src="images/news/2.jpg" alt=""></figure>
                                    <div class="lower-content">
                                        <div class="meta-text"><a href="#">Travel</a></div>
                                        <div class="title"><h6><a href="post2.html">Love Boat soon will be making
                                                    another run</a></h6></div>
                                    </div>
                                </div>
                                <div class="carousel-style-one">
                                    <figure><img src="images/news/3.jpg" alt=""></figure>
                                    <div class="lower-content">
                                        <div class="meta-text"><a href="#">Lifestyle</a></div>
                                        <div class="title"><h6><a href="post2.html">Call him flipper flipper faster
                                                    than
                                                    lightning</a></h6></div>
                                    </div>
                                </div>
                                <div class="carousel-style-one">
                                    <figure><img src="images/news/4.jpg" alt=""></figure>
                                    <div class="lower-content">
                                        <div class="meta-text"><a href="#">Fashion</a></div>
                                        <div class="title"><h6><a href="post2.html">East side to a deluxe apartment
                                                    in
                                                    the sky</a></h6></div>
                                    </div>
                                </div>
                                <div class="carousel-style-one">
                                    <figure><img src="images/news/2.jpg" alt=""></figure>
                                    <div class="lower-content">
                                        <div class="meta-text"><a href="#">Travel</a></div>
                                        <div class="title"><h6><a href="post2.html">Love Boat soon will be making
                                                    another run</a></h6></div>
                                    </div>
                                </div>
                                <div class="carousel-style-one">
                                    <figure><img src="images/news/3.jpg" alt=""></figure>
                                    <div class="lower-content">
                                        <div class="meta-text"><a href="#">Lifestyle</a></div>
                                        <div class="title"><h6><a href="post2.html">Call him flipper flipper faster
                                                    than
                                                    lightning</a></h6></div>
                                    </div>
                                </div>
                                <div class="carousel-style-one">
                                    <figure><img src="images/news/4.jpg" alt=""></figure>
                                    <div class="lower-content">
                                        <div class="meta-text"><a href="#">Fashion</a></div>
                                        <div class="title"><h6><a href="post2.html">East side to a deluxe apartment
                                                    in
                                                    the sky</a></h6></div>
                                    </div>
                                </div>
                                <div class="carousel-style-one">
                                    <figure><img src="images/news/2.jpg" alt=""></figure>
                                    <div class="lower-content">
                                        <div class="meta-text"><a href="#">Travel</a></div>
                                        <div class="title"><h6><a href="post2.html">Love Boat soon will be making
                                                    another run</a></h6></div>
                                    </div>
                                </div>
                                <div class="carousel-style-one">
                                    <figure><img src="images/news/3.jpg" alt=""></figure>
                                    <div class="lower-content">
                                        <div class="meta-text"><a href="#">Lifestyle</a></div>
                                        <div class="title"><h6><a href="post2.html">Call him flipper flipper faster
                                                    than
                                                    lightning</a></h6></div>
                                    </div>
                                </div>
                                <div class="carousel-style-one">
                                    <figure><img src="images/news/4.jpg" alt=""></figure>
                                    <div class="lower-content">
                                        <div class="meta-text"><a href="#">Fashion</a></div>
                                        <div class="title"><h6><a href="post2.html">East side to a deluxe apartment
                                                    in
                                                    the sky</a></h6></div>
                                    </div>
                                </div>
                                <div class="carousel-style-one">
                                    <figure><img src="images/news/2.jpg" alt=""></figure>
                                    <div class="lower-content">
                                        <div class="meta-text"><a href="#">Travel</a></div>
                                        <div class="title"><h6><a href="post2.html">Love Boat soon will be making
                                                    another run</a></h6></div>
                                    </div>
                                </div>
                                <div class="carousel-style-one">
                                    <figure><img src="images/news/3.jpg" alt=""></figure>
                                    <div class="lower-content">
                                        <div class="meta-text"><a href="#">Lifestyle</a></div>
                                        <div class="title"><h6><a href="post2.html">Call him flipper flipper faster
                                                    than
                                                    lightning</a></h6></div>
                                    </div>
                                </div>
                                <div class="carousel-style-one">
                                    <figure><img src="images/news/4.jpg" alt=""></figure>
                                    <div class="lower-content">
                                        <div class="meta-text"><a href="#">Fashion</a></div>
                                        <div class="title"><h6><a href="post2.html">East side to a deluxe apartment
                                                    in
                                                    the sky</a></h6></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comment-area">
                            <div class="title-text-two">4 COMMENTS</div>
                            <div class="single-comment">
                                <div class="img-box">
                                    <figure><img src="images/news/c1.jpg" alt=""></figure>
                                </div>
                                <div class="comment-title">ADAM GILGRIST</div>
                                <div class="replay"><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i>&nbsp;Reply</a>
                                </div>
                                <div class="comment-time">8 MINS AGO</div>
                                <div class="text">
                                    <p>The days are all Happy and Free these days you wanna be where everybody knows
                                        your name fish do to no burn on the grill took a whole lotta trying just to
                                        get
                                        up that wet floor.</p>
                                </div>
                            </div>
                            <div class="single-comment replay">
                                <div class="img-box">
                                    <figure><img src="images/news/c2.jpg" alt=""></figure>
                                </div>
                                <div class="comment-title">MARIA WILLIAMS</div>
                                <div class="replay"><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i>&nbsp;Reply</a>
                                </div>
                                <div class="comment-time">2 MINS AGO</div>
                                <div class="text">
                                    <p>The days are all Happy and Free these days you wanna be where everybody knows
                                        your as on the grill took a whole lotta trying just to get up that wet
                                        floor.</p>
                                </div>
                            </div>
                            <div class="single-comment">
                                <div class="img-box">
                                    <figure><img src="images/news/c3.jpg" alt=""></figure>
                                </div>
                                <div class="comment-title">NIA JASS</div>
                                <div class="replay"><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i>&nbsp;Reply</a>
                                </div>
                                <div class="comment-time">5 MINS AGO</div>
                                <div class="text">
                                    <p>The days are all Happy and Free these days you wanna be where everybody knows
                                        your name fish do to no burn on the grill took a whole lotta trying just to
                                        get
                                        up that wet floor.</p>
                                </div>
                            </div>
                            <div class="single-comment replay">
                                <div class="img-box">
                                    <figure><img src="images/news/c4.jpg" alt=""></figure>
                                </div>
                                <div class="comment-title">JASON ROY</div>
                                <div class="replay"><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i>&nbsp;Reply</a>
                                </div>
                                <div class="comment-time">1 WEEK AGO</div>
                                <div class="text">
                                    <p>The days are all Happy and Free these days you wanna be where everybody knows
                                        your as on the grill took a whole lotta trying just to get up that wet
                                        floor.</p>
                                </div>
                            </div>
                        </div>
                        <div class="comment-form">
                            <div class="title-text-two">WRITE YOUR COMMENTS</div>
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <textarea placeholder="Enter your comments here..." name="message"
                                                  required=""></textarea>
                                    </div>
                                    <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                        <input type="text" name="name" value="" placeholder="Name" required="">
                                    </div>
                                    <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                        <input type="email" name="email" value="" placeholder="Email" required="">
                                    </div>
                                    <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                        <input type="text" name="subject" value="" placeholder="Website"
                                               required="">
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <button type="submit" class="btn-one">POST COMMENT</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


				<?php get_sidebar() ?>
            </div>
        </div>
    </section>
    <!-- blog side end -->

<?php
get_footer();
