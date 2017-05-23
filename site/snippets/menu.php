

<nav>
  <?php foreach($pages->visible() as $item): ?>
    <a class="nav-item <?= r($item->isOpen(), ' is-active') ?>" href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
  <?php endforeach ?>
</nav>
