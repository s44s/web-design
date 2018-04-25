<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/css/animsition.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/js/animsition.js"></script>

	<meta name="description" content="<?= $site->description()->html() ?>">
  <?= css('assets/css/index.css') ?>
</head>
<body class="<?= $page->category() ?>" id="contact">
  <header>
		<nav>
			<a href="http://webdesign.test/">
				<video class="video-menu" loop muted autoplay>
					<source src="assets/images/header-blue.ogv" type="video/ogg">
				</video>
			</a>
		</nav>
  </header>

	<section>
		<div class="content">
			<div class="contact-text">
			    <header>
			      <h1><?= $page->title()->html() ?></h1>
			    </header>

		    	<div class="form">
			      <?= $page->text()->kirbytext() ?>
							<form>
								<label for="song">Email</label>
								<div class="mail">
									<span class="input-icon"><img src="/assets/images/main.png"/></span>
									<input id="song" type="text" name="song" placeholder="email"/>
								</div>
								<label for="song">Search for track</label>
								<div class="search">
									<span class="input-icon"><img src="/assets/images/search.png"/></span>
									<input id="song" type="text" name="song" placeholder="search for a song"/>
								</div>
								<button type="submit">Send!</button>
							</form>
					</div>
				</div>
				<div class="spotify">
					<img src="assets/images/spotify.png"/>
				</div>
	    </div>
  </section>

	<?= js(array(
	'assets/js/navigation.js',
	'assets/js/smoothscroll.js')) ?>
</body>
</html>
