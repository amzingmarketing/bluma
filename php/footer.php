<footer class="footer">
    <div class="container">
        <div class="content has-text-centered has-text-light">
            <p><?php echo $site->footer(); ?></p>

            <!-- Social Networks -->
            <?php if ($site->github()) : ?>
                <a href="<?php echo $site->github() ?>" target="_blank">
                    <img class="nav-svg-icon" src="<?php echo DOMAIN_THEME.'img/github.svg' ?>" alt="github icon" />
                </a>
            <?php endif ?>

            <?php if ($site->twitter()) : ?>
                <a href="<?php echo $site->twitter() ?>" target="_blank">
                    <img class="nav-svg-icon" src="<?php echo DOMAIN_THEME.'img/twitter.svg' ?>" alt="twitter icon" />
                </a>
            <?php endif ?>

            <?php if ($site->facebook()) : ?>
                <a href="<?php echo $site->facebook() ?>" target="_blank">
                    <img class="nav-svg-icon" src="<?php echo DOMAIN_THEME.'img/facebook.svg' ?>" alt="facebook icon" />
                </a>
            <?php endif ?>

            <?php if ($site->googleplus()) : ?>
                <a href="<?php echo $site->googleplus() ?>" target="_blank">
                    <img class="nav-svg-icon" src="<?php echo DOMAIN_THEME.'img/googleplus.svg' ?>" alt="googleplus icon" />
                </a>
            <?php endif ?>

            <?php if ($site->codepen()) : ?>
                <a href="<?php echo $site->codepen() ?>" target="_blank">
                    <img class="nav-svg-icon" src="<?php echo DOMAIN_THEME.'img/codepen.svg' ?>" alt="codepen icon" />
                </a>
            <?php endif ?>

            <?php if ($site->linkedin()) : ?>
                <a href="<?php echo $site->linkedin() ?>" target="_blank">
                    <img class="nav-svg-icon" src="<?php echo DOMAIN_THEME.'img/linkedin.svg' ?>" alt="linkedin icon" />
                </a>
            <?php endif ?>

        </div>
    </div>
</footer>
