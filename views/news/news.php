<div id="page-wrap">
			<div class="word-new">
				<span>Home > <?php echo $this->news['cat_title'] ?> > <?php echo $this->news['news_title'] ?></span>
				<h1><?php echo $this->news['news_title'] ?></h1>
			</div><!--END WORD-NEW-->

			<div id="content">
				<p class="date" id='written-by'><?php echo $this->news['post_on'] ?> in <a class="count-comment" href="#"><?php echo $this->news['cat_title'] ?></a> - <a href="#post-comments" class="count-comment"><?php echo $this->news['count'] ?> Comments</a></p>
				<div class="main-content">
					<?php echo $this->news['content'] ?>
				</div><!--END MAIN-CONTENT-->
			</div><!--END CONTENT-->

			<div class="widget" id="post-author">
				<h4><a href="">About the Author</a></h4>
				<img src="<?php echo SITE_PATH ?>public/images/post.jpg" alt="">
				<p><a href="<?php echo SITE_PATH ."thanh-vien/" . $this->news['user_ID'] ?>"><?php echo $this->user['username'] ?></a>: <?php echo $this->user['status'] ?></p>
			</div>

			<div class="widget" id="related-post">
				<h4><a href="">Ralated Post</a></h4>
				<ul>
					<?php foreach($this->related as $related){ ?>
					<li>
						<a href="#"><img width="130" height="94" src="<?php echo $related['image'] ?>" alt=""></a>
						<h3><a href="<?php echo SITE_PATH . "tin-tuc/" . $related['ID'] ."/" . RewriteUrl::Encode($related['news_title']); ?>"><?php echo $related['news_title'] ?></a></h3>
					</li>
					<?php } ?>
				</ul>
			</div>

			<div id="post-comments">
				<h4><?php echo $this->news['count'] ?> Comments "<?php echo $this->news['news_title'] ?>"</h4>
				<?php foreach($this->newsComment as $newsComment){ ?>
					<div class="comment">
						<img src="<?php echo $newsComment['avatar'] ?>" alt="vatar">
						<div class="date">
							<a class="user-comment" href="<?php echo SITE_PATH ."thanh-vien/" . $newsComment['ID'] ?>"><?php echo $newsComment['username'] ?></a> <?php echo $newsComment['post_on'] ?> .</a>
						</div>
						<p><?php echo Functions::the_content($newsComment['content']); ?></p>
					</div>
				<?php } ?>
				<?php if(isset($this->error)) echo $this->error ?>
				<?php if(Session::get('login') == true) echo "
					<h4>Leave a Comment</h4>
					<div class='write-comment'>
						<form action='' method='post'>
							<textarea name='comment'class='comment-here' cols='30' rows='10'></textarea><br />

							<input type='submit' name='submit' class='submit' value='Submit' />
						</form>
					</div>
				"; ?>
			</div><!--END POST-COMMENT-->
		</div><!--END PAGE-WRAP-->