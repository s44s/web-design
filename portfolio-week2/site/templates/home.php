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
<body id="home">
  <header>
		<nav>
			<a href="http://webdesign.test/contact">
				<img src="../assets/images/contact.png" alt="Contact"/>
			</a>
		</nav>
  </header>

	<section class="homepage">
			<figure>
				<video loop muted autoplay>
					<source src="../../assets/images/header-blue.ogv" type="video/ogg">
				</video>
			</figure>

			<article>
				<form>
					<div>
						<input type="checkbox" id="onderzoek" name="onderzoek" value="onderzoek">
						<label for="onderzoek">Onderzoekende</label>
					</div>
					<div>
						<input type="checkbox" id="concept" name="concept" value="concept">
						<label for="concept">Creatieve</label>
					</div>
					<div>
						<input type="checkbox" id="technisch" name="technisch" value="technisch">
						<label for="technisch">Developer</label>
					</div>
				</form>
				<p>Mijn naam is <strong>Suus</strong> en op het moment ga ik mijn laatste jaar in als studente <strong>Communication and Multimedia Design</strong> aan de Hogeschool van Amsterdam. Voor mijn afstudeerjaar ben ik nog opzoek naar een afstudeerproject. Ik zou heel graag mijn aparte creatieve gedachtes meer willen gebruiken in combinatie met mijn passie voor coderen.</p>
			</article>

			<a class="next noscrol" href="">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 292.362 292.362">
					<g>
						<path d="M286.935,69.377c-3.614-3.617-7.898-5.424-12.848-5.424H18.274c-4.952,0-9.233,1.807-12.85,5.424
							C1.807,72.998,0,77.279,0,82.228c0,4.948,1.807,9.229,5.424,12.847l127.907,127.907c3.621,3.617,7.902,5.428,12.85,5.428
							s9.233-1.811,12.847-5.428L286.935,95.074c3.613-3.617,5.427-7.898,5.427-12.847C292.362,77.279,290.548,72.998,286.935,69.377z"/>
					</g>
				</svg>
			</a>
	</section>

	<?php foreach($pages->visible()->filterBy('type', 'info') as $section): ?>
	<section class="animsition" id="<?= $section->href()->html() ?>">
		<div class="content">
			<h1><?= $section->title()->html() ?></h1>
			<p><?= $section->text()->html() ?></p>

			<?php

			$projects = $section->children()->visible();

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

			<ul>
				<?php foreach($projects as $project): ?>
				<li>
					<a class="animsition-link" href="<?= $project->url() ?>">
						<?php if($image = $project->images()->sortBy('sort', 'asc')->first()): $thumb = $image->crop(600, 600); ?>
							<img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $project->title()->html() ?>" class="showcase-image" />
						<?php endif ?>
							<h3><?= $project->title()->html() ?></h3>
					</a>
				</li>
				<?php endforeach ?>
			</ul>
		</div>
	</section>
	<?php endforeach ?>

	<?= js(array(
  'assets/js/navigation.js',
  'assets/js/smoothscroll.js')) ?>

</body>
</html>
