<?php
/**
*package Carrousel 
*version 1.0.0
*/
/*Plugin Name: gt_carrousel
*/

function genere_boite(){

    $contenu = "<div class='carrousel'>Carrousel incroyable<div>";

    return $contenu;
}

add_shortcode('em_carrousel','genere_boite');