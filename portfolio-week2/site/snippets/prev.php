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

    <?php if($page->hasPrevVisible()): ?>
			<a class="pagination-item <?= $directionPrev ?>" href="<?= $page->prevVisible()->url() ?>" rel="prev" title="">
				<div>
					<img src="../assets/images/prev.png"/>
					<p><?= $page->prevVisible()->title()->html() ?></p>
				</div>
			</a>
    <?php else: ?>
      <span class="pagination-item <?= $directionPrev ?> is-inactive">
        <?= (new Asset("assets/images/arrow-{$directionPrev}.svg"))->content() ?>
      </span>
    <?php endif ?>

  </div>
<?php endif ?>
