 

/*$(document).ready(function() {
	var href=$(".lang div");
href.click(function () {
    var scrollId = $(this).attr("href");
    change_active($(this));
    //scroll_if_anchor(scrollId);
    return false;
});

function change_active(current) {
    console.log(href);
    href.removeClass("active-lang");
    current.addClass("active-lang");
}

});*/
//up
$(document).ready(function(){
    $('[data-href^="#"]').on('click', function(e){
        e.preventDefault();
        var t = 1000;
        var d = $(this).attr('data-href') ? $(this).attr('data-href') : $(this).attr('href');
        $('html,body').stop().animate({ scrollTop: $(d).offset().top - 10 }, t);
    });
});
// Маска ввода номера телефона
$(function($){
  $('[name="phone"]').mask("+38(999) 999-9999");
});

//validation
    var locationURL = window.location.search;
  if (locationURL == "sample-page") {
    var validationName = "Обязательно для заполнения ";
    var validationNameMax = "От 2 до 16 букв";
    var validationPhone = "Введите корректный номер";
    var validationEmail = "Введите корректный E-mail";
  }
  else  {
    var validationName = "Обов'язково для заповнення";
    var validationNameMax = "Від 2 до 16 літер";
    var validationPhone = "Введіть вірний номер";
    var validationEmail = "Введіть вірний E-mail";
  }

 



  