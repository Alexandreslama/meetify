<?php get_header(); //appel du template header.php  ?>

<div id="content" class="container">
  <div class="row">
    <h1 class="col-sm-12 catch">Profils Récents</h1>
  </div>
  <div class="row">
    <?php
    $args=array(
      'post_type' => 'film',
      'posts_per_page' => 6,
      'orderby' => 'date',
         'order'   => 'DESC',
    );
    $the_query = new WP_Query( $args );
    // The Loop
    if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
    ?>
      <article class="col-sm-12 col-md-4">
        <?php
            if(has_post_thumbnail())
            {
              echo '<div class="thumbnail">';
                the_post_thumbnail("hub_article_thumbnail");
              echo '</div>';
            }
         ?>
        <h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>        
        <p><?php the_excerpt(); ?></p>
      </article>
      <?php
        }
      }
      /* Restore original Post Data */
      wp_reset_postdata();
   ?>

  </div>
  <div class="pagination">
    <?php wp_pagenavi(); ?>
  </div>
</div> <!-- /content -->

<?php get_footer(); //appel du template footer.php ?>