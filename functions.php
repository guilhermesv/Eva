<?php
/**
 * eva functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package eva
 */

if ( ! defined( 'eva_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'eva_VERSION', '1.0.0' );
}

if ( ! function_exists( 'eva_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function eva_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on eva, use a find and replace
		 * to change 'eva' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'eva', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'eva' ),
				'menu-2' => esc_html__( 'Arquivo', 'eva' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Remove o novo editor de widgets por blocos.
		remove_theme_support( 'widgets-block-editor' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'eva_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function eva_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'eva_content_width', 640 );
}
add_action( 'after_setup_theme', 'eva_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function eva_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Widget Cabeçalho 1', 'eva' ),
			'id'            => 'widget-header-1',
			'description'   => esc_html__( 'Add widgets here.', 'eva' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Widget Cabeçalho 2', 'eva' ),
			'id'            => 'widget-header-2',
			'description'   => esc_html__( 'Add widgets here.', 'eva' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	for($i = 1; $i <= 4; $i++) {
		register_sidebar(
			array(
				'name'          => esc_html__( 'Widget Rodapé ' . $i, 'eva' ),
				'id'            => 'widget-footer-' . $i,
				'description'   => esc_html__( 'Add widgets here.', 'eva' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h2 class="widget-title">',
				'after_title'   => '</h2>',
			)
		);
	}

}
add_action( 'widgets_init', 'eva_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function eva_scripts() {
	wp_enqueue_style( 'eva-style', get_stylesheet_uri(), array(), eva_VERSION );
	wp_style_add_data( 'eva-style', 'rtl', 'replace' );

	wp_enqueue_script( 'eva-navigation', get_template_directory_uri() . '/js/navigation.js', array(), eva_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'eva_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Shortcodes exclusivos.
 */
require get_template_directory() . '/inc/shortcodes.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


/**
 * Post Type Edições
 */

function edicoes_post_type() {
 
	// Set UI labels for Custom Post Type
			$labels = array(
					'name'                => _x( 'Edições', 'Post Type General Name', 'eva' ),
					'singular_name'       => _x( 'Edição', 'Post Type Singular Name', 'eva' ),
					'menu_name'           => __( 'Edições', 'eva' ),
					'all_items'           => __( 'Todas as Edições', 'eva' ),
					'view_item'           => __( 'Ver Edição', 'eva' ),
					'add_new_item'        => __( 'Adicionar nova Edição', 'eva' ),
					'add_new'             => __( 'Adicionar nova', 'eva' ),
					'edit_item'           => __( 'Editar Edição', 'eva' ),
					'update_item'         => __( 'Atualizar Edição', 'eva' ),
					'search_items'        => __( 'Procurar Edição', 'eva' ),
					'not_found'           => __( 'Não encontrado', 'eva' ),
					'not_found_in_trash'  => __( 'Não encontrado na lixeira', 'eva' ),
			);
			 
	// Set other options for Custom Post Type
			 
			$args = array(
					'label'               => __( 'edicoes', 'eva' ),
					'description'         => __( 'Edições.', 'eva' ),
					'labels'              => $labels,
					// Features this CPT supports in Post Editor
					'supports'            => array( 'title', 'editor', 'custom-fields', 'thumbnail', 'excerpt' ),
					'hierarchical'        => false,
					'public'              => true,
					'show_ui'             => true,
					'show_in_menu'        => true,
					'show_in_nav_menus'   => true,
					'show_in_admin_bar'   => true,
					'menu_position'       => 5,
					'menu_icon'						=> 'dashicons-heart',
					'can_export'          => true,
					'has_archive'         => true,
					'exclude_from_search' => true,
					'publicly_queryable'  => true,
					'capability_type'     => 'post',
					'show_in_rest' => true,
	 
			);
			 
			// Registering your Custom Post Type
			register_post_type( 'edicoes', $args );
	 
	}
	 
	/* Hook into the 'init' action so that the function
	* Containing our post type registration is not 
	* unnecessarily executed. 
	*/
add_action( 'init', 'edicoes_post_type', 0 );

function edicoes_taxonomy() {
	register_taxonomy(
			'categorias-edicoes',  
			'edicoes',             // post type name
			array(
					'hierarchical' => true,
					'label' => 'Categorias', // display name
					'show_admin_column' => true,
					'query_var' => true,
					'show_in_rest' => true,
					'rewrite' => array(
							'slug' => 'themes',    // This controls the base slug that will display before each term
							'with_front' => false  // Don't display the category base before
					)
			)
	);
}
add_action( 'init', 'edicoes_taxonomy');

