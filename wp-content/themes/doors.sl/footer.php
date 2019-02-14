<div class="wrapper">
	<section id="contact" class="contact">
		<div class="contact__left">
			<h3><?php the_field('Title_8') ?></h3>
			<p><?php the_field('addres_contact') ?><br></p>
			<p><a style="font-weight: 900;" href="tel:+38067 292 44 55"><?php the_field('phone') ?></a> <br><a href="mailto:<?php the_field('email') ?>"><?php the_field('email') ?></a></p>
			<p><span style="font-weight: 900;display: block;"><?php the_field('ask') ?></span><?php the_field('adress') ?></p>
			<div class="contact__btn">
				<button href="#"  uk-toggle=".modal-ask" class="btn js-close-thank-you">
				<input type="submit" name="button" value="<?php the_field('btn_ask') ?>">
				</button>
			</div>
		</div>
		<div id="map" class="contact__map" height=500>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d909.8574497231828!2d23.981969939138807!3d49.83371052219109!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473ae7629ecc462d%3A0xa9e8454169a7220e!2z0YPQuy4g0JPQvtGA0L7QtNC-0YbQutCw0Y8sIDEzOCwg0JvRjNCy0L7Qsiwg0JvRjNCy0L7QstGB0LrQsNGPINC-0LHQu9Cw0YHRgtGMLCA3OTAwMA!5e0!3m2!1sru!2sua!4v1530663934216" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
		
		</div>
		<!-- Replace the value of the key parameter with your own API key. -->
	
	</section>
