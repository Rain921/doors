<?php include 'header.php'; ?>
<!--секция первая (слаидер) -->
<section id="service" class="service wrapper">
	<div class="service-title">
		<h2><?php the_field('Title_1') ?></h2>
	</div>
	<?php
	$args = array(
	'category_name'    => 'first_content,first_content1',
	'numberposts'  => 0,
	'order'       => 'ASC',
	'post_type'   => 'post',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
);

$posts = get_posts( $args );

foreach($posts as $post){ setup_postdata($post);
    ?>
    <!--html-->
    	<div class="description">
    		<span class="description__mobile"><?php the_title(); ?></span>
		<div class="description__img">
			<?php 
			if( has_post_thumbnail() ) {
				the_post_thumbnail();
			}
			else {
			echo "<img src='" . get_template_directory_uri() . "/dist/img/noimage.png'>";
			}
			 ?>
		</div>
		<div class="description__text">
			<span><?php the_title(); ?></span>
			<p><?php the_field('text');?></p>
			<div class="description__text_romb" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/ARROWS-1.png);"></div>
			<div class="description__text_btn">
				<button href="#" uk-toggle="#modal-container3"><?php the_field('btn');?></button>
			</div>
		</div>
	
	</div>
    <?
}
wp_reset_postdata(); // сброс
?>


</section>
<!--секция вторая (слаидер) -->
<section id="product" class="product wrapper">
	<h2><?php the_field('Title_2') ?></h2>
	<div class="product__title">
		<h4><?php the_field('ad-title1') ?></h4>
	</div>
    <div class="product-slider" uk-slider>
		<div class="uk-position-relative product-slider__relative">
			<div class="uk-slider-container uk-light product-slider__container">
			<ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m uk-grid product-slider__item">
					<?php
	$args = array(
	'category_name'    => 'slider_1,slider_1ua',
	'numberposts'  => 0,
	'order'       => 'ASC',
	'post_type'   => 'post',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
);
	$posts = get_posts( $args );

foreach($posts as $post){ setup_postdata($post);
    ?>
    <!--html-->
			<li>
		<div class="product-slider-img">
				<?php 
			if( has_post_thumbnail() ) {
				the_post_thumbnail();
			}
			else {
			echo "<img src='" . get_template_directory_uri() . "/dist/img/noimage.png'>";
			}
			 ?>
		</div>
		<div class="product-slider-text">
			<span><?php the_field('door-title');?></span></div>
			<div class="product-slider-btn">
				<button href="#" uk-toggle=".modal-prise"><?php the_field('door-btn');?></button>
			</div>
		</li>
		       <?
}
wp_reset_postdata(); // сброс
?>
				</ul>
			</div>
			<div class="product-slider__arrow">
				<a class="product-slider__arrow_left" href="#" uk-slidenav-previous uk-slider-item="previous"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/product/arrow-left.png" alt="arrow"></a>
				<a class="product-slider__arrow_right" href="#" uk-slidenav-next uk-slider-item="next"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/product/arrow-right.png" alt="arrow"></a>
			</div>
		</div>
	</div>


</section>
				<?php
	$args = array(
	'category_name'    => 'form',
	'numberposts'  => 0,
	'order'       => 'ASC',
	'post_type'   => 'post',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
);
	$posts = get_posts( $args );

foreach($posts as $post){ setup_postdata($post);
    ?>
    <!--html-->
	<!--первая форма-->
<div class="callback wrapper">
	<div class="form-block" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/form-1.png);">
		<div class="form-block__text">
		<h4><?php the_field('form_title');?></h4>
	</div>
	<div class="form-block__form">
		<form method="post" id="form1" class="form-order form1" name="form" action="<?php echo get_template_directory_uri(); ?>/mail.php">
			<div class="form-order__input">
				<input type="text" name="name" value="" placeholder="<?php the_field('name');?>">
			</div>
			<div class="form-order__input">
				<input type="email" name="email" value="" placeholder="<?php the_field('email');?>">
			</div>
			<div class="form-order__input">
				<input type="tel" name="phone" value="" placeholder="<?php the_field('telefone');?>">
			</div>
			<div class="form-order__btn">
				<button class="btn js-close-thank-you" type="submit">
				<input type="submit" value="<?php the_field('btn');?>">
				</button>
			</div>
		</form>
	</div>
