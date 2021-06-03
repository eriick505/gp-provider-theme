<?php 
  //Template Name: Termos de Uso
  get_header();
?>

<main class="pageTerms">
  <?php get_template_part('components/headerPage'); ?>

  <div class="container content">
    <?php the_content(); ?>
  </div>
</main>

<?php get_footer(); ?>