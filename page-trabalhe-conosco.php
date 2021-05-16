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
        <form action="">
          <div class="formGroup">
            <label for="nome">Seu Nome</label>
            <input
              type="text"
              name="nome"
              id="nome"
              placeholder="Seu Nome"
            />
          </div>
          <div class="formGroup">
            <label for="telefone">Seu Telefone</label>
            <input
              type="text"
              name="telefone"
              id="telefone"
              placeholder="Seu Telefone"
            />
          </div>
          <div class="formGroup">
            <label for="curriculo">Selecionar Currículo</label>
            <input
              type="text"
              name="curriculo"
              id="curriculo"
              placeholder="Selecionar Currículo"
            />
            <span class="infoLabel">Arquivo com tamanho máximo de 2MB</span>
          </div>
          <button type="submit">ENVIAR</button>
        </form>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>