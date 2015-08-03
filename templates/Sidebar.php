<!--SIDE-BAR-->
		<div id="side-bar">
			<div id="search">
				<input type="text" placeholder='to search, type and hit enter'>
			</div><!--END SEARCH-->

			<div id="tabs-nav">
				<div id="tabs">
					<ul>
						<li  class="active"><a href="#popular">Popular</a></li>
						<li><a href="#recent">Recent</a></li>
						<li><a href="#comments">Comments</a></li>
						<li><a href="#tags">Tags</a></li>
					</ul>
				</div>
				<div id="post-tabs-nav">
					<div id="popular" class="tabs-content">
						<ul>
							<?php foreach($this->popular as $popular){ ?>
								<li>
									<a class="img-tabs-nav" href="<?php echo SITE_PATH . "tin-tuc/" . $popular['ID']; ?>"><img src="<?php echo $popular['image'] ?>" alt="post"></a>
									<h4><a href="<?php echo SITE_PATH . "tin-tuc/" . $popular['ID'] .'/'. RewriteUrl::Encode($popular['news_title']); ?>"><?php echo $popular['news_title'] ?></a></h4>
									<p class="date"><?php echo $popular['post_on'] ?>, <a href="<?php echo SITE_PATH . "tin-tuc/" . $popular['ID'] .'/'. RewriteUrl::Encode($popular['news_title']); ?>#post-comments"><?php echo $popular['count']; ?> comments</a></p>
								</li>
							<?php } ?>
							
						</ul>
					</div>

					<div id="recent" class="tabs-content">
						<ul>
							<?php  foreach($this->recent as $recent){ ?>
								<li>
									<a class="img-tabs-nav" href="<?php echo SITE_PATH . "tin-tuc/" . $recent['ID']; ?>"><img src="<?php echo $recent['image'] ?>" alt="post"></a>
									<h4><a href="<?php echo SITE_PATH . "tin-tuc/" . $recent['ID'] .'/'. RewriteUrl::Encode($recent['news_title']); ?>">"<?php echo $recent['news_title'] ?></a></h4>
									<p class="date"><?php echo $recent['post_on'] ?>, <a href="<?php echo SITE_PATH . "tin-tuc/" . $recent['ID'] .'/'. RewriteUrl::Encode($recent['news_title']); ?>#post-comments"><?php echo $recent['count']; ?> comments</a></p>
								</li>
							<?php } ?>
						</ul>
					</div>

					<div id="comments" class="tabs-content">
						<ul>
							<?php foreach($this->comment as $comment){ ?>
								<li style='overflow:hidden'>
									<a class="img-tabs-nav" href="#"><img  src="<?php echo $comment['avatar'] ?>" alt="post"></a>
									<h4><a href="#"><?php echo $comment['username'] ?>: <?php echo $comment['content'] ?></a></h4>
									<p class="date"></p>
								</li>
							<?php } ?>
						</ul>
					</div>
				</div>
				
			</div><!--END TABLE-->
			<div class="widget" id="flickr">
				<h4><a href="#">  Video </a></h4>
				<video id="myVideo_demo" width="100%" height="100%" controls="controls"> 
    			<source src="..." type="video/mp4"> 
				</video> 
 
				<script type="text/javascript"> 
				    $(document).ready(function () 
				    { 
				        $('#myVideo_demo').videocontrols( 
				        { 
				            markers: [40, 84, 158, 194, 236, 272, 317, 344, 397, 447, 490, 580], 
				            preview: 
				            { 
				                sprites: ['big_bunny_108p_preview.jpg'], 
				                step: 10, 
				                width: 200 
				            }, 
				            theme: 
				            { 
				                progressbar: 'blue', 
				                range: 'pink', 
				                volume: 'pink' 
				            } 
				        }); 
				    }); 
				</script>
			</div><!--END FLICKR-->

			<div class="widget" id="link">
				
			</div><!--END LINK-->

			<div id="sponsor" class="widget">
				
			</div><!--END SPONSOR-->

		</div><!--END SIDE-BAR-->
	</div><!--END CONTAINER-->