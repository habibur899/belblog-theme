<div class="col-md-3 col-sm-12 col-xs-12 sidebar-side">
    <div class="sidebar-content">
	    <?php
            if (is_active_sidebar('main-sidebar')){
                dynamic_sidebar('main-sidebar');
            }
        ?>



        <div class="sidebar-instagram">
            <div class="sidebar-title">INSTAGRAM</div>
            <ul class="img-list clearfix">
                <li>
                    <figure class="img-box"><a href="#"><img
                                    src="<?php echo get_template_directory_uri() ?>/images/home/i1.jpg"
                                    alt=""></a></figure>
                </li>
                <li>
                    <figure class="img-box"><a href="#"><img
                                    src="<?php echo get_template_directory_uri() ?>/images/home/i2.jpg"
                                    alt=""></a></figure>
                </li>
                <li>
                    <figure class="img-box"><a href="#"><img
                                    src="<?php echo get_template_directory_uri() ?>/images/home/i3.jpg"
                                    alt=""></a></figure>
                </li>
                <li>
                    <figure class="img-box"><a href="#"><img
                                    src="<?php echo get_template_directory_uri() ?>/images/home/i4.jpg"
                                    alt=""></a></figure>
                </li>
                <li>
                    <figure class="img-box"><a href="#"><img
                                    src="<?php echo get_template_directory_uri() ?>/images/home/i5.jpg"
                                    alt=""></a></figure>
                </li>
                <li>
                    <figure class="img-box"><a href="#"><img
                                    src="<?php echo get_template_directory_uri() ?>/images/home/i6.jpg"
                                    alt=""></a></figure>
                </li>
            </ul>
        </div>
        <div class="sidebar-img-content">
            <div class="single-item">
                <figure class="img-box"><img
                            src="<?php echo get_template_directory_uri() ?>/images/home/12.jpg" alt="">
                </figure>
                <div class="inner-box">
                    <div class="content">
                        <div class="meta-text"><a href="#">Travel</a></div>
                    </div>
                </div>
            </div>
            <div class="single-item">
                <figure class="img-box"><img
                            src="<?php echo get_template_directory_uri() ?>/images/home/13.jpg" alt="">
                </figure>
                <div class="inner-box">
                    <div class="content">
                        <div class="meta-text"><a href="#">MUSIC</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>