</div>
<div class="wrapper">
	<footer>
		<div class="logo">
			<img src="<?php echo get_template_directory_uri(); ?>/dist/svg/logo.svg" alt="logo">
		</div>
		<div class="copyright">
			<a class="popup" href="#politics"><?php the_field('poly') ?></a>
			<p>&copy; <script type="text/javascript">var mdate = new Date(); document.write(mdate.getFullYear());</script><?php the_field('te') ?></p>
		</div>
		<div class="made_by">
			<p><?php the_field('dev') ?></p>
			<a target="_blank" href="https://www.facebook.com/Интернет-маркетинг-под-ключ-от-КнБ-Studio-1833190753598670/?ref=bookmarks"><img src="<?php echo get_template_directory_uri(); ?>/img/knb_logo.jpg" alt="">КнБ Studio</a>
		</div>
	</footer>
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
<!--modal перезвон-->
  <div id="modal-container1" class="uk-modal-container" uk-modal>
    <div class="uk-modal-dialog uk-modal-body" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/form.png);">
        <form method="post" id="formModal1"  class="modals-form form" name="form"
        action="<?php echo get_template_directory_uri(); ?>/mail.php">
             <button class="uk-modal-close-default" type="button" uk-close></button>
             <div class="modals-form__text">
              <?php the_field('title-modal1');?>
             </div>
          <div class="modals-form__input-wrap">
            <input type="text" class="modals-form__input form-control" name="name" value="" placeholder="<?php the_field('name');?>">
          </div>
           <div class="modals-form__input-wrap">
            <input type="text" class="modals-form__input form-control" name="email" value="" placeholder="<?php the_field('email');?>">
          </div>
            <div class="modals-form__input-wrap">
            <input type="text" class="modals-form__input form-control" value="" name="phone" placeholder="<?php the_field('telefone');?>">
          </div>
          <div class="modals-form__btn">
         <button href="#" class="btn js-close-thank-you">
            <input type="submit" name="button" placeholder="перезвоните мне" value="<?php the_field('btn_modal1');?>" class="">
          </button>
        </div>
        </form>
        </div>
    </div>
       <?
}
wp_reset_postdata(); // сброс
?>

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
    <!--modal фотокаталог-->
  <div id="modal-container2" class="uk-modal-container" uk-modal>
    <div class="uk-modal-dialog uk-modal-body" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/form.png);">
        <form method="post" id="formModal2"  class="modals-form form" name="form" action="<?php echo get_template_directory_uri(); ?>/mail.php">
             <button class="uk-modal-close-default" type="button" uk-close></button>
             <div class="modals-form__text">
              <?php the_field('title-modal2');?>
             </div>
          <div class="modals-form__input-wrap">
            <input type="text" class="modals-form__input form-control" name="name" value="" placeholder=" <?php the_field('name');?>">
          </div>
           <div class="modals-form__input-wrap">
            <input type="text" class="modals-form__input form-control" name="email" value="" placeholder=" <?php the_field('email');?>">
          </div>
            <div class="modals-form__input-wrap">
            <input type="text" class="modals-form__input form-control" value="" name="phone" placeholder=" <?php the_field('telefone');?>">
          </div>
          <div class="modals-form__btn">
         <button href="#" class="btn js-close-thank-you">
            <input type="submit" name="button" placeholder="Получить фотокаталог" value=" <?php the_field('btn_modal2');?>" class="">
          </button>
        </div>
        </form>
        </div>
    </div>
          <?
}
wp_reset_postdata(); // сброс
?>


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
      <!--modal расрочка-->
  <div id="modal-container3" class="uk-modal-container" uk-modal>
    <div class="uk-modal-dialog uk-modal-body" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/form.png);">
        <form method="post" id="formModal3"  class="modals-form form" name="form"action="<?php echo get_template_directory_uri(); ?>/mail.php">
             <button class="uk-modal-close-default" type="button" uk-close></button>
             <div class="modals-form__text">
              <?php the_field('title-modal3');?>
             </div>
          <div class="modals-form__input-wrap">
            <input type="text" class="modals-form__input form-control" name="name" value="" placeholder="<?php the_field('name');?>">
          </div>
           <div class="modals-form__input-wrap">
            <input type="text" class="modals-form__input form-control" name="email" value="" placeholder="<?php the_field('email');?>">
          </div>
            <div class="modals-form__input-wrap">
            <input type="text" class="modals-form__input form-control" value="" name="phone" placeholder="<?php the_field('telefone');?>">
          </div>
          <div class="modals-form__btn">
         <button href="#" class="btn js-close-thank-you">
            <input type="submit" name="button" placeholder="Получить фотокаталог" value="<?php the_field('btn_modal3');?>" class="">
          </button>
        </div>
        </form>
        </div>
    </div>

              <?
}
wp_reset_postdata(); // сброс
?>

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
        <!--modal узнать стоимость-->
  <div class="uk-modal-container modal-prise" uk-modal>
    <div class="uk-modal-dialog uk-modal-body" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/form.png);">
        <form method="post" id="formModal4"  class="modals-form form" name="form" action="<?php echo get_template_directory_uri(); ?>/mail.php">
             <button class="uk-modal-close-default" type="button" uk-close></button>
             <div class="modals-form__text">
             <?php the_field('title-modal4');?>
             </div>
          <div class="modals-form__input-wrap">
            <input type="text" class="modals-form__input form-control" name="name" value="" placeholder="<?php the_field('name');?>">
          </div>
           <div class="modals-form__input-wrap">
            <input type="text" class="modals-form__input form-control" name="email" value="" placeholder="<?php the_field('email');?>">
          </div>
            <div class="modals-form__input-wrap">
            <input type="text" class="modals-form__input form-control" value="" name="phone" placeholder="<?php the_field('telefone');?>">
          </div>
          <div class="modals-form__btn">
         <button href="#" class="btn js-close-thank-you">
            <input type="submit" name="button" placeholder="Получить фотокаталог" value="<?php the_field('btn_modal4');?>" class="">
          </button>
        </div>
        </form>
        </div>
    </div>

                  <?
}
wp_reset_postdata(); // сброс
?>

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
         <!--modal вызвать мастера-->
  <div class="uk-modal-container modal-voi" uk-modal>
    <div class="uk-modal-dialog uk-modal-body" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/form.png);">
        <form method="post" id="formModal5"  class="modals-form form" name="form" action="<?php echo get_template_directory_uri(); ?>/mail.php">
             <button class="uk-modal-close-default" type="button" uk-close></button>
             <div class="modals-form__text">
            <?php the_field('title-modal5');?>
             </div>
          <div class="modals-form__input-wrap">
            <input type="text" class="modals-form__input form-control" name="name" value="" placeholder="<?php the_field('name');?>">
          </div>
           <div class="modals-form__input-wrap">
            <input type="text" class="modals-form__input form-control" name="email" value="" placeholder="<?php the_field('email');?>">
          </div>
            <div class="modals-form__input-wrap">
            <input type="text" class="modals-form__input form-control" value="" name="phone" placeholder="<?php the_field('telefone');?>">
          </div>
          <div class="modals-form__btn">
         <button href="#" class="btn js-close-thank-you">
            <input type="submit" name="button" placeholder="Получить фотокаталог" value="<?php the_field('btn_modal5');?>" class="">
          </button>
        </div>
        </form>
        </div>
    </div>

                  <?
}
wp_reset_postdata(); // сброс
?>

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

         <!--modal индивидуальное предложение-->
  <div class="uk-modal-container modal-id" uk-modal>
    <div class="uk-modal-dialog uk-modal-body" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/form.png);">
        <form method="post" id="formModal6"  class="modals-form form" name="form" action="<?php echo get_template_directory_uri(); ?>/mail.php">
             <button class="uk-modal-close-default" type="button" uk-close></button>
             <div class="modals-form__text">
             <?php the_field('title-modal6');?>
             </div>
          <div class="modals-form__input-wrap">
            <input type="text" class="modals-form__input form-control" name="name" value="" placeholder="<?php the_field('name');?>">
          </div>
           <div class="modals-form__input-wrap">
            <input type="text" class="modals-form__input form-control" name="email" value="" placeholder="<?php the_field('email');?>">
          </div>
            <div class="modals-form__input-wrap">
            <input type="text" class="modals-form__input form-control" value="" name="phone" placeholder="<?php the_field('telefone');?>">
          </div>
          <div class="modals-form__btn">
         <button href="#" class="btn js-close-thank-you">
            <input type="submit" name="button" placeholder="Получить фотокаталог" value="<?php the_field('btn_modal6');?>" class="">
          </button>
        </div>
        </form>
        </div>
    </div>


                  <?
}
wp_reset_postdata(); // сброс
?>

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
            <!--modal бесплатная консультация-->
  <div class="uk-modal-container modal-const" uk-modal>
    <div class="uk-modal-dialog uk-modal-body" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/form.png);">
        <form method="post" id="formModal7"  class="modals-form form" name="form" action="<?php echo get_template_directory_uri(); ?>/mail.php">
             <button class="uk-modal-close-default" type="button" uk-close></button>
             <div class="modals-form__text">
             <?php the_field('title-modal7');?>
             </div>
          <div class="modals-form__input-wrap">
            <input type="text" class="modals-form__input form-control" name="name" value="" placeholder="<?php the_field('name');?>">
          </div>
           <div class="modals-form__input-wrap">
            <input type="text" class="modals-form__input form-control" name="email" value="" placeholder="<?php the_field('email');?>">
          </div>
            <div class="modals-form__input-wrap">
            <input type="text" class="modals-form__input form-control" value="" name="phone" placeholder="<?php the_field('telefone');?>">
          </div>
          <div class="modals-form__btn">
         <button href="#" class="btn js-close-thank-you">
            <input type="submit" name="button" placeholder="Получить фотокаталог" value="<?php the_field('btn_modal7');?>" class="">
          </button>
        </div>
        </form>
        </div>
    </div>

                  <?
}
wp_reset_postdata(); // сброс
?>

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
         <!--modal индивидуальная (2)-->
  <div class="uk-modal-container modal-indi" uk-modal>
    <div class="uk-modal-dialog uk-modal-body" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/form.png);">
        <form method="post" id="formModal8"  class="modals-form form" name="form" action="<?php echo get_template_directory_uri(); ?>/mail.php">
             <button class="uk-modal-close-default" type="button" uk-close></button>
             <div class="modals-form__text">
            <?php the_field('title-modal8');?>
             </div>
          <div class="modals-form__input-wrap">
            <input type="text" class="modals-form__input form-control" name="name" value="" placeholder="<?php the_field('name');?>">
          </div>
           <div class="modals-form__input-wrap">
            <input type="text" class="modals-form__input form-control" name="email" value="" placeholder="<?php the_field('email');?>">
          </div>
            <div class="modals-form__input-wrap">
            <input type="text" class="modals-form__input form-control" value="" name="phone" placeholder="<?php the_field('telefone');?>">
          </div>
          <div class="modals-form__btn">
         <button href="#" class="btn js-close-thank-you">
            <input type="submit" name="button" placeholder="Получить фотокаталог" value=" <?php the_field('btn_modal8');?>" class="">
          </button>
        </div>
        </form>
        </div>
    </div>
                  <?
}
wp_reset_postdata(); // сброс
?>
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

       <!--modal консультации-->
  <div class="uk-modal-container modal-cons" uk-modal>
    <div class="uk-modal-dialog uk-modal-body" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/form.png);">
        <form method="post" id="formModal9"  class="modals-form form" name="form" action="<?php echo get_template_directory_uri(); ?>/mail.php">
             <button class="uk-modal-close-default" type="button" uk-close></button>
             <div class="modals-form__text">
             <?php the_field('title-modal9');?>
             </div>
          <div class="modals-form__input-wrap">
            <input type="text" class="modals-form__input form-control" name="name" value="" placeholder="<?php the_field('name');?>">
          </div>
           <div class="modals-form__input-wrap">
            <input type="text" class="modals-form__input form-control" name="email" value="" placeholder="<?php the_field('email');?>">
          </div>
            <div class="modals-form__input-wrap">
            <input type="text" class="modals-form__input form-control" value="" name="phone" placeholder="<?php the_field('telefone');?>">
          </div>
          <div class="modals-form__btn">
         <button href="#" class="btn js-close-thank-you">
            <input type="submit" name="button" placeholder="Получить фотокаталог" value="<?php the_field('btn_modal9');?>" class="">
          </button>
        </div>
        </form>
        </div>
    </div>

                  <?
}
wp_reset_postdata(); // сброс
?>

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

      <!--modal задать вопрос-->
  <div class="uk-modal-container modal-ask" uk-modal>
    <div class="uk-modal-dialog uk-modal-body" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/form.png);">
        <form method="post" id="formModal10"  class="modals-form form" name="form" action="<?php echo get_template_directory_uri(); ?>/mail.php">
             <button class="uk-modal-close-default" type="button" uk-close></button>
             <div class="modals-form__text">
             <?php the_field('title-modal10');?>
             </div>
          <div class="modals-form__input-wrap">
            <input type="text" class="modals-form__input form-control" name="name" value="" placeholder="<?php the_field('name');?>">
          </div>
           <div class="modals-form__input-wrap">
            <input type="text" class="modals-form__input form-control" name="email" value="" placeholder="<?php the_field('email');?>">
          </div>
            <div class="modals-form__input-wrap">
            <input type="text"  class="modals-form__input form-control" value="" name="phone" placeholder="<?php the_field('telefone');?>">
          </div>
            <div class="modals-form__input-wrap">
            <textarea class="modals-form__input form-control textarea" placeholder="<?php the_field('ask_form');?>"></textarea>
        </div>
          <div class="modals-form__btn">
         <button href="#" class="btn js-close-thank-you">
            <input type="submit" name="button" placeholder="Получить фотокаталог" value="<?php the_field('btn_modal10');?>" class="">
          </button>
        </div>
        </form>
        </div>
    </div>
                  <?
}
wp_reset_postdata(); // сброс
?>

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

      <!--modal монтаж-->
  <div class="uk-modal-container modal-montaj" uk-modal>
    <div class="uk-modal-dialog uk-modal-body" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/form.png);">
        <form method="post" id="formModal10"  class="modals-form form" name="form" action="<?php echo get_template_directory_uri(); ?>/mail.php">
             <button class="uk-modal-close-default" type="button" uk-close></button>
             <div class="modals-form__text">
             <?php the_field('title-modal11');?>
             </div>
          <div class="modals-form__input-wrap">
            <input type="text" class="modals-form__input form-control" name="name" value="" placeholder="<?php the_field('name');?>">
          </div>
           <div class="modals-form__input-wrap">
            <input type="text" class="modals-form__input form-control" name="email" value="" placeholder="<?php the_field('email');?>">
          </div>
            <div class="modals-form__input-wrap">
            <input type="text"  class="modals-form__input form-control" value="" name="phone" placeholder="<?php the_field('telefone');?>">
          </div>
          <div class="modals-form__btn">
         <button href="#" class="btn js-close-thank-you">
            <input type="submit" name="button" placeholder="Получить фотокаталог" value="<?php the_field('btn_modal11');?>" class="">
          </button>
        </div>
        </form>
        </div>
    </div>
                  <?
}
wp_reset_postdata(); // сброс
?>
    <?php wp_footer();  ?>
    <script src="<?php echo get_theme_file_uri(); ?>/dist/js/uikit.js"></script>
    <script>
  $('#form1').validate({
    rules: {
      name: {
        required: true,
        minlength: 2,
        maxlength: 16
      },
      email: {
        required: true,
        email: true
      },
      phone: {
        required: true
      }
    },
    messages: {
      name: {
        required: validationName,
        minlength: validationNameMax,
        maxlength: validationNameMax
      },
      email: {
        required: validationName,
        email: validationEmail
      },
      phone: {
        required: validationPhone
      }
    }
  });
  $('form.form2').validate({
    rules: {
      name: {
        required: true,
        minlength: 2,
        maxlength: 16
      },
      email: {
        required: true,
        email: true
      },
      phone: {
        required: true
      }
    },
    messages: {
      name: {
        required: validationName,
        minlength: validationNameMax,
        maxlength: validationNameMax
      },
      email: {
        required: validationName,
        email: validationEmail
      },
      phone: {
        required: validationPhone
      }
    }
  });

