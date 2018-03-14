<div class="card card-sidebar">
<!-- Search -->
<form role="search" action="<?php echo $Site->url() . 'search.php';?>" target="_blank">
    <input class='input' type="text" name="q" placeholder="Search...">
</form>
<?php Theme::plugins('siteSidebar') ?>
</div>
