<?php
header('Content-Type: text/css; charset=utf-8');
include_once(dirname( __FILE__ ) . '/../../../wp-load.php');

if ( !function_exists( 'sanitize_hex_color' ) ) {
	/**
	 * #付き16進数カラー以外を除去
	 *
	 * @param string $color
	 *
	 * @return string|null
	 */
	function sanitize_hex_color( $color ) {
		if ( '' === $color ) {
			return '';
		}

		if ( preg_match( '|\A#([A-Fa-f0-9]{3}){1,2}\z|', $color ) ) {
			return $color;
		}

		return null;
	}
}
?>

@charset "UTF-8";
/*----------------------------------
ランク
-----------------------------------*/

.rankst-wrap {
	background-color: <?php echo sanitize_hex_color($GLOBALS['stcssdata6']); ?>;
	padding: 10px;
	margin-bottom: 10px;
}

.rankst {
	margin-bottom: 10px;
	overflow: hidden;
}

.rankst p {
	margin-bottom: 5px;
	overflow: hidden;
}

.rankst-cont blockquote {
	background-color: transparent;
	background-image: none;
	padding:0px;
	margin-top: 0px;
	border: none;
}

.rankst-cont {
	margin: 0px;
}

.rankst-contb {
	margin-bottom:20px;
}

.rankst-l {
	text-align:center;
}

.rankstlink-l {
	width: 100%;
	text-align: center;
}

.rankstlink-r {
	float: right;
	width: 100%;
}

/*スター*/

.st-star {
	color:#FFB400;
	font-size:15px;
}

/*詳細ページへのリンクボタン*/
.rankstlink-l p a {
	font-family: Helvetica , "游ゴシック" , "Yu Gothic" , sans-serif;
	display: block;
	width: 100%;
	text-align: center;
	padding: 10px;
	background: <?php echo sanitize_hex_color($GLOBALS['stcssdata3']); ?>;
	color: <?php echo sanitize_hex_color($GLOBALS['stcssdata1']); ?>;
	text-decoration: none;
	margin-right: auto;
	margin-left: auto;
	border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	font-weight:bold;
}

.rankstlink-l p {
	width: 90%;
	text-align: center;
	margin-right: auto;
	margin-left: auto;
	border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	font-weight:bold;
	box-shadow: 0 2px 0 #5a5a5a;
	position:relative;
}

.rankstlink-l p:hover {
	box-shadow: 0 1px 0 #5a5a5a;
	top:1px;
}

.rankstlink-l p a:hover {
	-moz-opacity: 0.8;
	opacity: 0.8;
}

/*投稿用詳細ページリンクボタン*/
.rankstlink-l2 p a {
	display: block;
	width: 100%;
	text-align: center;
	padding: 10px;
	background: <?php echo sanitize_hex_color($GLOBALS['stcssdata3']); ?>;
	color: <?php echo sanitize_hex_color($GLOBALS['stcssdata1']); ?>;
	text-decoration: none;
	margin-right: auto;
	margin-left: auto;
	border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	font-weight:bold;
	box-sizing:border-box;
}

.rankstlink-l2 p {
	width: 90%;
	text-align: center;
	margin-right: auto;
	margin-left: auto;
	border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	font-weight:bold;
	box-shadow: 0 2px 0 #5a5a5a;
	position:relative;
}

.rankstlink-l2 p:hover {
	box-shadow: 0 1px 0 #5a5a5a;
	top:1px;
}

.rankstlink-l2 p a:hover {
	-moz-opacity: 0.8;
	opacity: 0.8;
}


/*詳細ページのみ*/

.rankstlink-b p a {
	font-family: Helvetica , "游ゴシック" , "Yu Gothic" , sans-serif;
	display: block;
	width: 100%;
	text-align: center;
	padding: 10px;
	background: <?php echo sanitize_hex_color($GLOBALS['stcssdata3']); ?>;
	color: <?php echo sanitize_hex_color($GLOBALS['stcssdata1']); ?>;
	text-decoration: none;
	margin-right: auto;
	margin-left: auto;
	border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	font-weight:bold;
}

.rankstlink-b p {
	width: 90%;
	text-align: center;
	margin-right: auto;
	margin-left: auto;
	border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	font-weight:bold;
	box-shadow: 0 2px 0 #5a5a5a;
	position:relative;
}

.rankstlink-b p:hover {
	box-shadow: 0 1px 0 #5a5a5a;
	top:1px;
}

.rankstlink-b p a:hover {
	-moz-opacity: 0.8;
	opacity: 0.8;
}

