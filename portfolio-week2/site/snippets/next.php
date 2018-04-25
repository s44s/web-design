<?php

/*

The $flip parameter can be passed to the snippet to flip
prev/next items visually:

```
<?php snippet('prevnext', ['flip' => true]) ?>
```

Learn more about snippets and parameters at:
https://getkirby.com/docs/templates/snippets

*/

$directionPrev = @$flip ? 'right' : 'left';
$directionNext = @$flip ? 'left'  : 'right';

if($page->hasNextVisible() || $page->hasPrevVisible()): ?>
  <div class="pagination <?= !@$flip ?: ' flip' ?> wrap cf">

    <?php if($page->hasNextVisible()): ?>
      <a class="pagination-item <?= $directionNext ?>" href="<?= $page->nextVisible()->url() ?>" rel="next" title="">
				<p>read next</p>
				<h1><?= $page->nextVisible()->title()->html() ?></h1>
      </a>
		<?php else: ?>
			<a class="<?= $directionNext ?> no-next" href="http://webdesign.test/contact" rel="next" title="">
				<p>do next</p>
				<h1>Send me a message</h1>
			</a>
    <?php endif ?>

  </div>
<?php endif ?>
