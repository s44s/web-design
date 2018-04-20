<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">  <meta name="description" content="<?= $site->description()->html() ?>">
  <?= css('assets/css/index.css') ?>
</head>
<body class="home">
  <header>
		<nav>
			<a href=""><img src="../assets/images/contact.png" alt="Contact"/></a>
		</nav>
  </header>
  <main>
		<section class="about">
			<section>
				<figure>
					<video loop muted autoplay>
						<source src="../../assets/images/header-blue.mov" type="video/mov">
						<source src="../../assets/images/header-blue.ogv" type="video/ogg">
					</video>
				</figure>
			</section>

			<article>
				<form>
					<div>
						<input type="checkbox" id="onderzoek" name="subscribe" value="newsletter">
						<label for="onderzoek">Onderzoekende</label>
					</div>
					<div>
						<input type="checkbox" id="concept" name="concept" value="concept">
						<label for="concept">Creatieve</label>
					</div>
					<div>
						<input type="checkbox" id="technisch" name="subscribe" value="newsletter">
						<label for="technisch">Developer</label>
					</div>
				</form>
				<!-- <a href=""><h1>Onderzoekende</h1></a> -->
				<!-- <a href=""><h1>Creatieve</h1></a>
				<a href=""><h1>Developer</h1></a> -->
				<p>Mijn naam is <strong>Suus</strong> en op het moment ga ik mijn laatste jaar in als studente <strong>Communication and Multimedia Design</strong> aan de Hogeschool van Amsterdam. Voor mijn afstudeerjaar ben ik nog opzoek naar een afstudeerproject. Ik zou heel graag mijn aparte creatieve gedachtes meer willen gebruiken in combinatie met mijn passie voor coderen.
					Woorden zijn maar woorden, graag laat ik meer zien in een persoonlijk gesprek. Zou jij meer willen weten over mij? <strong>suus.ten.voorde@hva.nl</strong> of bel mij via <strong>06 39 21 53 08</strong>.</p>
			</article>
		</section>
  </main>
</body>
</html>
