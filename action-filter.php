<?php

require_once(get_template_directory(). '/class.orders.php');

add_action( 'wp_enqueue_scripts', 'custom_enqueue_styles' );
function custom_enqueue_styles() {
    wp_enqueue_script( 'jquery.serializejson',  'https://cdnjs.cloudflare.com/ajax/libs/jquery.serializeJSON/2.9.0/jquery.serializejson.js');
    wp_enqueue_script('customj', get_template_directory_uri() . '/js/custom.js', array(), '1.0.0', 'all');
    wp_localize_script('customj', 'ajax_custom', array(
            'ajaxurl' => admin_url('admin-ajax.php')
        ));
}

add_action( 'admin_enqueue_scripts', 'admin_scripts' );
function admin_scripts() {
    wp_enqueue_script('customadminjs', get_template_directory_uri() . '/js/customadmin.js', array(), '1.0.0', 'all');
    wp_localize_script('customadminjs', 'admin_ajax_custom', array(
            'ajaxurl' => admin_url('admin-ajax.php')
        ));

    wp_enqueue_style('customadmincss', get_template_directory_uri() . '/css/customadmin.css', array(), '1.0.0', 'all');

}


add_action('wp_ajax_custom_orders', 'custom_orders');
add_action('wp_ajax_nopriv_custom_orders', 'custom_orders');
function custom_orders() {
	extract($_POST);
	global $wpdb;
	$data = json_encode($order_data);
	$table_name = $wpdb->prefix . 'vortx_order';
	$sql = $wpdb->prepare("INSERT INTO $table_name (order_details) values ('$data')");
	$success = $wpdb->query($sql);
	if($success){
		$response = 'success';
	}
	echo $response;
	die();
}


add_action('wp_ajax_custom_orders_data', 'custom_orders_data');
add_action('wp_ajax_nopriv_custom_orders_data', 'custom_orders_data');
function custom_orders_data() {
	extract($_POST);
	global $wpdb;
	$table_name = $wpdb->prefix . 'vortx_order';
    $sql_results = $wpdb->get_results("SELECT * FROM $table_name where id = '$data_id'");
	$sdfs= explode("&",$sql_results[0]->order_details);
	if($sql_results){
		$response['response'] = 'success';
		$response['user_name'] =  explode("=", $sdfs[0])[1];
		$response['company'] =  explode("=", $sdfs[0])[2];
		$response['address'] =  explode("=", $sdfs[0])[3];
		$response['city'] =  explode("=", $sdfs[0])[4];
		$response['country'] =  explode("=", $sdfs[0])[5];
		$response['state'] =  explode("=", $sdfs[0])[6];
		$response['postal_code'] =  explode("=", $sdfs[0])[7];
		$response['phone'] =  explode("=", $sdfs[0])[8];
		$response['email_address'] =  explode("=", $sdfs[0])[9];
		$response['roaster_modal'] =  explode("=", $sdfs[0])[10];
		$response['roaster_capacity'] =  explode("=", $sdfs[0])[11];
		$response['treat1'] =  explode("=", $sdfs[0])[12];
		$response['resedential'] =  explode("=", $sdfs[0])[13];
		$response['max_airflow'] =  explode("=", $sdfs[0])[14];
		$response['roasted_blower'] =  explode("=", $sdfs[0])[15];
		$response['project'] =  explode("=", $sdfs[0])[16];
		$response['roaster_model2'] =  explode("=", $sdfs[0])[17];
		$response['roaster_capacity2'] =  explode("=", $sdfs[0])[18];
		$response['treat'] =  explode("=", $sdfs[0])[19];
		$response['roast1'] =  explode("=", $sdfs[0])[20];
		$response['resedential1'] =  explode("=", $sdfs[0])[21];
		$response['max_airflow2'] =  explode("=", $sdfs[0])[22];
		$response['roasted_blower2'] =  explode("=", $sdfs[0])[22];
		$response['project1'] =  explode("=", $sdfs[0])[23];
	}
	echo json_encode($response);
	die();
}


add_action('wp_ajax_custom_schedule_call', 'custom_schedule_call');
add_action('wp_ajax_nopriv_custom_schedule_call', 'custom_schedule_call');
function custom_schedule_call() { 
	extract($_POST);
	global $wpdb;
	$table_name = $wpdb->prefix . 'schedule_call';
	$sql = $wpdb->prepare("INSERT INTO $table_name (user_name,company_name,email,schedule_date,message) values ('$your_name','$your_company','$your_email','$your_date','$message')");
	print_r($sql);
	$success = $wpdb->query($sql);
	if($success){
		$response = 'success';
	}
	echo $response;
	die();
}