<?php

    function ai_registrando_menu(){
        register_nav_menu('menu-navegacao', 'Menu navegação');
    }
    add_action('init', 'ai_registrando_menu');
