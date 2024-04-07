<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION



if ( !function_exists( 'uportfolio_parent_css' ) ):
    function uportfolio_parent_css() {

        $themeVersion = wp_get_theme()->get('Version');
        
        wp_enqueue_style( 'uportfolio-style-vars', trailingslashit( get_stylesheet_directory_uri() ) . 'assets/css/css-vars.css',array(),$themeVersion);
        wp_enqueue_style( 'uportfolio-parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'font-awesome','cww-portfolio-keyboard' ),$themeVersion );
        wp_enqueue_style('uportfolio-style', trailingslashit( get_template_directory_uri() ) . '/style.css',array(), $themeVersion);


    }
endif;
add_action( 'wp_enqueue_scripts', 'uportfolio_parent_css' );



if ( !function_exists( 'uportfolio_parent_modify_css' ) ):
    function uportfolio_parent_modify_css() {

        $themeVersion = wp_get_theme()->get('Version');
        wp_deregister_style('cww-portfolio-style-vars');
        wp_enqueue_style('uportfolio-responsive', trailingslashit( get_stylesheet_directory_uri() ) . 'assets/css/responsive-style.css',array(), $themeVersion);
        
    }
endif;
add_action( 'wp_enqueue_scripts', 'uportfolio_parent_modify_css',20 );





// END ENQUEUE PARENT ACTION


/**
 * Theme Option Default Values
 * 
 * 
 * 
 */ 
add_filter('cww_portfolio_default_theme_options','uportfolio_customizer_defaults');
if( ! function_exists('uportfolio_customizer_defaults')):
    function uportfolio_customizer_defaults(){

        $defaults = array();

        $defaults['cww_home_banner']                    = 0;
        $defaults['cww_header_cta_enable']              = 0;
        $defaults['cww_header_cta_text']                = esc_html__('Contact Now','uportfolio');
        $defaults['cww_header_cta_url']                 = '#';
        $defaults['cww_header_cta_bg']                  = '#6138bd';
        $defaults['cww_header_bg']                      = '#fff';
        $defaults['cww_menu_link_color']                = '#11204d';
        $defaults['cww_menu_link_color_hover']          = '';
        $defaults['cww_icon_fb']                        = '';
        $defaults['cww_icon_insta']                     = '';
        $defaults['cww_icon_twitter']                   = '';
        $defaults['cww_icon_lnkedin']                   = '';
        $defaults['cww_theme_color']                    = '#6c55e0';

        $defaults['cww_banner_image']                   = '';
        $defaults['cww_banner_text_sm']                 = esc_html__("Hi There, I'm",'uportfolio');
        $defaults['cww_banner_text_lg']                 = esc_html__('John Doe','uportfolio');
        $defaults['cww_banner_text_sm2']                = esc_html__('based in Los Angeles, USA','uportfolio');
        $defaults['cww_banner_btn_text']                = esc_html__('View My Works','uportfolio');
        $defaults['cww_banner_btn_url']                 = '#';
        $defaults['cww_banner_btn_text_sec']            = esc_html__('Contact Me','uportfolio');
        $defaults['cww_banner_btn_url_sec']             = '#';
        $defaults['cww_banner_bg']                      = 'rgba(108,85,224, 0.1)';
        $defaults['cww_banner_animated_color']          = '#6c55e0';

        $defaults['cww_about_title']                    = esc_html__('About Me','uportfolio');
        $defaults['cww_about_sub_title']                = '';
        $defaults['cww_about_image']                    = '';
        $defaults['cww_about_counter_value_first']      = 155;
        $defaults['cww_about_counter_text_first']       = esc_html__('Completed projects','uportfolio');
        $defaults['cww_about_counter_value_sec']        = 120;
        $defaults['cww_about_counter_text_sec']         = esc_html__('Positive reviews','uportfolio');


        $defaults['cww_service_title']                  = esc_html__('What We Offer','uportfolio');
        $defaults['cww_service_sub_title']              = '';
        $defaults['cww_portfolio_title']                = esc_html__('Our Portfolio','uportfolio');
        $defaults['cww_portfolio_sub_title']            = '';
        $defaults['cww_portfolio_post']                 = 0;

        $defaults['cww_service_enable']                 = 1;
        $defaults['cww_portfolio_enable']               = 1;
        $defaults['cww_blog_enable']                    = 1;
        $defaults['cww_contact_enable']                 = 1;
        $defaults['cww_cta_enable']                     = 1;
        $defaults['cww_about_enable']                   = 1;
        

        
        return $defaults;
    }
endif;



//companion plugin is needed for displaying customizer homepage
if( ! class_exists('CWW_Companion')){
    return;
}

// Modify Parent Top Banner Style

add_action('cww_portfolio_home','cww_portfolio_banner', 10 );
if( ! function_exists('cww_portfolio_banner')):
    function cww_portfolio_banner(){

        $default                    = uportfolio_customizer_defaults();
        
        $cww_banner_image           = get_theme_mod('cww_banner_image', $default['cww_banner_image']);
        $cww_banner_text_sm         = get_theme_mod('cww_banner_text_sm', $default['cww_banner_text_sm']);
        $cww_banner_text_lg         = get_theme_mod('cww_banner_text_lg', $default['cww_banner_text_lg']);
        $cww_banner_text_sm2        = get_theme_mod( 'cww_banner_text_sm2', $default['cww_banner_text_sm2']);
        $cww_banner_btn_text        = get_theme_mod( 'cww_banner_btn_text', $default['cww_banner_btn_text']);
        $cww_banner_btn_url         = get_theme_mod( 'cww_banner_btn_url', $default['cww_banner_btn_url'] );
        $cww_banner_btn_text_sec    = get_theme_mod( 'cww_banner_btn_text_sec', $default['cww_banner_btn_text_sec'] );
        $cww_banner_btn_url_sec     = get_theme_mod('cww_banner_btn_url_sec', $default['cww_banner_btn_url_sec'] );

        ?>
        <div class="icons-wrapper-fixed">
            <?php do_action('cww_portfolio_social_icons'); ?>
        </div>

        <section id="cww-banner-section" class="cww-main-banner">
        <div class="container">
             

            <div class="cotent-wrapp-banner cww-flex">
          
            
            
            <div class="content-wrapp">
                <h5><?php echo esc_html($cww_banner_text_sm); ?></h5>
                <h2><?php echo esc_html($cww_banner_text_lg);?></h2>
                <p><?php echo esc_html($cww_banner_text_sm2);?></p>

                <div class="button-wrapp cww-flex">
                    <div class="btn-primary">
                        <a href="<?php echo esc_url($cww_banner_btn_url)?>"> 
                            <span><?php echo esc_html($cww_banner_btn_text); ?> </span>
                        </a>
                    </div>
                    <div class="btn-secondary">
                        <a href="<?php echo esc_url($cww_banner_btn_url_sec)?>" class="cww-flex">
                         <span><?php echo esc_html($cww_banner_btn_text_sec); ?> </span>
                         <?php echo cww_companion_get_icon_svg( 'arrow_down',14 ); ?>
                        </a>
                    </div>
                </div>

            </div>

           
            <div class="shape-wrapper">
            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <mask id="mask0" mask-type="alpha">
              <path d="M60.8,-57.3C76.2,-45.5,84.2,-22.7,81.2,-3C78.1,16.7,64.1,33.4,48.8,48C33.4,62.6,16.7,75.1,-0.3,75.4C-17.4,75.8,-34.7,63.9,-47.1,49.3C-59.5,34.7,-66.9,17.4,-68.3,-1.4C-69.7,-20.2,-65.1,-40.3,-52.7,-52.1C-40.3,-63.9,-20.2,-67.3,1.3,-68.5C22.7,-69.8,45.5,-69,60.8,-57.3Z" transform="translate(100 100)" />
              </mask>
              <g mask="url(#mask0)">
                <path d="M60.8,-57.3C76.2,-45.5,84.2,-22.7,81.2,-3C78.1,16.7,64.1,33.4,48.8,48C33.4,62.6,16.7,75.1,-0.3,75.4C-17.4,75.8,-34.7,63.9,-47.1,49.3C-59.5,34.7,-66.9,17.4,-68.3,-1.4C-69.7,-20.2,-65.1,-40.3,-52.7,-52.1C-40.3,-63.9,-20.2,-67.3,1.3,-68.5C22.7,-69.8,45.5,-69,60.8,-57.3Z" transform="translate(100 100)" />
                <image class="svg-image-main" x='40' y='40' xlink:href="<?php echo esc_url($cww_banner_image); ?>"/>
              </g>
            </svg>
            </div>


            </div>
                
        </div>
        </section>
        <?php 
    }
endif;