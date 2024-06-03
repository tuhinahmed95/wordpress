<div class="<?php vertice_print_archive_entry_class('wp-block wp-block-kubio-query-loop-item  position-relative wp-block-kubio-query-loop-item__container vertice-search__k__fx1L_l5Ny--container vertice-local-548-container d-flex   '); ?>"" data-kubio="kubio/query-loop-item">
	<div class="position-relative wp-block-kubio-query-loop-item__inner vertice-search__k__fx1L_l5Ny--inner vertice-local-548-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-0 v-inner-0">
		<div class="position-relative wp-block-kubio-query-loop-item__align vertice-search__k__fx1L_l5Ny--align vertice-local-548-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
			<figure class="wp-block wp-block-kubio-post-featured-image  position-relative wp-block-kubio-post-featured-image__container vertice-search__k__6duco09NdG-container vertice-local-549-container h-aspect-ratio--4-3 <?php vertice_post_missing_featured_image_class(); ?>" data-kubio="kubio/post-featured-image" data-kubio-settings="{{kubio_settings_value}}">
				<?php if(has_post_thumbnail()): ?>
				<img class='position-relative wp-block-kubio-post-featured-image__image vertice-search__k__6duco09NdG-image vertice-local--image' src='<?php echo esc_url(get_the_post_thumbnail_url());?>' />
				<?php endif; ?>
				<div class="position-relative wp-block-kubio-post-featured-image__inner vertice-search__k__6duco09NdG-inner vertice-local-549-inner">
					<div class="position-relative wp-block-kubio-post-featured-image__align vertice-search__k__6duco09NdG-align vertice-local-549-align h-y-container align-self-lg-center align-self-md-center align-self-center"></div>
				</div>
			</figure>
			<div class="wp-block wp-block-kubio-divider  position-relative wp-block-kubio-divider__outer vertice-search__k__Lhd-a4V3Of-outer vertice-local-550-outer" data-kubio="kubio/divider">
				<div class="position-relative wp-block-kubio-divider__width-container vertice-search__k__Lhd-a4V3Of-width-container vertice-local-550-width-container">
					<div class="position-relative wp-block-kubio-divider__line vertice-search__k__Lhd-a4V3Of-line vertice-local-550-line"></div>
				</div>
			</div>
			<a class="position-relative wp-block-kubio-post-title__link vertice-search__k__yndIzn0LAb-link vertice-local-551-link d-block" href="<?php echo esc_url(get_the_permalink()); ?>">
				<h4 class="wp-block wp-block-kubio-post-title  position-relative wp-block-kubio-post-title__container vertice-search__k__yndIzn0LAb-container vertice-local-551-container" data-kubio="kubio/post-title">
					<?php the_title(); ?>
				</h4>
			</a>
			<div class="wp-block wp-block-kubio-post-meta  position-relative wp-block-kubio-post-meta__metaDataContainer vertice-search__k__nng4XPLA_-metaDataContainer vertice-local-552-metaDataContainer h-blog-meta" data-kubio="kubio/post-meta">
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
			<p class="wp-block wp-block-kubio-post-excerpt  position-relative wp-block-kubio-post-excerpt__text vertice-search__k__fVTtKcA3Zp-text vertice-local-553-text" data-kubio="kubio/post-excerpt">
				<?php vertice_post_excerpt(array (
  'max_length' => 16,
)); ?>
			</p>
		</div>
	</div>
</div>
