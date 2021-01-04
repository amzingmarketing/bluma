<?php if (empty($content)) : ?>
    <div class="mt-4">
    <?php $language->p('No pages found') ?>
    </div>
<?php endif ?>

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
            <h2 class="title"><?php echo $page->title(); ?></h2>
        </a>

        <!-- Creation date -->
        <h6><?php echo $page->date(); ?> - <?php echo $L->get('Reading time') . ': ' . $page->readingTime(); ?></h6>

        <!-- Content Break -->
        <?php echo $page->contentBreak(); ?>

        <!-- "Read more" button -->
        <?php if ($page->readMore()) : ?>
        <a href="<?php echo $page->permalink(); ?>" class='button is-outlined'><?php echo $L->get('Read more'); ?></a>
        <?php endif ?>

    </div>

    <!-- Load Bludit Plugins: Page End -->
    <?php Theme::plugins('pageEnd'); ?>

</div>

<hr />

<?php endforeach ?>

<!-- Pagination -->
<?php if (Paginator::numberOfPages() > 1) : ?>
<nav class="pagination" aria-label="pagination">
    <?php
    // Previous button
    if (!Paginator::showPrev()) {
        echo '<a class="pagination-previous" disabled>« ' . $L->get('Previous') . '</a>';
    } else {
        echo '<a class="pagination-previous" href="' . Paginator::previousPageUrl() . '">« ' . $L->get('Previous') . '</a>';
    }

    // Next button
    if (!Paginator::showNext()) {
        echo '<a class="pagination-next" disabled>' . $L->get('Next') . ' »</a>';
    } else {
        echo '<a class="pagination-next" href="' . Paginator::nextPageUrl() . '">' . $L->get('Next') . ' »</a>';
    }
    ?>
</nav>
<?php endif ?>
