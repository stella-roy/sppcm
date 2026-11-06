<?php

// reivax git

/**
 * Charge les styles du thème parent et du thème enfant.
 */
function underscores_child_assets() {

    // Style du thème parent
    wp_enqueue_style(
        'underscores-style',
        get_template_directory_uri() . '/style.css'
    );

    // style.css du thème enfant
    wp_enqueue_style(
        'underscores-child-style',
        get_stylesheet_uri(),
        array( 'underscores-style' )
    );

    // CSS compilé depuis Sass
    wp_enqueue_style(
        'underscores-child-main',
        get_stylesheet_directory_uri() . '/css/main.css',
        array( 'underscores-child-style' )
        // Version dynamique recommandée en production :
        // , filemtime( get_stylesheet_directory() . '/css/main.css' )
    );
}
add_action( 'wp_enqueue_scripts', 'underscores_child_assets' );


/**
 * Enregistre et charge le script JS principal du thème enfant en tant que module ES natif.
 *
 * Utilise wp_enqueue_script_module() (disponible depuis WordPress 6.5), qui permet
 * d'utiliser directement la syntaxe import/export dans main.js sans bundler (webpack, etc.).
 */
function underscores_child_scripts() {

    wp_enqueue_script_module(
        'underscores-child-main',
        get_stylesheet_directory_uri() . '/js/main.js',
        array(),                // Dépendances de modules (autres modules requis avant celui-ci, si besoin).
        '1.0.0'
    );
}
add_action( 'wp_enqueue_scripts', 'underscores_child_scripts' );


/**
 * [ALTERNATIVE — désactivée] Enregistre et charge main.js via l'API classique wp_enqueue_script().
 *
 * À utiliser pour les équipes qui écrivent leur JS en procédural plutôt qu'en orienté objet
 * (voir l'alternative correspondante dans main.js).
 *
 * Si le projet grandit et que d'autres fichiers JS s'ajoutent, ceux-ci peuvent être enregistrés
 * séparément et déclarés comme dépendances dans le tableau ci-dessous pour garantir leur ordre
 * de chargement avant main.js.
 */
/*
function underscores_child_scripts() {

    wp_enqueue_script(
        'main',
        get_stylesheet_directory_uri() . '/js/main.js',
        array(),
        '1.0.0',
        array( 'strategy' => 'defer' )
    );
}
add_action( 'wp_enqueue_scripts', 'underscores_child_scripts' );
*/

/**
 * Redéfinit les emplacements de menus du thème parent.
 * Les clés sont fusionnées : 'menu-1' voit son libellé remplacé et 'menu-2' est ajoutée.
 *
 * @return void
 */
function underscores_child_menus() {
    register_nav_menus(
        array(
            'menu-1' => esc_html__( 'Header', 'underscores' ),
            'menu-2' => esc_html__( 'Footer', 'underscores' ),
        )
    );
}
add_action( 'after_setup_theme', 'underscores_child_menus', 20 );



/**
 * Ajoute au Customizer une section de réglages propres au SPPCM.
 *
 * @param WP_Customize_Manager $wp_customize Objet du Customizer, fourni par le hook.
 * @return void
 */
function underscores_child_parametres_ajustables( $wp_customize ) {
	
    // Section : regroupe les contrôles dans un panneau du Customizer (priorité 30 : sous l'identité du site).
    $wp_customize->add_section( 
		'sppcm_parametres_ajustables', 
		array(
			'title' => __( 'Contrôles personnalisés pour SPPCM' ),
			'priority' => 30
		)
	);

	/**
     * Texte de présentation de l'organisation (footer).
     */

    // Réglage : définit la donnée stockée (en base de données, dans les options du thème).
	$wp_customize->add_setting( 
		'sppcm_presentation_syndicat_footer'
	);

    // Contrôle : le champ affiché dans l'interface, lié au réglage par le même identifiant.
	$wp_customize->add_control( 
        'sppcm_presentation_syndicat_footer', 
        array(
            'type' => 'textarea',
            'label' => __( 'Présentation de l\'organisation dans le footer' ),
            'section' => 'sppcm_parametres_ajustables'
        ) 
    );

}
add_action( 'customize_register', 'underscores_child_parametres_ajustables' );






function my_search_form_shortcode() {
    return get_search_form( false ); // false = return instead of echo
}
add_shortcode( 'search_bar', 'my_search_form_shortcode' );

function limit_search_to_posts( $query ) {
    if ( $query->is_search() && $query->is_main_query() && ! is_admin() ) {
        $query->set( 'post_type', 'post' );
    }
}
add_action( 'pre_get_posts', 'limit_search_to_posts' );



/**
 * Retourne le code d'un SVG de la médiathèque, pour l'afficher en ligne.
 * Le SVG est assaini à l'envoi par Safe SVG : on lit donc le fichier tel quel.
 *
 * @param int $attachment_id ID de la pièce jointe (champ ACF Image, format de retour « ID de l'image »).
 * @return string Code SVG, ou chaîne vide si le fichier est introuvable ou n'est pas un SVG.
 */
function underscores_child_get_inline_svg( int $attachment_id ): string {

    // Refuse tout fichier qui n'est pas un SVG.
    if ( 'image/svg+xml' !== get_post_mime_type( $attachment_id ) ) {
        return '';
    }

    $path = get_attached_file( $attachment_id );

    if ( ! $path || ! is_readable( $path ) ) {
        return '';
    }

    // phpcs:ignore WordPress.WP.AlternativeFunctions.file_get_contents_file_get_contents
    $svg = file_get_contents( $path );

    return false === $svg ? '' : $svg;
}

?>