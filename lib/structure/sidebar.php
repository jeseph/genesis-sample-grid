<?php
/**
 * Structural HTML markup for sidebar
 *
 * @package     QCM\Boilerplate\Structure
 * @since       1.0.0
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
function unregister_sidebar_callbacks() {
  /**
   * Move the primary sidebar with Genesis
   *
   */
  remove_action( 'genesis_after_content', 'genesis_get_sidebar' );
}

add_action( 'genesis_after_content_sidebar_wrap', 'genesis_get_sidebar' );
