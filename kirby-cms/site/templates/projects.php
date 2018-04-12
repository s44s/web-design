<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i|Playfair+Display:400,700" rel="stylesheet">
  <meta name="description" content="<?= $site->description()->html() ?>">
  <?= css('assets/css/index.css') ?>
</head>
<body class="projects">
  <main class="main" role="main">
		<header>
			<?php snippet('menu') ?>
		</header>

    <div class="wrap wide">
      <?php snippet('showcase') ?>
    </div>

  </main>
</body>
</html>
