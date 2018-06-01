<?php


require($_SERVER['DOCUMENT_ROOT'] . '/wp-load.php');
$PotrKr = array();
$Bank_Offers = array();

$args = array(

    'category' => 5,
    'post_status' => 'publish',
);

$result = wp_get_recent_posts($args);

if (count($result) > 0) {
    $i = 0;

    foreach ($result as $p) {

        $PotrKr[$i]['name'] = get_the_title($p['ID']);
        $PotrKr[$i]['logo'] = get_the_post_thumbnail_url($p['ID']);
        $PotrKr[$i]['rating'] = get_post_meta($p['ID'], 'rating', true);
        $PotrKr[$i]['rate_number'] = get_post_meta($p['ID'], 'rate_number', true);
        $PotrKr[$i]['rate_dollars_number'] = get_post_meta($p['ID'], 'rate_dollars_number', true);
        $PotrKr[$i]['rate_euro_number'] = get_post_meta($p['ID'], 'rate_euro_number', true);
        $PotrKr[$i]['period'] = get_post_meta($p['ID'], 'period', true);
        $PotrKr[$i]['period_number'] = get_post_meta($p['ID'], 'period_number', true);
        $PotrKr[$i]['period_dollars'] = get_post_meta($p['ID'], 'period_dollars', true);
        $PotrKr[$i]['period_dollars_number'] = get_post_meta($p['ID'], 'period_dollars_number', true);
        $PotrKr[$i]['period_euro'] = get_post_meta($p['ID'], 'period_euro', true);
        $PotrKr[$i]['period_euro_number'] = get_post_meta($p['ID'], 'period_euro_number', true);
//        $PotrKr[$i]['link'] = get_post_meta($p['ID'], 'link', true);
        $PotrKr[$i]['link'] = get_permalink($p['ID']);


        $i = $i + 1;


    }

}

echo json_encode($PotrKr);

?>