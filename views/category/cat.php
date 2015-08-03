<div id="page-wrap">
			<div class="word-new">
				<span>Home > <?php echo $this->category['cat_title'] ?></span>
				<h1><?php echo $this->category['cat_title'] ?></h1>
			</div><!--END WORD-NEW-->

			<!-- SLIDE -->
			<div class="slider" id="slider">
				<ul class="list">
					<?php foreach($this->slide as $slide){ ?>
						<li class="item">
							<div class="post-slide">
								<img src="<?php echo $slide['image'] ?>" alt="">
								<div class="content-slide">
									<h3><a href="<?php echo SITE_PATH .'tin-tuc/'. $slide['ID'] ?>"><?php echo $slide['news_title'] ?></a></h3>
									<p class="date"><?php echo $slide['post_on'] ?>, <a href="<?php echo SITE_PATH .'tin-tuc/'. $slide['ID'] ?>#post-comments"><?php echo $slide['count'] ?> comments</a></p>
									<p class="content-post"><?php echo Functions::the_excerpt($slide['content'], 250) ?></p>
								</div>
							</div>
						</li>
					<?php } ?>
				</ul>
			</div><!--END SLIDER-->

			<div id="last-posts" class="group">
				<ul>
					<?php foreach($this->lastPost as $lastPost){ ?>
						<li>
							<a class='last-post-img' href="<?php echo SITE_PATH .'tin-tuc/'. $lastPost['ID'] ?>"><img src="<?php echo $lastPost['image'] ?>" alt="banner"></a>
							<h3><a href="<?php echo SITE_PATH .'tin-tuc/'. $lastPost['ID'] ?>"><?php echo Functions::the_excerpt($lastPost['news_title'], $string = 50) ?></a></h3>
							<p class="date"><?php echo $lastPost['post_on'] ?>, <a href="<?php echo SITE_PATH .'tin-tuc/'. $lastPost['ID'] ?>#post-comments"><?php echo $lastPost['count'] ?> comments</a></p>
							<p class="content-post"><?php echo Functions::the_excerpt($lastPost['content'], 250) ?></p>
						</li>
					<?php } ?>
				</ul>
			</div><!--END LAST-POST-->

			<div id="list-post">
				<?php foreach($this->allPost as $post) { ?>
					<div class="post">
						<a class="post-img" href="<?php echo SITE_PATH .'tin-tuc/'. $post['ID'] ?>"><img src="<?php echo $post['image'] ?>" alt="banner"></a>
						<a href="<?php echo SITE_PATH .'tin-tuc/'. $post['ID'] ?>"><h3><?php echo Functions::the_excerpt($post['news_title'], $string = 50) ?></h3></a>
						<p class="date"><?php echo $post['post_on'] ?>, <a href="<?php echo SITE_PATH .'tin-tuc/'. $post['ID'] ?>#post-comments"><?php echo $post['count'] ?> comments</a></p>
						<p class="content-post"><?php echo Functions::the_excerpt($post['content'], 150) ?></p>
					</div>
				<?php } ?>
			</div><!--END LIST-POST-->

			<div id="pagination">
				<p>Page 1 of 3</p>
				<ul>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#"> > </a></li>
				</ul>
			</div><!--END PAGINATION-->
		</div><!--END PAGE-WRAP-->