<?php  
     
    // ADICIONANDO STYLE SHEET NAS PÁGINAS 
    function styleSheetFbiSafe(){
        wp_enqueue_style('material.min', get_stylesheet_uri());
    }
    add_action('wp_enqueue_scripts', 'styleSheetFbiSafe');

 ?>