<?php if (isset($_SESSION['user']['username'])) { ?>
	<div class="logged_in_info">
		<span><a style="color: white;">HOŞGELDİN  <?php echo $_SESSION['user']['username'] ?></a></span>
		|
		<span><a href="logout.php">çıkış</a></span>
	</div>
<?php }else{ ?>
	<div class="banner">
		<div class="welcome_msg">
			<h1>BLOG</h1>
			<p> 
			   Muhammed Sarımeşe<br> 
			     <br> 
			     <br>
				<span>Lord Holy Crow</span>

			</p>

			<a href="register.php" style=" background-color: #ffffff42;" class="btn">Üye Ol</a>

		</div>

		<div class="login_div">
			<form action="<?php echo BASE_URL . 'bloggiris.php'; ?>" method="post" >
				
				<div style="width: 60%; margin: 0px auto;">
					<?php include(ROOT_PATH . '/includes/errors.php') ?>
				</div>	
			
			</form>
		</div>
	</div>
<?php } ?>