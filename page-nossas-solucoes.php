<?php 
  //Template Name: Nossas Soluções
  get_header();
?>

<main class="pageOurSolutions">
  <?php get_template_part('components/headerPage'); ?>

  <?php
    if(have_rows('nossas_solucoes')) :
      while(have_rows('nossas_solucoes')) : the_row();

      $titleSection = get_sub_field('titulo');
      $titleSectionSlugify = slugify($titleSection);
  ?>

  <section id="<?= $titleSectionSlugify; ?>">
    <div class="container">
      <header>
        <h2><?php the_sub_field('titulo'); ?></h2>
        <h3><?php the_sub_field('subtitulo'); ?></h3>
        <?php the_sub_field('descricao'); ?>
      </header>

      <div class="content">
        <?php if( get_sub_field('imagem_do_servico') ): ?>
          <img src="<?php the_sub_field('imagem_do_servico'); ?>" alt="Imagem referente ao serviço <?= the_sub_field('titulo'); ?>" />
        <?php endif; ?>

        <?php if(have_rows('topicos_dos_servicos')) : ?>
          <ul class="collapseList" data-js="collapseList">
          <?php 
            $count = 0;
            while(have_rows('topicos_dos_servicos')) : the_row(); 
            $count++;

            $titleTopics = 'topic-' . get_sub_field('titulo_do_topico');
            $titleTopicSlugify = slugify($titleTopics);
          ?>
        
            <li>
              <a
                href="#"
                aria-expanded="false"
                type="button"
                data-target="#<?= $titleTopicSlugify; ?>"
                class="collapseTitle"
              >
                <span class="icon <?= $count === 1 ? 'active' : '' ?>"></span>
                <span><?php the_sub_field('titulo_do_topico'); ?></span>
              </a>
    
              <div 
                class="collapseContent <?= $count === 1 ? 'active' : '' ?>" 
                id="<?= $titleTopicSlugify; ?>"
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