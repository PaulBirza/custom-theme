<?php
/*
Template Name: Page
*/

/**
 * @package customtheme
 */

get_header(); ?>

<section class="container-fluid">
  <div class="container">
    <div id="primary" class="content-area col-md-<?php echo ( is_active_sidebar( 'sidebar-1' ) ? '9' : '12' ); ?> col-sm-12">

      <main id="main" class="site-main" role="main">

        <div class="content-editable">
          <?php
            // Start the Loop.
            while ( have_posts() ) : the_post();
              // Include the page content template.
              get_template_part( 'content', 'page' );
              // If comments are open or we have at least one comment, load up the comment template.
              if ( comments_open() || get_comments_number() ) {
                comments_template();
              }
            endwhile;
          ?>
        </div>

      </main>

    </div>
    <?php
    get_sidebar();
    ?>


  </div>
</section>




<!-- 

<div id="primary" class="content-area col-md-<?php echo ( is_active_sidebar( 'sidebar-1' ) ? '6' : '12' ); ?> col-sm-12">

  <main id="main" class="site-main" role="main">

    <div class="content-editable">
      <?php
        // Start the Loop.
        while ( have_posts() ) : the_post();
          // Include the page content template.
          get_template_part( 'content', 'page' );
          // If comments are open or we have at least one comment, load up the comment template.
          if ( comments_open() || get_comments_number() ) {
            comments_template();
          }
        endwhile;
      ?>
    </div>

  </main>

</div> -->


<?php
get_sidebar();
get_footer();
