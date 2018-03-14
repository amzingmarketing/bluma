<nav class="navbar is-dark">
  <div class="navbar-brand">
    <a class="navbar-item" href="<?php echo $site->url() ?>">
        <?php echo $site->title() ?>
    </a>

    <div class="navbar-burger burger" data-target="navbarMenu">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <div id="navbarMenu" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href="<?php echo $site->url() ?>">Home</a>
        <!-- Static pages -->
        <?php foreach ($staticContent as $staticPage) : ?>
        <a class="navbar-item" href="<?php echo $staticPage->permalink() ?>"><?php echo $staticPage->title() ?></a>
        <?php endforeach ?>
    </div>
  </div>
</nav>
