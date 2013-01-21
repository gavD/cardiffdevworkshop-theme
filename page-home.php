<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
			<div id="content">
				<div id="inner-content" class="wrap clearfix">
				    <div id="main" class="eightcol mainhome first clearfix" role="main">
					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						    <section class="entry-content">
                                <div class="hero-unit">
                                    <h1>Share your knowledge, learn new skills &amp; meet fellow coders</h1>
                                  </div>
                                  <div class="row">
                                  <div class="span4 googlemaps">
                                    <iframe src="http://www.map-generator.org/621b37ee-99fe-44dc-b07c-d7a3a4a52d77/iframe-map.aspx" scrolling="no" height="350px" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br><small><a href="http://www.map-generator.org/621b37ee-99fe-44dc-b07c-d7a3a4a52d77/large-map.aspx" target="_blank">Open large map<a/></small>
                                  </div>
                                  <div class="span8">
                                      <?php the_content(); ?>
                                  </div>
                                  </div>
						    </section> <!-- end article section -->
					    </article> <!-- end article -->
					    <?php endwhile; ?>	
					    <?php else : ?>
        					<article id="post-not-found" class="hentry clearfix">
        					    <header class="article-header">
        						    <h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
        						</header>
        					    <section class="entry-content">
        						    <p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
        						</section>
        						<footer class="article-footer">
        						    <p><?php _e("This is the error message in the page-custom.php template.", "bonestheme"); ?></p>
        						</footer>
        					</article>
					    <?php endif; ?>
				    </div> <!-- end #main -->
				</div> <!-- end #inner-content -->
			</div> <!-- end #content -->
<?php get_footer(); ?>
