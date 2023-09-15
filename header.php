<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="utf-8">
<title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
<link rel="apple-touch-icon"  href="apple-touch-icon-precomposed.png" />
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta name="keywords" content="音楽,幻想,癒し,web,まとめ,日本カルチャー,暇つぶし">
<meta name="description" content="何が楽しい？何が癒される？何が面白い？暇を持て余す男の遊び場。それが幻想ラボ。">
<meta property="og:image" content="https://oshieru-channel.com/wp-content/uploads/2020/10/main.jpg" />	
<link rel="canonical" href="https://fantasy-lab.jp/">
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen">
<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>	
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Old+Standard+TT&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<?php wp_enqueue_script('example',get_bloginfo('template_url').'/js/import.js', array('jquery')); ?>
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon_16.ico">
<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
<?php wp_head(); ?>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TNJ75VL3');</script>
<!-- End Google Tag Manager -->
</head>

<body <?php body_class( "drawer drawer--right"); ?>>
	
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TNJ75VL3"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	
	
<!--***********header***********-->
<header class="header">
    <div class="header_inner">
      <div class="logo">
        <h1 class="title"><a href="index.html"><img src="assets/img/common/logo.svg" alt="幻想ラボ">幻想ラボ</a></h1>
      </div>
      <nav class="nav">
        <ul class="nav_list">
          <li class="nav_item"><a href="#">癒し</a></li>
          <li class="nav_item"><a href="#">音楽</a></li>
          <li class="nav_item"><a href="#">日本</a></li>
          <li class="nav_item"><a href="#">実験</a></li>
          <li class="nav_item"><a href="#">コレクション</a></li>
          <li class="nav_item"><a href="#">まとめ</a></li>
        </ul>
      </nav>
    </div>
    <div class="hamburger" id="js-hamburger"> <span class="hamburger_border hamburger_border_top"></span> <span class="hamburger_border hamburger_border_center"></span> <span class="hamburger_border hamburger_border_bottom"></span> </div>
    <div class="black_bg" id="js-black-bg"></div>
  </header>

	
<!--***********/header***********-->	