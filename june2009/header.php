<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>BeLinkd - I Get Design</title>

<link href="style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-5691243-2");
pageTracker._trackPageview();
} catch(err) {}</script>

<link rel="stylesheet" href="<?php echo get_option('home'); ?>/wp-content/themes/june2009/style.css" type="text/css" />
<script type='text/javascript' src='<?php echo get_option('home'); ?>/wp-content/themes/february/animatedcollapse.js'></script>
<script type='text/javascript' src='<?php echo get_option('home'); ?>/wp-content/themes/february/jquery.min.js'></script>
<script type='text/javascript' src='<?php echo get_option('home'); ?>/wp-content/themes/february/carousel_behavior.js'></script>
<script type='text/javascript' src='<?php echo get_option('home'); ?>/wp-content/themes/june2009/jquery-1.2.6.js'></script>


<script>
$(document).ready(function(){
    
            
$("#submit_btn").click(function(){                                          
        $(".error").hide();
        var hasError = false;
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,})?$/; // Longest TLD is currently 8 characters, so probably should have no limit
        //var phoneReg = '';
        var emailVal = $("#email").val();
        if(emailVal == '') {
            $("#email").after('<span class="error">Please Enter a email address.</span>');
            hasError = true;
        } else if(!emailReg.test(emailVal)) {    
            $("#email").after('<span class="error">Email Address is invalid.</span>');
            hasError = true;
        } else {
            $("#email").after('');
        }
        
        var nameVal = $("#name").val();
        if(nameVal == '') {
            $("#name").after('<span class="error">Please enter your preferred salutation.</span>');
            hasError = true;
        } else {
            $("#name").after('');
        }
		
		var spamVal = $("#spam").val();
		if(spamVal != 2){
			$("#spam").after('<span class="error">Please enter the proper value of 1 + 1.</span>');
			hasError = true;
		}
		else {
			$("#spam").after('');	
		}
         
        var commentsVal = $("#comments").val();
        if(commentsVal == '') {
            $("#comments").after('<span class="error">Please Enter your questions, comments, or spam.</span>');
            hasError = true;
        } else {
            $("#comments").after('');
        }
 
        if(hasError == false) {
            $("#contactform form").hide("slow");
            $('#message').html("<p>Loading</p>");
            
            $.ajax({
                type: "POST",
                url: "http://bigtotems.belinkddesign.com/wp-content/themes/june2009/securemail.php",
                dataType: 'json',
                data: {name:nameVal,email:emailVal,comments:commentsVal},
                success: function(data, textStatus) {
                    if (data.name_error) {
                        $("#name").after('<span class="name">' + data.email_error + '</span>');
                    }
                    if (data.email_error) {
                        $("#email").after('<span class="error">' + data.email_error + '</span>');
                    }
                    if (data.comments_error) {
                        $("#comments").after('<span class="error">' + data.comments_error + '</span>');
                    }
                    if (data.error) {
                        $('#message').html("<h2 style='text-align:center; padding-top:1em;'>" + data.error + "</h2>");
                    } else {
                        $('#message').html("");
                    }
                    if (!data.sent) {
                        $("#contactform form").show("slow");
                    } else {
                        $('#message').html("<h2 style='text-align:center; padding-top:1em;'>Contact Form Submitted!</h2>")  
                        .append("<p style='text-align:center; float:none; width:auto; padding-bottom:1em;'>BeLink'd Design will contact you as soon as possible!</p>")  
			.hide()
                        .fadeIn(1500, function() { $('#message').append("<img id='checkmark' src='/images/check.png' />"); });  
                    }
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    $('#message').html("<h2 style='text-align:center; padding-top:1em;'>Contact Form Error!</h2>");
                    $("#contactform form").show("slow");
                }
            });
            return false;
        }
    });                           
});
</script>

<script>
$(document).ready(function(){
    
            
$("#submit_btn").click(function(){                                          
        $(".error").hide();
        var hasError = false;
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,})?$/; // Longest TLD is currently 8 characters, so probably should have no limit
        //var phoneReg = '';
        var emailVal = $("#email").val();
        if(emailVal == '') {
            $("#email").after('<span class="error">Please Enter a email address.</span>');
            hasError = true;
        } else if(!emailReg.test(emailVal)) {    
            $("#email").after('<span class="error">Email Address is invalid.</span>');
            hasError = true;
        } else {
            $("#email").after('');
        }
        
        var nameVal = $("#name").val();
        if(nameVal == '') {
            $("#name").after('<span class="error">Please enter your preferred salutation.</span>');
            hasError = true;
        } else {
            $("#name").after('');
        }
		
		var spamVal = $("#spam").val();
		if(spamVal != 2){
			$("#spam").after('<span class="error">Please enter the proper value of 1 + 1.</span>');
			hasError = true;
		}
		else {
			$("#spam").after('');	
		}
         
        var commentsVal = $("#comments").val();
        if(commentsVal == '') {
            $("#comments").after('<span class="error">Please Enter your questions, comments, or spam.</span>');
            hasError = true;
        } else {
            $("#comments").after('');
        }
 
        if(hasError == false) {
            $("#contactform form").hide("slow");
            $('#message').html("<p>Loading</p>");
            
            $.ajax({
                type: "POST",
                url: "http://bigtotems.belinkddesign.com/wp-content/themes/june2009/securemail.php",
                dataType: 'json',
                data: {name:nameVal,email:emailVal,comments:commentsVal},
                success: function(data, textStatus) {
                    if (data.name_error) {
                        $("#name").after('<span class="name">' + data.email_error + '</span>');
                    }
                    if (data.email_error) {
                        $("#email").after('<span class="error">' + data.email_error + '</span>');
                    }
                    if (data.comments_error) {
                        $("#comments").after('<span class="error">' + data.comments_error + '</span>');
                    }
                    if (data.error) {
                        $('#message').html("<h2 style='text-align:center; padding-top:1em;'>" + data.error + "</h2>");
                    } else {
                        $('#message').html("");
                    }
                    if (!data.sent) {
                        $("#contact-form form").show("slow");
                    } else {
                        $('#message').html("<h2 style='text-align:center; padding-top:1em;'>Contact Form Submitted!</h2>")  
                        .append("<p style='text-align:center; float:none; width:auto; padding-bottom:1em;'>BeLink'd Design will contact you as soon as possible!</p>")  
			.hide()
                        .fadeIn(1500, function() { $('#message').append("<img id='checkmark' src='/images/check.png' />"); });  
                    }
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    $('#message').html("<h2 style='text-align:center; padding-top:1em;'>Contact Form Error!</h2>");
                    $("#contact-form form").show("slow");
                }
            });
            return false;
        }
    });                           
});
</script>

<?php wp_head(); ?>

</head>

<body>

<div class="wrapper">

<div  class="navigation">
<img src="images/logo.png" alt="BeLink'd Freelance Web Design logo" />


<ul><li><a href="http://bigtotems.belinkddesign.com" title="Web Design Home">Home</a></li>
<li><a href="http://bigtotems.belinkddesign.com/blog" title="Design Blog">Blog</a></li>
<li><a href="http://bigtotems.belinkddesign.com/portfolio/" title="Freelance Design Portfolio">Portfolio</a></li>
<li><a href="http://bigtotems.belinkddesign.com/contact" title="Contact Designer">Contact</a></li>
</ul><div style="clear:both;"></div>
</div>