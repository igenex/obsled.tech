<?php
get_header();?>

            <?php $image_attributes = wp_get_attachment_image_src(get_theme_mod('blocks_promo3_bck'), 'large');?>
            <section id="promo-3" class="content-block promo-3 min-height-600px" style="<?php if ($image_attributes) {
	echo 'background-image:url(\'' . $image_attributes[0] . '\')';
}
?>">
                <div class="container text-center top-bg-container">
                    <div class="top-info-wrapper">
                        <div class="row margin-top15">
                            <h1 class="title"><?php echo get_theme_mod('blocks_promo3_title', __('КОМПЛЕКСНОЕ ОБСЛЕДОВАНИЕ&nbsp;ЗДАНИЙ И СООРУЖЕНИЙ', 'roseco')); ?></h1>
                            <h2><?php echo get_theme_mod('blocks_promo3_subtitle', __('в Санкт-Петербурге и области', 'roseco')); ?></h2>
                            <div class="col-md-2 col-xs-12 feat-icons-wrapper">
                                <?php echo wp_get_attachment_image(get_theme_mod('header_feature_1_img'), array(150, 150), null, array(
	'class' => 'top-feat-icons',
)) ?>
                                <h3><?php echo get_theme_mod('header_feature_1_txt', __('Расчет стоимости в течении 1 дня', 'roseco')); ?></h3>
                            </div>
                            <div class="col-md-2 col-xs-12 feat-icons-wrapper">
                                <?php echo wp_get_attachment_image(get_theme_mod('header_feature_2_img'), array(150, 150), null, array(
	'class' => 'top-feat-icons',
)) ?>
                                <h3><?php echo get_theme_mod('header_feature_2_txt', __('Расчет стоимости в течении 1 дня', 'roseco')); ?></h3>
                            </div>
                            <div class="col-md-2 col-xs-12 feat-icons-wrapper">
                                <?php echo wp_get_attachment_image(get_theme_mod('header_feature_3_img'), array(150, 150), null, array(
	'class' => 'top-feat-icons',
)) ?>
                                <h3><?php echo get_theme_mod('header_feature_3_txt', __('Расчет стоимости в течении 1 дня', 'roseco')); ?></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container -->
            </section>
            <section id="content-1-9" class="content-1-9 content-block">
                <div class="bg-line-container"></div>
                <div class="container features">
                    <div class="feat-row">
                        <div class="feat-item">
                            <div class="col-xs-2">
                                <span class="fa fa-rocket <?php echo get_theme_mod('big_feature_1_ico', __('fa fa-rocket', 'roseco')); ?>"></span>
                            </div>
                            <div class="col-xs-10">
                                <h4><?php echo get_theme_mod('big_feature_1_title', 'Оперативные <br>сроки работ'); ?></h4>
                                <p><?php echo get_theme_mod('big_feature_1_content', __('Наши специалисты знают свою работу. Все процессы четко поставлены и не займут много времени', 'roseco')); ?></p>
                            </div>
                        </div>
                        <div class="feat-item">
                            <div class="col-xs-2">
                                <span class="fa fa-money <?php echo get_theme_mod('big_feature_2_ico', __('fa fa-money', 'roseco')); ?>"></span>
                            </div>
                            <div class="col-xs-10">
                                <h4><?php echo get_theme_mod('big_feature_2_title', 'Оптимальная<br>стоимость'); ?></h4>
                                <p><?php echo get_theme_mod('big_feature_2_content', 'Критерий "цена/качество" - это основа нашей компании. Разумные деньги за высокий уровень услуг<br>'); ?></p>
                            </div>
                        </div>
                        <div class="feat-item">
                            <div class="col-xs-2">
                                <span class="fa fa-file-text-o <?php echo get_theme_mod('big_feature_3_ico', __('fa fa-file-text-o', 'roseco')); ?>"></span>
                            </div>
                            <div class="col-xs-10">
                                <h4><?php echo get_theme_mod('big_feature_3_title', 'Допуски и&nbsp;<br>лицензии'); ?></h4>
                                <p><?php echo get_theme_mod('big_feature_3_content', 'Имеем лицензии и допуски на все виды выполняемых работ.&nbsp;<br>'); ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </section>
            <section id="work-types" class="what-we-do">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-md-offset-1 col-xs-12 promo-icons">
                            <i class="<?php echo get_theme_mod('work_type_ico_1', __('fa fa-5x fa-eye', 'roseco')); ?>"></i>
                            <h3 class="header-h3"><?php echo get_theme_mod('work_type_title_1', __('Инженерные изыскания', 'roseco')); ?></h3>
                            <div class="header-price">
                                <p class="header-p"><?php _e('Стоимость от:', 'roseco');?><br> <span><?php echo get_theme_mod('work_type_price_1', __('3000 руб.', 'roseco')); ?></span></p>
                                <button type="button" class="btn btn-default header-price-button" data-href="<?php echo get_theme_mod('work_type_button_1'); ?>">
                                    <?php _e('Заказать', 'roseco');?>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-12 promo-icons">
                            <i class="<?php echo get_theme_mod('work_type_ico_2', __('fa fa-5x fa-eye', 'roseco')); ?>"></i>
                            <h3 class="header-h3"><?php echo get_theme_mod('work_type_title_2', __('Инженерные изыскания', 'roseco')); ?></h3>
                            <div class="header-price">
                                <p class="header-p"><?php _e('Стоимость от:', 'roseco');?><br> <span><?php echo get_theme_mod('work_type_price_2', __('3000 руб.', 'roseco')); ?></span></p>
                                <button type="button" class="btn btn-default header-price-button" data-href="<?php echo get_theme_mod('work_type_button_2'); ?>">
                                    <?php _e('Заказать', 'roseco');?>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-12 promo-icons">
                            <i class="<?php echo get_theme_mod('work_type_ico_3', __('fa fa-5x fa-eye', 'roseco')); ?>"></i>
                            <h3 class="header-h3"><?php echo get_theme_mod('work_type_title_3', __('Инженерные изыскания', 'roseco')); ?></h3>
                            <div class="header-price">
                                <p class="header-p"><?php _e('Стоимость от:', 'roseco');?><br> <span><?php echo get_theme_mod('work_type_price_3', __('3000 руб.', 'roseco')); ?></span></p>
                                <button type="button" class="btn btn-default header-price-button" data-href="<?php echo get_theme_mod('work_type_button_3'); ?>">
                                    <?php _e('Заказать', 'roseco');?>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-12 promo-icons">
                            <i class="<?php echo get_theme_mod('work_type_ico_4', __('fa fa-5x fa-eye', 'roseco')); ?>"></i>
                            <h3 class="header-h3"><?php echo get_theme_mod('work_type_title_4', __('Инженерные изыскания', 'roseco')); ?></h3>
                            <div class="header-price">
                                <p class="header-p"><?php _e('Стоимость от:', 'roseco');?><br> <span><?php echo get_theme_mod('work_type_price_4', __('3000 руб.', 'roseco')); ?></span></p>
                                <button type="button" class="btn btn-default header-price-button" data-href="<?php echo get_theme_mod('work_type_button_4'); ?>">
                                    <?php _e('Заказать', 'roseco');?>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-12 promo-icons">
                            <i class="<?php echo get_theme_mod('work_type_ico_5', __('fa fa-5x fa-eye', 'roseco')); ?>"></i>
                            <h3 class="header-h3"><?php echo get_theme_mod('work_type_title_5', __('Инженерные изыскания', 'roseco')); ?></h3>
                            <div class="header-price">
                                <p class="header-p"><?php _e('Стоимость от:', 'roseco');?><br> <span><?php echo get_theme_mod('work_type_price_5', __('3000 руб.', 'roseco')); ?></span></p>
                                <button type="button" class="btn btn-default header-price-button" data-href="<?php echo get_theme_mod('work_type_button_5'); ?>">
                                    <?php _e('Заказать', 'roseco');?>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content-1-5 content-block">
                <div class="bg-line-container"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <h1><?php echo get_theme_mod('blocks_content_1_5_title', __('Строительная экспертиза в Санкт- Петербурге', 'roseco')); ?></h1>
                            <p class="lead"><?php echo get_theme_mod('blocks_content_1_5_subtitle', __('Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labor. Et harum quidem rerum.', 'roseco')); ?></p>
                            <p><?php echo get_theme_mod('blocks_content_1_5_text', __('Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labor. Et harum quidem rerum.', 'roseco')); ?></p>
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-6 col-xs-12">
                            <?php echo wp_get_attachment_image(get_theme_mod('blocks_content_1_5_image'), 'large', null, array(
	'class' => 'img-responsive auditor',
)) ?>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </section>
            <section class="zalipatelno">
                <div class="bottom-bg-canvas">
                    <canvas id="projector">
                        <?php _e('Your browser does not support the Canvas element.', 'roseco');?>
                    </canvas>
                </div>
            </section>
            <section id="how-we-working" class="section-work">
                <div class="container">
                    <h2 class="text-center margin-bottom45"><?php echo get_theme_mod('how_it_works_main_title', __('Как мы работаем', 'roseco')); ?></h2>
                    <div class="row">
                        <div class="col-lg-2 col-sm-6 col-md-2 col-md-offset-1 div-work-item col-xs-12 ani-block">
                            <div class="drop">
                                <i class="fa fa-inverse fa-envelope-o <?php echo get_theme_mod('how_it_works_ico_1', __('fa fa-inverse fa-envelope-o', 'roseco')); ?>"></i>
                            </div>
                            <h3><?php echo get_theme_mod('how_it_works_title_1', __('Оставляете заявку', 'roseco')); ?></h3>
                            <p><?php echo get_theme_mod('how_it_works_desc_1', __('Вы оставляете заявку на сайте либо по телефону', 'roseco')); ?></p>
                        </div>
                        <div class="col-lg-2 col-sm-6 col-md-2 div-work-item col-xs-12 ani-block">
                            <div class="drop">
                                <i class="fa fa-inverse  fa-comments-o <?php echo get_theme_mod('how_it_works_ico_2', __('fa fa-inverse  fa-comments-o', 'roseco')); ?>"></i>
                            </div>
                            <h3><?php echo get_theme_mod('how_it_works_title_2', __('Наш специалист связывается с вами', 'roseco')); ?></h3>
                            <p><?php echo get_theme_mod('how_it_works_desc_2', __('И согласовывает дату встречи', 'roseco')); ?></p>
                        </div>
                        <div class="col-lg-2 col-sm-6 col-md-2 div-work-item col-xs-12 ani-block">
                            <div class="drop">
                                <i class="fa fa-inverse  fa-list-ol <?php echo get_theme_mod('how_it_works_ico_3', __('fa fa-inverse  fa-list-ol', 'roseco')); ?>"></i>
                            </div>
                            <h3><?php echo get_theme_mod('how_it_works_title_3', __('Составляем техническое задание', 'roseco')); ?></h3>
                            <p><?php echo get_theme_mod('how_it_works_desc_3', __('Перечень и объемы проведения работ', 'roseco')); ?></p>
                        </div>
                        <div class="col-lg-2 col-sm-6 col-md-2 div-work-item col-xs-12 ani-block">
                            <div class="drop">
                                <i class="fa fa-inverse  fa-file-text-o <?php echo get_theme_mod('how_it_works_ico_4', __('fa fa-inverse  fa-file-text-o', 'roseco')); ?>"></i>
                            </div>
                            <h3><?php echo get_theme_mod('how_it_works_title_4', __('Заключаем договор&nbsp;', 'roseco')); ?></h3>
                            <p><?php echo get_theme_mod('how_it_works_desc_4', __('Заключаем договор с оговоренной суммой и сроками', 'roseco')); ?></p>
                        </div>
                        <div class="col-lg-2 col-sm-6 col-md-2 div-work-item col-xs-12 ani-block">
                            <div class="drop">
                                <i class="fa fa-inverse  fa-thumbs-o-up <?php echo get_theme_mod('how_it_works_ico_5', __('fa fa-inverse  fa-thumbs-o-up', 'roseco')); ?>"></i>
                            </div>
                            <h3><?php echo get_theme_mod('how_it_works_title_5', __('Выполняем работы&nbsp;', 'roseco')); ?></h3>
                            <p><?php echo get_theme_mod('how_it_works_desc_5', __('Выполняем работы и предоставляем отчет', 'roseco')); ?></p>
                        </div>
                    </div>
                </div>
            </section>
            <div class="rainbow-div-rev"></div>
            <section class="zakaz">
                <div class="bg-line-container-l"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-xs-12">
                            <p><?php echo get_theme_mod('how_it_works_order_text', __('Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.', 'roseco')); ?></p>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <a href="<?php echo get_theme_mod('blocks_content_3_3_button1_link', __('#', 'roseco')); ?>" class="btn btn-block btn-outline btn-outline-lg outline-light bottom-order" data-href="Оставить заявку"><?php echo get_theme_mod('blocks_content_3_3_button1_label', __('Оставить заявку', 'roseco')); ?></a>
                        </div>
                    </div>
                </div>
            </section>
            <section id="content-1-7" class="content-1-7 content-block">
                <div class="bg-line-container"></div>
                <div class="container">
                    <h2 class="margin-bottom45"><?php _e('Наши клиенты', 'roseco');?></h2>
                    <div class="row">
                        <div class="col-md-2 col-sm-4">
                            <a href="<?php echo esc_url(get_theme_mod('icon_href')); ?>"><?php echo wp_get_attachment_image(get_theme_mod('clients_logo1'), 'small') ?></a>
                        </div>
                        <div class="col-md-2 col-sm-4">
                            <a href="<?php echo esc_url(get_theme_mod('icon_href2')); ?>"><?php echo wp_get_attachment_image(get_theme_mod('clients_logo2'), 'small') ?></a>
                        </div>
                        <div class="col-md-2 col-sm-4">
                            <a href="<?php echo esc_url(get_theme_mod('icon_href3')); ?>"><?php echo wp_get_attachment_image(get_theme_mod('clients_logo3'), 'small') ?></a>
                        </div>
                        <div class="col-md-2 col-sm-4">
                            <a href="<?php echo esc_url(get_theme_mod('icon_href4')); ?>"><?php echo wp_get_attachment_image(get_theme_mod('clients_logo4'), 'small') ?></a>
                        </div>
                        <div class="col-md-2 col-sm-4">
                            <a href="<?php echo esc_url(get_theme_mod('icon_href5')); ?>"><?php echo wp_get_attachment_image(get_theme_mod('clients_logo5'), 'small') ?></a>
                        </div>
                        <div class="col-md-2 col-sm-4">
                            <a href="<?php echo esc_url(get_theme_mod('icon_href6')); ?>"><?php echo wp_get_attachment_image(get_theme_mod('clients_logo6'), 'small') ?></a>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!-- /.container -->
            </section>
            <section id="content-2-9" class="content-2-9">
                <div class="project-wrapper">
                    <?php
