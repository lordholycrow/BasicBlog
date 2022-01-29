<?php  include('config.php'); ?>
<!-- Source code for handling registration and login -->
<?php  include('includes/registration_login.php'); ?>

<?php include('includes/head_section.php'); ?>

<title>Giriş Yap</title>
</head>
<body>
<div class="container">
	<!-- Navbar -->
		<?php include( ROOT_PATH . '/includes/navbar.php'); ?>
	<!-- // Navbar -->

	<div style="width: 40%; margin: 20px auto;">
		<form method="post" action="register.php" >
			<h2>Giriş Yap</h2>
			<?php include(ROOT_PATH . '/includes/errors.php') ?>
			<input  type="text"  name="username" value="<?php echo $username; ?>" placeholder=k.adı>
			<input type="email" name="email" value="<?php echo $email ?>" placeholder="Email">
			<input type="password" name="password_1" placeholder="sifre">
			<input type="password" name="password_2" placeholder="sifre kontrol">
			<button type="submit" class="btn" name="reg_user">Kayıt Ol</button>
			<p>
			   	<h style="color: black;">Zaten Üye misiniz?<h> <a  style="color: white;" href="login.php">Giriş Yap</a>
			</p>
		</form>
	</div>
</div>
<!-- // container -->
<!-- Footer -->
	<?php include( ROOT_PATH . '/includes/footer.php'); ?>
<!-- // Footer -->