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
<!-- http://www.map-generator.org/33f540a4-c016-4484-b5d1-e49d2ad9ba41/iframe-map.aspx -->
                                    <iframe src="http://www.map-generator.org/33f540a4-c016-4484-b5d1-e49d2ad9ba41/iframe-map.aspx" scrolling="no" height="350px" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br><small><a href="https://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=cf10 1by&amp;aq=&amp;sll=52.405331,-4.159948&amp;sspn=3.579741,8.76709&amp;ie=UTF8&amp;hnear=Cardiff CF10 1BY, United Kingdom&amp;t=m&amp;z=14&amp;iwloc=A&amp;source=embed" style="text-align:left">View Larger Map</a></small>
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
