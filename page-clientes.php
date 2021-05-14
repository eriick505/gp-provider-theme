<?php 
  //Template Name: Clientes
  get_header();
?>

<main class="pageClients">
  <?php get_template_part('components/headerPage'); ?>

  <section class="listClients">
    <div class="container">
      <ul>
        
        <?php 
          $argsCliente = array(
            'post_type' => 'lista-clientes',
            'posts_per_page' => -1,
          );

          $queryClientes = new WP_Query($argsCliente);

          if($queryClientes->have_posts()) : 
          while($queryClientes->have_posts()) : $queryClientes->the_post();
        ?>

          <li>
            <?php 
              the_post_thumbnail('post-thumbnail', array(
                'class' => 'img-fluid', 
                'alt' => get_the_title(),
              )); 
            ?>
          </li>

        <?php endwhile; endif; ?>
        <?php wp_reset_query(); ?>
      </ul>
    </div>
  </section>
</main>

<?php get_footer(); ?>