<?php 
  //Template Name: Perguntas Frequentes
  get_header();
?>

<main class="pageFrequentlyAskedQuestions">
  <?php get_template_part('components/headerPage'); ?>

  <section class="content">
    <div class="container">
      <ul class="collapseList" data-js="collapseList">
        <li>
          <a
            href="#"
            aria-expanded="false"
            type="button"
            data-target="#pergunta1"
            class="collapseTitle"
          >
            <span class="icon active"></span>
            <span> 1 - Como entro em contato? </span>
          </a>

          <div 
            class="collapseContent active" 
            id="pergunta1"
          >
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, 
              sapiente. Sint accusantium minus atque dolore non assumenda 
              reprehenderit fuga dolor?
            </p>
          </div>
        </li>
      </ul>
    </div>
  </section>
</main>

<?php get_footer(); ?>