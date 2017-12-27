<section class="footer-cnt">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8">
				<span>&copy;1999 - 2017 <a href="mailto:marc.takeuchi@gmail.com" title="Contact Marc Takeuchi">Marc Takeuchi</a> | powered by: bamboo.digital | <a href="../../" title="Home">Home<a/> | <a href="../../about" title="About">About</a> | <a href="../../faq" title="FAQ">FAQ</a> | <a href="../../blog" title="Blog">Blog</a></span>
			</div>
			<div class="col-xs-12 col-sm-4">
				<div class="social">
					<a href="https://www.linkedin.com/in/marctakeuchi" target="_blank" title="Marc Takeuchi LinkedIn"><img src="/graphics/linkedin-ico.png" alt="Marc Takeuchi LinkedIn"></a>
					<a href="https://www.instagram.com/marctakeuchi/" target="_blank" title="Marc Takeuchi Instagram"><img src="/graphics/instagram-ico.png" alt="Marc Takeuchi Instagram"></a>
					<a href="https://www.facebook.com/marc.t.takeuchi" target="_blank" title="Marc Takeuchi Facebook"><img src="/graphics/facebook-ico.png" atl="Marc Takeuchi Facebook"></a>
				</div>
			</div>
		</div>
	</div>
</section>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<script> 
	$(window).scroll(function() {
		// 100 = The point you would like to fade the nav in.
  
		if ($(window).scrollTop() > 100 ){
    		$('.navbar-default').addClass('no-op');
    
  		} else {
    		$('.navbar-default').removeClass('no-op');
 		};   	
	});

	$('.scroll').on('click', function(e){		
		e.preventDefault()
	    
	  $('html, body').animate({
	      scrollTop : $(this.hash).offset().top
	    }, 1500);
	});
</script>