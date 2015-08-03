<?php if ( ! defined('SITE_PATH')) die ('Bad requested!'); ?>
<div id="page-wrap">
<div class="form">
				<h3 style="font-size: 24px; font-weight:bold; color: #9E3303">EDIT PROFILE</h3>
				<h3 style="font-size: 16px; font-weight:bold; color: #314577"><?php echo $this->userSession['username'] ?></h3>
				<img src="<?php echo $this->userSession['avatar'] ?>" width="70" height="70" alt="avatar">
				<form action="" enctype="multipart/form-data" method="post">
					<table>
						<tr>
							<td>
							Avatar
							</td>
							<td>
								<p class='warning'>Please select a JPEG or PNG image of 512kb or smaller to use as avatar</p>
								<input type="file" name="image">
							</td>
							<td><input type="hidden" name="MAX_FILE_SIZE" value="524288"></td>
						</tr>

						<tr>
							<td style="display: block;width: 60px">Full Name</td>
							<td><input type="text" name="fullname" value="<?php echo $this->userSession['fullname'] ?>"></td>
						</tr>

						<tr>
							<td>Email</td>
							<td><input type="text" name="email" value="<?php echo $this->userSession['email'] ?>"></td>
						</tr>

						<tr>
							<td>Introduce</td>
							<td><textarea name="intro" id="" cols="40" rows="10"><?php echo $this->userSession['status'] ?></textarea></td>
						</tr>

						<tr>
							<td></td>
							<td><input name="update" type="submit" value="Update" class="btn"></td>
						</tr>
					</table>
				</form>
			</div>
</div>