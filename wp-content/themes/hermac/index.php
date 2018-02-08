<?php

include 'lang/lang.php';
get_header();

$home_str = 'home';
$asesoramiento_str = 'asesoramiento';
$servicios_str = 'servicios';
$productos_str = 'productos';
$medios_equipos_str = 'medios-y-equipos';

$blog_id = get_current_blog_id();

if($blog_id == 2){
    $asesoramiento_str ='advice';
    $servicios_str = 'services';
    $productos_str = 'products';
    $medios_equipos_str = 'means-and-equipment';
}

$home = new WP_Query('pagename='.$home_str);
$asesoramiento = new WP_Query('pagename='.$asesoramiento_str);
$servicios = new WP_Query('pagename='.$servicios_str);
$productos = new WP_Query('pagename='.$productos_str);
$medios_equipos = new WP_Query('pagename='.$medios_equipos_str);

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
    <div id="main" class="grid-center main">
        <div id="home" class="col-12 home">
            <?php if ($home->have_posts()):
                while ($home->have_posts()):$home->the_post(); ?>
                    <figure>
                        <img src="<?php echo the_field('imagen_principal') ?>"/>
                    </figure>
                    <div class="slogan">
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; endif; ?>
        </div>
        <div class="col-12 grid sections">
            <div class="col-3_sm-6_xs-12 item-section">
                <?php if ($asesoramiento->have_posts()):
                    while ($asesoramiento->have_posts()):$asesoramiento->the_post(); ?>
                        <figure class="icon-section asesoramiento">

                        </figure>
                        <h1 class="title-section"><?php the_title(); ?></h1>
                        <div class="text-section">
                            <?php echo the_field('intro_home') ?>
                        </div>
                        <div>
                            <a class="button-section" href="<?php echo get_page_link($asesoramiento_str); ?>" >leer más</a>
                        </div>
                    <?php endwhile; endif; ?>
            </div>

            <div class="col-3_sm-6_xs-12 item-section">
                <?php if ($servicios->have_posts()):
                    while ($servicios->have_posts()):$servicios->the_post(); ?>
                        <figure class="icon-section servicios">

                        </figure>
                        <h1 class="title-section"><?php the_title(); ?></h1>
                        <div class="text-section">
                            <?php echo the_field('intro_home') ?>
                        </div>
                        <div>
                            <a class="button-section" href="<?php echo get_page_link($servicios_str); ?>" >leer más</a>
                        </div>
                    <?php endwhile; endif; ?>
            </div>

            <div class="col-3_sm-6_xs-12 item-section">
                <?php if ($productos->have_posts()):
                    while ($productos->have_posts()):$productos->the_post(); ?>
                        <figure class="icon-section productos">

                        </figure>
                        <h1 class="title-section"><?php the_title(); ?></h1>
                        <div class="text-section">
                            <?php echo the_field('intro_home') ?>
                        </div>
                        <div>
                            <a class="button-section" href="<?php echo get_page_link($productos_str); ?>" >leer más</a>
                        </div>
                    <?php endwhile; endif; ?>
            </div>

            <div class="col-3_sm-6_xs-12 item-section">
                <?php if ($medios_equipos->have_posts()):
                    while ($medios_equipos->have_posts()):$medios_equipos->the_post(); ?>
                        <figure class="icon-section equipos">

                        </figure>
                        <h1 class="title-section"><?php the_title(); ?></h1>
                        <div class="text-section">
                            <?php echo the_field('intro_home') ?>
                        </div>
                        <div>
                            <a class="button-section" href="<?php echo get_page_link($medios_equipos_str); ?>" >leer más</a>
                        </div>
                    <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
</div>
<div class="wrapper">
    <?php get_footer(); ?>
</div>
</body>
</html>
