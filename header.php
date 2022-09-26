<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

	<header class="Header">
    <div class="Container">
      <div class="Header-logo">
        <figure class="Header-photo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Frame.png" alt="Logo Lalasia">
        </figure>
        <h1 class="Header-text"><a href="index.html">lalasia</a></h1>
      </div>

      <div class="Header-menu">
        <nav id="nav">
          <button id="btn-mobile">
            <span id="hamburguer"></span>
          </button>
          <ul id="label">
            <li><a href="#">Product</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Article</a></li>
            <li><a href="#">About Us</a></li>
          </ul>
        </nav>
      </div>

      <div class="Header-icon">
        <i><a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icon/bag-2.png" alt="">
          </a></i>
        <i><a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icon/user.png" alt="">
          </a></i>
      </div>
    </div>

    <div class="Linha"></div>

  </header>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


	
		