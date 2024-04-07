<?php 
/**
* Demo Importer Config
*
*
*
*/

$url    = 'https://codeworkweb.com/demo-importer/uportfolio-demos/';


if( class_exists('CWW_Portfolio_Pro')){

    $pro_url = 'https://codeworkweb.com/demo-importer/cww-portfolio-pro-demos/';

    $data = array(

    
    'main' => array(
        'categories'        => array( 'Customizer'),
        'preview_url'       => 'https://demo.codeworkweb.com/cww-portfolio/demo-two/',
        'image_path'        => $url.'screenshot.png',
        'xml_file'          => $url.'content.xml',
        'theme_settings'    => $url.'customizer.dat',
        'widgets_file'      => $url.'widgets.wie',
        'home_title'        => 'Home',
        'blog_title'        => 'Blogs',
        'posts_to_show'     => '5',
        'is_shop'           => false,
        'menus'             => array(
            'menu-1'   => 'Main Menu'
        ),
        'required_plugins'  => array(
            'free'          => array(
               
                array(
                    'slug'    => 'contact-form-7',
                    'init'    => 'contact-form-7/wp-contact-form-7.php',
                    'name'    => 'Contact Form 7',
                ),
                array(
                    'slug'    => 'cf7-popups',
                    'init'    => 'cf7-popups/cf7-popups.php',
                    'name'    => 'Popup Messages For Contact Form 7',
                ),
            ),
        ),
    ),

    //pro one
    'pro' => array(
        'categories'        => array( 'Customizer' ),
        'preview_url'       => 'https://demo.codeworkweb.com/cww-portfolio-pro/main/',
        'image_path'        => $pro_url.'/demo-one/screenshot.png',
        'xml_file'          => $pro_url.'/demo-one/content.xml',
        'theme_settings'    => $pro_url.'/demo-one/customizer.dat',
        'widgets_file'      => $pro_url.'/demo-one/widgets.wie',
        'home_title'        => 'Home',
        'blog_title'        => 'Blogs',
        'posts_to_show'     => '5',
        'is_shop'           => false,
        'menus'             => array(
            'menu-1'   => 'Main Menu'
        ),
        'required_plugins'  => array(
            'free'          => array(
               
                array(
                    'slug'    => 'contact-form-7',
                    'init'    => 'contact-form-7/wp-contact-form-7.php',
                    'name'    => 'Contact Form 7',
                ),
                array(
                    'slug'    => 'cf7-popups',
                    'init'    => 'cf7-popups/cf7-popups.php',
                    'name'    => 'Popup Messages For Contact Form 7',
                ),
            ),
        ),
    ),

    //pro demo two
    'elementor' => array(
        'categories'        => array( 'Elementor' ),
        'preview_url'       => 'https://demo.codeworkweb.com/cww-portfolio-pro/demo-two',
        'image_path'        => $pro_url.'/demo-two/screenshot.png',
        'xml_file'          => $pro_url.'/demo-two/content.xml',
        'theme_settings'    => $pro_url.'/demo-two/customizer.dat',
        'widgets_file'      => $pro_url.'/demo-two/widgets.wie',
        'home_title'        => 'Home',
        'blog_title'        => 'Blogs',
        'posts_to_show'     => '6',
        'is_shop'           => false,
        'menus'             => array(
            'menu-1'   => 'Primary Menu'
        ),
        'required_plugins'  => array(
            'free'          => array(
               
                array(
                    'slug'    => 'contact-form-7',
                    'init'    => 'contact-form-7/wp-contact-form-7.php',
                    'name'    => 'Contact Form 7',
                ),
                array(
                    'slug'    => 'elementor',
                    'init'    => 'elementor/elementor.php',
                    'name'    => 'Elementor',
                ),
                array(
                    'slug'    => 'cf7-popups',
                    'init'    => 'cf7-popups/cf7-popups.php',
                    'name'    => 'Popup Messages For Contact Form 7',
                ),
            ),
        ),
    ),

    //pro three
    'interactive-portfolio' => array(
        'categories'        => array( 'Elementor' ),
        'preview_url'       => 'https://demo.codeworkweb.com/cww-portfolio-pro/demo-three',
        'image_path'        => $pro_url.'/demo-three/screenshot.png',
        'xml_file'          => $pro_url.'/demo-three/content.xml',
        'theme_settings'    => $pro_url.'/demo-three/customizer.dat',
        'widgets_file'      => $pro_url.'/demo-three/widgets.wie',
        'home_title'        => 'Home',
        'blog_title'        => 'Blogs',
        'posts_to_show'     => '6',
        'is_shop'           => false,
        'menus'             => array(
            'menu-1'   => 'Menu 1'
        ),
        'required_plugins'  => array(
            'free'          => array(
               
                array(
                    'slug'    => 'contact-form-7',
                    'init'    => 'contact-form-7/wp-contact-form-7.php',
                    'name'    => 'Contact Form 7',
                ),
                array(
                    'slug'    => 'elementor',
                    'init'    => 'elementor/elementor.php',
                    'name'    => 'Elementor',
                ),
                array(
                    'slug'    => 'cf7-popups',
                    'init'    => 'cf7-popups/cf7-popups.php',
                    'name'    => 'Popup Messages For Contact Form 7',
                ),
            ),
        ),
    ),

  );


}else{


$data = array(

    'main' => array(
        //'categories'        => array( 'Main Demo','cww-portfolio' ),
        'preview_url'       => 'https://demo.codeworkweb.com/cww-portfolio/demo-two/',
        'image_path'        => $url.'screenshot.png',
        'xml_file'          => $url.'content.xml',
        'theme_settings'    => $url.'customizer.dat',
        'widgets_file'      => $url.'widgets.wie',
        'home_title'        => 'Home',
        'blog_title'        => 'Blogs',
        'posts_to_show'     => '5',
        'is_shop'           => false,
        'menus'             => array(
            'menu-1'   => 'Main Menu'
        ),
        'required_plugins'  => array(
            'free'          => array(
               
                array(
                    'slug'    => 'contact-form-7',
                    'init'    => 'contact-form-7/wp-contact-form-7.php',
                    'name'    => 'Contact Form 7',
                ),
                array(
                    'slug'    => 'cf7-popups',
                    'init'    => 'cf7-popups/cf7-popups.php',
                    'name'    => 'Popup Messages For Contact Form 7',
                ),
            ),
        ),
    ),


  );

}