</div>
</div>
		       <?
}
wp_reset_postdata(); // сброс
?>
<!--попап благодарности
	<div class="thanks-overlay">
		<div class="thanks-popup js-thank-you">
			<div class="thank-you" style="background: url(<?php echo get_template_directory_uri(); ?>/dist/img/thanks.png) no-repeat;">
				<div class="thank-you__tittle">
					<h2>Благодарим Вас!</h2>
					<p>Ваша заявка отправлена нашему менеджеру.
					Он перезвонит Вам через 2 минуты.</p>
				</div>
			</div>
		</div>
	</div>-->


<!--секция вторая (слаидер) -->
<section class="product wrapper">
	<div class="product__title">
		<h4><?php the_field('ad-title2') ?></h4>
	</div>
	<div class="product-slider" uk-slider>
		<div class="uk-position-relative product-slider__relative">
			<div class="uk-slider-container uk-light product-slider__container">
			<ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m uk-grid product-slider__item">
<?php
	$args = array(
	'category_name'    => 'slider_2,slider_2ua',
	'numberposts'  => 0,
	'order'       => 'ASC',
	'post_type'   => 'post',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
);
	$posts = get_posts( $args );

foreach($posts as $post){ setup_postdata($post);
    ?>
    <!--html-->
			<li>
		<div class="product-slider-img">
				<?php 
			if( has_post_thumbnail() ) {
				the_post_thumbnail();
			}
			else {
			echo "<img src='" . get_template_directory_uri() . "/dist/img/noimage.png'>";
			}
			 ?>
		</div>
		<div class="product-slider-text">
			<span><?php the_field('door-title');?></span></div>
			<div class="product-slider-btn">
				<button href="#" uk-toggle=".modal-prise"><?php the_field('door-btn');?></button>
			</div>
		</li>
			       <?
}
wp_reset_postdata(); // сброс
?>
				</ul>
			</div>
			<div class="product-slider__arrow">
				<a class="product-slider__arrow_left" href="#" uk-slidenav-previous uk-slider-item="previous"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/product/arrow-left.png" alt="arrow"></a>
				<a class="product-slider__arrow_right" href="#" uk-slidenav-next uk-slider-item="next"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/product/arrow-right.png" alt="arrow"></a>
			</div>
		</div>
	</div>
</section>
			<?php
	$args = array(
	'category_name'    => 'form',
	'numberposts'  => 0,
	'order'       => 'ASC',
	'post_type'   => 'post',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
);
	$posts = get_posts( $args );

foreach($posts as $post){ setup_postdata($post);
    ?>
    <!--html-->
<!--вторая форма-->
<div class="callback wrapper">
	<div class="form-block" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/form-1.png);">
		<div class="form-block__text">
		<h4><?php the_field('form_title');?></h4>
	</div>
	<div class="form-block__form">
		<form method="post" id="form2" class="form-order form2" action="<?php echo get_template_directory_uri(); ?>/mail.php">
			<div class="form-order__input">
				<input type="text" name="name" value="" placeholder="<?php the_field('name');?>">
			</div>
			<div class="form-order__input">
				<input type="text" name="email" value="" placeholder="<?php the_field('email');?>">
			</div>
			<div class="form-order__input">
				<input type="text" name="phone" value="" placeholder="<?php the_field('telefone');?>">
			</div>
			<div class="form-order__btn">
				<button href="#" class="btn js-close-thank-you">
				<input type="submit" name="button" value="<?php the_field('btn');?>">
				</button>
			</div>
		</form>
	</div>
</div>
</div>
			       <?
}
wp_reset_postdata(); // сброс
?>
<!--секция третья (слаидер) -->
<section class="product wrapper">
	<div class="product__title">
		<h4><?php the_field('ad-title3') ?></h4>
	</div>
	<div class="product-slider" uk-slider>
		<div class="uk-position-relative product-slider__relative">
			<div class="uk-slider-container uk-light product-slider__container">
			<ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m uk-grid product-slider__item">
				<?php
	$args = array(
	'category_name'    => 'slider_3,slider_3ua',
	'numberposts'  => 0,
	'order'       => 'ASC',
	'post_type'   => 'post',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
);
	$posts = get_posts( $args );

