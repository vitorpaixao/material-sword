<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Material_Sword
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="container">

		<div class="row">
			<div class="col s12">
				<div class="card">
					<div class="card-content">
						<!-- <span class="card-title">Card Title</span> -->
						<?php the_title( '<span class="card-title">', '</span>' ); ?>
						<?php material_sword_post_thumbnail(); ?>
						<?php
							the_content();

							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'material-sword' ),
								'after'  => '</div>',
							) );
						?>
					</div>
					<div class="card-action">
						<a href="#">This is a link</a>
						<a href="#">This is a link</a>

						<?php if ( get_edit_post_link() ) : ?>
							
								<?php
								edit_post_link(
									sprintf(
										wp_kses(
											/* translators: %s: Name of current post. Only visible to screen readers */
											__( 'Edit <span class="screen-reader-text">%s</span>', 'material-sword' ),
											array(
												'span' => array(
													'class' => array(),
												),
											)
										),
										get_the_title()
									),
									'<span class="edit-link">',
									'</span>'
								);
								?>

						<?php endif; ?>

					</div>
				</div>
			</div>
		</div>

	</div>
</div>
