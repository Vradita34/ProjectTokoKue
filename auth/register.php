<?php require_once "header.php"; ?>
<div class="limiter">
	<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
		<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
			<form class="login100-form validate-form flex-sb flex-w" method="post" action="proses_register.php">
				<span class="login100-form-title p-b-53">
					Sign In With
				</span>

				<a href="#" class="btn-face m-b-20">
					<i class="fa fa-facebook-official"></i>
					Facebook
				</a>

				<a href="google.php" class="btn-google m-b-20">
					<img src="../assets/images/icons/icon-google.png" alt="GOOGLE">
					Google
				</a>

				<div class="p-t-31 p-b-9">
					<span class="txt1">
						Nama Lengkap
					</span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Nama Lengkap is required">
					<input class="input100" type="text" name="nama_lengkap">
					<span class="focus-input100"></span>
				</div>

				<div class="p-t-31 p-b-9">
					<span class="txt1">
						Username
					</span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Username is required">
					<input class="input100" type="text" name="username">
					<span class="focus-input100"></span>
				</div>

				<div class="p-t-31 p-b-9">
					<span class="txt1">
						Email
					</span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Email is required">
					<input class="input100" type="email" name="email">
					<span class="focus-input100"></span>
				</div>

				<div class="p-t-31 p-b-9">
					<span class="txt1">
						Alamat
					</span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Alamat is required">
					<input class="input100" type="text" name="alamat">
					<span class="focus-input100"></span>
				</div>

				<div class="p-t-31 p-b-9">
					<span class="txt1">
						No Telepon
					</span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="No Telepon is required">
					<input class="input100" type="tel" name="telp">
					<span class="focus-input100"></span>
				</div>

				<div class="p-t-13 p-b-9">
					<span class="txt1">
						Password
					</span>

					<a href="#" class="txt2 bo1 m-l-5">
						Forgot?
					</a>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Password is required">
					<input class="input100" type="password" name="password">
					<span class="focus-input100"></span>
				</div>

				<div class="p-t-13 p-b-9">
					<span class="txt1">
						Konfirmasi Password
					</span>

					<a href="#" class="txt2 bo1 m-l-5">
						Forgot?
					</a>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Password is required">
					<input class="input100" type="password" name="confirm_password">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn m-t-17">
					<button class="login100-form-btn" name="submit">
						Sign Up
					</button>
				</div>

				<div class="w-full text-center p-t-55">
					<span class="txt2">
						Alredy Have an Account
					</span>

					<a href="login.php" class="txt2 bo1">
						Sign In now
					</a>
				</div>
			</form>
		</div>
	</div>
</div>


<div id="dropDownSelect1"></div>
<?php require_once "footer.php"; ?>