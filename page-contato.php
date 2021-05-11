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
            <label for="assunto">Assunto</label>
            <input
              type="text"
              name="assunto"
              id="assunto"
              placeholder="Assunto"
            />
          </div>
          <div class="formGroup">
            <label for="mensagem">Sua Mensagem</label>
            <textarea 
              name="mensagem" 
              id="mensagem" 
              rows="4" 
              placeholder="Sua Mensagem"
            ></textarea>
          </div>
          <button type="submit">ENVIAR</button>
        </form>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>