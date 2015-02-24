<!DOCTYPE HTML>
<html prefix="og: http://ogp.me/ns#" class="tr-coretext tr-aa-subpixel">
<head>
    <title>{content_meta_title}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:title" content="{content_meta_title}">
    <meta name="keywords" content="{content_meta_keywords}">
    <meta name="description" content="{content_meta_description}">
    <meta property="og:type" content="{og_type}">
    <meta property="og:url" content="{content_url}">
    <meta property="og:image" content="{content_image}">
    <meta property="og:description" content="{og_description}">
    <meta property="og:site_name" content="{og_site_name}">
    <link href='//fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Roboto+Slab:400,300&subset=latin,cyrillic,cyrillic-ext,greek,latin-ext' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300italic&subset=latin,cyrillic,greek,latin-ext' rel='stylesheet' type='text/css'>
    <script type="text/javascript">
        mw.lib.require("bootstrap3");
        mw.require(mw.settings.template_url + "js/functions.js");
    </script>
    <link rel="stylesheet" href="<?php print template_url(); ?>css/style.css" type="text/css" />
    <link rel="stylesheet" href="<?php print template_url(); ?>css/corp.css" type="text/css" />
    <?php include THIS_TEMPLATE_DIR . 'header_options.php'; ?>

</head>
<body class="<?php print $font . ' ' . $bgimage; ?>">
<div id="main-container">
    <div id="header-master-holder">
      <div id="header-master">
          <div class="container">
              <div class="mw-ui-row-nodrop">
                  <div class="mw-ui-col" style="width: 200px;">
                      <div class="mw-ui-col-container">
                          <module type="logo" id="logo" data-defaultlogo="<?php print template_url(); ?>img/corp.png">
                      </div>
                  </div>
                  <div class="mw-ui-col">
                      <div class="mw-ui-col-container">
                          <div id="main-menu">
                                <module type="social_links" id="social-links-header">
                                <module type="search" template="autocomplete" id="header-search">
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
    <div id="content-holder">
    <div class="container">

    <div class="box-container">
      <div class="mw-ui-row">
          <div class="mw-ui-col" style="width:200px;text-align: left">
              <div class="mw-ui-col-container">
                <module type="menu" template="fixed" menu_name="sidebar_menu" id="sidebar_menu">
              </div>
          </div>
          <div class="mw-ui-col">
              <div class="mw-ui-col-container">