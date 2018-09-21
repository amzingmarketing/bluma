<?php foreach ($content as $page) : ?>
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
            <h1 class="title"><?php echo $page->title(); ?></h2>
        </a>

        <!-- Creation date -->
        <h6><?php echo $page->date(); ?> - <?php echo $Language->get('Reading time') . ': ' . $page->readingTime(); ?></h6>

        <!-- Content Break -->
        <?php echo $page->contentBreak(); ?>

        <!-- "Read more" button -->
        <?php if ($page->readMore()) : ?>
        <a href="<?php echo $page->permalink(); ?>" class='button is-outlined'><?php echo $Language->get('Read more'); ?></a>
        <?php endif ?>

    </div>

    <!-- Load Bludit Plugins: Page End -->
    <?php Theme::plugins('pageEnd'); ?>

</div>

<hr />

<?php endforeach ?>

<!-- Pagination -->
<?php if (Paginator::amountOfPages()>1) : ?>
<nav class="pagination" role="navigation" aria-label="pagination">
    <?php
    // Previous button
    if (!Paginator::showPrev()) {
        echo '<a class="pagination-previous" disabled>« ' . $Language->get('Previous') . '</a>';
    } else {
        echo '<a class="pagination-previous" href="' . Paginator::prevPageUrl() .'">« ' . $Language->get('Previous') . '</a>';
    }

    // Next button
    if (!Paginator::showNext()) {
        echo '<a class="pagination-next" disabled>' . $Language->get('Next') . ' »</a>';
    } else {
        echo '<a class="pagination-next" href="' . Paginator::nextPageUrl() .'">' . $Language->get('Next') . ' »</a>';
    }
    ?>
</nav>
<?php endif ?>
