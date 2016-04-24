<?php
add_filter('widget_text', 'do_shortcode');
add_filter( 'use_default_gallery_style', '__return_false' );

wp_deregister_script('jquery'); 
wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js'); 
wp_enqueue_script('jquery'); 


//   Add responsive container to embeds
// /* ------------------------------------  
function alx_embed_html( $html ) {
    return '<div class="video-container">' . $html . '</div>';
}
 
add_filter( 'embed_oembed_html', 'alx_embed_html', 10, 3 );
add_filter( 'video_embed_html', 'alx_embed_html' ); // Jetpack

// widgets and sidebars 

if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
   'name' => 'right_sidebar',
   'before_widget' => '<div id="%1$s" class="widget %2$s">',
   'after_widget' => '</div>',
   'before_title' => '<h2>',
   'after_title' => '</h2>'
   ));  

}



// Facebook Open Graph
add_action('wp_head', 'add_fb_open_graph_tags');
function add_fb_open_graph_tags() {
  if (is_single()) {
    global $post;
    if(get_the_post_thumbnail($post->ID, 'thumbnail')) {
      $thumbnail_id = get_post_thumbnail_id($post->ID);
      $thumbnail_object = get_post($thumbnail_id);
      $image = $thumbnail_object->guid;
    } else {  
      $image = ''; // Change this to the URL of the logo you want beside your links shown on Facebook
    }
    //$description = get_bloginfo('description');
    $description = my_excerpt( $post->post_content, $post->post_excerpt );
    $description = strip_tags($description);
    $description = str_replace("\"", "'", $description);
?>
<meta property="og:title" content="<?php the_title(); ?>" />
<meta property="og:type" content="article" />
<meta property="og:image" content="<?php echo $image; ?>" />
<meta property="og:url" content="<?php the_permalink(); ?>" />
<meta property="og:description" content="<?php echo $description ?>" />
<meta property="og:site_name" content="<?php echo get_bloginfo('name'); ?>" />

<?php   }
}

function my_excerpt($text, $excerpt){
  
    if ($excerpt) return $excerpt;

    $text = strip_shortcodes( $text );

    $text = apply_filters('the_content', $text);
    $text = str_replace(']]>', ']]>', $text);
    $text = strip_tags($text);
    $excerpt_length = apply_filters('excerpt_length', 55);
    $excerpt_more = apply_filters('excerpt_more', ' ' . '[...]');
    $words = preg_split("/[\n
   ]+/", $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY);
    if ( count($words) > $excerpt_length ) {
            array_pop($words);
            $text = implode(' ', $words);
            $text = $text . $excerpt_more;
    } else {
            $text = implode(' ', $words);
    }

    return apply_filters('wp_trim_excerpt', $text, $excerpt);
}

/**
 * Attach a class to linked images' parent anchors
 * e.g. a img => a.img img
 */
function give_linked_images_class($html, $id, $caption, $title, $align, $url, $size, $alt = '' ){
  $classes = 'img'; // separated by spaces, e.g. 'img image-link'

  // check if there are already classes assigned to the anchor
  if ( preg_match('/<a.*? class=".*?">/', $html) ) {
    $html = preg_replace('/(<a.*? class=".*?)(".*?>)/', '$1 ' . $classes . '$2', $html);
  } else {
    $html = preg_replace('/(<a.*?)>/', '$1 class="' . $classes . '" >', $html);
  }
  return $html;
}
add_filter('image_send_to_editor','give_linked_images_class',10,8);


add_theme_support('post-thumbnails');

if ( function_exists( 'add_image_size' ) ) {
add_image_size( 'main-gallery-size', 150, 150, array('center', 'center') ); //(cropped)
add_image_size( 'lower-gallery-size', 100, 100, array('center', 'center') ); //(cropped)
add_image_size('ecard-gallery-size', 400, 299, array('center', 'center') );
}


add_filter( 'image_size_names_choose', 'my_custom_sizes' );
function my_custom_sizes( $sizes ) {
return array_merge( $sizes, array(
'main-gallery-size' => __( 'Main Gallery Thumb' ),
'lower-gallery-size' => __( 'Lower Gallery Thumb' ),
'ecard-gallery-size' => __('eCards Gallery Thumb'),
) );
}
//deactivate WordPress function
add_shortcode('gallery', 'gallery_shortcode');

// latest images shortcode 
add_shortcode('images', 'latest_images_shortcode');

function latest_images_shortcode() {

  $args = array('child_of' => 'goldbergs', 'sort_column' => 'post_date', 'sort_order' => 'desc');
  $galleries = get_pages( $args );

  $count = 0;
  $limit = 6;
  foreach ($galleries as $gallery) {
    if (++$count > $limit) break;

  $args = array(
   'post_type' => 'attachment',
   'numberposts' => 1,
   'post_status' => null,
   'post_parent' => $gallery->ID
  );

  $attachments = get_posts( $args );
     if ( $attachments ) {
        foreach ( $attachments as $image ) {
         
           echo wp_get_attachment_image( $image->ID, 'thumbnail' );
           
          }
     } 

}

}