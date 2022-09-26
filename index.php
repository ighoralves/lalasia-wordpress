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
					<i class="Home-icon">
						<img src="<?php echo get_template_directory_uri()?>/assets/icon/search-normal.png" alt="">
					</i>
          <input type="text" name="search" id="srch" placeholder="Search property" required>
          <button class="Home-btn" type="submit"><a href="#">search</a></button>
        </form>
      </div>

			<div class="Home-img">
				<figure>
					<img src="<?php echo get_template_directory_uri()?>/assets/img/img-1.png" alt="">
				</figure>
			</div>
			</div>

		</section>
	</main>
<?php
get_footer();
