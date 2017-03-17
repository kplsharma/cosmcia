<?php extract(cosmica_get_theme_var()); ?>
<?php if (!absint($hide_slider)): ?>
<!-- Slider Start -->
<div class="cosmica-slider">
	<div class="swiper-container home-slider">
		<div class="swiper-wrapper">
			<div class="swiper-slide">
				<img src="<?php echo esc_url(get_theme_mod('cosmica_slide_image1', COSMICA_URI . '/images/slides/slide1.jpg')); ?>" class="img-responsive"/>
				<div class="overlay"></div>
				<div class="carousel-caption">
					<div class="slide-heading animation animated-item-1"><h1><?php echo wp_kses_post($cosmica_slide_1_heading); ?></h1></div>
					<div class="slide-description animation animated-item-2"><p><?php echo wp_kses_post($cosmica_slide_1_description); ?></p></div>
					<div class="buttons-con">
                        <a href="<?php echo esc_url($cosmica_slide_1_bt_1_link); ?>" class="button button-main button-info animation animated-item-3" id="banner-action-two"> <?php echo esc_html(get_theme_mod('cosmica_slide_1_bt_1_text', __('Read More', 'cosmica')));?></a>
                        <a href="<?php echo esc_url($cosmica_slide_1_bt_2_link); ?>" class="button button-main button-sun animation animated-item-4"  id="banner-action-one"> <?php echo esc_html(get_theme_mod('cosmica_slide_1_bt_2_text', __('Buy Now', 'cosmica')));?></a>
                    </div>
				</div>
			</div>
			<div class="swiper-slide">
				<img src="<?php echo esc_url(get_theme_mod('cosmica_slide_image2', COSMICA_URI . '/images/slides/slide2.jpg')); ?>" class="img-responsive"/>
				<div class="overlay"></div>
				<div class="carousel-caption">
					<div class="slide-heading animation animated-item-1"><h1><?php echo wp_kses_post($cosmica_slide_2_heading); ?></h1></div>
					<div class="slide-description animation animated-item-2"><p><?php echo wp_kses_post($cosmica_slide_2_description); ?></p></div>
					<div class="buttons-con">
                        <a href="<?php echo esc_url($cosmica_slide_2_bt_1_link); ?>" class="button button-main button-info animation animated-item-3" id="banner-action-two"> <?php echo esc_html(get_theme_mod('cosmica_slide_2_bt_1_text', __('Read More', 'cosmica')));?> </a>
                        <a href="<?php echo esc_url($cosmica_slide_2_bt_2_link); ?>" class="button button-main button-sun animation animated-item-4"  id="banner-action-one"> <?php echo esc_html(get_theme_mod('cosmica_slide_2_bt_2_text', __('Buy Now', 'cosmica')));?> </a>
                    </div>
				</div>
			</div>
			<div class="swiper-slide">
				<img src="<?php echo esc_url(get_theme_mod('cosmica_slide_image3', COSMICA_URI . '/images/slides/slide3.jpg')); ?>" class="img-responsive"/>
				<div class="overlay"></div>
				<div class="carousel-caption">
					<div class="slide-heading animation animated-item-1"><h1><?php echo wp_kses_post($cosmica_slide_3_heading); ?></h1></div>
					<div class="slide-description animation animated-item-2"><p><?php echo wp_kses_post($cosmica_slide_3_description); ?></p></div>
					<div class="buttons-con">
                        <a href="<?php echo esc_url($cosmica_slide_3_bt_1_link); ?>" class="button button-main button-info animation animated-item-3" id="banner-action-two"> <?php echo esc_html(get_theme_mod('cosmica_slide_3_bt_1_text', __('Read More', 'cosmica')));?> </a>
                        <a href="<?php echo esc_url($cosmica_slide_3_bt_2_link); ?>" class="button button-main button-sun animation animated-item-4"  id="banner-action-one"> <?php echo esc_html(get_theme_mod('cosmica_slide_3_bt_2_text', __('Buy Now', 'cosmica')));?> </a>
                    </div>
				</div>
			</div>
			<div class="swiper-slide">
				<img src="<?php echo esc_url(get_theme_mod('cosmica_slide_image4', COSMICA_URI . '/images/slides/slide4.jpg')); ?>" class="img-responsive"/>
				<div class="overlay"></div>
				<div class="carousel-caption">
					<div class="slide-heading animation animated-item-1"><h1><?php echo wp_kses_post($cosmica_slide_4_heading); ?></h1></div>
					<div class="slide-description animation animated-item-2"><p><?php echo wp_kses_post($cosmica_slide_4_description); ?></p></div>
					<div class="buttons-con">
                        <a href="<?php echo esc_url($cosmica_slide_4_bt_1_link); ?>" class="button button-main button-info animation animated-item-3" id="banner-action-two"> <?php echo esc_html(get_theme_mod('cosmica_slide_4_bt_1_text', __('Read More', 'cosmica')));?> </a>
                        <a href="<?php echo esc_url($cosmica_slide_4_bt_2_link); ?>" class="button button-main button-sun animation animated-item-4"  id="banner-action-one"> <?php echo esc_html(get_theme_mod('cosmica_slide_4_bt_2_text', __('Buy Now', 'cosmica')));?> </a>
                    </div>
				</div>
			</div>
		</div>
		<!-- Add Pagination -->
		<div class="swiper-pagination home-pagination"></div>
		<!-- Add Arrows -->
		<div class="swiper-button-prev home-prev"><i class="fa fa-angle-left"></i></div>
		<div class="swiper-button-next home-next"><i class="fa fa-angle-right"></i></div>
	</div>	
	<div class="cosmica-slider-shadow"></div>
</div>	
<!-- Slider End -->
<?php endif; ?>