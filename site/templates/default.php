<?php snippet('header-simple') ?>

<section class="row">
  <div class="w--3of5 pinned">
     <h1><?= $page->title()->html() ?></h1>
     <div class="intro text">
       <?= $page->intro()->kirbytext() ?>
     </div>
     <hr />

      <?= $page->text()->kirbytext() ?>
     </div>
    </section>

<?php snippet('footer') ?>
