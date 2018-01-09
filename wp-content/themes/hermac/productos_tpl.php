<?php
/*
Template Name: Productos
*/

get_header();

$productos = new WP_Query('page_id=48');

?>
<body <?php body_class(); ?>>
<div id="site" class="clearfix wrapper">
    <header id="header" class="header grid-spaceAround">
        <div class="col-3">
            <a class="logo-wrapper" href="<?php echo get_site_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo-hermac.png"
                     alt="<?php bloginfo('name'); ?>"/>
            </a>
        </div>
        <div class="col-7 grid-middle">
            <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
        </div>
    </header>
    <div id="main" class="grid-center main sections productos">
        <div id="home" class="col-12 grid-center home">
            <?php if ($productos->have_posts()):
            while ($productos->have_posts()):
            $productos->the_post(); ?>
            <figure class="icon-section col-12 grid-center">
                <img src="<?php echo get_template_directory_uri(); ?>/images/productos-icon-section.png"/>
            </figure>
            <h1 class="title-section col-12 grid-center"><?php the_title(); ?></h1>
            <div class="content col-12 grid-center">
                <div class="col-9 content">
                    <?php the_content(); ?>
                </div>
                <div class="col-12 grid col-container">
                    <div class="col-3 columna-1">
                        <h1><?php echo the_field('titulo_col_1'); ?></h1>
                        <div class="col-content">
                            <?php echo the_field('cuerpo_col_1'); ?>
                        </div>
                    </div>
                    <div class="col-3 columna-2">
                        <h1><?php echo the_field('titulo_col_2'); ?></h1>
                        <div class="col-content">
                            <?php echo the_field('cuerpo_col_2'); ?>
                        </div>
                    </div>
                    <div class="col-3 columna-3">
                        <h1><?php echo the_field('titulo_col_3'); ?></h1>
                        <div class="col-content">
                            <?php echo the_field('cuerpo_col_3'); ?>
                        </div>
                    </div>
                    <div class="col-3 columna-4">
                        <h1><?php echo the_field('titulo_col_4'); ?></h1>
                        <div class="col-content">
                            <?php echo the_field('cuerpo_col_4'); ?>
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
