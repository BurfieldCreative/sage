<?php use Roots\Sage\Titles; ?>

<?php if(!is_front_page()):?>
<div class="<?php echo (Roots\Sage\Setup\display_sidebar()) ? false : 'container'; ?>">
    <div class="row">
    <div class="col-12">
        <h1 class="page-header"><?= Titles\title(); ?></h1>
    </div>
    </div>
</div>
<?php endif;?>
