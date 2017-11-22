<!doctype html>
<html style="height:100%;" <?php language_attributes();?>>
    <head>
        <meta charset="<?php bloginfo('charset');?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <meta name="description" content="Комплексное обследование зданий и сооружений" /> -->
        <meta name="yandex-verification" content="1441b60327f47e32" />
        <meta name="google-site-verification" content="-khfN2Vj9JPcHPUPWumxgz9TbjQM2ouJsJvcgfDpUAg" />
        <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/favicon.ico">
        <!-- Core CSS -->
        <!-- Style Library -->
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
        <!--[if lt IE 9]>
      <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/html5shiv.js"></script>
      <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/respond.min.js"></script>
    <![endif]-->
        <link rel="pingback" href="<?php bloginfo('pingback_url');?>">
        <?php wp_head();?>
    </head>
    <body data-spy="scroll" data-target="nav">
        <header id="header-1" class="soft-scroll header-1">
            <!-- Navbar -->
            <nav class="main-nav navbar-fixed-top headroom headroom--pinned">
                <div class="container top-container">
                    <!-- Brand and toggle -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only"><?php _e('Toggle navigation', 'roseco');?></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="<?php echo esc_url(home_url()); ?>"><?php echo wp_get_attachment_image(get_theme_mod('blocks_header_1_logo'), 'medium', null, array(
	'class' => 'brand-img img-responsive',
)) ?></a>
                    </div>
                    <div class="top-phones">
                    <?php 
                        $tel1 = get_theme_mod('header_phone1', '8 (800) 333-79-89');
                        $tel2 = get_theme_mod('header_phone2', '+7 (812) 336-42-82');
                    ?>
                        <p><a href="tel:<?php echo str_replace(' ', '', $tel1); ?>"><span id="phone1"><?php echo $tel1; ?></span></a><br /><span id="phone1-label"><?php echo get_theme_mod('header_phone1_label', __('Звонок из любого региона бесплатно!', 'roseco')); ?></span> <br /><a href="tel:<?php echo str_replace(' ', '', $tel2); ?>"><span id="phone2"><?php echo $tel2; ?></span></a><br /><span id="phone2-label"><?php echo get_theme_mod('header_phone2_label', __('телефон в г.Санкт-Петербург', 'roseco')); ?></span></p>
                    </div>
                    <div class="collapse navbar-collapse">
                        <?php wp_nav_menu(array(
	'menu' => 'primary',
	'menu_class' => 'nav navbar-nav navbar-right',
	'container' => '',
	'depth' => '10',
	'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
	'walker' => new wp_bootstrap_navwalker(),
));?>
                        <!--//nav-->
                    </div>
                    <!-- Navigation -->
                    <!--// End Navigation -->
                </div>
                <!--// End Container -->
            </nav>
            <!--// End Navbar -->
        </header>
        <main>