<footer class="footer">
    <div class="container">
        <div class="content has-text-centered has-text-light">
            <p><?php echo $site->footer(); ?></p>
            <!-- Social Networks -->
            <?php foreach (Theme::socialNetworks() as $key => $label) : ?>
            <a class="nav-link" href="<?php echo $site->{$key}(); ?>" target="_blank">
                <img class="d-none d-sm-block nav-svg-icon" src="<?php echo DOMAIN_THEME . 'img/' . $key . '.svg' ?>" alt="<?php echo $label ?>" />
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</footer>
