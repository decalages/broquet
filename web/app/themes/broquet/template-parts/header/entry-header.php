<?php
/**
 * Displays the post header
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

$discussion = ! is_page() && themebroquet_can_show_post_thumbnail() ? themebroquet_get_discussion_data() : null; ?>
<?php if ( ! is_page() ) : ?>
<div class="the_cat"><?php the_category(', '); ?></div>
<?php endif ?>

<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>


<?php if ( ! is_page() ) : ?>
<div class="entry-meta">
	<?php themebroquet_posted_by(); ?>
	<?php themebroquet_posted_on(); ?>
	<span class="comment-count">
		<?php
		if ( ! empty( $discussion ) ) {
			themebroquet_discussion_avatars_list( $discussion->authors );
		}
		?>
		<?php themebroquet_comment_count(); ?>
	</span>
	<?php
	// Edit post link.
		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers. */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'themebroquet' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			),
			'<span class="edit-link">' . themebroquet_get_icon_svg( 'edit', 16 ),
			'</span>'
		);
	?>
</div><!-- .meta-info -->
<?php endif; ?>
