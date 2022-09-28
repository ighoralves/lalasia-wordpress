<?php
get_header();
?>

	<main>
		<section class="Home">
			<div class="Container">

				<div class="Home-content">
					<h1 class="Home-text">
						Discover Furniture With High Quality Wood
					</h1>

					<p class="Paragraph-mobile-mid">
					Pellentesque etiam blandit in tincidunt at donec. Eget ipsum dignissim placerat nisi, 
					adipiscing mauris non. Purus parturient viverra nunc, tortor sit laoreet. Quam 
					tincidunt aliquam adipiscing tempor.
					</p>
				</div>

				<div class="Home-search">
					<form action="#" method="post">
						<div class="Home-searc">
							<i class="Home-icon">
								<img src="<?php echo get_template_directory_uri()?>/assets/icon/search-normal.png" alt="">
							</i>
							<input type="text" name="search" id="srch" placeholder="Search property" required>
						</div>
          	<button class="Home-btn" type="submit"><a href="#">search</a></button>
        	</form>
      	</div>

				<div class="Home-img">
					<picture>
						<source media="(min-width: 361px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/img-2.png">
						<img src="<?php echo get_template_directory_uri()?>/assets/img/img-1.png" alt="">
					</picture>
				</div>
			</div>

		</section>

		<section class="Services">
			<div class="Container">
				<div class="Services-content">
					<h2 class="Title-mobile-left">
						Benefits
					</h2>
					<h3 class="Text-mobile-left">
						Benefits when using our services
					</h3>
					<p class="Paragraph-mobile-left">
						Pellentesque etiam blandit in tincidunt at donec. 
						Eget ipsum dignissim placerat nisi, adipiscing mauris 
						non purus parturient.
					</p>
				</div>

				<div class="Services-cards">
					<div class="Services-card">
						<figure>
							<img src="<?php echo get_template_directory_uri() ?>/assets/icon/icon-1.png" alt="">
						</figure>
						<h3 class="Services-title">
							Many Choices
						</h3>
						<p class="Paragraph-mobile-left">
							Pellentesque etiam blandit in tincidunt at donec. 
							Eget ipsum dignissim placerat nisi, adipiscing mauris non. 
						</p>
					</div>
					<div class="Services-card">
						<figure>
							<img src="<?php echo get_template_directory_uri() ?>/assets/icon/icon.png" alt="">
						</figure>
						<h3 class="Services-title">
							Fast and On Time
						</h3>
						<p class="Paragraph-mobile-left">
							Pellentesque etiam blandit in tincidunt at donec. 
							Eget ipsum dignissim placerat nisi, adipiscing mauris non. 
						</p>
					</div>
					<div class="Services-card">
						<figure>
							<img src="<?php echo get_template_directory_uri() ?>/assets/icon/icon-2.png" alt="">
						</figure>
						<h3 class="Services-title">
							Affordable Price
						</h3>
						<p class="Paragraph-mobile-left">
							Pellentesque etiam blandit in tincidunt at donec. 
							Eget ipsum dignissim placerat nisi, adipiscing mauris non. 
						</p>
					</div>
				</div>
			</div>
		</section>

		<section class="Product">
			<div class="Container">
				<div class="Product-content">
					<h2 class="Title-mobile-mid">Product</h2>
					<h3 class="Text-mobile-mid">Our popular product</h3>
					<p class="Paragraph-mobile-mid">
						Pellentesque etiam blandit in tincidunt at donec. 
						Eget ipsum dignissim placerat nisi, adipiscing mauris 
						non purus parturient.
					</p>
				</div>

				<div class="swiper mySwiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="Product-image">
								<picture>
									<source media="(min-width: 361px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/Rectangle-4.png">
									<img src="<?php echo get_template_directory_uri() ?>/assets/img/Rectangle-1.png" alt="">
								</picture>

							</div>
							<div class="Product-discricao">
								<p1 class="Product-text1">Chair</p1>
								<h3 class="Product-text2">White Aesthetic Chair</h3>
								<p class="Product-text3">Combination of wood and wool</p>
								<strong>$63,47</strong>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="Product-image">
								<picture>
									<source media="(min-width: 361px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/Rectangle-5.png">
									<img src="<?php echo get_template_directory_uri() ?>/assets/img/Rectangle-2.png" alt="">
								</picture>

							</div>
							<div class="Product-discricao">
								<p1 class="Product-text1">Chair</p1>
								<h3 class="Product-text2">White Aesthetic Chair</h3>
								<p class="Product-text3">Combination of wood and wool</p>
								<strong>$63,47</strong>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="Product-image">
								<picture>
									<source media="(min-width: 361px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/Rectangle-6.png">
									<img src="<?php echo get_template_directory_uri() ?>/assets/img/Rectangle-3.png" alt="">
								</picture>

							</div>
							<div class="Product-discricao">
								<p1 class="Product-text1">Chair</p1>
								<h3 class="Product-text2">White Aesthetic Chair</h3>
								<p class="Product-text3">Combination of wood and wool</p>
								<strong>$63,47</strong>
							</div>
						</div>
					</div>
      		<div class="swiper-pagination"></div>
    		</div>
			</div>
		</section>

		<section class="Craft">
			<div class="Container">
				<div class="Craft-content">
					<h2 class="Title-mobile-left">Our Product</h2>
					<h3 class="Text-mobile-left">Crafted by talented and high quality material</h3>
					<p class="Paragraph-mobile-left">
						Pellentesque etiam blandit in tincidunt at donec. 
						Eget ipsum dignissim placerat nisi, adipiscing mauris 
						non purus parturient.
					</p>
				</div>

				<div class="Craft-btn">
					<button class="Craft-btns" type="submit"><a href="#">Learn More</a></button>
				</div>

				<div class="Craft-numbers">
					<div class="Craft-number">
						<strong class="Craft-text1">20+</strong>
						<p class="Craft-text2">Years Experience</p>
					</div>
					<div class="Craft-number">
						<strong class="Craft-text1">483</strong>
						<p class="Craft-text2">Happy Client</p>
					</div>
					<div class="Craft-number">
						<strong class="Craft-text1">150+</strong>
						<p class="Craft-text2">Project Finished</p>
					</div>
				</div>

				<div class="Craft-tumb">
					<picture class="Craft-image">
						<source media="(min-width: 361px)" srcset="">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/img-3.png" alt="">
					</picture>
					<picture class="Craft-image">
						<source media="(min-width: 361px)" srcset="">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/img-4.png" alt="">
					</picture>
				</div>
			</div>
		</section>

		<section class="Comments">
			<div class="Container">
				<div class="Comments-content">
					<h2 class="Title-mobile-mid">Testimonials</h2>
					<h3 class="Text-mobile-mid">What our customer say</h3>
					<p class="Paragraph-mobile-left">
						Pellentesque etiam blandit in tincidunt at donec. 
						Eget ipsum dignissim placerat nisi, adipiscing mauris non purus 
						parturient.
					</p>
				</div>

				<div class="swiper mySwiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="Comments-slide">
								<figure>
									<img class="Comments-image" src="<?php echo get_template_directory_uri() ?>/assets/icon/conversation.png" alt="">
								</figure>

								<p class="Paragraph-mobile-left">
									Pellentesque etiam blandit in tincidunt at donec. 
									Eget ipsum dignissim placerat nisi, adipiscing mauris non. 
								</p>

								<div class="Comments-hero">
									<div class="Comments-heros">
										<figure>
											<img src="<?php echo get_template_directory_uri() ?>/assets/icon/hero.png" alt="">
										</figure>
										<cite class="Comments-text1">Janne Cooper</cite>
									</div>

									<div class="Comments-heros">
										<figure>
											<img src="<?php echo get_template_directory_uri() ?>/assets/icon/star.png" alt="">
										</figure>
										<strong>4.3</strong>
									</div>

								</div>
							</div>
						</div>
						<div class="swiper-slide">

							<div class="Comments-slide">
								<figure>
									<img class="Comments-image" src="<?php echo get_template_directory_uri() ?>/assets/icon/conversation.png" alt="">
								</figure>

								<p class="Paragraph-mobile-left">
									Pellentesque etiam blandit in tincidunt at donec. 
									Eget ipsum dignissim placerat nisi, adipiscing mauris non. 
								</p>

								<div class="Comments-hero">
									<div class="Comments-heros">
										<figure>
											<img src="<?php echo get_template_directory_uri() ?>/assets/icon/hero.png" alt="">
										</figure>
										<cite class="Comments-text1">Janne Cooper</cite>
									</div>

									<div class="Comments-heros">
										<figure>
											<img src="<?php echo get_template_directory_uri() ?>/assets/icon/star.png" alt="">
										</figure>
										<strong>4.3</strong>
									</div>
									
								</div>
							</div>

						</div>
						<div class="swiper-slide">

							<div class="Comments-slide">
								<figure>
									<img class="Comments-image" src="<?php echo get_template_directory_uri() ?>/assets/icon/conversation.png" alt="">
								</figure>

								<p class="Paragraph-mobile-left">
									Pellentesque etiam blandit in tincidunt at donec. 
									Eget ipsum dignissim placerat nisi, adipiscing mauris non. 
								</p>

								<div class="Comments-hero">
									<div class="Comments-heros">
										<figure>
											<img src="<?php echo get_template_directory_uri() ?>/assets/icon/hero.png" alt="">
										</figure>
										<cite class="Comments-text1">Janne Cooper</cite>
									</div>

									<div class="Comments-heros">
										<figure>
											<img src="<?php echo get_template_directory_uri() ?>/assets/icon/star.png" alt="">
										</figure>
										<strong>4.3</strong>
									</div>
									
								</div>
							</div>

						</div>
					</div>
      		<div class="swiper-pagination"></div>
    		</div>
			</div>
		</section>

		<section class="Article">
			<div class="Container">
				<div class="Articles-content">
					<h2 class="Title-mobile-left">Articles</h2>
					<h3 class="Text-mobile-left">The best furniture comes from Lalasia</h3>
					<p class="Paragraph-mobile-left">Pellentesque etiam blandit in tincidunt at donec. </p>
				</div>

				<div class="Article-backs">
					<div class="Article-back-img">
						<figure>
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/fundo.png" alt="">
						</figure>
					</div>
					<div class="Article-back-content">
						<p class="Article-text1">Tips and Trick</p>
						<h3 class="Article-text2">Create Cozy Dinning Room Vibes</h3>
						<p class="Article-text3">Decorating with neutrals brings balance</p>
						<h3 class="Article-text1">Read More</h3>
					</div>
				</div>

				<div class="Article-album">
					<div class="Article-albums">
						<figure>
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/Rectangle 66.png" alt="">
						</figure>
						
						<div class="Article-albums-text">
							<p class="Article-text4">Tips and Trick</p>
							<h3 class="Article-text5">6 ways to give your home minimalistic vibes</h3>
							<div class="Article-albums-texts">
								<figure>
									<img src="<?php echo get_template_directory_uri() ?>/assets/icon/hero.png" alt="">
								</figure>
								<cite class="Article-text6">By Jerremy Jean</cite>
							</div>
						</div>

					</div>
					<div class="Article-albums">
						<figure>
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/Rectangle 67.png" alt="">
						</figure>
						
						<div class="Article-albums-text">
							<p class="Article-text4">Tips and Trick</p>
							<h3 class="Article-text5">6 ways to give your home minimalistic vibes</h3>
							<div class="Article-albums-texts">
								<figure>
									<img src="<?php echo get_template_directory_uri() ?>/assets/icon/hero.png" alt="">
								</figure>
								<cite class="Article-text6">By Jerremy Jean</cite>
							</div>
						</div>

					</div>
					<div class="Article-albums">
						<figure>
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/Rectangle 68.png" alt="">
						</figure>
						
						<div class="Article-albums-text">
							<p class="Article-text4">Tips and Trick</p>
							<h3 class="Article-text5">6 ways to give your home minimalistic vibes</h3>
							<div class="Article-albums-texts">
								<figure>
									<img src="<?php echo get_template_directory_uri() ?>/assets/icon/hero.png" alt="">
								</figure>
								<cite class="Article-text6">By Jerremy Jean</cite>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>

		<section class="Especial">
			<div class="Container">
				<div class="Especial-content">
					<h3 class="Especial-text1">
						Join with me for get special
						discount
					</h3>
					<button type="submit">Learn More</button>
				</div>
			</div>
		</section>

	</main>
<?php
get_footer();
?>
