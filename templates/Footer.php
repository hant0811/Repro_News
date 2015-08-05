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
				<img src="<?php echo SITE_PATH ?>public/public/images/logo.png" alt="">
			</div>

		</div>
		
	</footer><!--END FOOTER-->
	<div id="footer-bottom">
		<div class="wrapper"> 
			<p id="copyright">Copyright Thái Hà.</p>
			<p id="author">Đây là Project đầu tiên của Thái Hà</p>
		</div>
			
	</div>
	
	
</body>
</html>