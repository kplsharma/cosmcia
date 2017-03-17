<?php
function cosmica_get_theme_var() {
    $cosmica_theme_data = array(
        'hide_slider'                 => get_theme_mod('cosmica_hide_slider', false),
        'social_link_open_in_new_tab' => get_theme_mod('social_link_open_in_new_tab', true),
        'social_link_facebook'        => get_theme_mod('social_link_facebook', esc_url('#')),
        'social_link_google'          => get_theme_mod('social_link_google', esc_url('#')),
        'social_link_youtube'         => get_theme_mod('social_link_youtube', esc_url('#')),
        'social_link_twitter'         => get_theme_mod('social_link_twitter', esc_url('#')),
        'social_link_linkedin'        => get_theme_mod('social_link_linkedin', esc_url('#')),
        'contact_email'               => get_theme_mod('contact_email', 'email@exapmle.com'),
        'contact_phone'               => get_theme_mod('contact_phone', '000-000-0000'),
        'cosmca_copyright_text'       => get_theme_mod('cosmca_copyright_text', '<div class="copyright"> ' . esc_html('&copy ' . date("Y")) . ' <a href="' . esc_url(get_site_url()) . '" title="' . esc_attr(get_bloginfo('name')) . '"><span>' . esc_html(get_bloginfo('name')) . '</span></a> |  ' . __('Theme by', 'cosmica') . ': <a href="' . esc_url('http://www.codeins.org') . '" target="_blank" title="Codeins"><span>Codeins</span></a> | ' . __('Proudly Powered by', 'cosmica') . ': <a href="' . esc_url('http://WordPress.org') . '" target="_blank" title="WordPress"><span>WordPress</span></a> </div>'),
        'cosmca_call_header_text'     => get_theme_mod('cosmca_call_header_text', __('Our Callout', 'cosmica')),
        'cosmca_call_desc_text'       => get_theme_mod('cosmca_call_desc_text', __('Callout Section Description', 'cosmica')),
        'cosmca_call_bt1_text'        => get_theme_mod('cosmca_call_bt1_text', __('Purchase Theme', 'cosmica')),
        'cosmca_call_bt1_link'        => get_theme_mod('cosmca_call_bt1_link', esc_url('#')),
        'cosmca_call_bt2_text'        => get_theme_mod('cosmca_call_bt2_text', __('See Details', 'cosmica')),
        'cosmca_call_bt2_link'        => get_theme_mod('cosmca_call_bt2_link', esc_url('#')),
        'cosmca_services_header_text' => get_theme_mod('cosmca_services_header_text', __('Awesome Services', 'cosmica')),
        'cosmca_services_desc_text'   => get_theme_mod('cosmca_services_desc_text', __('Services Section Description', 'cosmica')),
        'cosmca_services_1_title'     => get_theme_mod('cosmca_services_1_title', __('Service 1', 'cosmica')),
        'cosmca_services_1_desc'      => get_theme_mod('cosmca_services_1_desc', __('Cosmica is Multipurpose Responsive WordPress theme for any business.', 'cosmica')),
        'cosmca_services_2_title'     => get_theme_mod('cosmca_services_2_title', __('Service 2', 'cosmica')),
        'cosmca_services_2_desc'      => get_theme_mod('cosmca_services_2_desc', __('Cosmica is Multipurpose Responsive WordPress theme for any business.', 'cosmica')),
        'cosmca_services_3_title'     => get_theme_mod('cosmca_services_3_title', __('Service 3', 'cosmica')),
        'cosmca_services_3_desc'      => get_theme_mod('cosmca_services_3_desc', __('Cosmica is Multipurpose Responsive WordPress theme for any business.', 'cosmica')),
        'cosmca_services_4_title'     => get_theme_mod('cosmca_services_4_title', __('Service 4', 'cosmica')),
        'cosmca_services_4_desc'      => get_theme_mod('cosmca_services_4_desc', __('Cosmica is Multipurpose Responsive WordPress theme for any business.', 'cosmica')),
        'cosmca_services_5_title'     => get_theme_mod('cosmca_services_5_title', __('Service 5', 'cosmica')),
        'cosmca_services_5_desc'      => get_theme_mod('cosmca_services_5_desc', __('Cosmica is Multipurpose Responsive WordPress theme for any business.', 'cosmica')),
        'cosmca_services_6_title'     => get_theme_mod('cosmca_services_6_title', __('Service 6', 'cosmica')),
        'cosmca_services_6_desc'      => get_theme_mod('cosmca_services_6_desc', __('Cosmica is Multipurpose Responsive WordPress theme for any business.', 'cosmica')),

        //slider
        'cosmica_slide_1_heading'     => get_theme_mod('cosmica_slide_1_heading', __('<span> COSMICA </span> Responsive Theme', 'cosmica')),
        'cosmica_slide_1_description' => get_theme_mod('cosmica_slide_1_description', __('Cosmica is Multipurpose Responsive WordPress theme for any business.', 'cosmica')),
        'cosmica_slide_1_bt_1_link'   => get_theme_mod('cosmica_slide_1_bt_1_link', '#'),
        'cosmica_slide_1_bt_2_link'   => get_theme_mod('cosmica_slide_1_bt_2_link', '#'),

        'cosmica_slide_2_heading'     => get_theme_mod('cosmica_slide_2_heading', __('<span> COSMICA </span> Responsive Theme', 'cosmica')),
        'cosmica_slide_2_description' => get_theme_mod('cosmica_slide_2_description', __('Cosmica is Multipurpose Responsive WordPress theme for any business.', 'cosmica')),
        'cosmica_slide_2_bt_1_link'   => get_theme_mod('cosmica_slide_2_bt_1_link', '#'),
        'cosmica_slide_2_bt_2_link'   => get_theme_mod('cosmica_slide_2_bt_2_link', '#'),

        'cosmica_slide_3_heading'     => get_theme_mod('cosmica_slide_3_heading', __('<span> COSMICA </span> Responsive Theme', 'cosmica')),
        'cosmica_slide_3_description' => get_theme_mod('cosmica_slide_3_description', __('Cosmica is Multipurpose Responsive WordPress theme for any business.', 'cosmica')),
        'cosmica_slide_3_bt_1_link'   => get_theme_mod('cosmica_slide_3_bt_1_link', '#'),
        'cosmica_slide_3_bt_2_link'   => get_theme_mod('cosmica_slide_3_bt_2_link', '#'),

        'cosmica_slide_4_heading'     => get_theme_mod('cosmica_slide_4_heading', __('<span> COSMICA </span> Responsive Theme', 'cosmica')),
        'cosmica_slide_4_description' => get_theme_mod('cosmica_slide_4_description', __('Cosmica is Multipurpose Responsive WordPress theme for any business.', 'cosmica')),
        'cosmica_slide_4_bt_1_link'   => get_theme_mod('cosmica_slide_4_bt_1_link', '#'),
        'cosmica_slide_4_bt_2_link'   => get_theme_mod('cosmica_slide_4_bt_2_link', '#'),

    );
    return $cosmica_theme_data;
}
?>
