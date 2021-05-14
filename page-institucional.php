<?php 
  //Template Name: Institucional
  get_header();
?>

<main class="pageInstitutional">
  <?php get_template_part('components/headerPage'); ?>

  <section class="localization sectionPage">
    <div class="container">
      <div class="row reverse">
        <div class="content text-right">
          <?= get_field('descricao_localizacao') ? 
            get_field('descricao_localizacao') : '' 
          ?>
        </div>
        <div class="title">
          <?= get_field('titulo_localizacao') ? 
            '<h3>'. get_field('titulo_localizacao') .'</h3>' : '' 
          ?>
        </div>
      </div>
    </div>
  </section>

  <section class="people sectionPage">
    <div class="container">
      <div class="row">
        <div class="title">
          <?= get_field('titulo_localizacao') ? 
            '<h3>'. get_field('titulo_pessoas') .'</h3>' : '' 
          ?>
        </div>
        <div class="content">
          <?= get_field('descricao_pessoas') ? 
            get_field('descricao_pessoas') : '' 
          ?>
        </div>
      </div>
    </div>
  </section>

  <section class="integration sectionPage">
    <div class="container">
      <div class="row reverse">
        <div class="content text-right">
          <?= get_field('descricao_integracao_de_produtos') ? 
            get_field('descricao_integracao_de_produtos') : '' 
          ?>
        </div>
        <div class="title text-right">
          <?= get_field('titulo_integracao_de_produtos') ? 
            '<h3>'. get_field('titulo_integracao_de_produtos') .'</h3>' : '' 
          ?>
        </div>
      </div>
    </div>
  </section>

  <section class="niches sectionPage">
    <div class="container">
      <div class="row">
        <div class="title">
          <?= get_field('titulo_nichos') ? 
            '<h3>'. get_field('titulo_nichos') .'</h3>' : '' 
          ?>
        </div>
        <div class="content">
          <?= get_field('descricao_nichos') ? 
            get_field('descricao_nichos') : '' 
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>