foreach($posts as $post){ setup_postdata($post);
    ?>
    <!--html-->
			<li>
		<div class="product-slider-img">
			<?php 
			if( has_post_thumbnail() ) {
				the_post_thumbnail();
			}
			else {
			echo "<img src='" . get_template_directory_uri() . "/dist/img/noimage.png'>";
			}
			 ?>
		</div>
		<div class="product-slider-text">
			<span><?php the_field('door-title');?></span></div>
			<div class="product-slider-btn">
				<button href="#" uk-toggle=".modal-prise"><?php the_field('door-btn');?></button>
			</div>
		</li>
	<?
}
wp_reset_postdata(); // сброс
?>
				</ul>
			</div>
			<div class="product-slider__arrow uk-visible@s">
				<a class="product-slider__arrow_left" href="#" uk-slidenav-previous uk-slider-item="previous"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/product/arrow-left.png" alt="arrow"></a>
				<a class="product-slider__arrow_right" href="#" uk-slidenav-next uk-slider-item="next"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/product/arrow-right.png" alt="arrow"></a>
			</div>
		</div>
	</div>
</section>
				<?php
	$args = array(
	'category_name'    => 'form',
	'numberposts'  => 0,
	'order'       => 'ASC',
	'post_type'   => 'post',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
);
	$posts = get_posts( $args );

foreach($posts as $post){ setup_postdata($post);
    ?>
    <!--html-->
<!--третья форма-->
<div class="callback wrapper">
	<div class="form-block" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/form-1.png);">
		<div class="form-block__text">
		<h4><?php the_field('form_title');?></h4>
	</div>
	<div class="form-block__form">
		<form method="post" id="form3" class="form-order form3" action="<?php echo get_template_directory_uri(); ?>/mail.php">
			<div class="form-order__input">
				<input type="text" name="name" value="" placeholder="<?php the_field('name');?>">
			</div>
			<div class="form-order__input">
				<input type="text" name="email" value="" placeholder="<?php the_field('email');?>">
			</div>
			<div class="form-order__input">
				<input type="text" name="phone" value="" placeholder="<?php the_field('telefone');?>">
			</div>
			<div class="form-order__btn">
				<button href="#" class="btn js-close-thank-you">
				<input type="submit" name="button" value="<?php the_field('btn');?>">
				</button>
			</div>
		</form>
	</div>
</div>
</div>
<?
}
wp_reset_postdata(); // сброс
?>
<!--секция четвертая -->
<section class="advantage" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/circles.png);">
	<h2><?php the_field('Title_3') ?></h2>
	<div class="adventage-content">
		<div class="adventage-content__img">
			<img src="<?php echo get_template_directory_uri(); ?>/dist/img/main/pic.png" alt="pic">
		</div>
		<div class="adventage-content__text">
			<h4><?php the_field('ad-title4') ?></h4>
			<ul>


				<?php
	$args = array(
	'category_name'    => 'advantage-1,advantage-1ua',
	'numberposts'  => 0,
	'order'       => 'ASC',
	'post_type'   => 'post',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
);
	$posts = get_posts( $args );

foreach($posts as $post){ setup_postdata($post);
    ?>
    <li><span style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/svg/chevron-right-solid.svg);"><?php the_field('title_adv');?></span>
				<p><?php the_field('text_adv');?></p>
			</li>
    	<?
}
wp_reset_postdata(); // сброс
?>
			</ul>
		</div>
	</div>
	<div class="adventage-content">
		<div class="adventage-content__img">
			<img src="<?php echo get_template_directory_uri(); ?>/dist/img/main/pic-2.png" alt="pic">
		</div>
		<div class="adventage-content__text">
			<h4><?php the_field('ad-title5') ?></h4>
			<ul>
					<?php
	$args = array(
	'category_name'    => 'advantage-2,advantage-2ua',
	'numberposts'  => 0,
	'order'       => 'ASC',
	'post_type'   => 'post',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
);
	$posts = get_posts( $args );

