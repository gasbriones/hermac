<?php
/*
Template Name: Referencias
*/

get_header();

$referencias = new WP_Query('page_id=14');

?>
<body <?php body_class(); ?>>
<div id="site" class="clearfix wrapper">
    <header id="header" class="header grid-spaceAround">
        <div class="col-3_xs-5">
            <a class="logo-wrapper" href="<?php echo get_site_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo-hermac.png"
                     alt="<?php bloginfo('name'); ?>"/>
            </a>
        </div>
        <div class="col-7 grid-middle">
            <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
        </div>
    </header>
    <div id="main" class="grid-center main sections referencias">
        <div id="home" class="col-12 grid-center home">
            <?php if ($referencias->have_posts()):
            while ($referencias->have_posts()):
            $referencias->the_post(); ?>
            <figure class="icon-section col-12 grid-center">
                <img src="<?php echo get_template_directory_uri(); ?>/images/referencias-icon-section.png"/>
            </figure>
            <h1 class="title-section col-12 grid-center"><?php the_title(); ?></h1>
            <div class="content col-12 grid-center">
                <div class="col-9 content">
                    <?php the_content(); ?>
                </div>
                <div class="col-9 grid-center">
                    <div class="col-4 grid_sm-12 column-1">
                        <div class="text">
                            <?php echo the_field('columna_1'); ?>
                        </div>
                    </div>
                    <div class="col-4_sm-12 column-2" >
                        <div class="text">
                            <?php echo the_field('columna_2'); ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <?php endwhile;
        endif; ?>
    </div>

</div>
</div>
<div class="wrapper">
    <?php get_footer(); ?>
</div>
</body>
</html>
