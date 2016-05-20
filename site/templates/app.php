<?php snippet('header') ?>

  <main class="main" role="main">

    <h1><?php echo $page->title()->html() ?></h1>

    <div class="meta">
      <div class="meta__col">
        <b>Themenfeld:</b><br><a href="<?php echo $page->parent()->url() ?>"><?php echo $page->parent()->title()->html() ?></a>
      </div>
      <div class="meta__col">
        <b>Projektteam:</b>
        <?php echo $page->teilnehmer()->kirbytext() ?>
      </div>
    </div>

    <div class="tweet">
      <?php echo $page->tweet() ?>
    </div>

    <div class="text">
      <?php echo $page->text()->kirbytext() ?>
    </div>

  </main>

<?php snippet('footer') ?>