/*アフィリエイトのリンクボタン*/
.rankstlink-r p a {
	font-family: Helvetica , "游ゴシック" , "Yu Gothic" , sans-serif;
	display: block;
	width: 100%;
	text-align: center;
	padding: 10px;
	background-color: <?php echo sanitize_hex_color($GLOBALS['stcssdata2']); ?>;
	color: <?php echo sanitize_hex_color($GLOBALS['stcssdata1']); ?>;
	text-decoration: none;
	margin-right: auto;
	margin-left: auto;
	border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	font-weight:bold;
}

.rankstlink-r p {
	width: 90%;
	margin-right: auto;
	margin-left: auto;
	border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	box-shadow: 0 2px 0 #5a5a5a;
	position:relative;
}

.rankstlink-r p img{
	display:none;
}

.rankstlink-r p:hover {
	box-shadow: 0 1px 0 #5a5a5a;
	top:1px;
}

.rankstlink-r p a:hover {
	-moz-opacity: 0.8;
	opacity: 0.8;
}

/*投稿用公式リンク*/
.rankstlink-r2 p a {
	display: block;
	width: 100%;
	text-align: center;
	padding: 10px;
	background-color: <?php echo sanitize_hex_color($GLOBALS['stcssdata2']); ?>;
	color: <?php echo sanitize_hex_color($GLOBALS['stcssdata1']); ?>;
	text-decoration: none;
	margin-right: auto;
	margin-left: auto;
	border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	font-weight:bold;
	box-sizing:border-box;
}

.rankstlink-r2 p {
	width: 90%;
	margin-right: auto;
	margin-left: auto;
	border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	box-shadow: 0 2px 0 #5a5a5a;
	position:relative;
}

.rankstlink-r2 p img{
	display:none;
}

.rankstlink-r2 p:hover {
	box-shadow: 0 1px 0 #5a5a5a;
	top:1px;
}

.rankstlink-r2 p a:hover {
	-moz-opacity: 0.8;
	opacity: 0.8;
}

/*アフィリエイトリンクのみ*/

.rankstlink-a p a {
	font-family: Helvetica , "游ゴシック" , "Yu Gothic" , sans-serif;
	display: block;
	width: 100%;
	text-align: center;
	padding: 10px;
	background-color: <?php echo sanitize_hex_color($GLOBALS['stcssdata2']); ?>;
	color: <?php echo sanitize_hex_color($GLOBALS['stcssdata1']); ?>;
	text-decoration: none;
	margin-right: auto;
	margin-left: auto;
	border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	font-weight:bold;
}

.rankstlink-a p {
	width: 90%;
	margin-right: auto;
	margin-left: auto;
	border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	box-shadow: 0 2px 0 #5a5a5a;
	position:relative;
}

.rankstlink-a p img{
	display:none;
}

.rankstlink-a p:hover {
	box-shadow: 0 1px 0 #5a5a5a;
	top:1px;
}

.rankstlink-a p a:hover {
	-moz-opacity: 0.8;
	opacity: 0.8;
}


.rankst-box .clearfix.rankst .rankst-l a img, .rankst-box .clearfix.rankst .rankst-l iframe {
	padding: 5px;
	padding-bottom: 10px;
	max-width:100%;
	box-sizing: border-box;
	margin:0 auto;
}

.rankst-cont p, .rankst-cont,.rankst-contb p, .rankst-contb {
	font-size: 16px;
	line-height: 25px;
}

.rankst-cont ul, .rankst-cont ol{
	padding:10px 20px;
	margin-bottom:10px;
}

.post .rankst-cont li {
	font-size: 16px;
	line-height: 25px;
}
.rankst-cont li {
	font-size: 16px;
	line-height: 25px;
}
.rankh4, .post .rankh4, #side .rankh4 {
	background-repeat: no-repeat;
	background-position: left center;
	padding-top: 20px;
	padding-right: 20px;
	padding-bottom: 10px;
	padding-left: 80px;
	background-image: url(images/oukan.png);
	margin-bottom: 10px;
	border-bottom-width: 1px;
	border-bottom-style: dotted;
	border-bottom-color: #ABA732;
	background-color : transparent ;
	color:#000;
	font-size: 20px;
	line-height: 27px;
}

/* 中見出し */
.rankh3 {
	margin-bottom:20px;
	position:relative;
	border-bottom:solid 1px <?php echo sanitize_hex_color($GLOBALS['stcssdata4']); ?>!important;
	background-color:transparent!important;
	padding:10px;
}

.post h3.rankh3 {
	padding:10px;
	border-left:none;
}

