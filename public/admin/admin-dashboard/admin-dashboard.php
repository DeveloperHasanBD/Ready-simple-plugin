<?php
function private_users_dashboard()
{
	global $wpdb;
	$lagmp_states_table = $wpdb->prefix . 'lagmp_states';
	wp_enqueue_media();

?>


	<div class="mt-3 shadow p-3 mb-3 bg-body rounded user_dashboard">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section_title mt-3 shadow p-3 mb-3 bg-body rounded">
						<h2>Welcome to Dashboard!</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">

				</div>
			</div>
		</div>
	</div>
	<!-- end top  -->


<?php
}
?>