$primeri_rabot_args = array(
	'tax_query' => array(
		array(
			'taxonomy' => 'objects_pri_cat',
			'field' => 'term_id',
			'terms' => '3',
		),
	),
	'post_parent' => get_theme_mod('clients'),
	'post_type' => 'post',
	'post_type' => 'objects_pri',
	'post_status' => 'publish',
	'nopaging' => true,
	'order' => 'ASC',
	'orderby' => 'menu_order',
)
?>
                    <?php $primeri_rabot = new WP_Query($primeri_rabot_args);?>
                    <?php if ($primeri_rabot->have_posts()): ?>
                        <?php while ($primeri_rabot->have_posts()): $primeri_rabot->the_post();?>
									                            <div class="col-md-3 col-sm-6 project">
									                                <?php $image_attributes = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'large');?>
									                                <div class="background-image-holder" style="<?php if ($image_attributes) {
		echo 'background-image:url(\'' . $image_attributes[0] . '\')';
	}
	?>">
									</div>
									                                <div class="hover-state">
									                                    <div class="align-vertical">
									                                        <h3><?php the_title();?></h3>
									                                        <?php the_content();?>
									                                        <a href="<?php echo esc_url(get_permalink(132)); ?>" class="btn btn-outline outline-light"><?php _e('подробнее', 'roseco');?></a>
									                                    </div>
									                                </div>
									                            </div>
									                        <?php endwhile;?>
                        <?php wp_reset_postdata();?>
                    <?php endif;?>
                </div>
                <!-- /.project-wrapper -->
            </section>
            <section class="content-block content-1-8">
                <div class="container">
                    <ul class="nav nav-tabs text-center" role="tablist" id="myTab">
                        <?php
