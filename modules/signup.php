	
<html>

	<head>
		<title>Sign up</title>
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="../assets/css/style1.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<link rel="stylesheet" href="animate.css">
	</head>

	<body>
		<div class="content">
			<header class="animated fadeInDown">
				<div class="container">
					<h1 style="font-weight: bolder; margin-top: 0px;">Bombay Leprosy Project</h1>		
				</div>
			</header>
			<div class="container_login animated fadeIn">
				<form id="form" action="../assets/php/signup.php" method="POST">
					<img src="login.png">
					<div>
					
						<input id="user" name="email" type="text" placeholder="Enter email id" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="This is not a valid email ID" required>
					</div>
					<div class="form_input">
						<input id="password" type="password" name="password" placeholder="Enter Password" required>
						<input id="pass2" type="password" name="pass2" placeholder="Re-enter Password" required>
					</div>
					
					<div>
						<input class="loginButton" type="submit"
						name="login" value="LOGIN">
						<br>
					</div>
			</form>
		</div>		
	</body>
</html>
