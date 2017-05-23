<?php snippet('header-simple') ?>


      <?php
      // This page uses a separate controller to set variables, which can be used
      // within this template file. This results in less logic in your templates,
      // making them more readable. Learn more about controllers at:
      // https://getkirby.com/docs/developer-guide/advanced/controllers
      if($pagination->page() == 1):
      ?>
      <?php endif ?>


    <section class="row">
      <div class="w--3of5 pinned">
      <?php if($articles->count()): ?>
        <?php foreach($articles as $article): ?>

          <article class="article index">
            <h4><?= $article->title()->text() ?></h4>
            <?= $article->excerpt()->kirbytext() ?>
            <a href="<?= $article->url() ?>"><?= $article->linktext()->text() ?></a>
          </article>

        <?php endforeach ?>
      <?php else: ?>
        <p>This blog does not contain any articles yet.</p>
      <?php endif ?>
      </div>

          <?php snippet('pagination') ?>
    </section>


<?php snippet('footer') ?>
