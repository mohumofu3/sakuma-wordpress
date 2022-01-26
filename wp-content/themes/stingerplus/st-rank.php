<?php
if ( is_single() or is_page() ) {
	$postID = $wp_query->post->ID;
	$rankingdisplay = '';
	$rankingdisplay = get_post_meta( $postID, 'rankdisplayck', true );
} else {
	$rankingdisplay = '';
};

if ( is_front_page() ) {  //トップページ 

	if ( trim( $GLOBALS["myaf0a"] ) !== '' ) {
		if ( trim( $GLOBALS["myaf"] ) !== '' ) {
			echo '<h3 class="rankh3"><span class="rankh3-in">' . esc_html( $GLOBALS["myaf"] ) . '</span></h3>';
		}

		//ショートコードのランキングを表示
			for($i = 1; $i<11 ; $i++ ){
			$myafs = 'myafsc'.$i;
			if ( trim( $GLOBALS[$myafs] ) !== '' ) {
				$myafsc = '[st_af id="'.$GLOBALS[$myafs].'"]';
				echo '<div class="rankid'.$i.'">'.do_shortcode("$myafsc").'</div>'; 

			}
		}
		//通常ののランキングを表示
		echo do_shortcode( '[rank]' );
	}
 } else if ( is_page() ) {  //固定ページ 

	if ( ($rankingdisplay !== 'no') && (trim( $GLOBALS["myaf0"] ) !== '' || ($rankingdisplay === 'yes')) ) {
		echo '<div class="rankst-wrap">';
		if ( trim( $GLOBALS["myaf"] ) !== '' ) {
			echo '<h3 class="rankh3"><span class="rankh3-in">' . esc_html( $GLOBALS["myaf"] ) . '</span></h3>';
		}

		//ショートコードのランキングを表示
			for($i = 1; $i<11 ; $i++ ){
			$myafs = 'myafsc'.$i;
			if ( trim( $GLOBALS[$myafs] ) !== '' ) {
				$myafsc = '[st_af id="'.$GLOBALS[$myafs].'"]';
				echo '<div class="rankid'.$i.'">'.do_shortcode("$myafsc").'</div>'; 

			}
		}
		//通常ののランキングを表示
		echo do_shortcode( '[rank]' ) . '</div>';
	}
} else if ( is_single() ) { //投稿ページ 
	if ( ($rankingdisplay !== 'no') && (trim( $GLOBALS["myaf0b"] ) !== '' || ($rankingdisplay === 'yes')) ) {
		echo '<div class="rankst-wrap">';
		if ( trim( $GLOBALS["myaf"] ) !== '' ) {
			echo '<h3 class="rankh3"><span class="rankh3-in">' . esc_html( $GLOBALS["myaf"] ) . '</span></h3>';
		}

		//ショートコードのランキングを表示
			for($i = 1; $i<11 ; $i++ ){
			$myafs = 'myafsc'.$i;
			if ( trim( $GLOBALS[$myafs] ) !== '' ) {
				$myafsc = '[st_af id="'.$GLOBALS[$myafs].'"]';
				echo '<div class="rankid'.$i.'">'.do_shortcode("$myafsc").'</div>'; 

			}
		}
		//通常ののランキングを表示
		echo do_shortcode( '[rank]' ) . '</div>';
	}
 } else { 
 }