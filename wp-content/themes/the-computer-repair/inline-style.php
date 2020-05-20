<?php

	$the_computer_repair_first_color = get_theme_mod('the_computer_repair_first_color');

	$custom_css = '';

	/*------------------------------ Global First Color -----------*/
	
	if($the_computer_repair_first_color != false){
		$custom_css .='.cart-value,.top-btn a,.more-btn a,input[type="submit"],#sidebar h3,.pagination .current,.pagination a:hover,#sidebar .custom-social-icons i, #footer .custom-social-icons i,#sidebar .tagcloud a:hover,#footer .tagcloud a:hover,#footer-2,#slider .carousel-control-prev-icon:hover, #slider .carousel-control-next-icon:hover,.box-content:hover a,#comments input[type="submit"],nav.woocommerce-MyAccount-navigation ul li,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .scrollup i, #comments a.comment-reply-link, .toggle-nav i, #sidebar .widget_price_filter .ui-slider .ui-slider-range, #sidebar .widget_price_filter .ui-slider .ui-slider-handle, #sidebar .woocommerce-product-search button, #footer .widget_price_filter .ui-slider .ui-slider-range, #footer .widget_price_filter .ui-slider .ui-slider-handle, #footer .woocommerce-product-search button, #footer a.custom_read_more, #sidebar a.custom_read_more{';
			$custom_css .='background-color: '.esc_html($the_computer_repair_first_color).';';
		$custom_css .='}';
	}
	if($the_computer_repair_first_color != false){
		$custom_css .='#slider .carousel-control-prev-icon:hover, #slider .carousel-control-next-icon:hover,.box-content:hover{';
			$custom_css .='border-color: '.esc_html($the_computer_repair_first_color).';';
		$custom_css .='}';
	}
	if($the_computer_repair_first_color != false){
		$custom_css .='a ,.lower-bar i,.post-main-box:hover h2,#sidebar ul li a:hover,#footer .custom-social-icons i:hover, #footer li a:hover, .post-navigation a:hover .post-title, .post-navigation a:focus .post-title,.post-main-box:hover h2 a, .entry-content a, .sidebar .textwidget p a, .textwidget p a, #comments p a, .slider .inner_carousel p a, .main-navigation ul.sub-menu a:hover, .main-navigation a:hover, #footer a.custom_read_more:hover{';
			$custom_css .='color: '.esc_html($the_computer_repair_first_color).';';
		$custom_css .='}';
	}	
	if($the_computer_repair_first_color != false){
		$custom_css .='.main-navigation ul ul{';
			$custom_css .='border-top-color: '.esc_html($the_computer_repair_first_color).';';
		$custom_css .='}';
	}
	if($the_computer_repair_first_color != false){
		$custom_css .='.lower-bar,#footer h3:after,.heading-box hr, .header-fixed, .main-navigation ul ul{';
			$custom_css .='border-bottom-color: '.esc_html($the_computer_repair_first_color).';';
		$custom_css .='}';
	}

	$custom_css .='@media screen and (max-width:1000px) {';
		if($the_computer_repair_first_color != false){
			$custom_css .='.search-box i{
			background-color:'.esc_html($the_computer_repair_first_color).';
			}';
		}
	$custom_css .='}';

	/*---------------------------Width Layout -------------------*/

	$theme_lay = get_theme_mod( 'the_computer_repair_width_option','Full Width');
    if($theme_lay == 'Boxed'){
		$custom_css .='body{';
			$custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$custom_css .='}';
	}else if($theme_lay == 'Wide Width'){
		$custom_css .='body{';
			$custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$custom_css .='}';
	}else if($theme_lay == 'Full Width'){
		$custom_css .='body{';
			$custom_css .='max-width: 100%;';
		$custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$theme_lay = get_theme_mod( 'the_computer_repair_slider_opacity_color','0.5');
	if($theme_lay == '0'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0';
		$custom_css .='}';
		}else if($theme_lay == '0.1'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.1';
		$custom_css .='}';
		}else if($theme_lay == '0.2'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.2';
		$custom_css .='}';
		}else if($theme_lay == '0.3'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.3';
		$custom_css .='}';
		}else if($theme_lay == '0.4'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.4';
		$custom_css .='}';
		}else if($theme_lay == '0.5'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.5';
		$custom_css .='}';
		}else if($theme_lay == '0.6'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.6';
		$custom_css .='}';
		}else if($theme_lay == '0.7'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.7';
		$custom_css .='}';
		}else if($theme_lay == '0.8'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.8';
		$custom_css .='}';
		}else if($theme_lay == '0.9'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.9';
		$custom_css .='}';
		}

	/*---------------------------Slider Content Layout -------------------*/

	$theme_lay = get_theme_mod( 'the_computer_repair_slider_content_option','Left');
    if($theme_lay == 'Left'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$custom_css .='text-align:left; left:10%; right:55%;';
		$custom_css .='}';
	}else if($theme_lay == 'Center'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$custom_css .='text-align:center; left:20%; right:20%;';
		$custom_css .='}';
	}else if($theme_lay == 'Right'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$custom_css .='text-align:right; left:55%; right:10%;';
		$custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/

	$theme_lay = get_theme_mod( 'the_computer_repair_blog_layout_option','Default');
    if($theme_lay == 'Default'){
		$custom_css .='.post-main-box{';
			$custom_css .='';
		$custom_css .='}';
	}else if($theme_lay == 'Center'){
		$custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn{';
			$custom_css .='text-align:center;';
		$custom_css .='}';
		$custom_css .='.post-info{';
			$custom_css .='margin-top:10px;';
		$custom_css .='}';
		$custom_css .='.post-info hr{';
			$custom_css .='margin:10px auto;';
		$custom_css .='}';
	}else if($theme_lay == 'Left'){
		$custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn, #our-services p{';
			$custom_css .='text-align:Left;';
		$custom_css .='}';
		$custom_css .='.post-info hr{';
			$custom_css .='margin-bottom:10px;';
		$custom_css .='}';
		$custom_css .='.post-main-box h2{';
			$custom_css .='margin-top:10px;';
		$custom_css .='}';
	}

	/*------------------------------Responsive Media -----------------------*/

	$topbar = get_theme_mod( 'the_computer_repair_resp_topbar_hide_show',false);
    if($topbar == true){
    	$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='.lower-bar{';
			$custom_css .='display:block;';
		$custom_css .='} }';
	}else if($topbar == false){
		$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='.lower-bar{';
			$custom_css .='display:none;';
		$custom_css .='} }';
	}

	$stickyheader = get_theme_mod( 'the_computer_repair_stickyheader_hide_show',false);
    if($stickyheader == true){
    	$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='.header-fixed{';
			$custom_css .='display:block;';
		$custom_css .='} }';
	}else if($stickyheader == false){
		$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='.header-fixed{';
			$custom_css .='display:none;';
		$custom_css .='} }';
	}

	$stickyheader = get_theme_mod( 'the_computer_repair_resp_slider_hide_show',false);
    if($stickyheader == true){
    	$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='#slider{';
			$custom_css .='display:block;';
		$custom_css .='} }';
	}else if($stickyheader == false){
		$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='#slider{';
			$custom_css .='display:none;';
		$custom_css .='} }';
	}

	$metabox = get_theme_mod( 'the_computer_repair_metabox_hide_show',true);
    if($metabox == true){
    	$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='.post-info{';
			$custom_css .='display:block;';
		$custom_css .='} }';
	}else if($metabox == false){
		$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='.post-info{';
			$custom_css .='display:none;';
		$custom_css .='} }';
	}

	$sidebar = get_theme_mod( 'the_computer_repair_sidebar_hide_show',true);
    if($sidebar == true){
    	$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='#sidebar{';
			$custom_css .='display:block;';
		$custom_css .='} }';
	}else if($sidebar == false){
		$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='#sidebar{';
			$custom_css .='display:none;';
		$custom_css .='} }';
	}

	/*------------- Top Bar Settings ------------------*/

	$the_computer_repair_topbar_padding_top_bottom = get_theme_mod('the_computer_repair_topbar_padding_top_bottom');
	if($the_computer_repair_topbar_padding_top_bottom != false){
		$custom_css .='.lower-bar{';
			$custom_css .='padding-top: '.esc_html($the_computer_repair_topbar_padding_top_bottom).'; padding-bottom: '.esc_html($the_computer_repair_topbar_padding_top_bottom).';';
		$custom_css .='}';
	}

	/*------------------ Search Settings -----------------*/
	
	$the_computer_repair_search_padding_top_bottom = get_theme_mod('the_computer_repair_search_padding_top_bottom');
	$the_computer_repair_search_padding_left_right = get_theme_mod('the_computer_repair_search_padding_left_right');
	$the_computer_repair_search_font_size = get_theme_mod('the_computer_repair_search_font_size');
	$the_computer_repair_search_border_radius = get_theme_mod('the_computer_repair_search_border_radius');
	if($the_computer_repair_search_padding_top_bottom != false || $the_computer_repair_search_padding_left_right != false || $the_computer_repair_search_font_size != false || $the_computer_repair_search_border_radius != false){
		$custom_css .='.search-box i{';
			$custom_css .='padding-top: '.esc_html($the_computer_repair_search_padding_top_bottom).'; padding-bottom: '.esc_html($the_computer_repair_search_padding_top_bottom).';padding-left: '.esc_html($the_computer_repair_search_padding_left_right).';padding-right: '.esc_html($the_computer_repair_search_padding_left_right).';font-size: '.esc_html($the_computer_repair_search_font_size).';border-radius: '.esc_html($the_computer_repair_search_border_radius).'px;';
		$custom_css .='}';
	}

	/*---------------- Button Settings ------------------*/

	$the_computer_repair_button_padding_top_bottom = get_theme_mod('the_computer_repair_button_padding_top_bottom');
	$the_computer_repair_button_padding_left_right = get_theme_mod('the_computer_repair_button_padding_left_right');
	if($the_computer_repair_button_padding_top_bottom != false || $the_computer_repair_button_padding_left_right != false){
		$custom_css .='.post-main-box .more-btn a{';
			$custom_css .='padding-top: '.esc_html($the_computer_repair_button_padding_top_bottom).'; padding-bottom: '.esc_html($the_computer_repair_button_padding_top_bottom).';padding-left: '.esc_html($the_computer_repair_button_padding_left_right).';padding-right: '.esc_html($the_computer_repair_button_padding_left_right).';';
		$custom_css .='}';
	}

	$the_computer_repair_button_border_radius = get_theme_mod('the_computer_repair_button_border_radius');
	if($the_computer_repair_button_border_radius != false){
		$custom_css .='.post-main-box .more-btn a{';
			$custom_css .='border-radius: '.esc_html($the_computer_repair_button_border_radius).'px;';
		$custom_css .='}';
	}

	/*-------------- Copyright Alignment ----------------*/

	$the_computer_repair_copyright_alingment = get_theme_mod('the_computer_repair_copyright_alingment');
	if($the_computer_repair_copyright_alingment != false){
		$custom_css .='.copyright p{';
			$custom_css .='text-align: '.esc_html($the_computer_repair_copyright_alingment).';';
		$custom_css .='}';
	}

	$the_computer_repair_copyright_padding_top_bottom = get_theme_mod('the_computer_repair_copyright_padding_top_bottom');
	if($the_computer_repair_copyright_padding_top_bottom != false){
		$custom_css .='#footer-2{';
			$custom_css .='padding-top: '.esc_html($the_computer_repair_copyright_padding_top_bottom).'; padding-bottom: '.esc_html($the_computer_repair_copyright_padding_top_bottom).';';
		$custom_css .='}';
	}