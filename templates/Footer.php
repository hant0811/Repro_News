<footer>
	<?php if ( ! defined('SITE_PATH')) die ('Bad requested!'); //BAO MAT ?>
		<div class="wrapper">
			<div id="footer-widget">
				<ul>
					<?php foreach($this->footer as $footer) { ?>
						<li id="about">
							<h4><span><?php echo $footer['title'] ?></span></h4>
							<p><?php echo Functions::the_excerpt($footer['content'], 400) ?></p>
						</li>
					<?php } ?>
				</ul>
			</div>

			<div id="logo-footer">
				<img src="<?php echo SITE_PATH ?>public/public/images/logo-footer.png" alt="">
			</div>

		</div>
		
	</footer><!--END FOOTER-->
	<div id="footer-bottom">
		<div class="wrapper"> 
			<p id="copyright">Copyright 2010 Repro. All Rights Reserved.</p>
			<p id="author">Powered by WordPress. Repro theme by Orman</p>
		</div>
			
	</div>
	
	
</body>
</html>