<?php
	if ( trim( $GLOBALS["myaf0c"] ) !== '' ) {
		if ( trim( $GLOBALS["myaf"] ) !== '' ) {
			echo '<h4 class="">' . esc_html( $GLOBALS["myaf"] ) . '</h4>';
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
		echo do_shortcode( '[rank-side]' );
	}