$tabs_args = array(
	'tax_query' => array(
		array(
			'taxonomy' => 'objects_pri_cat',
			'field' => 'term_id',
			'terms' => '4',
			'include_children' => false,
		),
	),
	'post_parent' => get_theme_mod('blocks_content_1_8_source'),
	'post_type' => 'objects_pri',
	'post_status' => 'publish',
	'nopaging' => true,
	'order' => 'ASC',
	'orderby' => 'menu_order',
)
?>
                        <?php $tabs = new WP_Query($tabs_args);?>
                        <?php if ($tabs->have_posts()): ?>
                            <?php $tabs_item_number = 0;?>
                            <?php while ($tabs->have_posts()): $tabs->the_post();?>
									                                <li class="<?php if ($tabs_item_number == 0) {
		echo 'active';
	}
	?>">
									                                    <a href="<?php echo '#tab_' . $tabs_item_number ?>" role="tab" data-toggle="tab"><?php the_title();?></a>
									                                </li>
									                                <?php $tabs_item_number++;?>
									                            <?php endwhile;?>
                        <?php endif;?>
                    </ul>
                    <div class="tab-content">
                        <?php $tabs = new WP_Query($tabs_args);?>
                        <?php if ($tabs->have_posts()): ?>
                            <?php $tabs_item_number = 0;?>
                            <?php while ($tabs->have_posts()): $tabs->the_post();?>
									                                <div class="tab-pane fade<?php if ($tabs_item_number == 0) {
		echo ' in active';
	}
	?>" id="<?php echo 'tab_' . $tabs_item_number ?>">
									                                    <div class="row">
									                                        <div class="col-md-5 col-md-offset-1 col-sm-6">
									                                            <?php the_post_thumbnail('large', array(
		'class' => 'img-responsive',
	));?>
									                                        </div>
									                                        <!-- /.col -->
									                                        <div class="col-md-5 col-sm-6">
									                                            <h3><?php the_title();?></h3>
									                                            <?php the_content();?>
									                                        </div>
									                                        <!-- /.col -->
									                                    </div>
									                                    <!-- /.row -->
									                                </div>
									                                <?php $tabs_item_number++;?>
									                            <?php endwhile;?>
                            <?php wp_reset_postdata();?>
                        <?php endif;?>
                        <!-- /#tab1 -->
                        <!-- /#tab2 -->
                        <!-- /#tab3 -->
                        <!-- /#tab4 -->
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.container -->
            </section>
            <div class="rainbow-div"></div>
            <?php $image_attributes = wp_get_attachment_image_src(get_theme_mod('blocks_content_3_3_bck'));?>
            <section id="content-3-3" class="content-block-nopad content-3-3" style="<?php if ($image_attributes) {
	echo 'background-image:url(\'' . $image_attributes[0] . '\')';
}
?>">
                <div class="container text-center">
                    <h2><?php echo get_theme_mod('blocks_content_3_3_tagline', __('у нас с вами общие цели!', 'roseco')); ?></h2>
                    <h3 class="quest-block"><?php echo get_theme_mod('blocks_content_3_3_title', __('Росэко - в интересах будущих поколений', 'roseco')); ?></h3>
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <div class="col-md-6">
                            <a href="<?php echo get_theme_mod('blocks_content_3_3_button1_link', __('#', 'roseco')); ?>" class="btn btn-block btn-outline btn-outline-lg outline-light bottom-order" data-href="Задать вопрос"><?php echo get_theme_mod('blocks_content_3_3_button1_label', __('Задать вопрос', 'roseco')); ?></a>
                        </div>
                        <div class="col-md-6">
                            <a href="<?php echo get_theme_mod('blocks_content_3_3_button2_link', __('#', 'roseco')); ?>" class="btn btn-block btn-outline btn-outline-lg outline-light bottom-order" data-href="Оставить заявку"><?php echo get_theme_mod('blocks_content_3_3_button2_label', __('оставить заявку', 'roseco')); ?></a>
                        </div>
                    </div>
                </div>
            </section>
            <div class="rainbow-div-rev"></div>
            <div class="content-block blog-1">
                <div class="container text-center">
                    <div class="underlined-title">
                        <h1><a href="/category/stati/"><?php echo get_theme_mod('blocks_blog_1_title', __('Полезные статьи', 'roseco')); ?></a></h1>
                        <hr>
                    </div>
                    <?php if (have_posts()): ?>
                        <div class="col-sm-12">
                            <div class="row">
                            <?php query_posts('posts_per_page=3&cat=6'); ?>
                                <?php while (have_posts()): the_post();?>
									                                    <div class="col-md-4">
									                                        <h3><a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title();?></a></h3>
									                                        <?php
	if (has_post_thumbnail()) {
		the_post_thumbnail('large', array(
			'class' => 'img-responsive',
		));
	}
	?>
									                                        <?php the_excerpt();?>
									                                        <div class="">
									                                            <a href="<?php echo esc_url(get_permalink()); ?>" class="btn btn-lg btn-primary"><?php _e('Подробнее', 'roseco');?></a>
									                                            <p class="small text-muted text-uppercase"> <?php blocks_the_category()?> <?php _e(':', 'roseco');?> <?php the_date();?></p>
									                                        </div>
									                                    </div>
									                                <?php endwhile;?>
                            </div>
                            <hr>
                            <!-- <?php wp_bootstrap_pagination(array(
	'previous_string' => '<span class="fa fa-angle-double-left"></span>',
	'next_string' => '<span class="fa fa-angle-double-right"></span>',
));?> -->
                        </div>
                    <?php else: ?>
                        <p><?php _e('Sorry, no posts matched your criteria.', 'roseco');?></p>
                    <?php endif;?>
                    <!-- /.col-sm-10 -->
                </div>
                <!-- /.container -->
            </div>
            <section id="map-holder">
                <div id="map"></div>
            </section>

<?php get_footer();?>