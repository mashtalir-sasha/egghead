<?
if(isset ($_POST['title'])) {$title=$_POST['title'];}
if(isset ($_POST['name'])) {$name=$_POST['name'];}
if(isset ($_POST['phone'])) {$phonenum=$_POST['phone'];}

$to = "eggheadschool@gmail.com";

$message = "Форма: $title <br><br>";
if ( $page || $name || $phonenum ) {
	$message .= ""
		. ( $name ?" І'мя:  $name <br>" : "")
		. ( $phonenum ?" Телефон:  $phonenum <br>" : "");
}

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= 'From: "Заявки з сайту" <no-reply@eggheadschool.com.ua>';

if (!$title || !$phonenum) {
} else {
	mail($to,"New lead(eggheadschool.com.ua)",$message,$headers);
}