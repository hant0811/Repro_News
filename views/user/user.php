<div id="page-wrap">
	<div class="word-new">
		<span>Home > User</span>
		<?php echo Session::get('id') ?>
		<h1><?php echo $this->user['username'] ?></h1>
	</div><!--END WORD-NEW-->
	<div id="content">
		<ul>
				<li>
					<div class="widget" id="post-author">
						<img src="<?php echo $this->user['avatar'] ?>" width="70" height="70" alt="avatar">
						<?php if($this->user['username'] == Session::get('user')) echo "<a style='color:red; backgorund: #F7F7F7' href='http://localhost/php_news/index.php?controller=user&action=edit&id={$this->user['ID']}'>EDIT PROFILE</a>" ?>
						<p><b><u>User Name :</u></b> <?php echo $this->user['username'] ?></p>
						<p><b><u>Full Name :</u></b> <?php echo $this->user['fullname'] ?></p>
						<p><b><u>Email :</u></b> <?php echo $this->user['email'] ?></p>
						<p><b><u>Register date :</u></b><a class="date"> <?php echo $this->user['register_date'] ?></a>
						<p><b><u>Introduce :</u></b> <?php echo $this->user['status'] ?></p>
					</div>
				</li>
		</ul>
	</div><!--END CONTENT-->
</div><!--END PAGE-WRAP-->