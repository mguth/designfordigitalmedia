<?php snippet('header') ?>

  <main class="main" role="main">

    <h1>Themenfeld »<?php echo $page->title()->html() ?>«</h1>

    <div class="meta">
      <div class="meta__col">
        <b>Das Thema in einem Satz:</b><br><?php echo $page->kurzbeschreibung() ?>
      </div>
      <div class="meta__col">
        <b>Teilnehmer:</b>
        <?php echo $page->teilnehmer()->kirbytext() ?>
      </div>
    </div>

    <div class="blocklinks">
      <b>Projekte zum Thema:</b><br>
      <?php foreach($page->children() as $app): ?>
        <a href="<?php echo $app->url() ?>"><?php echo $app->title()->html() ?></a>
      <?php endforeach ?>
    </div>

    <div class="text">
      <?php echo $page->text()->kirbytext() ?>

      <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
      <figure>
        <img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
      </figure>
      <?php endforeach ?>
    </div>

    <nav class="nextprev cf" role="navigation">
      <?php if($prev = $page->prevVisible()): ?>
      <a class="prev" href="<?php echo $prev->url() ?>">&larr; vorheriges Thema</a>
      <?php endif ?>
      <?php if($next = $page->nextVisible()): ?>
      <a class="next" href="<?php echo $next->url() ?>">nächstes Thema &rarr;</a>
      <?php endif ?>
    </nav>

  </main>

<?php snippet('footer') ?>