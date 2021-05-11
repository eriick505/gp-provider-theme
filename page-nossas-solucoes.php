<?php 
  //Template Name: Nossas Soluções
  get_header();
?>

<main class="pageOurSolutions">
  <?php get_template_part('components/headerPage'); ?>

  <section class="bpo">
    <div class="container">
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
        <img src="<?php bloginfo('template_url'); ?>/assets/img/sections/bpo-solucoes.jpg" alt="Imagem referente ao serviço BPO">
  
        <ul class="collapseList" data-js="collapseList">
          <li>
            <a
              href="#"
              aria-expanded="false"
              type="button"
              data-target="#atendimentoPresencialCollapse"
              class="collapseTitle"
            >
              <span class="icon active"></span>
              <span> Atendimento Presencial </span>
            </a>
  
            <div 
              class="collapseContent active" 
              id="atendimentoPresencialCollapse"
            >
              <p>
                Com profissionais qualificados e lojas personalizadas de acordo 
                com a necessidade de cada cliente, oferecemos gestão e 
                atendimento em dois níveis: informações gerais e geração de 
                múltiplos serviços. Atuamos na emissão de contas e documentação, 
                mudança de titularidade e os demais serviços relacionados.
              </p>
            </div>
          </li>
          <li>
            <a
              href="#"
              aria-expanded="false"
              type="button"
              data-target="#promocaoVendasCollapse"
              class="collapseTitle"
            >
              <span class="icon"></span>
              <span> Promoção de Vendas </span>
            </a>
  
            <div 
              class="collapseContent" 
              id="promocaoVendasCollapse"
            >
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut 
                officia quam qui est sit consectetur vero eos consequuntur 
                fugit esse.
              </p>
            </div>
          </li>
          <li>
            <a
              href="#"
              aria-expanded="false"
              type="button"
              data-target="#maoObraEspecializadaCollapse"
              class="collapseTitle"
            >
              <span class="icon"></span>
              <span> Mão de Obra Especializada </span>
            </a>
  
            <div 
              class="collapseContent" 
              id="maoObraEspecializadaCollapse"
            >
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut 
                officia quam qui est sit consectetur vero eos consequuntur 
                fugit esse.
              </p>
            </div>
          </li>
          <li>
            <a
              href="#"
              aria-expanded="false"
              type="button"
              data-target="#servicosOperacoesComerciaisCollapse"
              class="collapseTitle"
            >
              <span class="icon"></span>
              <span> Serviços de Operações Comerciais </span>
            </a>
  
            <div 
              class="collapseContent" 
              id="servicosOperacoesComerciaisCollapse"
            >
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut 
                officia quam qui est sit consectetur vero eos consequuntur 
                fugit esse.
              </p>
            </div>
          </li>
          <li>
            <a
              href="#"
              aria-expanded="false"
              type="button"
              data-target="#backOfficeCollapse"
              class="collapseTitle"
            >
              <span class="icon"></span>
              <span> Back Office </span>
            </a>
  
            <div 
              class="collapseContent" 
              id="backOfficeCollapse"
            >
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut 
                officia quam qui est sit consectetur vero eos consequuntur 
                fugit esse.
              </p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>