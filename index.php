<!DOCTYPE html>
<html lang="<?php echo Theme::lang() ?>">
<head>
<?php include(THEME_DIR_PHP . 'head.php'); ?>
</head>
<body>

    <!-- Load Bludit Plugins: Site Body Begin -->
    <?php Theme::plugins('siteBodyBegin'); ?>

    <!-- Navbar -->
    <?php include(THEME_DIR_PHP . 'navbar.php'); ?>

    <!-- Content -->
    <section class="section">
    <div class="container">
        <div class="columns">

            <!-- Blog Posts -->
            <div class="column is-three-quarters">
            <?php
            // Bludit content are pages
            // But if you order the content by date
            // These pages works as posts

            // $WHERE_AM_I variable detect where the user is browsing
            // If the user is watching a particular page/post the variable takes the value "page"
            // If the user is watching the frontpage the variable takes the value "home"
            if ($WHERE_AM_I == 'page') {
                include(THEME_DIR_PHP . 'page.php');
            } else {
                include(THEME_DIR_PHP . 'home.php');
            }
            ?>
            </div>

            <!-- Right Sidebar -->
            <div class="column">
            <?php include(THEME_DIR_PHP . 'sidebar.php'); ?>
            </div>

        </div>
    </div>
    </section>

    <!-- Footer -->
    <?php include(THEME_DIR_PHP . 'footer.php'); ?>

    <!-- Javascript -->
    <?= Theme::jquery(); ?>

    <!-- JS: Scripts for this theme -->
    <?php echo Theme::js('js/bulma.js'); ?>

    <!-- Load Bludit Plugins: Site Body End -->
    <?php Theme::plugins('siteBodyEnd'); ?>

</body>
</html>
