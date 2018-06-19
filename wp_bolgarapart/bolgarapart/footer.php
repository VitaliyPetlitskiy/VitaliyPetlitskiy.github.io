<footer>
	<div class="zerogrid">
		<div class="wrap-footer">
			<div class="row">
				<div class="col-1-2">
					<div class="wrap-col">
						<div class="copy-right">
							<p>Copyright @ <?php bloginfo ('name'); ?> 2018 <a href="#"></a></p>
						</div>
					</div>
				</div>
				<div class="col-1-2">
					<!-- <div class="wrap-col">
						<ul class="bottom-social f-right">
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						</ul>
						<div class="clear"></div>
					</div> -->
				</div>
			</div>
		</div>
	</div>
</footer>


<script type="text/javascript">
    $(function() {
		if ($.browser.msie && $.browser.version.substr(0,1)<7)
		{
		$('li').has('ul').mouseover(function(){
			$(this).children('ul').css('visibility','visible');
			}).mouseout(function(){
			$(this).children('ul').css('visibility','hidden');
			})
		}

		/* Mobile */
		$("#menu-trigger").on("click", function(){
			$("#menu").slideToggle();
		});

		// iPad
		var isiPad = navigator.userAgent.match(/iPad/i) != null;
		if (isiPad) $('#menu ul').addClass('no-transition');      
    });          
</script>
<script src="<?php bloginfo('template_directory') ?>/js/jquery1111.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory') ?>/js/script.js"></script>
<script src="<?php bloginfo('template_directory') ?>/js/lightbox-plus-jquery.min.js"></script>


</div>
</body></html>