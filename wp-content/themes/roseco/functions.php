<?php
if (!function_exists('roseco_setup')):

	function roseco_setup() {

		/*
			     * Make theme available for translation.
			     * Translations can be filed in the /languages/ directory.
		*/
		/* Pinegrow generated Load Text Domain Begin */
		load_theme_textdomain('roseco', get_template_directory() . '/languages');
		/* Pinegrow generated Load Text Domain End */

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
			     * Let WordPress manage the document title.
		*/
		add_theme_support('title-tag');

		/*
			     * Enable support for Post Thumbnails on posts and pages.
		*/
		add_theme_support('post-thumbnails');
		set_post_thumbnail_size(825, 510, true);

		// Add menus.
		register_nav_menus(array(
			'primary' => __('Primary Menu', 'roseco'),
			'social' => __('Social Links Menu', 'roseco'),
		));

		/*
			     * Switch default core markup for search form, comment form, and comments
			     * to output valid HTML5.
		*/
		add_theme_support('html5', array(
			'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
		));

		/*
			     * Enable support for Post Formats.
		*/
		add_theme_support('post-formats', array(
			'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat',
		));
	}
endif; // roseco_setup

add_action('after_setup_theme', 'roseco_setup');

if (!function_exists('roseco_init')):

	function roseco_init() {

		// Use categories and tags with attachments
		register_taxonomy_for_object_type('category', 'attachment');
		register_taxonomy_for_object_type('post_tag', 'attachment');

		/*
			     * Register custom post types. You can also move this code to a plugin.
		*/
		/* Pinegrow generated Custom Post Types Begin */

		register_post_type('objects_pri', array(
			'labels' => array(
				'name' => __('Статьи на главной', 'roseco'),
			),
			'public' => true,
			'hierarchical' => true,
			'supports' => array('author', 'thumbnail', 'title', 'editor', 'trackbacks', 'excerpt', 'custom-fields', 'comments', 'page-attributes', 'post-formats'),
			'has_archive' => true,
			'menu_icon' => 'dashicons-image-filter',
			'menu_position' => 20,
		));

		/* Pinegrow generated Custom Post Types End */

		/*
			     * Register custom taxonomies. You can also move this code to a plugin.
		*/
		/* Pinegrow generated Taxonomies Begin */

		register_taxonomy('objects_pri_cat', 'objects_pri', array(
			'labels' => array(
				'name' => __('Категории', 'roseco'),
			),
			'hierarchical' => true,
		));

		/* Pinegrow generated Taxonomies End */

	}
endif; // roseco_setup

add_action('init', 'roseco_init');

if (!function_exists('roseco_widgets_init')):

	function roseco_widgets_init() {

		/*
			     * Register widget areas.
		*/
		/* Pinegrow generated Register Sidebars Begin */

		register_sidebar(array(
			'name' => __('Левая боковая панель', 'roseco'),
			'id' => 'left_sidebar',
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget' => '</li>',
			'before_title' => '<h3 class="widgettitle">',
			'after_title' => '</h3>',
		));

		register_sidebar(array(
			'name' => __('Footer 1-1 Widgets 1', 'roseco'),
			'id' => 'blocks_footer_1_1_widgets1',
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		));

		register_sidebar(array(
			'name' => __('Footer 1-1 Widgets 2', 'roseco'),
			'id' => 'blocks_footer_1_1_widgets2',
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		));

		register_sidebar(array(
			'name' => __('Footer 1-1 Widgets 1', 'roseco'),
			'id' => 'blocks_footer_1_1_widgets1',
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		));

		register_sidebar(array(
			'name' => __('Footer 1-1 Widgets 2', 'roseco'),
			'id' => 'blocks_footer_1_1_widgets2',
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		));

		register_sidebar(array(
			'name' => __('Левая боковая панель', 'roseco'),
			'id' => 'left_sidebar',
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget' => '</li>',
			'before_title' => '<h3 class="widgettitle">',
			'after_title' => '</h3>',
		));

		register_sidebar(array(
			'name' => __('Footer 1-1 Widgets 1', 'roseco'),
			'id' => 'blocks_footer_1_1_widgets1',
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		));

		register_sidebar(array(
			'name' => __('Footer 1-1 Widgets 2', 'roseco'),
			'id' => 'blocks_footer_1_1_widgets2',
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		));

		register_sidebar(array(
			'name' => __('Левая боковая панель', 'roseco'),
			'id' => 'left_sidebar',
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget' => '</li>',
			'before_title' => '<h3 class="widgettitle">',
			'after_title' => '</h3>',
		));

		register_sidebar(array(
			'name' => __('Footer 1-1 Widgets 1', 'roseco'),
			'id' => 'blocks_footer_1_1_widgets1',
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		));

		register_sidebar(array(
			'name' => __('Footer 1-1 Widgets 2', 'roseco'),
			'id' => 'blocks_footer_1_1_widgets2',
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		));

		register_sidebar(array(
			'name' => __('Левая боковая панель', 'roseco'),
			'id' => 'left_sidebar',
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget' => '</li>',
			'before_title' => '<h3 class="widgettitle">',
			'after_title' => '</h3>',
		));

		register_sidebar(array(
			'name' => __('Footer 1-1 Widgets 1', 'roseco'),
			'id' => 'blocks_footer_1_1_widgets1',
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		));

		register_sidebar(array(
			'name' => __('Footer 1-1 Widgets 2', 'roseco'),
			'id' => 'blocks_footer_1_1_widgets2',
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		));

		/* Pinegrow generated Register Sidebars End */
	}
	add_action('widgets_init', 'roseco_widgets_init');
endif; // roseco_widgets_init

