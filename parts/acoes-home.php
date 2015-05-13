<article id="acoes" class=	"row">
	<h1>Ações</h1>

	<div id="acoes-interno">
		
		<?php
		$args2 = array(
			'post_type' => 'acao',
			'posts_per_page' => 6,
			'paged' => '$paged'
		);

		$query2 = new WP_Query( $args2 );			// the query
			$the_query2 = new WP_Query( $args2 ); ?>

			<?php if ( $the_query2->have_posts() ) : ?>

				<!-- pagination here -->

				<!-- the loop -->
				<?php while ( $the_query2->have_posts() ) : $the_query2->the_post(); 

					get_template_part( 'content', 'acao' );?>


				<?php endwhile;	
				odin_paging_nav();
				 ?>
				<!-- end of the loop -->

				<!-- pagination here -->

				<?php wp_reset_postdata(); ?>

			<?php else : ?>
				<p><?php _e( 'Crie uma acao', 'odin' ); ?></p>
			<?php endif; ?>			
		</div><!--acoes-interno-->
	</article>