<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i|Playfair+Display:400,700" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <meta name="description" content="<?= $site->description()->html() ?>">
  <?= css('assets/css/index.css') ?>
</head>
<body id="projects">
  <header>
		<nav>
			<a href=""><img src="/assets/images/contact.png" alt="Contact"/></a>
		</nav>
  </header>
  <main>
		<h1><?= $page->title()->html() ?></h1>
		<?php

		$projects = $page->children()->visible();

		/*

		The $limit parameter can be passed to this snippet to
		display only a specified amount of projects:

		```
		<?php snippet('showcase', ['limit' => 3]) ?>
		```

		Learn more about snippets and parameters at:
		https://getkirby.com/docs/templates/snippets

		*/

		if(isset($limit)) $projects = $projects->limit($limit);

		?>

		<ul class="showcase">
		  <?php foreach($projects as $project): ?>
			<li>
		  	<a href="<?= $project->url() ?>">
		    	<?php if($image = $project->images()->sortBy('sort', 'asc')->first()): $thumb = $image->crop(600, 600); ?>
		      	<img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $project->title()->html() ?>" class="showcase-image" />
		      <?php endif ?>
		      	<h3><?= $project->title()->html() ?></h3>
		    </a>
		  </li>
		  <?php endforeach ?>
		</ul>

  </main>
	<?= js('assets/js/navigation.js') ?>

</body>
</html>
