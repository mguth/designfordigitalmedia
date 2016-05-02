<h2>Die Recherche-Themen</h2>

<ul class="teaser cf">
  <?php foreach(page('projekte')->children()->visible()->limit(4) as $project): ?>
  <li>
    <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
    <a href="<?php echo $project->url() ?>">
      <img src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>" >
    </a>
    <?php endif ?>

    <h3><a href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a></h3>
    <p><?php echo $project->Kurzbeschreibung()->excerpt(80) ?></p>

  </li>
  <?php endforeach ?>
</ul>