$('form.form3').validate({
    rules: {
      name: {
        required: true,
        minlength: 2,
        maxlength: 16
      },
      email: {
        required: true,
        email: true
      },
      phone: {
        required: true
      }
    },
    messages: {
      name: {
        required: validationName,
        minlength: validationNameMax,
        maxlength: validationNameMax
      },
      email: {
        required: validationName,
        email: validationEmail
      },
      phone: {
        required: validationPhone
      }
    }
  });


$('form.form4').validate({
    rules: {
      name: {
        required: true,
        minlength: 2,
        maxlength: 16
      },
      email: {
        required: true,
        email: true
      },
      phone: {
        required: true
      }
    },
    messages: {
      name: {
        required: validationName,
        minlength: validationNameMax,
        maxlength: validationNameMax
      },
      email: {
        required: validationName,
        email: validationEmail
      },
      phone: {
        required: validationPhone
      }
    }
  });
 $('#formModal1').validate({
    rules: {
      name: {
        required: true,
        minlength: 2,
        maxlength: 16
      },
      email: {

      },
      phone: {
        required: true
      }
    },
    messages: {
      name: {
        required: validationName,
        minlength: validationNameMax,
        maxlength: validationNameMax
      },
      email: {
        required: validationName,
        email: validationEmail
      },
      phone: {
        required: validationPhone
      }
    }
  });

 $('#formModal2').validate({
    rules: {
      name: {
        required: true,
        minlength: 2,
        maxlength: 16
      },
      email: {
        required: true,
        email: true
      },
      phone: {
        required: true
      }
    },
    messages: {
      name: {
        required: validationName,
        minlength: validationNameMax,
        maxlength: validationNameMax
      },
      email: {
        required: validationName,
        email: validationEmail
      },
      phone: {
        required: validationPhone
      }
    }
  });