if (!function_exists('roseco_customize_register')):

	function roseco_customize_register($wp_customize) {
		// Do stuff with $wp_customize, the WP_Customize_Manager object.

		/* Pinegrow generated Customizer Controls Begin */

		require_once "inc/blocks/wp_blocks_customizer_controls.php";

		$wp_customize->add_section('blocks_header_1', array(
			'title' => __('Header', 'roseco'),
		));

		$wp_customize->add_setting('blocks_header_1_logo', array(
			'type' => 'theme_mod',
		));

		$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'blocks_header_1_logo', array(
			'label' => __('Logo', 'roseco'),
			'type' => 'media',
			'mime_type' => 'image',
			'section' => 'blocks_header_1',
		)));

		$wp_customize->add_setting('header_phone1', array(
			'type' => 'theme_mod',
			'default' => '8 (800) 333-79-89',
		));

		$wp_customize->add_control('header_phone1', array(
			'label' => __('Телефон №1', 'roseco'),
			'type' => 'text',
			'section' => 'blocks_header_1',
		));

		$wp_customize->add_setting('header_phone1_label', array(
			'type' => 'theme_mod',
			'default' => 'Звонок из любого региона бесплатно!',
		));

		$wp_customize->add_control('header_phone1_label', array(
			'label' => __('Подпись к 1 телефону', 'roseco'),
			'type' => 'text',
			'section' => 'blocks_header_1',
		));

		$wp_customize->add_setting('header_phone2', array(
			'type' => 'theme_mod',
			'default' => '+7 (812) 336-42-82',
		));

		$wp_customize->add_control('header_phone2', array(
			'label' => __('Телефон №2', 'roseco'),
			'type' => 'text',
			'section' => 'blocks_header_1',
		));

		$wp_customize->add_setting('header_phone2_label', array(
			'type' => 'theme_mod',
			'default' => 'телефон в г.Санкт-Петербург',
		));

		$wp_customize->add_control('header_phone2_label', array(
			'label' => __('Подпись к 2 телефону', 'roseco'),
			'type' => 'text',
			'section' => 'blocks_header_1',
		));

		$wp_customize->add_section('blocks_footer_1_1', array(
			'title' => __('Footer 1-1', 'roseco'),
		));

		$wp_customize->add_setting('blocks_footer_1_1_image', array(
			'type' => 'theme_mod',
		));

		$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'blocks_footer_1_1_image', array(
			'label' => __('Image', 'roseco'),
			'type' => 'media',
			'mime_type' => 'image',
			'section' => 'blocks_footer_1_1',
		)));

		$wp_customize->add_setting('blocks_footer_1_1_title', array(
			'type' => 'theme_mod',
			'default' => 'Комплексное обследование зданий и сооружений',
		));

		$wp_customize->add_control('blocks_footer_1_1_title', array(
			'label' => __('Title', 'roseco'),
			'type' => 'textarea',
			'section' => 'blocks_footer_1_1',
		));

		$wp_customize->add_setting('blocks_footer_1_1_subtitle', array(
			'type' => 'theme_mod',
			'default' => 'в Санкт-Петербурге и области',
		));

		$wp_customize->add_control('blocks_footer_1_1_subtitle', array(
			'label' => __('Subtitle', 'roseco'),
			'type' => 'textarea',
			'section' => 'blocks_footer_1_1',
		));

		$wp_customize->add_section('blocks_header_1', array(
			'title' => __('Header', 'roseco'),
		));

		$wp_customize->add_setting('blocks_header_1_logo', array(
			'type' => 'theme_mod',
		));

		$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'blocks_header_1_logo', array(
			'label' => __('Logo', 'roseco'),
			'type' => 'media',
			'mime_type' => 'image',
			'section' => 'blocks_header_1',
		)));

		$wp_customize->add_setting('header_phone1', array(
			'type' => 'theme_mod',
			'default' => '8 (800) 333-79-89',
		));

		$wp_customize->add_control('header_phone1', array(
			'label' => __('Телефон №1', 'roseco'),
			'type' => 'text',
			'section' => 'blocks_header_1',
		));

		$wp_customize->add_setting('header_phone1_label', array(
			'type' => 'theme_mod',
			'default' => 'Звонок из любого региона бесплатно!',
		));

		$wp_customize->add_control('header_phone1_label', array(
			'label' => __('Подпись к 1 телефону', 'roseco'),
			'type' => 'text',
			'section' => 'blocks_header_1',
		));

		$wp_customize->add_setting('header_phone2', array(
			'type' => 'theme_mod',
			'default' => '+7 (812) 336-42-82',
		));

		$wp_customize->add_control('header_phone2', array(
			'label' => __('Телефон №2', 'roseco'),
			'type' => 'text',
			'section' => 'blocks_header_1',
		));

		$wp_customize->add_setting('header_phone2_label', array(
			'type' => 'theme_mod',
			'default' => 'телефон в г.Санкт-Петербург',
		));

		$wp_customize->add_control('header_phone2_label', array(
			'label' => __('Подпись к 2 телефону', 'roseco'),
			'type' => 'text',
			'section' => 'blocks_header_1',
		));

		$wp_customize->add_section('blocks_promo3', array(
			'title' => __('Верхний блок на главной', 'roseco'),
		));

		$wp_customize->add_setting('blocks_promo3_bck', array(
			'type' => 'theme_mod',
		));

		$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'blocks_promo3_bck', array(
			'label' => __('Background image', 'roseco'),
			'type' => 'media',
			'mime_type' => 'image',
			'section' => 'blocks_promo3',
		)));

		$wp_customize->add_setting('blocks_promo3_title', array(
			'type' => 'theme_mod',
			'default' => 'КОМПЛЕКСНОЕ ОБСЛЕДОВАНИЕ&nbsp;ЗДАНИЙ И СООРУЖЕНИЙ',
		));

		$wp_customize->add_control('blocks_promo3_title', array(
			'label' => __('Заголовок', 'roseco'),
			'type' => 'text',
			'section' => 'blocks_promo3',
		));

		$wp_customize->add_setting('blocks_promo3_subtitle', array(
			'type' => 'theme_mod',
			'default' => 'в Санкт-Петербурге и области',
		));

		$wp_customize->add_control('blocks_promo3_subtitle', array(
			'label' => __('Подзаголовок', 'roseco'),
			'type' => 'text',
			'section' => 'blocks_promo3',
		));

		$wp_customize->add_setting('header_feature_1_img', array(
			'type' => 'theme_mod',
		));

		$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'header_feature_1_img', array(
			'label' => __('Иконка преимущества 1', 'roseco'),
			'type' => 'media',
			'mime_type' => 'image',
			'section' => 'blocks_promo3',
		)));

		$wp_customize->add_setting('header_feature_1_txt', array(
			'type' => 'theme_mod',
			'default' => 'Расчет стоимости в течении 1 дня',
		));

		$wp_customize->add_control('header_feature_1_txt', array(
			'label' => __('Текст преимущества 1', 'roseco'),
			'type' => 'text',
			'section' => 'blocks_promo3',
		));

		$wp_customize->add_setting('header_feature_2_img', array(
			'type' => 'theme_mod',
		));

		$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'header_feature_2_img', array(
			'label' => __('Иконка преимущества 2', 'roseco'),
			'type' => 'media',
			'mime_type' => 'image',
			'section' => 'blocks_promo3',
		)));

		$wp_customize->add_setting('header_feature_2_txt', array(
			'type' => 'theme_mod',
			'default' => 'Расчет стоимости в течении 1 дня',
		));

		$wp_customize->add_control('header_feature_2_txt', array(
			'label' => __('Текст преимущества 2', 'roseco'),
			'type' => 'text',
			'section' => 'blocks_promo3',
		));

		$wp_customize->add_setting('header_feature_3_img', array(
			'type' => 'theme_mod',
		));

		$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'header_feature_3_img', array(
			'label' => __('Иконка преимущества 3', 'roseco'),
			'type' => 'media',
			'mime_type' => 'image',
			'section' => 'blocks_promo3',
		)));

		$wp_customize->add_setting('header_feature_3_txt', array(
			'type' => 'theme_mod',
			'default' => 'Расчет стоимости в течении 1 дня',
		));

		$wp_customize->add_control('header_feature_3_txt', array(
			'label' => __('Текст преимущества 3', 'roseco'),
			'type' => 'text',
			'section' => 'blocks_promo3',
		));

		$wp_customize->add_section('blocks_content_1_9', array(
			'title' => __('Content 1-9', 'roseco'),
		));

		$wp_customize->add_setting('big_feature_1_ico', array(
			'type' => 'theme_mod',
			'default' => 'fa fa-rocket',
		));

		$wp_customize->add_control('big_feature_1_ico', array(
			'label' => __('Иконка блока преимущества 1', 'roseco'),
			'description' => __('http://fontawesome.io/', 'roseco'),
			'type' => 'text',
			'section' => 'blocks_promo3',
		));

		$wp_customize->add_setting('big_feature_1_title', array(
			'type' => 'theme_mod',
			'default' => 'Оперативные <br>сроки работ',
		));

		$wp_customize->add_control('big_feature_1_title', array(
			'label' => __('Заголовок  блока преимущества 1', 'roseco'),
			'type' => 'text',
			'section' => 'blocks_promo3',
		));

		$wp_customize->add_setting('big_feature_1_content', array(
			'type' => 'theme_mod',
			'default' => 'Наши специалисты знают свою работу. Все процессы четко поставлены и не займут много времени',
		));

		$wp_customize->add_control('big_feature_1_content', array(
			'label' => __('Текст  блока преимущества 1', 'roseco'),
			'type' => 'textarea',
			'section' => 'blocks_promo3',
		));

		$wp_customize->add_setting('big_feature_2_ico', array(
			'type' => 'theme_mod',
			'default' => 'fa fa-money',
		));

		$wp_customize->add_control('big_feature_2_ico', array(
			'label' => __('Иконка блока преимущества 2', 'roseco'),
			'description' => __('http://fontawesome.io/', 'roseco'),
			'type' => 'text',
			'section' => 'blocks_promo3',
		));

		$wp_customize->add_setting('big_feature_2_title', array(
			'type' => 'theme_mod',
			'default' => 'Оптимальная<br>стоимость',
		));

		$wp_customize->add_control('big_feature_2_title', array(
			'label' => __('Заголовок  блока преимущества 1', 'roseco'),
			'type' => 'text',
			'section' => 'blocks_promo3',
		));

		$wp_customize->add_setting('big_feature_2_content', array(
			'type' => 'theme_mod',
			'default' => 'Критерий "цена/качество" - это основа нашей компании. Разумные деньги за высокий уровень услуг<br>',
		));

		$wp_customize->add_control('big_feature_2_content', array(
			'label' => __('Текст  блока преимущества 2', 'roseco'),
			'type' => 'textarea',
			'section' => 'blocks_promo3',
		));

		$wp_customize->add_setting('big_feature_3_ico', array(
			'type' => 'theme_mod',
			'default' => 'fa fa-file-text-o',
		));

		$wp_customize->add_control('big_feature_3_ico', array(
			'label' => __('Иконка блока преимущества 3', 'roseco'),
			'description' => __('http://fontawesome.io/', 'roseco'),
			'type' => 'text',
			'section' => 'blocks_promo3',
		));

		$wp_customize->add_setting('big_feature_3_title', array(
			'type' => 'theme_mod',
			'default' => 'Допуски и&nbsp;<br>лицензии',
		));

		$wp_customize->add_control('big_feature_3_title', array(
			'label' => __('Заголовок  блока преимущества 1', 'roseco'),
			'type' => 'text',
			'section' => 'blocks_promo3',
		));

		$wp_customize->add_setting('big_feature_3_content', array(
			'type' => 'theme_mod',
			'default' => 'Имеем лицензии и допуски на все виды выполняемых работ.&nbsp;<br>',
		));

		$wp_customize->add_control('big_feature_3_content', array(
			'label' => __('Текст  блока преимущества 3', 'roseco'),
			'type' => 'textarea',
			'section' => 'blocks_promo3',
		));

		$wp_customize->add_section('work_types', array(
			'title' => __('Виды работ с ценами', 'roseco'),
		));

		$wp_customize->add_setting('work_type_ico_1', array(
			'type' => 'theme_mod',
			'default' => 'fa fa-5x fa-eye',
		));

		$wp_customize->add_control('work_type_ico_1', array(
			'label' => __('Иконка работ #1', 'roseco'),
			'description' => __('http://fontawesome.io/', 'roseco'),
			'type' => 'text',
			'section' => 'work_types',
		));

		$wp_customize->add_setting('work_type_title_1', array(
			'type' => 'theme_mod',
			'default' => 'Инженерные изыскания',
		));

		$wp_customize->add_control('work_type_title_1', array(
			'label' => __('Заголовок вида работ №1', 'roseco'),
			'type' => 'text',
			'section' => 'work_types',
		));

		$wp_customize->add_setting('work_type_price_1', array(
			'type' => 'theme_mod',
			'default' => '3000 руб.',
		));

		$wp_customize->add_control('work_type_price_1', array(
			'label' => __('Цена за работу №1', 'roseco'),
			'type' => 'text',
			'section' => 'work_types',
		));

		$wp_customize->add_setting('work_type_button_1', array(
			'type' => 'theme_mod',
		));

		$wp_customize->add_control('work_type_button_1', array(
			'label' => __('Кнопка заказать 1', 'roseco'),
			'description' => __('Без надобности не менять!!!', 'roseco'),
			'type' => 'text',
			'section' => 'work_types',
		));

		$wp_customize->add_setting('work_type_ico_2', array(
			'type' => 'theme_mod',
			'default' => 'fa fa-5x fa-eye',
		));

		$wp_customize->add_control('work_type_ico_2', array(
			'label' => __('Иконка работ #2', 'roseco'),
			'description' => __('http://fontawesome.io/', 'roseco'),
			'type' => 'text',
			'section' => 'work_types',
		));

		$wp_customize->add_setting('work_type_title_2', array(
			'type' => 'theme_mod',
			'default' => 'Инженерные изыскания',
		));

		$wp_customize->add_control('work_type_title_2', array(
			'label' => __('Заголовок вида работ №2', 'roseco'),
			'type' => 'text',
			'section' => 'work_types',
		));

		$wp_customize->add_setting('work_type_price_2', array(
			'type' => 'theme_mod',
			'default' => '3000 руб.',
		));

		$wp_customize->add_control('work_type_price_2', array(
			'label' => __('Цена за работу №2', 'roseco'),
			'type' => 'text',
			'section' => 'work_types',
		));

		$wp_customize->add_setting('work_type_button_2', array(
			'type' => 'theme_mod',
		));

		$wp_customize->add_control('work_type_button_2', array(
			'label' => __('Кнопка заказать 2', 'roseco'),
			'description' => __('Без надобности не менять!!!', 'roseco'),
			'type' => 'text',
			'section' => 'work_types',
		));

		$wp_customize->add_setting('work_type_ico_3', array(
			'type' => 'theme_mod',
			'default' => 'fa fa-5x fa-eye',
		));

		$wp_customize->add_control('work_type_ico_3', array(
			'label' => __('Иконка работ #3', 'roseco'),
			'description' => __('http://fontawesome.io/', 'roseco'),
			'type' => 'text',
			'section' => 'work_types',
		));

		$wp_customize->add_setting('work_type_title_3', array(
			'type' => 'theme_mod',
			'default' => 'Инженерные изыскания',
		));

		$wp_customize->add_control('work_type_title_3', array(
			'label' => __('Заголовок вида работ №3', 'roseco'),
			'type' => 'text',
			'section' => 'work_types',
		));

		$wp_customize->add_setting('work_type_price_3', array(
			'type' => 'theme_mod',
			'default' => '3000 руб.',
		));

		$wp_customize->add_control('work_type_price_3', array(
			'label' => __('Цена за работу №3', 'roseco'),
			'type' => 'text',
			'section' => 'work_types',
		));

		$wp_customize->add_setting('work_type_button_3', array(
			'type' => 'theme_mod',
		));

		$wp_customize->add_control('work_type_button_3', array(
			'label' => __('Кнопка заказать 3', 'roseco'),
			'description' => __('Без надобности не менять!!!', 'roseco'),
			'type' => 'text',
			'section' => 'work_types',
		));

		$wp_customize->add_setting('work_type_ico_4', array(
			'type' => 'theme_mod',
			'default' => 'fa fa-5x fa-eye',
		));

		$wp_customize->add_control('work_type_ico_4', array(
			'label' => __('Иконка работ #4', 'roseco'),
			'description' => __('http://fontawesome.io/', 'roseco'),
			'type' => 'text',
			'section' => 'work_types',
		));

		$wp_customize->add_setting('work_type_title_4', array(
			'type' => 'theme_mod',
			'default' => 'Инженерные изыскания',
		));

		$wp_customize->add_control('work_type_title_4', array(
			'label' => __('Заголовок вида работ №4', 'roseco'),
			'type' => 'text',
			'section' => 'work_types',
		));

		$wp_customize->add_setting('work_type_price_4', array(
			'type' => 'theme_mod',
			'default' => '3000 руб.',
		));

		$wp_customize->add_control('work_type_price_4', array(
			'label' => __('Цена за работу №4', 'roseco'),
			'type' => 'text',
			'section' => 'work_types',
		));

		$wp_customize->add_setting('work_type_button_4', array(
			'type' => 'theme_mod',
		));

		$wp_customize->add_control('work_type_button_4', array(
			'label' => __('Кнопка заказать 4', 'roseco'),
			'description' => __('Без надобности не менять!!!', 'roseco'),
			'type' => 'text',
			'section' => 'work_types',
		));

		$wp_customize->add_setting('work_type_ico_5', array(
			'type' => 'theme_mod',
			'default' => 'fa fa-5x fa-eye',
		));

		$wp_customize->add_control('work_type_ico_5', array(
			'label' => __('Иконка работ #5', 'roseco'),
			'description' => __('http://fontawesome.io/', 'roseco'),
			'type' => 'text',
			'section' => 'work_types',
		));

		$wp_customize->add_setting('work_type_title_5', array(
			'type' => 'theme_mod',
			'default' => 'Инженерные изыскания',
		));

		$wp_customize->add_control('work_type_title_5', array(
			'label' => __('Заголовок вида работ №5', 'roseco'),
			'type' => 'text',
			'section' => 'work_types',
		));

		$wp_customize->add_setting('work_type_price_5', array(
			'type' => 'theme_mod',
			'default' => '3000 руб.',
		));

		$wp_customize->add_control('work_type_price_5', array(
			'label' => __('Цена за работу №5', 'roseco'),
			'type' => 'text',
			'section' => 'work_types',
		));

		$wp_customize->add_setting('work_type_button_5', array(
			'type' => 'theme_mod',
		));

		$wp_customize->add_control('work_type_button_5', array(
			'label' => __('Кнопка заказать 5', 'roseco'),
			'description' => __('Без надобности не менять!!!', 'roseco'),
			'type' => 'text',
			'section' => 'work_types',
		));

		$wp_customize->add_section('blocks_content_1_5', array(
			'title' => __('Первый вводный текст', 'roseco'),
		));

		$wp_customize->add_setting('blocks_content_1_5_title', array(
			'type' => 'theme_mod',
			'default' => 'Строительная экспертиза в Санкт- Петербурге',
		));

		$wp_customize->add_control('blocks_content_1_5_title', array(
			'label' => __('Заголовок', 'roseco'),
			'type' => 'text',
			'section' => 'blocks_content_1_5',
		));

		$wp_customize->add_setting('blocks_content_1_5_subtitle', array(
			'type' => 'theme_mod',
			'default' => 'Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labor. Et harum quidem rerum.',
		));

		$wp_customize->add_control('blocks_content_1_5_subtitle', array(
			'label' => __('Средний текст', 'roseco'),
			'type' => 'textarea',
			'section' => 'blocks_content_1_5',
		));

		$wp_customize->add_setting('blocks_content_1_5_text', array(
			'type' => 'theme_mod',
			'default' => 'Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labor. Et harum quidem rerum.',
		));

		$wp_customize->add_control('blocks_content_1_5_text', array(
			'label' => __('Мелкий текст', 'roseco'),
			'type' => 'text',
			'section' => 'blocks_content_1_5',
		));

		$wp_customize->add_setting('blocks_content_1_5_image', array(
			'type' => 'theme_mod',
		));

		$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'blocks_content_1_5_image', array(
			'label' => __('Картинка', 'roseco'),
			'type' => 'media',
			'mime_type' => 'image',
			'section' => 'blocks_content_1_5',
		)));

		$wp_customize->add_section('how_it_works', array(
			'title' => __('Как мы работаем', 'roseco'),
		));

		$wp_customize->add_setting('how_it_works_main_title', array(
			'type' => 'theme_mod',
			'default' => 'Как мы работаем',
		));

		$wp_customize->add_control('how_it_works_main_title', array(
			'label' => __('Заголовок блока', 'roseco'),
			'type' => 'text',
			'section' => 'how_it_works',
		));

		$wp_customize->add_setting('how_it_works_ico_1', array(
			'type' => 'theme_mod',
			'default' => 'fa fa-inverse fa-envelope-o',
		));

		$wp_customize->add_control('how_it_works_ico_1', array(
			'label' => __('Иконка 1', 'roseco'),
			'description' => __('http://fontawesome.io/', 'roseco'),
			'type' => 'text',
			'section' => 'how_it_works',
		));

		$wp_customize->add_setting('how_it_works_title_1', array(
			'type' => 'theme_mod',
			'default' => 'Оставляете заявку',
		));

		$wp_customize->add_control('how_it_works_title_1', array(
			'label' => __('Заголовок 1 подпункта', 'roseco'),
			'type' => 'text',
			'section' => 'how_it_works',
		));

		$wp_customize->add_setting('how_it_works_desc_1', array(
			'type' => 'theme_mod',
			'default' => 'Вы оставляете заявку на сайте либо по телефону',
		));

		$wp_customize->add_control('how_it_works_desc_1', array(
			'label' => __('Описание 1 подпункта', 'roseco'),
			'type' => 'text',
			'section' => 'how_it_works',
		));

		$wp_customize->add_setting('how_it_works_ico_2', array(
			'type' => 'theme_mod',
			'default' => 'fa fa-inverse  fa-comments-o',
		));

		$wp_customize->add_control('how_it_works_ico_2', array(
			'label' => __('Иконка 2', 'roseco'),
			'type' => 'text',
			'section' => 'how_it_works',
		));

		$wp_customize->add_setting('how_it_works_title_2', array(
			'type' => 'theme_mod',
			'default' => 'Наш специалист связывается с вами',
		));

		$wp_customize->add_control('how_it_works_title_2', array(
			'label' => __('Заголовок 2 подпункта', 'roseco'),
			'type' => 'text',
			'section' => 'how_it_works',
		));

		$wp_customize->add_setting('how_it_works_desc_2', array(
			'type' => 'theme_mod',
			'default' => 'И согласовывает дату встречи',
		));

		$wp_customize->add_control('how_it_works_desc_2', array(
			'label' => __('Описание 2 подпункта', 'roseco'),
			'type' => 'text',
			'section' => 'how_it_works',
		));

		$wp_customize->add_setting('how_it_works_ico_3', array(
			'type' => 'theme_mod',
			'default' => 'fa fa-inverse  fa-list-ol',
		));

		$wp_customize->add_control('how_it_works_ico_3', array(
			'label' => __('Иконка 3', 'roseco'),
			'type' => 'text',
			'section' => 'how_it_works',
		));

		$wp_customize->add_setting('how_it_works_title_3', array(
			'type' => 'theme_mod',
			'default' => 'Составляем техническое задание',
		));

		$wp_customize->add_control('how_it_works_title_3', array(
			'label' => __('Заголовок 3 подпункта', 'roseco'),
			'type' => 'text',
			'section' => 'how_it_works',
		));

		$wp_customize->add_setting('how_it_works_desc_3', array(
			'type' => 'theme_mod',
			'default' => 'Перечень и объемы проведения работ',
		));

		$wp_customize->add_control('how_it_works_desc_3', array(
			'label' => __('Описание 3 подпункта', 'roseco'),
			'type' => 'text',
			'section' => 'how_it_works',
		));

		$wp_customize->add_setting('how_it_works_ico_4', array(
			'type' => 'theme_mod',
			'default' => 'fa fa-inverse  fa-file-text-o',
		));

		$wp_customize->add_control('how_it_works_ico_4', array(
			'label' => __('Иконка 4', 'roseco'),
			'type' => 'text',
			'section' => 'how_it_works',
		));

		$wp_customize->add_setting('how_it_works_title_4', array(
			'type' => 'theme_mod',
			'default' => 'Заключаем договор&nbsp;',
		));

		$wp_customize->add_control('how_it_works_title_4', array(
			'label' => __('Заголовок 4 подпункта', 'roseco'),
			'type' => 'text',
			'section' => 'how_it_works',
		));

		$wp_customize->add_setting('how_it_works_desc_4', array(
			'type' => 'theme_mod',
			'default' => 'Заключаем договор с оговоренной суммой и сроками',
		));

		$wp_customize->add_control('how_it_works_desc_4', array(
			'label' => __('Описание 4 подпункта', 'roseco'),
			'type' => 'text',
			'section' => 'how_it_works',
		));

		$wp_customize->add_setting('how_it_works_ico_5', array(
			'type' => 'theme_mod',
			'default' => 'fa fa-inverse  fa-thumbs-o-up',
		));

		$wp_customize->add_control('how_it_works_ico_5', array(
			'label' => __('Иконка 5', 'roseco'),
			'type' => 'text',
			'section' => 'how_it_works',
		));

		$wp_customize->add_setting('how_it_works_title_5', array(
			'type' => 'theme_mod',
			'default' => 'Выполняем работы&nbsp;',
		));

		$wp_customize->add_control('how_it_works_title_5', array(
			'label' => __('Заголовок 5 подпункта', 'roseco'),
			'type' => 'text',
			'section' => 'how_it_works',
		));

		$wp_customize->add_setting('how_it_works_desc_5', array(
			'type' => 'theme_mod',
			'default' => 'Выполняем работы и предоставляем отчет',
		));

		$wp_customize->add_control('how_it_works_desc_5', array(
			'label' => __('Описание 5 подпункта', 'roseco'),
			'type' => 'text',
			'section' => 'how_it_works',
		));

		$wp_customize->add_setting('how_it_works_order_text', array(
			'type' => 'theme_mod',
			'default' => 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.',
		));

		$wp_customize->add_control('how_it_works_order_text', array(
			'label' => __('Текст о заявке', 'roseco'),
			'type' => 'text',
			'section' => 'how_it_works',
		));

		$wp_customize->add_setting('blocks_content_3_3_button1_label', array(
			'type' => 'theme_mod',
			'default' => 'Оставить заявку',
		));

		$wp_customize->add_control('blocks_content_3_3_button1_label', array(
			'label' => __('Название кнопки Оставить заявку', 'roseco'),
			'type' => 'text',
			'section' => 'how_it_works',
		));

		$wp_customize->add_setting('blocks_content_3_3_button1_link', array(
			'type' => 'theme_mod',
			'default' => '#',
		));

		$wp_customize->add_control('blocks_content_3_3_button1_link', array(
			'label' => __('Ссылка на кнопке Оставить заявку', 'roseco'),
			'type' => 'text',
			'section' => 'how_it_works',
		));

		$wp_customize->add_section('clients', array(
			'title' => __('Клиенты', 'roseco'),
		));

		$wp_customize->add_setting('clients_logo1', array(
			'type' => 'theme_mod',
		));

		$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'clients_logo1', array(
			'label' => __('Лого клиента 1', 'roseco'),
			'type' => 'media',
			'mime_type' => 'image',
			'section' => 'clients',
		)));

		$wp_customize->add_setting('clients_logo2', array(
			'type' => 'theme_mod',
		));

		$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'clients_logo2', array(
			'label' => __('Лого клиента 2', 'roseco'),
			'type' => 'media',
			'mime_type' => 'image',
			'section' => 'clients',
		)));

		$wp_customize->add_setting('clients_logo3', array(
			'type' => 'theme_mod',
		));

		$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'clients_logo3', array(
			'label' => __('Лого клиента 3', 'roseco'),
			'type' => 'media',
			'mime_type' => 'image',
			'section' => 'clients',
		)));

		$wp_customize->add_setting('clients_logo4', array(
			'type' => 'theme_mod',
		));

		$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'clients_logo4', array(
			'label' => __('Лого клиента 4', 'roseco'),
			'type' => 'media',
			'mime_type' => 'image',
			'section' => 'clients',
		)));

		$wp_customize->add_setting('clients_logo5', array(
			'type' => 'theme_mod',
		));

		$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'clients_logo5', array(
			'label' => __('Лого клиента 5', 'roseco'),
			'type' => 'media',
			'mime_type' => 'image',
			'section' => 'clients',
		)));

		$wp_customize->add_setting('clients_logo6', array(
			'type' => 'theme_mod',
		));

		$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'clients_logo6', array(
			'label' => __('Лого клиента 6', 'roseco'),
			'type' => 'media',
			'mime_type' => 'image',
			'section' => 'clients',
		)));

		$wp_customize->add_section('blocks_content_2_9', array(
			'title' => __('Примеры работ', 'roseco'),
		));

		$wp_customize->add_setting('blocks_content_2_9_source', array(
			'type' => 'theme_mod',
		));

		$wp_customize->add_control(new WP_BlocksContentDropdown_Customize_Control($wp_customize, 'blocks_content_2_9_source', array(
			'label' => __('Примеры работ', 'roseco'),
			'type' => 'custom',
			'section' => 'clients',
		)));

		$wp_customize->add_section('blocks_content_1_8', array(
			'title' => __('Блок с табами', 'roseco'),
		));

		$wp_customize->add_setting('blocks_content_1_8_source', array(
			'type' => 'theme_mod',
		));

		$wp_customize->add_control(new WP_BlocksContentDropdown_Customize_Control($wp_customize, 'blocks_content_1_8_source', array(
			'label' => __('Источник контента', 'roseco'),
			'type' => 'custom',
			'section' => 'blocks_content_1_8',
		)));

		$wp_customize->add_section('blocks_content_3_3', array(
			'title' => __('Content 3-3', 'roseco'),
		));

		$wp_customize->add_setting('blocks_content_3_3_bck', array(
			'type' => 'theme_mod',
		));

		$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'blocks_content_3_3_bck', array(
			'label' => __('Background image', 'roseco'),
			'type' => 'media',
			'mime_type' => 'image',
			'section' => 'blocks_content_3_3',
		)));

		$wp_customize->add_setting('blocks_content_3_3_tagline', array(
			'type' => 'theme_mod',
			'default' => 'у нас с вами общие цели!',
		));

		$wp_customize->add_control('blocks_content_3_3_tagline', array(
			'label' => __('Tagline', 'roseco'),
			'type' => 'textarea',
			'section' => 'blocks_content_3_3',
		));

		$wp_customize->add_setting('blocks_content_3_3_title', array(
			'type' => 'theme_mod',
			'default' => 'Росэко - в интересах будущих поколений',
		));

		$wp_customize->add_control('blocks_content_3_3_title', array(
			'label' => __('Title', 'roseco'),
			'type' => 'textarea',
			'section' => 'blocks_content_3_3',
		));

		$wp_customize->add_setting('blocks_content_3_3_button1_label', array(
			'type' => 'theme_mod',
			'default' => 'Задать вопрос',
		));

		$wp_customize->add_control('blocks_content_3_3_button1_label', array(
			'label' => __('Button 1 Label', 'roseco'),
			'type' => 'text',
			'section' => 'blocks_content_3_3',
		));

		$wp_customize->add_setting('blocks_content_3_3_button1_link', array(
			'type' => 'theme_mod',
			'default' => '#',
		));

		$wp_customize->add_control('blocks_content_3_3_button1_link', array(
			'label' => __('Button 1 Link', 'roseco'),
			'type' => 'text',
			'section' => 'blocks_content_3_3',
		));

		$wp_customize->add_setting('blocks_content_3_3_button2_label', array(
			'type' => 'theme_mod',
			'default' => 'оставить заявку',
		));

		$wp_customize->add_control('blocks_content_3_3_button2_label', array(
			'label' => __('Button 2 Label', 'roseco'),
			'type' => 'text',
			'section' => 'blocks_content_3_3',
		));

		$wp_customize->add_setting('blocks_content_3_3_button2_link', array(
			'type' => 'theme_mod',
			'default' => '#',
		));

		$wp_customize->add_control('blocks_content_3_3_button2_link', array(
			'label' => __('Button 2 Link', 'roseco'),
			'type' => 'text',
			'section' => 'blocks_content_3_3',
		));

		$wp_customize->add_section('blocks_blog_1', array(
			'title' => __('Blog 1', 'roseco'),
		));

		$wp_customize->add_setting('blocks_blog_1_title', array(
			'type' => 'theme_mod',
			'default' => 'Полезные статьи',
		));

		$wp_customize->add_control('blocks_blog_1_title', array(
			'label' => __('Title', 'roseco'),
			'type' => 'text',
			'section' => 'blocks_blog_1',
		));

		$wp_customize->add_section('blocks_footer_1_1', array(
			'title' => __('Footer 1-1', 'roseco'),
		));

		$wp_customize->add_setting('blocks_footer_1_1_image', array(
			'type' => 'theme_mod',
		));

		$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'blocks_footer_1_1_image', array(
			'label' => __('Image', 'roseco'),
			'type' => 'media',
			'mime_type' => 'image',
			'section' => 'blocks_footer_1_1',
		)));

		$wp_customize->add_setting('blocks_footer_1_1_title', array(
			'type' => 'theme_mod',
			'default' => 'Комплексное обследование зданий и сооружений',
		));

		$wp_customize->add_control('blocks_footer_1_1_title', array(
			'label' => __('Title', 'roseco'),
			'type' => 'textarea',
			'section' => 'blocks_footer_1_1',
		));

		$wp_customize->add_setting('blocks_footer_1_1_subtitle', array(
			'type' => 'theme_mod',
			'default' => 'в Санкт-Петербурге и области',
		));

		$wp_customize->add_control('blocks_footer_1_1_subtitle', array(
			'label' => __('Subtitle', 'roseco'),
			'type' => 'textarea',
			'section' => 'blocks_footer_1_1',
		));

		$wp_customize->add_section('blocks_header_1', array(
			'title' => __('Header', 'roseco'),
		));

		$wp_customize->add_setting('blocks_header_1_logo', array(
			'type' => 'theme_mod',
		));

		$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'blocks_header_1_logo', array(
			'label' => __('Logo', 'roseco'),
			'type' => 'media',
			'mime_type' => 'image',
			'section' => 'blocks_header_1',
		)));

		$wp_customize->add_setting('header_phone1', array(
			'type' => 'theme_mod',
			'default' => '8 (800) 333-79-89',
		));

		$wp_customize->add_control('header_phone1', array(
			'label' => __('Телефон №1', 'roseco'),
			'type' => 'text',
			'section' => 'blocks_header_1',
		));

		$wp_customize->add_setting('header_phone1_label', array(
			'type' => 'theme_mod',
			'default' => 'Звонок из любого региона бесплатно!',
		));

		$wp_customize->add_control('header_phone1_label', array(
			'label' => __('Подпись к 1 телефону', 'roseco'),
			'type' => 'text',
			'section' => 'blocks_header_1',
		));

		$wp_customize->add_setting('header_phone2', array(
			'type' => 'theme_mod',
			'default' => '+7 (812) 336-42-82',
		));

		$wp_customize->add_control('header_phone2', array(
			'label' => __('Телефон №2', 'roseco'),
			'type' => 'text',
			'section' => 'blocks_header_1',
		));

		$wp_customize->add_setting('header_phone2_label', array(
			'type' => 'theme_mod',
			'default' => 'телефон в г.Санкт-Петербург',
		));

		$wp_customize->add_control('header_phone2_label', array(
			'label' => __('Подпись к 2 телефону', 'roseco'),
			'type' => 'text',
			'section' => 'blocks_header_1',
		));

		$wp_customize->add_section('blocks_footer_1_1', array(
			'title' => __('Footer 1-1', 'roseco'),
		));

		$wp_customize->add_setting('blocks_footer_1_1_image', array(
			'type' => 'theme_mod',
		));

		$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'blocks_footer_1_1_image', array(
			'label' => __('Image', 'roseco'),
			'type' => 'media',
			'mime_type' => 'image',
			'section' => 'blocks_footer_1_1',
		)));

		$wp_customize->add_setting('blocks_footer_1_1_title', array(
			'type' => 'theme_mod',
			'default' => 'Комплексное обследование зданий и сооружений',
		));

		$wp_customize->add_control('blocks_footer_1_1_title', array(
			'label' => __('Title', 'roseco'),
			'type' => 'textarea',
			'section' => 'blocks_footer_1_1',
		));

		$wp_customize->add_setting('blocks_footer_1_1_subtitle', array(
			'type' => 'theme_mod',
			'default' => 'в Санкт-Петербурге и области',
		));

		$wp_customize->add_control('blocks_footer_1_1_subtitle', array(
			'label' => __('Subtitle', 'roseco'),
			'type' => 'textarea',
			'section' => 'blocks_footer_1_1',
		));

		$wp_customize->add_section('blocks_header_1', array(
			'title' => __('Header', 'roseco'),
		));

		$wp_customize->add_setting('blocks_header_1_logo', array(
			'type' => 'theme_mod',
		));

		$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'blocks_header_1_logo', array(
			'label' => __('Logo', 'roseco'),
			'type' => 'media',
			'mime_type' => 'image',
			'section' => 'blocks_header_1',
		)));

		$wp_customize->add_setting('header_phone1', array(
			'type' => 'theme_mod',
			'default' => '8 (800) 333-79-89',
		));

		$wp_customize->add_control('header_phone1', array(
			'label' => __('Телефон №1', 'roseco'),
			'type' => 'text',
			'section' => 'blocks_header_1',
		));

		$wp_customize->add_setting('header_phone1_label', array(
			'type' => 'theme_mod',
			'default' => 'Звонок из любого региона бесплатно!',
		));

		$wp_customize->add_control('header_phone1_label', array(
			'label' => __('Подпись к 1 телефону', 'roseco'),
			'type' => 'text',
			'section' => 'blocks_header_1',
		));

		$wp_customize->add_setting('header_phone2', array(
			'type' => 'theme_mod',
			'default' => '+7 (812) 336-42-82',
		));

		$wp_customize->add_control('header_phone2', array(
			'label' => __('Телефон №2', 'roseco'),
			'type' => 'text',
			'section' => 'blocks_header_1',
		));

		$wp_customize->add_setting('header_phone2_label', array(
			'type' => 'theme_mod',
			'default' => 'телефон в г.Санкт-Петербург',
		));

		$wp_customize->add_control('header_phone2_label', array(
			'label' => __('Подпись к 2 телефону', 'roseco'),
			'type' => 'text',
			'section' => 'blocks_header_1',
		));

		$wp_customize->add_section('blocks_footer_1_1', array(
			'title' => __('Footer 1-1', 'roseco'),
		));

		$wp_customize->add_setting('blocks_footer_1_1_image', array(
			'type' => 'theme_mod',
		));

		$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'blocks_footer_1_1_image', array(
			'label' => __('Image', 'roseco'),
			'type' => 'media',
			'mime_type' => 'image',
			'section' => 'blocks_footer_1_1',
		)));

		$wp_customize->add_setting('blocks_footer_1_1_title', array(
			'type' => 'theme_mod',
			'default' => 'Комплексное обследование зданий и сооружений',
		));

		$wp_customize->add_control('blocks_footer_1_1_title', array(
			'label' => __('Title', 'roseco'),
			'type' => 'textarea',
			'section' => 'blocks_footer_1_1',
		));

		$wp_customize->add_setting('blocks_footer_1_1_subtitle', array(
			'type' => 'theme_mod',
			'default' => 'в Санкт-Петербурге и области',
		));

		$wp_customize->add_control('blocks_footer_1_1_subtitle', array(
			'label' => __('Subtitle', 'roseco'),
			'type' => 'textarea',
			'section' => 'blocks_footer_1_1',
		));

		$wp_customize->add_section('blocks_header_1', array(
			'title' => __('Header', 'roseco'),
		));

		$wp_customize->add_setting('blocks_header_1_logo', array(
			'type' => 'theme_mod',
		));

		$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'blocks_header_1_logo', array(
			'label' => __('Logo', 'roseco'),
			'type' => 'media',
			'mime_type' => 'image',
			'section' => 'blocks_header_1',
		)));

		$wp_customize->add_setting('header_phone1', array(
			'type' => 'theme_mod',
			'default' => '8 (800) 333-79-89',
		));

		$wp_customize->add_control('header_phone1', array(
			'label' => __('Телефон №1', 'roseco'),
			'type' => 'text',
			'section' => 'blocks_header_1',
		));

		$wp_customize->add_setting('header_phone1_label', array(
			'type' => 'theme_mod',
			'default' => 'Звонок из любого региона бесплатно!',
		));

		$wp_customize->add_control('header_phone1_label', array(
			'label' => __('Подпись к 1 телефону', 'roseco'),
			'type' => 'text',
			'section' => 'blocks_header_1',
		));

		$wp_customize->add_setting('header_phone2', array(
			'type' => 'theme_mod',
			'default' => '+7 (812) 336-42-82',
		));

		$wp_customize->add_control('header_phone2', array(
			'label' => __('Телефон №2', 'roseco'),
			'type' => 'text',
			'section' => 'blocks_header_1',
		));

		$wp_customize->add_setting('header_phone2_label', array(
			'type' => 'theme_mod',
			'default' => 'телефон в г.Санкт-Петербург',
		));

		$wp_customize->add_control('header_phone2_label', array(
			'label' => __('Подпись к 2 телефону', 'roseco'),
			'type' => 'text',
			'section' => 'blocks_header_1',
		));

		$wp_customize->add_section('blocks_footer_1_1', array(
			'title' => __('Footer 1-1', 'roseco'),
		));

		$wp_customize->add_setting('blocks_footer_1_1_image', array(
			'type' => 'theme_mod',
		));

		$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'blocks_footer_1_1_image', array(
			'label' => __('Image', 'roseco'),
			'type' => 'media',
			'mime_type' => 'image',
			'section' => 'blocks_footer_1_1',
		)));

		$wp_customize->add_setting('blocks_footer_1_1_title', array(
			'type' => 'theme_mod',
			'default' => 'Комплексное обследование зданий и сооружений',
		));

		$wp_customize->add_control('blocks_footer_1_1_title', array(
			'label' => __('Title', 'roseco'),
			'type' => 'textarea',
			'section' => 'blocks_footer_1_1',
		));

		$wp_customize->add_setting('blocks_footer_1_1_subtitle', array(
			'type' => 'theme_mod',
			'default' => 'в Санкт-Петербурге и области',
		));

		$wp_customize->add_control('blocks_footer_1_1_subtitle', array(
			'label' => __('Subtitle', 'roseco'),
			'type' => 'textarea',
			'section' => 'blocks_footer_1_1',
		));

		/* Pinegrow generated Customizer Controls End */

	}
	add_action('customize_register', 'roseco_customize_register');
