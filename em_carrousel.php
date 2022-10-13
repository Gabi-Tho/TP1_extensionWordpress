<?php
/**
*package Carrousel 
*version 1.0.0
*/
/*Plugin Name: gt_carrousel
*/


/*
filemtime()  // retourne en milliseconde le temps de la dernière sauvegarde
plugin_dir_path() // retourne le chemin du répertoire du plugin
__FILE__ // le fichier en train de s'exécuter
wp_enqueue_style() // Intègre le link:css dans la page
wp_enqueue_script() // intègre le script dans la page
wp_enqueue_scripts // le hook
*/

function emc_enqueue()
{
    $version_css = filemtime(plugin_dir_path(__FILE__) . "style.css");
    $version_js = filemtime(plugin_dir_path(__FILE__) . "js/carrousel.js");

    wp_enqueue_style("emc_style_carrousel",

                    plugin_dir_url(__FILE__) . "style.css",
                    array(),
                    $version_css,
                    false);


    wp_enqueue_script("emc_js_carrousel",

                    plugin_dir_url(__FILE__) . "js/carrousel.js",
                    array(),
                    $version_js,
                    false);
}

add_action('wp_enqueue_scripts','emc_enqueue');

function genere_boite(){

    $contenu = "
    
    <div class='carrousel'>Carrousel incroyable</div>
    
    ";

    return $contenu;
}

add_shortcode('em_carrousel','genere_boite');