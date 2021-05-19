<?php 
  //Template Name: Contato
  get_header();
?>

<main class="pageWithForm pageContact">
  <?php get_template_part('components/headerPage'); ?>

  <section class="wrapper">
    <div class="content">
      <div class="form">
        <h3>Fale conosco</h3>
        <?= do_shortcode('[contact-form-7 id="196" title="Formulário de contato - Página Contato"]'); ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>