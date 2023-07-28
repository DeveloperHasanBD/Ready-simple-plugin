<?php


define('BACK_END_ASSET', plugin_dir_url(__FILE__));
function csv_assets_enqueue()
{
    $slug = '';
    $css_loaded_page = ['csv-exp-imp'];
    $css_page = $_REQUEST['page'] ?? '';
    if (in_array($css_page, $css_loaded_page)) {
        wp_enqueue_style('bootstrap-css', BACK_END_ASSET . 'assets/css/bootstrap.min.css', array(), null);
        wp_enqueue_style('all-css', BACK_END_ASSET . 'assets/css/all.min.css', array(), null);
        wp_enqueue_style('datatables-css', BACK_END_ASSET . 'assets/css/datatables.min.css', array(), null);
        wp_enqueue_style('select2-css', BACK_END_ASSET . 'assets/css/select2.min.css', array(), null);
        wp_enqueue_style('google-font-Montserrat', '//fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap');
        wp_enqueue_style('style-css', BACK_END_ASSET . 'assets/css/style.css', array(), null);
    }

    // jss loaded

    $js_loaded_page = ['csv-exp-imp'];

    $js_page = $_REQUEST['page'] ?? '';
    if (in_array($js_page, $js_loaded_page)) {
        wp_enqueue_script('jquery');

        wp_enqueue_script('bootstrap-js', BACK_END_ASSET . 'assets/js/bootstrap.min.js', array('jquery'), null, true);
        wp_enqueue_script('all-js', BACK_END_ASSET . 'assets/js/all.min.js', array('jquery'), null, true);
        wp_enqueue_script('datatables-js', BACK_END_ASSET . 'assets/js/datatables.min.js', array('jquery'), null, true);
        wp_enqueue_script('select2-js', BACK_END_ASSET . 'assets/js/select2.min.js', array('jquery'), null, true);
        wp_enqueue_script('validate-js', BACK_END_ASSET . 'assets/js/jquery.validate.min.js', array('jquery'), null, true);

        /*
           *  Ajax data processing
           */
        wp_enqueue_script('custom-js', BACK_END_ASSET . 'assets/js/custom.js', array('jquery'), null, true);
        wp_localize_script('custom-js', 'action_url_ajax', [
            'ajax_url' => admin_url('admin-ajax.php'),
        ]);
    }
}

add_action('admin_enqueue_scripts', 'csv_assets_enqueue');


define('FRONT_END_USER_ASSET', plugin_dir_url(__FILE__));

function front_end_assets()
{
    wp_enqueue_style('map-style', FRONT_END_USER_ASSET . 'assets/css/map-style.css');

    wp_enqueue_script('jquery');
    wp_enqueue_script('large-google-map', FRONT_END_USER_ASSET . 'assets/js/large-google-map.js', array('jquery'), null, true);
    wp_localize_script('large-google-map', 'action_url_ajax', [
        'ajax_url' => admin_url('admin-ajax.php'),
    ]); 
}
// add_action('wp_enqueue_scripts', 'front_end_assets');