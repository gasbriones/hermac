<?php
/*
Template Name: Planificacion
*/

get_header();
$blog_id = get_current_blog_id();
$pagename = 'planificacion';
if($blog_id == 2){
    $pagename = 'planning';
}
$planificacion = new WP_Query('pagename='.$pagename);

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
    <div id="main" class="grid-center main sections planificacion">
        <div id="home" class="col-12 grid-center home">
            <?php if ($planificacion->have_posts()):
            while ($planificacion->have_posts()):
            $planificacion->the_post(); ?>
            <figure class="icon-section col-12 grid-center">
                <img src="<?php echo get_template_directory_uri(); ?>/images/planificacion-icon-section.png"/>
            </figure>
            <h1 class="title-section col-12 grid-center"><?php the_title(); ?></h1>
            <div class="content col-12 grid-center">
                <div class="col-9 content">
                    <?php the_content(); ?>
                </div>
                <div class="col-12">
                    <figure>
                        <img src="<?php echo the_field('imagen_cuerpo') ?>"/>
                    </figure>
                </div>
                <div class="col-12 grid">
                    <div class="col-4_sm-12 grid column-1">
                        <div class="text">
                            <?php echo the_field('columna_1_cuerpo'); ?>
                        </div>
                    </div>
                    <div class="col-4_sm-12 column-2" >
                        <div class="text">
                            <?php echo the_field('columna_2_cuerpo'); ?>
                        </div>
                    </div>
                    <div class="col-4_sm-12 column-3" >
                        <div class="text">
                            <?php echo the_field('columna_3_cuerpo'); ?>
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
