# Theme

## Header & Footer Theme
Theme Zip File: [Link] (https://myjcuedu-my.sharepoint.com/:u:/g/personal/weiaunmarcus_thum_my_jcu_edu_au/IQBK4-86CwjZTolju2GvMER2AQRCUUPCiugFlPZk7kQOZV4?e=0LIppq)

## How to Use?
Upload zip file, under themes. 
    * Header should list Pages, with a Blue & Green Gradient

## Listed Links & Pages

```html
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

**This Code Lists Pages Created in Wordpress, in the Header**