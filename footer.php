            
		</div> <!-- end #container -->
        <div id="greyfooter">
            <div class="container"> <!-- end #container -->
                <div class="row">
                    <div class="span4">
                        <h2 class="mostSizes"><div class="sprite sprite-about-icon-png"></div>What's it about?</h2>
                        <h2 class="midSizes"><div class="mid sprite sprite-about-icon-png"></div>About</h2>
                        
                        <p> Cardiff Dev Workshop is a volunteer-run series of workshops
                            for software developers in the South West. We meet up,
                            someone gives a talk, then we do some practical work
                            and try to answer each other's questions.</p>
                        
                        <p> <em>It's as good as you make it!</em></p>
                        
                        <p><a href="/about" class="btnReadMore" rel="bookmark" title="About Cardiff Dev Workshop"><span class="sprite sprite-readmore-white-png">&gt;</span>Read more</a></p>
                    </div>
                    <div class="span4 upcomingEvents">
                        <h2 class="mostSizes"><div class="sprite sprite-events-icon-png"></div>Upcoming events</h2>
                        <h2 class="midSizes"><div class="sprite sprite-events-icon-png"></div>Events</h2>
                        <div class="widgetBox">
                            <?php dynamic_sidebar('calendar'); ?>
                        </div>
                        <p><a href="/calendar" class="btnReadMore" rel="bookmark" title="Cardiff Dev Workshop events"><span class="sprite sprite-readmore-white-png">&gt;</span>Read more</a></p>
                    </div>
                    <div class="span4 latestblog">
                        <h2><div class="sprite sprite-blogs-icon-png"></div>Latest blog</h2>
                        <?php dynamic_sidebar('otw-sidebar-2'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div id="bluefooter">
            <div class="container"> <!-- end #container -->
                <footer class="footer" role="contentinfo">
                    <div id="inner-footer" class="wrap clearfix">
                        <nav role="navigation">
                            <div class="source-org copyright">&copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?>.</div>
                        
                            <div id="twitterLink"><a class="sprite sprite-twitter-footer-png" href="https://twitter.com/cardiffdevworks">@cardiffdevworks</a></div>
                            
                            <div id="karoloLogo"><span style="float:left;">Website Design by </span><a href="http://www.karolodesign.com/" class="sprite sprite-karolo-logo-png">karolo</a></div>
                        </nav>
                        
                        

                    </div> <!-- end #inner-footer -->
                </footer> <!-- end footer -->
            </div>
        </div>
        <!-- all js scripts are loaded in library/bones.php -->
		<?php wp_footer(); ?>

	</body>

</html>
