<?php get_header();?>
		        <header class="head-container">
		            <div>
		                <h1><?php the_title();?></h1>
		            </div>
		        </header>

<div class="rainbow-div"></div>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-9">
            <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post();?>
		                    <article <?php post_class();?> id="post-<?php the_ID();?>">
		                        <?php the_content();?>
		                    </article>
		                <?php endwhile;?>
            <?php else: ?>
                <p><?php _e('Sorry, no posts matched your criteria.', 'roseco');?></p>
            <?php endif;?>
        </div>
        <div class="col-xs-12 col-md-3">
            <?php get_sidebar();?>
        </div>
    </div>
</div>

<?php get_footer();?>