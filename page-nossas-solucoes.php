<?php 
  //Template Name: Nossas Soluções
  get_header();
?>

<main class="pageWithForm pageWorkWithUs">
  <?php get_template_part('components/headerPage'); ?>

  <section class="bpo">
    <header>
      <h2>BPO</h2>
      <h3>Serviços planejados sob medida para o seu negócio</h3>
      <p>Eficiência operacional para o cliente, por meio de serviços 
        personalizados de acordo com cada característica de negócio. 
        Atendimento presencial com profissionais qualificados para informações 
        gerais, realização de atividades administrativas de rotina e manutenção 
        de estrutura de rede. Nossa mão de obra é preparada especialmente para 
        gerar qualidade de operação para o cliente.</p>
    </header>
    <div class="content">
      <img src="<?php bloginfo('template_url'); ?>/assets/img/sections/bpo.jpg" alt="Imagem referente ao serviço BPO">

      <ul class="collapseList" data-js="collapseList">
        <li>
          <a
            href="#"
            aria-expanded="false"
            type="button"
            data-target="#pernambucoCollapse"
            class="collapseTitle"
          >
            <span class="icon active"></span>
            <span> Pernambuco </span>
          </a>

          <div class="collapseContent active" id="pernambucoCollapse">
            <p>
              <b>Recife:</b> Rua Dois de Julho, 80 - Bairro Santo Amaro
              - CEP: 50.040-180 Contato: +55 (81) 2122-2122 - CNPJ:
              01.159.435/0001-46
            </p>
            <p>
              <b>Caruaru:</b> Rod BR 104, KM 62, S/N - Bairro Nova
              Caruaru - CEP: 55.002-971 Contato: +55 81 3727-7650/5420 -
              CNPJ: 01.159.435/0005-70
            </p>
          </div>
        </li>
        <li>
          <a
            href="#"
            aria-expanded="false"
            type="button"
            data-target="#saoPauloCollapse"
            class="collapseTitle"
          >
            <span class="icon"></span>
            <span> São Paulo </span>
          </a>

          <div class="collapseContent" id="saoPauloCollapse">
            <p>
              <b>Recife:</b> Rua Dois de Julho, 80 - Bairro Santo Amaro
              - CEP: 50.040-180 Contato: +55 (81) 2122-2122 - CNPJ:
              01.159.435/0001-46
            </p>
            <p>
              <b>Caruaru:</b> Rod BR 104, KM 62, S/N - Bairro Nova
              Caruaru - CEP: 55.002-971 Contato: +55 81 3727-7650/5420 -
              CNPJ: 01.159.435/0005-70
            </p>
          </div>
        </li>
      </ul>
    </div>
  </section>
</main>

<?php get_footer(); ?>