<?php
/*
Template Name: Asesoramiento
*/

get_header();

$asesoramiento = new WP_Query('page_id=35');

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
    <div id="main" class="grid-center main sections asesoramiento">
        <div id="home" class="col-12 grid-center home">
            <?php if ($asesoramiento->have_posts()):
            while ($asesoramiento->have_posts()):
            $asesoramiento->the_post(); ?>
            <figure class="icon-section col-12 grid-center">
                <img src="<?php echo get_template_directory_uri(); ?>/images/asesoramiento-icon-section.png"/>
            </figure>
            <h1 class="title-section col-12 grid-center"><?php the_title(); ?></h1>
            <div class="content col-12 grid">
                <div class="col-3_sm-12 grid column-1">
                    <figure>
                        <img src="<?php echo the_field('imagen_1_cuerpo') ?>"/>
                    </figure>
                    <div class="text">
                        <?php echo the_field('columna_1_cuerpo'); ?>
                    </div>
                </div>
                <div class="col-9_sm-12 column-2" >
                    <div class="text">
                        <?php echo the_field('columna_2_cuerpo'); ?>
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
