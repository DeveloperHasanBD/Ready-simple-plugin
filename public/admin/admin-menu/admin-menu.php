<?php

function redapple_admin_menu()
{
	add_menu_page(
		__('Private users', 'redapple'),
		__('Private users', 'redapple'),
		'manage_options',
		'private-users',
		'private_users_dashboard'
		// 5
		// 'dashicons-location',
	);
	

}
add_action('admin_menu', 'redapple_admin_menu');
