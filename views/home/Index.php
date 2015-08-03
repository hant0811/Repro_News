<div id="page-wrap">
			<!-- SLIDE -->
			<div class="slider" id="slider">
				<ul class="list">
					<?php foreach($this->slide as $slide){ ?>
					<li class="item">
						<div class="post-slide">
							<img src="<?php echo $slide['image'] ?>" alt="">
							<div class="content-slide">
								<h3><a href="<?php echo SITE_PATH . "tin-tuc/" . $slide['ID'] .'/'. RewriteUrl::Encode($slide['news_title']); ?>"><?php echo $slide['news_title']; ?></a></h3>
								<p class="date"><?php echo $slide['post_on']; ?>, <a href="<?php echo SITE_PATH . "tin-tuc/" . $slide['ID'] .'/'. RewriteUrl::Encode($slide['news_title']); ?>#post-comments"><?php echo $slide['count']; ?> comments</a></p>
								<p class="content-post"><?php echo Functions::the_excerpt($slide['content'], $string = 250); ?></p>
							</div>
						</div>
					</li>
					<?php } ?>
				</ul>

				<div id="test">
					
				</div>
			</div><!--END SLIDER-->

			<div id="last-posts" class="group">
				<div class="widget" id="video">
					<h4><a href="#">  Latest Post </a></h4>
				</div><!--END VIDEO-->
				<ul>
					<?php
						foreach($this->news as $news){
					 ?>
						<li>
							<a class='last-post-img' href="#"><img src="<?php echo $news['image'] ?>" alt="banner"></a>
							<h3 style="font-weight:bold"><a href="<?php echo SITE_PATH . "tin-tuc/" . $news['ID'] .'/'. RewriteUrl::Encode($news['news_title']); ?>"><?php echo $news['news_title']; ?></a></h3>
							<p class="date"><?php echo $news['post_on']; ?>, <a href="<?php echo SITE_PATH . "tin-tuc/" . $news['ID'] .'/'. RewriteUrl::Encode($news['news_title']); ?>#post-comments"><?php echo $news['count']; ?> comments</a></p>
							<p class="content-post"><?php echo Functions::the_excerpt($news['content'], $string = 250); ?></p>
						</li>

					<?php } ?>

				</ul>
			</div><!--END LAST-POST-->

			<div id="category-home">

				<?php 
					foreach ($this->category as $value) {	
				?>
					<div class="category-home">
						<div class="widget" id="video">
							<h4><a href="<?php echo SITE_PATH . "category/" . $value['ID']; ?>">  <?php echo $value["cat_title"]; ?> </a></h4>
						</div><!--END VIDEO-->
						<ul>
						<?php
							foreach ($value['post'] as $value2) {
						?>
							<li>
								<a class="img-tabs-nav" href="#"><img src="<?php echo $value2['image'] ?>" alt="post"></a>
								<h4><a href="<?php echo SITE_PATH ?>tin-tuc/<?php echo $value2['ID']; ?>/<?php echo RewriteUrl::Encode($value2['news_title']); ?>"> <?php echo $value2['news_title'] ?></a></h4>
								<p class="date"><?php echo $value2['post_on'] ?>, <a href="<?php echo SITE_PATH . "tin-tuc/" . $value2['ID']; ?>#post-comments"><?php echo $value2['count'] ?> comments</a></p>
							</li>
						<?php
							}
						?>
						</ul>
					</div>

				<?php
					}
				?>
			</div> <!-- END CATEGORY HOME -->

			
		</div><!--END PAGE-WRAP-->