<?php 
  //Template Name: Trabalhe Conosco
  get_header();
?>

<main class="pageWithForm pageWorkWithUs">
  <?php get_template_part('components/headerPage'); ?>

  <section class="wrapper">
    <div class="content">
      <div class="infoContent">
        <?= get_field('titulo_do_conteudo') ? 
          '<h2>'. get_field('titulo_do_conteudo') .'</h2>' : '' 
        ?>
        <?= get_field('conteudo') ? 
          get_field('conteudo') : '' 
        ?>
      </div>
      <div class="form">
        <h3>Cadastre seu currículo</h3>
        <?= do_shortcode('[contact-form-7 id="195" title="Formulário de Contato - Trabalhe Conosco"]'); ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>