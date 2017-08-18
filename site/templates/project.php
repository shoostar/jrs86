<?php snippet('header-project') ?>

<style>
  main {
    background-color: <?= $page->color() ?>;
  }
  ::-webkit-scrollbar { width: 10px; }
  ::-webkit-scrollbar-thumb {
    background-color: <?= $page->color() ?>;
  }
  .cover::after {
    background-image: linear-gradient(rgba(0, 0, 0, 0), <?= $page->color() ?>) !important;
  }
</style>

<div class="cover parallax lazy"

<?php if($image = $page->image('header.jpg')): ?>
data-src="<?= $image->url() ?>"
<?php endif ?>

></div>

<section class="row">
  <?php foreach($page->files()->sortBy('sort', 'asc')->not('header.jpg', 'thumb.jpg') as $file): ?>
  <figure class="<?= $file->imageWidth() ?> <?= $file->imageOffset() ?> pinned"><img src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw== data-src="<?= $file->url() ?>" class="<?php if ($file->shadowed() == 'true') { echo "shadowed "; } else{ echo ""; } ?> b-lazy" /></figure>
  <?php endforeach ?>
</section>

<?php snippet('footer') ?>
