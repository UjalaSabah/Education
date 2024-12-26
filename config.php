<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="fh5co-nav" role="navigation">
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-2">
						<div id="fh5co-logo"><a href="index.php"><i class="icon-study"></i>Educ<span>.</span></a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li class="active"><a href="index.php">Home</a></li>
							<li><a href="courses.php">Courses</a></li>
							<li><a href="teacher.php">Teacher</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="pricing.html">Pricing</a></li>
							<li class="has-dropdown">
								<a href="blog.html">Blog</a>
								<ul class="dropdown">
									<li><a href="#">Web Design</a></li>
									<li><a href="#">eCommerce</a></li>
									<li><a href="#">Branding</a></li>
									<li><a href="#">API</a></li>
								</ul>
							</li>
							<li><a href="contact.html">Contact</a></li>
							<?php
                            session_start();
                            if (isset($_SESSION['id'])) {
                            echo '<li class="btn-cta inline-block mx-2"><a href="./signup/logout.php"><span>Logout</span></a></li>';
                            echo $_SESSION['name'];
                            } else {
                            // If the user is not logged in, display Signup and Login buttons
                            echo '<li class="btn-cta inline-block mx-2"><a href="./signup/signup.php"><span>Signup</span></a></li>';
                            echo '<li class="btn-cta inline-block mx-2"><a href="./signup/login.php"><span>Login</span></a></li>';
                            }
                            ?>

							
							<!-- <li class="btn-cta"><a href="#"><span>Create a Course</span></a></li> -->
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>
</body>
</html>