foreach($posts as $post){ setup_postdata($post);
    ?>
    <li><span style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/svg/chevron-right-solid.svg);"><?php the_field('title_adv');?></span>
				<p><?php the_field('text_adv');?></p>
			</li>
    	<?
}
wp_reset_postdata(); // сброс
?>
			</ul>
		</div>
	</div>
</section>
<!--секция пятая-->
<section id="service" class="service wrapper">
	<h2><?php the_field('Title_4') ?></h2>
					<?php
	$args = array(
	'category_name'    => 'servise,servise_ua',
	'numberposts'  => 0,
	'order'       => 'ASC',
	'post_type'   => 'post',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
);
	$posts = get_posts( $args );

foreach($posts as $post){ setup_postdata($post);
    ?>
    <!--html-->
    <div class="service-company">
		<div class="service-company__img">
			<?php 
			if( has_post_thumbnail() ) {
				the_post_thumbnail();
			}
			else {
			echo "<img src='" . get_template_directory_uri() . "/dist/img/noimage.png'>";
			}
			 ?>
		</div>
		<div class="service-company__text">
			<span><?php the_field('title_service');?></span>
			<p><?php the_field('text_service');?></p>
			<div class="service-company__text_btn">
				<button href="#" uk-toggle="<?php echo get_post_meta( $post->ID, 'class_modal', true ); ?>"><?php the_field('btn_service');?> </button>
			</div>
		</div>
	</div>
   <?
}
wp_reset_postdata(); // сброс
?>
<!--
	<div class="service-company">
		<div class="service-company__img">
			<img src="<?php echo get_template_directory_uri(); ?>/dist/img/service/service-2.png" alt="img">
		</div>
		<div class="service-company__text">
			<span>Выезд мастера на замер</span>
			<p>В день обращения наш мастер может выехать к Вам домой, в офис или на объект и провести замеры. Вам нужно всего лишь, сказать нам удобное для Вас время для замера.</p>
			<div class="service-company__text_btn">
				<button href="#" uk-toggle=".modal-voi">Вызвать мастера на замер</button>
			</div>
		</div>
	</div>
	<div class="service-company">
		<div class="service-company__img">
			<img src="<?php echo get_template_directory_uri(); ?>/dist/img/service/service-3.png" alt="img">
		</div>
		<div class="service-company__text">
			<span>Изготовление дверей под индивидуальный заказ </span>
			<p>Мы можем изготовить двери под Ваши индивидуальные потребности и скомпоновать различные элементы, вид, цвет и функциональность. Срок производства до 3 недель.</p>
			<div class="service-company__text_btn">
				<button href="#" uk-toggle=".modal-indi">Узнать про индивидуальный заказ</button>
			</div>
		</div>
	</div>
	<div class="service-company">
		<div class="service-company__img">
			<img src="<?php echo get_template_directory_uri(); ?>/dist/img/service/service-4.png" alt="img">
		</div>
		<div class="service-company__text">
			<span>Монтаж</span>
			<p>Наши мастера приедут точно в оговоренный срок для установки дверей. Всего за 2-3 часа мастера проведут все необходимые работы и уберут монтажные остатки после установки.</p>
			<div class="service-company__text_btn">
				<button href="#" uk-toggle=".modal-voi">Вызвать мастера на замер</button>
			</div>
		</div>
	</div>-->
