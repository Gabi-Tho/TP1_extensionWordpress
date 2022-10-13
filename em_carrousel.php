<?php
/**
*package Carrousel 
*version 1.0.0
*/
/*Plugin Name: gt_carrousel
*/

function genere_boite(){

    $contenu = "

    <style>

        .carrousel{
            border: 2px solid #aaa;
            background-color:  rgb(74, 142, 95);
            width: 200px;
            height: 200px;
            color: white;
        }

    </style>
    
    <div class='carrousel'>Carrousel incroyable</div>
    
    ";

    return $contenu;
}

add_shortcode('em_carrousel','genere_boite');