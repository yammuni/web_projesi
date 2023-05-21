<!DOCTYPE html>
<html lang="tr-TR">
   
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Copatible" content="IE=edge" />
        <meta name="viweport" content="width=device-width,initial-scale=1.0" />
        <link rel="shortcut icon" href="img/favicon.jfif" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="login.css">
         <title>Yemin || Login Page</title>
    </head>
    <body>
	<nav class="navbar navbar-expand-sm fixed-top 
	bg-info navbar-white">

		<div class="container">
		
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
				<span class="navbar-toggler-icon"><i class="fas fa-ellipsis-v"></i></span>
			</button>

			<div id="navbarCollapse" class="collapse navbar-collapse">
			<ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="Ben.html">Ben</a></li>
                    <li><a href="Memleket.html">Memleket</a></li>
                    <li><a href="Login.php">Login</a></li>
                    <li><a href="Iletisim.html">İletişim</a></li>
                    <li><a href="ozgecmis.html">Özgeçmiş</a></li>
                </ul>
			</div>

		</div>
	</nav>

	<header>

		<div class="bg-info text-light jumbotron balikcilar-jumbotron">

			<div class="container">

				<div class="col-md-6 px-0">
					<h1 class="display-4 font-italic">
						Giriş Ekranı
					</h1>
				</div>

			</div>

		</div>

	</header>
	
	<main>

		<div class="container">
			
			<form action="git-Login.php" method="POST">

				<div class="form-group">
					<label for="email">Email</label>
					<input type="text" name="email" class="form-control" placeholder="Email '123@sakarya.edu.tr'" required="required">
				</div>

				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" class="form-control" placeholder="Şifre '123'" required="required">
				</div>

				<button class="btn btn btn-info" type="submit">Gönder</button>

				<br><br><br>

			</form>

		</div>

	</main>

	<!-- BOOTSTRAP -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


	

</body>

</html>