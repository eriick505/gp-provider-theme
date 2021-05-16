<?php 
  //Template Name: Nossas Soluções
  get_header();

  function slugify($text, string $divider = '-') {
    $text = preg_replace('~[^\pL\d]+~u', $divider, $text);

    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

    $text = preg_replace('~[^-\w]+~', '', $text);

    $text = trim($text, $divider);

    $text = preg_replace('~-+~', $divider, $text);

    $text = strtolower($text);

    if (empty($text)) {
      return 'n-a';
    }

    return $text;
  }
?>

<main class="pageOurSolutions">
  <?php get_template_part('components/headerPage'); ?>

  <?php
    if(have_rows('nossas_solucoes')) :
      while(have_rows('nossas_solucoes')) : the_row();
  ?>

  <section class="bpo" id="bpo">
    <div class="container">
      <header>
        <h2><?php the_sub_field('titulo'); ?></h2>
        <h3><?php the_sub_field('subtitulo'); ?></h3>
        <?php the_sub_field('descricao'); ?>
      </header>

      <div class="content">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/sections/bpo-solucoes.jpg" alt="Imagem referente ao serviço BPO">

        <?php if(have_rows('topicos_dos_servicos')) : ?>
          <ul class="collapseList" data-js="collapseList">
          <?php 
            $count = 0;
            while(have_rows('topicos_dos_servicos')) : the_row(); 
            $count++;

            $titleTopics = 'topic-' . get_sub_field('titulo_do_topico');
            $titleSlugify = slugify($titleTopics);
          ?>
        
            <li>
              <a
                href="#"
                aria-expanded="false"
                type="button"
                data-target="#<?= $titleSlugify; ?>"
                class="collapseTitle"
              >
                <span class="icon <?= $count === 1 ? 'active' : '' ?>"></span>
                <span><?php the_sub_field('titulo_do_topico'); ?></span>
              </a>
    
              <div 
                class="collapseContent <?= $count === 1 ? 'active' : '' ?>" 
                id="<?= $titleSlugify; ?>"
              >
                <?php the_sub_field('descricao_do_topico'); ?>
              </div>
            </li>
        
          <?php endwhile; ?>
          </ul>
        <?php endif; ?>
      </div>
    </div>
  </section>
  
  <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>