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
                                                    'posts_per_page' => 2,'paged' => $paged];
                                                    $posts=new wp_Query($args);?>
                                            <?php if ( $posts->have_posts() ) : ?>
                                                 <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
                                                    <li>
                                                        <article id="post-<?php the_ID();?>" <?php post_class(); ?>>
                                                            <header class="entry-header">
                                                                <div class="image-wrapper">
                                                                    <?php if ( has_post_thumbnail() ) {?>
                                                                    <a class="entry-link" href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
                                                                <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                                                                <div class="excerpt">
                                                                <?php the_excerpt(); ?>
                                                                <a class="read_more" href="<?php echo get_permalink(); ?>"> Read More...</a>
                                                                </div>



                                            <?php } else { ?>
                                                    <div style="background: #F7F7F7; min-height: 457px;"></div>
                                            <?php } ?>
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
                                                <?php the_posts_pagination();?>
                                                </div>

<!--                                <div class="row">-->
<!--                                    <div class="large-12 columns ">-->
<!--                                        <nav class="posts-navigation" >-->
<!--                                            <div class="nav-links">-->
<!--                                                <a class='next page-numbers' href="--><?php //the_posts_pagination();?><!--" ></a>-->
<!---->
<!--                                            </div>-->
<!--                                        </nav>-->
<!--                                    </div>-->
<!--                                </div>-->

                                        <!--        <nav class="prev-next-posts">-->
                                        <!--            <div class="prev-posts-link">-->
                                        <!--                --><?php //echo get_next_posts_link( 'Older Entries', $posts->max_num_pages ); ?>
                                        <!--            </div>-->
                                        <!--            <div class="next-posts-link">-->
                                        <!--                --><?php //echo get_previous_posts_link( 'Newer Entries' ); ?>
                                        <!--            </div>-->
                                        <!--        </nav>-->
                                                <?php
                                                $wp_query = $orig_query; // fix for pagination to work
                                                ?>
                                        <?php } ?>

                                         <?php endif;?>

<!--load more Design -->

<!--                            <div class="row">-->
<!--        <div class="large-12 columns ">-->
<!--            <nav class="posts-navigation" >-->
<!--                <div class="nav-links">-->
<!--<a class='next page-numbers' href="" ></a>-->
<!---->
<!---->
<!--                </div>-->
<!--            </nav>-->
<!--        </div>-->
<!--    </div-->


                            </main><!-- #main -->
                        </div><!-- #primary -->
                    </div>
<?php get_footer(); ?>