.rankh3-in {
	padding:3px 20px;
	margin:0;
	font-size:15px;
	font-weight:bold;
	background:<?php echo sanitize_hex_color($GLOBALS['stcssdata4']); ?>!important;
	color:<?php echo sanitize_hex_color($GLOBALS['stcssdata5']); ?>!important;
	position:absolute;
	top:5px;
	left:0;
}

.rankst-wrap .rankh3 {
	margin:0 -10px 20px -20px;
}

.post .rankst-cont h4 , .rankst-cont h4 {
background-color:#FCFC88;
padding:10px;
margin-bottom:10px;
}

/*ランキングナンバー*/

.rankid1 .rankh4, .post .rankid1 .rankh4, #side .rankid1 .rankh4 {
	background-image: url(images/oukan1.png);
}

.rankid2 .rankh4, .post .rankid2 .rankh4, #side .rankid2 .rankh4 {
	background-image: url(images/oukan2.png);
}

.rankid3 .rankh4, .post .rankid3 .rankh4, #side .rankid3 .rankh4 {
	background-image: url(images/oukan3.png);
}

/*サイドバー*/

#side .rankst-l,#side .rankst-r{
	float:none;
	width:100%;
}

#side .rankst-box .clearfix.rankst .rankst-l a img{
	float:none;
	width:100%;
}

#side .rankst-r,#side .rankst-l,#side .rankst-cont{
	margin:0;
}

#side .rankst-ls img {
	max-width: 100% !important;
	margin:0 auto;
}

#side .rankst-ls {
	text-align:center;
}

/*media Queries タブレットサイズ（959px以下）
----------------------------------------------------*/
@media only screen and (max-width: 959px) {


}

/*media Queries タブレットサイズ（600px以上）
----------------------------------------------------*/
@media only screen and (min-width: 600px) {
	.rankst-box .clearfix.rankst .rankst-l a img {
		float: left;
		padding-top: 5px;
		padding-left: 0px;
		padding-bottom: 10px;
		padding-right: 0px;
	}

	.rankst-cont {
		margin: 0 0 0 165px;
	}

	.rankst-r {
		position:relative;
		z-index:1;
		float: right;
		width: 100%;
		margin: 0 0 0 -150px;
	}

	.rankst-l {
		position:relative;
		z-index:2;
		float: left;
		width: 150px;
	}

	.rankst-wrap {
		background-color: <?php echo sanitize_hex_color($GLOBALS['stcssdata6']); ?>;
		padding: 20px;
		margin-bottom: 10px;
	}

	/*ランキング説明の文字*/
	.rankst-cont p, .rankst-cont, .rankst-contb p, .rankst-contb {
		font-size: 18px;
		line-height: 30px;
	}

	.post .rankst-cont li {
		font-size: 18px;
		line-height: 30px;
	}

	.rankst-wrap li , .rankst-wrap li, .rankst-cont li, .rankst-cont li {
		font-size: 18px;
		line-height: 30px;
	}

	/*ランキングタイトル*/
	.rankst-wrap .rankh3 {
		margin:0 -10px 20px -40px;
	}
	/*-- ここまで --*/
}

/*media Queries PCサイズ（960px以上）
----------------------------------------------------*/
@media only screen and (min-width: 960px) {
	.rankstlink-l {
		float: left;
		width: 50%;
	}

	.rankstlink-r {
		float: right;
		width: 50%;
	}

	/*ランキング説明の文字*/
	.rankst-cont p, .rankst-cont, .rankst-contb p, .rankst-contb {
		font-size: 14px;
		line-height: 27px;
	}

	.post .rankst-cont li {
		font-size: 14px;
		line-height: 27px;
	}

	.rankst-wrap li , .rankst-wrap li, .rankst-cont li, .rankst-cont li {
		font-size: 14px;
		line-height: 27px;
	}

	/*----------------------------------
	ランク-1カラム
	-----------------------------------*/
	.colum1 .rankst-r {
		float: right;
		width: 100%;
		margin: 0 0 0 -320px;
	}

	.colum1 .rankst-r p, .colum1 .rankst-cont {
		font-size: 14px;
		line-height: 27px;
		margin-bottom: 20px;
	}

	.colum1 .rankst-l {
		float: left;
		width: 300px;
	}

	.colum1 .rankst-cont {
		margin: 0 0 0 320px;
	}

	.colum1 .rankst-wrap .rankst-cont li , .colum1 .rankst-cont li{
		font-size: 14px;
		line-height: 27px;
	}

	/*投稿用ボタンリンク*/
	.rankstlink-r2 p,.rankstlink-l2 p {
		width: 50%;
	}

	/*ランキングタイトル*/
	.rankst-wrap .rankh3 {
		margin:0 -10px 20px -40px;
	}

	/*-- ここまで --*/
}