$('#formModal3').validate({
    rules: {
      name: {
        required: true,
        minlength: 2,
        maxlength: 16
      },
      email: {
       
      },
      phone: {
        required: true
      }
    },
    messages: {
      name: {
        required: validationName,
        minlength: validationNameMax,
        maxlength: validationNameMax
      },
      email: {
        required: validationName,
        email: validationEmail
      },
      phone: {
        required: validationPhone
      }
    }
  });

$('#formModal4').validate({
    rules: {
      name: {
        required: true,
        minlength: 2,
        maxlength: 16
      },
      email: {
       
      },
      phone: {
        required: true
      }
    },
    messages: {
      name: {
        required: validationName,
        minlength: validationNameMax,
        maxlength: validationNameMax
      },
      email: {
        required: validationName,
        email: validationEmail
      },
      phone: {
        required: validationPhone
      }
    }
  });
 
$('#formModal5').validate({
    rules: {
      name: {
        required: true,
        minlength: 2,
        maxlength: 16
      },
      email: {
       
      },
      phone: {
        required: true
      }
    },
    messages: {
      name: {
        required: validationName,
        minlength: validationNameMax,
        maxlength: validationNameMax
      },
      email: {
        required: validationName,
        email: validationEmail
      },
      phone: {
        required: validationPhone
      }
    }
  });

