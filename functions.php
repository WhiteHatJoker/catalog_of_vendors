/**
      *     List of vendors shortcode
      *
      *     @param $atts shortcode attributs
    */
    function wc_makers_list( $atts ) {
        $html = '';

        extract( shortcode_atts( array(
                'orderby'       => 'display_name',
                'order'         => 'ASC',
                'per_page'      => '12',
                'columns'       => '4',
                'show_products' => 'yes'
            ), $atts ) );
        // Hook into the user query to modify the query to return users that have at least one product
        if ($show_products == 'yes') add_action( 'pre_user_query', array( 'WCV_Shortcodes', 'vendors_with_products') );
        // Get all vendors
        $vendor_total_args = array (
            'role'              => 'vendor',
            'meta_key'          => 'pv_shop_slug',
            'meta_value'        => '',
            'orderby'           => $orderby,
            'order'             => $order,
        );
        if ($show_products == 'yes') $vendor_total_args['query_id'] = 'vendors_with_products';
        $vendor_query = New WP_User_Query( $vendor_total_args );
        $all_vendors =$vendor_query->get_results();

        ob_start();
        // Loop through all vendors and output a simple link to their vendor pages
        $counter=1;
        foreach ($all_vendors as $vendor) {
           wc_get_template( 'vendor-list.php', array(
                                                'shop_link' => WCV_Vendors::get_vendor_shop_page($vendor->ID),
                                                        'shop_name' => $vendor->pv_shop_name,
                                                        'vendor_id' => $vendor->ID,
                                                        'shop_description' => $vendor->pv_shop_description,
                                                        'count' => $counter,
                                                        'vendor_username' => htmlspecialchars(strtolower(get_userdata($vendor->ID)->user_login))
                                                ), 'wc-vendors/front/', wcv_plugin_dir . 'templates/front/' );
           $counter++;
        } // End foreach

        $html .= ob_get_clean();

        return $html;
    }
add_shortcode('wc_makers_list', 'wc_makers_list');