</section>
<!--секция шестая (подарок) -->
<div id="gift" class="gift" style="background-image:url(<?php the_field('podarok_bg'); ?>)">
	<div class="wrapper">
	<img  src="<?php echo get_theme_file_uri(); ?>/dist/img/gift/gift-women.png" alt="img">
		<div class="gift-item">
			<h1><?php the_field('title_podarok'); ?></h1>
			<p><?php the_field('text_podarok'); ?></p>
			<div class="gift-item__timer">
				<span><?php the_field('Time_podarok'); ?></span>
				<div class="timer">
					<span class="timer__item">
							<span id="days" class="big-numb-time">01</span><br><span class="timer-text"><?php the_field('day'); ?></span>
							</span>
							<span class="timer__item">
								<span id="hours" class="big-numb-time">10</span><br>
							<span class="timer-text"><?php the_field('hour'); ?></span>
							</span>
							<span class="timer__item">
								<span id="minutes" class="big-numb-time">21</span><br>
							<span class="timer-text"><?php the_field('min'); ?></span>
							</span>
							<span class="timer__item">
								<span id="seconds" class="big-numb-time">17</span><br>
							<span class="timer-text"><?php the_field('sek'); ?></span>
						</span>
				</div>
			</div>
		</div>
					<?php
	$args = array(
	'category_name'    => 'form,form_uk',
	'numberposts'  => 0,
	'order'       => 'ASC',
	'post_type'   => 'post',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
);
	$posts = get_posts( $args );

foreach($posts as $post){ setup_postdata($post);
    ?>
    <!--html-->	
		<div class="gift-container">
		<div class="gift-form" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/gift/gift-form.png);">
		<div class="gift-form__text">
		<h4><?php the_field('Title-form');?></h4>
		</div>
		<form method="post" id="form4" class="gift-form__form form4" name="form" action="<?php echo get_template_directory_uri(); ?>/mail.php">
			<div class="gift-form__input">
				<input type="text" name="name" value="" placeholder="<?php the_field('name');?>">
			</div>
			<div class="gift-form__input">
				<input type="email" name="email" value="" placeholder="<?php the_field('email');?>">
			</div>
			<div class="gift-form__input">
				<input type="tel" name="phone" value="" placeholder="<?php the_field('telefone');?>">
			</div>
			<div class="gift-form__btn">
				<button href="#" class="btn js-close-thank-you">
				<input type="submit" name="button" value="<?php the_field('btn_podarok');?>">
				</button>
			</div>
		</form>
		</div>
		</div>
		   <?
}
wp_reset_postdata(); // сброс
?>
	</div>
	</div>
	<!--секция седьмая (слаидер) -->
	<section class="recent wrapper">
		<h2><?php the_field('Title_5') ?></h2>
		<div class="recent-slider" uk-slider="sets: true; autoplay: true">
    <div class="uk-position-relative uk-light">
        <ul class="uk-slider-items">
            <li class="uk-width-1-4">
                <div class="uk-card uk-card-default">
                    <div class="uk-card-media-top">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/img/resent/6.jpg" alt="img">
                    </div>
                    <div class="uk-card-media-bottom">
                       <img src="<?php echo get_template_directory_uri(); ?>/dist/img/resent/7.jpg" alt="img">
                    </div>
                </div>
            </li>
            <li class="uk-width-1-2">
                <div class="uk-card uk-card-default">
                	<div class="uk-card-media-center">
                   <img src="<?php echo get_template_directory_uri(); ?>/dist/img/resent/16.jpg" alt="img">
                   </div>
                </div>
            </li>
            <li class="uk-width-1-3 uk-width-1-4">
                <div class="uk-card uk-card-default">
                    <div class="uk-card-media-top">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/img/resent/8.jpg" alt="img">
                    </div>
                      <div class="uk-card-media-bottom">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/img/resent/9.jpg" alt="img">
                    </div>
                </div>
            </li>
      <!--второй контеинер-->
             <li class="uk-width-1-4">
                <div class="uk-card uk-card-default">
                    <div class="uk-card-media-top">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/img/resent/12.jpg" alt="img">
                    </div>
                    <div class="uk-card-media-bottom">
                       <img src="<?php echo get_template_directory_uri(); ?>/dist/img/resent/13.jpg" alt="img">
                    </div>
                </div>
            </li>
            <li class="uk-width-1-2">
                <div class="uk-card uk-card-default">
                	<div class="uk-card-media-center">
                   <img src="<?php echo get_template_directory_uri(); ?>/dist/img/resent/17.jpg" alt="img">
               		</div>
                </div>
            </li>
            <li class="uk-width-1-4">
                <div class="uk-card uk-card-default">
                    <div class="uk-card-media-top">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/img/resent/14.jpg" alt="img">
                    </div>
                      <div class="uk-card-media-bottom">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/img/resent/15.jpg" alt="img">
                    </div>
                </div>
            </li>
        </ul>
       <a class="arrow-resent-left uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/product/arrow-left.png" alt=""></a>
        <a class="arrow-resent-right uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/product/arrow-right.png" alt=""></a>
    </div>
    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
