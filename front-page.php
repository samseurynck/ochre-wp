<?php get_header();; ?>

	<main role="main" class="site-content">

		<div class="container">

		  <div class="text">

				<div class="mobile-spacer"></div>

		    <div class="block1">
		      <h1>
		        OCHRE <br>BAKERY
		      </h1>
		      <h2 id="hours-title">
		        HOURS
		      </h2>

						<ul id="hours-list">
						<?php if( have_rows('hours') ): while ( have_rows('hours') ) : the_row(); ?>

						        <li><?php the_sub_field('hour-line'); ?></li>

										<?php
						    endwhile;
						else :
						endif;
						?>
					</ul>

		      <h2 id="location-title">
		        LOCATION
		      </h2>

					<ul id="location-list">
					<?php if( have_rows('location') ): while ( have_rows('location') ) : the_row(); ?>

									<li><?php the_sub_field('address_line'); ?></li>

									<?php
							endwhile;
					else :
					endif;
					?>
				</ul>
		    </div>
		    <nav class="block2">
		      <ul>
						<li>For information on catering & special orders, contact hello@ochrebakery.com.</li>
						<li>Online menus coming soon!</li>
		        <!-- <li>cafe</li>
		        <li>bakery</li>
		        <li>catering</li>
		        <li>wholesale</li>
		        <li>about</li> -->
		      </ul>
		    </nav>
		    <div class="block3">
		      <div class="about-subtitle">
						<div class="subtitle-short"><?php the_field('homepage_bio_subtitle_short'); ?></div>
						<div class="subtitle-long"><?php the_field('homepage_bio_subtitle_long'); ?></div>
		        <!-- Ochre is a bakery and cafe born out of Astro Coffee in Corktown, Detroit. -->
		      </div>

		      <div class="about-text">
						<div class="text-short"><?php the_field('homepage_bio_text_short'); ?></div>
						<!-- <div class="text-medium"><?php // the_field('homepage_bio_text_medium'); ?></div> -->
						<div class="text-long"><?php the_field('homepage_bio_text_long'); ?></div>

		      </div>
		    </div>
		  </div>

			<div class="outer-shape-container">

		  <div class="shape-container" id="shape-tl">

		    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="-144 2 502 609" style="enable-background:new -144 2 502 609;" xml:space="preserve" preserveAspectRatio="none">
					<style type="text/css">
					</style>
					<path class="st0" d="M-144,2v609h502V2H-144z M354.5,609l-496.2-12.2C-147,201.8-62.3,4.5,112.5,4.5S367.8,205.8,354.5,609z"/>
				</svg>
		    <!-- <img src="http://placekitten.com/502/609"> -->

				<?php
					$tempImage = get_field('temporary_announcement_image');
					$tempText = get_field('temporary_announcement_text');
					$image_toggle = get_field('image_toggle');

					if( $image_toggle ) {
						if( $tempImage ) {
							if( $tempText ) {
								 echo '<p class="temporary-text">'. $tempText .'</p>';
							}
							 echo '<div class="temporary-image tlBstretch" data-image-src="'. $tempImage .'"></div>';
						}
					} else {
						echo '<div class="permanent-image tlBstretch" data-image-src=""></div>';
					}
				 ?>

		  </div>

		  <div class="shape-container" id="shape-tr">


		    <svg width="502px" height="599px" viewBox="0 0 502 599" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none">
		    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
		        <g id="Desktop-Copy-9" transform="translate(-522.000000, 0.000000)" fill="#141731">
		            <path d="M532.164501,598.721094 L522,1.70665692 C856.666667,-14.3374556 1024,82.740266 1024,292.939822 C1024,503.139378 860.054834,605.066468 532.164501,598.721094 Z" id="Path-6-Copy-3"></path>
		        </g>
		    </g>
		</svg>


		  </div>

		  <div class="shape-container" id="shape-bl">


		    <svg width="502px" height="597px" viewBox="0 0 502 597" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none">
		    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
		        <g id="Desktop-Copy-9" transform="translate(-1.000000, -599.000000)" fill="#874E11">
		            <path d="M1.23025777,599.331039 L501.569713,609 C509.856571,1000.33333 428.499282,1196 257.497846,1196 C86.4964092,1196 1.07387997,997.110346 1.23025777,599.331039 Z" id="Path-6-Copy-4"></path>
		        </g>
		    </g>
		</svg>

		  </div>

		  <div class="shape-container" id="shape-br">

		    <svg width="502px" height="599px" viewBox="0 0 502 599" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none">
		    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
		        <g id="Desktop-Copy-9" transform="translate(-522.000000, -599.000000)" fill="#141731">
		            <path d="M532.164501,1197.72109 L522,600.706657 C856.666667,584.662544 1024,681.740266 1024,891.939822 C1024,1102.13938 860.054834,1204.06647 532.164501,1197.72109 Z" id="Path-6-Copy-5"></path>
		        </g>
		    </g>
		</svg>
		  </div>

		</div>


		</div>

	</main>

	<?php get_footer();; ?>
