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
							<picture>
							<source media="(min-width: 361px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/">
								<img src="<?php echo get_template_directory_uri() ?>/assets/img/Rectangle-1.png" alt="">
							</picture>
						</div>
						<div class="swiper-slide">
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/Rectangle-2.png" alt="">
						</div>
						<div class="swiper-slide">
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/Rectangle-3.png" alt="">
						</div>
					</div>
      		<div class="swiper-pagination"></div>
    		</div>
			</div>
		</section>
	</main>
<?php
get_footer();
?>
