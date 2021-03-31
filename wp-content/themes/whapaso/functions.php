<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

// END ENQUEUE PARENT ACTION

if (!defined('URI_PATH')) define('URI_PATH', '/wp-content/themes/whapaso');

add_action( 'wp_enqueue_scripts', 'whapaso_scripts', 11 );
function whapaso_scripts() {
    global $wp_query; 
    $theme_version = wp_get_theme()->display( 'Version' );
    if( is_front_page() ) {
        wp_enqueue_style( 'pagepiling', URI_PATH . '/css/jquery.pagepiling.css' );
    }
    wp_enqueue_style( 'animate', URI_PATH . '/css/animate.css' );
    // wp_enqueue_style( 'before-after', URI_PATH . '/css/before-after.css' );
    wp_enqueue_style( 'icofont', URI_PATH . '/css/icofont.css' );
    wp_enqueue_script('jquery');
    wp_register_script( 'loadmorejs', get_stylesheet_directory_uri() . '/js/loadmore.js', array('jquery') );
    wp_localize_script( 'loadmorejs', 'loadmore_params', array(
		'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php',
		'posts' => json_encode( $wp_query->query_vars ),
		'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
		'max_page' => $wp_query->max_num_pages
	) );
 	wp_enqueue_script( 'loadmorejs' );
    if( is_front_page() ) {
        wp_enqueue_script( 'pagepilingjs', URI_PATH . '/js/jquery.pagepiling.js', array( ), $theme_version, true );
        wp_enqueue_script( 'frontpagejs', URI_PATH . '/js/front-page.js', array( ), $theme_version, true );
    }
    wp_enqueue_script( 'letteringjs', URI_PATH . '/js/jquery.lettering.js', array( ), $theme_version, true );
    wp_enqueue_script( 'fittextjs', URI_PATH . '/js/jquery.fittext.js', array( ), $theme_version, true );
    wp_enqueue_script( 'textillatejs', URI_PATH . '/js/jquery.textillate.js', array( ), $theme_version, true );
    wp_enqueue_script( 'wowjs', URI_PATH . '/js/wow.js', array( ), $theme_version, true );
    wp_enqueue_script( 'tweenmaxjs', URI_PATH . '/js/tweenmax.min.js', array( ), $theme_version, true );
    wp_enqueue_script( 'draggablejs', URI_PATH . '/js/draggable.min.js', array( ), $theme_version, true );
    wp_enqueue_script( 'parallaxjs', URI_PATH . '/js/parallax.js', array( ), $theme_version, true );
    wp_enqueue_script( 'whapasojs', URI_PATH . '/js/whapaso.js', array( ), $theme_version, true );
}

function whapaso_custom_meta() {
    add_meta_box( 'sm_meta', __( 'Featured Posts', 'sm-textdomain' ), 'whapaso_meta_callback', 'post' );
}

function whapaso_meta_callback( $post ) {
    $featured = get_post_meta( $post->ID ); ?>
	<p>
        <div class="sm-row-content">
            <label for="featured">
                <input type="checkbox" name="featured" id="featured" value="yes" <?php if ( isset ( $featured['featured'] ) ) checked( $featured['featured'][0], 'yes' ); ?> />
                <?php _e( 'Featured this post', 'sm-textdomain' )?>
            </label>
        </div>
    </p>
<?php
}
add_action( 'add_meta_boxes', 'whapaso_custom_meta' );

/**
 * Saves the custom meta input
 */
