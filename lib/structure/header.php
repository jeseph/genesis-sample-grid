<?php
/**
 * Structural HTML markup for header area
 *
 * @package     QCM\Boilerplate
 * @author      Jeseph Meyers
 * @link        https://qcmny.com
 * @license     GNU General Public License 2.0+
 */
namespace QCM\Boilerplate;

/**
 * Unregister header callbacks.
 *
 * @since 1.0.0
 *
 * @return void
 */
function unregister_header_callbacks() {

    remove_action( 'genesis_site_description', 'genesis_seo_site_description' );

}

/**
* Remove unwanted WordPress widgets
*/
function unregister_header_widget() {

   // Also remove Header Right widget area
   unregister_sidebar( 'header-right' );

}
add_action( 'widgets_init', __NAMESPACE__ . '\unregister_header_widget' );
