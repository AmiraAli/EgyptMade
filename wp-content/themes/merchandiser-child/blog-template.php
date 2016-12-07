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
                                                    <?php
                                                    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
                                                    $args=['post_type'=>'post','order' => 'DESC','orderby' => 'post_date',
                                                    'posts_per_page' => 3,'paged' => $paged];
                                                    $posts=new wp_Query($args);?>
                                            <?php if ( $posts->have_posts() ) : ?>
                                                 <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
                                                    <li>
                                                        <article id="post-<?php the_ID();?>" <?php post_class(); ?>>
                                                            <header class="entry-header">
                                                                <div class="image-wrapper">
                                                                    <?php if ( has_post_thumbnail() ) {?>
                                                                    <a class="entry-link" href="<?php the_permalink();?>">
                                                                        <?php the_post_thumbnail();?></a>
                                                                    <?php } else { ?>
                                                                    <a class="entry-link" href="<?php the_permalink();?>">

                                                                    <img height="184" width="274" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" src="http://localhost/EgyptMade/wp-content/uploads/2016/12/thumbnail-default.jpg">
</a>
                                                                    <?php } ?>

                                                                <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                                                                <div class="excerpt">
                                                                <?php the_excerpt(); ?>
                                                                <a class="read_more" href="<?php echo get_permalink(); ?>"> Read More...</a>
                                                                </div>
                                                                </div>
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
                                                    <?php wp_reset_query(); ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- .columns -->
                                </div><!-- .row -->
                                        <?php if ($posts->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>
                                         <?php
                                                $orig_query = $wp_query; // fix for pagination to work
                                                $wp_query = $posts;
                                                ?>
                                                <div style="text-align: center;">
                                                <?php $big = 999999999;  echo paginate_links( array(
                                                    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                                    'format' => '?paged=%#%',
                                                    'current' => max( 1, get_query_var('paged') ),
                                                    'total' => $wp_query->max_num_pages
                                                )
                                                 );?>
                                                </div>

<
                                                <?php
                                                $wp_query = $orig_query; // fix for pagination to work
                                                ?>
                                        <?php } ?>

                                         <?php endif;?>




                            </main><!-- #main -->
                        </div><!-- #primary -->
                    </div>
<?php get_footer(); ?>