function whapaso_meta_save( $post_id ) {
    // Checks save status
    $is_autosave = wp_is_post_autosave( $post_id );
    $is_revision = wp_is_post_revision( $post_id );
    $is_valid_nonce = ( isset( $_POST[ 'sm_nonce' ] ) && wp_verify_nonce( $_POST[ 'sm_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
 
    // Exits script depending on save status
    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
        return;
    }
 
    // Checks for input and saves
    if( isset( $_POST[ 'featured' ] ) ) {
        update_post_meta( $post_id, 'featured', 'yes' );
    } else {
        update_post_meta( $post_id, 'featured', '' );
    }
 
}
add_action( 'save_post', 'whapaso_meta_save' );

remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart' );
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10); 

add_action('wp_ajax_loadmore', 'loadmore_ajax_handler');
add_action('wp_ajax_nopriv_loadmore', 'loadmore_ajax_handler');
function loadmore_ajax_handler(){
	$args = json_decode( stripslashes( $_POST['query'] ), true );
	$args['paged'] = $_POST['page'] + 1;
    $args['post_status'] = 'publish';
    $args['meta_query'] = array( array( 'key' => 'featured', 'value' => 'yes', 'compare' => '!=' ) );
    query_posts( $args );
    echo '<div class="row">';
    while( have_posts() ): the_post();
        echo '<div class="col-md-6">';
        get_template_part( 'template-parts/content-grid' );
        echo '</div>';
    endwhile;
    echo '</div>';
	die;
}

add_action( 'woocommerce_shop_loop_item_title', 'iconic_available_attributes', 20 );
function iconic_available_attributes() {
	global $product;
	if ( ! $product->is_type( 'variable' ) ) {
		return;
	}
	$attributes = iconic_get_available_attributes( $product );
	if ( empty( $attributes ) ) {
		return;
	}
	foreach ( $attributes as $attribute ) {
		?>
		<div class="iconic-available-attributes">
			<ul class="iconic-available-attributes__values">
				<?php foreach ( $attribute['values'] as $value ) { ?>
					<li class="iconic-available-attributes__value <?php echo $value['available'] ? '' : 'iconic-available-attributes__value--unavailable'; ?>"><?php echo $value['name']; ?></li>
				<?php } ?>
			</ul>
		</div>
		<?php
	}
}

function iconic_get_available_attributes( $product ) {
	static $available_attributes = array();
	$product_id = $product->get_id();
	if ( isset( $available_attributes[ $product_id ] ) ) {
		return $available_attributes[ $product_id ];
	}
	$available_attributes[ $product_id ] = array();
	$attributes = $product->get_variation_attributes();
	if ( empty( $attributes ) ) {
		return $available_attributes[ $product_id ];
	}
	$attributes_to_show = iconic_get_attributes_to_show();
	foreach ( $attributes as $attribute => $values ) {
		if ( ! in_array( $attribute, $attributes_to_show ) ) {
			continue;
		}
		$available_attribute = iconic_get_available_attribute( $product, $attribute, $values );
		if ( empty( $available_attribute ) ) {
			continue;
		}

		$available_attributes[ $product_id ][] = $available_attribute;
	}
	return $available_attributes[ $product_id ];
}

function iconic_get_attributes_to_show() {
	return apply_filters( 'iconic_get_attributes_to_show', array(
		'pa_size',
	) );
}

function iconic_get_available_attribute( $product, $attribute, $values ) {
	$available_attribute = array(
		'slug' => $attribute,
	);
	if ( ! taxonomy_exists( $attribute ) ) {
		$available_attribute['name'] = $attribute;
		foreach ( $values as $value ) {
			$available_attribute['values'][ $value ] = array(
				'name'      => $value,
				'available' => iconic_has_available_variation( $product, $attribute, $value ),
			);
		}
		return $available_attribute;
	}
	$taxonomy = get_taxonomy( $attribute );
	$labels   = get_taxonomy_labels( $taxonomy );
	$available_attribute['name']   = $labels->singular_name;
	$available_attribute['values'] = array();
	foreach ( $values as $value ) {
		$term = get_term_by( 'slug', $value, $attribute );
		if ( ! $term ) {
			continue;
		}
		$available_attribute['values'][ $value ] = array(
			'name'      => $term->name,
			'available' => iconic_has_available_variation( $product, $attribute, $value ),
		);
	}
	return $available_attribute;
}

function iconic_has_available_variation( $product, $attribute, $value ) {
	$available_variation = false;
	$attribute           = 'attribute_' . sanitize_title( $attribute );
	$variations          = $product->get_available_variations();
	if ( empty( $variations ) ) {
		return $available_variation;
	}
	foreach ( $variations as $variation ) {
		foreach ( $variation['attributes'] as $variation_attribute_name => $variation_attribute_value ) {
			if ( $attribute !== $variation_attribute_name ) {
				continue;
			}
			if ( $value !== $variation_attribute_value && ! empty( $variation_attribute_value ) ) {
				continue;
			}
			$available_variation = $variation['is_purchasable'] && $variation['is_in_stock'];
			break;
		}
		if ( $available_variation ) {
			break;
		}
	}
	return $available_variation;
}

add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );
function custom_override_checkout_fields( $fields ) {
	foreach ($fields as &$fieldset) {
        foreach ($fieldset as &$field) {
            // if you want to add the form-group class around the label and the input
            $field['class'][] = 'form-group'; 

            // add form-control to the actual input
            $field['input_class'][] = 'form-control';
        }
    }
    return $fields;
}