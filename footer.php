    <footer class="footer">
      <section class="navFooter">
        <div class="container">
          <div class="logo">
            <img
              src="<?php bloginfo('template_url'); ?>/assets/img/logo-footer.png"
              alt="logo grupo provider rodapé"
            />
          </div>

          <div class="menusFooter">
            <div>
              <h5>SOBRE NÓS</h5>
              <ul>
                <li>
                  <a href="<?php echo get_site_url(); ?>/institucional"
                    >Institucional</a
                  >
                </li>
                <li>
                  <a href="#"
                    >Nossos Conceitos</a
                  >
                </li>
                <li>
                  <a href="#"
                    >Prêmios e Certificações</a
                  >
                </li>
                <li>
                  <a href="<?php echo get_site_url(); ?>/#ondeEstamos"
                    >Onde estamos</a
                  >
                </li>
              </ul>
            </div>

            <div class="no-title">
              <ul>
                <li>
                  <a href="<?php echo get_site_url(); ?>/#setorAtuacao"
                    >Setor de Atuação</a
                  >
                </li>
                <li>
                  <a href="#" target="_blank" rel="noopener noreferrer"
                    >Ouvidoria</a
                  >
                </li>
                <li>
                  <a href="#" target="_blank" rel="noopener noreferrer"
                    >Portal de Colaborador</a
                  >
                </li>
              </ul>
            </div>

            <div>
              <h5>SERVIÇOS</h5>
              <ul>
                <li>
                  <a href="<?php echo get_site_url(); ?>/nossas-solucoes#bpo">
                    BPO
                  </a>
                </li>
                <li>
                  <a 
                    href="<?php echo get_site_url(); ?>/nossas-solucoes#contact-center"
                  >
                    Contact Center
                  </a>
                </li>
                <li>
                  <a 
                    href="<?php echo get_site_url(); ?>/nossas-solucoes#tic"
                  >
                    TIC
                  </a>
                </li>
              </ul>
            </div>

            <div>
              <h5>FERRAMENTAS</h5>
              <ul>
                <li>
                  <a href="#" target="_blank" rel="noopener noreferrer"
                    >Ferramenta 1</a
                  >
                </li>
                <li>
                  <a href="#" target="_blank" rel="noopener noreferrer"
                    >Ferramenta 2</a
                  >
                </li>
                <li>
                  <a href="#" target="_blank" rel="noopener noreferrer"
                    >Ferramenta 3</a
                  >
                </li>
                <li>
                  <a href="#" target="_blank" rel="noopener noreferrer"
                    >Ferramenta 4</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section class="subFooter">
        <div class="container">
          <span>Grupo Provider, todos os direitos reservados</span>
          <span>Desenvolvido pela Tuba Agência</span>
        </div>
      </section>
    </footer>

    <!-- ADD FOOTER WORDPRESS -->
    <?php wp_footer(); ?>
  </body>
</html>
