<div id="page-wrap">
<div class="form">
				<h3 style="font-size: 24px; font-weight:bold; color: #9E3303">ĐĂNG KÝ THÀNH VIÊN</h3>
				<?php if(isset($this->msg)) echo $this->msg ?>
				<form action="" method="post">
					<table>
						<tr>
							<td>User Name</td>
							<td><input type="text" name="username" value="<?php if(isset($_POST['username'])) echo $_POST['username'] ?>"></td>
						</tr>

						<tr>
							<td>Full Name</td>
							<td><input type="text" name="fullname" value="<?php if(isset($_POST['fullname'])) echo $_POST['fullname'] ?>"></td>
						</tr>

						<tr>
							<td>Email</td>
							<td><input type="text" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email'] ?>"></td>
						</tr>

						<tr>
							<td>Password</td>
							<td><input type="pass" name="pass" value="<?php if(isset($_POST['pass'])) echo $_POST['pass'] ?>"></td>
						</tr>

						<tr>
							<td>Confirm Password</td>
							<td><input type="text" name="pass2" value="<?php if(isset($_POST['pass2'])) echo $_POST['pass2'] ?>"></td>
						</tr>

						<tr>
							<td></td>
							<td><input name="submit" type="submit" value="ĐĂNG KÝ" class="btn"></td>
						</tr>
					</table>
				</form>
			</div>
</div>