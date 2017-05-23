<?php

$projects = page('projects')->children()->visible();

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


<div class="w--1of2 pinned">
  <?php $n = 1; foreach($projects as $project): $n++; ?>
    <?php if($n%2 == 1): ?>
      <figure class="portfolio-item lazy" style="background-color: <?= $project->color() ?>;" <?php if($image = $project->image('thumb.jpg')): ?>
      data-src="<?php echo $image->url() ?>"
      <?php endif ?>>
        <figcaption data-color="<?= $project->color() ?>">
          <span>
            <h4><?= $project->title()->html() ?></h4>
            <ul>
              <?php foreach($project->categories()->split() as $category): ?>
                <li><?php echo html($category) ?></li>
              <?php endforeach ?>
            </ul>
          </span>
          <a class="open-project" href="<?= $project->url() ?>">check it out</a>
        </figcaption>
      </figure>
    <?php endif ?>
  <?php endforeach ?>
</div>



<div class="w--1of2 pinned">
  <?php $n = 0; foreach($projects as $project): $n++; ?>
    <?php if($n%2 == 1): ?>
      <figure class="portfolio-item lazy" style="background-color: <?= $project->color() ?>;" <?php if($image = $project->image('thumb.jpg')): ?>
      data-src="<?php echo $image->url() ?>"
      <?php endif ?>>
        <figcaption data-color="<?= $project->color() ?>">
          <span>
            <h4><?= $project->title()->html() ?></h4>
            <ul>
              <?php foreach($project->categories()->split() as $category): ?>
                <li><?php echo html($category) ?></li>
              <?php endforeach ?>
            </ul>
          </span>
          <a class="open-project" href="<?= $project->url() ?>">check it out</a>
        </figcaption>
      </figure>
    <?php endif ?>
  <?php endforeach ?>
</div>
