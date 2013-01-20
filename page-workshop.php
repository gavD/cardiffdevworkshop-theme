<?php
/*
Template Name: Workshop
*/
?>

<?php get_header(); ?>
			<div id="content">
				<div id="inner-content" class="wrap clearfix">
				    <div id="main" class="not-homepage eightcol first clearfix" role="main">
					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						    <section class="entry-content">
                                
                              <div class="row">
                                  <div class="span8">
                                      <h1 class="blue"><?php echo get_the_title()?></h1>
                                      <?php the_content(); ?>
                                  </div>
                                  <div class="span4">
                                      <div class="widget widget_text">
                                          <h4 class="widgettitle">Register for this Event</h4>
                                      <?php if ( isset($si_contact_form) ) echo $si_contact_form->si_contact_form_short_code(array('form' => 2)); ?>
                                      </div>
                                      <div id="text-2" class="widget widget_text"><h4 class="widgettitle">Interested in speaking?</h4>			<div class="textwidget">If you would like to speak at one of our events, please <a href="/contact">Contact Us</a></div>
		</div>
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
