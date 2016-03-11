<?php use Roots\Sage\Titles; ?>

<?php if(!is_front_page()):?>
  <div class="page-header <?php echo ( ! is_singular() && ! is_page() && ! is_404() ) ? 'sr' : 'show'; ?>">
    <h1><?= Titles\title(); ?></h1>
  </div>
<?php endif;?>
