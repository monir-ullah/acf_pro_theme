<?php 

// Including acf option page for theme options
include( get_template_directory() . '/inc/acf-options.php' );

function acfPro_add_theme_support(){

    load_theme_textdomain('acfPro', get_template_directory() . '/languages');
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails', array( 'post','page' ) );
    $header_custom_logo = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );
 
    add_theme_support( 'custom-logo', $header_custom_logo );

    register_nav_menus( array(
        'primary_menu' => __( 'Primary Menu', 'acfPro' ),
    ) );
}
add_action( 'after_setup_theme', 'acfPro_add_theme_support' );


function acfPro_theme_enqueue() {

    // Enqueuing style
    wp_enqueue_style( 'google-font', '//fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/assets/css/font-awesome.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'animate', get_template_directory_uri().'/assets/css/animate.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri().'/assets/css/owl.carousel.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'owl-carousel-theme', get_template_directory_uri().'/assets/css/owl.theme.default.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri().'/assets/css/magnific-popup.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'flaticon', get_template_directory_uri().'/assets/css/flaticon.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'main-style', get_template_directory_uri().'/assets/css/style.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );


    // Enqueuing Scripts	
    wp_enqueue_script( 'migrate', get_template_directory_uri() . '/assets/js/jquery-migrate-3.0.1.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'easing', get_template_directory_uri() . '/assets/js/jquery.easing.1.3.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'stellar', get_template_directory_uri() . '/assets/js/jquery.stellar.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'animateNumber', get_template_directory_uri() . '/assets/js/jquery.animateNumber.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'scrollax', get_template_directory_uri() . '/assets/js/scrollax.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'animamainteNumber', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );


  
}
add_action( 'wp_enqueue_scripts', 'acfPro_theme_enqueue' );



function mytheme_comment($comment, $args, $depth) {
    if ( 'div' === $args['style'] ) {
        $tag       = 'div';
        $add_below = 'comment';
    } else {
        $tag       = 'li';
        $add_below = 'div-comment';
    }?>
    <<?php echo $tag; ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?> id="comment-<?php comment_ID() ?>"><?php 
    if ( 'div' != $args['style'] ) { ?>
        <div class="single-comment">
        <div id="div-comment-<?php comment_ID() ?>" class="comment-body"><?php
    } ?>
        <div class="comment-author vcard"><?php 
            if ( $args['avatar_size'] != 0 ) {
                echo get_avatar( $comment, $args['avatar_size'] ); 
            } 
        ?>
        </div>
        <?php 
            if ( $comment->comment_approved == '0' ) { ?>
            <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em><br/><?php 
        } ?>
        <div class="comment-meta commentmetadata">
            <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>"><?php

                printf( __( '<h3 class="fn">%s</h3>' ), get_comment_author_link() );
                /* translators: 1: date, 2: time */
                printf( 
                    __('%1$s at %2$s'), 
                    get_comment_date(),  
                    get_comment_time() 
                ); ?>
            </a><?php 
            edit_comment_link( __( '(Edit)' ), '  ', '' ); ?>
            <?php comment_text(); ?>
                <div class="reply"><?php 
                    comment_reply_link( 
                        array_merge( 
                            $args, 
                            array( 
                                'add_below' => $add_below, 
                                'depth'     => $depth, 
                                'max_depth' => $args['max_depth'] 
                            ) 
                        ) 
                    ); ?>
                </div>
        </div>
 
        
 
        <?php 
    if ( 'div' != $args['style'] ) : ?>
        </div></div><?php 
    endif;
}


function move_comment_field( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
}
add_filter( 'comment_form_fields', 'move_comment_field' );


function comment_form_hide_cookies( $fields ) {
	unset( $fields['cookies'] );
	return $fields;
}
add_filter( 'comment_form_default_fields', 'comment_form_hide_cookies' );


// Deactive gutenberg widget 

if ( ! function_exists( 'themesdna_activate_classic_widgets' ) ) {
    function themesdna_activate_classic_widgets() {
        remove_theme_support( 'widgets-block-editor' );
    }
}   
add_action( 'after_setup_theme', 'themesdna_activate_classic_widgets' );


/**
 * Add a sidebar.
 */
function acfPro_register_sidebar() {
    register_sidebar( array(
        'name'          => __( 'Blog Sidebar', 'acfPro' ),
        'id'            => 'recent-blog-sidebar-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'acfPro' ),
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widgettitle">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Tag Cloud', 'acfPro' ),
        'id'            => 'tag-cloud',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'acfPro' ),
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Sidebar 1', 'acfPro' ),
        'id'            => 'footer-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'acfPro' ),
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Sidebar 2', 'acfPro' ),
        'id'            => 'footer-2',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'acfPro' ),
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widgettitle">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Sidebar Blog', 'acfPro' ),
        'id'            => 'footer-3',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'acfPro' ),
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widgettitle">',
        'after_title'   => '</h3>',
    ) );
    
}
add_action( 'widgets_init', 'acfPro_register_sidebar' );


// Creating the widget 
class acf_post_widget extends WP_Widget {
  
    function __construct() {
    parent::__construct(
      
    // Base ID of your widget
    'acf_post', 
      
    // Widget name will appear in UI
    __('ACF Latest Post Widget', 'acf'), 
      
    // Widget description
    array( 'description' => __( 'Sample widget', 'acf' ), ) 
    );
    }
      
    // Creating widget front-end
      
    public function widget( $args, $instance ) {
    $title = apply_filters( 'widget_title', $instance['title'] );
      
    // before and after widget arguments are defined by themes
    echo $args['before_widget'];
    if ( ! empty( $title ) )
    echo $args['before_title'] . $title . $args['after_title'];
      $post = array(
          'post_type' => 'post',
          'posts_per_page' => 3
      );
      $query = new WP_Query($post);
      while($query->have_posts()) {
          $query->the_post();
    ?>
    <div class="block-21 mb-4 d-flex">
        <a class="blog-img mr-4" style="background-image: url(<?php echo the_post_thumbnail_url();?>"></a>
        <div class="text">
            <h3 class="heading"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
            <div class="meta">
                <div><a href="#"><span class="icon-calendar"></span> <?php the_date();?></a></div>
                <div><a href=""><span class="icon-person"></span> <?php the_author_link();?></a></div>
            </div>
        </div>
    </div>
    <?php
      }
    ?>
        
    <?php
    echo $args['after_widget'];
    }
              
    // Widget Backend 
    public function form( $instance ) {
    if ( isset( $instance[ 'title' ] ) ) {
    $title = $instance[ 'title' ];
    }
    else {
    $title = __( 'Recent Posts', 'acf' );
    }
    // Widget admin form
    ?>
    <p>
    <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
    <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
    </p>
    <?php 
    }
          
    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    return $instance;
    }
     
    // Class wpb_widget ends here
    } 
     
     
    // Register and load the widget
    function acf_post_load_widget() {
        register_widget( 'acf_post_widget' );
    }
    add_action( 'widgets_init', 'acf_post_load_widget' );



?>