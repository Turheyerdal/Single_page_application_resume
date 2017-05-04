<?php

include "mpdf60/mpdf.php";

function translit($str, $fix_umlauts=false) {
    // Установить опции и кодировку регулярных выражений
    mb_regex_set_options('pd');
    mb_internal_encoding('UTF-8');
 
    // Привести строку к UTF-8
    if (strtolower(mb_detect_encoding($str,
        'utf-8, windows-1251'))=='windows-1251') {
        $str=mb_convert_encoding($str, 'utf-8', 'windows-1251');
    }
    // Регулярки для удобства
    $regexp1='(?=[A-Z0-9А-Я])';
    $regexp2='(?<=[A-Z0-9А-Я])';
 
    // Массивы для замены заглавных букв, идущих последовательно
    $rus=array(
        '/(Ё'.$regexp1.')|('.$regexp2.'Ё)/u',
        '/(Ж'.$regexp1.')|('.$regexp2.'Ж)/u',
        '/(Ч'.$regexp1.')|('.$regexp2.'Ч)/u',
        '/(Ш'.$regexp1.')|('.$regexp2.'Ш)/u',
        '/(Щ'.$regexp1.')|('.$regexp2.'Щ)/u',
        '/(Ю'.$regexp1.')|('.$regexp2.'Ю)/u',
        '/(Я'.$regexp1.')|('.$regexp2.'Я)/u'
    );
 
    $eng=array(
        'YO','ZH','CH','SH','SCH','YU','YA'
    );
 
    // Заменить заглавные буквы, идущие последовательно
    $str=preg_replace($rus,$eng,$str);
 
    // Массивы для замены одиночных заглавных и строчных букв
    $rus=array(
        '/а/u','/б/u','/в/u','/г/u','/д/u','/е/u','/ё/u',
        '/ж/u','/з/u','/и/u','/й/u','/к/u','/л/u','/м/u',
        '/н/u','/о/u','/п/u','/р/u','/с/u','/т/u','/у/u',
        '/ф/u','/х/u','/ц/u','/ч/u','/ш/u','/щ/u','/ъ/u',
        '/ы/u','/ь/u','/э/u','/ю/u','/я/u',
 
        '/А/u','/Б/u','/В/u','/Г/u','/Д/u','/Е/u','/Ё/u',
        '/Ж/u','/З/u','/И/u','/Й/u','/К/u','/Л/u','/М/u',
        '/Н/u','/О/u','/П/u','/Р/u','/С/u','/Т/u','/У/u',
        '/Ф/u','/Х/u','/Ц/u','/Ч/u','/Ш/u','/Щ/u','/Ъ/u',
        '/Ы/u','/Ь/u','/Э/u','/Ю/u','/Я/u'
    );
 
    $eng=array(
        'a','b','v','g','d','e','yo',
        'zh','z','i','y','k','l','m',
        'n','o','p','r','s','t','u',
        'f','h','c','ch','sh','sch','',
        'i','','e','yu','ya',
 
        'A','B','V','G','D','E','Yo',
        'Zh','Z','I','Y','K','L','M',
        'N','O','P','R','S','T','U',
        'F','H','C','Ch','Sh','Sch','',
        'I','','E','Yu','Ya'
    );
 
    // Заменить оставшиеся заглавные и строчные буквы
    $str=preg_replace($rus,$eng,$str);
 
    // Исправление умляутов и других надсимвольных значков
    if ($fix_umlauts) {
        $str=preg_replace('/&(.)(tilde|uml);/',"$1",
             mb_convert_encoding($str,'HTML-ENTITIES','utf-8'));
    }
 
    return $str;
}



$second_name = $_POST['second_name'];
$name = $_POST['name'];
$mail = $_POST['mail'];
$data_r = $_POST['data_r'];
$country = $_POST['country'];
$city = $_POST['city'];
$street = $_POST['street'];
$mobile = $_POST['mobile'];
$dop_tel = $_POST['dop_tel'];
$site = $_POST['site'];
$levelpc = $_POST['levelpc'];
$navikipc = $_POST['navikipc'];
$colledge = $_POST['colledge'];
$univer = $_POST['univer'];
$opit = $_POST['opit'];
$diploms = $_POST['diploms'];
$yourself = $_POST['yourself'];



$latin_name = translit($name);
$latin_second_name = translit($second_name);



	
	
	
	

$file_html =" 

			 <hr height=5 noshade style=background-color:black width=250px/> 
			 <article class=center>
				 <article class=left>
					 <h2 class=txt>". $second_name ."</h2> 
					 <h2 class=txt>". $name ."</h2> 
					 <p  class=txt>".$mail."</p>
					 <p  class=txt>".$data_r."</p>
				 </article>
				  <article class=right>
					 <img src=images/ava.png>
				 </article>
			 </article>
			 <hr height=5 noshade style=background-color:black width=250px/>
			 
			 <article class=center>
				 <article class=left>
						<h2 class=txt>Место проживания</h2>
						<p 	class=txt>".$country."</p>
						<p 	class=txt>".$city."</p>
						<p>".$street."</p>
				 </article>
				 
				 <article class=right>
					 <h2 class=txt>Телефоны</h2>
					 <p  class=txt>".$mobile."</p>
					 <p  class=txt>".$dop_tel."</p>
					 <p  class=txt>".$site."</p>
				 </article>
			 
			 </article>
			 
				 <article class=center>
					 <article class=left>
						<h2>Уровень владения ПК</h2>
						<p>".$levelpc."</p>  
						<div class=text>".$navikipc."</div>
					 </article>
					 
					 <article class=right>
						 <h2>Образование</h2>
				 <div class=text>".$colledge."</div>
				 <div class=text>".$univer."</div>
					 </article>
			 
			     </article>
			 
			 <hr height=5 noshade style=background-color:black width=250px/></div> 
			 
			 <article class=center>
				 <article class=left>
				 <h2>Опыт работы</h2>
				 <div class=text>".$opit."</div>
				 </article>
				 <article class=right>
					<h2>Дипломы</h2>
			 <div class=text>".$diploms."</div>
			
				 </article>
			</article>
			 
			<article class=center>
			
			<article class=left>
			 <h2>О себе</h2>
			 <div class=text>".$yourself."</div>
			
			</article>
			</article>									";
		




