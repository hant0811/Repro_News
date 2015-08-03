<div id="page-wrap">
<div class="login">
				<h3 style="font-size: 24px; font-weight:bold; color: #9E3303">Login</h3>
				<p class="warning"><?php if(isset($this->msg)) echo $this->msg ?></p>
				<form action="" method="post">
					<table>
						<tr>
							<td>User Name </td>
							<td><input type="text" name="username"></td>
							<td><p class="warning"></td>
						</tr>

						<tr>
							<td>Password </td>
							<td><input type="password" name="password"></td>
						</tr>
						<tr>
							<td></td>
							<td>
								<input class="btn" type="submit" name="login" value="Đăng nhập">
								
							</td>
						</tr>
					</table>
				</form>
			</div>
</div><!--END PAGE-WRAP-->