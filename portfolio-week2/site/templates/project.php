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
<body class="<?= $page->category() ?>" id="project">
  <header>
		<nav>
			<a href="http://webdesign.test/contact">
				<img src="../assets/images/contact.png" alt="Contact"/>
			</a>
		</nav>
  </header>

	<section>
    <header>
      <h1><?= $page->title()->html() ?></h1>
      <p class="intro year"><?= $page->year() ?></p>
			<p class="intro category"><?= $page->category() ?></p>
    </header>

		<div class="images">
			<?php
			// Images for the "project" template are sortable. You
			// can change the display by clicking the 'edit' button
			// above the files list in the sidebar.
			foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
				<figure>
					<img src="<?= $image->url() ?>" alt="<?= $page->title()->html() ?>" />
				</figure>
			<?php endforeach ?>
		</div>

    <div class="text">
      <?= $page->text()->kirbytext() ?>
    </div>

    <?php snippet('prevnext') ?>

  </section>

	<?= js(array(
	'assets/js/navigation.js',
	'assets/js/smoothscroll.js')) ?>
</body>
</html>