</div>	
	</section>
	<!--секция восьмая (слаидер) -->
<section class="review wrapper">
		<h2><?php the_field('Title_ 6') ?></h2>
<div class="review-slider" uk-slider="autoplay: true; "><!--autoplay-interval: 5000-->
    <div class="uk-position-relative">
        <ul class="uk-slider-items uk-grid">
        					<?php
	$args = array(
	'category_name'    => 'mail,mail1',
	'numberposts'  => 0,
	'order'       => 'ASC',
	'post_type'   => 'post',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
);
	$posts = get_posts( $args );

foreach($posts as $post){ setup_postdata($post);
    ?>
    <!--html-->
            <li class="uk-width-2-4">
            	<div class="uk-cover-container">
            		<div class="review-title">
                <p>
              <?php the_field('coment');?>
                </p>
                </div>
                <div class="review-text">
                <?php 
			if( has_post_thumbnail() ) {
				the_post_thumbnail();
			}
			else {
			echo "<img src='" . get_template_directory_uri() . "/dist/img/noimage.png'>";
			}
			 ?>
                <span> <?php the_field('name');?></span>
            </div>
        	</div>
            </li>

              <?
}
wp_reset_postdata(); // сброс
?>
     
        </ul>
        <a class="uk-hidden-hover review-arrow-left" href="#" uk-slidenav-previous uk-slider-item="previous"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/product/arrow-left.png" alt=""></a>
        <a class="uk-hidden-hover review-arrow-right" href="#" uk-slidenav-next uk-slider-item="next"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/product/arrow-right.png" alt=""></a>
    </div>
     <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
</div>
</section>
<!--секция девятая (сделать заказ) -->
<section class="order wrapper">
	<h2><?php the_field('Title_7') ?></h2>
<div class="order-paid">
	      					<?php
	$args = array(
	'category_name'    => 'order,order_ua',
	'numberposts'  => 0,
	'order'       => 'ASC',
	'post_type'   => 'post',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
);
	$posts = get_posts( $args );

foreach($posts as $post){ setup_postdata($post);
    ?>
    <!--html-->
	<div class="order-paid__card">
		  <?php 
			if( has_post_thumbnail() ) {
				the_post_thumbnail();
			}
			else {
			echo "<img src='" . get_template_directory_uri() . "/dist/img/noimage.png'>";
			}
			 ?>
		<p><?php the_field('order_text') ?></p>
		<div class="order-paid__btn">
			<button href="#"  uk-toggle=".modal-const" class="btn js-close-thank-you">
				<input type="submit" name="button" value="<?php the_field('order_btn') ?>">
			</button>
		</div>
	</div>
   <?
}
wp_reset_postdata(); // сброс
?>
<!--
	<div class="order-paid__card">
		<img src="<?php echo get_template_directory_uri(); ?>/dist/img/order/order-2.png" alt="img">
		<p>Подбираем готовые двери из каталога или изготавливаем под индивидуальный заказ</p>
	</div>
	<div class="order-paid__card">
		<img src="<?php echo get_template_directory_uri(); ?>/dist/img/order/order-3.png" alt="img">
		<p>Мы определяем размеры, вид, функциональность и Вы вносите предоплату</p>
	</div>
	<div class="order-paid__card">
		<img src="<?php echo get_template_directory_uri(); ?>/dist/img/order/order-4.png" alt="img">
		<p>Мы осуществляем доставку
		и монтаж точно в оговоренный срок по договору</p>
	</div>
</div>-->
<div class="order-line">
		<img src="<?php echo get_template_directory_uri(); ?>/dist/img/order/line.png" alt="img">
	</div>
</section>
</main>
<?php include 'footer.php'; ?>