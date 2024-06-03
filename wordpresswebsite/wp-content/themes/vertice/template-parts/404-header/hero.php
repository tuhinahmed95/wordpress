<?php $component = \ColibriWP\Theme\View::getData( 'component' ); ?>
<div style="<?php $component->printPostFeaturedImage(); ?>" class="wp-block wp-block-kubio-hero  position-relative wp-block-kubio-hero__outer vertice-404-header__k__KFTMhA6WOVh-outer vertice-local-42-outer d-flex h-section-global-spacing align-items-lg-center align-items-md-center align-items-center" data-kubio="kubio/hero" id="hero">
	<?php $component->printBackground(); ?><?php $component->printSeparator(); ?>
	<div class="position-relative wp-block-kubio-hero__inner vertice-404-header__k__KFTMhA6WOVh-inner vertice-local-42-inner h-navigation-padding h-section-grid-container h-section-boxed-container">
		<script type='text/javascript'>
			(function () {
				// forEach polyfill
				if (!NodeList.prototype.forEach) {
					NodeList.prototype.forEach = function (callback) {
						for (var i = 0; i < this.length; i++) {
							callback.call(this, this.item(i));
						}
					}
				}
				var navigation = document.querySelector('[data-colibri-navigation-overlap="true"], .h-navigation_overlap');
				if (navigation) {
					var els = document
						.querySelectorAll('.h-navigation-padding');
					if (els.length) {
						els.forEach(function (item) {
							item.style.paddingTop = navigation.offsetHeight + "px";
						});
					}
				}
			})();
		</script>
		<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container vertice-404-header__k__vv0pRzL5YoZ-container vertice-local-43-container gutters-row-lg-0 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-0 gutters-row-v-0" data-kubio="kubio/row">
			<div class="position-relative wp-block-kubio-row__inner vertice-404-header__k__vv0pRzL5YoZ-inner vertice-local-43-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-0 gutters-col-v-0">
				<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container vertice-404-header__k__vPVKm6K-swr-container vertice-local-44-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
					<div class="position-relative wp-block-kubio-column__inner vertice-404-header__k__vPVKm6K-swr-inner vertice-local-44-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-2 h-px-md-2 v-inner-md-2 h-px-2 v-inner-2">
						<div class="position-relative wp-block-kubio-column__align vertice-404-header__k__vPVKm6K-swr-align vertice-local-44-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
							<?php vertice_theme()->get('inner-title')->render(); ?>
							<h4 class="wp-block wp-block-kubio-heading  position-relative wp-block-kubio-heading__text vertice-404-header__k__CryHflZk8-text vertice-local-46-text" data-kubio="kubio/heading">
								<?php esc_html_e('Oh no! :( Are you lost?', 'vertice'); ?>
							</h4>
							<div class="position-relative wp-block-kubio-home-button__ vertice-404-header__k__XE8iPl7Auw- vertice-local-47-">
								<span class="wp-block wp-block-kubio-home-button  position-relative wp-block-kubio-home-button__outer vertice-404-header__k__XE8iPl7Auw-outer vertice-local-47-outer kubio-button-container" data-kubio="kubio/home-button">
									<a class="position-relative wp-block-kubio-home-button__link vertice-404-header__k__XE8iPl7Auw-link vertice-local-47-link h-w-100 h-global-transition" href="<?php echo esc_url(home_url()); ?>">
										<span class="h-svg-icon wp-block-kubio-home-button__icon vertice-404-header__k__XE8iPl7Auw-icon vertice-local-47-icon" name="icons8-line-awesome/home">
											<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="home" viewBox="0 0 512 545.5">
												<path d="M256 73.5l11.5 11 208 208-23 23L432 295v185H288V320h-64v160H80V295l-20.5 20.5-23-23 208-208zm0 45.5L112 263v185h80V288h128v160h80V263z"/></svg>
											</span>
											<span class="position-relative wp-block-kubio-home-button__text vertice-404-header__k__XE8iPl7Auw-text vertice-local-47-text kubio-inherit-typography">
												<?php esc_html_e('Go to Homepage!', 'vertice'); ?>
											</span>
										</a>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
