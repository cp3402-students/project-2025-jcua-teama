<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- 🌿💙 Navbar -->
<nav class="navbar navbar-expand-lg navbar-gradient shadow-sm sticky-top">
  <div class="container">
    <a class="navbar-brand fw-bold" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="mainNav">
		<ul class="navbar-nav ms-auto">
			<?php
			foreach(get_pages(array(
        'sort_order' => 'asc',
        'sort_column' => 'menu_order',
        'parent' => 0,
        'post_status' => 'publish',
      )) as $val) {
			echo "<li class='nav-item'><a class='nav-link active' href='". get_page_link($val->ID) . "'>". $val->post_title . "</a></li>";
		}
			?>
		</ul>
    </div>
  </div>
</nav>
