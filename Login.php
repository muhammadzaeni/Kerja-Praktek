<link rel="icon"  href="<?php echo base_url(); ?>/assets/images/Unsur.png" /> 


    
<body>
<div class="limiter">
		<div class="container-login100" >
			<div class="wrap-login100 p-t-190 p-b-30">
				<form action="<?php echo base_url('index.php/Home'); ?>" method="POST">
					<span class="login100-form-title p-t-20 p-b-45">
						APLIKASI PELAPORAN BEBAN KERJA DOSEN
					</span>

					<div class="wrap-input100 validate-input m-b-10" >
						<input class="input100" type="text" name="username" placeholder="Username" require>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" >
						<input class="input100" type="password" name="pass" placeholder="Password" require>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<div class="container-login100-form-btn p-t-10">
						 <button class="login100-form-btn" value="submit">
							LOGIN
						</button>
					</div>

					<div class="text-center w-full p-t-25 p-b-230">
						<a href="#" class="txt1">
							Forgot Username / Password?
            </a>
</br>
            <a class="txt1" href="#">
							Create new account
							<i class="fa fa-long-arrow-right"></i>						
						</a>
					</div>
				</form>
			</div>
		</div>
  </div>
  
</body>