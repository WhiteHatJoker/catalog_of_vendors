<?php
/*
*	Template Variables available
*   $shop_name : pv_shop_name
*   $shop_description : pv_shop_description (completely sanitized)
*   $shop_link : the vendor shop link
*   $vendor_id  : current vendor id for customization
*/
?>

<div class="fusion-one-third fusion-layout-column fusion-spacing-yes artisan-container<?php if ($count % 3 == 0) : ?> fusion-column-last<?php endif; ?>" style="margin-top:0px;margin-bottom:20px;">
    <div class="fusion-column-wrapper" style="border:1px solid #e2e2e2;">
        <div class="fusion-person person fusion-person-left fusion-person-icon-top">
            <div class="person-shortcode-image-wrapper">
                <div class="person-image-container hover-type-none glow" style="-moz-box-shadow: 0 0 3px rgba(0,0,0,.3);-webkit-box-shadow: 0 0 3px rgba(0,0,0,.3);box-shadow: 0 0 3px rgba(0,0,0,.3);-webkit-border-radius:0px;-moz-border-radius:0px;border-radius:0px;">

                        <a href="<?php echo $shop_link; ?>" target="_self"><?php echo get_avatar($vendor_id, 240); ?></a>

                </div>
            </div>
            <div class="person-desc">
                <div class="person-author"></div>
                <div class="person-content fusion-clearfix">
                    <h3 style="text-align: center;" data-fontsize="16" data-lineheight="24">
                        <a href="<?php echo $shop_link; ?>"><?php echo $shop_name; ?></a>
                    </h3>
                    <h4 style="text-align: center;" data-fontsize="13" data-lineheight="20">
                        <a href="<?php echo esc_url(get_permalink( woocommerce_get_page_id( 'shop' ) ) . '?swoof=1&pa_vendor=' . preg_replace('/\s+/', '-', $vendor_username)); ?>">View Products</a>
                    </h4>
                </div>
            </div>
        </div>
        <div class="fusion-clearfix"></div>
    </div>
</div>