endif; // roseco_customize_register

if (!function_exists('roseco_enqueue_scripts')):
	function roseco_enqueue_scripts() {

		/* Pinegrow generated Enqueue Scripts Begin */

		wp_deregister_script('jquery');
		wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-1.11.1.min.js', false, null, true);

		wp_deregister_script('bootstrap');
		wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', false, null, true);

		wp_deregister_script('plugins');
		wp_enqueue_script('plugins', get_template_directory_uri() . '/js/plugins.js', false, null, true);

		wp_deregister_script('bskitscripts');
		wp_enqueue_script('bskitscripts', get_template_directory_uri() . '/js/bskit-scripts.js', false, null, true);

		wp_deregister_script('easeljs');
		wp_enqueue_script('easeljs', 'https://code.createjs.com/easeljs-0.7.1.min.js', false, null, true);

		wp_deregister_script('tweenmax');
		wp_enqueue_script('tweenmax', 'http://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js', false, null, true);

		wp_deregister_script('myjs');
		wp_enqueue_script('myjs', get_template_directory_uri() . '/js/myjs.js', false, null, true);

		wp_deregister_script('script-1');
		wp_enqueue_script('script-1', 'https://api-maps.yandex.ru/2.1/?lang=ru_RU', false, null, true);

		wp_deregister_script('adress');
		wp_enqueue_script('adress', get_template_directory_uri() . '/js/adress.js', false, null, true);

		wp_deregister_script('fancy');
		wp_enqueue_script('fancy', get_template_directory_uri() . '/js/fancy/dist/jquery.fancybox.min.js', false, null, true);

		/* Pinegrow generated Enqueue Scripts End */

		/* Pinegrow generated Enqueue Styles Begin */

		wp_deregister_style('fancycss');
		wp_enqueue_style('fancycss', get_template_directory_uri() . '/js/fancy/dist/jquery.fancybox.min.css', false, null, 'all');

		wp_deregister_style('bootstrap');
		wp_enqueue_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', false, null, 'all');

		wp_deregister_style('fontawesome');
		wp_enqueue_style('fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css', false, null, 'all');

		wp_deregister_style('style-1');
		wp_enqueue_style('style-1', 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700', false, null, 'all');

		wp_deregister_style('style-2');
		wp_enqueue_style('style-2', 'http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic', false, null, 'all');

		wp_deregister_style('stylelibrary');
		wp_enqueue_style('stylelibrary', get_template_directory_uri() . '/css/style-library-1.css', false, null, 'all');

		wp_deregister_style('plugins');
		wp_enqueue_style('plugins', get_template_directory_uri() . '/css/plugins.css', false, null, 'all');

		wp_deregister_style('blocks');
		wp_enqueue_style('blocks', get_template_directory_uri() . '/css/blocks.css', false, null, 'all');

		wp_deregister_style('custom');
		wp_enqueue_style('custom', get_template_directory_uri() . '/css/custom.css', false, null, 'all');

		wp_deregister_style('style-3');
		wp_enqueue_style('style-3', 'https://fonts.googleapis.com/css?family=Fira+Sans+Extra+Condensed|Scada', false, null, 'all');

		/* Pinegrow generated Enqueue Styles End */

	}
	add_action('wp_enqueue_scripts', 'roseco_enqueue_scripts');
endif;

/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/blocks/wp_blocks.php";
require_once "inc/bootstrap/wp_bootstrap_navwalker.php";
require_once "inc/bootstrap/wp_bootstrap_pagination.php";

/* Pinegrow generated Include Resources End */

function new_excerpt_length($length) {
	return 20;
}
add_filter('excerpt_length', 'new_excerpt_length');
?>