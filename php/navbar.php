<nav class="navbar is-dark" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="<?= $site->url() ?>">
      <?= $site->title() ?>
    </a>

    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarMenu">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarMenu" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href="<?= $site->url() ?>">Home</a>
        <!-- Static pages -->
        <?php foreach ($staticContent as $staticPage) : ?>
        <a class="navbar-item" href="<?= $staticPage->permalink() ?>"><?= $staticPage->title() ?></a>
        <?php endforeach ?>
    </div>
  </div>
</nav>
