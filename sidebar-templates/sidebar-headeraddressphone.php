<?php
/**
 * Sidebar setup for custom header address and phone
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


?>

<?php if ( is_active_sidebar( 'custom-header-address-widget' ) ) : ?>
	<!-- ******************* Header Address Area ******************* -->
    <div class="phone-wrap d-none d-lg-flex">
        <i class="fas fa-map-marker"></i>
        <address>
            <?php dynamic_sidebar( 'custom-header-address-widget' ); ?>
        </address>
	</div>
<?php endif; ?>

<?php if ( is_active_sidebar( 'custom-header-phone-widget' ) ) : ?>
    <!-- ******************* Header Phone Area ******************* -->
    <div class="phone-wrap d-none d-lg-flex">
        <i class="fas fa-phone"></i>
        <?php dynamic_sidebar( 'custom-header-phone-widget' ); ?>
    </div>
<?php endif; ?>
