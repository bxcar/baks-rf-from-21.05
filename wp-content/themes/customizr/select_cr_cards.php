<?php


require($_SERVER['DOCUMENT_ROOT'] . '/wp-load.php');
$PotrKr = array();
$Bank_Offers = array();

$args = array(

    'category' => 4,
    'post_status' => 'publish',
);

$result = wp_get_recent_posts($args);

if (count($result) > 0) {
    $i = 0;

    foreach ($result as $p) {

        //$url = get_permalink($p['ID']);
        //$count($result);thumba = get_the_post_thumbnail($p['ID']);

        $PotrKr[$i]['name'] = get_the_title($p['ID']);
        $PotrKr[$i]['logo'] = get_the_post_thumbnail_url($p['ID']);
        $PotrKr[$i]['alt'] = get_the_post_thumbnail_caption($p['ID']);
        $PotrKr[$i]['rate'] = get_post_meta($p['ID'], 'rate', true);
        $PotrKr[$i]['bank_title'] = get_post_meta($p['ID'], 'bank_title', true);
        $PotrKr[$i]['credit_limit'] = get_post_meta($p['ID'], 'credit_limit', true);
        $PotrKr[$i]['period'] = get_post_meta($p['ID'], 'period', true);
        $PotrKr[$i]['service_cost'] = get_post_meta($p['ID'], 'service_cost', true);
//        $PotrKr[$i]['credit_card_link'] = get_post_meta($p['ID'], 'credit_card_link', true);
        $PotrKr[$i]['credit_card_link'] = get_permalink($p['ID']);
        $PotrKr[$i]['amount_min'] = get_post_meta($p['ID'], 'amount_min', true);
        $PotrKr[$i]['amount_max'] = get_post_meta($p['ID'], 'amount_max', true);
        $PotrKr[$i]['type_card'] = get_post_meta($p['ID'], 'type_card', true);
        $PotrKr[$i]['cashback'] = get_post_meta($p['ID'], 'cashback', true);
        $PotrKr[$i]['min_credit_rate'] = get_post_meta($p['ID'], 'min_credit_rate', true);
        $PotrKr[$i]['grace_period'] = get_post_meta($p['ID'], 'grace_period', true);
        $PotrKr[$i]['max_credit_limit'] = get_post_meta($p['ID'], 'max_credit_limit', true);




//		$PotrKr[$i]['id'] = $p['ID'];
//		$PotrKr[$i]['bankid'] = get_post_meta( $p['ID'], 'bankid', true);
//		$PotrKr[$i]['rating'] = get_post_meta( $p['ID'], 'rating', true);
//		$PotrKr[$i]['cu'] = get_post_meta( $p['ID'], 'cu', true);
//		$PotrKr[$i]['city'] = get_post_meta( $p['ID'], 'city', true);
//		$PotrKr[$i]['target'] = get_post_meta( $p['ID'], 'target', true);
//		$PotrKr[$i]['slpr'] = get_post_meta( $p['ID'], 'slpr', true);
//		$PotrKr[$i]['guarantee'] = get_post_meta( $p['ID'], 'guarantee', true);
//		$PotrKr[$i]['spravka'] = get_post_meta( $p['ID'], 'spravka', true);
//		$PotrKr[$i]['form_vidach'] = get_post_meta( $p['ID'], 'form_vidach', true);
//		$PotrKr[$i]['srok_rasm'] = get_post_meta( $p['ID'], 'srok_rasm', true);
//		$PotrKr[$i]['strahov'] = get_post_meta( $p['ID'], 'strahov', true);
//		$PotrKr[$i]['registr'] = get_post_meta( $p['ID'], 'registr', true);
//		$PotrKr[$i]['agestart'] = get_post_meta( $p['ID'], 'agestart', true);
//		$PotrKr[$i]['category'] = get_post_meta( $p['ID'], 'category', true);
//		$PotrKr[$i]['stag'] = get_post_meta( $p['ID'], 'stag', true);
//		$PotrKr[$i]['stag_last'] = get_post_meta( $p['ID'], 'stag_last', true);
//		$PotrKr[$i]['gr'] = get_post_meta( $p['ID'], 'gr', true);
//		$PotrKr[$i]['credit_link'] = get_post_meta( $p['ID'], 'credit_link', true); //fx link
//		$term = array();
//		$term['min']=get_post_meta( $p['ID'], 'term_min', true);
//		$term['max']=get_post_meta( $p['ID'], 'term_max', true);
//		$amount = array();
//		$amount['min']=get_post_meta( $p['ID'], 'amount_min', true);
//		$amount['max']=get_post_meta( $p['ID'], 'amount_max', true);

//		$PotrKr[$i]['offers']=array();
//		$PotrKr[$i]['offers'][0]['term']=$term;
//		$PotrKr[$i]['offers'][0]['amount']=$amount;


        $i = $i + 1;


    }

}

echo json_encode($PotrKr);

?>