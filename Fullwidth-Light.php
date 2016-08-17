<?php
/*
template name:Fullwidth-Light

*/
 get_header(); ?>




 </div></section>

      <section class="main container">
        <div class="row">
          <section class="posts col-md-12">


    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article class="post clearfix">
        <div >
          <a  class="thumb pull-left" href="<?php the_permalink();?>">
                <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'list_articles_thumbs' ); } ?>
              </a></div>
        <h2 class="post-title">
          <a href="<?php the_permalink();?>"><?php the_title();?></a>
        </h2>
        <div class="dat">
          
            <p class="post-contenido text-justify">
             <?php the_content(); ?>
            </p>


          </article>
          <?php endwhile; else: ?>
          <h2>No se encontaron articulos</h2>
          <?php endif; ?>



 </section>

    </div>
    </section>


    <?php get_footer(); ?>
