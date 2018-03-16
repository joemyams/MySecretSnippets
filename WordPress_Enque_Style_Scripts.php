
// Enqueue Scripts/Styles for our Lightbox


function child_theme_add_lightbox() {
    wp_enqueue_script( 'fancybox', get_bloginfo( 'stylesheet_directory' ) . '/js/jquery.fancybox.pack.js', array( 'jquery' ), false, true );
    wp_enqueue_script( 'lightbox', get_bloginfo( 'stylesheet_directory' ) . '/js/lightbox.js', array( 'fancybox' ), false, true );
    wp_enqueue_style( 'lightbox-style', get_bloginfo( 'stylesheet_directory' ) . '/css/jquery.fancybox.css' );
}



add_action( 'wp_enqueue_scripts', 'child_theme_add_lightbox' );