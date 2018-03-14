<!-- Post -->
<div class='content'>

    <!-- Load Bludit Plugins: Page Begin -->
    <?php Theme::plugins('pageBegin'); ?>

    <!-- Cover image -->
    <?php if ($page->coverImage()) : ?>
    <img alt="Cover Image" src="<?php echo $page->coverImage(); ?>"/>
    <?php endif ?>

    <div>
        <!-- Title -->
        <a class="text-dark" href="<?php echo $page->permalink(); ?>">
            <h1 class="title"><?php echo $page->title(); ?></h1>
        </a>

        <?php if (!$page->isStatic() && !$Url->notFound()) : ?>
        <!-- Creation date -->
        <h6><?php echo $page->date(); ?> - <?php echo $Language->get('Reading time') . ': ' . $page->readingTime() ?></h6>
        <?php endif ?>

        <!-- Full content -->
        <?php echo $page->content(); ?>

    </div>

    <!-- Load Bludit Plugins: Page End -->
    <?php Theme::plugins('pageEnd'); ?>

</div>
