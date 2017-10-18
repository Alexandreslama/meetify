<?php get_header(); //appel du template header.php  ?>

<div id="content" class="container">
    <div class="row">
        
    
    <?php
    // boucle WordPress
    if (have_posts()){
        while (have_posts()){
            the_post();
    ?>
    <article class="row">
        <div class="col-sm-6">
        <?php 
            if(has_post_thumbnail())
            {
                echo '<div class="thumbnail">';
                the_post_thumbnail("full");
                echo '</div>';
            }
         ?>
         </div>
            <br>
            <div class="col-sm-6">
            <h1><?php the_title(); ?></a></h1>            
            <p><?php the_content(); ?></p>
            <p> <?php echo 'Age : ' ?><?php the_field('age'); ?></p>
            <p> <?php echo 'Sexe : ' ?><?php the_field('sexe'); ?></p>
            </div>
            <hr>
     </article>

    <?php
    }
    }
    else {
    ?>
    Nous n'avons pas trouvé d'article répondant à votre recherche
    <?php
    }
    ?>
    </div>
</div> <!-- /content -->

<?php get_footer(); //appel du template footer.php ?>