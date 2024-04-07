<?php 
/**
* Demo Importer Config
*
*
*
*/

$url        = 'https://codeworkweb.com/demo-importer/parallax-portfolio-demos/';
$pro_url    = 'https://codeworkweb.com/demo-importer/cww-portfolio-pro-demos/';

if( class_exists('CWW_Portfolio_Pro')){

   

    $data = array(

    
        'main' => array(
            'categories'        => array( 'Elementor'),
            'preview_url'       => 'https://demo.codeworkweb.com/cww-portfolio/parallax-portfolio/',
            'image_path'        => $url.'screenshot.png',
            'xml_file'          => $url.'content.xml',
            'theme_settings'    => $url.'customizer.dat',
            'home_title'        => 'Home',
            'blog_title'        => 'Blogs',
            'posts_to_show'     => '5',
            'is_shop'           => false,
            'menus'             => array(
                'menu-1'   => 'Primary Menu'
            ),
            'required_plugins'  => array(
                'free'          => array(
    
                   array(
                        'slug'    => 'elementor',
                        'init'    => 'elementor/elementor.php',
                        'name'    => 'Elementor',
                    ),
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
                    array(
                        'slug'    => 'sticky-floating-forms-lite',
                        'init'    => 'sticky-floating-forms-lite/sticky-floating-forms-lite.php',
                        'name'    => 'Sticky Floating Forms Lite',
                    ),
                ),
            ),
        ),

    

   

   


  );


}else{


$data = array(

    'main' => array(
        //'categories'        => array( 'Elementor'),
        'preview_url'       => 'https://demo.codeworkweb.com/cww-portfolio/parallax-portfolio/',
        'image_path'        => $url.'screenshot.png',
        'xml_file'          => $url.'content.xml',
        'theme_settings'    => $url.'customizer.dat',
        'home_title'        => 'Home',
        'blog_title'        => 'Blogs',
        'posts_to_show'     => '5',
        'is_shop'           => false,
        'menus'             => array(
            'menu-1'   => 'Primary Menu'
        ),
        'required_plugins'  => array(
            'free'          => array(

               array(
                    'slug'    => 'elementor',
                    'init'    => 'elementor/elementor.php',
                    'name'    => 'Elementor',
                ),
                array(
                    'slug'    => 'contact-form-7',
                    'init'    => 'contact-form-7/wp-contact-form-7.php',
                    'name'    => 'Contact Form 7',
                ),
                array(
                    'slug'    => 'sticky-floating-forms-lite',
                    'init'    => 'sticky-floating-forms-lite/sticky-floating-forms-lite.php',
                    'name'    => 'Sticky Floating Forms Lite',
                ),
            ),
        ),
    ),

     //premium demos
     'pro-one' => array(
        'categories'        => array( 'Premium' ),
        'image_path'        => $pro_url.'/demo-five/screenshot.png',
        'preview_url'       => 'https://demo.codeworkweb.com/cww-portfolio-pro/demo-five/',
        'is_premium'        => true,
        'pro_link'          => 'https://codeworkweb.com/wordpress-themes/cww-portfolio-pro/',
        'purchase_link'     => 'https://codeworkweb.com/wordpress-themes/cww-portfolio-pro/',
    ), 

    'pro-two' => array(
        'categories'        => array( 'Premium' ),
        'image_path'        => $pro_url.'/demo-three/screenshot.png',
        'preview_url'       => 'https://demo.codeworkweb.com/cww-portfolio-pro/demo-three/',
        'is_premium'        => true,
        'pro_link'          => 'https://codeworkweb.com/wordpress-themes/cww-portfolio-pro/',
        'purchase_link'     => 'https://codeworkweb.com/wordpress-themes/cww-portfolio-pro/',
    ), 

    'pro-three' => array(
        'categories'        => array( 'Premium' ),
        'image_path'        => $pro_url.'/demo-four/screenshot.png',
        'preview_url'       => 'https://demo.codeworkweb.com/cww-portfolio-pro/demo-four/',
        'is_premium'        => true,
        'pro_link'          => 'https://codeworkweb.com/wordpress-themes/cww-portfolio-pro/',
        'purchase_link'     => 'https://codeworkweb.com/wordpress-themes/cww-portfolio-pro/',
    ), 

    'pro-four' => array(
        'categories'        => array( 'Premium' ),
        'image_path'        => $pro_url.'/demo-two/screenshot.png',
        'preview_url'       => 'https://demo.codeworkweb.com/cww-portfolio-pro/demo-two/',
        'is_premium'        => true,
        'pro_link'          => 'https://codeworkweb.com/wordpress-themes/cww-portfolio-pro/',
        'purchase_link'     => 'https://codeworkweb.com/wordpress-themes/cww-portfolio-pro/',
    ),

    'pro-five' => array(
        'categories'        => array( 'Premium' ),
        'image_path'        => $pro_url.'/demo-one/screenshot.png',
        'preview_url'       => 'https://demo.codeworkweb.com/cww-portfolio-pro/demo-one/',
        'is_premium'        => true,
        'pro_link'          => 'https://codeworkweb.com/wordpress-themes/cww-portfolio-pro/',
        'purchase_link'     => 'https://codeworkweb.com/wordpress-themes/cww-portfolio-pro/',
    ),  


  );

}