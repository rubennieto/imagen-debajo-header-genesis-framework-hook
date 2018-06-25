//* Añade imagen debajo de menú, encima del contenido en la front-page
add_action( 'genesis_after_header', 'after_header_image' );

function after_header_image() {

if ( is_front_page() ) {

    $image = sprintf( '%s/images/after-header.png', get_stylesheet_directory_uri() );
    
    $output = sprintf( '<img src="%s" alt="Image" />', $image );
    
    echo $output;
    }

}
