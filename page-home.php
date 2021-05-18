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
          <svg
            width="50"
            height="50"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <circle cx="25" cy="25" r="25" fill="url(#paint0_linear)" />
            <g clip-path="url(#clip0)">
              <path
                d="M41.04 21.89a1 1 0 00.26-.41v-.44c-.16-.34-.44-.45-.8-.45-1.36.02-2.7 0-4.05.01-.2 0-.28-.05-.33-.26-.09-.37-.2-.74-.34-1.1-2.1-5.32-5.95-8.38-11.61-9.02-2.46-.27-4.83.19-7.06 1.29a13.65 13.65 0 00-7.5 14.62 13.38 13.38 0 006.02 9.26c.19.12.24.2.11.43-.56.97-1.1 1.95-1.65 2.94-.35.62-.09 1.08.6 1.08h2.93c.37.01.6-.14.77-.46.36-.67.75-1.32 1.11-1.99.1-.18.2-.22.4-.17 2.06.49 4.14.5 6.21 0 .18-.05.28-.01.37.16.37.68.76 1.34 1.12 2.02.17.3.4.45.75.45.97-.02 1.95-.05 2.92 0 .58.04 1-.5.65-1.09-.58-.95-1.1-1.94-1.65-2.9-.13-.23-.13-.33.1-.49 2.91-1.92 4.82-4.6 5.75-7.97.05-.2.12-.27.33-.27l4.04.01c.37 0 .64-.1.81-.44v-.44a1 1 0 00-.27-.41c-.58-.58-1.15-1.18-1.74-1.75-.17-.17-.17-.29 0-.46l1.75-1.75zM17.48 38.43c-.07.12-.14.16-.27.15h-1.57l.47-.85.78-1.38c.04-.09.06-.2.22-.12.41.2.84.38 1.28.57l-.91 1.63zm12.87.15h-1.6c-.14 0-.19-.06-.24-.16l-.91-1.62 1.29-.57c.1-.05.14-.01.19.07l1.27 2.28zm-8.65-2.34A12.36 12.36 0 0110.67 23.9a12.3 12.3 0 0124.21-3.29c-.52-.14-.8.22-1.11.53l-1.28 1.3a9.99 9.99 0 00-1.04-3.16c-.18-.33-.44-.47-.72-.4-.44.1-.64.52-.42.95.42.8.72 1.62.87 2.5.05.23.06.47.1.71.03.18-.04.2-.2.2h-2.3c-.18 0-.22-.06-.25-.23a5.65 5.65 0 00-4.71-4.75 5.67 5.67 0 00-1.65 11.2 5.6 5.6 0 006.34-4.51c.1-.45.1-.45.55-.45.64 0 1.28.02 1.93 0 .28-.02.32.08.29.32a8.43 8.43 0 01-1.84 4.38 8.33 8.33 0 01-14.68-4.04 8.38 8.38 0 016.8-9.58 8.12 8.12 0 015.33.85c.45.23.85.14 1.01-.23.15-.33.02-.66-.35-.86a9.33 9.33 0 00-3.04-1.03 9.27 9.27 0 00-7.6 2.08 9.35 9.35 0 00-3.45 6.42 9.65 9.65 0 007.16 10.45 9.6 9.6 0 0011.78-7.49l.1-.46 1.29 1.3c.3.32.59.64 1.09.52a12.29 12.29 0 01-13.18 9.11zm1.04-11.79l1.37.8c.53.3.99.03 1-.58 0-.1-.03-.18.12-.18h2.05a4.36 4.36 0 01-4.45 3.78 4.4 4.4 0 01-.04-8.8 4.37 4.37 0 014.5 3.77h-2.06c-.1 0-.12-.03-.13-.14-.02-.68-.46-.92-1.04-.59l-1.32.77c-.51.31-.51.86 0 1.17zm16.43 1.43h-4.13a.41.41 0 01-.33-.13l-1.19-1.2c.07-.1.16-.05.24-.05h3.8c.18 0 .3.05.42.18.37.39.76.77 1.19 1.2zm-1.3-2.7c-.09.08-.18.06-.27.06h-4.15l1.32-1.3a.25.25 0 01.2-.08h4.22l-1.33 1.32z"
                fill="#fff"
              />
            </g>
            <defs>
              <linearGradient
                id="paint0_linear"
                x1="21.99"
                y1="25"
                x2="50"
                y2="25"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="#E97512" />
                <stop offset="1" stop-color="#F5A058" />
              </linearGradient>
              <clipPath id="clip0">
                <path
                  fill="#fff"
                  transform="translate(9.42 10.14)"
                  d="M0 0h31.88v29.71H0z"
                />
              </clipPath>
            </defs>
          </svg>
          <span>Missão</span>
        </article>

        <article>
          <svg
            width="50"
            height="50"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <circle cx="25" cy="25" r="25" fill="url(#paint0_linear)" />
            <g clip-path="url(#clip0)" fill="#fff">
              <path
                d="M39.59 24.34a24.4 24.4 0 00-8.54-7.04 12.72 12.72 0 00-7.08-1.28c-1.98.23-3.8.94-5.51 1.9a24.35 24.35 0 00-5.6 4.43c-.72.76-1.46 1.5-1.99 2.43v.44c.1.16.18.34.3.5a27.68 27.68 0 004.1 4.15 20.24 20.24 0 005.41 3.26 12.4 12.4 0 006.05.85c1.95-.23 3.75-.9 5.44-1.86a25.76 25.76 0 007.42-6.46c.36-.45.35-.87 0-1.32zm-2.05.8a23.77 23.77 0 01-6.9 5.65c-1.63.85-3.6 1.38-5.29 1.38-1.86 0-3.59-.54-5.23-1.37a21.58 21.58 0 01-5.6-4.21c-.46-.47-.92-.95-1.35-1.45-.1-.11-.1-.17 0-.28 1.99-2.29 4.23-4.29 6.97-5.68 1.8-.91 3.7-1.45 5.75-1.34 1.3.07 2.55.4 3.75.91a20.58 20.58 0 016.41 4.5c.52.52 1.02 1.05 1.5 1.6.09.12.1.18 0 .3z"
              />
              <path
                d="M25.36 19.38a5.68 5.68 0 00-5.73 5.61 5.68 5.68 0 005.71 5.63A5.69 5.69 0 0031.1 25a5.68 5.68 0 00-5.73-5.61zm-.03 9.35a3.76 3.76 0 01-3.78-3.75 3.76 3.76 0 013.82-3.71 3.75 3.75 0 013.8 3.73 3.76 3.76 0 01-3.84 3.73z"
              />
            </g>
            <defs>
              <linearGradient
                id="paint0_linear"
                x1="21.99"
                y1="25"
                x2="50"
                y2="25"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="#E97512" />
                <stop offset="1" stop-color="#F5A058" />
              </linearGradient>
              <clipPath id="clip0">
                <path
                  fill="#fff"
                  transform="translate(10.87 15.94)"
                  d="M0 0h28.99v18.12H0z"
                />
              </clipPath>
            </defs>
          </svg>
          <span>Visão</span>
        </article>

        <article>
          <svg
            width="50"
            height="50"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <circle cx="25" cy="25" r="25" fill="url(#paint0_linear)" />
            <g clip-path="url(#clip0)" fill="#fff">
              <path
                d="M41.3 26.62c-.2.35-.5.47-.9.45-.3-.02-.63 0-.94 0-.44-.02-.72-.27-.72-.64 0-.38.26-.63.7-.65h1.02c.38-.02.68.1.84.46v.38zM25.64 12.87V15c-.01.3-.27.52-.56.55a.62.62 0 01-.66-.43c-.03-.1-.05-.2-.05-.31v-3.9c0-.47.24-.76.63-.76.4-.01.65.26.65.75v1.97h-.01zM34.03 18.1c-.3 0-.5-.1-.62-.33a.58.58 0 01.02-.63l.16-.2L35.55 15c.15-.16.32-.27.56-.26.47.01.77.53.53.93-.05.09-.1.16-.17.23l-1.96 1.95c-.14.15-.3.27-.48.26zM13.96 14.72c.2-.01.35.1.49.23l2 2c.3.31.32.7.06.96-.27.27-.64.26-.96-.05l-2-2c-.22-.22-.33-.48-.19-.78a.6.6 0 01.6-.36zM10.02 25.8c.22 0 .45-.02.67 0a.6.6 0 01.56.57c.03.32-.13.6-.46.65-.54.09-1.1.1-1.64 0-.31-.07-.48-.37-.45-.68.03-.29.26-.5.56-.55h.76zM25.03 16.44c.34 0 .62.28.62.63s-.3.65-.65.64a.68.68 0 01-.63-.64c0-.34.3-.64.66-.63zM37.54 25.38l-3.32-5.14c-.38-.6-.89-.89-1.61-.88-2.53.02-5.05 0-7.58 0-2.56 0-5.12.02-7.68 0-.68 0-1.16.27-1.53.84l-3.37 5.18c-.48.75-.43 1.4.16 2.06L23.73 39.9c.82.91 1.72.9 2.54-.01L37.4 27.43c.6-.66.64-1.3.15-2.05zm-5.44-4.73l-2.97 4.58-2.97-4.58h5.94zm-6.98.75c.91 1.43 1.83 2.84 2.75 4.26l.04.12h-5.8c-.03-.1.04-.14.07-.2l2.67-4.13c.07-.1.1-.3.27-.05zm-1.29-.74l-2.95 4.56-2.96-4.56h5.91zm-7.1.52l2.96 4.58h-5.95l2.98-4.58zm6.98 16.76L14 27.06h6.12c.17 0 .28.02.34.22l3.25 10.57-.01.09zm1.32-.43h-.06l-3.22-10.44h6.5l-3.22 10.44zm1.3.37l-.05-.03 1.47-4.8 1.77-5.73c.05-.14.06-.26.27-.26h6.08l.1.04-9.63 10.78zm3.99-12.11l2.97-4.59 2.97 4.59h-5.94z"
              />
            </g>
            <defs>
              <linearGradient
                id="paint0_linear"
                x1="21.99"
                y1="25"
                x2="50"
                y2="25"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="#E97512" />
                <stop offset="1" stop-color="#F5A058" />
              </linearGradient>
              <clipPath id="clip0">
                <path
                  fill="#fff"
                  transform="translate(8.7 10.14)"
                  d="M0 0h32.61v30.43H0z"
                />
              </clipPath>
            </defs>
          </svg>
          <span>Valor</span>
        </article>

        <article>
          <svg
            width="50"
            height="50"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <circle cx="25" cy="25" r="25" fill="url(#paint0_linear)" />
            <mask
              id="a"
              maskUnits="userSpaceOnUse"
              x="12.04"
              y="10.59"
              width="26"
              height="29"
              fill="#000"
            >
              <path fill="#fff" d="M12.04 10.59h26v29h-26z" />
              <path
                d="M36.95 16.34c-.02-.76-.6-1.28-1.36-1.28h-3.13c-.1 0-.24.02-.2-.15.04-.12-.13-.3.16-.35.51-.07.78-.42.78-.94 0-.3-.02-.58 0-.87.05-.53-.13-.93-.62-1.16H22.24c-.26.11-.35.24-.32.45.02.2.18.36.41.4.14.03.28.02.42.02h9.35c.16.01.23.1.23.25v.63c0 .35-.02.37-.37.37H17.92c-.16 0-.24-.08-.25-.24v-.5c0-.5 0-.5.5-.5l2.33-.01c.26 0 .43-.15.49-.36.05-.22-.02-.36-.27-.5h-3.29c-.4.2-.66.5-.63 1 .02.34 0 .7 0 1.04 0 .49.28.86.76.92.3.04.16.24.18.37.02.22-.16.12-.24.12h-3c-.89 0-1.43.54-1.45 1.42-.03.95.05 1.88.26 2.8.86 3.82 3.14 6.31 6.9 7.41.14.05.3.08.43.18.59.46 1.25.81 1.96 1.06.1.04.18.07.24.17.2.33.38.67.5 1.03a4.77 4.77 0 01-.26 3.34c-.04.11-.11.1-.2.1-.3.01-.6 0-.9.03-.82.07-1.46.7-1.53 1.53-.02.24-.02.49-.01.73 0 .19-.03.26-.24.25-.4-.02-.78-.01-1.18 0-.44.01-.73.3-.74.74v1.8c0 .47.32.77.78.77h11.88c.47 0 .78-.3.79-.76v-1.8c-.01-.45-.3-.73-.74-.75h-.68c-.24 0-.54.07-.69-.04-.15-.13-.03-.45-.05-.68v-.02c-.02-1.08-.72-1.78-1.8-1.79-.26 0-.6.09-.78-.05-.18-.14-.22-.49-.3-.75a4.18 4.18 0 01.45-3.63c.06-.1.13-.17.24-.2.72-.25 1.37-.6 1.97-1.06.1-.07.2-.12.32-.16a9.44 9.44 0 005.13-3.28 10.7 10.7 0 002.15-7.1zm-19.1 6.07a6.1 6.1 0 01-1.47-2.1 8.96 8.96 0 01-.66-2.47c-.02-.12.02-.16.13-.16h1.75c.2 0 .14.13.14.23v2.98c0 .5.03 1 .1 1.52zm-1.22 1.4a8.92 8.92 0 01-2.6-4.97 10.6 10.6 0 01-.2-2.27c.03-.57.19-.72.75-.72h2.93c.2 0 .26.05.24.24-.02.2-.02.39 0 .58.02.2-.06.22-.24.22h-1.77c-.53 0-.87.33-.81.85.24 2.44 1.17 4.51 3.2 5.99.08.05.16.1.2.2.23.53.52 1.04.86 1.52a7.9 7.9 0 01-2.56-1.64zm13.99 12.07c.28 0 .32.08.31.33-.02.37-.02.74 0 1.1.02.24-.04.32-.3.32-1.88-.02-3.76-.01-5.64-.01h-5.61c-.27 0-.32-.07-.3-.3.02-.38.02-.76 0-1.13-.03-.27.07-.3.31-.3h11.23zm-2.74-2.5c.5 0 .88.38.89.9v.6c.02.18-.05.22-.23.22h-7.07c-.2 0-.25-.06-.24-.25.02-.2 0-.4 0-.6.02-.5.4-.87.89-.87h5.76zm-1.86-1.12c.1.3.1.3-.23.3l-1.62.01c-.23.01-.3-.03-.2-.27a5.1 5.1 0 00-.13-4.06c.8.14 1.55.13 2.33 0a5.19 5.19 0 00-.15 4.02zm.4-4.88a6.48 6.48 0 01-7.89-6.5v-6c0-.24.03-.31.3-.31H31.23c.2 0 .25.05.25.26v6.12a6.49 6.49 0 01-5.05 6.43zm9.45-8.03a8.64 8.64 0 01-5.12 6.15c.4-.54.7-1.05.94-1.6.03-.1.12-.13.19-.18 1-.71 1.77-1.63 2.32-2.74.15-.32.11-.52-.13-.64-.23-.12-.43-.02-.59.3a6.45 6.45 0 01-1.3 1.8c-.06-.19.02-.34.03-.5.1-1.32.03-2.65.04-3.97 0-.22.04-.3.28-.3.53.03 1.06.02 1.6.01.13 0 .18.03.15.18-.07.32-.11.65-.17.97-.05.25.07.47.29.51.23.05.41-.06.48-.32.1-.43.19-.88.2-1.33.02-.47-.3-.8-.77-.8h-1.85c-.17 0-.21-.04-.2-.2v-.65c0-.13.02-.2.17-.19h3.16c.38 0 .55.2.57.63.04.97-.07 1.93-.3 2.87z"
              />
            </mask>
            <path
              d="M36.95 16.34c-.02-.76-.6-1.28-1.36-1.28h-3.13c-.1 0-.24.02-.2-.15.04-.12-.13-.3.16-.35.51-.07.78-.42.78-.94 0-.3-.02-.58 0-.87.05-.53-.13-.93-.62-1.16H22.24c-.26.11-.35.24-.32.45.02.2.18.36.41.4.14.03.28.02.42.02h9.35c.16.01.23.1.23.25v.63c0 .35-.02.37-.37.37H17.92c-.16 0-.24-.08-.25-.24v-.5c0-.5 0-.5.5-.5l2.33-.01c.26 0 .43-.15.49-.36.05-.22-.02-.36-.27-.5h-3.29c-.4.2-.66.5-.63 1 .02.34 0 .7 0 1.04 0 .49.28.86.76.92.3.04.16.24.18.37.02.22-.16.12-.24.12h-3c-.89 0-1.43.54-1.45 1.42-.03.95.05 1.88.26 2.8.86 3.82 3.14 6.31 6.9 7.41.14.05.3.08.43.18.59.46 1.25.81 1.96 1.06.1.04.18.07.24.17.2.33.38.67.5 1.03a4.77 4.77 0 01-.26 3.34c-.04.11-.11.1-.2.1-.3.01-.6 0-.9.03-.82.07-1.46.7-1.53 1.53-.02.24-.02.49-.01.73 0 .19-.03.26-.24.25-.4-.02-.78-.01-1.18 0-.44.01-.73.3-.74.74v1.8c0 .47.32.77.78.77h11.88c.47 0 .78-.3.79-.76v-1.8c-.01-.45-.3-.73-.74-.75h-.68c-.24 0-.54.07-.69-.04-.15-.13-.03-.45-.05-.68v-.02c-.02-1.08-.72-1.78-1.8-1.79-.26 0-.6.09-.78-.05-.18-.14-.22-.49-.3-.75a4.18 4.18 0 01.45-3.63c.06-.1.13-.17.24-.2.72-.25 1.37-.6 1.97-1.06.1-.07.2-.12.32-.16a9.44 9.44 0 005.13-3.28 10.7 10.7 0 002.15-7.1zm-19.1 6.07a6.1 6.1 0 01-1.47-2.1 8.96 8.96 0 01-.66-2.47c-.02-.12.02-.16.13-.16h1.75c.2 0 .14.13.14.23v2.98c0 .5.03 1 .1 1.52zm-1.22 1.4a8.92 8.92 0 01-2.6-4.97 10.6 10.6 0 01-.2-2.27c.03-.57.19-.72.75-.72h2.93c.2 0 .26.05.24.24-.02.2-.02.39 0 .58.02.2-.06.22-.24.22h-1.77c-.53 0-.87.33-.81.85.24 2.44 1.17 4.51 3.2 5.99.08.05.16.1.2.2.23.53.52 1.04.86 1.52a7.9 7.9 0 01-2.56-1.64zm13.99 12.07c.28 0 .32.08.31.33-.02.37-.02.74 0 1.1.02.24-.04.32-.3.32-1.88-.02-3.76-.01-5.64-.01h-5.61c-.27 0-.32-.07-.3-.3.02-.38.02-.76 0-1.13-.03-.27.07-.3.31-.3h11.23zm-2.74-2.5c.5 0 .88.38.89.9v.6c.02.18-.05.22-.23.22h-7.07c-.2 0-.25-.06-.24-.25.02-.2 0-.4 0-.6.02-.5.4-.87.89-.87h5.76zm-1.86-1.12c.1.3.1.3-.23.3l-1.62.01c-.23.01-.3-.03-.2-.27a5.1 5.1 0 00-.13-4.06c.8.14 1.55.13 2.33 0a5.19 5.19 0 00-.15 4.02zm.4-4.88a6.48 6.48 0 01-7.89-6.5v-6c0-.24.03-.31.3-.31H31.23c.2 0 .25.05.25.26v6.12a6.49 6.49 0 01-5.05 6.43zm9.45-8.03a8.64 8.64 0 01-5.12 6.15c.4-.54.7-1.05.94-1.6.03-.1.12-.13.19-.18 1-.71 1.77-1.63 2.32-2.74.15-.32.11-.52-.13-.64-.23-.12-.43-.02-.59.3a6.45 6.45 0 01-1.3 1.8c-.06-.19.02-.34.03-.5.1-1.32.03-2.65.04-3.97 0-.22.04-.3.28-.3.53.03 1.06.02 1.6.01.13 0 .18.03.15.18-.07.32-.11.65-.17.97-.05.25.07.47.29.51.23.05.41-.06.48-.32.1-.43.19-.88.2-1.33.02-.47-.3-.8-.77-.8h-1.85c-.17 0-.21-.04-.2-.2v-.65c0-.13.02-.2.17-.19h3.16c.38 0 .55.2.57.63.04.97-.07 1.93-.3 2.87z"
              fill="#fff"
            />
            <path
              d="M36.95 16.34c-.02-.76-.6-1.28-1.36-1.28h-3.13c-.1 0-.24.02-.2-.15.04-.12-.13-.3.16-.35.51-.07.78-.42.78-.94 0-.3-.02-.58 0-.87.05-.53-.13-.93-.62-1.16H22.24c-.26.11-.35.24-.32.45.02.2.18.36.41.4.14.03.28.02.42.02h9.35c.16.01.23.1.23.25v.63c0 .35-.02.37-.37.37H17.92c-.16 0-.24-.08-.25-.24v-.5c0-.5 0-.5.5-.5l2.33-.01c.26 0 .43-.15.49-.36.05-.22-.02-.36-.27-.5h-3.29c-.4.2-.66.5-.63 1 .02.34 0 .7 0 1.04 0 .49.28.86.76.92.3.04.16.24.18.37.02.22-.16.12-.24.12h-3c-.89 0-1.43.54-1.45 1.42-.03.95.05 1.88.26 2.8.86 3.82 3.14 6.31 6.9 7.41.14.05.3.08.43.18.59.46 1.25.81 1.96 1.06.1.04.18.07.24.17.2.33.38.67.5 1.03a4.77 4.77 0 01-.26 3.34c-.04.11-.11.1-.2.1-.3.01-.6 0-.9.03-.82.07-1.46.7-1.53 1.53-.02.24-.02.49-.01.73 0 .19-.03.26-.24.25-.4-.02-.78-.01-1.18 0-.44.01-.73.3-.74.74v1.8c0 .47.32.77.78.77h11.88c.47 0 .78-.3.79-.76v-1.8c-.01-.45-.3-.73-.74-.75h-.68c-.24 0-.54.07-.69-.04-.15-.13-.03-.45-.05-.68v-.02c-.02-1.08-.72-1.78-1.8-1.79-.26 0-.6.09-.78-.05-.18-.14-.22-.49-.3-.75a4.18 4.18 0 01.45-3.63c.06-.1.13-.17.24-.2.72-.25 1.37-.6 1.97-1.06.1-.07.2-.12.32-.16a9.44 9.44 0 005.13-3.28 10.7 10.7 0 002.15-7.1zm-19.1 6.07a6.1 6.1 0 01-1.47-2.1 8.96 8.96 0 01-.66-2.47c-.02-.12.02-.16.13-.16h1.75c.2 0 .14.13.14.23v2.98c0 .5.03 1 .1 1.52zm-1.22 1.4a8.92 8.92 0 01-2.6-4.97 10.6 10.6 0 01-.2-2.27c.03-.57.19-.72.75-.72h2.93c.2 0 .26.05.24.24-.02.2-.02.39 0 .58.02.2-.06.22-.24.22h-1.77c-.53 0-.87.33-.81.85.24 2.44 1.17 4.51 3.2 5.99.08.05.16.1.2.2.23.53.52 1.04.86 1.52a7.9 7.9 0 01-2.56-1.64zm13.99 12.07c.28 0 .32.08.31.33-.02.37-.02.74 0 1.1.02.24-.04.32-.3.32-1.88-.02-3.76-.01-5.64-.01h-5.61c-.27 0-.32-.07-.3-.3.02-.38.02-.76 0-1.13-.03-.27.07-.3.31-.3h11.23zm-2.74-2.5c.5 0 .88.38.89.9v.6c.02.18-.05.22-.23.22h-7.07c-.2 0-.25-.06-.24-.25.02-.2 0-.4 0-.6.02-.5.4-.87.89-.87h5.76zm-1.86-1.12c.1.3.1.3-.23.3l-1.62.01c-.23.01-.3-.03-.2-.27a5.1 5.1 0 00-.13-4.06c.8.14 1.55.13 2.33 0a5.19 5.19 0 00-.15 4.02zm.4-4.88a6.48 6.48 0 01-7.89-6.5v-6c0-.24.03-.31.3-.31H31.23c.2 0 .25.05.25.26v6.12a6.49 6.49 0 01-5.05 6.43zm9.45-8.03a8.64 8.64 0 01-5.12 6.15c.4-.54.7-1.05.94-1.6.03-.1.12-.13.19-.18 1-.71 1.77-1.63 2.32-2.74.15-.32.11-.52-.13-.64-.23-.12-.43-.02-.59.3a6.45 6.45 0 01-1.3 1.8c-.06-.19.02-.34.03-.5.1-1.32.03-2.65.04-3.97 0-.22.04-.3.28-.3.53.03 1.06.02 1.6.01.13 0 .18.03.15.18-.07.32-.11.65-.17.97-.05.25.07.47.29.51.23.05.41-.06.48-.32.1-.43.19-.88.2-1.33.02-.47-.3-.8-.77-.8h-1.85c-.17 0-.21-.04-.2-.2v-.65c0-.13.02-.2.17-.19h3.16c.38 0 .55.2.57.63.04.97-.07 1.93-.3 2.87z"
              stroke="#fff"
              stroke-width=".4"
              mask="url(#a)"
            />
            <path
              d="M23.22 19h0a.5.5 0 00.31-.08.6.6 0 00.19-.28s0 0 0 0l.09.03c.07-.18.16-.36.26-.54l.1-.18a.9.9 0 01.83-.52.9.9 0 01.84.52L23.22 19zm0 0c-.13 0-.25.02-.37.04l-.13.02-.21.04h0m.7-.1l-.7.1m3.42-1.19a34.76 34.76 0 00.42.87l-.09.04.1-.04c.03.08.07.12.12.15l-.55-1.02zm0 0a1 1 0 00-.93-.58 1 1 0 00-.92.58h1.85zm1.61 4.96c-.05-.34-.11-.67-.18-1h0a.28.28 0 010-.15.26.26 0 01.08-.11l.75-.74h0c.57-.61.28-1.55-.53-1.73a9.42 9.42 0 00-.99-.15l.77 3.9m.1-.02l-.1.01m.1-.01s0 0 0 0l-.1.01m.1-.01c.1.63-.39 1.19-1.05 1.2m.95-1.19a.94.94 0 01-.96 1.08m0 .1h.01v-.1m0 .1c-.21.02-.42-.08-.59-.18m.59.18s0 0 0 0v-.1m0 0l-.59-.08m0 0s0 0 0 0l.05-.08-.05.08zm0 0l-.26-.13-.5-.27s0 0 0 0l.05-.09.71.5zm-1.04-.4l-.05-.08.05.08s0 0 0 0zm0 0l-.83.45h0c-.2.1-.4.15-.6.14-.2 0-.38-.08-.56-.22h0c-.18-.13-.3-.3-.36-.48-.07-.19-.07-.4-.02-.61l2.37.72zM22.5 19.1c-.22.03-.42.1-.58.22-.16.12-.28.29-.36.5a.98.98 0 00-.01.62c.06.19.17.36.33.5h0l.62-1.84zm.42 4.67c-.33-.25-.44-.58-.35-1l.1-.53.07-.39a.3.3 0 00-.1-.3m.28 2.22l-.28-2.22m.28 2.22c.33.26.69.25 1.05.07l-1.05-.07zm-.28-2.22l-.07.07s0 0 0 0l.07-.07zm4.1-.67h0c.16-.13.3-.27.44-.42l.18-.18.04-.03a.81.81 0 00.05-.06c.02-.02.02-.03.01-.05v-.03l-.03-.01-.06-.01h-.01l-.07-.01-.54.8zm0 0c-.18.16-.3.35-.35.55m.36-.55l-.36.55M25 18.23c-.1 0-.13.07-.17.14v.02l-.14.28.31-.44zm0 0c.1 0 .12.07.15.13m-.15-.13l.15.13m-2.72 1.73c-.03.1.03.17.1.23l.21.22-.31-.45zm0 0c.02-.08.1-.09.16-.1h.03l-.2.1zm3.96 1.34c-.06.2-.05.43 0 .65v-.65zm-1.24-3.07l.01.02v-.02zm-1.9 2.52l-.43-.4a20.03 20.03 0 00-.3-.3v-.06h0s0 0 0 0h0l.02-.01.04-.01h.02l.64.78zm.35.55c-.06-.2-.17-.39-.36-.55l1.25 1.78-.05-.09s0 0 0 0a27.36 27.36 0 01-.97.5l-.01-.03a.3.3 0 010-.08l.03-.24.12-.66h0c.04-.22.04-.43-.01-.63zm-.13 1.63s0 0 0 0h0zm3-3.1c.27.03.55.07.82.12l-.82-.11z"
              fill="#fff"
              stroke="#fff"
              stroke-width=".2"
            />
            <defs>
              <linearGradient
                id="paint0_linear"
                x1="21.99"
                y1="25"
                x2="50"
                y2="25"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="#E97512" />
                <stop offset="1" stop-color="#F5A058" />
              </linearGradient>
            </defs>
          </svg>
          <span>Prêmios e Certificações</span>
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
      <ul class="content">
        <li>
          <img
            src="<?php bloginfo('template_url'); ?>/assets/img/clients/energisa.png"
            alt="logo da energisa"
          />
        </li>
        <li>
          <img src="<?php bloginfo('template_url'); ?>/assets/img/clients/inss.png" alt="logo do inss" />
        </li>
        <li>
          <img src="<?php bloginfo('template_url'); ?>/assets/img/clients/edp.png" alt="logo da edp" />
        </li>
        <li>
          <img src="<?php bloginfo('template_url'); ?>/assets/img/clients/elektro.png" alt="logo da elektro" />
        </li>
        <li>
          <img
            src="<?php bloginfo('template_url'); ?>/assets/img/clients/secretaria-saude.png"
            alt="logo da secretaria de saúde"
          />
        </li>
      </ul>
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
          <form action="">
            <div class="formGroup">
              <label for="nome">Seu Nome</label>
              <input
                type="text"
                name="nome"
                id="nome"
                placeholder="Seu Nome"
              />
            </div>
            <div class="formGroup">
              <label for="telefone">Seu Telefone</label>
              <input
                type="text"
                name="telefone"
                id="telefone"
                placeholder="Seu Telefone"
              />
            </div>
            <div class="formGroup">
              <label for="mensagem">Sua Mensagem</label>
              <input
                type="text"
                name="mensagem"
                id="mensagem"
                placeholder="Sua Mensagem"
              />
            </div>
            <button type="submit">ENVIAR</button>
          </form>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>