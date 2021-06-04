    <?php include('components/modal.html'); ?>
    
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
                  <a href="<?php echo get_site_url(); ?>/#nossoProposito"
                    >Prêmios e Certificações</a
                  >
                </li>
                <li>
                  <a href="<?php echo get_site_url(); ?>/#ondeEstamos"
                    >Onde estamos</a
                  >
                </li>
                <li>
                  <a href="<?php echo get_site_url(); ?>/#setorAtuacao"
                    >Setor de Atuação</a
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
                    href="<?php echo get_site_url(); ?>/nossas-solucoes#call-center-contact-center-teletrabalho"
                  >
                    Contact Center
                  </a>
                </li>
              </ul>
            </div>

            <div>
              <h5>FERRAMENTAS</h5>
              <div class="toolsList">
                <ul>
                  <li>
                    <a href="http://bpm.grupoprovider.com.br" target="_blank" rel="noopener noreferrer"
                      >BPM</a
                    >
                  </li>
                  <li>
                    <a href="http://csc.grupoprovider.com.br/otrs/customer.pl" target="_blank" rel="noopener noreferrer"
                      >CSC</a
                    >
                  </li>
                  <li>
                    <a href="http://csc2.grupoprovider.com.br/otrs/customer.pl" target="_blank" rel="noopener noreferrer"
                      >CSC - SP</a
                    >
                  </li>
                </ul>

                <ul>
                  <li>
                    <a href="http://ead.grupoprovider.com.br" target="_blank" rel="noopener noreferrer"
                      >EAD</a
                    >
                  </li>
                  <li>
                    <a href="http://ged.grupoprovider.com.br" target="_blank" rel="noopener noreferrer"
                      >GED</a
                    >
                  </li>
                  <li>
                    <a href="https://webmail.grupoprovider.com.br" target="_blank" rel="noopener noreferrer"
                      >Webmail</a
                    >
                  </li>
                </ul>

                <ul>
                  <li>
                    <a href="http://portal.grupoprovider.com.br/Corpore.Net/Login.aspx" target="_blank" rel="noopener noreferrer"
                      >Portal do Colaborador</a
                    >
                  </li>
                  <li>
                    <a href="http://zabbix.grupoprovider.com.br" target="_blank" rel="noopener noreferrer"
                      >Monitoração da Infra</a
                    >
                  </li>
                  <li>
                    <a href="http://chatrecife.grupoprovider.com.br" target="_blank" rel="noopener noreferrer"
                      >Chat Suporte</a 
                    >
                  </li>
                </ul>
              </div>
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
