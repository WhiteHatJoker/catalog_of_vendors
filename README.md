# Automatically generated catalog of vendors #
 WC Vendors plugin already has a shortcode [wcv_vendorslist] for displaying the list of vendors, but it doesn't include the vendor pictures and it lacks box type styling. Therefore, we are going to create a new shortcode [wc_makers_list] for catalog which will also display vendor pics with the help of wp_user_avatar plugin.
## Installation ##
1. Make sure you have installed WC Vendors and wp_user_avatar plugins.
2. Copy over PHP code from functions.php into your WordPress functions.php.
3. Copy vendor-list.php from the repository to your current theme folder/wc-vendors/front/ .
4. Don't forget to update the profile pics for vendors by going to users->choosing vendor you wish to have a picture->Edit->Avatar->Image and uploading the image of the vendor you wish to appear on the vendors catalog. Keep in mind that now you can have pictures with different height and width resolutions(for example 180x240 instead of 180x180 as it was before installing wp_user_avatar). Note: Try to upload pictures of the same resolution for all your vendors for a great looking vendors catalog. If you do not upload a new picture, you would see the default WordPress square user avatar on the vendor catalog page.
5. You can customize the appearance of vendors catalog page by adding or removing classes as well as elements in vendor-list.php file. Currently, all the classes are optimized for great look on Avada theme. Be careful with removing the php commands.
6. Now you can use [wc_makers_list] shortcode on any page. The shortcode also accepts arguments:
orderby='display_name' (default)
order='ASC' (default)
per_page='12' (default)
show_products='yes' (default, yes only shows vendors with products, no shows all vendors even those with zero products)
