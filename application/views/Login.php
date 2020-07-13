<link rel="icon"  href="<?php echo base_url(); ?>/assets/images/Unsur.png" /> 

<body>


<div class="limiter">
		<div class="container-login100" >
			<div class="wrap-login100 p-t-190 p-b-30">
			<?php
				if($this->session->flashdata('error')){
				echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
							'.$this->session->flashdata('error').'
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
					  </div>';
				}
			?>
			

			<form action="<?php echo base_url('login/proses_login'); ?>" method="POST">
					<span class="login100-form-title p-t-20 p-b-45">
						APLIKASI PELAPORAN BEBAN KERJA DOSEN
					</span>

					<div class="wrap-input100 validate-input m-b-10" >
						<input class="input100" type="text" name="username" placeholder="NIDN" require>
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
						<a href="https://api.whatsapp.com/send?phone=6281316943615&text=Forgot%20Password&source=&data=&app_absent=" class="txt1">
							Forgot Username / Password?
            			</a>
					</br>
            			<a class="txt1" href="https://api.whatsapp.com/send?phone=6281316943615&text=Create%20Account&source=&data=&app_absent=">
							Create new account
							<i class="fa fa-long-arrow-right"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
  </div>
  
</body>
