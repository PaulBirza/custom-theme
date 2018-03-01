<?php
/*
Template Name: Home
*/

/**
 * @package customtheme
 */

get_header(); ?>

<div id="primary" class="content-area col-md-12 col-sm-12">

	<main id="main" class="site-main" role="main">

		<section class="container-fluid">
			<div class="container">

				<div class="row centered">
					<div class="col-md-12 col-lg-12" >
					 <h1 class="entry-title site-title"><?php bloginfo( 'name' ); ?></h1>

					</div>
				</div>

			</div>
		</section>



    <section class="container-fluid">

			<div class="row centered">
				<div class="col-md-12 col-lg-12 home-page-image" >
				 <?php
				 the_post_thumbnail('large');
				 ?> 
				</div>
			</div>

	</section>

<section class="container-fluid">
	<div class="container">

		<div class="row centered">
			<div class="col-md-12 col-lg-12" >
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
		</div>

	</div>
</section>



	</main>

</div>

<?php

get_footer();
