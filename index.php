<!DOCTYPE html>

<html>

<head profile="http://www.w3.org/2005/10/profile">
	<title>Minerva Archer</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="author" content="Minerva Archer">
	<meta name="keywords" content="minerva archer, publishing, digital, development, front-end development, editorial, editing, NYC">
	<meta name="description" content="Minerva Archer is a creative technologist working in the greater NYC area. Skills include front-end web development, editing, and project and product management.">
	<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,700" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/main.css" type="text/css">
	<link rel="icon" type="image/png" href="/img/favicon.png">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="js/main.js"></script>
</head>

<body>
	<header>
		<nav id="nav">
			<span id="nav-burger" class="burger show-for-mobile"></span>
			<ul class="hide-for-mobile">
				<li>
					<a href="#about">About</a>
				</li>
				<li>
					<a href="#portfolio">Portfolio</a>
				</li>
				<li>
					<a href="#contact">Contact</a>
				</li>
			</ul>
			<div class="logo">Minerva Archer</div>
		</nav>
	</header>

	<section id="about-section" class="about">
		<div class="section-body">
			<h2>Let's do this.</h2>
			<p>Hi, I'm Minerva. I build websites, write and edit content, and organize everything around me.</p>
			<p>I have experience in editing, web development, project management, and business analysis. I've worked with large in-house teams, small distributed teams, and one-on-one with individuals in projects across a broad range of disciplines.</p>
			<p>Check out my work history on <a href="http://www.linkedin.com/pub/minerva-archer/5b/5a8/12a" target="_blank">LinkedIn</a> for more information and testimonials.</p>

			<h3>Tech Stats</h3>
			<dl>
				<dt>HTML5</dt>
				<dd><span class="advanced"></span></dd>
				<dt>CSS3/SCSS</dt>
				<dd><span class="advanced"></span></dd>
				<dt>Javascript</dt>
				<dd><span class="intermediate"></span></dd>
				<dt>jQuery</dt>
				<dd><span class="intermediate"></span></dd>
				<dt>Node.js</dt>
				<dd><span class="junior"></span></dd>
				<dt>MySQL</dt>
				<dd><span class="beginner"></span></dd>
				<dt>Photoshop</dt>
				<dd><span class="junior"></span></dd>
			</dl>
			<h3>Writing/Editing Stats</h3>
			<dl>
				<dt>content auditing</dt>
				<dd><span class="junior"></span></dd>
				<dt>content governance</dt>
				<dd><span class="intermediate"></span></dd>
				<dt>copy editing (general)</dt>
				<dd><span class="advanced"></span></dd>
				<dt>copy editing (Chicago style)</dt>
				<dd><span class="intermediate"></span></dd>
				<dt>technical writing</dt>
				<dd><span class="junior"></span></dd>
				<dt>technical editing</dt>
				<dd><span class="advanced"></span></dd>
			</dl>
		</div>
	</section>
	<section id="portfolio-section" class="portfolio">
		<div class="section-body">
			<h2>Portfolio</h2>

			<h3>Web Projects</h3>

				<div class="sample">
					<div class="col-left">
						<div class="preview-wrapper">
							<img class="preview-img" src="img/botm.png" alt="Book of the Month preview">
						</div>
					</div><div class="col-right">
						<h4>Book of the Month</h4>
						<p>Book of the Month is a subscription-based ecommerce site rendered entirely client-side.</p>
						<p>As the lead front-end developer for the site's initial build, I learned a lot about organizing large quantities of client-side code. I worked with the project's fantastic UX designer to make sure every design worked across browsers and devices.</p>
					</div>
					<div class="preview-container">
						<a href="https://www.bookofthemonth.com/index.html" target="_blank"><img class="layout-preview" src="img/botm_landing.png"></a>
						<a href="https://www.bookofthemonth.com/selections.html" target="_blank"><img class="layout-preview" src="img/botm_selections.png"></a>
						<a href="https://www.bookofthemonth.com/index.html#box" target="_blank"><img class="layout-preview" src="img/botm_box.png"></a>
					</div>
				</div>

			<h3>Writing Samples</h3>
			<div class="sample">
				<div class="col-left">
					<div class="preview-wrapper">
						<img class="preview-img" src="img/upsi.png" alt="">
					</div>
				</div><div class="col-right">
					<h4>Marketing Copy</h4>
					<p>Upsi Daisy is original spec copy I wrote for a hippie soap company. The copy includes a tagline and label copy for six soaps.</p>
					<a href="downloads/upsi_daisy.pdf" download="upsi_daisy.pdf">Download</a>
				</div>
			</div>

			<div class="sample">
				<div class="col-left">
					<div class="preview-wrapper">
						<img class="preview-img" src="img/tech.png" alt="">
					</div>
				</div><div class="col-right">
					<h4>Technical Writing</h4>
					<p>I've become the process documenter/wiki maintainer everywhere I go; this was especially true during my time as project manager. Here are two project setup guides I wrote for a new-to-tech team working on a project that ran on Apache Tomcat.</p>
					<a href="downloads/tech_writing.zip" download="tech_writing.zip">Download</a>
				</div>
			</div>
		</div>
	</section>
	<section id="contact-section" class="contact">
		<div class="section-body">
			<h2>Contact</h2>
			<p>Fill out the form below and I'll respond with my upcoming availability within five business days. Include as much information as you can about what you need, your timeframe for getting the work done, the project's scope, and your approved budget for my role.</p>
			<div id="form_container">
				<form action="processForm.php" method="post">
					<label for="name">Your Name (required)</label>
					<input name="name" type="text" required="required">
					<label for="email">Your Email (required)</label>
					<input name="email" type="email" required="required">
					<label for="message">What can I do for you?</label>
					<textarea name="message" rows="15"></textarea>
					<button id="submit" name="submit" type="submit" value="Submit">Submit</button>
				</form>
			</div>
		</div>
	</section>

	<footer>
		<p>&copy;2015 Minerva Archer.</p>
	</footer>
</body>
</html>