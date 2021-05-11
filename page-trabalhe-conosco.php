<?php 
  //Template Name: Trabalhe Conosco
  get_header();
?>

<main class="pageWithForm pageWorkWithUs">
  <?php get_template_part('components/headerPage'); ?>

  <section class="wrapper">
    <div class="content">
      <div class="infoContent">
        <h2>Junte-se a nós!</h2>
        <p>A nossa cultura é trabalhar sempre em cooperação com a nossa equipe. 
        Acreditamos que investir nos colaboradores é trazer ainda mais qualidade 
        aos nosso negócios e produtos. Por isso, estamos sempre em busca de novos 
        talentos dispostos a dividir esse grande sonho com a gente.</p>
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