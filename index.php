<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta charset="UTF-8">
<link media="screen" rel="stylesheet" type="text/css" href ="style.css"/>
 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>resu.me</title>

<script type="text/javascript" src="https://vk.com/js/api/share.js?94" charset="windows-1251"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>


</head>
<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="center-block-main resume">
<nav>
    <ul>
      <li><a href="#" class="men"></a></li>
      </ul>
</nav>


<main  style="box-shadow: 2px 0px 42px -12px #000000;">
	
<article class="avatar_and_fio">

    	<article class="level_pc">
			<hr class= "fio_hr">  
            
<form action="out.php" method="POST" id="main_form" class="center-block-main">     
			<p><input type="text" class="fio"  size="50" required placeholder="Фамилия" name="second_name" maxlength="25" style="font-size: 1.5em; font-weight: bold;"  ></p>
			<p><input type="text" class="fio"  name="name" size="50" required placeholder="Имя" maxlength="25" style="font-size: 1.5em; font-weight: bold;"  ></p>
			<p><input type="email" class="fio" name="mail"  size="50" required placeholder="E-mail" style="font-size: 1.125em; color: #515151;" maxlength="23"  ></p>
			<p><input type="date" class="fio" name="data_r"  size="50" required placeholder="Дата рождения (ДД|ММ|ГГ)" maxlength="13" style="margin-bottom:5px;"  > </p>
          
            <hr class="fio_hr">
	</article>

	
	
		<article class="center-block-main avatar">
		
    <img src="htmls/images/ava.png"  id="companyLogo"  data-type="editable" alt="image" />
  
  
  	<script language="javascript">
       function init() {
    $("img[data-type=editable]").each(function (i, e) {
        var _inputFile = $('<input/>')
            .attr('type', 'file')
            .attr('hidden', 'hidden')
            .attr('onchange', 'readImage()')
            .attr('data-image-placeholder', e.id);

        $(e.parentElement).append(_inputFile);

        $(e).on("click", _inputFile, triggerClick);
    });
}

function triggerClick(e) {
    e.data.click();
}

Element.prototype.readImage = function () {
    var _inputFile = this;
    if (_inputFile && _inputFile.files && _inputFile.files[0]) {
        var _fileReader = new FileReader();
        _fileReader.onload = function (e) {
            var _imagePlaceholder = _inputFile.attributes.getNamedItem("data-image-placeholder").value;
            var _img = $("#" + _imagePlaceholder);
            _img.attr("src", e.target.result);
        };
        _fileReader.readAsDataURL(_inputFile.files[0]);
    }
};

// 
// IIFE - Immediately Invoked Function Expression
// https://stackoverflow.com/questions/18307078/jquery-best-practises-in-case-of-document-ready
(

function (yourcode) {
    "use strict";
    // The global jQuery object is passed as a parameter
    yourcode(window.jQuery, window, document);
}(

function ($, window, document) {
    "use strict";
    // The $ is now locally scoped 
    $(function () {
        // The DOM is ready!
        init();
    });

    // The rest of your code goes here!
}));
    </script>    
	

  
	</article>
	
	
    
    
     
</article>
<div class="clr"></div>
            
<article class="plclife_and_phones">			
	<article class="place_life">
		  <h1 class=" center-block-main place_of_life left_side_line">Место проживания</h1>
			<p><input type="text" class="fio" name="country" size="23" required placeholder="Страна" maxlength="28" ></p>
			<p><input type="text" class="fio" name="city" size="20" required placeholder="Город" maxlength="25"  ></p>
			<p><input type="text" class="fio" name="street" size="20" placeholder="Район | Улица" maxlength="25"></p>
	

	</article>
    
<article class="center-block-main phones">
			<h1 class="center-block-main phone_contacts left_side_line">Телефоны</h1>
			<p><input type="phone" class="fio" size="22" name="mobile" required placeholder="Мобильный телефон" maxlength="20"  ></p>
			<p><input type="phone" class="fio" size="25"  name="dop_tel" placeholder="Дополнительный телефон" maxlength="20"></p>
			<p><input type="url"   class="fio" id="ssilka" name="site" placeholder="Сайт | Ссылка на профиль в соц сети" size="44" maxlength="100"></p>

