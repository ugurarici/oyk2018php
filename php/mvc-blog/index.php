<?php

//	bu bir basit blog sistemidir

//	ancak temel akışını OOP mantığıyla kurmak istiyoruz

//	temel işlemleri, talebi karşılayıp yanıt vereceğimiz alanda (MVC'de controller'a denk alan) belirli sınıflardan türetilmiş objeler ve bu objelerin yeteneğini kullanmamız gerekmekte

function __autoload($className)
{
	if(file_exists("models/".$className.".php"))
		require_once "models/".$className.".php";
	elseif(file_exists("controllers/".$className.".php"))
		require_once "controllers/".$className.".php";
}

$action = "homepage";

if(isset($_GET['a'])) {
	if( method_exists('MainController',$_GET['a']) ) {
		$action = $_GET['a'];
	}
}

MainController::$action();





