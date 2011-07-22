             </div>
             
             </div>
             
             <div class="footer">
             <div class="footerholder">
              <div class="threecol bfooter rssfoot"><h3><a href="http://belinkddesign.com/blog/feed">Get RSS &gt;&gt;</a></h3>
                <p>Get updates from my blog; see what I'm up to, get some industry tips or just listen to me babble.</p>
                <p><a href="http://belinkddesign.com/blog/feed">http://belinkddesign.com/blog/feed</a></p>
                </div>
                
                <div class="threecol bfooter desfoot"><h3><a href="http://www.belinkddesign.com/portfolio/">Get Designed &gt;&gt;</a></h3>
                 <p>Get ahold of me today with the ease of email; request a quote, or just ask a question - or even request a design.</p>
                 <p>What I do:</p>
                 <ul><li>Logo Design</li>
                 <li>Graphic/Ad Design</li>
                 <li>Web Design</li>
                 <li>Wordpress Templates</li>
                 <li>And much, much more - just ask!</li></ul>
                </div>
                
                <div class="threecol bfooter confoot"><h3><a href="http://www.belinkddesign.com/contact/">Get Contacted &gt;&gt;</a></h3>
                <?php global $contact_page; if (!$contact_page) { ?>
                <div id="contact-form">
              		  <form id="form" name="form" method="post" action="http://bigtotems.belinkddesign.com/wp-content/themes/june2009/securemail.php">

                    <p><label>Name:</label><input type="text" value="Your (full) name" id="name" /></p>
                    <p><label>Email:</label><input type="text" value="Your (preferred) email" id="email" /></p>
                    <p><label>Spam:</label><input type="text" value="What is 1 + 1? (hint: 2)" id="spam" /></p>
                    <p><label>Comments:</label><textarea rows="6" name="comments" value="(Insert comments, questions, or spam here)" id="comments"></textarea>
                    <button type="button" id="submit_btn">Submit</button></p>
                    
                    </form></div>
                    <?php }
					else { ?>
					<p>Please use the form above!</p>
					<?php } ?>
                </div>
           
           <div style="clear:both;"></div></div>
           
        </div>
    <div style="clear:both;"></div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>
