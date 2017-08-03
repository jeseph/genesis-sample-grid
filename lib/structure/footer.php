<?php
/**
 * Structural HTML markup for the site footer
 *
 * @package     QCM\Boilerplate
 * @author      Jeseph Meyers
 * @link        https://qcmny.com
 * @license     GNU General Public License 2.0+
 */
namespace QCM\Boilerplate;

/**
 * Change the footer text
 */
function footer_creds_filter( $creds ) {
    $creds = '2017 &copy; Queen City Media';
    return $creds;
}
add_filter('genesis_footer_creds_text', __NAMESPACE__ . '\footer_creds_filter');