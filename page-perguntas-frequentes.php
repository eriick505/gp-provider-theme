<?php 
  //Template Name: Perguntas Frequentes
  get_header();
?>

<main class="pageFrequentlyAskedQuestions">
  <?php get_template_part('components/headerPage'); ?>

  <section class="content">
    <div class="container">
      <ul class="collapseList" data-js="collapseList">

        <?php 
          $my_args_depo = array(
            'post_type' => 'faq',
            'posts_per_page' => -1,
            'order' => 'asc',
          );

          $my_query_depo = new WP_Query($my_args_depo);
          
          if($my_query_depo->have_posts()) : 
          $count = 0;
          while($my_query_depo->have_posts()) : $my_query_depo->the_post();
          
          $count++;
          $post_id = get_the_ID();
        ?>

        <li>
          <a
            href="#"
            aria-expanded="false"
            type="button"
            data-target="<?= '#faq' . $post_id ?>"
            class="collapseTitle"
          >
            <span class="icon <?= $count === 1 ? 'active' : '' ?>"></span>
            <span><?php the_title(); ?></span>
          </a>

          <div 
            class="collapseContent <?= $count === 1 ? 'active' : '' ?>" 
            id="<?= 'faq' . $post_id ?>"
          >
            <?php the_content(); ?>
          </div>
        </li>

        <?php endwhile; endif; ?>
        <?php wp_reset_query(); ?>

        
      </ul>
    </div>
  </section>
</main>

<?php get_footer(); ?>