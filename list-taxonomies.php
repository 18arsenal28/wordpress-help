<?php
	//list terms in a given taxonomy (useful as a widget for twentyten)
		$taxonomy = 'event-cat';
		$tax_terms = get_terms($taxonomy);
	?>
	<ul>
		<?php
			foreach ($tax_terms as $tax_term) {
			echo '<li>' . '<a href="' . esc_attr(get_term_link($tax_term, $taxonomy)) . '" title="' . sprintf( __( "View all posts in %s" ), $tax_term->slug ) . '" ' . '>' . $tax_term->slug.'</a></li>';
			}
		?>
	</ul>