$unique_file_name	= "resume_of_" . $latin_second_name. "_" . $latin_name . "_" . strval(time()) ;
$html_file_path = "htmls/" . $unique_file_name . ".html";
$pdf_file_path = "pdfs/" . $unique_file_name . ".pdf";		
$pdf_file_output = "htmls/pdfs/" . $unique_file_name . ".pdf";		
		


	
	
$my_page_of_html = "
<head>
<meta charset=UTF-8>
<link media=screen rel=stylesheet type=text/css href= 'style.css'>
</head>
<title>
Resume_of_".$unique_file_name."
</title>

<body style=background-color:#F6F6F6;>
<div class=center-block-main resume>

<main style=box-shadow: 2px 0px 42px -12px #000000;>
	
	
<article class=center>	
    	<article class=left >
			  <hr class= fio_hr>
			<ul class=fio>
			<li class=fname><h1>". $second_name ."</h1></li>
			<li class=fname><h1>". $name ."</h1> </li>
			<li class=email_string>". $mail ."</li>
			<li class=data_string>". $data_r ."</li>
             </ul>
			
			<hr class=fio_hr>
		</article>	
<article class=right>
		<article class=ava>
    <img src=images/ava.png class=comapnyLogo  data-type=editable alt=image />
  </article>
	</article>
</article>


<div class=clrfix></div>
            
<article class=center middle>			
	<article class=left>
		  <h1 class=header left_side_line>Место проживания</h1>
			<ul class=fio geoloc>
			<li class=data_string>". $country ."</li>
			<li class=data_string>". $city ."</li>
			<li class=data_string>". $street ."</li>
			</ul>

	</article>
    
<article class=right>
			<h1 class=header left_side_line>Телефоны</h1>
			
			<ul class=fio geoloc>
				<li class=data_string>". $mobile ."</li>
				<li class=data_string>". $dop_tel ."</li>
				<li class=data_string>". $site ."</li>
			</ul>
</article>	
	
	
	</article>
	
	<div class=clrfix></div>
<article class=center middle>
	<article class=left>
			<h1 class=header left_side_line >Уровень владения ПК</h1>
			<ul class=fio data_string>
			<li>". $levelpc ."</li>
			</ul>
			<div class=lvl_pc>". $navikipc ."</div>
</article>
	
	<article class=right>
    
	
	<h1 class= header left_side_line>Образование</h1>
		<div class=lvl_pc>". $colledge ."</div><br>
		<div class=lvl_pc>". $univer ."</div>	
	
	</article>
	
	</article>
	
	
	    
	
	
	<div class=clrfix></div>
	
	<article class=center middle>
	
	<article class=left>
	<h1 class=header left_side_line >Опыт работы</h1>
			<div class=lvl_pc>". $opit ."</div>
		       
	
	
	</article>
		
		<article class=float_left>
		<article class=right>
	
			<h1 class=header left_side_line>Дипломы|Сертификаты</h1>
			<div class=lvl_pc>". $diploms ."</div>
	</article> 
		</article>
	

	
	
	</article>
        
	
	
	
	<article class=center middle>
	<article class=left>
			<h1 class=header left_side_line>О себе</h1>
				<div class=lvl_pc>". $yourself ."</div>
		</article>
		
		<hr color=black size=1 style=margin-top:40px; noshade align=left width=85%>
	
    </article>
	
<div id = parent_popup>

<div id=popup>



<script type=text/javascript>
           
		   function getUrlVars() {
				var vars = {};
				var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
				vars[key] = value;
				});
				return vars;
}
		   
		  var id_page = getUrlVars()['id'];
if(!window.id_page){
	change();
	
}		  
		   function change(){
		   document.getElementById('parent_popup').style.display = 'none';
		   }
            </script>

<p  align=center style=cursor:pointer onclick= change()>Закрыть</p>



<ul style=list-style-type:none>

<li align=center> 

</li>
<li align=center><a href=". $pdf_file_path ." download>Скачать pdf</a></li>


</ul>

</div>
	</div>
	
	


	
</main>
</div>
	</body>
	



";



file_put_contents($html_file_path, $my_page_of_html);

$id = strval(time());
$mpdf = new mPDF();
$stylesheet = file_get_contents('htmls/style2.css');

$mpdf->WriteHTML($stylesheet,1);
$mpdf->WriteHTML($file_html);
$mpdf->Output($pdf_file_output,'F');

echo("http://localhost/resume/".$html_file_path."?id=".$id);
exit();


?>
