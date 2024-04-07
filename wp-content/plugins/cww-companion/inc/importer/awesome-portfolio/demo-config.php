<?php 
/**
* Demo Importer Config
*
*
*
*/

$url        = 'https://codeworkweb.com/demo-importer/awesome-portfolio-demos/';
$pro_url    = 'https://codeworkweb.com/demo-importer/cww-portfolio-pro-demos/';

if( class_exists('CWW_Portfolio_Pro')){

    

    $data = array(

    
    'main' => array(
        'categories'        => array( 'Elementor'),
        'preview_url'       => 'https://demo.codeworkweb.com/cww-portfolio/demo-three/',
        'image_path'        => $url.'screenshot.png',
        'xml_file'          => $url.'content.xml',
        'theme_settings'    => $url.'customizer.dat',
        'widgets_file'      => $url.'widgets.wie',
        'home_title'        => 'Home',
        'blog_title'        => 'Blogs',
        'posts_to_show'     => '5',
        'is_shop'           => false,
        'menus'             => array(
            'menu-1'   => 'Menu 1'
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
                
            ),

            'premium' => array(
                array(
                    'slug'    => 'sticky-floating-forms-pro',
                    'init'    => 'sticky-floating-forms-pro/sticky-floating-forms-pro.php',
                    'name'    => 'Sticky Floating Forms Pro',
                    'link'    => 'https://codeworkweb.com/wordpress-plugins/sticky-floating-forms/'
                ),
                array(
                    'slug'    => 'bizz-elements',
                    'init'    => 'bizz-elements/bizz-elements.php',
                    'name'    => 'Bizz Elements - Elementor Addons',
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
                array(
                    'slug'    => 'sticky-floating-forms-lite',
                    'init'    => 'sticky-floating-forms-lite/sticky-floating-forms-lite.php',
                    'name'    => 'Sticky Floating Forms Lite',
                ),
            ),

            'premium' => array(
                array(
                    'slug'    => 'sticky-floating-forms-pro',
                    'init'    => 'sticky-floating-forms-pro/sticky-floating-forms-pro.php',
                    'name'    => 'Sticky Floating Forms Pro',
                    'link'    => 'https://codeworkweb.com/wordpress-plugins/sticky-floating-forms/'
                ),
                array(
                    'slug'    => 'bizz-elements',
                    'init'    => 'bizz-elements/bizz-elements.php',
                    'name'    => 'Bizz Elements - Elementor Addons',
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
                array(
                    'slug'    => 'sticky-floating-forms-lite',
                    'init'    => 'sticky-floating-forms-lite/sticky-floating-forms-lite.php',
                    'name'    => 'Sticky Floating Forms Lite',
                ),
            ),

            'premium' => array(
                array(
                    'slug'    => 'sticky-floating-forms-pro',
                    'init'    => 'sticky-floating-forms-pro/sticky-floating-forms-pro.php',
                    'name'    => 'Sticky Floating Forms Pro',
                    'link'    => 'https://codeworkweb.com/wordpress-plugins/sticky-floating-forms/'
                ),
                array(
                    'slug'    => 'bizz-elements',
                    'init'    => 'bizz-elements/bizz-elements.php',
                    'name'    => 'Bizz Elements - Elementor Addons',
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
                array(
                    'slug'    => 'sticky-floating-forms-lite',
                    'init'    => 'sticky-floating-forms-lite/sticky-floating-forms-lite.php',
                    'name'    => 'Sticky Floating Forms Lite',
                ),
            ),

            'premium' => array(
                array(
                    'slug'    => 'sticky-floating-forms-pro',
                    'init'    => 'sticky-floating-forms-pro/sticky-floating-forms-pro.php',
                    'name'    => 'Sticky Floating Forms Pro',
                    'link'    => 'https://codeworkweb.com/wordpress-plugins/sticky-floating-forms/'
                ),
                array(
                    'slug'    => 'bizz-elements',
                    'init'    => 'bizz-elements/bizz-elements.php',
                    'name'    => 'Bizz Elements - Elementor Addons',
                ),
            ),


        ),
    ),

    'awesome-portfolio-pro' => array(
        'categories'        => array( 'Elementor' ),
        'preview_url'       => 'https://demo.codeworkweb.com/cww-portfolio-pro/demo-four',
        'image_path'        => $pro_url.'/demo-four/screenshot.png',
        'xml_file'          => $pro_url.'/demo-four/content.xml',
        'theme_settings'    => $pro_url.'/demo-four/customizer.dat',
        'widgets_file'      => $pro_url.'/demo-four/widgets.wie',
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
                array(
                    'slug'    => 'sticky-floating-forms-lite',
                    'init'    => 'sticky-floating-forms-lite/sticky-floating-forms-lite.php',
                    'name'    => 'Sticky Floating Forms Lite',
                ),
            ),

            'premium' => array(
                array(
                    'slug'    => 'sticky-floating-forms-pro',
                    'init'    => 'sticky-floating-forms-pro/sticky-floating-forms-pro.php',
                    'name'    => 'Sticky Floating Forms Pro',
                    'link'    => 'https://codeworkweb.com/wordpress-plugins/sticky-floating-forms/'
                ),
                array(
                    'slug'    => 'bizz-elements',
                    'init'    => 'bizz-elements/bizz-elements.php',
                    'name'    => 'Bizz Elements - Elementor Addons',
                ),
            ),
            
        ),
    ),

  );


}else{


$data = array(

    'main' => array(
        //'categories'        => array( 'Elementor'),
        'preview_url'       => 'https://demo.codeworkweb.com/cww-portfolio/demo-three/',
        'image_path'        => $url.'screenshot.png',
        'xml_file'          => $url.'content.xml',
        'theme_settings'    => $url.'customizer.dat',
        'widgets_file'      => $url.'widgets.wie',
        'home_title'        => 'Home',
        'blog_title'        => 'Blogs',
        'posts_to_show'     => '5',
        'is_shop'           => false,
        'menus'             => array(
            'menu-1'   => 'Menu 1'
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