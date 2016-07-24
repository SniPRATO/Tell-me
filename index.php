<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Tell Me.</title>
		<?php
			include_once "includes/libraries.inc.php";
		?>
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<script src="bower_components/jquery/dist/jquery.min.js"></script>
	</head>
	<body>
		<div class="container">
			<header>
				<div class="user-options">
					<a href="login.php" id="login-btn">Already have an account ?</a>
					<button id="sign-up-btn" href="signup.php">Sign up</button>
				</div>
				<a href="index.php">
					<div class="logo">
						<p>tell me.</p>
					</div>
				</a>
				<div class="search">
					<form action="search.php" method="get">
						<input type="text" name="search" placeholder="Search..">
						<button id="find"><i class="fa fa-search"></i></button>
					</form>
				</div>
			</header>
			<div class="search-box">
				<div class="search-result">
					<h4>Search result (0)</h4>
				</div>
				<div class="results">
					<nav>
						<ul>
							<li>
								<a href="#">
									<div class="user-picture">
										<img src="images/owner-picture.jpg">
									</div>
									<h4>tobias van schneider</h4>
									<p>product designer</p>
								</a>
							</li>
							<li>
								<a href="#">
									<div class="user-picture">
										<img src="images/1 (37).jpg">
									</div>
									<h4>oussama yamine</h4>
									<p>user interface designer</p>
								</a>
							</li>
							<li>
								<a href="#">
									<div class="user-picture">
										<img src="images/1 (28).jpg">
									</div>
									<h4>sara lina</h4>
									<p>illustrator, photographer</p>
								</a>
							</li>
							<li>
								<a href="#">
									<div class="user-picture">
										<img src="images/darty_appliance_portrait.jpg">
									</div>
									<h4>suzana cruuz</h4>
									<p>graphic designer</p>
								</a>
							</li>
							<li>
								<a href="#">
									<div class="user-picture">
										<img src="images/02.jpg">
									</div>
									<h4>diana lindrof</h4>
									<p>song writer</p>
								</a>
							</li>
						</ul>
					</nav>
				</div>
				<div class="see-more"><button>see all results</button></div>
			</div>
			<main>
			<div class="intro-section">
				<div class="title">
					<h1>Share your story with the world.</h1>
					<p>Tell me is a platform where you can share your daily life stories and experiences you've been through with the world around you!</p>
					<div class="user-login-sign-up">
						<button>Sign up</button>
						<button id="learn-more">Learn more</button>
					</div>
				</div>
			</div>
			<div class="main-container">
				<div class="left-section">
					<div class="top-posts">
						<div class="post">
							<div class="thumbnail-post">
								<a href="#">
									<img src="images/post-thumbnail.jpg" alt="thumbnail">
								</a>
							</div>
							<h2 id="post-title">Record Labels Need a Change of Culture in the ‘Dashboard Era’ of the Music Industry <span>3 days ago.</span></h2>
							<p id="descreption">Drawings me opinions returned absolute in. Otherwise therefore sex did are unfeeling something. Certain be ye amiable by exposed so. To celebrated estimating excellence do. Coming eithe..</p>
							<div class="post-author">
								<a href="#"><div class="user-pic"><img src="images/owner-picture.jpg" alt="owner-image"></div></a>
								<a href="#" id="owner">
									tobias van schneider
									<span id="owner-job">product designer</span>
								</a href="#">
							</div>
							<div class="post-informations">
								<div class="view-post">
									<a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>
								</div>
								<div class="likes">
									<a href=""><i class="fa fa-heart-o" aria-hidden="true"></i> 300</a>
								</div>
								<div class="comments">
									<a href=""><i class="fa fa-comment-o" aria-hidden="true"></i> 250</a>
								</div>
							</div>
						</div>
						<div class="post">
							<div class="thumbnail-post">
								<a href="#">
									<img src="images/post-thumbnail-2.jpg" alt="thumbnail">
								</a>
							</div>
							<h2 id="post-title">Payment For Services Rendered <span>3 days ago.</span></h2>
							<p id="descreption">I handed you one silver dollar and you pointed in the direction of the sacred mountain. All the next day we travelled sideways. We sailed through an ocean of dead birds and ash. I gave you two more dollars, and you said Alright, and pressed your lips to the knives buried like wings in my shoulder.</p>
							<div class="post-author">
								<a href="#"><div class="user-pic"><img src="images/owner-picture.jpg" alt="owner-image"></div></a>
								<a href="#" id="owner">
									tobias van schneider
									<span id="owner-job">product designer</span>
								</a href="#">
							</div>
							<div class="post-informations">
								<div class="view-post">
									<a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>
								</div>
								<div class="likes">
									<a href=""><i class="fa fa-heart-o" aria-hidden="true"></i> 300</a>
								</div>
								<div class="comments">
									<a href=""><i class="fa fa-comment-o" aria-hidden="true"></i> 250</a>
								</div>
							</div>
						</div>
						<div class="post">
							<div class="thumbnail-post">
								<a href="#">
									<img src="images/post-thumbnail-3.jpg" alt="thumbnail">
								</a>
							</div>
							<h2 id="post-title">I Saw Myself in A Killer <span>3 days ago.</span></h2>
							<p id="descreption">Random House copy chief Benjamin Dreyer can work into almost any conversation, no matter the topic, his affection for the first paragraph of Shirley Jackson’s The Haunting of Hill House. We were finally moved to ask him if he could explain and justify that affection.</p>
							<div class="post-author">
								<a href="#"><div class="user-pic"><img src="images/owner-picture.jpg" alt="owner-image"></div></a>
								<a href="#" id="owner">
									tobias van schneider
									<span id="owner-job">product designer</span>
								</a href="#">
							</div>
							<div class="post-informations">
								<div class="view-post">
									<a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>
								</div>
								<div class="likes">
									<a href=""><i class="fa fa-heart-o" aria-hidden="true"></i> 300</a>
								</div>
								<div class="comments">
									<a href=""><i class="fa fa-comment-o" aria-hidden="true"></i> 250</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="right-section">
					<div class="top-stories">
						<h3>top stories</h3>
						<nav>
							<ul>
								<li>
									<a href="">
										<div class="owner-img"><img src="images/1 (37).jpg" alt=""></div>
										<h4>I Love Taylor Swift</h4>
										<p>andrew hales</p>
									</a>
								</li>
								<li>
									<a href="">
										<div class="owner-img"><img src="images/darty_appliance_portrait.jpg" alt=""></div>
										<h4>The Pulse of Our Farm</h4>
										<p>terry may</p>
									</a>
								</li>
								<li>
									<a href="">
										<div class="owner-img"><img src="images/02.jpg" alt=""></div>
										<h4>Until I find you</h4>
										<p>jessica semaan</p>
									</a>
								</li>
								<li>
									<a href="">
										<div class="owner-img"><img src="images/1 (28).jpg" alt=""></div>
										<h4>When You Want To Call In..</h4>
										<p>victor anthony</p>
									</a>
								</li>
								<li>
									<a href="">
										<div class="owner-img"><img src="images/owner-picture.jpg" alt=""></div>
										<h4>Payment For Services..</h4>
										<p>Bob Schofield</p>
									</a>
								</li>
								</ul>
							</nav>
						</div>
						<div class="newsletter">
							<h3>newsletter</h3>
							<div class="border"></div>
							<div class="newsletter-sub">
								<p>Subscribe to our newsletter to get notified with new stories..</p>
								<form>
									<input type="text" name="email" placeholder="Enter your email..">
									<button type="submit">subscribe</button>
								</form>
							</div>
						</div>
						<div class="social-networks">
							<h3>our social networks</h3>
							<div class="border"></div>
							<div class="networks">
								<a href=""><i class="fa fa-facebook"></i></a>
								<a href=""><i class="fa fa-instagram"></i></a>
								<a href=""><i class="fa fa-twitter"></i></a>
								<a href=""><i class="fa fa-dribbble"></i></a>
							</div>
						</div>
					</div>
				</div>
				</main>
				<footer>
					
				</footer>
			</div>
			<script src="js/main.js"></script>
		</body>
</html>