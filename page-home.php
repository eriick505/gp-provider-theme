<?php 
  //Template Name: Home
  get_header();
?>

<main id="app">
  <section 
    class="hero" 
    style="background-image: url('<?= get_field('imagem_do_banner_inicial') ? 
    the_field('imagem_do_banner_inicial') : 
    '' ?>');"
  >
    <div class="container">
      <header>
        <h1>
          <?= get_field('texto_do_banner_inicial') ? 
            get_field('texto_do_banner_inicial') : '' 
          ?>
        </h1>

        <?php 
          $link = get_field('link_do_botao_do_banner');

          if($link) {
            $link_url = $link['url'];
            $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
          <a 
            href="<?php echo esc_url( $link_url ); ?>" 
            target="<?php echo esc_attr( $link_target ); ?>" 
            rel="noopener noreferrer"
            class="btn btnOrangeGradient"
          >
        <?php } else { ?>
          <a 
            href="#" 
            class="btn btnOrangeGradient"
          >
        <?php } ?>
          Solicite contato comercial
        </a>
      </header>
    </div>
  </section>

  <section class="about">
    <div class="container">
      <header class="title bgDetails">
        <span>um pouco da nossa</span>
        <h2 class="title">TRAJETÓRIA</h2>
      </header>

      <div>
        <?= get_field('descricao_nossa_trajetoria') ? 
          get_field('descricao_nossa_trajetoria') : '' 
        ?>
      </div>

      <footer>
        <?php 
          $link = get_field('link_do_botao_da_nossa_trajetoria');

          if($link) {
            $link_url = $link['url'];
            $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
          <a 
            href="<?php echo esc_url( $link_url ); ?>" 
            target="<?php echo esc_attr( $link_target ); ?>" 
            rel="noopener noreferrer"
            class="btn btnOrangeGradient"
          >
        <?php } else { ?>
          <a 
            href="#" 
            class="btn btnOrangeGradient"
          >
        <?php } ?>
          Conheça mais
        </a>
      </footer>
    </div>
  </section>

  <section class="purpose">
    <div class="container">
      <header class="title">
        <span>Conheça o nosso</span>
        <h2 class="title">PROPÓSITO</h2>
      </header>

      <?= get_field('descricao_nosso_proposito') ? 
        get_field('descricao_nosso_proposito') : '' 
      ?>

      <div class="purposeList">
        <article>
          <a href="#" data-openModal="missao">
            <img
              src="<?php bloginfo('template_url'); ?>/assets/img/icons/icon-missao-title.png"
              alt="icone de missão"
            />
            <span>Missão</span>
          </a>
        </article>

        <article>
          <a href="#" data-openModal="visao">
            <img
              src="<?php bloginfo('template_url'); ?>/assets/img/icons/icon-visao-title.png"
              alt="icone de visão"
            />
            <span>Visão</span>
          </a>
        </article>

        <article>
          <a href="#" data-openModal="valores">
            <img
              src="<?php bloginfo('template_url'); ?>/assets/img/icons/icon-valores-title.png"
              alt="icone de valores"
            />
            <span>Valores</span>
          </a>
        </article>

        <article>
          <a href="#" data-openModal="premios">
            <img
              src="<?php bloginfo('template_url'); ?>/assets/img/icons/icon-premios-title.png"
              alt="icone de Premios e Certificações"
            />
            <span>Prêmios e Certificações</span>
          </a>
        </article>
      </div>
    </div>
  </section>

  <section class="services" id="setorAtuacao">
    <div class="container">
      <header class="title bgDetails">
        <span>O que você</span>
        <h2>PRECISA?</h2>
      </header>

      <?php if(have_rows('servicos_que_voce_precisa')) : ?>
        <ul class="listServices">
      <?php while(have_rows('servicos_que_voce_precisa')) : the_row(); ?>

        <li>
          <article 
            class="box" 
            style="background-image: url('<?= get_sub_field('imagem_background') ? 
            the_sub_field('imagem_background') : 
            '' ?>');"
          >

            <a href="<?php echo get_site_url(); ?>/nossas-solucoes#bpo">
              <h5><?php the_sub_field('titulo_do_servico'); ?></h5>
            </a>

            <?php the_sub_field('descricao_do_servico'); ?>

            <?php 
              $link = get_sub_field('link_do_servico');

              if($link) {
                $link_url = $link['url'];
                $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
              <a 
                href="<?php echo esc_url( $link_url ); ?>" 
                target="<?php echo esc_attr( $link_target ); ?>" 
                rel="noopener noreferrer"
                class="btnServices"
              >
            <?php } else { ?>
              <a 
                href="#" 
                class="btnServices"
              >
            <?php } ?>
              <span>Conheça mais</span>
              <svg
                width="31"
                height="24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M12.83 6l-1.75 1.41L16.76 12l-5.68 4.59L12.83 18l7.44-6-7.44-6z"
                  fill="#fff"
                />
              </svg>
            </a>
          </article>
        </li>

      <?php endwhile; ?> 
        </ul>
      <?php endif; ?>

      <div class="whereWeOperate">
        <div>
          <header>
            <h3>
              <svg
                width="17"
                height="14"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path d="M11.5 0H7l5 7-5 7h4.5l5-7-5-7z" fill="#000" />
                <path d="M4.5 0H0l5 7-5 7h4.5l5-7-5-7z" fill="#000" />
              </svg>
              <span>Onde atuamos</span>
            </h3>
          </header>

          <?= get_field('descricao_onde_atuamos') ? 
            get_field('descricao_onde_atuamos') : '' 
          ?>
        </div>
        <div>
          <ul class="listLocation">
            <li>
              <img
                src="<?php bloginfo('template_url'); ?>/assets/img/icons/setor-publico-icon.svg"
                alt="icone representativo do setor público"
              />
              <span>Setor Público</span>
            </li>
            <li>
              <img
                src="<?php bloginfo('template_url'); ?>/assets/img/icons/setor-privado-icon.svg"
                alt="icone representativo do setor privado"
              />
              <span>Setor Privado</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="whereWeAre" id="ondeEstamos">
    <div class="container">
      <header class="title">
        <span>Saiba onde</span>
        <h2 class="title">ESTAMOS</h2>
      </header>

      <div class="row">
        <div>
          <?php 
            if(have_rows('locais_onde_a_empresa_se_encontra')) : 
            $count = 0; 
          ?>
            <ul class="collapseList" data-js="collapseList">
          <?php 
            while(have_rows('locais_onde_a_empresa_se_encontra')) : 
            the_row(); 
            $count++; 

            $titleLocal = 'local-' . get_sub_field('titulo_do_local');
            $titleLocalSlugify = slugify($titleLocal);
          ?>

              <li>
                <a
                  href="#"
                  aria-expanded="false"
                  type="button"
                  data-target="#<?= $titleLocalSlugify; ?>"
                  class="collapseTitle"
                >
                  <span class="icon <?= $count === 1 ? 'active' : '' ?>"></span>
                  <span> <?php the_sub_field('titulo_do_local'); ?> </span>
                </a>

                <div 
                  class="collapseContent <?= $count === 1 ? 'active' : '' ?>" 
                  id="<?= $titleLocalSlugify; ?>"
                >
                  <?php the_sub_field('descricao_do_local'); ?>
                </div>
              </li>

          <?php endwhile; ?> 
            </ul>
          <?php endif; ?>
        </div>

        <div class="map">
          <img
            src="<?php bloginfo('template_url'); ?>/assets/img/icons/map-brasil.svg"
            alt="mapa do brasil com a logo do grupo provider por cima"
          />
        </div>
      </div>
    </div>
  </section>

  <section class="clients">
    <div class="container">
      <header class="title bgDetails">
        <span>Conosco nesta</span>
        <h2 class="title">TRAJETÓRIA</h2>
      </header>
    </div>

    <div class="containerExpanded">
      <?php 
        $images = get_field('lista_de_clientes');

        if( $images ): 
      ?>
          <ul class="content">
            <?php foreach( $images as $image ): ?>
              <li>
                <img 
                  src="<?php echo esc_url($image['sizes']['large']); ?>" 
                  alt="<?php echo esc_attr($image['alt']); ?>" 
                />
              </li>
            <?php endforeach; ?>
          </ul>
      <?php endif; ?>
    </div>

    <div class="container">
      <footer>
        <a href="<?php echo get_site_url(); ?>/clientes" class="btn btnOrangeGradient">Ver mais </a>
      </footer>
    </div>
  </section>

  <section class="contact">
    <div class="container">
      <div class="row">
        <div class="doubt">
          <header>
            <h2>
              <span>FICOU COM</span>
              <span>DÚVIDAS?</span>
            </h2>
          </header>
          <div class="content">
            <p>
              Confira nossa FAQ contendo as principais dúvidas sobre nossos
              serviços ou se preferir, entre em contato conosco via
              telefone.
            </p>
            <ul class="listContact">
              <li>
                <a 
                  href="<?php echo get_site_url(); ?>/perguntas-frequentes" 
                  class="btnFaq"
                >
                  ACESSAR FAQ
                </a>
              </li>
              <li>ou</li>
              <li>
                <a href="tel:558121222122" class="btnTel">
                  <img
                    src="<?php bloginfo('template_url'); ?>/assets/img/icons/phone-icon.svg"
                    alt="telefone icon"
                  />
                  <span>(81) 2122-2122</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="form">
          <h3>ENTRE EM CONTATO</h3>
          <?= do_shortcode('[contact-form-7 id="194" title="Formulário de contato - Home"]'); ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>