<?php 
	
	extract(cosmica_get_theme_var());   
?>
<div class="clearfix"></div>
<div class="home-wrapper callout-wrapper">
    <div class="callout-overlay fixed-background" style="background-image:url(<?php echo esc_url(COSMICA_URI.'/images/background/home-callout.jpg'); ?>);"></div>
    <div class="container">
        <div class="section-title-heading">
			<h2 class="section-title wow zoomIn"><?php echo esc_html($cosmca_call_header_text); ?></h2>
			<div class="separator-solid"></div>
			<p class="section-description wow slideInUp"><?php echo esc_html($cosmca_call_desc_text); ?></p>
		</div>
        <div class="callout-content">
            <a href="<?php echo esc_url($cosmca_call_bt1_link); ?>" class="wow fadeInLeft button button-main button-success"><?php echo esc_html($cosmca_call_bt1_text); ?></a>
            <a href="<?php echo esc_url($cosmca_call_bt2_link); ?>" class="wow fadeInRight button button-main button-warning"><?php echo esc_html($cosmca_call_bt2_text); ?></a>
        </div>
	</div>
</div>
