<?php
/*
Template Name: Medios y Equipos
*/

get_header();

$medios = new WP_Query('page_id=53');

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
    <div id="main" class="grid-center main sections medios">
        <div id="home" class="col-12 grid-center home">
            <?php if ($medios->have_posts()):
            while ($medios->have_posts()):
            $medios->the_post(); ?>
            <figure class="icon-section col-12 grid-center">
                <img src="<?php echo get_template_directory_uri(); ?>/images/medios-icon-section.png"/>
            </figure>
            <h1 class="title-section col-12 grid-center"><?php the_title(); ?></h1>
            <div class="content col-12 grid-center">
                <div class="col-9 grid content">
                    <div class="col-6">
                        <?php the_content(); ?>
                    </div>
                    <div class="col-6">
                        <figure>
                            <img src="<?php echo the_field('imagen_cuerpo') ?>"/>
                        </figure>
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
