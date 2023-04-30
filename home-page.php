<?php
    /*
    Template Name: Home page
    */
    ?>
<?php get_header();?><!--  Tells WordPress to include header.php -->
         <section class="container-fluid aboutbg text-center">
            <div class="container">
                <h2><?php the_field('titleforaboutme'); ?></h2><!--  custom field for the aboutme content-->
                <p class="particle"><?php the_field('subtitleforaboutme'); ?></p>
<p class="about-text"><?php the_field('paragraphforaboutme'); ?></p>
            </div><!-- container-->
            <div class="blocker"></div>
        </section>
    
    
 
    <section class="container-fluid articlesbg">
    <div class="container">
        <div class="text-center">
          <h3 >LATEST ARTICLES</h3>
        </div>
        <div class="row">
          <!--  a row that gives us access to the BS columns-->
          <div class="col-md-4  text-center ">
          <img class="img-fluid" alt="article image 1" src="<?php the_field('articleimage');?>">
          <h4 class="article-title"><?php the_field('articletitle'); ?></h4>
          <p class="date" ><?php the_field('articledate'); ?></p>
          <p class="article-p"><?php the_field('articleexcerpt'); ?> </p>
          <a href="<?php the_field('readmore'); ?>" class="readmore">CONTINUE READING</a>
          </div>

          <div class="col-md-4  text-center ">
          <img class="img-fluid" alt="article image 2" src="<?php the_field('articleimage2');?>">
          <h4 class="article-title"><?php the_field('articletitle2'); ?></h4>
          <p class="date" ><?php the_field('articledate2'); ?></p>
          <p class="article-p"><?php the_field('articleexcerpt2'); ?> </p>
          <a href="<?php the_field('readmore2'); ?>" class="readmore">CONTINUE READING</a>
          </div>

          <div class="col-md-4  text-center ">
          <img class="img-fluid" alt="article image 3" src="<?php the_field('articleimage3');?>">
          <h4 class="article-title"><?php the_field('articletitle3'); ?></h4>
          <p class="date" ><?php the_field('articledate3'); ?></p>
          <p class="article-p"><?php the_field('articleexcerpt3'); ?> </p>
          <a href="<?php the_field('readmore3'); ?>" class="readmore">CONTINUE READING</a>
          </div>
        </div>
        <!-- row-->
      </div>
               </section><!-- container-fluid-->
               <?php get_footer();?> 
               <!-- Tells WordPress to include footer.php   -->
