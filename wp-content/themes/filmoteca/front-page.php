<?php
    get_header();
?>
<body>
     <!--Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="oneMusic-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!--El nav lo hemos metido en el archivo templates/nav-front.php-->
                    <?php get_template_part('templates/nav', 'front') ?>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start #####  Slider inicio, cada single-hero-slide es un elemento del carousel-->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">
            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/bg-img/bg-1.jpg);"></div>
                <!-- Slide Content -->
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-slides-content text-center">
                                <h6 data-animation="fadeInUp" data-delay="100ms">Latest album</h6>
                                <h2 data-animation="fadeInUp" data-delay="300ms">Beyond Time <span>Beyond Time</span></h2>
                                <a data-animation="fadeInUp" data-delay="500ms" href="#" class="btn oneMusic-btn mt-50">Discover <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/bg-img/bg-2.jpg);"></div>
                <!-- Slide Content -->
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-slides-content text-center">
                                <h6 data-animation="fadeInUp" data-delay="100ms">Latest album</h6>
                                <h2 data-animation="fadeInUp" data-delay="300ms">Colorlib Music <span>Colorlib Music</span></h2>
                                <a data-animation="fadeInUp" data-delay="500ms" href="#" class="btn oneMusic-btn mt-50">Discover <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Latest Albums Area Start ##### -->
    <section class="oneMusic-buy-now-area has-fluid section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading style-2 mb-50">
                        <p>Últimas entradas</p>
                        <!--<h2>Latest Albums</h2>-->
                        <h2><?php the_title() ?></h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-9">
                    <div class="ablums-text text-center mb-70">
                        <p>Queremos que estés informado y a la última de todo lo relacionado con el mundo del cine, desde reviwes sobre las últimas peliculas en cartelera, pasando por puntos de vista personal sobre las tendencias en el mundo del cine hasta los sucedido en los últimos certamenes del séptimo arte.</p>
                    </div>
                </div>
            </div>
            <!-- ### CAROUSEL DE ÚLTIMOS POST ###-->
            <div class="row">
                <div class="col-12">
                    <div class="albums-slideshow owl-carousel">
                        
                        <!--< ?php-->
                        <!--    $args = array(-->
                        <!--    'post_per_page' => 3,-->
                        <!--    'orderby'       => 'post_date',-->
                        <!--    'order'         => 'DESC'-->
                        <!--);-->
                        
                        <!--$post_array = get_posts($args);-->
                        
                        <!--foreach ($post_array as $post) {-->
                        <!--?>-->
                             <!--Single Album -->
                        <!--    <div class="single-album">-->
                                <!--< ?php $post->post_thumbnail; ?>-->
                        <!--        <div class="album-info">-->
                        <!--            <a href="#">-->
                        <!--                <h5>< ?php echo $post->post_title; ?></h5>-->
                        <!--            </a>-->
                        <!--            <p> < ?php echo $post->post_content; ?></p>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--< ?php-->
                        <!--}-->
                        <!--?>-->
                        
                        
                        <!--< ?php-->
                        <!--    $args = array(-->
                        <!--    'post_per_page' => 3,-->
                        <!--    'orderby'       => 'post_date',-->
                        <!--    'order'         => 'DESC'-->
                        <!--);-->
                        
                        <!--$post_array = get_posts($args);-->
                        
                        <!--foreach ($post_array as $post) {-->
                        <!--?>-->
                             <!--Single Album -->
                        <!--    <div class="single-album">-->
                                <!--< ?php $post->post_thumbnail; ?>-->
                        <!--        <div class="album-info">-->
                        <!--            <a href="#">-->
                        <!--                <h5>< ?php echo $post->post_title; ?></h5>-->
                        <!--            </a>-->
                        <!--            <p> < ?php echo $post->post_content; ?></p>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--< ?php-->
                        <!--}-->
                        <!--?>-->
                        
                        <!--WP_QUERY ESTE ES EL MODO BUENO PARA HACER LA CONSULTA DE LOS ÚLTIMOS POSTS...SE REHACE ABAJO PARA DAR MEJOR ESTILO-->
                        <!--< ?php-->
                        <!--$args = array(-->
                        <!--    'post_per_page' => 3-->
                        <!--);-->
                        
                        <!--$custom_query = new WP_Query($args);-->
                        
                        <!--if ($custom_query->have_posts()):-->
                        <!--    while($custom_query->have_posts()):-->
                        <!--        $custom_query->the_post();-->
                        <!--?>-->
                             <!--Single Album -->
                        <!--    <div class="single-album">-->
                                <!--< ?php $post->post_thumbnail; ?>-->
                        <!--        <div class="album-info">-->
                        <!--            <a href="#">-->
                        <!--                <h5>< ?php the_title(); ?></h5>-->
                        <!--            </a>-->
                        <!--            <p> < ?php the_excerpt(); ?></p>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--< ?php-->
                        <!--endwhile;-->
                        <!--endif;-->
                        <!--?>-->
                        
                        <!--FORMA PARA DAR ESTILO APROPIADO-->
                        <?php
                        $args = array(
                            'post_type' => array ('post'),
                            'posts_per_page' => 5,
                            // Excluir todos los tipos de formato de post siguientes para que no salgan en el post destacado
                            'tax_query' => array( 
                                                array(
                                                    'taxonomy' => 'post_format',
                                                    'field' => 'slug',
                                                    'terms' => array(
                                                            'post-format-gallery', 
                                                            'post-format-link', 
                                                            'post-format-image', 
                                                            'post-format-quote', 
                                                            'post-format-audio', 
                                                            'post-format-video'
                                                    ),
                                                    'operator' => 'NOT IN'
                                                ) 
                    
                        
                            )
                        );
                        
                        $custom_query = new WP_Query($args);
                        
                        if ($custom_query->have_posts()):
                            while($custom_query->have_posts()):
                                $custom_query->the_post();
                        ?>
                        <!--Contenedor de cada uno de los post-->
                        <div class="single-event-area mb-30">
                            <div class="event-thumbnail">
                                <div class="img bg-img pb-70" style="background-image: url(<?= the_post_thumbnail_url() ?>);"></div>
                                <!--< ?= the_post_thumbnail() ?>-->
                            </div>
                            <div class="event-text">
                                <h4><?= the_title() ?></h4>
                                <div class="event-meta-data">
                                    <a href="#" class="event-place"><?= the_author() ?></a>
                                    <a href="#" class="event-date"><?php the_time('j M Y') ?></a>
                                </div>
                                <p><?= the_excerpt() ?></p>
                                <a href="<?= the_permalink() ?>" class="btn see-more-btn">Saber más</a>
                            </div>
                        </div>
                        <?php
                        endwhile;
                        endif;
                        wp_reset_query();
                        ?>
                        
                        
                        <!--QUERY POST NO SE USA-->
                        <!--< ?php query_posts('post_per_page=3'); ?>-->
                        <!--< ?php if(have_posts()): ?>-->
                        <!--< ?php while(have_posts()): ?>-->
                        <!--< ?php the_post(); ?>-->
                        
                        <!-- Single Album -->
                        <!--<div class="single-album">-->
                        <!--    < ?php the_post_thumbnail(); ?>-->
                        <!--    <div class="album-info">-->
                        <!--        <a href="#">-->
                        <!--            <h5>< ?php the_title(); ?></h5>-->
                        <!--        </a>-->
                        <!--        <p> < ?php the_excerpt(); ?></p>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--< ?php endwhile; ?>-->
                        <!--< ?php endif; ?>-->
                        
                         <!--Single Album -->
                        <!--<div class="single-album">-->
                        <!--    <img src="< ?php echo get_template_directory_uri(); ?>/img/bg-img/a1.jpg" alt="">-->
                        <!--    <div class="album-info">-->
                        <!--        <a href="#">-->
                        <!--            <h5>The Cure</h5>-->
                        <!--        </a>-->
                        <!--        <p>Second Song</p>-->
                        <!--    </div>-->
                        <!--</div>-->

                         <!--Single Album -->
                        <!--<div class="single-album">-->
                        <!--    <img src="< ?php echo get_template_directory_uri(); ?>/img/bg-img/a2.jpg" alt="">-->
                        <!--    <div class="album-info">-->
                        <!--        <a href="#">-->
                        <!--            <h5>Sam Smith</h5>-->
                        <!--        </a>-->
                        <!--        <p>Underground</p>-->
                        <!--    </div>-->
                        <!--</div>-->

                         <!--Single Album -->
                        <!--<div class="single-album">-->
                        <!--    <img src="< ?php echo get_template_directory_uri(); ?>/img/bg-img/a3.jpg" alt="">-->
                        <!--    <div class="album-info">-->
                        <!--        <a href="#">-->
                        <!--            <h5>Will I am</h5>-->
                        <!--        </a>-->
                        <!--        <p>First</p>-->
                        <!--    </div>-->
                        <!--</div>-->

                         <!--Single Album -->
                        <!--<div class="single-album">-->
                        <!--    <img src="< ?php echo get_template_directory_uri(); ?>/img/bg-img/a4.jpg" alt="">-->
                        <!--    <div class="album-info">-->
                        <!--        <a href="#">-->
                        <!--            <h5>The Cure</h5>-->
                        <!--        </a>-->
                        <!--        <p>Second Song</p>-->
                        <!--    </div>-->
                        <!--</div>-->

                         <!--Single Album -->
                        <!--<div class="single-album">-->
                        <!--    <img src="< ?php echo get_template_directory_uri(); ?>/img/bg-img/a5.jpg" alt="">-->
                        <!--    <div class="album-info">-->
                        <!--        <a href="#">-->
                        <!--            <h5>DJ SMITH</h5>-->
                        <!--        </a>-->
                        <!--        <p>The Album</p>-->
                        <!--    </div>-->
                        <!--</div>-->

                         <!--Single Album -->
                        <!--<div class="single-album">-->
                        <!--    <img src="< ?php echo get_template_directory_uri(); ?>/img/bg-img/a6.jpg" alt="">-->
                        <!--    <div class="album-info">-->
                        <!--        <a href="#">-->
                        <!--            <h5>The Ustopable</h5>-->
                        <!--        </a>-->
                        <!--        <p>Unplugged</p>-->
                        <!--    </div>-->
                        <!--</div>-->

                         <!--Single Album -->
                        <!--<div class="single-album">-->
                        <!--    <img src="< ?php echo get_template_directory_uri(); ?>/img/bg-img/a7.jpg" alt="">-->
                        <!--    <div class="album-info">-->
                        <!--        <a href="#">-->
                        <!--            <h5>Beyonce</h5>-->
                        <!--        </a>-->
                        <!--        <p>Songs</p>-->
                        <!--    </div>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Latest Albums Area End ##### -->

    <!-- ##### Buy Now Area Start ##### -->
    <section class="oneMusic-buy-now-area has-fluid bg-gray section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading style-2 mb-50">
                        <p>Últimas Reviwes</p>
                        <h2>Críticas</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-9">
                    <div class="ablums-text text-center mb-70">
                        <p>Conone nuestra opinión sobre las últimas películas que están en cartelera, queremos ofrecerte nuestra opinión sobre películas para que después compartas tu punto de vista con nosotros, esto no es una sección especializada en la que nuestra opinión es la más válida, sino que queremos que los usuarios compartan sus puntos de vista con nosotros para poder debatir y ver el mundo del cine desde otro prisma.</p>
                    </div>
                </div>
            </div>
            <div class='container'>
                <div class="row">
                    <?php
                        $args = [
                            'post_type'     => ['filmoteca_review'],
                            'posts_per_page' => 6
                        ];
                        
                        $custom_posts = new Wp_Query($args);
                        if ($custom_posts->have_posts()){
                            while($custom_posts->have_posts()){
                                $custom_posts->the_post();
                                get_template_part('templates/content', 'small-custompost');
                            }
                        }
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="load-more-btn text-center wow fadeInUp" data-wow-delay="300ms">
                        <a href="#" class="btn oneMusic-btn">Ver Más <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Buy Now Area End ##### -->

    <!-- ##### Featured Artist Area Start ##### -->
    <section class="featured-artist-area section-padding-100 bg-img bg-overlay bg-fixed" style="background-image: url(<?= get_template_directory_uri(); ?>/img/bg-img/bg-4.jpg);">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-12 col-md-5 col-lg-4">
                    <div class="featured-artist-thumb">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/bg-img/fa.jpg" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-7 col-lg-8">
                    <div class="featured-artist-content">
                        <!-- Section Heading -->
                        <div class="section-heading white text-left mb-30">
                            <p>See what’s new</p>
                            <h2>Buy What’s New</h2>
                        </div>
                        <p>Nam tristique ex vel magna tincidunt, ut porta nisl finibus. Vivamus eu dolor eu quam varius rutrum. Fusce nec justo id sem aliquam fringilla nec non lacus. Suspendisse eget lobortis nisi, ac cursus odio. Vivamus nibh velit, rutrum at ipsum ac, dignissim iaculis ante. Donec in velit non elit pulvinar pellentesque et non eros.</p>
                        <div class="song-play-area">
                            <div class="song-name">
                                <p>01. Main Hit Song</p>
                            </div>
                            <audio preload="auto" controls>
                                <source src="<?php echo get_template_directory_uri(); ?>/audio/dummy-audio.mp3">
                            </audio>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Featured Artist Area End ##### -->

    <!-- ##### Miscellaneous Area Start ##### -->
    <section class="miscellaneous-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- ***** Weeks Top ***** -->
                <div class="col-12 col-lg-4">
                    <div class="weeks-top-area mb-100">
                        <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                            <p>See what’s new</p>
                            <h2>This week’s top</h2>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="100ms">
                            <div class="thumbnail">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/bg-img/wt1.jpg" alt="">
                            </div>
                            <div class="content-">
                                <h6>Sam Smith</h6>
                                <p>Underground</p>
                            </div>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="150ms">
                            <div class="thumbnail">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/bg-img/wt2.jpg" alt="">
                            </div>
                            <div class="content-">
                                <h6>Power Play</h6>
                                <p>In my mind</p>
                            </div>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="200ms">
                            <div class="thumbnail">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/bg-img/wt3.jpg" alt="">
                            </div>
                            <div class="content-">
                                <h6>Cristinne Smith</h6>
                                <p>My Music</p>
                            </div>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="250ms">
                            <div class="thumbnail">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/bg-img/wt4.jpg" alt="">
                            </div>
                            <div class="content-">
                                <h6>The Music Band</h6>
                                <p>Underground</p>
                            </div>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="300ms">
                            <div class="thumbnail">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/bg-img/wt5.jpg" alt="">
                            </div>
                            <div class="content-">
                                <h6>Creative Lyrics</h6>
                                <p>Songs and stuff</p>
                            </div>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="350ms">
                            <div class="thumbnail">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/bg-img/wt6.jpg" alt="">
                            </div>
                            <div class="content-">
                                <h6>The Culture</h6>
                                <p>Pop Songs</p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- ***** New Hits Songs ***** -->
                <div class="col-12 col-lg-4">
                    <div class="new-hits-area mb-100">
                        <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                            <p>See what’s new</p>
                            <h2>New Hits</h2>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="100ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/bg-img/wt7.jpg" alt="">
                                </div>
                                <div class="content-">
                                    <h6>Sam Smith</h6>
                                    <p>Underground</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="<?php echo get_template_directory_uri(); ?>/audio/dummy-audio.mp3">
                            </audio>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="150ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/bg-img/wt8.jpg" alt="">
                                </div>
                                <div class="content-">
                                    <h6>Power Play</h6>
                                    <p>In my mind</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="<?php echo get_template_directory_uri(); ?>/audio/dummy-audio.mp3">
                            </audio>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="200ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/bg-img/wt9.jpg" alt="">
                                </div>
                                <div class="content-">
                                    <h6>Cristinne Smith</h6>
                                    <p>My Music</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="<?php echo get_template_directory_uri(); ?>/audio/dummy-audio.mp3">
                            </audio>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="250ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/bg-img/wt10.jpg" alt="">
                                </div>
                                <div class="content-">
                                    <h6>The Music Band</h6>
                                    <p>Underground</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="<?php echo get_template_directory_uri(); ?>/audio/dummy-audio.mp3">
                            </audio>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="300ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/bg-img/wt11.jpg" alt="">
                                </div>
                                <div class="content-">
                                    <h6>Creative Lyrics</h6>
                                    <p>Songs and stuff</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="<?php echo get_template_directory_uri(); ?>/audio/dummy-audio.mp3">
                            </audio>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="350ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/bg-img/wt12.jpg" alt="">
                                </div>
                                <div class="content-">
                                    <h6>The Culture</h6>
                                    <p>Pop Songs</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="<?php echo get_template_directory_uri(); ?>/audio/dummy-audio.mp3">
                            </audio>
                        </div>
                    </div>
                </div>

                <!-- ***** Popular Artists ***** -->
                <div class="col-12 col-lg-4">
                    <div class="popular-artists-area mb-100">
                        <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                            <p>See what’s new</p>
                            <h2>Popular Artist</h2>
                        </div>

                        <!-- Single Artist -->
                        <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="100ms">
                            <div class="thumbnail">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/bg-img/pa1.jpg" alt="">
                            </div>
                            <div class="content-">
                                <p>Sam Smith</p>
                            </div>
                        </div>

                        <!-- Single Artist -->
                        <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="150ms">
                            <div class="thumbnail">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/bg-img/pa2.jpg" alt="">
                            </div>
                            <div class="content-">
                                <p>William Parker</p>
                            </div>
                        </div>

                        <!-- Single Artist -->
                        <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="200ms">
                            <div class="thumbnail">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/bg-img/pa3.jpg" alt="">
                            </div>
                            <div class="content-">
                                <p>Jessica Walsh</p>
                            </div>
                        </div>

                        <!-- Single Artist -->
                        <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="250ms">
                            <div class="thumbnail">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/bg-img/pa4.jpg" alt="">
                            </div>
                            <div class="content-">
                                <p>Tha Stoves</p>
                            </div>
                        </div>

                        <!-- Single Artist -->
                        <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="300ms">
                            <div class="thumbnail">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/bg-img/pa5.jpg" alt="">
                            </div>
                            <div class="content-">
                                <p>DJ Ajay</p>
                            </div>
                        </div>

                        <!-- Single Artist -->
                        <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="350ms">
                            <div class="thumbnail">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/bg-img/pa6.jpg" alt="">
                            </div>
                            <div class="content-">
                                <p>Radio Vibez</p>
                            </div>
                        </div>

                        <!-- Single Artist -->
                        <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="400ms">
                            <div class="thumbnail">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/bg-img/pa7.jpg" alt="">
                            </div>
                            <div class="content-">
                                <p>Music 4u</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Miscellaneous Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-100 bg-img bg-overlay bg-fixed has-bg-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/bg-img/bg-2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading white wow fadeInUp" data-wow-delay="100ms">
                        <p>See what’s new</p>
                        <h2>Get In Touch</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Contact Form Area -->
                    <div class="contact-form-area">
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group wow fadeInUp" data-wow-delay="100ms">
                                        <input type="text" class="form-control" id="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group wow fadeInUp" data-wow-delay="200ms">
                                        <input type="email" class="form-control" id="email" placeholder="E-mail">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group wow fadeInUp" data-wow-delay="300ms">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group wow fadeInUp" data-wow-delay="400ms">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 text-center wow fadeInUp" data-wow-delay="500ms">
                                    <button class="btn oneMusic-btn mt-30" type="submit">Send <i class="fa fa-angle-double-right"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->
<?php
    get_footer();
?>