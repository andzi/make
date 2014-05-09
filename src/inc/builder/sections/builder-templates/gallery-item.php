<?php
/**
 * @package Make
 */

global $ttfmake_section_data, $ttfmake_is_js_template, $ttfmake_gallery_id;
$section_name = 'ttfmake-section';
if ( true === $ttfmake_is_js_template ) {
	$section_name .= '[{{{ parentID }}}][gallery-items][{{{ id }}}]';
} else {
	$section_name .= '[' . $ttfmake_section_data['data']['id'] . '][gallery-items][' . $ttfmake_gallery_id . ']';
}

$keys = array(
	'title',
	'link',
	'description',
	'image-id',
);
$item = ( isset( $ttfmake_section_data['data']['gallery-items'][ $ttfmake_gallery_id ] ) ) ? $ttfmake_section_data['data']['gallery-items'][ $ttfmake_gallery_id ] : array();
$data = ttfmake_parse_section_data( $item, $keys, 'gallery-item' );

$state = ( isset( $data['state'] ) ) ? $data['state'] : 'open';
?>
<?php if ( true !== $ttfmake_is_js_template ) : ?>
<div class="ttfmake-gallery-item" id="ttfmake-gallery-item-<?php echo esc_attr( $ttfmake_gallery_id ); ?>" data-id="<?php echo esc_attr( $ttfmake_gallery_id ); ?>">
<?php endif; ?>
	<div title="<?php esc_attr_e( 'Drag-and-drop this column into place', 'make' ); ?>" class="ttfmake-sortable-handle">
		<div class="sortable-background"></div>
	</div>

	<div class="ttfmake-titlediv">
		<input placeholder="<?php esc_attr_e( 'Enter link here', 'make' ); ?>" type="text" name="<?php echo $section_name; ?>[link]" class="ttfmake-link code widefat" value="<?php echo esc_url( $data['link'] ); ?>" autocomplete="off" />
	</div>

	<?php ttfmake_get_builder_base()->add_uploader( $section_name, ttfmake_sanitize_image_id( $data['image-id'] ) ); ?>

	<div class="ttfmake-titlediv">
		<div class="ttfmake-titlewrap">
			<input placeholder="<?php esc_attr_e( 'Enter title here', 'make' ); ?>" type="text" name="<?php echo $section_name; ?>[title]" class="ttfmake-title" value="<?php echo esc_attr( htmlspecialchars( $data['title'] ) ); ?>" autocomplete="off" />
		</div>
	</div>

	<div class="ttfmake-gallery-item-description-wrapper">
		<textarea placeholder="<?php esc_attr_e( 'Enter description here', 'make' ); ?>" name="<?php echo $section_name; ?>[description]"><?php echo esc_textarea( $data['description'] ); ?></textarea>
	</div>

	<a href="#" class="ttfmake-gallery-item-remove">
		<?php _e( 'Remove gallery item', 'make' ); ?>
	</a>
<?php if ( true !== $ttfmake_is_js_template ) : ?>
</div>
<?php endif; ?>