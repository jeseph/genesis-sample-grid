<?php
/**
 * Theme initialization
 *
 * @package     QCM\Boilerplate\Functions
 * @since       1.0.0
 * @author      Jeseph Meyers
 * @link        https://qcmny.com
 * @license     GNU General Public License 2.0+
 */
namespace QCM\Boilerplate\Functions;

add_theme_support( 'genesis-structural-wraps', array( 'header', 'menu-primary', 'menu-secondary', 'footer-widgets', 'footer' ) );

add_filter( 'genesis_markup_site-inner', '__return_null' );
add_filter( 'genesis_markup_content-sidebar-wrap_output', '__return_false' );
add_filter( 'genesis_markup_content', '__return_null' );
