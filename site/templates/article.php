<?php snippet('header-simple') ?>

<style>
  article > header {
    margin-bottom: 4em;
    padding: 0;
  }
  .first-paragraph {
    font-size: 150%;
  }
</style>

<section class="row">
  <div class="w--3of5 pinned">
    <article>

      <header>
        <h3><?= $page->title()->html() ?></h3>
        <span class="first-paragraph"><?= $page->excerpt()->kirbytext() ?></span>
      </header>

      <?= $page->text()->kirbytext() ?>

      <?php if($page->related()->isNotEmpty()): ?>
      <nav>
        <h6>while we're at it</h6>
        <?php foreach($page->related()->pages(',')->visible() as $related): ?>
          <a href="<?php echo $related->url() ?>"><?php echo $related->title()->html() ?></a>
        <?php endforeach ?>
        <br>
        <h6>that's it for this topic</h6>
        <a href="<?php echo $page->parent->url() ?>">Head back to my notes</a>
      </nav>
      <?php else: ?>
      <nav>
        <h6>that's it for this topic</h6>
        <a href="<?php echo $page->parent->url() ?>">Head back to my notes</a>
      </nav>
      <?php endif?>
    </article>
  </div>
</section>

<?php snippet('footer') ?>
