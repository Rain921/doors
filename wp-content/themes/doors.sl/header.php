<!DOCTYPE html>
<html>
<head>
 <!-- <title>doors</title>-->
 <title><?php bloginfo('name'); echo " | "; bloginfo('description'); ?> </title> 
  <meta name="description" content="A description of the page">
  <meta charset="utf-8"/>
  <meta name="theme-color" content="#0122d3">
  <meta name="apple-mobile-web-app-status-bar-style" content="#0122d3">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120303310-5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-120303310-5');
</script>
  <link rel="icon" type="image/ico" href="<?php echo get_template_directory_uri(); ?>/dist/img/fav_48.ico" />
  <!--fonts-->
  <!--фреимфорк и стили-->
  <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>favicon.ico" />
  <?php wp_head(); ?>
</head>
<body style=" background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/bg.png);">
<header class="header">
  <style>
  .header{
    background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/main.png);
  }
    @media (max-width: 1130px) {
      .header{
        background-image:url(<?php echo get_template_directory_uri(); ?>/dist/img/header-mibile.png);

      }
    }
  </style>
    <div class="wrapper">
    <div class="top">
      <div class="logo">
        <a href="index.php">
          <?php the_custom_logo( $blog_id ); ?>
        <!--<img src="<?php echo get_template_directory_uri(); ?>/dist/svg/logo.svg" alt="logo">-->
        </a>
        <div class="logo__text"><?php the_field('text_logo') ?></div>
      </div>
      <div class="mix">
      <div class="lang">
        <?php pll_the_languages(); ?>
      </div>
      <br>
      <a class="phone" style="font-weight: 900;" href="tel:+38067 292 44 55"><?php the_field('phone') ?></a>
      </div>
      <a class="btn-modal" href="#" uk-toggle="#modal-container1">
        <span>
        <?php the_field('button_3') ?>
        </span>
      </a>
    </div>
    <div class="center">
     <article>
       <h1><?php the_field('header_title') ?></h1>
        <span><?php the_field('main_subtitle') ?></span>
        <ul>
          <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/svg/chevron-right-solid.svg)"><?php the_field('advantage_1') ?></li>
          <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/svg/chevron-right-solid.svg)"><?php the_field('advantage_2') ?></li>
          <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/svg/chevron-right-solid.svg)"><?php the_field('advantage_3') ?></li>
        </ul>
         <div class="more">
       <button class="more__btn1" href="#" uk-toggle=".modal-id"><?php the_field('button-1') ?></button>
       <button class="more__btn2" href="#" uk-toggle="#modal-container2"><?php the_field('button_2') ?></button>
     </div>
     </article>
     <div class="peple">
         <nav>
      <ul>
        <li>
          <a data-href="#service"><?php the_field('about') ?></a>
        </li>
        <li>
          <a data-href="#product"><?php the_field('product') ?></a>
        </li>
        <li>
          <a data-href="#gift"><?php the_field('event') ?></a>
        </li>
        <li>
          <a data-href="#contact"><?php the_field('contact') ?></a>
        </li>
      </ul>
     </nav>
     </div>
    </div>
       <div class="down">
     <a data-href="#service">
      <img src="<?php echo get_template_directory_uri(); ?>/dist/svg/arrow.svg" alt="arrow">
      </a>
      </div> 
    </div> 
  </header>
 <main>
