<?php 


function pd_produtos_scripts(){
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/bootstrap/bootstrap.min.js', array( 'jquery' ), '4.4.1', true );



		wp_enqueue_script('menu-js', get_template_directory_uri() . '/js/menu.js', array('jquery'), filemtime(get_template_directory() . '/js/menu.js'), true);


	


	
	wp_enqueue_script( 'jquery2','https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js');
	wp_enqueue_script( 'awesome','https://kit.fontawesome.com/27f38e3829.js');
		// wp_enqueue_script( 'jquery3','http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js');
	
     wp_enqueue_script( 'jquery-uii-mini','https://code.jquery.com/ui/1.13.1/jquery-ui.js');
	// wp_enqueue_script( 'jquery-uii','https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js');
    wp_enqueue_script( 'jquery-uii-punch','https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js');
    // wp_enqueue_script( 'jquery-uii-min','http://code.jquery.com/ui/1.8.17/jquery-ui.min.js');
	wp_enqueue_script( 'boot-js','https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js');
	 wp_enqueue_script( 'slick-carousel','https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js');
	wp_enqueue_script( 'fancybox-js','https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js');
		// wp_enqueue_script( 'pointer-js','/wp-content/themes/Arqosv2/js/pointer.js');

	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/bootstrap/bootstrap.min.css', array(), '4.4.1', 'all' );

	wp_enqueue_style( 'galeria-css', get_template_directory_uri() . '/css/galeria.css', array(), '4.4.1', 'all' );



wp_enqueue_style('mcia-style-sass', get_template_directory_uri() . '/sass/style.css', array(), filemtime(get_template_directory() . '/sass/style.css'), false);


wp_enqueue_style('mcia-style-sass-blog', get_template_directory_uri() . '/sass/blog/blog.css', array(), filemtime(get_template_directory() . '/sass/blog/blog.css'), false);


 	wp_enqueue_script( 'flickity-js','https://flickity.metafizzy.co/flickity.pkgd.min.js');
 	
 	 wp_enqueue_style( 'slick-css','https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
 	// wp_enqueue_style( 'pointer-css','/wp-content/themes/Arqosv2/sass/pointer.css');
 	wp_enqueue_style( 'fancy-box-css','https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css');
 	wp_enqueue_style( 'fontawesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css');
 	


 	// Google Fonts
 	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800' ,'https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Open+Sans:wght@300;400;500;600;700;800');



    // Pagina sobre


          // js
        wp_enqueue_script( 'anime-js','https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.0/anime.min.js');
        wp_enqueue_script( 'gsap-js','https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js');
        wp_enqueue_script( 'scrol-magic-js','https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.js');
        wp_enqueue_script( 'animation-gsap-js','https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/animation.gsap.js');
 	


}
add_action( 'wp_enqueue_scripts', 'pd_produtos_scripts' );

add_theme_support('title-tag');

function wpb_total_posts() { 
$total = wp_count_posts()->publish;
echo $total;
} 





/* TT READING TIME 
// Calcula o tempo estimado de leitura do conteúdo
// @www.tutoriart.com.br/
*/
function tt_reading_time() {
 $content = get_field('texto_conceito');
  $content2 = get_field('introducao');
 $char_count = mb_strlen(strip_tags($content), "UTF-8");
 $char_count2 = mb_strlen(strip_tags($content2), "UTF-8");
  $char_count_Res =  $char_count + $char_count2;
 
 $min = ceil($char_count_Res / 850); // tempo médio de leitura: 1200 caracteres

// $tempo = 'Tempo estimado: ';
 if ($min <= 1) {
 $tempo .= '1 minuto';
 }
 else {
 $tempo .= $min . ' minutos';
 }
 // $tempo .= ' ('. $char_count .' caracteres)';
 return $tempo;
}
/* http://wordpress.stackexchange.com/a/39920/31885 */
function tt_reading_time_filter( $content ) {
 // $custom_content = '<div id="tt-temp-estim">'.tt_reading_time().'</div>';
 $custom_content .= $content;
 return $custom_content;
}
add_filter( 'the_content', 'tt_reading_time_filter' );



function format_comment($comment, $args, $depth) {

    $GLOBALS['comment'] = $comment; ?>

    <div <?php comment_class('ml-4'); ?> id="comment-<?php comment_ID(); ?>">

        <div class="card mb-3">
            <div class="card-body">

            <div class="comment-intro">

                <h5 class="card-title"><?php printf(__('%s'), get_comment_author_link()) ?></h5>
                <h6 class="card-subtitle mb-3 text-muted">Comentou em <?php printf(__('%1$s'), get_comment_date('d/m/y'), get_comment_time()) ?></h6>
            
            </div>

            <?php comment_text(); ?>

            <div class="reply">
                <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
            </div>

            </div>
        </div>

    <?php

}




/*Custom Post type start*/

function cw_post_type_prdutos() {

$supports = array(
'title', // post title
'editor', // post content
'author', // post author
'thumbnail', // featured images
'excerpt', // post excerpt
'custom-fields', // custom fields
'comments', // post comments
'revisions', // post revisions
'post-formats', // post formats
);

$labels = array(
'name' => _x('Projetos', 'plural'),
'singular_name' => _x('Projeto', 'singular'),
'menu_name' => _x('Projetos', 'admin menu'),
'name_admin_bar' => _x('Projetos', 'admin bar'),
'add_new' => _x('Adicionar projetos', 'add new'),
'add_new_item' => __('Adicionar Novo'),
'new_item' => __('Novo projeto'),
'edit_item' => __('Editar projeto'),
'view_item' => __('Ver projeto'),
'all_items' => __('Todos os projetos'),
'search_items' => __('Procurar projetos'),
'not_found' => __('Nenhum projeto encontrado'),
);

$args = array(
'supports' => $supports,
'labels' => $labels,
'public' => true,
'query_var' => true,
'rewrite' => array('slug' => 'projeto'),
'has_archive' => true,
'hierarchical' => false,
);
register_post_type('projetos', $args);
}
add_action('init', 'cw_post_type_prdutos');






// Create custom post type
function create_posttype() {
    register_post_type( 'material',
        array(
            'labels' => array(
                'name' => __( 'Material' ),
                'singular_name' => __( 'Material' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'material'),
            'taxonomies'  => array( 'material', 'material-categoria' ,'material-formatos','material-destaque'),
        )
    );
}
// ADDED PRIORITY
add_action( 'init', 'create_posttype', 9 );

//Create category for specific post type
function tr_create_my_taxonomy() {
    register_taxonomy(
        'material-categoria',
        'material',
        array(
            'label' => __( 'Categoria' ),
            // CHANGED SLUG
            'rewrite' => array( 'slug' => 'material/categoria' ),
            'hierarchical' => true,
            'has_archive' => true
        )
    );
}
// ADDED PRIORITY
add_action( 'init', 'tr_create_my_taxonomy', 6 );


//Create category for specific post type
function tr_create_my_taxonomy2() {
    register_taxonomy(
        'material-formatos',
        'material',
        array(
            'label' => __( 'Formatos' ),
            // CHANGED SLUG
            'rewrite' => array( 'slug' => 'material/formatos' ),
            'hierarchical' => true,
            'has_archive' => true
        )
    );
}
// ADDED PRIORITY
add_action( 'init', 'tr_create_my_taxonomy2', 7 );





//Create category for specific post type
function tr_create_my_taxonomy3() {
    register_taxonomy(
        'material-destaque',
        'material',
        array(
            'label' => __( 'Destaque' ),
            // CHANGED SLUG
            'rewrite' => array( 'slug' => 'material/destaque' ),
            'hierarchical' => true,
            'has_archive' => true
        )
    );
}
// ADDED PRIORITY
add_action( 'init', 'tr_create_my_taxonomy3', 8 );





/* For usage with acf_form() */

function my_acf_wysiwyg_character_counter() {
?>
<script type="text/javascript">
acf.add_filter('wysiwyg_tinymce_settings', function(mceInit) {
    mceInit.elementpath = false;
    mceInit.setup = function(ed) {
        var characterLimit = 800,
            edContainer,
            countChar,
            colorOriginal;

        ed.on('init', function(e) {
            edContainer = $(ed.iframeElement).closest('.acf-input');
            countChar = edContainer.find('.mce-statusbar .mce-flow-layout')
                .prepend('<div class="mce-path mce-flow-layout-item mce-first count-char"><span class="count-char-current">0</span><span>/' + characterLimit + '</span></div>')
                .find('.count-char-current');
            colorOriginal = countChar.css('color');
        });

        var limit = function(e) {

            var node = ed.getBody(),
                text = (node.innerText || node.textContent),
                textTrim = text.trim(),
                length = (textTrim.length === 0) ? 0 : text.length;

            if (length > characterLimit) {
                countChar.css('color', 'red');
            } else {
                countChar.css('color', colorOriginal);
            }

            countChar.text(length);
        };

        ed.on('change', limit);
        ed.on('keyup', limit);
    };

    return mceInit;

});
</script>
<?php
}

add_action('acf/input/admin_footer', 'my_acf_wysiwyg_character_counter');



// Create custom post type
function create_posttype_vagas() {
    register_post_type( 'vagas',
        array(
            'labels' => array(
                'name' => __( 'Vagas' ),
                'singular_name' => __( 'Vaga' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'Vaga'),
            //'taxonomies'  => array( 'material', 'material-categoria' ,'material-formatos','material-destaque'),
        )
    );
}
// ADDED PRIORITY
add_action( 'init', 'create_posttype_vagas', 2 );

function ed_support_thumbnails() {
    add_theme_support('post-thumbnails'); // thumbnails
}
add_action('after_setup_theme', 'ed_support_thumbnails');



/**
 * Featured image to RSS Feed.
 */
function featuredtoRSS($content) {
global $post;
if ( has_post_thumbnail( $post->ID ) ){
$content = '<div style="float: left;">' . get_the_post_thumbnail( $post->ID, 'thumbnail', array( 'style' => 'margin-bottom: 15px;float: left; ' ) ) . '</div>' . $content;
}
return $content;
}


add_filter('the_excerpt_rss', 'featuredtoRSS' , 0);
add_filter('the_content_feed', 'featuredtoRSS' , 0);



// function fields_in_feed($content) {  
//     if(is_feed()) {  
//         $post_id = get_the_ID();  
// 		$imagem = get_field('imagem_destacada');
		

//         $output .= '<img width="150" height="150" src="' . $imagem['url']  . '" class="webfeedsFeaturedVisual wp-post-image" alt="' .$imagem['alt'] . '" style="display: block; margin-bottom: 5px; clear:both;max-width: 100%;" /> '; 

        
//     }  
//     return $output;  
// }  
// add_filter('the_content','fields_in_feed');




// add_action('init', 'customRSS');
// function customRSS(){
//         add_feed('feedname', 'customRSSFunc');
// }


// function customRSSFunc(){
//         get_template_part('rss', 'feedname');
// }