</article>	
	
	
	</article>
	
	
<article class="center-block-main level_educ">
	<article class="level_pc_new">
			<h1 class=" center-block-main place_of_life left_side_line">Уровень владения ПК</h1>
			<p><input type="text" class="fio" size="28" name="levelpc" required placeholder="Базовый | Средний | Опытный" style="font-size:1em;" maxlength="25"  ></p>
			<p><textarea  class="pc_mind" rows="9" cols="25" name="navikipc" required placeholder="Компьютерные навыки|Знание программ" maxlength="162"></textarea></p>
</article>
	
	<article class="art_education">
    
	
	<h1 class="center-block-main educ_head left_side_line">Образование</h1>
			<p><textarea class="education" rows="5" cols="30" name="colledge" required placeholder="Колледж | Лицей" maxlength="75"  ></textarea></p>
			<p><textarea class="education" rows="5" cols="30" name="univer" placeholder="Институт | Университет" maxlength="75"></textarea></p>
	
	</article>
	
	</article>
	<hr class="hr" size="5" noshade color="black" width="60%" align="left" style="margin-bottom:20px; margin-left:10px;">
    
	
	
	
	
	<article class="level_educ" style="margin-bottom:25px;">
	
	<article class="level_pc_new">
	<h1 class="center-block-main place_of_life left_side_line" >Опыт работы</h1>
			<p><textarea class="work" rows="9" cols="25" name="opit" required placeholder="Опыт работы в учереждениях" maxlength="162"  ></textarea></p>
		        </head>
	
	
	</article>
		
		
		<article class="phones cfalification">
		<head>
			<h1 class="center-block-main place_of_life left_side_line" style="margin-top:50px;">Дипломы|Сертификаты</h1>
		<p>	<textarea class="work" rows="9" cols="25"  name="diploms" placeholder="Дипломы|Сертификаты|Квалификации|Рекомендательные письма" maxlength="162"></textarea></p>
		</head>
	
	</article>
		
	

	
	
	</article>
        
	
	
	
	<article class="level_pc">
			<h1 class="center-block-main place_of_life left_side_line" style="margin-top: 15px;">О себе</h1>
				
				<p><textarea class="work" rows="9" cols="25"   name="yourself" required placeholder="Сильные стороны|Слабые стороны|Личностные качества|Вредные привычки" maxlength="162"  ></textarea></p>
		
		
		
		
		
			
	
	</article>

	<button type="submit"class="center-block-main" id="btn" action="out.php">ОПУБЛИКОВАТЬ</button>
	
	</form>    
			
		
		
		
		
		
		
		
		
		
		<hr color="black" size="1" style="margin-bottom:30px;margin:0 auto" noshade align="left" width="85%">
	
    </article>
	
	<script>
$(function(){
$('#main_form').submit(function(e){
//отменяем стандартное действие при отправке формы
e.preventDefault();
//берем из формы метод передачи данных
var m_method=$(this).attr('method');
//получаем адрес скрипта на сервере, куда нужно отправить форму
var m_action=$(this).attr('action');
//получаем данные, введенные пользователем в формате input1=value1&input2=value2...,
//то есть в стандартном формате передачи данных формы
var m_data=$(this).serialize();
$.ajax({
type: m_method,
url: m_action,
data: m_data,
success: function(result){

window.location = result;
}
});
});
});

</script>
	
	
	
	
	
	<!---------- ЗДЕСЬ НАЧИНАЮТСЯ КНОПКИ -------------->
<article  style="margin-top:20px;"width="100%" height="auto" >
	<article style="margin:0 auto;" width="50%" height="auto" >
	
	
	

	
	<article width="25%" style="margin:0 auto;float:left" height="auto">
<!--<iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fresu.me&layout=button_count&mobile_iframe=true&width=116&height=20&appId" width="116" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
 </article> 

 Put this script tag to the place, where the Share button will be -->
<!--
<article width="25%" style="margin:0 auto;float:right " height="auto">
<script type="text/javascript"><!--
document.write(VK.Share.button('resu.me',{type: "round", text: "Поделиться"}));
</script>-->
</article>
</article>
   
	
	

		
</main>

</div>

</body>
</html>