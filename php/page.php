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
            <h2 class="title"><?php echo $page->title(); ?></h2>
        </a>

        <?php if (!$page->isStatic() && !$url->notFound()) : ?>
        <!-- Creation date -->
        <h6><?php echo $page->date(); ?> - <?php echo $L->get('Reading time') . ': ' . $page->readingTime() ?></h6>
        <?php endif ?>

        <!-- Full content -->
        <?php echo $page->content(); ?>

    </div>

    <!-- Load Bludit Plugins: Page End -->
    <?php Theme::plugins('pageEnd'); ?>

</div>
