<?php
/*
  Template Name: Blog Template
 */
get_header();
?>
                        <div id="primary" class="content-area fullwidth">
                            <main id="main" class="site-main">
                                <div class="row">
                                    <div class="large-10 columns small-centered no-pad">
                                        <div class="shop-page-title-wrapper ">
                                            <h1 class="shop-page-title entry-title page-title ">Blog<!--<sup><i class="fa fa-info-circle"></i></sup>--></h1>
                                        </div>
                                            <div class="row">
                                            <div class="large-12 columns">
                                                <ul id="masonry_grid" class="blog_posts masonry_columns_3" data-columns>
                                                    <?php $args=['post_type'=>'post','order' => 'DESC','orderby' => 'post_date','posts_per_page'=>5,'paged'=> $paged];
                                                    $posts=new wp_Query($args);?>
                                                    <?php if ( $posts->have_posts() ) : ?>
                                                    <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
                                                    <li>
                                                        <article id="post-<?php the_ID();?>" <?php post_class(); ?>>
                                                            <header class="entry-header">
                                                                <div class="image-wrapper">
                                                                    <?php if ( has_post_thumbnail() ) {?>
                                                                    <a class="entry-link" href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>

                                                                   <?php } else { ?>
                                                                        <div style="background: #F7F7F7; min-height: 457px;"></div>
                                                                    <?php } ?>
                                                                </div>
                                                                <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

                                                                <a class="entry-link" href="<?php the_permalink();?>"></a>
                                                            </header><!-- .entry-header -->
                                                            <div class="entry-content">
                                                                <?php
                                                                wp_link_pages( array(
                                                                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'getbowtied' ),
                                                                    'after'  => '</div>',
                                                                ) );
                                                                ?>
                                                            </div><!-- .entry-content -->
                                                            <footer class="entry-footer">
                                                            </footer><!-- .entry-footer -->
                                                        </article><!-- #post-## -->
                                                    </li>
                                                        <?php endwhile;?>
                                                    <?php endif;?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- .columns -->
                                </div><!-- .row -->



                            </main><!-- #main -->
                        </div><!-- #primary -->
                    </div>

<?php get_footer(); ?>