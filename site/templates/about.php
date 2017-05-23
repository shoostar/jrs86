<?php snippet('header') ?>

<section class="row">
  <div class="w--3of5 pinned">
    <h6><?= $page->about1title()->text() ?></h6>
    <?= $page->about1text()->kirbytext() ?>

    <h6><?= $page->about2title()->text() ?></h6>
    <?= $page->about2text()->kirbytext() ?>

    <h6><?= $page->about3title()->text() ?></h6>
    <?= $page->about3text()->kirbytext() ?>

    <h6><?= $page->about4title()->text() ?></h6>
    <?= $page->about4text()->kirbytext() ?>
  </div>
</section>

<?php snippet('footer') ?>
