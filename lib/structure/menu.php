<?php
/**
 * Structural HTML markup for menus 
 *
 * @package     QCM\Boilerplate
 * @author      Jeseph Meyers
 * @link        https://qcmny.com
 * @license     GNU General Public License 2.0+
 */
namespace QCM\Boilerplate;

/**
 * Unregister menu callbacks.
 *
 * @since 1.0.0
 *
 * @return void
 */
function unregister_menu_callbacks() {
    remove_action( 'genesis_after_header', 'genesis_do_subnav' );
}

//* Reposition the secondary navigation menu
add_action( 'genesis_footer', 'genesis_do_subnav', 5 );

/**
 * Reduce the secondary navigation menu to one level depth
 *
 * @since 1.0.0
 *
 * @param array $args
 *
 * @return array
 */
function setup_secondary_menu_args( array $args ) {

    if ( 'secondary' != $args['theme_location'] ) {
        return $args;
    }

    $args['depth'] = 1;

    return $args;

}
add_filter( 'wp_nav_menu_args', __NAMESPACE__ . '\setup_secondary_menu_args' );