<div class="<?php vertice_print_archive_entry_class('wp-block wp-block-kubio-query-loop-item  position-relative wp-block-kubio-query-loop-item__container vertice-index__k__fx1L_l5Ny--container vertice-local-336-container d-flex   '); ?>"" data-kubio="kubio/query-loop-item">
	<div class="position-relative wp-block-kubio-query-loop-item__inner vertice-index__k__fx1L_l5Ny--inner vertice-local-336-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-0 v-inner-md-3 h-px-0 v-inner-0">
		<div class="position-relative wp-block-kubio-query-loop-item__align vertice-index__k__fx1L_l5Ny--align vertice-local-336-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
			<figure class="wp-block wp-block-kubio-post-featured-image  position-relative wp-block-kubio-post-featured-image__container vertice-index__k__6duco09NdG-container vertice-local-337-container h-aspect-ratio--4-3 <?php vertice_post_missing_featured_image_class(); ?>" data-kubio="kubio/post-featured-image" data-kubio-settings="{{kubio_settings_value}}">
				<?php if(has_post_thumbnail()): ?>
				<img class='position-relative wp-block-kubio-post-featured-image__image vertice-index__k__6duco09NdG-image vertice-local--image' src='<?php echo esc_url(get_the_post_thumbnail_url());?>' />
				<?php endif; ?>
				<div class="position-relative wp-block-kubio-post-featured-image__inner vertice-index__k__6duco09NdG-inner vertice-local-337-inner">
					<div class="position-relative wp-block-kubio-post-featured-image__align vertice-index__k__6duco09NdG-align vertice-local-337-align h-y-container align-self-lg-center align-self-md-center align-self-center"></div>
				</div>
			</figure>
			<div class="wp-block wp-block-kubio-divider  position-relative wp-block-kubio-divider__outer vertice-index__k__p4SFGiqsd-outer vertice-local-338-outer" data-kubio="kubio/divider" id="divider">
				<div class="position-relative wp-block-kubio-divider__width-container vertice-index__k__p4SFGiqsd-width-container vertice-local-338-width-container">
					<div class="position-relative wp-block-kubio-divider__line vertice-index__k__p4SFGiqsd-line vertice-local-338-line"></div>
				</div>
			</div>
			<a class="position-relative wp-block-kubio-post-title__link vertice-index__k__yndIzn0LAb-link vertice-local-339-link d-block" href="<?php echo esc_url(get_the_permalink()); ?>">
				<h4 class="wp-block wp-block-kubio-post-title  position-relative wp-block-kubio-post-title__container vertice-index__k__yndIzn0LAb-container vertice-local-339-container" data-kubio="kubio/post-title">
					<?php the_title(); ?>
				</h4>
			</a>
			<div class="wp-block wp-block-kubio-post-meta  position-relative wp-block-kubio-post-meta__metaDataContainer vertice-index__k__T2yqalWyM-metaDataContainer vertice-local-340-metaDataContainer h-blog-meta" data-kubio="kubio/post-meta" id="post-metadata">
				<span class="metadata-item">
					<a href="<?php echo esc_url(get_day_link(get_post_time( 'Y' ),get_post_time( 'm' ),get_post_time( 'j' ))); ?>">
						<?php echo esc_html(get_the_date('F j, Y')); ?>
					</a>
				</span>
				<span class="metadata-separator">
					|
				</span>
				<span class="metadata-item">
					<a href="">
						<?php echo esc_html(get_the_time()); ?>
					</a>
				</span>
			</div>
			<p class="wp-block wp-block-kubio-post-excerpt  position-relative wp-block-kubio-post-excerpt__text vertice-index__k__fVTtKcA3Zp-text vertice-local-341-text" data-kubio="kubio/post-excerpt">
				<?php vertice_post_excerpt(array (
  'max_length' => 16,
)); ?>
			</p>
			<div class="position-relative wp-block-kubio-read-more-button__spacing vertice-index__k__DVovXhoA8H-spacing vertice-local-342-spacing">
				<span class="wp-block wp-block-kubio-read-more-button  position-relative wp-block-kubio-read-more-button__outer vertice-index__k__DVovXhoA8H-outer vertice-local-342-outer kubio-button-container" data-kubio="kubio/read-more-button" id="read-more-button">
					<a class="position-relative wp-block-kubio-read-more-button__link vertice-index__k__DVovXhoA8H-link vertice-local-342-link h-w-100 h-global-transition" href="<?php echo esc_url(get_the_permalink()); ?>">
						<span class="position-relative wp-block-kubio-read-more-button__text vertice-index__k__DVovXhoA8H-text vertice-local-342-text kubio-inherit-typography">
							<?php esc_html_e('Read more', 'vertice'); ?>
						</span>
					</a>
				</span>
			</div>
		</div>
	</div>
</div>
