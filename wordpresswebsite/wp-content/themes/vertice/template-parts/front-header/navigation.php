<?php $component = \ColibriWP\Theme\View::getData( 'component' ); ?>
<div class="wp-block wp-block-kubio-navigation  position-relative wp-block-kubio-navigation__outer <?php echo $component->printNavigationClasses(); ?> vertice-front-header__k__Gp3qTlxXlu-outer vertice-local-54-outer h-navigation_overlap" data-kubio="kubio/navigation" data-kubio-component="overlap" data-kubio-settings="true" id="navigation">
	<?php vertice_theme()->get('front-top-bar')->render(); ?>
	<div class="wp-block wp-block-kubio-navigation-section  position-relative wp-block-kubio-navigation-section__nav vertice-front-header__k__xLwdIMLPC_l-nav vertice-local-71-nav h-section h-navigation" data-kubio="kubio/navigation-section" data-kubio-component="navigation" data-kubio-settings="{&quot;sticky&quot;:false,&quot;overlap&quot;:true}">
		<div class="position-relative wp-block-kubio-navigation-section__nav-section vertice-front-header__k__xLwdIMLPC_l-nav-section vertice-local-71-nav-section    <?php echo $component->printContainerClasses(); ?>">
			<div class="wp-block wp-block-kubio-navigation-items  position-relative wp-block-kubio-navigation-items__outer vertice-front-header__k__DqcL_YF9LKJ-outer vertice-local-72-outer" data-kubio="kubio/navigation-items" data-nav-normal="true">
				<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container vertice-front-header__k__MqErEXZ17Jm-container vertice-local-73-container gutters-row-lg-0 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-2 gutters-row-v-0" data-kubio="kubio/row">
					<div class="position-relative wp-block-kubio-row__inner vertice-front-header__k__MqErEXZ17Jm-inner vertice-local-73-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-2 gutters-col-v-0">
						<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container vertice-front-header__k__SFXC9Ze09eu-container vertice-local-74-container d-flex h-col-lg-auto h-col-md-auto h-col" data-kubio="kubio/column">
							<div class="position-relative wp-block-kubio-column__inner vertice-front-header__k__SFXC9Ze09eu-inner vertice-local-74-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-2 v-inner-md-0 h-px-2 v-inner-2">
								<div class="position-relative wp-block-kubio-column__align vertice-front-header__k__SFXC9Ze09eu-align vertice-local-74-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
									<?php vertice_theme()->get('logo')->render(array (
  'wrapper_class' => 'wp-block wp-block-kubio-logo position-relative wp-block-kubio-logo__container  kubio-logo-direction-row vertice-front-header__k__0xSC3AT64-container vertice-local--container',
  'logo_image_class' => 'position-relative wp-block-kubio-logo__image  kubio-logo-image  vertice-front-header__k__0xSC3AT64-image vertice-local--image',
  'alt_logo_image_class' => 'position-relative wp-block-kubio-logo__alternateImage kubio-logo-image kubio-alternate-logo-image   vertice-front-header__k__0xSC3AT64-alternateImage vertice-local--alternateImage',
  'logo_text_class' => 'position-relative wp-block-kubio-logo__text  vertice-front-header__k__0xSC3AT64-text vertice-local--text',
)); ?>
								</div>
							</div>
						</div>
						<div class="wp-block wp-block-kubio-column  kubio-hide-on-mobile position-relative wp-block-kubio-column__container vertice-front-header__k__DJ3dK9XoVZ-container vertice-local-76-container d-flex h-col-lg h-col-md h-col-auto" data-kubio="kubio/column">
							<div class="position-relative wp-block-kubio-column__inner vertice-front-header__k__DJ3dK9XoVZ-inner vertice-local-76-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-0 v-inner-0">
								<div class="position-relative wp-block-kubio-column__align vertice-front-header__k__DJ3dK9XoVZ-align vertice-local-76-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
									<div class="wp-block wp-block-kubio-spacer  position-relative wp-block-kubio-spacer__container vertice-front-header__k__mRmagmI3LJv-container vertice-local-77-container" data-kubio="kubio/spacer"></div>
								</div>
							</div>
						</div>
						<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container vertice-front-header__k__ZEkYpBrx7RA-container vertice-local-78-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
							<div class="position-relative wp-block-kubio-column__inner vertice-front-header__k__ZEkYpBrx7RA-inner vertice-local-78-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-2 v-inner-2">
								<div class="position-relative wp-block-kubio-column__align vertice-front-header__k__ZEkYpBrx7RA-align vertice-local-78-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
									<?php vertice_theme()->get('header-menu')->render(); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
