<?php

return [

    'title' => 'Penduduk App',

    'title_prefix' => '',

    'title_postfix' => '',

    'use_ico_only' => false,

    'use_full_favicon' => false,

    'google_fonts' => [

        'allowed' => true,

    ],

    'logo' => '<b>Penduduk</b>App',

    'logo_img' => null,

    'logo_img_class' => 'brand-image img-circle elevation-3',

    'logo_img_xl' => null,

    'logo_img_xl_class' => 'brand-image-xs',

    'logo_img_alt' => 'Penduduk App',

    'auth_logo' => [

        'enabled' => false,

        'img' => [
            'path' => 'vendor/adminlte/dist/img/AdminLTELogo.png',
            'alt' => 'Auth Logo',
            'class' => 'brand-image',
            'width' => 50,
            'height' => 50,
        ],

    ],

    'preloader' => [

        'enabled' => false,

        'img' => [
            'path' => 'vendor/adminlte/dist/img/AdminLTELogo.png',
            'alt' => 'AdminLTE Preloader Image',
            'effect' => 'animation__shake',
            'width' => 50,
            'height' => 50,
        ],

    ],

    'usermenu_enabled' => true,

    'layout_topnav' => null,

    'layout_boxed' => null,

    'layout_fixed_sidebar' => true,

    'layout_fixed_navbar' => true,

    'layout_fixed_footer' => false,

    'layout_dark_mode' => false,

    'classes_auth_card' => 'card-outline card-primary',

    'classes_auth_header' => '',

    'classes_auth_body' => '',

    'classes_auth_footer' => '',

    'classes_auth_icon' => '',

    'classes_card' => '',

    'classes_header' => '',

    'classes_footer' => '',

    'classes_topnav' => 'navbar-white navbar-light',

    'classes_topnav_nav' => 'navbar-expand',

    'classes_topnav_container' => 'container',

    'classes_sidebar' => 'sidebar-dark-primary elevation-4',

    'classes_sidebar_nav' => '',

    'classes_sidebar_container' => '',

    'classes_brand' => '',

    'classes_brand_text' => '',

    'classes_content_wrapper' => '',

    'classes_content_header' => '',

    'classes_content' => '',

    'classes_sidebar_mini' => 'sidebar-mini',

    'sidebar_mini' => true,

    'sidebar_collapse' => false,

    'sidebar_collapse_auto_size' => false,

    'sidebar_collapse_remember' => false,

    'sidebar_collapse_remember_no_transition' => true,

    'sidebar_scrollbar_theme' => 'os-theme-light',

    'sidebar_scrollbar_auto_hide' => 'l',

    'sidebar_nav_accordion' => true,

    'sidebar_nav_animation_speed' => 300,

    'right_sidebar' => false,

    'right_sidebar_icon' => 'fas fa-cogs',

    'right_sidebar_theme' => 'dark',

    'right_sidebar_slide' => true,

    'right_sidebar_push' => true,

    'right_sidebar_scrollbar_theme' => 'os-theme-light',

    'right_sidebar_scrollbar_auto_hide' => 'l',

    'use_route_url' => false,

    'dashboard_url' => 'dashboard',

    'logout_url' => 'logout',

    'login_url' => 'login',

    'register_url' => 'register',

    'password_reset_url' => 'password/reset',

    'password_email_url' => 'password/email',

    'profile_url' => false,

    'enable_laravel_mix' => false,

    'enable_jsdelivr' => true,

    'livewire' => false,

    'menu' => [

        [
            'text' => 'Dashboard',
            'url'  => 'dashboard',
            'icon' => 'fas fa-home',
        ],

        [
            'text' => 'Data Penduduk',
            'url'  => 'penduduk',
            'icon' => 'fas fa-users',
        ],

    ],

];