$('#formModal6').validate({
    rules: {
      name: {
        required: true,
        minlength: 2,
        maxlength: 16
      },
      email: {
       
      },
      phone: {
        required: true
      }
    },
    messages: {
      name: {
        required: validationName,
        minlength: validationNameMax,
        maxlength: validationNameMax
      },
      email: {
        required: validationName,
        email: validationEmail
      },
      phone: {
        required: validationPhone
      }
    }
  });

$('#formModal7').validate({
    rules: {
      name: {
        required: true,
        minlength: 2,
        maxlength: 16
      },
      email: {
       
      },
      phone: {
        required: true
      }
    },
    messages: {
      name: {
        required: validationName,
        minlength: validationNameMax,
        maxlength: validationNameMax
      },
      email: {
        required: validationName,
        email: validationEmail
      },
      phone: {
        required: validationPhone
      }
    }
  });

$('#formModal8').validate({
    rules: {
      name: {
        required: true,
        minlength: 2,
        maxlength: 16
      },
      email: {
       
      },
      phone: {
        required: true
      }
    },
    messages: {
      name: {
        required: validationName,
        minlength: validationNameMax,
        maxlength: validationNameMax
      },
      email: {
        required: validationName,
        email: validationEmail
      },
      phone: {
        required: validationPhone
      }
    }
  });
 
$('#formModal9').validate({
    rules: {
      name: {
        required: true,
        minlength: 2,
        maxlength: 16
      },
      email: {
        
      },
      phone: {
        required: true
      }
    },
    messages: {
      name: {
        required: validationName,
        minlength: validationNameMax,
        maxlength: validationNameMax
      },
      email: {
        required: validationName,
        email: validationEmail
      },
      phone: {
        required: validationPhone
      }
    }
  });

$('#formModal10').validate({
    rules: {
      name: {
        required: true,
        minlength: 2,
        maxlength: 16
      },
      email: {
        
      },
      phone: {
        required: true
      }
    },
    messages: {
      name: {
        required: validationName,
        minlength: validationNameMax,
        maxlength: validationNameMax
      },
      email: {
        required: validationName,
        email: validationEmail
      },
      phone: {
        required: validationPhone
      }
    }
  });

</script>
</body>
</html>