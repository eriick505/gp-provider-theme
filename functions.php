<?php

// Adiciona o CSS do site
function add_estilos_css() {
  wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/styles/css/main.min.css');
}
add_action('wp_enqueue_scripts', 'add_estilos_css');

// Adiciona o Javascript do siteE
function add_scripts_js() {
  wp_register_script( 'main-script', get_template_directory_uri() . '/assets/js/scripts.js', array(), false, true );

  wp_enqueue_script( 'main-script' );
}
add_action('wp_enqueue_scripts', 'add_scripts_js');

// Habilitar suporte Menus
add_theme_support('menus');

// Registrar Menu
function register_my_menu() {
  register_nav_menu('menu-principal',__( 'Menu Principal' ));
}
add_action( 'init', 'register_my_menu' );

// Suporte a Título das páginas dinâmicos
function title_tag() {
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'title_tag');

// Previnir erro da versão antiga do Título dinâmico
if (!function_exists('_wp_render_title_tag')){
  function render_title() { ?>
      <title><?php wp_title('|', true, 'right'); ?></title>
<?php }
  add_action('wp_head', 'render_title');
}

// Remove a versão do Wordpress
function wpversion_remove_version() {
  return '';
}
add_filter('the_generator', 'wpversion_remove_version');

// Suporte a imagens destacada
add_theme_support('post-thumbnails');

// Suporte a Widget
add_theme_support('widgets');
add_theme_support('customize-selective-refresh-widgets');

// Custom Post Types 
function create_posts_types() {
  register_post_type('lista-clientes',
    array(
        'labels' => array(
          'name' => __('Lista de Clientes'),
          'singular_name' => __('Cliente'),
        ),
        'supports' => array(
          'title', 'thumbnail',
        ),
        'public' => true, 
        'has_archive' => true,
        'menu_icon' => 'dashicons-groups',
        'rewrite' => array('slug' => 'lista-clientes'),
    ));
  
  register_post_type('faq',
    array(
        'labels' => array(
          'name' => __('Perguntas Frequentes'),
          'singular_name' => __('Pergunta'),
        ),
        'supports' => array(
          'title', 'editor'
        ),
        'public' => true, 
        'has_archive' => true,
        'menu_icon' => 'dashicons-format-chat',
        'rewrite' => array('slug' => 'faq'),
    ));
}
add_action('init', 'create_posts_types');

// Customizar o Footer do WordPress
function remove_footer_admin () {
  echo 'Desenvolvido com ♥ por - <b>Tuba Agência</b>';
}
add_filter('admin_footer_text', 'remove_footer_admin');

//Link na tela de login para a página inicial 
function my_login_logo_url() {
  return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

// Nome do cabeçalho na página de login
function my_login_logo_url_title() {
  return 'Grupo Provider';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

// Custom WordPress Login Logo
function my_login_logo() { ?>

  <style>
    body.login div#login h1 a {
      background-image: url('<?= get_bloginfo( 'url' ) . '/wp-content/themes/gp-provider-theme/assets/img/logo-footer.png' ?>');
      background-size: 100%;
      position: relative;
      width: 220px;
    }

    body.login form {
      color: #fff;
      background: #ea7613;
      border: none;
      box-shadow: 4px 4px 8px 1px rgb(0 0 0 / 35%);
    }
  </style>

<?php }

add_action( 'login_enqueue_scripts', 'my_login_logo' );

// Transforma string em slug
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