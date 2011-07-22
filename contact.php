<? 
/*<br />
Template Name: contactpage
*/
?>

<?php define('WP_USE_THEMES', false); get_header(); ?>

 <div class="bordering">
    
    <h1 class="centered">Hi there!  Use this simple and small <span class="pshop">contact form</span> to get ahold of me.  I will try to respond within <span class="sites">one business day</span>.</h1>
    
        <div class="content">
        


<div id="contactform"><div id="message"></div>
              		  <form id="form2" name="form" method="post" action="http://bigtotems.belinkddesign.com/wp-content/themes/june2009/securemail.php">

                    <p><label>Name: <span class="small">Your name</span></label><input type="text" id="name" /></p>
                    <p><label>Email: <span class="small">Your email</span></label><input type="text" id="email" /></p>
                    <p><label>1+1 equals: <span class="small">hint: 2</span></label><input type="text" " id="spam" /></p>
                    <p><label>Comments:</label><textarea rows="6" name="comments" value="(Insert comments, questions, or spam here)" id="comments"></textarea>
                    <button type="button" id="submit_btn">Submit</button></p>
                    
                    </form></div>
                    
                

<div style="clear:both;"></div>  </div>
           
           
<?php get_footer();?>