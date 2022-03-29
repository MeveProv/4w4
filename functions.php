<?php 

function cidw_4w4_enqueue(){
   
    wp_enqueue_style('cidw-4w4-le-style', get_template_directory_uri() . '/style.css', array(), filemtime(get_template_directory() . '/style.css'), false);
   
    wp_enqueue_style('cidw-4w4-police-google',"https://fonts.googleapis.com/css2?family=Varela+Round&display=swap"  ,false);
     

}

add_action("wp_enqueue_scripts", "cidw_4w4_enqueue");

/* -------------------------------------------------- Enregistré le menu */
function cidw_4w4_register_nav_menu(){
    register_nav_menus( array(
        'menu_principal' => __( 'Menu principal', 'cidw_4w4' ),
        'menu_footer'  => __( 'Menu footer', 'cidw_4w4' ),
        'menu_externe' => __('Menu externe', 'cidw_4w4'),
        'menu_categorie_cours' => __('Menu categorie_cours', 'cidw_4w4')
    ) );
}
add_action( 'after_setup_theme', 'cidw_4w4_register_nav_menu', 0 );

/* ---------------------------------------------------------------------- filtré les choix du menu principal */
function cidw_4w4_filtre_choix_menu($obj_menu){
   
    foreach($obj_menu as $cle => $value)
    {
       
       
       $value->title = wp_trim_words($value->title,3,"...");
       
    }
    return $obj_menu;
}
add_filter("wp_nav_menu_objects","cidw_4w4_filtre_choix_menu");
/* ------ENREGISTREMENT DES SIDEBARS-------*/
add_theme_support( 'post-thumbnails' );
/* ------ENREGISTREMENT DES SIDEBARS-------*/
add_theme_support( 'custom-logo', array(
    'height' => 200,
    'width'  => 200,
) );
/*pour personnaliser le logo  */

/* ------ENREGISTREMENT DES SIDEBARS-------*/
add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
   
    register_sidebar(
        array(
            'id'            => 'entete_1',
            'name'          => __( 'Entete 1' ),
            'description'   => __( 'Sidebar affichant dans lentete du site ' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    register_sidebar(
        array(
            'id'            => 'footer_colonne_1',
            'name'          => __( 'Footer colonne #1' ),
            'description'   => __( 'Sidebar affichant dans une colonne du pied de page ' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    register_sidebar(
        array(
            'id'            => 'footer_colonne_2',
            'name'          => __( 'Footer colonne #2' ),
            'description'   => __( 'Sidebar affichant dans une colonne du pied de page ' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    register_sidebar(
        array(
            'id'            => 'footer_colonne_3',
            'name'          => __( 'Footer colonne #3' ),
            'description'   => __( 'Sidebar affichant dans une colonne du pied de page ' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    register_sidebar(
        array(
            'id'            => 'footer_ligne_1',
            'name'          => __( 'Footer ligne #1' ),
            'description'   => __( 'Sidebar affichant dans une ligne du pied de page ' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    register_sidebar(
        array(
            'id'            => 'footer_ligne_2',
            'name'          => __( 'Footer ligne #2' ),
            'description'   => __( 'Sidebar affichant dans une ligne du pied de page ' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    
    
}
?>